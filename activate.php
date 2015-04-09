<?php 
require 'core/init.php';
$general->logged_in_protect();

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css" >
	<title>Activate</title>
</head>
<body>	
	<div id="container">
		<div id="header">
			<div id="menu">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="register.php">Register</a></li>
			<li><a href="login.php">Login</a></li>
		</ul>
			</div><!-- #menu -->
		</div><!-- #header -->
	<div id="title">
		<h1 id="zombies">ZOMBIES</h1><h1 id="death">DEATH</h1>
	</div><!-- #title -->
	<div id="general">
		<h3>Account activation</h3>

    	<?php
        
        if (isset($_GET['success']) === true && empty ($_GET['success']) === true) {
	        ?>
	        <p>Thank you, we've activated your account. You're free to log in!</p>
	        <?php
	            
        } else if (isset ($_GET['email'], $_GET['email_code']) === true) {
            
            $email		=trim($_GET['email']);
            $email_code	=trim($_GET['email_code']);	
            
            if ($users->email_exists($email) === false) {
                $errors[] = "<p>Sorry, we couldn\'t find that email address</p>";
            } else if ($users->activate($email, $email_code) === false) {
                $errors[] = "<p>Sorry, we have failed to activate your account</p>";
            }
            
			if(empty($errors) === false){
			
				echo '<p>' . implode('</p><p>', $errors) . '</p>';	
		
			} else {
                header('Location: activate.php?success');
                exit();
            }
        
        } else {
            header('Location: index.php');
            exit();
        }
        ?>
    </div> <!-- #general -->
	</div> <!-- #container -->
</body>
</html>