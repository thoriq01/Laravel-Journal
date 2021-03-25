<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Alamat;
use App\Models\Rekening;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jmlPegawai = Customer::count();
        $datas = DB::table('customer')
            ->select('customer.namaCustomer', 'customer.fotoCustomer', 'customer.telponCustomer', 'customer.emailCustomer', 'rekening.nomorRekening', 'rekening.namaBank', 'alamat.*')
            ->join('rekening', 'customer.id', '=', 'rekening.customer_id')
            ->join('alamat', 'customer.id', '=', 'alamat.customer_id')
            ->get();
        return view('welcome', ['datas' => $datas, 'jumlahPegawai' => $jmlPegawai]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fotoCustomer'=>'required'
        ]);

        // dd($data,$alamat1,$rekening1);
        $dataID = Customer::count('id');
        $foto = $request->file('fotoCustomer');
        $nama = 'foto' . $dataID .'.'.$foto->getClientOriginalExtension();
        $foto->move(public_path('storage'),$nama);
        $data1 = Customer::create([
            'namaCustomer'=>$request->namaCustomer,
            'emailCustomer'=>$request->emailCustomer,
            'telponCustomer'=>$request->telponCustomer,
            'fotoCustomer'=>$nama]);
        $data1->alamatRelation()->create($request->all());
        $data1->RekeningRelation()->create($request->all());
        return back();
        // dd($data1);        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {

        $data = Customer::find($customer->id);
        $data->update($request->only('namaCustomer', 'emailCustomer', 'telponCustomer'));
        Alamat::find($customer->id)->update($request->except('_method', '_token'));
        Rekening::find($customer->id)->update($request->except('_method', '_token'));
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        File::delete(public_path('storage').'/'.$customer->fotoCustomer);
        $customer->delete();
        $customer->alamatRelation()->delete();
        $customer->RekeningRelation()->delete();
        return back();
    }
}
