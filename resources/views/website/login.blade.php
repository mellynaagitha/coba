<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="col-md-4 offset-md-4 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Form Login</h3>
                </div>
                <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="card-body">
                    @if (Session::has('sukses'))
                        <div class="alert alert-success">
                            {{ Session::get('sukses') }}
                            {{ Session::forget('sukses') }}
                        </div>
                    @endif
                    @if (Session::has('berhasilUbahAdmin'))
                        <div class="alert alert-success">
                            {{ Session::get('berhasilUbahAdmin') }}
                            {{ Session::forget('berhasilUbahAdmin') }}
                        </div>
                    @endif
                    @if (Session::has('error'))
                        <div class="alert alert-danger">
                            {{ Session::get('error') }}
                            {{ Session::forget('error') }}
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="email"><strong>Email</strong></label>
                        <input type="text" id="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="pw"><strong>Password</strong></label>
                        <input type="password" id="pw" name="password" class="form-control" placeholder="Password" required>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-block">Log In</button>
                    <p class="text-center">Belum punya akun? <a href="{{ route('register') }}">Register</a> sekarang!</p>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>