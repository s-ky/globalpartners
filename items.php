<?php $pageTitle= "Global Partners | Items";?>
<?php $page= items;?>

<?php include('includes/products.php') ?>

<?php include('includes/header.php') ?>
	<section>
	 
		<div class="section shirts page">

			<div class="wrapper">
				<h3> Full Catalog of Products</h3>
				<ul class="products">
					<?php foreach($products as $product_id => $product) { 
							echo "<li>";
							echo '<a href="item.php?id='. $product_id . '">';
							echo '<img src="' . $product["img"] . '" alt="' . $product["name"] . '">';
							echo "<p>".$product["name"]."</p>";
							echo "</a>";
							echo "</li>";
						}
					?>
				</ul>
				
			</div>
		</div>
		
	</section>
<?php include('includes/footer.php') ?>

