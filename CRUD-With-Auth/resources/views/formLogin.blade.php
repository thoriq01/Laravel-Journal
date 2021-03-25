<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center mt-5">
                <div class="card col-md-4 p-3 rounded" style="box-shadow: 1px 2px 4px 0px gray;">
                    <div class="text-title text-center my-2">
                        <h5 class="text-primary">Form Login User</h5>
                    </div>
                    @if(Session::has('success'))
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>{{Session::get('success')}} !</strong>
                    </div>
                    @endif
                    @if(Session::has('message'))
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>{{Session::get('message')}} !</strong>
                    </div>
                    @endif
                    <div class="alert alert-info" role="alert">
                        <strong>Karena Aplikasi Masih Beta Test!</strong>
                        <br>
                        username  : admin12
                        <br>
                        password  : test
                    </div>
                    <form action="{{route('login')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="username" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            <label for="">Password</label>
                            <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Login </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>