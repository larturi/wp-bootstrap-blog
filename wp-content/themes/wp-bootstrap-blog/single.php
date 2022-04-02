<?php get_header(); ?>

        <div class="row">
            <!-- Entradas -->
            <div class="col-md-9">

                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

                    <!-- Entrada -->
                    <div class="card-body">
                        <h2><?php the_title(); ?></h2>
                        <p class="small mb-0">Fecha: <?php the_time('F j, Y'); ?></p>
                        <p class="small mb-0">Autor: <?php the_author(); ?></p>
                        <p class="small mb-0">Categorias: <?php the_category(', '); ?></p>
                        <p class="small">Etiquetas: <?php the_tags('', ', ', '') ?></p>
                        
                        <?php 
                            if(has_post_thumbnail()) {
                                the_post_thumbnail('post-thumbnail', array( 'class' => 'img-fluid mb-3' ) );
                            }
                        ?>
                        
                        <?php the_content(); ?>

                        <?php 
                            if(comments_open() || get_comments_number()) {
                                comments_template();
                            }
                        ?>
                    </div>
                    <!-- Fin Entrada -->

                <?php endwhile; endif; ?>
            
              
            </div>
            <!-- Fin Entradas -->

             <!-- Aside -->
             <?php 
                get_sidebar();
            ?>
            <!-- Fin Aside -->
        </div>

    </div>
    <!-- Fin Blog -->

<?php get_footer(); ?>