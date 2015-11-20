<!--author: gustavo-->
    <!-- View Cart Box Start -->
<script>
function closeCart(){
	document.getElementById("cartClick").style.display = "none";
}
</script>
<?php
if(isset($_SESSION["cart_products"]) && count($_SESSION["cart_products"])>0)
{
	echo '<div id="view-cart">';
	echo '<h3>Your Shopping Cart</h3>';
	echo '<form method="post" action="cart_update.php">';
	echo '<table>';
	echo '<tbody>';
	echo '<tr>';
	echo '<td width="15%" ><b>Qty</b></td>';
	echo '<td width="50%"><b>Product</b></td>';
	echo '<td width="25%"><b>Price</b></td>';
	echo '<td width="10%"><b>Remove</b></td>';
	echo '</tr>';

	$total =0;
	$b = 0;
	foreach ($_SESSION["cart_products"] as $cart_itm)
	{
		$product_name = $cart_itm["product_name"];
		$product_qty = $cart_itm["product_qty"];
		$product_price = $cart_itm["product_price"];
		$product_code = $cart_itm["product_code"];
		$product_color = $cart_itm["product_color"];	
		
		//$bg_color = ($b++%2==1) ? 'odd' : 'even'; //zebra stripe
		//echo '<tr class="'.$bg_color.'">';
		echo '<tr>';
		echo '<td><input type="text" size="2" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" /></td>';
		echo '<td>'.$product_name.'</td>';
		echo '<td>U$'.$product_price.'</td>';
		echo '<td><input type="checkbox" name="remove_code[]" value="'.$product_code.'" /></td>';
		echo '</tr>';
		$subtotal = ($product_price * $product_qty);
		$total = ($total + $subtotal);
	}
	echo '<tr><td colspan="4">';
	echo '<p><strong>Total: U$'.$total.'</strong></p>';
	echo '</td></tr>';
	echo '<td colspan="4">';
	echo '<button type="submit">Update</button> <button type="button"><a href="view_cart.php">Checkout</a></button> <button type="button" onclick="closeCart()">Close</button>';
	echo '</td>';
	echo '</tbody>';
	echo '</table>';

	$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
	echo '</form>';
	echo '</div>';

}
?>
<!-- View Cart Box End -->
