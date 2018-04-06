<?php
/**
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */
$pages = get_field( 'pages' );
$publisher = get_field( 'publisher' );
$language = get_field( 'language' );
$isbn10 = get_field( 'isbn10' );
$isbn13 = get_field( 'isbn-13' );
$product_dimensions = get_field( 'product_dimensions' ); 
$shipping_weight = get_field( 'shipping_weight' ); 
?>
<tr>
	<td>Paperbook Details</td>
</tr>
<tr>
	<td>Paperback</td>
	<td><?php echo $pages; ?> pages</td>
</tr>
<tr>
	<td>Publisher</td>
	<td><?php echo $publisher; ?></td>
</tr>
<tr>
	<td>Language</td>
	<td><?php echo $language; ?></td>
</tr>
<tr>
	<td>ISBN-10</td>
	<td><?php echo $isbn10; ?></td>
</tr>
<tr>
	<td>ISBN-13</td>
	<td><?php echo $isbn13; ?></td>
</tr>
<tr>
	<td>Product Dimensions</td>
	<td><?php echo $product_dimensions; ?></td>
</tr>
<tr>
	<td>Shipping Weight</td>
	<td><?php echo $shipping_weight; ?></td>
</tr>