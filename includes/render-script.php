<?php
// add extra scripts to page
function render_scripts(array $scripts)
{
	$exclude_scripts = (array) PageProps::get('exclude.js');
	foreach ($scripts as $src)
		if (!in_array($src, $exclude_scripts))
			include_script($src);
}
?>

<?php function include_script(string $src)
{ ?>
	<script src="<?php echo $src ?>"></script>
<?php } ?>