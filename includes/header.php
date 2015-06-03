<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $pageTitle;?></title>
    <link rel="stylesheet" href="includes/css/normalize.css">
    <link href='http://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400italic,700italic,400,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="includes/css/main.css">
     <link rel="stylesheet" href="includes/css/style.css">
    <link rel="stylesheet" href="includes/css/responsive.css">
    <script src="../ckeditor/ckeditor.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
  </head>
  <body>
    <header>
      <a href="index.php" id="logo">
        <h1>Global Partners</h1>
        <h2>Marketing</h2>
      </a>
      <nav>
        <ul>
           <li><a href="about.php" <?php if ($page == about) echo 'class="selected"'; ?>>About</a></li>
           <li><a href="items.php" <?php if ($page == items) echo 'class="selected"'; ?>>Items</a></li>
           <li><a href="contact.php"<?php if ($page == contact) echo 'class="selected"'; ?>>Contact</a></li>
        </ul>
      </nav>
    </header>