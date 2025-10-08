<?php function renderPage($pageTitle, $contentFile, $styles = []) {?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'includes/head.php'; ?>
</head>
<body>
  <?php include 'includes/header.php'; ?>
  <?php include $contentFile; ?>
  <?php include 'includes/footer.php'; ?>
</body>
</html>
<?php } ?>
