@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration ">
            <h1 class="h3 mb-3 fw-normal text-center">Registation</h1>
            <form action="/register" method="post">
                @csrf
                <div class="form-floating">
                    <h5>Name</h5>
                    <input type="text" name="name" class=" form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                    <label for="name"></label>
                    @error('name')
                    <div  class=" invalid-feedback">
                       {{ $message  }}
                    </div>
                    @enderror
                  </div>
                <div class="form-floating">
                    <h5>Username</h5>
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                    <label for="username"></label>
                    @error('username')
                    <div  class=" invalid-feedback">
                       {{ $message  }}
                    </div>
                    @enderror
                  </div>
              <div class="form-floating">
                <h5>email</h5>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="email"></label>
                @error('email')
                <div  class=" invalid-feedback">
                   {{ $message  }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <h5>Password</h5>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror " id="password" placeholder="Password">
                <label for="password"></label>
                @error('password')
                <div  class=" invalid-feedback">
                   {{ $message  }}
                </div>
                @enderror
              </div>


              <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>

            </form>
            <small class="d-block text-center mt-3">Already registered? <a href="/login">Login</a></small>
          </main>
    </div>
</div>


@endsection
