
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="col-md-4 offset-md-4 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Isi hasil Tani</h3>
                </div>
                <form action="{{ route('hasil.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        @if (session('errors'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                Something it's wrong:
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="form-group">
                          <label for="nama_hasil">Nama Sayur</label>
                          <input type="text"
                          class="form-control @error('nama_hasil') is-invalid @enderror"
                          id="nama_hasil" name="nama_hasil" value="{{ old('nama_hasil') }}">
                          @error('nama_hasil')
                            <div class="text-danger">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="tanggal_panen">Tanggal Panen</label>
                          <input type="date"
                          class="form-control @error('tanggal_panen') is-invalid @enderror"
                          id="tanggal_panen" name="tanggal_panen" value="{{ old('tanggal_panen') }}">
                          @error('tanggal_panen')
                            <div class="text-danger">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="alamat">Jumlah (Kg)</label>
                          <input type="text"
                          class="form-control @error('jumlah') is-invalid @enderror"
                          id="jumlah" name="jumlah" value="{{ old('jumlah') }}">
                          @error('jumlah')
                            <div class="text-danger">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="asal_sawah">Asal sawah</label>
             <select class="form-control" name="asal_sawah" id="asal_sawah">
            <option value="Sukun"
            {{ old('asal_sawah')=='Sukun' ? 'selected': '' }} >
            Sukun
            </option>
            <option value="Pandanwangi"
            {{ old('asal_sawah')=='Pandanwangi' ? 'selected': '' }} >
            Pandanwangi
            </option>
            <option value="Sukoharjo"
            {{ old('asal_sawah')=='Sukoharjo' ? 'selected': '' }} >
            Sukoharjo
            </option>
            <option value="Batu"
            {{ old('asal_sawah')=='Batu' ? 'selected': '' }} >
            Batu
            </option>
          </select>
          @error('asal_sawah')
            <div class="text-danger">{{ $message }}</div>
          @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-block">Kirim</button>
                        <p class="text-center"> <a href="{{ route('hasil.index') }}">Kembali</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
