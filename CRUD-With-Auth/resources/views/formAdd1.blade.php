<!-- Modal -->
<div class="modal fade" id="modelId2" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Form Add Customer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('customer.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="text-primary my-2">
                            <h5> Info Customer </h5>
                        </div>
                        <label for="">Nama Customer</label>
                        <input type="text" name="namaCustomer" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <label for="">Telpon Customer</label>
                        <input type="number" name="telponCustomer" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <label for="">Email Customer</label>
                        <input type="text" name="emailCustomer" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <div class="row my-3">
                            <div class="col-md-6">
                                <div class="custom-file">
                                    <img id="myImg1" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png" alt="" srcset="" width="100%" >
                                    <input type="file" name="fotoCustomer" onchange="loadFile(event)">
                                </div>
                            </div>
                        </div>
                        <div class="text-primary my-2">
                            <h5> Info Alamat </h5>
                        </div>
                        <label for="">Jalan</label>
                        <input type="text" name="jalan" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <div class="row">
                            <div class="col-6">
                                <label for="">RT</label>
                                <input type="number" name="rt" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="col-6">
                                <label for="">RW</label>
                                <input type="number" name="rw" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="">Kota</label>
                                <input type="text" name="kota" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="col-6">
                                <label for="">Provinsi</label>
                                <input type="text" name="provinsi" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                        </div>
                        <div class="text-primary my-2">
                            <h5> Info Rekening </h5>
                        </div>
                        <select name="namaBank" id="" class="form-control">
                            <option value="BCA">Bank Central Asia</option>
                            <option value="BRI">Bank Republik Indonesia</option>
                            <option value="BNI">Bank Nasional Indonesia</option>
                        </select>
                        <label for="">Nomor Rekening</label>
                        <input type="number" name="nomorRekening" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block"> Simpan Data </button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Button trigger modal -->
<div class="modal fade" id="modelId3" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">@include('formAdd')
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    @if(isset($_POST['login']))
                    Silahkan Login
                    @else
                    <strong class="text-danger"> Peringatan</strong>, Anda Belum Login!!
                    @endif
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="alert alert-info" role="alert">
                        <strong>Karena Aplikasi Masih Beta Test!</strong>
                        <br>
                        username : admin12
                        <br>
                        password : test
                    </div>
                    <div class="form-group">
                        <small id="helpId" class="text-danger">Username</small>
                        <input type="text" name="username" autocomplete=disable id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-danger my-2">Password</small>
                        <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <button type="submit" class="btn btn-danger mt-3 px-4"> <i class="fa fa-user-circle-o" aria-hidden="true"></i> Login</button>
                        <a href="#" class="btn btn-primary mt-3 px-4"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
