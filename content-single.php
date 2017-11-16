<div class="row">
    <div class="col-sm-8 blog-main">
        <div class="blog-post">
            <h2 class="blog-post-title"><?php the_title(); ?></h2>
            <p class="blog-post-meta">
                <?php the_date(); ?> by
                    <a href="#">
                        <?php the_author(); ?>
                    </a>
            </p>
            <?php the_content(); ?> <a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" title="Tweet this!"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a> <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share on Facebook."><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a></div>
        
    
    
    
    
    </div>
</div>
<!-- /.blog-post -->