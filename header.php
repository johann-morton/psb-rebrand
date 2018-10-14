<!DOCTYPE html>
    <html <?php language_attributes(); ?>>
        <head>
            <meta charset="<?php bloginfo('charset') ?>" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo ps_get_title() ?></title>
            <link rel="profile" href="http://gmpg.org/xfn/11" />
            <link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
            <?php if (is_single()) : ?>
            	<link rel="alternate" href="<?php echo get_permalink() ?>" hreflang="en-gb" />
           	<?php endif ?>
			    <!-- GTM frm 20-11-16 -->
	    <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MDSCRDH');</script>
        <!-- End Google Tag Manager -->
            <?php wp_head() ?>
            <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url') ?>/css/basscss.min.css" />
            <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url') ?>" />
        </head>
        <body <?php body_class(); ?>>
			<!-- GTM from 20-11-16 -->
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MDSCRDH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Start Paymentsense json schema render -->
<?php
 //Add schema to non AMP content
 global $post;
 $url = explode( '/',  $_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI] );
 if(end($url).prev($url) != 'amp' && $url[1] != 'category' && $url[1] != '')
 {
  $post = get_post( $post );
  $title = isset( $post->post_title ) ? $post->post_title : '';
  //$description = strip_tags(get_the_excerpt());
  $thum = get_post_thumbnail_id( $post_id );
  $dims = wp_get_attachment_image_src( $thum );
  $url = $uri.'/img/post-thumbnail-default.jpg';
  if ( $thum ) 
  {
   $url = wp_get_attachment_image_url( $thum, $size );
  }
  echo '<script type="application/ld+json">';
  echo '{';
  echo ' "@context":"http://schema.org",';
  echo ' "@type":"BlogPosting",';
  echo ' "headline":"'.$title.'",';
  echo ' "image":';
  echo ' {';
  echo '  "@type":"ImageObject",';
  echo '  "url":"'.$url.'",';
  echo '  "width":'.$dims[1].',';
  echo '  "height":'.$dims[2];
  echo ' },';
  echo ' "author":';
  echo ' {';
  echo '  "@type":"Organization",';
  echo '  "name":"Paymentsense",';
  echo '  "logo":';
  echo '  {';
  echo '   "@type":"ImageObject",';
  echo '   "url":"https://www.paymentsense.co.uk/blog/wp-content/uploads/2016/04/Paymentsense-named-as-one-.jpg"';
  echo '  }';
  echo ' },';
  echo ' "datePublished":"'.get_the_date('Y-m-d').'",';
  echo ' "publisher":';
  echo ' {';
  echo '  "@type":"Organization",';
  echo '  "name":"Paymentsense",';
  echo '  "logo":';
  echo '  {';
  echo '   "@type":"ImageObject",';
  echo '   "url":"https://www.paymentsense.co.uk/blog/wp-content/uploads/2016/04/Paymentsense-named-as-one-.jpg"';
  echo '  }';
  echo ' },';
  echo ' "mainEntityOfPage":';
  echo ' {';
  echo '  "@type":"WebPage",';
  echo '  "@id":"'.get_permalink(get_the_ID(), false).'"';
  echo ' },';
  echo ' "dateModified":"'.get_the_modified_date('Y-m-d').'",';
  echo ' "description":"'.strip_tags(get_the_excerpt()).'"';
  echo '}';
  echo '</script>';
 }
?>
<!-- End Paymentsense json schema render -->

            <div class="m0 header fixed top-0 left-0 flex justify-between md-hide lg-hide">
                <div class="flex items-center">
                    <a href="https://www.paymentsense.co.uk/">
                        <div class="logo ml1" style="background-image: url('<?php bloginfo('template_url') ?>/img/paymentsense-logo.svg')"></div>
                    </a>
                </div>
                <div class="flex justify-end">
                    <div class="navbar-toggle">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="small-text">Menu</span>
                    </div>
                </div>
            </div>

            <header class="fixed xs-hide">
                <div class="max-width-4 mx-auto full-height">
                    <div class="flex justify-between full-height">
                        <div class="flex items-center">
                            <a href="https://www.paymentsense.co.uk/" title="<?php echo esc_attr(get_bloginfo('name', 'display')) ?>" rel="home">
                                <div class="logo ml2" style="background-image: url('<?php bloginfo('template_url') ?>/img/paymentsense-logo.svg')"></div>
                            </a>
                        </div>
                        <div class="flex items-stretch">
                            <div>
                                <a href="/quote/" class="ps-cta full-height items-center">GET YOUR FREE QUOTE<i></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="navbar xs-hide">
                <nav class="navbar-nav">
                    <div class="max-width-4 mx-auto full-height">
                        <ul class="md-flex justify-start">
                            <li class="nav-item">
                                <span>Card Machines</span>
                                <div class="nav-item-content">
                                    <ul>
                                        <li><span class="small-text">VIEW BY TYPE:</span></li>
                                        <li><a href="/card-machines/"><span class="gradient xs-hide sm-hide blue"></span>Compare Card Machines</a><hr class="md-hide lg-hide"></li>
                                        <li><a href="/card-machines/mobile/"><span class="gradient xs-hide sm-hide purple"></span>Mobile Card Machines</a><hr class="md-hide lg-hide"></li>
                                        <li><a href="/card-machines/portable/"><span class="gradient xs-hide sm-hide orange"></span>Portable Card Machines</a><hr class="md-hide lg-hide"></li>
                                        <li><a href="/card-machines/countertop/"><span class="gradient xs-hide sm-hide green"></span>Countertop Card Machines</a><hr class="md-hide lg-hide"></li>

                                    </ul>
                                    <ul>
                                        <li><span class="small-text">VIEW BY TECH:</span></li>
                                        <li><a href="/card-machines/contactless/"><span class="gradient xs-hide sm-hide blue"></span>Accept Contactless Payments</a><hr class="md-hide lg-hide"></li>
                                        <li><a href="/card-machines/apple-pay/"><span class="gradient xs-hide sm-hide blue"></span>Accept Apple Pay</a><hr class="md-hide lg-hide"></li>
                                        <li><a href="/card-machines/android-pay/"><span class="gradient xs-hide sm-hide blue"></span>Accept Android Pay</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <span>Card Processing</span>
                                <div class="nav-item-content">
                                    <ul>
                                        <li><span class="small-text">ARE YOU:</span></li>
                                        <li><a href="/accept-card-payments/"><span class="gradient xs-hide sm-hide blue"></span>New to Card Payments?</a><hr class="md-hide lg-hide"></li>
                                        <li><a href="/switch-provider/"><span class="gradient xs-hide sm-hide blue"></span>Switching Provider?</a><hr class="md-hide lg-hide"></li>
                                    </ul>
                                    <ul>
                                        <li><span class="small-text">VALUE ADDED SERVICES:</span></li>
                                        <li><a href="/merchant-accounts/"><span class="gradient xs-hide sm-hide blue"></span>Merchant Accounts</a><hr class="md-hide lg-hide"></li>
                                        <li><a href="/pci-compliance/"><span class="gradient xs-hide sm-hide blue"></span>PCI DSS Compliance</a><hr class="md-hide lg-hide"></li>
                                        <li><a href="/performance-reports/"><span class="gradient xs-hide sm-hide blue"></span>Performance Reports</a><hr class="md-hide lg-hide"></li>
                                        <li><a href="/gift-cards/"><span class="gradient xs-hide sm-hide blue"></span>Gift Cards</a><hr class="md-hide lg-hide"></li>
                                        <li><a href="/auto-roll-replacement/"><span class="gradient xs-hide sm-hide blue"></span>Auto Roll Replacement</a><hr class="md-hide lg-hide"></li>
                                        <li><a href="/taxi-payment-solutions/"><span class="gradient xs-hide sm-hide blue"></span>Taxi Payment Solutions</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <span>Online &amp; Phone Payments</span>
                                <div class="nav-item-content">
                                    <ul>
                                        <li><a href="/accept-payments-online/"><span class="gradient xs-hide sm-hide blue"></span>Accept Payments Online</a><hr class="md-hide lg-hide"></li>
                                        <li><a href="/payment-gateway/"><span class="gradient xs-hide sm-hide blue"></span>Payment Gateway</a><hr class="md-hide lg-hide"></li>
                                        <li><a href="/virtual-terminal/"><span class="gradient xs-hide sm-hide blue"></span>Virtual Terminal</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <span>Integrated Payments</span>
                                <div class="nav-item-content">
                                  <ul>
                                    <li><a href="/integrated-payments/"><span class="gradient xs-hide sm-hide blue"></span>For Merchants</a><hr class="md-hide lg-hide"></li>
                                      <li><a href="/integrated-payments/partners/"><span class="gradient xs-hide sm-hide blue"></span>For Partners</a></li>
                                  </ul>
                            </div></li>
                            <li class="nav-item">
                                <span>About Us</span>
                                <div class="nav-item-content">
                                    <ul>
                                        <li><a href="/about-us/"><span class="gradient xs-hide sm-hide blue"></span>Who we are</a><hr class="md-hide lg-hide"></li>
                                        <li><a href="/success-stories/"><span class="gradient xs-hide sm-hide blue"></span>Success Stories</a><hr class="md-hide lg-hide"></li>
                                        <li><a href="/blog/"><span class="gradient xs-hide sm-hide blue"></span>Blog</a><hr class="md-hide lg-hide"></li>
                                        <li><a href="/careers/"><span class="gradient xs-hide sm-hide blue"></span>Careers</a><hr class="md-hide lg-hide"></li>
                                        <li><a href="/contact-us/"><span class="gradient xs-hide sm-hide blue"></span>Contact Us</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item"><span><a href="http://support.paymentsense.com/hc/en-us">Help</a></span></li>
                        </ul>
                        <div class="mx-auto md-hide lg-hide">
                            <a href="/quote/" class="ps-cta block mt3">GET YOUR FREE QUOTE <i></i></a>
                        </div>
                    </div>
                </nav>
            </div>
            <?php // wp_nav_menu(array('theme_location' => 'main-menu', 'menu_class' => 'md-flex justify-start', 'container' => 'nav')); ?>
            <div class="clearfix m0 navbar md-hide lg-hide">
            <div class="dropdown">
                <div class="ps-circle-icon filled bg-success mx-auto">
                    <span class="ps-icon-phone"></span>
                </div>
                <h5 class="brand-success">Contact Sales</h5>
                <h6><span class="rTapNumber14776" style="visibility: visible;" data-partial="RTapTagHelper.cs">0808 163 4365</span></h6>
                <a href="tel:+448001032959">
                    <div class="ps-circle-icon filled bg-primary mx-auto">
                        <span class="ps-icon-phone"></span>
                    </div>
                    <h5 class="brand-primary">Customer Support</h5>
                    <h6><span>0800 103 2959</span></h6>
                </a>

                <a href="/quote/" class="ps-cta mt2">GET YOUR FREE QUOTE <i></i></a>
            </div>
            <nav class="navbar-nav">
    <div class="row">
        <ul class="md-flex justify-start">
            <li class="nav-item">
                <span>Card Machines</span>
                <div class="nav-item-content">
                    <ul>
                        <li><span class="small-text">VIEW BY TYPE:</span></li>
                        <li><a href="/card-machines/"><span class="gradient xs-hide sm-hide blue"></span>Compare Card Machines</a><hr class="md-hide lg-hide"></li>
                        <li><a href="/card-machines/mobile/"><span class="gradient xs-hide sm-hide purple"></span>Mobile Card Machines</a><hr class="md-hide lg-hide"></li>
                        <li><a href="/card-machines/portable/"><span class="gradient xs-hide sm-hide orange"></span>Portable Card Machines</a><hr class="md-hide lg-hide"></li>
                        <li><a href="/card-machines/countertop/"><span class="gradient xs-hide sm-hide green"></span>Countertop Card Machines</a><hr class="md-hide lg-hide"></li>

                    </ul>
                    <ul>
                        <li><span class="small-text">VIEW BY TECH:</span></li>
                        <li><a href="/card-machines/contactless/"><span class="gradient xs-hide sm-hide blue"></span>Accept Contactless Payments</a><hr class="md-hide lg-hide"></li>
                        <li><a href="/card-machines/apple-pay/"><span class="gradient xs-hide sm-hide blue"></span>Accept Apple Pay</a><hr class="md-hide lg-hide"></li>
                        <li><a href="/card-machines/android-pay/"><span class="gradient xs-hide sm-hide blue"></span>Accept Android Pay</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <span>Card Processing</span>
                <div class="nav-item-content">
                    <ul>
                        <li><span class="small-text">ARE YOU:</span></li>
                        <li><a href="/accept-card-payments/"><span class="gradient xs-hide sm-hide blue"></span>New to Card Payments?</a><hr class="md-hide lg-hide"></li>
                        <li><a href="/switch-provider/"><span class="gradient xs-hide sm-hide blue"></span>Switching Provider?</a><hr class="md-hide lg-hide"></li>
                    </ul>
                    <ul>
                        <li><span class="small-text">VALUE ADDED SERVICES:</span></li>
                        <li><a href="/merchant-accounts/"><span class="gradient xs-hide sm-hide blue"></span>Merchant Accounts</a><hr class="md-hide lg-hide"></li>
                        <li><a href="/pci-compliance/"><span class="gradient xs-hide sm-hide blue"></span>PCI DSS Compliance</a><hr class="md-hide lg-hide"></li>
                        <li><a href="/performance-reports/"><span class="gradient xs-hide sm-hide blue"></span>Performance Reports</a><hr class="md-hide lg-hide"></li>
                        <li><a href="/gift-cards/"><span class="gradient xs-hide sm-hide blue"></span>Gift Cards</a><hr class="md-hide lg-hide"></li>
                        <li><a href="/auto-roll-replacement/"><span class="gradient xs-hide sm-hide blue"></span>Auto Roll Replacement</a><hr class="md-hide lg-hide"></li>
                        <li><a href="/taxi-payment-solutions/"><span class="gradient xs-hide sm-hide blue"></span>Taxi Payment Solutions</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <span>Online &amp; Phone Payments</span>
                <div class="nav-item-content">
                    <ul>
                        <li><a href="/accept-payments-online/"><span class="gradient xs-hide sm-hide blue"></span>Accept Payments Online</a><hr class="md-hide lg-hide"></li>
                        <li><a href="/payment-gateway/"><span class="gradient xs-hide sm-hide blue"></span>Payment Gateway</a><hr class="md-hide lg-hide"></li>
                        <li><a href="/virtual-terminal/"><span class="gradient xs-hide sm-hide blue"></span>Virtual Terminal</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <span>Integrated Payments</span>
                <div class="nav-item-content">
                  <ul>
                    <li><a href="/integrated-payments/"><span class="gradient xs-hide sm-hide blue"></span>For Merchants</a><hr class="md-hide lg-hide"></li>
                      <li><a href="/integrated-payments/partners/"><span class="gradient xs-hide sm-hide blue"></span>For Partners</a></li>
                  </ul>
            </div></li>
            <li class="nav-item">
                <span>About Us</span>
                <div class="nav-item-content">
                    <ul>
                        <li><a href="/about-us/"><span class="gradient xs-hide sm-hide blue"></span>Who we are</a><hr class="md-hide lg-hide"></li>
                        <li><a href="/success-stories/"><span class="gradient xs-hide sm-hide blue"></span>Success Stories</a><hr class="md-hide lg-hide"></li>
                        <li><a href="/blog/"><span class="gradient xs-hide sm-hide blue"></span>Blog</a><hr class="md-hide lg-hide"></li>
                        <li><a href="/careers/"><span class="gradient xs-hide sm-hide blue"></span>Careers</a><hr class="md-hide lg-hide"></li>
                        <li><a href="/contact-us/"><span class="gradient xs-hide sm-hide blue"></span>Contact Us</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item"><span><a href="http://support.paymentsense.com/hc/en-us">Help</a></span></li>
        </ul>
        <div class="mx-auto md-hide lg-hide">
            <a href="/quote/" class="ps-cta block mt3">GET YOUR FREE QUOTE <i></i></a>
        </div>
    </div>
</nav>

        </div>
