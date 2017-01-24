<?php

get_header(); ?>

<div class="site-content" style="padding-top: 140px;">
	<div id="post-container" style="min-height: 500px;">
    <?php /* The loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>
	
		<?php

	    $terms;
	    $term_list = wp_get_post_terms($post->ID, 'category', array("fields" => "all"));
	    foreach($term_list as $term_single) {
	        $terms.= $term_single->slug . ' ';
	    }

	    $text_desc = get_post_meta( $post->ID, 'text_descriptive_value', true );

	    ?>
	    <a href="<?php the_permalink(); ?>" class="mix small-12 medium-4 large-4 columns <?php echo $terms; ?>" data-myorder="<?php echo $slide; ?>">
	        <div class="post_image">
	            <?php the_post_thumbnail(); ?>
	        </div>
	        <div class="post_content">
	            <div class="post_content-title"><?php the_title(); ?></div>
	            <div class="post_content-desc"><?php echo $text_desc ?></div>
	        </div>
	    </a>
	    <?php $terms = ''; ?>
	    <?php $slide++; ?>
        
    <?php endwhile; ?>
    </div>

	<div class="footer small-12 medium-12 large-12 columns">
        <div class="hide-for-small-only medium-6 large-6 columns text-left">
            <p class="text_xs">Copyright © 2016</p>
        </div>
        <!-- <div class="redes small-12 medium-6 large-6 columns text-right">
            <a href="<?php echo get_option('redes_fb'); ?>" target="_blank" class="fredes-icon fb"></a>
            <a href="<?php echo get_option('redes_it'); ?>" target="_blank" class="fredes-icon it"></a>
            <a href="<?php echo get_option('redes_in'); ?>" target="_blank" class="fredes-icon in"></a>
        </div> -->
    </div>
</div><!-- #content -->