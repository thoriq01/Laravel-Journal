<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @component('mail::message')
    <h3>Halo {{$nama}}</h3>
    <br/>
    <h3>{{$isi}}</h3>
    @component('mail::button',['url'=>$url])
        <h3>Lihat Saya</h3>
    @endcomponent
    <br/>
    <p>Ini adalah email test yang digunakan untuk belajar</p>
    @endcomponent
</body>
</html>