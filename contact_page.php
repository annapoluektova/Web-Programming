<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>My Contact Info.</title>

        <!-- Import Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

    </head>
    <body>
        <div class="container">
            <h4>My Contact Info.</h4>
            <?php
            require 'site_functions.php';
			//when we get the id, we address to the function ‘printContact($id)’
			//in site_functions.php.
            if (isset($_GET['id'])) {
                printContact($_GET['id']);
            }else{
			//if we do not get the id, we return to the main page.
                header('location: index.php');
                exit();
            }
            ?>
        </div>
    </body>
</html>