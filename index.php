     <?php get_header() ?>
    <div class="container">
    <?php 
         if(have_posts(  )):
                while ( have_posts(  ) ) : the_post(  ) ; ?>
    <h2> <a href="<?php the_permalink(  )  ?>"></a> <?php the_title( ) ?> </h2>
    <?php the_content( ) ?>
    <?php endwhile;
            else :
                echo('no post');
            endif;
    ?>
    </div>
    <?php  get_footer()?>
    <?php wp_footer() ?>
</body>

</html>