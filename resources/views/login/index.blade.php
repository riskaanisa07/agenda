@extends('layout.masuk')

@section('content')
<div class="row">
</div>
<div class="card-body pt-0"> 
<div class="auth-logo">
    <a href="index.html" class="auth-logo-light">
        <div class="avatar-md profile-user-wid mb-4">
            <span class="avatar-title rounded-circle bg-light">
                <img src="assets/images/logo-light.svg" alt="" class="rounded-circle" height="34">
            </span>
        </div>
    </a>

    <a href="index.html" class="auth-logo-dark">
        <div class="avatar-md profile-user-wid mb-4">
            <span class="avatar-title rounded-circle bg-light">
                <img src="assets/images/logo.svg" alt="" class="rounded-circle" height="34">
            </span>
        </div>
    </a>
</div>
<div class="p-2">
    <form class="form-horizontal" action="{{ url('login/proses')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="username" class="form-label"
            @error('username')
                is-invalid
            @enderror
            >Username</label>
            <input autofocus type="text" class="form-control" id="username" placeholder="Enter username" name="username" value="{{ old('username') }}">
            @error('username')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <div class="input-group auth-pass-inputgroup">
                <input type="password" class="form-control
                @error('password')
                    is-invalid
                @enderror
                " placeholder="Enter password"  name="password" aria-label="Password" aria-describedby="password-addon">
                <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        
        <div class="mt-3 d-grid">
            <button class="btn btn-primary waves-effect waves-light" type="submit">Log In</button>
        </div>
    </form>
</div>

</div>
@endsection
