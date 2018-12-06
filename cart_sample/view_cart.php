<?php session_start(); ?>
<?php
	function getProductByIdFromSession($productId){
		$productList = $_SESSION['productList'];
		foreach($productList as $product){
			if($product['Id']==$productId){
				return $product;
			}
		}
	}
?>
<?php
	if($_SESSION['cart']){
		$cart = $_SESSION['cart'];
		echo "<table border='1'><tr><td>Product</td><td>Quantity</td></tr>";
		foreach($cart as $productId=>$quantity){
			$product = getProductByIdFromSession($productId);
			echo"<tr>
				<td>$product[Name]</td>
				<td>$quantity</td>
				<td>
					<a href='add_to_cart.php?pid=$productId'>modify</a>
					<a href='remove_from_cart.php?pid=$productId'>remove</a>
				</td>
			</tr>";
		}
		echo "</table>";
		echo "<a href='product_display.php'>Continue Shopping</a>";	
	}
	
?>