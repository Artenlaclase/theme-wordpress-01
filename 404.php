<?php get_header(); ?>

<main class='container'>
    <div class="pagina404 my-5">
        <h1>404 PÁGINA NO ENCONTRADA</h1>
        <h2>Haga <a href=" <?php echo home_url();?>">click aquí</a> para volver a la página principal. </h2>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/error-404.png" alt="error 404" width="100%" height="430px">
    </div>
</main>


<?php get_footer(); ?>