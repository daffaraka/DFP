@extends('user.layout')
@section('content')
<section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8 ftco-animate">
          <div class="panel panel-default">
              <div class="panel-heading">
                  <h3 class="panel-title">Login User</h3>
                  <p></p>
              </div>
              <div class="panel-body">
                  <form method="post">
                      <div class="form-group">
                          <label>Email</label>
                          <input type="email" class="form-control" name="email">
                      </div>
                      <div class="form-group">
                          <label>Password</label>
                          <input type="password" class="form-control" name="password">
                      </div>
                      <button class="btn btn-primary btn-block" style="background-color:#d90000" name="login">Login</button>
                      <p></p>
                     
                  </form>
                  <p>Don't have an account?</p>
                  <a href="{{route('register')}}" class="btn btn-primary btn-block"  style="background-color:#d90000" name="daftar">
                   Sign Up
                  </a>
              </div>
          </div>
        </div> <!-- .col-md-8 -->
      </div>
    </div>
  </section> <!-- .section -->
@endsection