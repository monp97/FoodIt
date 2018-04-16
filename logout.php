<html>
<head>
<script src="https://apis.google.com/js/platform.js" async defer>
  function signOut() {
   var auth2 = gapi.auth2.getAuthInstance();
   auth2.signOut().then(function () {
     console.log('User signed out.');
   });
 }
</script>
 </head>
 <body onload="signOut()">
 </body>
 </html>
<?php
session_start();
session_destroy();
header('location:login.php');
 ?>
