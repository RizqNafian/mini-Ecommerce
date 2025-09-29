<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - TokoKu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
      body {
          background: #f8f9fa;
      }
  </style>
</head>
<body>
  <div class="container d-flex justify-content-center align-items-center min-vh-100">
      <div class="card shadow-sm px-5">
          <div class="card-body">
              <h3 class="text-center mb-4">Register</h3>

              {{-- Tampilkan error jika ada --}}
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul class="mb-0">
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif

              {{-- Form Login --}}
              <form action="{{ route('postregister') }}" method="POST">
                  @csrf
                  
                  <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required autofocus>
                  </div>

                  <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
                  </div>

                  <button type="submit" class="btn btn-primary w-100">Register</button>
              </form>

              <div class="text-center mt-3">
                  <small>Punya akun? <a href="{{ route('login') }}">Login</a></small>
              </div>
          </div>
      </div>
  </div>
</body>
</html>
