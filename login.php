<?php include('functions.php') ?>



<head>

	<title>MAHA LOGIN</title>
	<meta name="theme-color" content="#4682B4">
 <link href="timetable/favicon.ico" rel="icon" type="image/x-icon" />

	<link rel="stylesheet" type="text/css" href="style.css">



	<style>
	
img[alt="www.000webhost.com"]
{
    display:none;
}

img {

   

  

    top: 430px;

    

}

.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4682B4;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #4682B4}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

</style>



    
</head>

<body>



	<div class="header">

		<h2>Login</h2>

	</div>

	

	<form method="post" action="login.php">



		<?php echo display_error(); ?>



		<div class="input-group">

			<label>Username</label>

			<input type="text" name="username" >

		</div>

		<div class="input-group">

			<label>Password</label>

			<input type="password" name="password">

		</div>

		<div class="input-group">

			<button type="submit" class="btn" name="login_btn">Login</button>

		</div>

		<p>

			Not yet a member? <a href="register.php">Sign up</a>

		</p>

	</form>

	

	<a href="https://twitter.com/login">

  <center><img src="images/twitter.png" align="middle"></center>

</a>

<center><a href="index.html"><button class="button">GO TO HOME PAGE</button></a></center>

	<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5a69358cd7591465c70711b3/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
html lang="en">
  <head>
    <meta name="google-signin-scope" content="profile email">
<meta name="google-signin-client_id" content="390880971285-45sk93eibo33p5sml3ohmemqph8nn6bj.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
  </head>
  <body>
    <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
    <script>
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
      };
    </script>
    <!-- Paste Free Call code right before the closing body tag </BODY> -->
<!-- begin www.FreeCallinc.com code -->
<script type="text/javascript">
(function() {
  var dg_scr = document.createElement('script'); dg_scr.type = 'text/javascript'; dg_scr.async = true;
  dg_scr.src = (('https:' == document.location.protocol) ? 'https://' : 'http://') + 'track.freecallinc.com/freecall.js';
  dg_scr.onload = function(){
    try {
      deskGod.track(40445, 39629);
    } catch(err){ }
  };
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(dg_scr, s);
})();
</script>
<!-- end www.FreeCallinc.com code -->
  </body>
</html>
</body>

</html>