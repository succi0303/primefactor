<div class="post">
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<p class="postcat"><?php the_category(' '); ?></p>

<?php the_content(); ?>

<?php wp_link_pages('before=<p id ="postpage">&after=</p>&pagelink=<span>%</span>'); ?>

<p class="postinfo">
<?php if(has_tag()): ?>
<?php the_tags('','・'); ?> |
<?php endif; ?>
<?php echo get_the_date(); ?>
</p>

<div class="adsense">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-3774269786525137";
/* PF-本文末尾336x280 */
google_ad_slot = "6160813823";
google_ad_width = 336;
google_ad_height = 280;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>

<?php if(function_exists('related_posts')): ?>
<?php related_posts(); ?>
<?php endif; ?>
</div>