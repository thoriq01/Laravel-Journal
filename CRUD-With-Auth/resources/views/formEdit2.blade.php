<div class="modal fade myModalBs1" id="myModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Form Add Customer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('customer.update',$data->id)}}" method="POST" id="myForm1" class="myForm1">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <div class="text-primary my-2">
                            <h5> Info Customer </h5>
                        </div>
                        <label for="">Nama Customer</label>
                        <input type="text" readonly name="namaCustomer" value="{{$data->namaCustomer}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <label for="">Telpon Customer</label>
                        <input type="number" readonly name="telponCustomer" id="" class="form-control" value="{{$data->telponCustomer}}" placeholder="" aria-describedby="helpId">
                        <label for="">Email Customer</label>
                        <input type="text" readonly name="emailCustomer" id="" class="form-control" placeholder="" value="{{$data->emailCustomer}}" aria-describedby="helpId">
                        <div class="text-primary my-2">
                            <h5> Info Alamat </h5>
                        </div>
                        <label for="">Jalan</label>
                        <input type="text" name="jalan" readonly value="{{$data->jalan}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <div class="row">
                            <div class="col-6">
                                <label for="">RT</label>
                                <input type="number" readonly name="rt" value="{{$data->rt}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="col-6">
                                <label for="">RW</label>
                                <input type="number" name="rw" readonly value="{{$data->rw}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="">Kota</label>
                                <input type="text" name="kota"  value="{{$data->kota}}" readonly id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="col-6">
                                <label for="">Provinsi</label>
                                <input type="text" name="provinsi" id="" value="{{$data->provinsi}}" readonly class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                        </div>
                        <div class="text-primary my-2">
                            <h5> Info Rekening </h5>
                        </div>
                        <select name="namaBank" id="" class="form-control" aria-readonly="">
                            <option value="{{ $data->namaBank}}" default >{{$data->namaBank == 'BCA' ? 'Bank Central Asia' : ($data->namaBank == 'BRI' ? 'Bank Republik Indonesia' : ('Bank Nasional Indonesia' )) }}</option>
                            <option value="BCA">Bank Central Asia</option>
                            <option value="BRI">Bank Republik Indonesia</option>
                            <option value="BNI">Bank Nasional Indonesia</option>                        
                        </select>
                        <label for="">Nomor Rekening</label>
                        <input type="number" value="{{$data->nomorRekening}}" readonly name="nomorRekening" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <button id="myButton1" type="button" class="btn btn-warning myButton1"> Edit </button>
                    <button data-dismiss="modal" type="button" class="btn btn-primary "> Back </button>
                </form>
            </div>
        </div>
    </div>
</div>
