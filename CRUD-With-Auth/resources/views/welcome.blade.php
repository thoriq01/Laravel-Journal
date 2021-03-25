<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.colVis.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.myButton').on('click', function() {
        $('.myForm input').removeAttr('readonly', 'readonly');
        $(this).text('Simpan Data').on('click', function() {
          $(this).attr('type', 'submit');
        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      $('.myModalBs').on('hidden.bs.modal', function() {
        $('.myForm :input').attr('readonly', true);
        $('.myButton').html('Edit')
      })
    });
  </script>
  <script>
    var loadFile1 = function(event) {
      var reader = new FileReader();
      reader.onload = function() {
        var output = document.getElementById('myImg2');
        output.src = reader.result;
      };
      reader.readAsDataURL(event.target.files[0]);
    };
  </script>
  <script>
    var loadFile = function(event) {
      var reader = new FileReader();
      reader.onload = function() {
        var output = document.getElementById('myImg1');
        output.src = reader.result;
      };
      reader.readAsDataURL(event.target.files[0]);
    };
  </script>
  <script>
    $(document).ready(function() {
      $('.myButton1').on('click', function() {
        $('.myForm1 input').removeAttr('readonly');
        $(this).text('Simpan Data').on('click', function() {
          $(this).attr('type', 'submit');
        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      $('.myModalBs1').on('hidden.bs.modal', function() {
        $('.myForm1 :input').attr('readonly', true);
        $('.myButton1').html('Edit')
      })
    });
  </script>
  <script>
    $(document).ready(function() {
      $("#myTab li:eq(0) a").tab('show'); // show 2nd tab on page load
    });
  </script>
  <script>
    $(document).ready(function() {
      $('#example').DataTable({
        paging: false,
        dom: 'Bfrtip',
        buttons: [
          'excel', 'pdf',

        ]
      })
    })
  </script>
  </script>
</head>

<body>
  <div class="container">
    <div class="container-fluid">
      <div class="row px-3">
        <div class="col-md-12 d-flex justify-content-between mt-3  px-4 rounded" style="box-shadow:1px 1px 4px 1px #cfcfcf;background-color:#f2f2f2;">
          <div class="align-middle mt-3">
            <p class="text"> <i class="fa fa-user-circle text-primary" aria-hidden="true"></i> {{$jumlahPegawai}} Pegawai</p>
          </div>
          <div>
            <p class="mt-3"> <i class="fa fa-info-circle text-danger" aria-hidden="true"></i> Rp. 250 T Gaji Yang Belum Dibayar</p>
          </div>
          @if(Auth::check())
          <div class="text-right mt-2">
            <a class="btn text-secondary mr-2"> {{auth()->user()->name}} </a>
            <a href="/logout" class="text-primary"> Logout </a>
          </div>
          @else
          <div class="text-right mt-2">
            <a href="{{route('login')}}" name="login" class="btn text-secondary mr-2"> Login </>
              <a class="text-primary"> </a>
          </div>
          @endif
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-12">
          <div class="bs-example">
            <ul class="nav nav-tabs" id="myTab">
              <li class="nav-item">
                <a href="#home" class="nav-link" data-toggle="tab">Switch To Cards</a>
              </li>
              <li class="nav-item">
                <a href="#profile" class="nav-link" data-toggle="tab">Switch To Table</a>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade" id="home">
                <div class="row mt-3">
                  <div class="col-md-12">
                    <button class="btn btn-primary my-3" data-toggle="modal" data-target="{{ Auth::check() ? '#modelId' : '#modelId0' }}"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</button>
                  </div>
                  @include('formAdd')
                  @foreach($datas as $data)
                  @if($data !== null )
                  <div class="col-md-3 my-2">
                    <div class="card" style="box-shadow:1px 1px 4px 1px #cfcfcf;">
                      <img class="card-img-top" height="150px" src="{{$data->fotoCustomer != null || $data->fotoCustomer !='' ? url('/storage/'.$data->fotoCustomer) : 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png' }}" alt="">
                      <div class="card-body">
                        <p class="card-title"><strong>{{ isset($data->namaCustomer) ? $data->namaCustomer : 'Data Kosong' }} </strong></p>
                        <i class="fa fa-map-marker text-danger" aria-hidden="true"></i> {{$data->kota}}
                        <p class="card-text text-primary"><i class="fa fa-phone-square" aria-hidden="true"></i> {{$data->telponCustomer}}</p>
                        @auth
                        <form action="{{route('customer.destroy',$data->id)}}" method="POST">
                          <button type="button" data-toggle="modal" data-target="#myModel{{$data->id}}" class="btn btn-light border-secondary"> <i class="fa fa-edit" aria-hidden="true"></i> Edit</button>
                          @csrf
                          @method('delete')
                          <button type="submit" class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i></button>
                        </form>
                        @include('formEdit')
                        @endauth
                      </div>
                    </div>
                  </div>
                  @else
                  <div class="col-md-12 d-flex justify-content-center">
                    <div class="card mt-5" style="box-shadow:1px 1px 4px 1px #cfcfcf;">
                      <div class="card-body text-center">
                        <i class="fa fa-info-circle text-warning" style="font-size: 60px;" aria-hidden="true"></i>
                        <br>
                        <h5 class="mt-3">Data Tidak Ada !</h5>
                        <h6>Silahkan Tambah Data</h6>
                      </div>
                    </div>
                  </div>
                  @endif
                  @endforeach
                </div>
              </div>
              <div class="tab-pane fade" id="profile">
                <button class="btn btn-warning my-3" data-toggle="modal" data-target="{{ Auth::check() ? '#modelId2' : '#modelId3' }}"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</button>
                @include('formAdd1')
                <table class="table" id="example">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th><i class="fa fa-phone text-danger" aria-hidden="true"></i> No Telpon</th>
                      <th>No Rekening</th>
                      <th>Alamat</th>
                      @auth
                      <th>Setting <i class="fa fa-cog text-primary" aria-hidden="true"></i></th>
                      @endauth
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $no = 1
                    @endphp
                    @foreach($datas as $data)
                    <tr>
                      <td scope="row">{{$no++}}</td>
                      <td>{{ isset($data->namaCustomer) ? $data->namaCustomer : 'Data Kosong'}} </td>
                      <td>{{$data->emailCustomer}}</td>
                      <td>{{$data->telponCustomer}}</td>
                      <td>{{$data->nomorRekening}}</td>
                      <td> <button class="btn border-secondary"> <i class="fa fa-eye" aria-hidden="true"></i> Lihat Alamat </button> </td>
                      @auth
                      <td>
                        <form action="{{route('customer.destroy',$data->id)}}" method="POST">
                          <button type="button" data-toggle="modal" data-target="#myModal{{$data->id}}" class="btn btn-light border-warning text-primary"><i class="fas fa-edit"></i></button>
                          @csrf
                          @method('delete')
                          <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                        </form>
                      </td>
                      @endauth
                    </tr>
                    @include('formEdit2')
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
</body>

</html>