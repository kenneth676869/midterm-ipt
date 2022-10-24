@extends('base')

@section('content')
@livewireScripts
    <h1 id="top-title" class="text-white">Welcome, user!</h1>
    <br>
    <div class="container">
        <div class="row">
            <div class="col sm-1 mb-4">
                @if(session('message'))
                    <div class="mt-5 alert alert-success text-center">{{ session('message') }}</div>
                @endif
                @if(session('error'))
                    <div class="mt-5 alert alert-warning text-center">{{ session('error') }}</div>
                @endif
                <div class="d-flex justify-content-center">
                    <livewire:posts.create/>
                </div>
            </div>

            <h2 class="text-center text-white mt-5">Your Posts</h2>
            <div>
                <livewire:posts.index/>
            </div>
        </div>
    </div>
    
    <script>
        
    </script>

    <style>

    #top{
        margin-top: 30px;

    }
    
    #top-title{
        margin-top: 30px;
        font-family: 'Lavishly Yours', cursive;
        font-weight: bold;
        font-size: 50px;
        color: #ffa31a;
    }
    body{
        background-color: rgb(251, 234, 251);
    }

    h4, p{
        font-family: 'Raleway', sans-serif;
        font-weight: bold;
    }

    #timestamp{
        font-size: 10px;
        
    }

    #pen {
        color: rgb(140, 50, 140)
    }

    ::-webkit-scrollbar {
            display: none;
        }
    </style>
@endsection
