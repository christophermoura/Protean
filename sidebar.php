<aside id="page_sidebar">
	<?php if ( is_active_sidebar( 'widget-area-2' ) ) { ?>
		<div class="widget-area-onethird"><?php dynamic_sidebar( 'widget-area-2' ); ?></div>
	<?php } ?>
	
	<?php if ( is_active_sidebar( 'widget-area-3' ) ) { ?>
		<div class="widget-area-onethird"><?php dynamic_sidebar( 'widget-area-3' ); ?></div>
	<?php } ?>
	
	<?php if ( is_active_sidebar( 'widget-area-4' ) ) { ?>
		<div class="widget-area-onethird "><?php dynamic_sidebar( 'widget-area-4' ); ?></div>
	<?php } ?>
	
	<?php if ( is_active_sidebar( 'widget-area-2' ) || is_active_sidebar( 'widget-area-3' ) || is_active_sidebar( 'widget-area-4' ) ) { ?>
	<hr/>
	<?php } ?>
	
	<?php
	$options = get_option('protean_theme_options');
	
	if(isset($options['showabout']) && $options['showabout']==1){ ?>
	<div class="content_aside">
		<div id="about_msg" class="box primary full">
			<?php echo stripcslashes($options['aboutblog']); ?>
		</div>
	</div>
	<div id="tagscloud" class="content_main">
		<nav>
		<p class="box primary"><?php _e('Popular Tags','protean')?></p><ul>
			<?php 
				$args = array(
			    'number'    => 26,
			    'format'	=> 'array',
			    'orderby'   => 'count', 
			    'order'     => 'DESC'); 
			    
			    $tags = get_tags($args);
			    
			    foreach($tags as $t){ ?>
			    	<li><a href="<?php echo get_tag_link($t->term_id); ?>" class="box accent"><?php echo $t->name; ?></a></li>
			<?php } ?>
		</ul></nav>
	</div>
	<hr/>
	<?php } ?>
</aside><!-- page_sidebar -->
