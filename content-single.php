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

<div class="ad_under_post">
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

<!-- X:S ZenBackWidget --><script type="text/javascript">document.write(unescape("%3Cscript")+" src='http://widget.zenback.jp/?base_uri=http%3A//succi.jp/blog/&nsid=103913574241442044%3A%3A103913595716275035&rand="+Math.ceil((new Date()*1)*Math.random())+"' type='text/javascript'"+unescape("%3E%3C/script%3E"));</script><!-- X:E ZenBackWidget -->

</div>