@extends('base')

@section('content')

<br>
<div class="idk">
  <div class="roar">
    <h1>Welcome to my app!</h1>
    <h5>This is my comfort zone!</h5>
    <br>
  </div>
</div>



<h1 class="text-center text-white">Users</h1>


  <div class="row">
  @foreach($users as $user)

                
            <div class="d-flex justify-content-center color">
                @if($user['gender'] == 'male')

                  <div class="male">
                    <div>{{ $user['fname'] }}</div>
                    <div>{{ $user['gender'] }}</div>
                  </div>

                  @else

                  <div class="female">
                    <div>{{ $user['fname'] }}</div>
                    <div>{{ $user['gender'] }}</div>
                  </div>

                  @endif
                </div>



        @endforeach
  </div>



<style scoped>

  .idk {
    color: orange;
  }
  .roar {
    margin-top: 90px;
    text-align: center;
  }
  .color{
    color: orange;
  }
  .male{
    background-color: #01A6EA;
    border-radius: 50%;
    padding: 10px;
  }
  .female{
    background-color: #FFB1CB;
    padding: 10px;
    color: black;
    border-radius: 50%;
  }

</style>
@endsection
