<?php?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php wp_head(); ?>
</head>
<body>

<!-- Header -->
   <header>
            <div class="logo">
                 <img src="<?php bloginfo('template_directory');?>/images/logo.PNG" alt="logo"> 
            </div>
            
            <div class="nav">   
                <button class="nav-toggle" id = nav_toggle>
                        <div class="hamburger"></div>       
                </button>

                <div class="navbar">
                    <ul class="navlist">
                        <li class= "list-item"><a href="">Home</a></li>
                        <li class= "list-item"><a href="">Service</a></li>
                        <li class= "list-item"><a href="">Company</a></li>
                        <li class= "list-item"><a href="">Contact</a></li>
                    </ul>
                </div>
            </div>
        
    </header>    
        