
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
                    <h3 class="text-center">Registrasi</h3>
                </div>
                <form action="/register" method="post" enctype="multipart/form-data">
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
                          <label for="name">Nama</label>
                          <input type="text"
                          class="form-control @error('name') is-invalid @enderror"
                          id="name" name="name" value="{{ old('name') }}">
                          @error('name')
                            <div class="text-danger">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email"
                          class="form-control @error('email') is-invalid @enderror"
                          id="email" name="email" value="{{ old('email') }}">
                          @error('email')
                            <div class="text-danger">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password"
                          class="form-control @error('password') is-invalid @enderror"
                          id="password" name="password" value="{{ old('password') }}">
                          @error('password')
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
