<?php
/**
 * WooCommerce Cart Page
 *
 * This Template Can Be Overwritten Inside A Theme
 *
 * @version 0.0.1
 */
?>
	<section class="wfc_cart_inner">

		<div class="wfc_cart_wrapper">

			<div class="wfc_cart_body">	
					<?php

						wfc_load_template( 'wfc-cart-headers.php', array( '' ), 'woocommerce-fast-checkout/templates/cart', WFC_TEMPLATES . 'cart/' );

						wfc_load_template(
							'wfc-product-list.php',
							array(
								'cart_products' => $cart_products,
								'cart_status'   => $cart_status,
							),
							'woocommerce-fast-checkout/templates/cart',
							WFC_TEMPLATES . 'cart/'
						);


						?>

					<div class="wfc_cart_footer">

						<div class="wfc_cart_footer_top">

							<?php
								wfc_load_template(
									'wfc-cart-coupon.php',
									array(
										'cart_products' => $cart_products,
										'cart_status'   => $cart_status,
									),
									'woocommerce-fast-checkout/templates/cart',
									WFC_TEMPLATES . 'cart/'
								);

								wfc_load_template(
									'wfc-cart-total.php',
									array(
										'cart_products' => $cart_products,
										'cart_status'   => $cart_status,
									),
									'woocommerce-fast-checkout/templates/cart',
									WFC_TEMPLATES . 'cart/'
								);
								?>
	
						</div>

					</div>

			</div>

		</div>	
	</section>
	<!-- Cart Content end -->
<?php


