<!DOCTYPE html>
<html lang="ja">
	<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>;
    charset=<?php bloginfo('charset'); ?>" />
	
    <title><?php bloginfo('name'); ?></title>
    
    <!-- @import css -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	
    </head>
	
	<body>
	
		<div id="page_wrap" class="container row">

			<header class="row">

				<div class="col span_8 blank">""</div>
				<div id="logo" class="col span_8"><span class="logotext">jimilab</span></div>
				<div class=" col span_8 blank">""</div>

                
                <nav id="global_navi" class="row col span_24">
                <div class="col span_7 blank">""</div>
                <?php wp_nav_menu( array('container' => 'li' )); ?>
                <div class="col span_5 blank">""</div>
                </nav>



			</header>
			
            <section id="content_wrap" class="row">
                                
                <?php if(have_posts()):while(have_posts()):the_post(); ?>

                <div id="content">


                <div id="postinfo" class="row col span_24">
				    <div class="col span_8 blank">""</div>
                    <div class="col span_8 time"><?php echo get_the_date(); ?><?php the_time(); ?></div>
				    <div class="col span_8 blank">""</div>
                </div>

                <div id="postitle" class="row col span_24">
                    <div class="col span_10"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                </div>

                <div id="post" class="row col span_24">
                <?php the_content(); ?>
                </div>

                </div><!-- content -->

                <?php endwhile; endif; ?>
               
               
             </section><!-- content_wrap -->

			<footer "class="col span_24 row">
			
			<div class="col span_7 blank">""</div>
			<div id="copy" class="col span_15">all rights reserved jimilab.</div>
			<div class=" col span_2 blank">""</div>			
			</footer><!-- footer -->

		</div><!-- page_wrap -->
		
	</body>
</html>
