<?php get_header(); ?>


    <section class="page-a-propos">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="div-h1-a-propo">
                        <h1>Vous souhaitez en savoir plus sur moi ? </h1>
                        
                    </div>
                    <div class="parcours-pro-title">
                        <h2 class="title-en-quelques-mots">Mon parcours professionnel</h2>
                    </div>
                    <div class="parcours-pro-para">
                        <p class="parcours-pro-text">
                            2013-2014: Maçon (dima)
                        </p>                                     
                        <p class="parcours-pro-text">
                            2014-2016: Maçon (apprentissage)
                        </p>                                      
                        <p class="parcours-pro-text">
                            2016-2018: Serrurier-Métallier (apprentissage)
                        </p>                  
                        <p class="parcours-pro-text">
                            2018-2020: Serrurier-Métallier (CDI)    
                        </p>                  
                      <p class="parcours-pro-text">
                            2021-2023: Opérateur de production (CDI)
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="centre-interet-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="centre-interet-title">
                        <h2>Mes centres d'intérêt</h2>
                    </div>
                    <div class="centre-interet-text">
                        <p class="centre-interet">
                        <?php $post = get_post(124) ?>
                        <?php echo $post->post_content ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <?php get_footer(); ?>