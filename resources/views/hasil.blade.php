<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
	@extends('layout.master')
	@section('menuLayanan','active')
	@section('title','Data Hasil tani')
	@section('content')
    @if (session()->has('pesan'))
        <div class="alert alert-success">
            {{session()->get('pesan')}}
        </div>
    @endif
				<div class="table100 ver2 m-b-110">
					<table data-vertable="ver2">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1">Nama Sayur</th>
								<th class="column100 column2" data-column="column2">Tanggal Panen</th>
								<th class="column100 column3" data-column="column3">Jumlah</th>
								<th class="column100 column4" data-column="column4">Asal Sawah</th>
                                <th class="column100 column4" data-column="column4">Aksi</th>
							</tr>
						</thead>
						<tbody>

						</tbody>
						<tbody>
							<tr class="row100">
								@foreach ($hasil as $hsl)
								<tr>

									<td class="py-3">{{ $hsl->nama_hasil }}</td>
									<td class="py-3">{{ $hsl->tanggal_panen }}</td>
									<td class="py-3">{{ $hsl->jumlah }} Kg</td>
									<td class="py-3">{{ $hsl->asal_sawah }}</td>


                                <td><a class="btn btn-primary"href="/nandur/public/hasils/edit/{{ $hsl->id }}">Ubah</a>|
									<a href="/nandur/public/hasils/hapus/{{$hsl->id}}" class="btn btn-danger">Hapus</a></td>
							</tr>
							@endforeach

						</tbody>
					</table>
					<p class="text-center"> <a class="btn btn-success"href="{{ route('hasil.create') }}">Tambah Data</a>
					</p>
				</div>
				@endsection
			</body>
