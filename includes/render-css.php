<?php
// add extra css to page
function render_csss(array $csss)
{
    $exclude_css = (array) PageProps::get('exclude.css');
    foreach ($csss as $href) {
        if (!in_array($href, $exclude_css))
            render_css($href);
    }
}
?>

<?php function render_css(string $href)
{ ?>
    <link rel="stylesheet" href="<?php echo $href ?>" />
<?php } ?>