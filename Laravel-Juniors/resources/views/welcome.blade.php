<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- Styles -->
</head>

<body class="antialiased bg-light">
    <div class="container wrapper">
        <div class="container-fluid">
            <div class="d-flex justify-content-center align-items-center" style="height: 500px;">
                <div class="col-md-4 mt-5">
                    @if(Session::has('success'))
                    <div class="alert alert-success alert-dismissible ">
                        <p>{{Session::get('success')}}</p>
                    </div>
                    @elseif(Session::has('error'))
                    <div class="alert alert-danger alert-dismissible ">
                        <p>{{Session::get('error')}}</p>
                    </div>
                    @endif
                    <div class="card align-middle border-left-0 border-right-0 border-bottom-0 border-info">
                        <div class="card-body">
                            <div class="text text-center text-info">
                                <h5 class="text-title">Login Form</h5>
                            </div>
                            <div class="form-group">
                                <form method="POST" action="{{route('postLogin')}}">
                                    @csrf
                                    <div class="form-group">
                                        <div class="form-label">
                                            Username
                                        </div>
                                        <div class="">
                                            <input type="text" name="username" value="{{(isset($_COOKIE['loginUser'])) ? $_COOKIE['loginUser'] : old('username') }}" class="form-control" required />
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="form-label">
                                            Password
                                        </div>
                                        <div class="">
                                            <input id="password" type="password" name="password" value="{{(isset($_COOKIE['loginUser'])) ? $_COOKIE['loginUser'] : old('password') }}" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="d-flex justify-content-between">
                                            <input type="checkbox" name="remember"> Ingat Saya
                                            <input id="check" type="checkbox" onclick="myFunction()"> Show Password
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" style="width: 100%;" class="btn btn-info">Submit</button>
                                    </div>
                                </form>
                                <div class="form-group row">

                                    <div class="col-md-6 col-lg-6">
                                        <a href="{{route('createUser')}}" class="btn btn-success" style="width: 100%;" href=""><i class="bi bi-node-plus"></i> Daftar Baru</a>
                                    </div>

                                </div>
                                <p class="text-center border-top">atau login dengan</p>
                                <div class="form-group">
                                    <button type="submit" style="width: 50%;" class="btn btn-primary"><i class="bi bi-facebook"></i> Facebook</button>

                                    <button type="submit" style="width: 48%;" class="btn btn-outline-danger"><i class="bi bi-google"></i> Google</button>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
    function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
</body>


</html>