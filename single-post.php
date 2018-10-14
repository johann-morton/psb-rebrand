<?php get_header() ?>
<main>
	<?php while ( have_posts() ) : the_post() ?>
		<section class="section-post max-width-4 mx-auto">
			<div class="breadcrumbs">
				<a href="<?php echo esc_url(home_url('/')) ?>">Blog</a> > <?php the_categories(1, true) ?> > <?php the_title() ?>
			</div>
			<h1><?php the_title() ?></h1>
			<span class="categories left"><?php the_categories() ?></span>
			<span class="date right"><?php the_date('j F Y') ?></span>
			<div class="clearfix"></div>
			<div class="thumbnail">
				<?php the_post_thumbnail('full') ?>
			</div>
			<div>
				<div class="content col col-12 md-col-12 lg-col-8">
					<?php the_content() ?>
					<div class="social">
						<hr>
						<div class="center">
							<span class="md-hide lg-hide share-this-mobile">Share this on:</span>
							<div class="flex items-center justify-center">
								<span class="xs-hide">Share this on:</span>
								<span class="twitter">
									<a href="https://twitter.com/share" class="twitter-share-button" data-text="<?php echo trim_text(get_the_title(), 100).' ' ?>"></a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
								</span>
								<span class="facebook">
									<div id="fb-root"></div>
						            <script>(function (d, s, id) {
						                    var js, fjs = d.getElementsByTagName(s)[0];
						                    if (d.getElementById(id))
						                        return;
						                    js = d.createElement(s);
						                    js.id = id;
						                    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
						                    fjs.parentNode.insertBefore(js, fjs);
						                }(document, 'script', 'facebook-jssdk'));
						            </script>
						            <div class="fb-share-button" data-layout="button" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u&amp;src=sdkpreparse">Share</a></div>
								</span>
								<span class="linkedin">
									<script src="//platform.linkedin.com/in.js" type="text/javascript" data-svr-inline="false"> lang: en_US</script>
						            <script type="IN/Share" data-url="<?php echo the_permalink(); ?>"></script>
								</span>
							</div>
						</div>
					</div>
					<?php if (comments_open() || get_comments_number()) : ?>
						<?php get_template_part('post', 'comments') ?>
					<?php endif ?>
				</div>
				<div class="content col col-12 md-col-12 lg-col-4">
					<?php get_template_part('post', 'sidebar') ?>
				</div>
				<div class="clearfix"></div>
			</div>
		</section>
	<?php endwhile ?>
</main>
<?php get_footer();
