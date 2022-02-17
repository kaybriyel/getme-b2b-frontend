<!-- Vendor JS-->
<?php
require_once('includes/render-script.php');
render_scripts([
  ...config('app-scripts')
]);

render_scripts((array) PageProps::get('include.js'));
?>


<!-- Template  JS -->
<script src="assets/js/main.js?r=<?php echo random_int(0, 5) ?>"></script>
<script src="assets/js/shop.js?r=<?php echo random_int(0, 5) ?>"></script>