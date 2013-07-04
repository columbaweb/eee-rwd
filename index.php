<?php get_header(); ?>

<div id="content">
   <div id="slider">
   </div>
   
   <section id="promo-box" class="column12">  
      <p class="lead"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin velit sapien, gravida et venenatis at, sollicitudin aliquet dui. Nulla facilisi. Sed vestibulum, quam ultricies suscipit volutpat, nibh enim semper justo, at condimentum urna eros ut justo. Nulla suscipit, erat a pretium hendrerit, augue turpis feugiat ligula, quis fringilla sapien ligula a lectus</p>
   </section>

   <?php query_posts('post_type=services'); ?>
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="column3" id="post-<?php the_ID(); ?>">
         <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
         <a class="post-thumbnail" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
         <?php the_excerpt(); ?>
         <a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
      </div>
   <?php endwhile; endif; wp_reset_query(); ?>
	
   <section>
      <?php query_posts('category_name=uncategorized&posts_per_page=5'); ?>
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="column3" id="post-<?php the_ID(); ?>">
               <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
               <div class="meta">
                  <span class="date"><?php the_time('F jS, Y') ?> | </span>
                  <span class="author"><?php the_author_posts_link(); ?> | </span>
                  <span class="categories">
                     <?php foreach((get_the_category()) as $category) {
                        if ($category->cat_name != 'Front Page') {
                           echo '<a href="' . get_category_link( $category->term_id ) . '"  ' . '>' . $category->name.'</a>   ';
   		      }
                     } ?>
                  </span>
               </div>
               <a class="post-thumbnail" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>      
               <?php the_excerpt(); ?>
               <a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
            </div>   
         <?php endwhile; endif; wp_reset_query(); ?>
	</section>
</div>

<?php get_footer(); ?>



		