<section class="section-sidebar bg-secondary section-posts">
	<h3>Related posts</h3>
	<?php
	
		$categories_ids = wp_get_post_categories($post->ID);
		
		if ($categories_ids)
		{
			$args=array(
				'category__in' => array($categories_ids[0]),
				'post__not_in' => array($post->ID),
				'posts_per_page' => 4,
				'caller_get_posts' => 1
			);
			
			$my_query = new WP_Query($args);
			
			if($my_query->have_posts())
			{
				while ($my_query->have_posts()) : $my_query->the_post() ?>
				
				<a href="<?php the_permalink() ?>" class="post">
					<div class="content">
						<div class="thumbnail" data-eq-group="thumbnail">
							<?php if (has_post_thumbnail()) : ?>
								<?php the_post_thumbnail(array(322, 182)) ?>
							<?php else : ?>
								<img src="<?php bloginfo('template_url') ?>/img/post-thumbnail-default.jpg" alt="Paymentsense default post thumbnail" />
							<?php endif ?>
						</div>
						<h2 data-eq-group="title"><?php the_title() ?></h2>
						<small data-eq-group="categories"><?php the_categories() ?></small>
						<img src="<?php bloginfo('template_url') ?>/img/icon-arrow-right.svg" class="icon" alt="Arrow right icon" />
					</div>
				</a>
				
				<?php endwhile;
			}
			
			wp_reset_query();
			
			echo '<a href="'.get_category_link($categories_ids[0]).'" class="btn-more"><i>See more ></i></a>';
		}
	?>
</section>