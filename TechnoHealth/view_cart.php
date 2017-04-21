<?php

include 'config.php';

if(isset($_POST['updatebtn'])){
			
			
		  if(isset($_POST["productqty"]) || isset($_POST["remove_code"]))
{
	//update item quantity in product session

		if(isset($_POST["productqty"]) && is_array($_POST["productqty"])){
		foreach($_POST["productqty"] as $key => $value){
		
		$get_pdCode = $key;
		$oldQty = $_SESSION["cartItem"][$key]["qty"];
		$results_qty = mysql_query("SELECT product_code, product_qty FROM products WHERE product_code='$get_pdCode'");
		
		while($row_qty = mysql_fetch_array($results_qty)){
				
			$balance = $row_qty['product_qty']+ $oldQty;
		}
			if($value<=$balance){
				if(is_numeric($value)){
					if($oldQty<=$value){
						mysql_query("UPDATE products SET product_qty=(product_qty-($value-$oldQty)) WHERE product_code='$get_pdCode'");
					}
					else{
						mysql_query("UPDATE products SET product_qty=(product_qty+($oldQty-$value)) WHERE product_code='$get_pdCode'");
					}				
				
				$_SESSION["cartItem"][$key]["qty"] = $value;
				
				 
			}else{
				
			}
			}
		
			
		}
	}
	
	//remove an item from product session
	
	if(isset($_POST["remove_code"]) && is_array($_POST["remove_code"])){
		foreach($_POST["remove_code"] as $key){
			$pdCode = $_SESSION["cartItem"][$key]['prod_code'];
			$pdQty = $_SESSION["cartItem"][$key]['qty'];
			
			mysql_query("UPDATE products SET product_qty=(product_qty+$pdQty) WHERE product_code='$pdCode'");  
			
			unset($_SESSION["cartItem"][$key]);
			
		    
		}	
	}
}

	   }

if(isset($_SESSION["cartItem"]) && count($_SESSION["cartItem"])>0)
{	
	   
	echo '<div class="cart-view-table-front" id="view-cart">';
	echo '<h3>Your Shopping Cart</h3>';
	echo '<form method="post" action="#">';
	echo '<table class = "viewcart" width="100%"  cellpadding="6" cellspacing="0" >';
	echo '<tr>';
	echo '<th>Product Name</th>';
	echo '<th>Price</th>';
	echo '<th>Total</th>';
	echo '<th>Qty</th>';
	echo '<th><a href="'; if(!isset($_SESSION['userid'])){ echo 'login.php';}else{ header("location:OurProducts.php");} echo '">Proceed to checkout</a></th></tr>';
	

	$total = 0;	
	$subtotal = 0;
	$finaltotal=0;
	$finalsubtotal=0;
	foreach ($_SESSION["cartItem"] as $cart_itm)
	{
		$product_name = $cart_itm["prod_name"];
		$product_qty = $cart_itm["qty"];
		$product_price = $cart_itm["prod_price"];
		$product_code = $cart_itm["prod_code"];
		
		echo '<td>'.$product_name.'</td>';
		echo '<td>'.$product_price.'</td>';
		$subtotal = ($product_price * $product_qty);
		$finalsubtotal = number_format($subtotal, 2, '.', '');
		echo '<td>'.$finalsubtotal.'</td>';
		echo '<td><input type="text" size="2" name="productqty['.$product_code.']" value="'.$product_qty.'" /></td>';		
		echo '<td><input type="checkbox" name="remove_code[]" value="'.$product_code.'" /> Remove</td>';
		echo '</tr>';
		
		$total = ($total + $subtotal);
		$finaltotal = number_format($total, 2, '.', '');
			}
	echo '<tr>';	
	echo '<td></td><td></td><td>'.$finaltotal.'</td>';
	echo '
	<td><input type="submit" value="Update" name="updatebtn"></td>
	<td><a href="OurProducts.php">Add more items</a></td>';
	echo '</tr></table>';
	
	//$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	//echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
	echo '</form>';
	echo '</div>';
	
	
 
}
?>

