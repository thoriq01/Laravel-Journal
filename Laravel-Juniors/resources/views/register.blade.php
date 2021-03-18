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
<div class="container">
    <div class="container-fluid">
        <div class="col-md-4">
            <div class="form-group">
                <form method="POST" action="{{route( 'createUser')}}">
                    @csrf
                    <div class="form-group">
                        <div class="form-label">
                            Username
                        </div>
                        <div class="">
                            <input type="text" name="username" class="form-control" required />
                        </div>

                    </div>
                    <div class="form-group">
                        <div class="form-label">
                            Password
                        </div>
                        <div class="">
                            <input id="password" type="password" name="password" class="form-control" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label">
                            Name
                        </div>
                        <div class="">
                            <input id="text" type="text" name="name" class="form-control" required />
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="d-flex justify-content-between">
                            <input id="check" type="checkbox" onclick="myFunction()">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" style="width: 100%;" class="btn btn-info">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>