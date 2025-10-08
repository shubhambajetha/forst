<?php
if (!function_exists('asset')) {
    function asset($path) {
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
        $host = $_SERVER['HTTP_HOST'];
        $basePath = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
        return $protocol . "://" . $host . $basePath . "/" . ltrim($path, '/');
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="Nj2kKSeZKOdiN93KnyG7JmOY0UaPycpVdc_1GGlYObI" />
    <link rel="icon" type="image/png" href="./assets/img/fav.png" />
    <link rel="canonical" href="https://ashtechprojects.in" />

    <title><?php echo $page_title ?? "LandTRealty"; ?></title>
    
    <!--<meta name="keywords" content="<?php echo $page_keywords ?? "website, landing page"; ?>">-->
    <meta name="keywords" content="3 BHK flats in Greater Noida West, 2 BHK flats in Greater Noida West, Ashtech flats Greater Noida West, Luxury apartments in Greater Noida West, Affordable flats in Noida Extension, Ready to move flats Greater Noida West, Ashtech residential projects Noida, Flats with modern amenities Greater Noida, Buy 3BHK flat in Greater Noida West, Ashtech apartments in Noida NCR">
<meta name="description" content="<?php echo $page_description ?? "Default description"; ?>">

    <meta property="og:title" content="<?php echo $page_title ?? "LandTRealty"; ?>">
    <meta property="og:description" content="<?php echo $page_description ?? "Default description"; ?>">
    <meta property="og:image" content="<?php echo asset($page_image ?? "assets/images/logo.png"); ?>">

    <!-- include of plugins -->
    <link rel="stylesheet" href="<?php echo asset("assets/plugins/bootstrap/css/bootstrap.min.css"); ?>">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/themes/odometer-theme-default.min.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/themes/odometer-theme-default.min.css"/>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="<?php echo asset("assets/plugins/smooth-scroll/scroll.js"); ?>" id="lenis-js"></script>
     <script src="<?php echo asset("assets/plugins/smooth-scroll/lenis-init.min.js"); ?>" id="lenis-init-js"></script>
    <link rel="stylesheet" href="<?php echo asset("assets/css/global.css"); ?>">
    <?php if (!empty($page_css)) : ?>
    <link rel="stylesheet" href="<?php echo asset("assets/css/" . $page_css . ".css"); ?>">
    <?php endif; ?>
</head>