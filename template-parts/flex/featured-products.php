<?php
$number_posts_field = get_sub_field('number_of_products');
$number_posts = ($number_posts_field) ? $number_posts_field : 5;

$args = array(
	'post_type' => 'product',
	'numberposts' => $number_posts,
	'tax_query'  => array(
        array(
			'taxonomy' => 'product_visibility',
			'field'    => 'name',
			'terms'    => 'featured',
			'operator' => 'IN',
		)
    )
);

$posts = get_posts($args);
$post_count = count($posts);

if ( $posts ) {
?>
<section class="flex-featured-products">
	<div class="container">
		<div class="row">
			<div class="col-12 section-title">
				<h2>Featured Products</h2>
			</div>
		</div>
		<ul class="products row">
			<?php
			foreach ($posts as $key => $post) {
				$post = get_post( $product['product'] );
				setup_postdata( $post );
  			wc_get_template_part( 'content', 'product' );
				wp_reset_postdata();
			}
			?>
		</ul>
	</div>
</section>
<?php } ?>