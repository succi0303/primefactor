<div class="post">
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<p class="postcat"><?php the_category(' '); ?></p>

<?php the_content(); ?>

<p class="postinfo">
<?php if(has_tag()): ?>
<?php the_tags('','・'); ?> |
<?php endif; ?>
<?php echo get_the_date(); ?>
</p>
</div>