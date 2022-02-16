<?php
// add extra scripts to page

$scripts = (array) PageProps::get('include.script');
foreach ($scripts as $src) { ?>
    <script src="<?php echo $src?>"></script>
<?php } ?>