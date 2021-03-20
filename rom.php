<?php
include("connection.php");
?>
<!DOCTYPE html>

<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="js/bootstrap.min.js"></script>
<style>
		   #p1 {
         width:40%;
		 height:auto;
		 background:lime;
		 margin:auto;
		 margin-top:1%;
		 
		 }
		 
		#p1:hover{background:pink; transition:5s; border-radius:70%;
		transform:rotate(180deg); transform:scale(2); text-show; text-align:center;
		
		}
	  </style>
	  </head>
  <div class="container">
<body style="background-color:white; background-size:100%; width: 100%;">

<div id="header">
<div style="background-color:rgba( 245, 183, 177 ,1); margin-bottom:50px; padding-bottom:30px">
	<em><div id="H">Sarkari Job</div></em>
	           <center><h5 style="color:rgba( 44, 62, 80,1)">www.sarkarijob24.com</h5></center> </div>
</div>

<div id="L">
<div id="nav">
	<ul>
		<li><b><a href="index.php" id="button2">Home</a></b></li>
		<li><b><a href="trb.php" id="button2">Latest Job</a></b></li>
		<li><b><a href="block.php" id="button2">Admit Card</a></b></li>
		<li><b><a href="contect.php" id="button2">Answer key</a></b></li>
		<li><b><a href="result.php" id="button2">Result</a></b></li>
		<li><b><a href="contactus.php" id="button2">Contact Us</a></b></li>
	</ul>
</div>
</div>
<div id="container">
	<div id="left"><br><br><br>
		
		<em><marquee><div id="L1" style="color: red;text-align:center; margin-top:40px;">Only Railway Related Jobs Are Here</div></p></marquee></em>
		<div id="a" style="border:1px solid blue;"> <div id="L2" style="margin-top:0px; background:rgba(83, 180, 125,1)"><center>Latest Jobs</center></div>
		
		        <div  style="background-color:rgba(200,200,150,.9); padding-left:10px; margin-top:15px; margin-bottom:55px"><a href="#">More</a></div>
		                           </div>
		  <div id="a" style="border:1px solid blue;"><div id="L2" style="margin-top:0px; background:rgba(83, 180, 125,1)"><center>Results</center></div>
		           		           <div  style="background-color:rgba(200,200,150,.9); padding-left:10px; margin-top:15px; margin-bottom:55px"><a href="#">Added Information When It,s Needed</a></div>
		                               </div>
		<div id="a" style="border:1px solid blue;"><div id="L2" style="margin-top:0px; background:rgba(83, 180, 125,1)"><center>Admit Cards</center></div>
		            		           <div  style="background-color:rgba(200,200,150,.9); padding-left:10px; margin-top:15px; margin-bottom:55px"><a href="#">Added Information When It,s Needed</a></div>
											</div>
		<div id="a" style="border:1px solid blue;"><div id="L2" style="margin-top:0px; background:rgba(83, 180, 125,1)"><center>Answer Keys</center></div>
	    		      <div  style="background-color:rgba(200,200,150,.9); padding-left:10px; margin-top:15px; margin-bottom:55px"><a href="#">Added Information When It,s Needed</a></div>
                  </div>							
	</div>
    <div id="right">
    	<div style="padding-left:5%; margin-top:2%"><div id="L5" style="color:red; margin-top:110px; margin-left:20px"><b>Category</b></div></div>
		     <font size="4px"><p style="padding-left:20px"><a href="ed.php" id="button"><b>Engineering & Medical</b></a></p></font><br>
			
    	<font size="4px"><p style="padding-left:20px"><a href="rom.php" id="button"><b>Railway</b></a></p></font><br>

    <font size="4px"><p style="padding-left:20px"><a href="bio.php" id="button"> <b>Airforce</b></a></p></font><br>

     <font size="4px"><p style="padding-left:20px"><a href="dit.php" id="button"><b>Navy</b></a></p></font><br>

     <font size="4px"><p style="padding-left:20px"><a href="sus.php" id="button"><b>Bank</b></a></p></font><br>
	 
     <font size="4px"><p style="padding-left:20px"><a href="police.php" id="button"><b>Police</b></a></p></font><br>
	 
     <font size="4px"><p style="padding-left:20px"><a href="ps.php" id="button"><b>Private Sector</b></a></p></font><br>
	 
	 
      		
    </div>
</div>

</body>
</html>