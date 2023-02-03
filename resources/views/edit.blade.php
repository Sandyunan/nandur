<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Ubah data</title>
</head>

<body>

    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-8 col-xl-6">
                <h1>Ubah data</h1>
                <hr>
                @foreach($hasils as $hsl)
                <form action="/nandur/public/hasils/update" method="POST">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <input type="hidden" name="id" value="{{ $hsl->id }}"> <br/>
                        <label for="nama_hasil">Nama Hasil</label>
                        <input type="text" class="form-control @error('nama_hasil') is-invalid @enderror" id="nama_hasil" name="nama_hasil"
                            value="{{ old('nama_hasil') ?? $hsl->nama_hasil }}">
                        @error('nama_hasil')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tanggal_panen">Tanggal Panen</label>
                    <input type="date" class="form-control @error('tanggal_panen') is-invalid @enderror" id="tanggal_panen" name="tanggal_panen"
                            value="{{ old('tanggal_panen') ?? $hsl->tanggal_panen }}"></div>

                            <div class="form-group">
                                <label for="jumlah">Jumlah (Kg)</label>
                            <input type="text" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" name="jumlah"
                                    value="{{ old('jumlah') ?? $hsl->jumlah }}"></div>

                    <div class="form-group">
                            <label for="asal_sawah">Asal sawah</label>
                                            <select class="form-control" name="asal_sawah" id="asal_sawah" >

                                            <option value="Sukun"
                                            {{ old('asal_sawah')=='Sukun' }} >
                                            Sukun
                                            </option>
                                            <option value="Pandanwangi"
                                            {{ old('asal_sawah')=='Pandanwangi' }} >
                                            Pandanwangi
                                            </option>
                                            <option value="Sukoharjo"
                                            {{ old('asal_sawah')=='Sukoharjo' }} >
                                            Sukoharjo
                                            </option>
                                            <option value="Batu"
                                            {{ old('asal_sawah')=='Batu' }} >
                                            Batu
                                            </option>
                                            </select>
                                        </div>

                           <br><div class="form-group"> <button type="submit" class="btn btn-primary mb-2">Update</button>
                            <a href="{{ route('hasil.index') }}" class="btn btn-secondary mb-2">Kembali</a>
                        </div>
                </form>
                @endforeach
            </div>
        </div>
    </div>

</body>

</html>
