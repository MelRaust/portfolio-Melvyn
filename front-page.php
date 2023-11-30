<?php get_header(); ?>
    <section class="about pt-5">
        <div class="container">
            <div class="row">
                <div class="col-6 offset-4 div-en-quelques-mots p-5">
                    <div class="title">
                        <h1>Bonjour et bienvenue sur ma page </h1>
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
                <div class="col-6 offset-4 div-en-quelques-mots p-5 pb-5 img">
                <img src="<?php echo bloginfo('template_directory')."/images/photo-profil.jpg"?>" alt="photo">
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
    <?php get_footer(); ?>