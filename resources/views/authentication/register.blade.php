@extends('base')

@section('content')

<div id="register-box" class="container col-md-6 offset-md-3 card mt-5">
  <h1 class="text-center wasa"><b>Register</b></h1>

  <form action="{{ '/register' }}" method="POST">
  {{ csrf_field() }}

  <div class="form-group">
    <label for="fname">First Name</label>
    <input type="fname" name="fname" id="fname" class="form-control">
    @error('fname')
      <p class="text-danger">{{ $message }}</p>
    @enderror
  </div>
  <div class="form-group">
    <label for="lname">Last Name</label>
    <input type="lname" name="lname" id="lname" class="form-control">
    @error('lname')
      <p class="text-danger">{{ $message }}</p>
    @enderror
  </div>
  <div class="form-group">
    <label for="username">Username</label>
    <input type="username" name="username" id="username" class="form-control">
    @error('username')
      <p class="text-danger">{{ $message }}</p>
    @enderror
  </div>

  <div class="form-group">
    <label for="gender">Gender</label>
    <input type="gender" name="gender" id="gender" class="form-control">
    @error('gender')
      <p class="text-danger">{{ $message }}</p>
    @enderror
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" class="form-control">
    @error('email')
      <p class="text-danger">{{ $message }}</p>
    @enderror
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" id="password" class="form-control">
    @error('password')
      <p class="text-danger">{{ $message }}</p>
      
    @enderror
  </div>
  <div class="form-group">
    <label for="password_confirmation">Confirm Password</label>
    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" >
    @error('password_confirmation')
      <p class="text-danger">{{ $message }}</p>
      
    @enderror
  </div>
  <div class="d-flex">
    <div class="flex-grow-1">
      <a id="sign-in-link" href="{{ '/' }}" class="href">Already have an account?</a>
    </div>
    <button class="btn px-5" type="submit">Sign up</button>
  </div>
  </form>
</div>


<style scoped>

  .d-flex{
      margin: 20px;
  }

  .container{
    margin-bottom: 30px;
  }
  .btn {
    color: white;
  background-color:	#ffa31a;
  }
  .btn:hover {
    background-color: blue;
    color: white;
  }

  #register-box{
    background-color: #1b1b1b;
    color: white;
  }

  #sign-in-link{
  color: #ffa31a;
  }
  #sign-in-link:hover{
  color: blue;
  }
.wasa {
  color:  #ffa31a;
}



</style>

@endsection
