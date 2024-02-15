@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration w-100 m-auto">
          <form>
            <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
        
            <div class="form-floating">
              <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="Name">
              <label for="name">Name</label>
            </div>

            <div class="form-floating">
              <input type="text" name="username" class="form-control" id="username" placeholder="Username">
              <label for="username">Username</label>
            </div>

            <div class="form-floating">
              <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
              <label for="email">Email address</label>
            </div>

            <div class="form-floating">
              <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password">
              <label for="password">Password</label>
            </div>
            <button class="btn btn-primary w-100 py-2 mt-3" type="submit">register</button>
          </form>
          <small class="d-block mt-2">Already have account? <a href="/login" class="text-decoration-none ">Login</a></small>
        </main>
    </div>
</div>


@endsection