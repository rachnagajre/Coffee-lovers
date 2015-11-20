<!--author: gustavo-->
<?php
// Filter by anything you want. It will be injected in the query.
$filter="WHERE category='Coffee' AND roast='Light'";
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Coffee Lovers </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./css/style3.css">
        <script>
			function addCart() {
    			alert('Success');
			}
		</script>
    </head>

    <body>
        <?php
        include("pagelayout.php");
        
        $results = $mysqli->query("SELECT product_code, product_name, product_desc, product_img_name, price FROM products ".$filter." ORDER BY id ASC");
if($results){
$products_item = '<table class="pmp" width="100%" border="0" cellspacing="5px" cellpadding="0"><tbody><tr>';
//fetch results set as object and output HTML
$count = 0;
while($obj = $results->fetch_object())
{
//$obj->product_desc = Description of the product
$count++;
$products_item .= '
    	<td>
    		<div class="pmpProductBox">
    		<form method="post" action="cart_update.php">
    		<img src="./image/products/'.$obj->product_img_name.'"/>
        	<h4>'.$obj->product_name.'</h4>
        	<p>U$'.$obj->price.'</p>
        	<label>
				<span>Quantity</span>
				<input type="text" size="2" maxlength="2" name="product_qty" value="1" />
			</label>
			<input type="hidden" name="product_code" value="'.$obj->product_code.'" />
			<input type="hidden" name="type" value="add" />
			<input type="hidden" name="return_url" value="'.$current_url.'" />
			<button type="submit" onClick="addCart()" id="addToCart">Add to cart</button>
        	</form>
        	</div>
        </td>
        
';
// Used to break the row in the table
if ($count % 3 == 0){
$products_item .= '</tr><tr>';
}
}
if ($count == 0){
$products_item .= '<td>Sorry there is no product that matches your criteria.</td>';
}
$products_item .= '</tr></tbody></table>';

}    
?>

        <!-- page image section layout -->
        <aside>
            <h1>Description</h1>
            <p>This type of coffee is usually very good to give you energy because of its high values of caffeine. A perfect match to drink with milk.</p>
        </aside>
        <section>
            <h1>Light Roast Coffee</h1>
			<?php
			echo $products_item;
			?>
        </section>

        <?php
        include("pageFooter.php");
        ?>

    </body>
</html>
