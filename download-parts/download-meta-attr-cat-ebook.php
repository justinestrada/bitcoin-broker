<?php
/**
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * download-parts/download-meta-attr-cat-ebook.php
 */
$length = get_field( 'length' );
$word_wise = get_field( 'word_wise' );
$enhanced_typesetting = get_field('enhanced_typesetting');
$page_flip = get_field('page_flip');
?>
<tr>
    <td>eBook Details</td>
</tr>
<tr>
    <td>Length</td>
    <td data-toggle="tooltip" data-placement="top" title="The estimated length is calculated using the number of page turns on a Kindle, using settings to closely represent a physical book." style="cursor: pointer;"><?php echo $length; ?> Pages</td>
</tr>
<?php if ( $word_wise ) { ?>
    <tr>
        <td>Word Wise</td>
        <td data-toggle="tooltip" data-placement="top" title="Word Wise helps you read harder books by explaining the most challenging words in the book." style="cursor: pointer;">Enabled</td>
    </tr>
<?php } ?>
<?php if ( $enhanced_typesetting ) { ?>
    <tr>
        <td>Enhanced Typesetting</td>
        <td data-toggle="tooltip" data-placement="top" title="Enhanced typesetting improvements offer faster reading with less eye strain and beautiful page layouts, even at larger font sizes." style="cursor: pointer;">Enabled</td>
    </tr>
<?php } ?>
<?php if ( $page_flip ) { ?>
    <tr>
        <td>Page Flip</td>
        <td data-toggle="tooltip" data-placement="top" title="Page Flip is a new way to explore your books without losing your place." style="cursor: pointer;">Enabled</td>
    </tr>
<?php } ?>