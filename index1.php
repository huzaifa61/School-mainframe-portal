<?php 
	include('functions.php');

	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>success</title> <a href="https://twitter.com/mahaurdu?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @mahaurdu</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<STYLE>
img[alt="www.000webhost.com"]
{
    display:none;
}
img {
    width: 100%;
    height: auto;
}
.button {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 400px;
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
</STYLE>
</head>
<body>
	<div class="header">
		<h2>Home Page <a href="https://twitter.com/mahaurdu?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @mahaurdu</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></h2>
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
			<img src="images/user_profile.png"  >


			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="index1.php?logout='1'" style="color: red;">logout</a>
					</small>
<a href="user.php"><button class="button"><span>SEE LATEST UPLOADS </span></button></a>
				<?php endif ?>
			</div>

			<a href="https://twitter.com/intent/tweet?screen_name=mahaurdu&ref_src=twsrc%5Etfw" class="twitter-mention-button" data-show-count="false">Tweet to @mahaurdu</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
			 <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
			<a class="twitter-timeline" href="https://twitter.com/mahaurdu?ref_src=twsrc%5Etfw">Tweets by mahaurdu</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>  <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
<a class="twitter-timeline" href="https://twitter.com/TawdeVinod?ref_src=twsrc%5Etfw">Tweets by TawdeVinod</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

					</div>
	</div>
</body>
</html>