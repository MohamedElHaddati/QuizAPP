@extends('master2')

@section('title')
    Login
@endsection

@section('main')

<h1 class="text-center" >Login</h1>

<form method="post" action="{{ route('loginUser') }}">
    @csrf
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
  <button type="submit" class="btn btn-primary mb-2">Login</button>
</form>



@endsection