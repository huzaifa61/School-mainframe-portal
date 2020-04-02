<?php 
	include('../functions.php');

	if (!isAdmin()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: ../login.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	
	
	
	<link rel="stylesheet" type="text/css" href="../style.css">
	<style>
	.header {
		background: #003366;
	}
	button[name=register_btn] {
		background: #003366;
	}
	
	.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: WHITE;
  text-align: center;
  font-size: 18px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

img[alt="www.000webhost.com"]
{
    display:none;
}
img {
    width: 100%;
    height: auto;
}

	</style>
</head>
<body>
	<div class="header">
		<h2>Admin - Home Page</h2>
		
	</div>
	
	
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<div class="profile_info">
			<img src="../images/admin_profile.jpg"  >
			<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
			




</body>
</html>


			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="home.php?logout='1'" style="color: red;">logout</a>
						&nbsp; <a href="create_user.php"> + add user</a>
					</small>

				<?php endif ?>
				
				<a href="sendsms.php" button class="button" style="vertical-align:middle"><span>SMS SYSTEM</span></button></a>
					<a href="../index45.php" button class="button" style="vertical-align:middle"><span>upload files</span></button></a>

			</div>
		</div>
			</div>
		

<div class="content">
  <a href="https://twitter.com/intent/tweet?screen_name=mahaurdu&ref_src=twsrc%5Etfw" class="twitter-mention-button" data-show-count="false">Tweet to @mahaurdu</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<a class="twitter-timeline" href="https://twitter.com/mahaurdu?ref_src=twsrc%5Etfw">Tweets by mahaurdu</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 	

		
		</div>

</body>
</html>



	
</body>
</html>