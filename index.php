<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

    <title>page d'acceuil</title>
</head>
<body>
    <header>
        <div class="container-header">
            <div class="row d-flex">
                <div class="col-12">
                    <div class="move-header-lien">
                        <ul class="header-lien d-flex">
                            <li class="li-acceuil"><a class="lien-acceuil" href="index.html">Accueil</a></li>
                            <li class="li-apropos-contact"><a class="lien-apropos-contact" href="a-propos.html">A propos</a></li>
                            <li class="li-apropos-contact"><a class="lien-apropos-contact" href="contact.html">Contact</a></li>
                        </ul>  
                    </div>                   
                                                            
                </div>
            </div>
        </div>
    </header>
    <section class="about pt-5">
        <div class="container">
            <div class="row">
                <div class="col-6 offset-4 div-en-quelques-mots p-5">
                    <div class="title">
                        <h1>Bonjour et bienvenu sur ma page </h1>
                    </div>
                    <div class="en-quelques-mots">
                        <h2 class="title-en-quelques-mots">En quelques mots</h2>
                    </div>
                    <div class="paragraphe-presentation">
                        <p>
                            Je m'appelle Melvyn Raust, j'ai 25 ans et je suis actuellement 
                            en formation dans le domaine du développement web et web mobile.                                                       
                            Passionné d'informatique depuis très jeune, je me suis lancé  dans  cette formation pour pouvoir plus tard faire de ma passion mon  métier.</p>
                    </div>
                    <a class="btn btn-primary" href="a-propos.html">A propos</a>
                </div>
                <div class="col-6 offset-4 div-en-quelques-mots p-5 pb-5">
                    <img class="img-profil" src="images/photo-profil.jpg" alt="images">
                </div>
            </div>
        </div>
    </section>
    <section class="competence">
        <div class="container-competence text-center">
            <div class="row">
                <div class="col-12 div-competence d-flex justify-content-center">
                    <div class="competence-h2">
                        <h2 class="title-competences">Mes compétences</h2>
                    </div>
                    
                </div>               
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <ul class="competence-ul">
                        <div class="competences-div">
                                <li>html</li>
                                <p>Niveau débutant</p>
                        </div class="competences-div">
                        <div>
                            <div class="competences-div">
                                <li>css</li>
                                <p>Niveau débutant</p>  
                            </div>                           
                        </div>
                       <div class="competences-div">
                            <li>js</li>
                            <p>Niveau débutant</p>
                       </div>                       
                    </ul>
                </div>
                <div class="col-12 col-md-6">
                    <ul class="competence-ul">
                        <div class="competences-div">
                            <li>bootstrap</li>
                            <p>Niveau débutant</p>
                        </div>
                        <div class="competences-div" >
                            <li>github</li>
                            <p>Niveau débutant</p>
                        </div>
                        <div class="competences-div">
                            <li>figma</li>
                            <p>Niveau débutant</p>
                        </div>
                        
                    </ul>
                </div>
            </div>
        </div>
    </section>
   <footer>
    <div class="container">
        <div class="row">
            <div class="col-6 footer-lien">
                <div class="footer-title">
                    <h2>Vous souhaitez me contacter ?</h2>                   
                </div> 
                <div class="lien-footer">
                    <a class="lien-footer-contact" href="contact.html">Me contacter</a>
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