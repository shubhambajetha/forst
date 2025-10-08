<?php
$page_title = "";
$page_description = "";
$page_keywords = "";
$page_css = "home";
$page_js  = "home";
ob_start();
?>

<?php
$content = ob_get_clean();
include __DIR__ . '/master.php';