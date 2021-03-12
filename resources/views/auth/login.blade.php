<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h2>login</h2>
    @if ($errors->any())
     <div>
          <div>something went wrong</div>
          <ul>
              @foreach($errors->all() as $error)
              <li>{{ $error}}</li>
              @endforeach
          </ul>
     </div>
    @endif
    <form action="/login" method="POST">
       @csrf 
    
       <div class="name">
          <label for="name">username</label>
          <input type="text" id="name" name="name" value="{{ old('name') }}" autofocus>
       </div>
       <div class="password">
          <label for="password">password</label>
          <input type="password" id="password" name="password">
       </div>
       <div>
        <label for="remember">
            <input id="remember" type="checkbox" name="remember">
            <span class="">Remember me</span> 
        </label>
       </div>
       <div>
       <button>login</button>
       </div>
    </form>
    <a href="/forgot-password">forgot password!!
       no worry click this link to reset
                                    
                                    </a>
                                    <a href="/sign-in/facebook">sign in with facebook</a>
       <a href="/sign-in/github">sign in with github</a>
       
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '728989097817870',
      cookie     : true,
      xfbml      : true,
      version    : 'v10.0'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
</body>
</html>