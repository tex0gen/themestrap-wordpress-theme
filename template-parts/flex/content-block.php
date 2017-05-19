<?php
$content_blocks = get_sub_field('content');
$content_block_count = count($content_blocks);

if ($content_blocks) {
	?>
	<section class="content-block">
		<div class="container">
			<div class="row">
				<?php
				foreach ($content_blocks as $key => $block) {
					?>
				 	<div class="content col">
				 		<?php if ( $block['title'] ) { ?>
				 			<h2><?= $block['title'] ?></h2>
				 		<?php } ?>
				 		<?= $block['content_item']; ?>
				 	</div>
					<?php
				 }
				 ?>
			</div>
		</div>
	</section>
	<?php
}