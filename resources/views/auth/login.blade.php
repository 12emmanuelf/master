<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection</title>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="container-fluid">
    <div class="row">
        <!-- Colonne de gauche avec l'image -->
        <div class="col-md-6" style="background-image: url('{{ asset('img/livraison.jpg') }}'); background-size: cover; background-position: center; height: 100vh;"></div>

        <div class="col-md-6 d-flex align-items-center">
            <div class="container mt-5">
                <div class="card p-4 bg-info text-white">
                    <h2 class="text-center">Bienvenue!</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password" value="{{ old('password') }}" required autocomplete="current-password">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mx-auto text-center w-full sm:w-96 mt-4">
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe">
                                <label class="form-check-label" for="rememberMe">@lang('Remember Me')</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">@lang('se connecter')</button>

                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                            <a class="underline text-sm text-white dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                @lang('Forgot your password?')
                            </a>
                            @endif
                        </div>
                    </form>
                </div>
        </div>
    </div>

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
