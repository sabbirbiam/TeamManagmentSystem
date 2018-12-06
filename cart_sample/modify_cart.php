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
	if($_SERVER['REQUEST_METHOD']=="GET"){
		if(isset($_REQUEST['pid'])){
			$productId = $_REQUEST['pid'];
			$product = getProductByIdFromSession($productId);
			
			echo "<form method='post'>";
			echo "<input type='hidden' name='pid' value='$productId'/>";
			echo "<b>$product[Name]</b><br/>Price: $product[SellingPrice]<br/>";
			echo "Qunatity: <input type='text' name='quantity' value='".$_SESSION['cart'][$productId]."'/>";
			echo "<input type='submit' value='Update'/>";
			echo "</form>";
		}
	}
	else if($_SERVER['REQUEST_METHOD']=="POST"){
		$productId = $_POST['pid'];
		$quantity = $_POST['quantity'];
				
		$_SESSION['cart'][$productId] = $quantity;
		
		echo "Cart Updated<br/>";
		echo "<a href='product_display.php'>Continue Shopping</a>";
		echo "<br/>";
		echo "<a href='view_cart.php'>View Cart</a>";
	}
?>