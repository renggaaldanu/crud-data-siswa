<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Belajar Laravel</title>
</head>
<style>
    /* Definisi kelas gaya */
    .table-primary {
        background-color: #007bff; /* Biru */
        color: #fff; /* Putih */
    }

    .table-secondary {
        background-color: #6c757d; /* Abu-abu */
        color: #fff; /* Putih */
    }

    .table-success {
        background-color: #28a745; /* Hijau */
        color: #fff; /* Putih */
    }

    .table-danger {
        background-color: #dc3545; /* Merah */
        color: #fff; /* Putih */
    }

    .table-warning {
        background-color: #ffc107; /* Kuning */
        color: #212529; /* Hitam */
    }

    .table-info {
        background-color: #17a2b8; /* Biru Muda */
        color: #fff; /* Putih */
    }

    .table-light {
        background-color: #f8f9fa; /* Abu-abu Muda */
        color: #212529; /* Hitam */
    }

    .table-dark {
        background-color: #343a40; /* Abu-abu Gelap */
        color: #fff; /* Putih */
    }
</style>
<body>
<div>
@extends('layouts.app')
@section('content')
    <h1>Daftar Siswa RPL SMKN 2 Trenggalek</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th class="table-dark">NIS</th>
            <th class="table-dark">Nama</th>
            <th class="table-dark">Alamat</th>
            <th class="table-dark">Foto</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="table-dark">123456</td>
            <td class="table-dark">Satio</td>
            <td class="table-dark">Jl. Raya No. 123, Trenggalek</td>
            <td class="table-dark"><img src="Satrio.jpg" alt="" width="100px"></td>
        </tr>
        <tr>
            <td class="table-dark">234567</td>
            <td class="table-dark">Mige</td>
            <td class="table-dark">Jl. Manggis No. 45, Trenggalek</td>
            <td class="table-dark"><img src="Mige.jpg" alt="" width="100px"></td>
        </tr>
        <tr>
            <td class="table-dark">345678</td>
            <td class="table-dark">Nikolas</td>
            <td class="table-dark">Jl. Anggrek No. 67, Trenggalek</td>
            <td class="table-dark"><img src="Nikolas.jpg" alt="" width="100px"></td>
        </tr>
        <tr>
            <td class="table-dark">456789</td>
            <td class="table-dark">Prasetya</td>
            <td class="table-dark">Jl. Melati No. 89, Trenggalek</td>
            <td class="table-dark"><img src="Prass.jpg" alt="" width="100px"></td>
        </tr>
        <tr>
            <td class="table-dark">567890</td>
            <td class="table-dark">Nandito</td>
            <td class="table-dark">Jl. Mawar No. 101, Trenggalek</td>
            <td class="table-dark"><img src="Nandito.jpg" alt="" width="100px"></td>
        </tr>
        <tr>
            <td class="table-dark">678901</td>
            <td class="table-dark">Kikik</td>
            <td class="table-dark">Jl. Kamboja No. 112, Trenggalek</td>
            <td class="table-dark"><img src="Kikik.jpg" alt="" width="100px"></td>
        </tr>
        <tr>
            <td class="table-dark">789012</td>
            <td class="table-dark">Yudi</td>
            <td class="table-dark">Jl. Pala No. 123, Trenggalek</td>
            <td class="table-dark"><img src="Yudi.jpg" alt="" width="100px"></td>
        </tr>
        <tr>
            <td class="table-dark">890123</td>
            <td class="table-dark">Pipin</td>
            <td class="table-dark">Jl. Durian No. 134, Trenggalek</td>
            <td class="table-dark"><img src="Pipin.jpg" alt="" width="100px"></td>
        </tr>
        <tr>
            <td class="table-dark">901234</td>
            <td class="table-dark">Pirlo</td>
            <td class="table-dark">Jl. Pisang No. 145, Trenggalek</td>
            <td class="table-dark"><img src="Pirlo.jpg" alt="" width="100px"></td>
        </tr>
        <tr>
            <td class="table-dark">012345</td>
            <td class="table-dark">Nizar</td>
            <td class="table-dark">Jl. Salak No. 156, Trenggalek</td>
            <td class="table-dark"><img src="Nizar.jpg" alt="" width="100px"></td>
        </tr>
    </tbody>
</table>
@endsection
</div>
</body>
</html>
