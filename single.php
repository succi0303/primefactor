<?php get_header(); ?>

<!-- コンテンツ -->
<div id="content">

<?php if(have_posts()): while(have_posts()):
the_post(); ?>
<?php get_template_part('content','single'); ?>
<?php endwhile; endif; ?>

<p class="pagenation">
<span class="oldpage"><?php previous_post_link(); ?></span>
<span class="newpage"><?php next_post_link(); ?></span>
</p>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>