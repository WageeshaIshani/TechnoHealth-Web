<!DOCTYPE html>
<html lang = "en-US">

	<head>
	<title>Aboutus</title>
	<link rel = "stylesheet" type = "text/css" href = "css/HomePageStylingSheet.css">
	<link rel = "stylesheet" type = "text/css" href = "css/Aboutus.css">
	<script type="text/javascript" src="poll.php"></script>
	</head>

	<body>
		<?php include 'header.php';  ?>
		</br>
		
		</br>
		
		<div id = "center details">
		<table id= "main">
		<tr>
		<td class = "hover2" width = "60%">
		<p>
		Team miracle was started this website on year 2016.After finishing long time research they have found that
		the World wide web is rarely having websites to sell medical products.World Market is having so many opportunities
		to sell medical products.But doesn't have proper website that gave high priority to sell medical products.
		To solve that problem<b> Techno health</b> Stated by us.During these 3 months they have provided high quality
		services to all of their Customers.You can read our <b>customer reviews</b>. If you want to contact us go to our <a href = "ContactUs.html"> Contact us </a> page. Give your feedback to us. 
		If you want to know about Members of Miracle go to <a href = "Creators.html">Creators</a> page. 
		Go and See <a href = "Our_Products.html">Our Products</a> page.Enjoy Your Shopping. </p>
		</td>
		<td>
		<table id= "sub">
		<tr>
			<td class = "testimonial">
				<h2><b>Customer Reviews</b></h2>
				<?php include '/PHP/Customer_reviews.php';?>
			</td>
		</tr>
		<tr>
			<td>
				<form name = "poll_form" onsubmit="getVote()" action="/PHP/Poll.php">
				
				<h3><b>Weekly Poll</b></h3>
				<div>
				<p align="left">You have maximum two and a half minutes to answer this quiz</p>
				<p align="left" id="demo"></p>
				</div>
				
				<div align="left">
				<fieldset id="q1">
				<legend>Question 1</legend> <legend>01.What is your favourite Nutrition?</legend>
				</fieldset>
				</div>
				<fieldset id="q1">
				<label> <div align="left"> <input type="radio" name="vote" value="1"/>Combat Protein Bar </div>
				</label>
   			<div align="left"><br/></div>
				<label>
				<div align="left"> <input type="radio" name="vote" value="2"/>Superfood Protein Powder</div>
				</label>
   			<div align="left"><br/></div>
				<label>
				<div align="left"> <input type="radio" name="vote" value="3"/>Thulsi Green tea</div>
				</label>
				<div align="left"><br/></div>
				<label>
				<div align="left"> <input type="radio" name="vote" value="4"/>Nan Grow</div>
				</label>
				<div align="left"><br/></div>
            
				</fieldset>
				<!--<input type="checkbox"  onclick="getVote();" align = "left"/>View the summary of the current results <br> -->
				<input type="submit" id="btn" value="Submit" onclick="getVote();"/>
				<input type="button" id="btnclr" value="Clear"/>
				</form> 
			</td>
		
		</tr>
		</table>
		</td>
		</tr>
		</table>
		
		</div>
		<center><a href = "#NameBar" class = "arrow"><img class = "totop" src = "images/arrow.png" style="width:30px;height:30px;" align = "middle"></a></center></br></br>
		<footer>
			</br>
			Copyright 1999-2016 by Refsnes Data. All Rights Reserved.
			</br>
			Last modified date :20th April 2016
			</br>
			Created by :P.D.K.R.Gunatilaka
			</br>
			Finished by :K.R.S.Tharindu De Zoysa
			</br>
			Email:kaumudi.2014271@iit.ac.lk
			</br>
			Email:tharindu.2015188@iit.ac.lk
			</br>
			</br>
		</footer>
		
	</body>

</html>
