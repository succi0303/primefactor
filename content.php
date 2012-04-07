<div class="post">
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<p class="postcat"><?php the_category(' '); ?></p>

<div class="ad_under_the_title">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-3774269786525137";
/* PF-リンク468x15 */
google_ad_slot = "5295017566";
google_ad_width = 468;
google_ad_height = 15;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div.

<?php the_content(); ?>

<p class="postinfo">
<?php if(has_tag()): ?>
<?php the_tags('','・'); ?> |
<?php endif; ?>
<?php echo get_the_date(); ?>
</p>
</div>