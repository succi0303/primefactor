<?php get_header(); ?>

<!-- コンテンツ -->
<div id="content">

<p class="title">RECENT POSTS</p>

<?php if(have_posts()): while(have_posts()):
the_post(); ?>
<?php get_template_part('content'); ?>
<?php endwhile; endif; ?>

<?php get_template_part('pagenation'); ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>