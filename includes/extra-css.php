<?php
// add extra css to page

$css = (array) PageProps::get('include.css');
foreach ($css as $href) { ?>
    <link rel="stylesheet" href="<?php echo $href?>" />
<?php } ?>