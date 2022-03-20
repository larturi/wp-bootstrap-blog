<div class="col-md-3">
    <!-- <div class="card-body">
        <h4>Publicidad</h4>
        <hr>
        <img src="img/vertical.jpg" alt="Publicidad" class="img-fluid">
    </div> -->
    <?php if ( is_active_sidebar( 'widget-right' ) ) : ?>
        <?php dynamic_sidebar( 'widget-right' ); ?>
    <?php else : ?>
        <!-- Time to add some widgets! -->
    <?php endif; ?>
</div>