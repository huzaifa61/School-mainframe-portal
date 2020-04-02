<?php 
	include('../functions.php');

	if (!isAdmin()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: ../login.php');
	}

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP SMS script</title>
<meta name="description" content="PHP script for SMS sending. Send SMS with API connection.">
<style type="text/css">
.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #01E1FD;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}


body{
	font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif; 
	font-size:12px;
	background-image: url("login.jpg");
}
p, h1, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:1px;}
/* ----------- My Form ----------- */
.myform{
	margin:0 auto;
	width:250px;
	padding:14px;

}
/* ----------- stylized ----------- */
	#stylized{
		border:solid 2px #b7ddf2;
		background:#ebf4fb;
	}
	#stylized h1 {
		font-size:14px;
		font-weight:bold;
		margin-bottom:8px;
	}
	#stylized p{
		font-size:11px;
		color:#666666;
		margin-bottom:20px;
		border-bottom:solid 1px #b7ddf2;
		padding-bottom:10px;
	
img[alt="www.000webhost.com"]
{
    display:none;
}
img {
    width: 100%;
    height: auto;
}

}
	</style> 
	
	<script type="text/javascript">
	
//Edit the counter/limiter value as your wish
var count = "160";   //Example: var count = "175";
function limiter(){
var tex = document.myform.text.value;
var len = tex.length;
if(len > count){
        tex = tex.substring(0,count);
        document.myform.text.value =tex;
        return false;
}
document.myform.limit.value = count-len;
}

// +,- delete
var r={'special':/[\W]/g}
function valid(o,w)
{
  o.value = o.value.replace(r[w],'');
}

// phone number checker
function isNumeric()
{
  var elem=document.myform.to.value;
  var nalt=document.getElementById('phno1');
 if(elem!="")
 {
    var numericExpression = /^[0-9]+$/;
	  if(elem.match(numericExpression))
    {
         nalt.innerHTML="";
         return true;
       }
    
    else{
		
    nalt.innerHTML="<font size=1 > Numbers Only</font>";
		  document.myform.to.focus();
	 	  document.myform.to.value="";
       return false;
	  }
  }
  else if(elem.length==0)  {
    nalt.innerHTML="<font size=1 > Enter Numbers</font>";
     document.myform.to.focus();;
   return false;
    }
}

</script> 
	
</head>
<body>
<?php


if(isset($_POST['submit']) && $_POST['submit']=='Send')
{
			$to = $_REQUEST["to"];
		$text = $_REQUEST["text"];

	$url = "http://vas.hexaroute.com/api.php";
	$postfields = array(
		'username' => 'mahaurdu',
		'password' => 'Mah@123456',
		'sender' => 'MHURHS' ,
		'route' => 5,
		'mobile[]' => $to,
		'message[]' => $text,
	);



	$curld = curl_init($url);
	
	curl_setopt($curld, CURLOPT_POST, true);
	curl_setopt($curld, CURLOPT_POSTFIELDS, $postfields);
	curl_setopt($curld, CURLOPT_URL,$url);
	curl_setopt($curld, CURLOPT_RETURNTRANSFER, true);

	$output = curl_exec($curld);
	curl_close ($curld);
	
	$created = date('Y-m-d H:i:s');
	
		echo "<center>Date: $created <br>";
	echo "To: $to <br>";
			echo "Message Status:$output <br>";
			echo "<br><a href=\"sendsms.php\"><b>Send New SMS Message</b></a></center>";

	} else {


echo "<div id=\"stylized\" class=\"myform\">"
	   ."<b>Send sms</b>"
	   ."<form name=\"myform\" method=post action='sendsms.php'>"
	   ."<table width=100% border=\"3\">"
	   ."<tr>"
		 ."<td>Numbers<br>(separate with ,)</td>"
		 ."<td><textarea style=\"resize: none;width:80%;border: 1px solid #523f6d;outline:none;\" placeholder=\"xxxxxxx,xxxxxxx,xxxxxxx,\"  rows=\"4\" cols=\"25\" name=\"to\"></textarea></td>"
	   ."</tr>"
	   ."<tr style=\"padding:10px;\">"
		 ."<td>Message: </td>"
		 ."<td><textarea style=\"resize: none;width:80%;padding;5px;border: 1px solid #523f6d;outline:none;\" wrap=physical rows=\"4\" cols=\"25\" name=\"text\" onkeyup=limiter()></textarea></td>"
	   ."</tr>"
	 	   ."<tr>"
	   ."<td></td>"
      ."<td>Character left: <script type=\"text/javascript\">"
       ."document.write(\"<input type=text name=limit size=4 readonly value=\"+count+\">\");"
       ."</script><br></td>"
	   ."</tr>"
	   ."<tr>"
		 ."<td>&nbsp;</td>"
		 ."<td><input style=\"width:8em;font-size:10px;\" type=submit name=submit value=Send>"
		 ."<div class=\"spacer\"></div></td>"
	   ."</tr>"
	   ."</table>"
	   ."</form>"
	."</div>";

}
?>
<center><a href="home.php"><button class="button">GO TO homepage</button></a></center>
</centre>
</body>
</html>
