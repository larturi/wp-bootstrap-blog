<?php get_header(); ?>

        <div class="row">
            <!-- Entradas -->
            <div class="col-md-9">

                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

                    <!-- Entrada -->
                    <div class="card-body">
                        <a href="<?php the_permalink(); ?>">
                            <h2><?php the_title(); ?></h2>
                        </a>
                        <p class="small mb-0">Fecha: <?php the_time('F j, Y'); ?></p>
                        <p class="small mb-0">Autor: <?php the_author(); ?></p>
                        <p class="small mb-0">Categorias: <?php the_category(', '); ?></p>
                        <p class="small">Etiquetas: <?php the_tags('', ', ', '') ?></p>
                        <?php 
                            if(has_post_thumbnail()) {
                                the_post_thumbnail('post-thumbnail', array( 'class' => 'img-fluid mb-3' ) );
                            }
                        ?>
                        <?php the_excerpt(); ?>
                        <a href="single.html" class="btn btn-primary">Mas información</a>
                    </div>
                    <!-- Fin Entrada -->

                <?php endwhile; endif; ?>
                
              
                <!-- Paginador -->
                <div class="card-body">
                    <?php get_template_part('template-parts/content', 'paginacion') ?>
                </div>
                <!-- Fin Paginador -->
            </div>
            <!-- Fin Entradas -->

            <!-- Aside -->
            <div class="col-md-3">
                <div class="card-body">
                    <h4>Publicidad</h4>
                    <hr>
                    <img src="img/vertical.jpg" alt="Publicidad" class="img-fluid">
                </div>
            </div>
            <!-- Fin Aside -->
        </div>

    </div>
    <!-- Fin Blog -->

<?php get_footer(); ?>