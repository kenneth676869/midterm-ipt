<h1>Welcome to Earth, {{ $user->fname }}!</h1>
<h3>I see you have bargain to art request.</h3>

<br>

<p>Thank you for being a part of our growing community. Please click the link below to verify your account.</p>

<p>
  <a href="{{ url('/verification/' . $user->id . '/' . $user->remember_token)}}"><h1>Verify Account</h1></a>
</p>