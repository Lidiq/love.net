<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
	   <title>Love.net</title>
	   <link rel="stylesheet" href="love.css"/>
	   <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
   </head>
   <body>
    <div class="container">
    <div class="date"><?php include("date.php")?></div>	
	<?php 
	include "connect.php";
	if(isset($_SESSION['is_logged']))
	  {
		echo'<div class="Welcome">
		     Добре дошъл, '.$_SESSION['name'].'!</div>
			<form name="logout" method="post" action="logout.php">
			 <input type="image" src="logout_but.jpg" class="logout_button"/>
			</form>';
	 }
    else
	 {
	 include("login_form.php"); 
	 } 
	?>
	         <ul class="navbar">
			   <li><a href="index.php" class="A" style="background-image:url('home_but.jpg');padding-right:70px;"></a></li>
			   <li><a href="women.php" class="A" style="background-image:url('women_but.jpg');padding-right:130px;"></a></li>
			   <li><a href="men.php" class="A" style="background-image:url('men_but.jpg');padding-right:90px;"></a></li>
			   <li><a href="links.php" class="A" style="background-image:url('friends_but.jpg');padding-right:125px;"></a></li>
			   <li><a href="about.php" class="A" style="background-image:url('about_but.jpg');padding-right:125px"></a></li>
			 </ul>
		     <div class="content"></div>
			 <div class="aside">
			 <form name="input" action="quick_search_html.php" method="get" >
			   <select class="select" name="lover">
				  <option value="woman">Жена</option>
				  <option value="man">Мъж</option>
				</select><br/>
				   <input type="text" name="search1" size="1" class="text"/>
				   <input type="text" name="search2" size="1" class="text"/> 
				   <input type="image" src="search_button.jpg" class="submit_button"/>
			  </form>
			 </div>
	  </div>
		    <!-- <div class="footer"></div>-->
   </body>
</html>