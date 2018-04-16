<html>
<head>
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <script src="https://apis.google.com/js/platform.js" async defer>
  </script>
  <meta name="google-signin-client_id" content="442133229064-hnp16kp99ptfs2t1e4e3u0pudlgt3eqv.apps.googleusercontent.com">
  <h1>Login Form</h1>
  <form action="validate.php" method="POST">
  <div class="block">
    <div class="image">
    <img src="images/profile.png" width="25%">
     </div>
    <div class="container">
    <label>UserName</label>
      <input type='text' placeholder='enter name' name='Username'></input><br>
      <label>Password</label>
      <input type="password" placeholder="enter password" name="password"></input>
      <br><br>
      <input type="checkbox">Remember me</input>
      <br>
      <a href="divIt.html">
      <button type="submit">LOG IN</button>
      </a>
      <div class="g-signin2" data-onsuccess="onSignIn"></div>
    </div>
  </div>
</form>
  <div class="address">
    <label class="label1">Office address</label>
    <div class="block1">I-143 alpha-2 Greater Noida,Uttar Pradesh,India</div>
    <div class="icons">
      <img  class="icon" src="images/tweet.png" height="10%" width="10%"></img>
      <img class="icon" src="images/fb.png" height="10%" width="10%"></img>
      <img class="icon" src="images/insta.png" height="10%" width="10%"></img>
   </div>
   <div class="footer">© [name of rightsholder or rightsholders] [publication year]: e.g.  © XYZ Press and contributors 2014</div>
  </div>
  <script>
  function onSignIn(googleUser)
  {
  var profile = googleUser.getBasicProfile();
  console.log("ID: " + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log("Name: " + profile.getName());
  console.log("Image URL: " + profile.getImageUrl());
  console.log("Email: " + profile.getEmail()); // This is null if the "email" scope is not present.
  }
  </script>
</body>
</html>
