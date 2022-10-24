@extends('base')
@section('content')



<div class="wasap">
    <div class="children">
        <h1 id="top" class="text-center">Recent Posts</h1>
        <div class="d-flex justify-content-center">
            @foreach ($recentPost as $post)
                <div id="post-box" class="align-self-stretch m-1" style="width: 31%">
                    <div class="card-body">
                        <div class="card-title">
                            <h4 id="post-title">{{ $post->title }} <span><h6>{{ $post->category }}</h6></span> </h4>
                            <p class="timestamp"><b>by: </b> {{ $post->user->lname }}, {{ $post->user->fname }} <br>
                        <b>created: </b>{{ $post->created_at->format('F d, Y g:i A') }}</p> <br>
                            <p>{{ $post->content }}</p>
                        </div>
                    </div>
                    <div class="card-footer">
                        @if($post->isEditable())
                            <a href="{{ url('edit', ['post' => $post->id]) }}"><i class="fa-regular fa-pen-to-square"></i></a>
                            <a href="{{ url('delete', ['post' => $post->id]) }}" ><i class="fa-solid fa-trash"></i></a>
                            @else 
                            <a class="buttons-for-non-user" href="" onclick="return false;"><i class="fa-regular fa-heart"></i></a>&nbsp;
                            <a class="buttons-for-non-user" href="" onclick="return false;"><i class="fa-regular fa-comment-dots"></i></i></a>&nbsp;
                            <a class="buttons-for-non-user" href="" onclick="return false;"><i class="fa-solid fa-share-nodes"></i></a>            
                        @endif
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>

<style>
    
    #top{
        margin-top: 30px;
        margin-bottom: 30px;
        font-weight: bold;
        font-size: 50px;
        color: #ffa31a;
    }


    #post-title{
        font-family: 'Raleway', sans-serif;
        font-weight: bold;
    }
    .wasap {
        height: 100%vh;
        margin: 100px;
        position: relative;
    }
    
    p{
        font-family: 'Raleway', sans-serif;
        font-weight: bold;
    }
    .timestamp{
        font-size: 12px;
    }

    .card-body{
        /* background-color: #F1FFE7; */
        color: orange;
    }
    
    .card-footer{
        /* background-color: #C2E7DA; */
        height: 50px;
    }

    .buttons-for-non-user{
        color: white;
    }

    #post-box{
        color: white;
        background-color: #1b1b1b;
    }
    .card-body{
        color: white;
        background-color: orange;
    }

    .card-footer{
        background-color:  	yellow;
        color: white;
    }
    a{
        color: #ffa31a;
        margin-right: 8px;
    }


    ::-webkit-scrollbar {
        display: none;
    }
</style>
@endsection
