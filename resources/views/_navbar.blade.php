<nav id="navbar-box" class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <h1><a id="navbar-linkss" class="navbar-brand" href="{{url('/')}}">Kenneth</a></h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a id="navbar-links" class="nav-link" href="{{url('/home')}}">Home</a>
                </li>
                <li class="nav-item">
                <a id="navbar-links" class="nav-link" href="{{url('/posts/my-posts')}}">Your Profile</a>
                </li>
                @if(auth()->guest())
                <li class="nav-item">
                    <a id="navbar-links" class="nav-link" href="{{url('/login')}}">Login</a>
                </li>
                @else
                <li class="nav-item">
                    <a id="navbar-links" class="nav-link" href="{{url('/posts/recent-posts')}}">News Feed</a>
                </li>
                <li class="nav-item">
                    <a id="navbar-links" class="nav-link" href="{{url('/logout')}}">Logout &nbsp; <i class="fa-solid fa-right-to-bracket"></i></a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<style>
@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap');


#navbar-box{
    height: 80px;
    padding-left: 20px; 
    padding-right: 10px; 
    background: yellow;
}
.navbar-brand{
    font-size: 50px;
}

#navbar-links{
    color: #ffa31a;
    font-weight: bold;
}
#navbar-linkss{
    color: #ffa31a;
    font-weight: bold;
}
#navbar-links:hover{
    background-color: white;
    color: black;
}

.nav-link{
    margin-left: 25px;
}
.nav-item {
    font-size: 20px;
}
    
</style>