<?php

include 'config.php';

$results = mysql_query("SELECT product_code, product_name, product_desc, product_img_name, price, product_qty FROM products WHERE id BETWEEN 17 AND 24 ORDER BY id ASC");
$count = mysql_num_rows($results);
$new_product=array();


?>

<!DOCTYPE html>
<html lang = "en-US">
	<head>
		<title>Medicine</title>
		<link rel = "stylesheet" type = "text/css" href = "css/HomePageStylingSheet.css">
	</head>
	<body>
	<?php include 'header.php';?>
	</br></br></br></br>
	<table  width="75%" align="center" ><tr><td>
	<?php 
			
	if($count>0){
		
		while($row = mysql_fetch_array($results)){
			$prodCode= $row['product_code'];
			$prodName= $row['product_name'];
			$prodDes = $row['product_desc'];
			$prodPrice =  $row['price'];
			$productQty =  $row['product_qty'];
			$productImage=  $row['product_img_name'];
				
			echo '<table class = "cartFont" width="50%" align="left"  >
			<form action="" method="post">
				<tr height="300"><td><img src = "images/'.$productImage.'" style="width:200px;height:200px;"></td>			
					<td><p id="name">'.$prodName.'</p>
					<input type="hidden" name="prod_name" value="'.$prodName.'">
					<input type="hidden" name="prod_code" value="'.$prodCode.'">
					<p>'.$prodDes.'</p>
					<p><input type="hidden" name="prod_price" value="'.$prodPrice.'">Price : Rs.'.$prodPrice.'</p>					
					</td>
				</tr>
				<tr><td><input type="submit" value="Add to cart" name="addbtn"></td>
				<td>Quantity : <select name="qty">';
				for($i=1; $i<=$productQty; $i++){
					echo '<option value="'.$i.'">'.$i.'</option>';
				}
				echo '</select></td></tr>
				
			</table>
			</form>';
			
					}
		}
	
					
					
if(isset($_POST['addbtn'])){
	
	
	foreach($_POST as $key=>$value){
		//The filter_var() function filters a variable with the specified filter. 'FILTER_SANITIZE_STRING' Remove all HTML tags from a string:
		$new_product[$key]= filter_var($value, FILTER_SANITIZE_STRING);
		echo $value;
	}
	unset($new_product['addbtn']);
	

	 if(isset($_SESSION["cartItem"])){  //if session var already exist
            if(isset($_SESSION["cartItem"][$new_product['prod_code']])) //check item exist in products array
            {
				echo "The product is already exist in your cart.";
                
            } 
	 }
		 $_SESSION['cartItem'][$new_product['prod_code']]=$new_product;//update or create product session with new item  
			$pdCode = $_SESSION["cartItem"][$new_product['prod_code']]['prod_code'];
			$pdQty = $_SESSION["cartItem"][$new_product['prod_code']]['qty'];
			//mysql_query("INSERT INTO orders('member_id', 'product_id', 'order_qty', 'amount') VALUES('."$pdCode".','."$pdQty".','')");
			//INSERT INTO `orders`(`order_id`, `member_id`, `product_id`, `order_qty`, `amount`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])
			 if(isset($_SESSION["cartItem"][$new_product['prod_code']])){
				 
				 mysql_query("UPDATE products SET product_qty=(product_qty-$pdQty) WHERE product_code='$pdCode'");        
			 }
}
	
				?>
	</td></tr></table>

	<a href = "#NameBar"><center>To the top..</center></a></br></br>
	
	<footer id = "fo">
	</br>
	Copyright 1999-2016 by Refsnes Data. All Rights Reserved.</br>
	Last modified date : 15th April 2016</br>
	Created by : Charitha Wickramanayake - 2015020 - charitha.2015020@iit.ac.lk<br>
			   : Wageesha Ishani - 2015114 - wageesha.2015114@iit.ac.lk
	</br></br>
	</footer>
	</body>
</html>