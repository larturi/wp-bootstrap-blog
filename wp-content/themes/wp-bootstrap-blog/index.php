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
                        <img src="img/1200.jpg" alt="Imagen blog" class="img-fluid mb-3">
                        <?php the_excerpt(); ?>
                        <a href="single.html" class="btn btn-primary">Mas información</a>
                    </div>
                    <!-- Fin Entrada -->

                <?php endwhile; endif; ?>
                

              
                <!-- Paginador -->
                <div class="card-body">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
                        </ul>
                    </nav>
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