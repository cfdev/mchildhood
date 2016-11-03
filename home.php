<?php include(dirname(__FILE__).'/header.php'); ?>

	<main class="main grid" role="main">

		<section class="col sml-12 med-8">

			<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>

			<article class="article" role="article" id="post-<?php echo $plxShow->artId(); ?>">

				<header>
					<h1>
						<?php $plxShow->artTitle('link'); ?> <i class="fa fa-asterisk brownColor"></i>
					</h1>
					<small>
						<i class="fa fa-star-o"> </i> <?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?> -
						<time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time> -
						<?php $plxShow->artNbCom(); ?> <i class="fa fa-commenting-o fa-2x"></i>
					</small>
				</header>

				<section>
					<?php $plxShow->artThumbnail('<img class="art_thumbnail center" src="#img_url" alt="#img_alt" title="#img_title" />', true); ?>
					<?php $plxShow->artChapo(); ?>
				</section>

				<footer>
					<small>
						<i class="fa fa-folder-o"> </i> <?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat() ?> -
						<i class="fa fa-tags"> </i> <?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags('<a class="tags #tag_status" href="#tag_url" title="#tag_name">#tag_name</a>',',') ?>
					</small>
				</footer>

			</article>

			<?php endwhile; ?>

			<nav class="pagination text-center">
				<?php $plxShow->pagination(); ?>
			</nav>

			<span>
				<?php $plxShow->artFeed('rss',$plxShow->catId()); ?>
			</span>

		</section>

		<?php include(dirname(__FILE__).'/sidebar.php'); ?>

	</main>

<?php include(dirname(__FILE__).'/footer.php'); ?>
