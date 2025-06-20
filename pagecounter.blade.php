@extends('template')

@section('content')
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Poppins', sans-serif;
        }
        .judul {
            background-color: #e9ecef;
            border: 1px solid #d9dcdf;
            padding: 30px;
            font-size: 20px;
            width: 100%;
            margin-bottom: 20px;
        }
        .box {
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            padding: 20px;
            font-size: 20px;
            color: #155724;
            width: 100%;
        }
    </style>

    <div class="judul">5026231019 - NATHANIEL LADO HADI WINATA</div>
    <div class="box">Anda Pengunjung ke : {{ $jumlah }}</div>
@endsection
