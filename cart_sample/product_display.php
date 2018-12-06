<?php session_start(); ?>
Search:<input type="text" onkeyup="request(this.value)" />
<br/>
<div style="border: 1px solid #000;"></div>




<?php
	include_once("data_access_helper.php");
	function getAllProductsFromDb(){
		$query = "SELECT Id, Name, Stock, SellingPrice FROM Product";  
		$result = executeQuery($query);	
		$productList = array();
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$productList[$i] = $row;				
			}
		}
		return $productList;
	}
?>
<?php	
	$productList = getAllProductsFromDb();
	$_SESSION['productList'] = $productList;	
	
	if (is_array($productList) || is_object($productList)){	
		foreach($productList as $product){
			echo "<b>$product[Name]</b><br/>$product[SellingPrice]<br/>";
			
			if($product['Stock']>0){
				echo "<span style='color: green'>Available</span><br/>";
				echo "<a href='add_to_cart.php?pid=$product[Id]'>Add to Cart</a><br/><br/>";
			}
			else{
				echo "<span style='color: red'>Sold Out</span>";
			}
		}
	}
?>

 

<script type="text/javascript">	
	function request(value){
		if(value.length!=0){
			var obj = new XMLHttpRequest();
			 
			obj.open('GET', 'response.php?key='+value, true);
			obj.send();
 
			obj.onreadystatechange = function(){			
				if(obj.readyState==4){
					var div = document.getElementsByTagName("div")[0];
					div.innerHTML = obj.responseText;
					
					 
				}
			}
		}
	}	
</script>
