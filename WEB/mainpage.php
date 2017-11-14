<?php
include_once 'dbcon.php';
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$position=$_POST['position'];
switch($position){
case 'Guru':
	$result=mysql_query("SELECT teacher_id, teacher_name,username FROM teacher WHERE username='$username' AND password='$password'");	
	$row=mysql_fetch_array($result);
if($row>0){
session_start();
	$_SESSION['teacher_id']=$row[0];
	$_SESSION['teacher_name']=$row[1];
	$_SESSION['username']=$row[2];
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/index_teacher.php");
}else{
	$message="<font color=red>Invalid login Try Again</font>";
}
break;

case 'Admin':
	$result=mysql_query("SELECT admin_id, username FROM admin WHERE username='$username' AND password='$password'");
	$row=mysql_fetch_array($result);
if($row>0){
session_start();
	$_SESSION['admin_id']=$row[0];
	$_SESSION['username']=$row[1];

header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/index_admin.php");
}else{
	$message="<font color=red>Invalid login Try Again</font>";
}
break;

case 'Ibubapa':
	$result=mysql_query("SELECT parent_id, parent_name,username FROM faculty WHERE username='$username' AND password='$password'");
	$row=mysql_fetch_array($result);
if($row>0){
session_start();
	$_SESSION['parent_id']=$row[0];
	$_SESSION['parent_name']=$row[1];
	$_SESSION['username']=$row[2];
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/index_parent.php");
}else{
	$message="<font color=red>Invalid login Try Again</font>";
}
break;
}}
?>


<!DOCTYPE html>
<html>
<head>
<title>Sekolah Agama Ibnu Abbas</title>
<style>
       
	   section {

		width:800px;
		height:400px;
		margin: auto;
		border: 0px solid #73AD21;
		}
	
		table{
		margin: 0 auto;
		}
	
		#nav {
		text-align:center;
		}
		
		#nav li {
		display:inline;
		
		}
		
		#nav a {
		text-decoration:none; 
		padding:0 30px; /* variable width */
		}
	
		body {
		background-repeat: no-repeat;
		background-position: right top;
		margin: auto;
		background-attachment: fixed;
		}

		bgcolor{
		opacity: 0.1;
		filter: Alpha(opacity=10);
		}

		a:link {
		color:white;
		text-decoration:none;
		}
		
</style>
</head>
 


<body>
  
   
    
<table width = "70%" border = "3" >
         
<tr>
    <td colspan = "3">
	<img align="left" src="images/logosekolah.png" style="width:130px;height:150px;"></img>
	<h2>Laman Web Rasmi</h2>
	<h1>Sekolah Rendah Ibnu Abbas</h1>
	</td>	    
</tr>
         
		 
<tr>
<td colspan = "3" bgcolor = "green">
			
<ul id="nav">
  <li><a href="#">Utama</a></li>
  <li><a href="#">Tentang Kami</a></li>
  <li><a href="#">Berita</a></li>
  <li><a href="#">Hubungi kami</a></li>
</ul>
</td>
</tr>
		 
		 
<tr>
<td colspan = "3" >
             
			   
<!-- Slide Show -->
<section>
<br>
  <img class="mySlides"  src="images/banner.png"  style="width:800px;height:300px;">
  <img class="mySlides"  src="images/gambar1.jpg" style="width:800px;height:300px;"> 
</section>

<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 5000);
}
</script>
</td>
</tr>
         
<tr>
    <td align = "center">
		<h4>Lokasi</h4>
		<p><a href="https://www.google.com.my/maps/place/Sekolah+Rendah+Islam+Ibnu+Abbas/@3.7959611,103.2548768,17z/data=!3m1!4b1!4m5!3m4!1s0x31c8b750e5de4acd:0x749f91c01f7437ec!8m2!3d3.7959611!4d103.2570655" target="_blank"><img width="200" alt="ump-location" src="images/lokasi.png" /></a></p>
		<p font size="6">Coordinate:<br />3.718491,103.120784</p>
    </td>
            
    <td align= "center">
        <h4 align= "center">Hubungi</h4>
		<p font size="6">Sekolah Agama Ibnu Abbas<br>Lot 1/11294, Kampung Baru MPK,<br>Permatang Badak,<br>25150 Kuantan, Pahang Darul Makmur.<br><br><br><br>Tel: 09 5365658</p>	
    </td>
			
			
	<td>
		<h4 align= "center">E-Portal</h4>
		<?php $message; ?>
		<form method="post" action="mainpage.php">
		
		<div class="form-group">
			<label for="username">Username:</label>
			<input type="text" name="username" class="form-control" id="username" placeholder="Enter Username">
		</div><br>
		
		<div class="form-group">
			<label for="password">Password:&nbsp </label>
			<input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
		</div><br>
	
	
		Kategori:&nbsp&nbsp <select name="position">
			<option>--Pilih Kategori--</option>
			<option>Admin</option>
			<option>Guru</option>
			<option>Ibubapa</option>		
		</select><br><br>
		
	
		<button type="submit" name="submit" class="btn btn-default">Submit</button>
		</form><br>
	
	
		<div align="center" style="margin-top: 5px;"><a href="/en/forgot-password" style="color: black;" font size="6">Lupa Katalaluan</a></div>
		</td>

</tr>
    	
<tr>
    <td colspan = "3" bgcolor = "green">
        <center>
                  Copyright © Sekolah Kebangsaan Ibnu Abbas
        </center>
    </td>
</tr>
         		 
</table>


 
</body>

</html>
