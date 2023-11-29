<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <title>page d'acceuil</title>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
<!--
<header>
        <div class="container-header">
            <div class="row d-flex">
                <div class="col-12">
                    <div class="move-header-lien">
                        <ul class="header-lien d-flex">
                        <nav id="site-navigation" class="main-navigation">
                                    <?php
                                    wp_nav_menu(
                                        array(
                                            'theme_location' => 'main-menu',
                                            'menu_id'     => 'primary-menu',
                                        )
                                    );
                                    ?>                          
                        </ul>  
                    </div>                                                                             
                </div>
            </div>
        </div>
</header>
                                -->
    <header>
        <div class="container-header">
            <div class="row d-flex">
                <div class="col-12">
                    <div class="move-header-lien">
                        <ul class="header-lien d-flex">
                            <li class="li-acceuil"><a class="lien-acceuil" href="http://localhost/wordpress/">Accueil</a></li>
                            <li class="li-apropos-contact"><a class="lien-apropos-contact" href="http://localhost/wordpress/a-propos/">A propos</a></li>
                            <li class="li-apropos-contact"><a class="lien-apropos-contact" href="http://localhost/wordpress/contact/">Contact</a></li>
                        </ul>  
                    </div>                   
                                                            
                </div>
            </div>
        </div>
    </header>