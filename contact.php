<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST"){
 	$name= $_POST["name"];
 	$email= $_POST["email"];
 	$message = $_POST["message"];
 	
 	//SEND EMAIL
	header("Location: contact.php?status=thanks");
	exit;
}

?>


<?php $pageTitle= "Global Partners | Contact";?>
<?php $page= contact;?>
<?php include('includes/header.php') ?>
	  <section>
    <div class="section page">
	  <?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
	 		<p> Thanks for the email!  </p>
	  <?php } else {?>
    
		<div class="wrapper">
	    <p>We would love to hear from you!</p>
        <form method="post" action="contact.php">
        	<table>
        		<tr>
        			<th>
        				<label for="name">Name</label>
        			</th>
        			<td>
        				<input type= "text" name= "name" id = "name">
        			</td> 
        		</tr>
        		<tr>
        			<th>
        				<label for="email">Email</label>
        			</th>
        			<td>
        				<input type= "text" name= "email" id = "email">
        			</td> 
        		</tr>
        		<tr>
        			<th>
        				<label for="message">Message</label>
        			</th>
        			<td>
        				<textarea name= "message" id = "message"></textarea>
        			</td> 
        		</tr>
        	</table>
        	<input type="submit" value= "Send">
        </form>
    	</div>
     </div>
	  </section>
	<?php } ?>
	  
<?php include('includes/footer.php') ?>

