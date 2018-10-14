<?php get_header() ?>
<main>
	<section class="section-hero">
		<div class="mx-auto">
			<h1>Paymentsense Blog</h1>
		</div>
	</section>
	<section class="section-search bg-secondary flex items-center">
		<form class="mx-auto" role="search" method="get" action="/blog"/>
			<div class="mx-auto">
				<span>
					<strong>Filter Categories</strong>
				</span>
				<span>
					<?php
						
						if (is_category())
						{	
							$cat = get_term_by('name', single_cat_title('', false), 'category');
							
							$selected_category_slug =  $cat->slug;
						}
						else
						{
							$selected_category_slug = '';
						}
						
					?>
					<?php wp_dropdown_categories(array('show_option_all' => 'All Categories', 'value_field' => 'slug', 'selected' => $selected_category_slug)) ?>
				</span>
				<span>
					<label class="screen-reader-text" for="input-search">Search for:</label>
					<input id="input-search" type="text" name="s" placeholder="Search" value="<?php echo get_search_query() ?>"><input type="submit" value="" class="ps-cta">
				</span>
			</div>
		</form>
	</section>
	<section class="section-home-copy max-width-3 mx-auto">
		<?php if (is_category()) : ?>
			<p><?php echo category_description($cat) ?></p>
		<?php else : ?>
			<p>Welcome to the Paymentsense blog.</p>
		<?php endif ?>	
	</section>
	<section class="section-posts max-width-3 mx-auto">
		<?php if (have_posts()) : ?>
			<?php $count = 0 ?>
			<div class="row" data-eq>
				<?php while (have_posts()) : the_post() ?>
					<?php if( $count % 3 === 0 ) : ?>
						</div>
						<div class="row" data-eq>
					<?php endif ?>
					<a href="<?php the_permalink() ?>" id="post-<?php the_ID(); ?>" class="post col col-12 md-col-4 lg-col-4">
						<div class="content">
							<div class="thumbnail" data-eq-group="thumbnail">
								<?php if (has_post_thumbnail()) : ?>
									<?php the_post_thumbnail(array(232, 182)) ?>
								<?php else : ?>
									<img src="<?php bloginfo('template_url') ?>/img/post-thumbnail-default.jpg" alt="Paymentsense default post thumbnail" />
								<?php endif ?>
							</div>
							<h2 data-eq-group="title"><?php the_title() ?></h2>
							<small data-eq-group="categories"><?php the_categories() ?></small>
							<img src="<?php bloginfo('template_url') ?>/img/icon-arrow-right.svg" class="icon" alt="Arrow right icon" />
						</div>
					</a>
					<?php $count++ ?>
				<?php endwhile ?>
			</div>
			<div class="clearfix"></div>
			<?php ps_the_posts_pagination(array('mid_size' => 4, 'prev_text' => '', 'next_text' => '')) ?>
		<?php endif ?>
	</section>
</main>
<?php get_footer() ?>

