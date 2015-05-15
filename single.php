<?php get_header(); ?>
	<!-- 1 列 / 内容 -->
	<?php if (have_post()) : the_post(); update_post_caches($posts); ?>
	<div class="grid_8">
		<!-- 博客文章 -->
		<div class="post">
			<!-- 文章标题 -->
			<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<!-- Post Title -->
			<p class="sub"><?php the_tags('标签: ', ', ', ''); ?> &bull; <?php the_time('Y-n-j'); ?> &bull; <?php comments_popup_link('0 条评论', '1 条评论', '% 条评论', '', '评论已关闭'); ?><?php edit_post_link('编辑', ' &bull; ', ''); ?></p>
			<div class="hr dotted clearfix">&nbsp;</div>
			<!-- Post Title -->
			<!-- 文章内容 -->
			<?php the_content(); ?>
			<!-- 文章链接 -->
			<p class="clearfix"> <a href="<?php echo get_option('home'); ?>" class="button float" >&lt;&lt; 返回首页</a> <a href="#commentform" class="button float right" >发表评论</a> </p>
		</div>
		<div class="hr clearfix">&nbsp;</div>
		<?php comments_template(); ?>
	</div>
	<?php else : ?>
	<div class="errorbox">
	    没有文章！
	</div>
	<?php endif; ?>
	<?php get_sidebar(); ?>
	<?php get_footer(); ?>
