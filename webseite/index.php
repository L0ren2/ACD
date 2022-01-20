<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Online-Shop</title>
	</head>
	<body>
		<h1>Welcome to the online drug store</h1>
		<table>
			<th>Product</th><th>Quantity</th>
			<?php
			$json = file_get_contents('http://txt-reader');
			$obj = json_decode($json);
			$products = $obj->products;
			$quantities = $obj->quantity;
			foreach(array_combine($products, $quantities) as $product => $quantity) {
				echo "<tr><td>$product</td><td>$quantity</td></tr>";
			}
			?>
		</table>
	</body>
</html>

