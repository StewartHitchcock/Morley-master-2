<div class="blog-box clearfix">

    <div class="blog-title">

        <h3><a href="<?php echo esc_url(get_permalink(get_the_id())); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

    </div><!-- end blog-title -->

    <div class="meta">

        <span><a href="#"><?php echo get_the_date( 'F j, Y g:i a' ); ?></a></span>

        <span><a href="<?php echo esc_url(get_permalink(get_the_id()).'#comments'); ?>"><?php comments_number(); ?></a></span>

        <span><a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta('ID') )); ?>" title="<?php the_author_meta( 'display_name' ); ?>"><?php esc_html_e('by : ' , 'fortun'); ?><?php the_author(); ?></a></span>

        <span><?php esc_html_e('in : ' , 'fortun'); ?><?php the_category(', '); ?></span>

        <span><a href="#"><i class="icon-heart-empty"></i><?php esc_html_e(' 123 Likes ', 'fortun');?></a></span>

        <span><a href="#"><i class="icon-print"></i><?php esc_html_e(' Print ', 'fortun');?></a></span>

    </div><!-- end meta -->

    <div class="blog-img hovereffect">

        <a href="<?php echo esc_url(get_permalink(get_the_id())); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('600x280', array('class'=>'img-responsive'));?></a>

    </div><!-- end icon -->

    <div class="desc">

        <p> <?php the_excerpt(); ?> </p>

        <a href="<?php echo esc_url(get_permalink(get_the_id())); ?>" class="readmore" title="<?php the_title_attribute(); ?>"><?php esc_html_e('Read More' , 'fortun'); ?><i class="icon-angle-double-right"></i></a>

    </div><!-- end desc -->

</div><!-- end blog-wrap -->                   

