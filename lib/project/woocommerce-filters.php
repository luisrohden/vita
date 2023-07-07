<?php
### Adicionar ao Carrinho
add_filter( 'woocommerce_product_add_to_cart_text', 'aa_change_add_to_cart' );
function aa_change_add_to_cart() {
        return __( 'Adicionar ao carrinho', 'aa-add-to-cart' );
}
add_filter( 'woocommerce_product_single_add_to_cart_text', 'product_single_add_to_cart_text_filter_callback', 20, 2 );
function product_single_add_to_cart_text_filter_callback( $button_text, $product ) {
	return 'Adicionar ao carrinho';
}


### Tabs
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );
function woo_remove_product_tabs( $tabs ) {
    unset( $tabs['description'] );          // Remove the description tab
    unset( $tabs['reviews'] );          // Remove the reviews tab
    unset( $tabs['additional_information'] );   // Remove the additional information tab
    return $tabs;
}
//Adicionar ao Carrinho:
add_action( 'woocommerce_after_checkout_billing_form', 'display_extra_fields_after_billing_address' , 10, 1 );
function display_extra_fields_after_billing_address () {
	//_e( "Escolha a data de entrega: ", "add_extra_fields");
	?>
	<div class="info-excerpt">
		<label>
			<div>
				Escolha a data de Entrega
			</div>
			<div>
				<select name="add_delivery_date">
					<?php
					for($i=1;$i<=31;$i++):
						$day=($i<10?'0'.$i:$i);
						?>
						<option value="<?php echo $day;?>">
							<?php echo $day;?>
						</option>
						<?php
					endfor;
					?>
				</select>
			</div>
			<div>
				de cada mês
			</div>
		</label>
		<span>Em casa de Plano Mensal</span>
		<label>
			<div class="title">
				Escolha a data de Entrega 2
			</div>
			<div>
				<select name="add_delivery_date2">
					<?php
					for($i=1;$i<=31;$i++):
						$day=($i<10?'0'.$i:$i);
						?>
						<option value="<?php echo $day;?>">
							<?php echo $day;?>
						</option>
						<?php
					endfor;
					?>
				</select>
			</div>
			<div>
				de cada mês
			</div>
		</label>
	</div>
  <?php 
}
// filter Menu Itens
add_filter( 'wp_nav_menu_items', 'menu_my_acount_variation', 10, 2 );
function menu_my_acount_variation( $items, $args ) {
	if(!is_user_logged_in()):
		$items=str_replace('Minha conta','Login',$items);
	endif;
    return $items;
}
