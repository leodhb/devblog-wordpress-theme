<?php get_header(); ?>
		<div class="col-lg-5  order-2 order-lg-1 blog-main pt-4">
            <h2 class="blog-post-title">Resultados da pesquisa por "<?php echo get_search_query(); ?>"</h2>
            <hr class="mb-4">
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
            <?php else: ?>
                <p class="lead blog-description">Nenhum post encontrado =(</p>
            <?php endif; ?>
		</div> <!-- /.blog-main -->
<?php get_footer(); ?>