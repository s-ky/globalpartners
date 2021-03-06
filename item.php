<?php include('includes/products.php');
if (isset($_GET["id"])) {
	$product_id = $_GET["id"];
	if (isset($products[$product_id])) {
		$product = $products[$product_id];
	}
}
if (!isset($product)) {
	header("Location: items.php");
	exit();
}
$pageTitle= $product["name"];
?>

<?php include('includes/header.php') ?>
	<section>
	 <div id="wrapper">
	  
		<div class="breadcrumb"><a href="items.php">Items</a> &gt; <?php echo $product["name"]; ?></div>
		<div class="shirt-picture">
		   <span>
			   <img src="<?php echo $product["img"]; ?>" alt="<?php echo $product["name"]; ?>">
		   </span>
		</div>
		
  
		<div class="shirt-details">
			<h3><span class="price">$<?php echo $product["price"]; ?></span> <?php echo $product["name"]; ?></h3>

			<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="<?php echo $product["paypal"]; ?>">
				<input type="hidden" name="item_name" value="<?php echo $product["name"]; ?>">
				<table>
				<tr>
					<th>
						<input type="hidden" name="on0" value="Size">
						<label for="os0">Size</label>
					</th>
					<td>
						<select name="os0" id="os0">
							<?php foreach($product["sizes"] as $size) { ?>
							<option value="<?php echo $size; ?>"><?php echo $size; ?> </option>
							<?php } ?>
						</select>
					</td>
				</tr>
				</table>
				<input type="submit" value="Add to Cart" name="submit">
			</form>
		</div>
		
		</div>
	</section>
<?php include('includes/footer.php') ?>

