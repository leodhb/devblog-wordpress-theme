<?php get_header(); ?>
		<div class="col-lg-5 order-2 order-lg-1 blog-main pt-4">
            <?php
                if ( have_posts() ) : while ( have_posts() ) : the_post();
                    get_template_part( 'inc/content', get_post_format() );
                endwhile;
            ?>
            <nav>
                <ul class="pagination">
                    <li class="page-item"><?php next_posts_link( 'Avançar' ); ?></li>
                    <li class="page-item"><?php previous_posts_link( 'Voltar' ); ?></li>
                </ul>
            </nav>
            <?php endif; ?>
		</div> <!-- /.blog-main -->
<?php get_footer(); ?>