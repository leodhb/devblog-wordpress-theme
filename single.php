<?php get_header(); ?>

		<div class="col-lg-5  order-2 order-lg-1 pt-4">
			<?php
                if ( have_posts() ) : while ( have_posts() ) : the_post();
                    get_template_part( 'inc/content-single', get_post_format() );
                endwhile; endif;
			?>

        <div id="comments">
          <hr>
          <h2>Comentários</h2>
          <script src="https://utteranc.es/client.js"
                    repo="leodhb/comments"
                    issue-term="pathname"
                    label="Comentários"
                    theme="github-dark"
                    crossorigin="anonymous"
                    async>
            </script>
        </div>

		</div> <!-- /.col -->

        

<?php get_footer(); ?>