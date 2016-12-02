<?php get_header()?>
<?php if(have_posts()):?>
    <?php while(have_posts()):the_post();?>

        <?php the_content('','','');?>
        
    <?php endwhile;?>
<?php else:?>

<span>没有内容</span>

<?php endif;?>
<?php get_footer()?>