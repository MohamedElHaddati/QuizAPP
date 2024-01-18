@extends('master2')

@section('title')
    Register
@endsection

@section('main')

<h1 class="text-center" >Register</h1>

<form method="post" action="/register">
    @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" name="name" class="form-control" id="exampleFormControlInput1">
  </div>
  @error('name')
  <div class="error">{{ $message }}</div>
  @enderror
  <div class="form-check">
    <input class="form-check-input" type="radio" name="role" id="exampleRadios1" value="1" checked>
    <label class="form-check-label" for="exampleRadios1">
      Student
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="role" id="exampleRadios2" value="2">
    <label class="form-check-label" for="exampleRadios2">
      Teacher
    </label>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email</label>
    <input type="email" name="email" class="form-control" id="exampleFormControlInput1">
  </div>
  @error('email')
    <div class="error">{{ $message }}</div>
  @enderror
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Password</label>
    <input class="form-control" type="password" name="password" id="exampleFormControlTextarea1"></input>
  </div>
  @error('password')
    <div class="error">{{ $message }}</div>
  @enderror
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Confirm Password</label>
    <input class="form-control" type="password" name="password_confirmation" id="exampleFormControlTextarea1"></input>
  </div>
  <button type="submit" class="btn btn-primary mb-2">Register</button>
</form>



@endsection