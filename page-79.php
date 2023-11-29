

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css"> 
    <title>contact</title>
</head>
<body id="body-contact">
<?php get_header(); ?>
   <div class="titreh1-contact">
    <h1>Vous souhaitez me contacter ?</h1>
</div>  
   <section class="section-contact">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 top-input">
                <form>
                    <div class="mb-3">                    
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Votre Nom">
                    </div>
                    <div class="mb-3">
                      <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Numéro de téléphone">
                    </div>
                    <div class="mb-3 form-check">
                    </div>
                  </form>
            </div>
            <div class="col-12 col-md-6 top-input">
                <form>
                    <div class="mb-3">
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Votre Prénom">
                    </div>
                    <div class="mb-3">
                      <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Votre adresse email">
                    </div>
                    <div class="mb-3 form-check">
                    </div>
                  </form>
            </div>
        </div>
        
            <input type="text" class="form-control" id="input-message" placeholder="Votre message">
        <div class="bouton-form">
            <button type="submit" id="boutton-contact" class="btn btn-primary">Envoyer</button>
        </div>
        
    </div>
   </section>
   <footer>
    <div class="container">
        <div class="row">
            <div class="col-6 footer-lien">
                <div class="footer-title">
                    <h2>Retourner à la page d'Accueil ?</h2>                   
                </div> 
                <div class="lien-footer">
                    <a class="lien-footer-contact" href="contact.html">Page d'Accueil</a>
                </div>               
            </div>
            <div class="col-6 footer-lien ">
                <div class="footer-title">
                     <h2>Vous souhaitez en savoir plus ?</h2>
                </div>
                <div class="lien-footer">
                    <a class="lien-footer-contact" href="a-propos.html">A propos</a>
                </div>
               
            </div>
        </div>
    </div>
   </footer>
</body>
</html>