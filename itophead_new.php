<? include("iconnect.php") ?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />
    <title><?php echo $icompanyname . " | UAE’s Leading Eco-Friendly & Jute Bag Manufacturers and Dealers"; ?></title>
    <meta name="keywords" content="Shams Naturals, Eco-friendly bag manufacturers UAE, Jute bag stockists UAE, Canvas bag manufacturers UAE, Cotton bag stockists UAE, Reusable shopping bags Dubai, Custom eco bag manufacturers Dubai, Sustainable bag manufacturers UAE, Wholesale jute bag suppliers UAE, Promotional eco bag stockists Middle East, Custom printed cotton bags Dubai, Environment-friendly bag suppliers UAE, Canvas tote bag stockists Dubai, Eco bag wholesale Dubai, Branded eco-friendly bags UAE">
    <meta name="description" content="Shams Naturals is a leading eco-friendly bag manufacturer and stockist in the UAE, offering jute, cotton, canvas, and reusable shopping bags. Serving the Middle East and Africa with sustainable and custom promotional bag solutions.">
    <link href="<? echo $mainurlindex; ?>img/favicon.png" rel="icon">
    <link rel="stylesheet" href="<? echo $mainurlindex; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<? echo $mainurlindex; ?>css/fontawesome/all.min.css">
    <link rel="stylesheet" href="<? echo $mainurlindex; ?>css/bootsnav.css" type="text/css">
    <link rel="stylesheet" href="<? echo $mainurlindex; ?>css/modern-megamenu.css" type="text/css">
    <link rel="stylesheet" href="<? echo $mainurlindex; ?>css/modern-megamenu-responsive.css" type="text/css">
    <link href="<? echo $mainurlindex; ?>css/shamsnaturals-style.css" rel="stylesheet">
    <link href="<? echo $mainurlindex; ?>css/effects.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">

    <!---- Google Fonts ---->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marvel:wght@400;700&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Dirt&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oregano&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Mulish:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    <!---- Google Fonts ---->

    <!-- section animation script and style starts -->
    <link href="https://unpkg.com/aos@2.3.0/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
    <!-- section animation script and style ends -->

    <!-- Updated Patch code  for Canonical tags updated by Rubitcube Developer Sujit Tadadikar-->
    <?php
    include_once("canonical-map.php");

    $currentFile = basename($_SERVER['PHP_SELF']);

    if ($currentFile === "products.php" && isset($_GET['categoryno'])) {
        $cat = (int) $_GET['categoryno'];
        if (isset($canonicalMap[$cat])) {
            echo '<link rel="canonical" href="' . $canonicalMap[$cat] . '" />' . "\n";
        } else {
            echo '<link rel="canonical" href="https://shamsnaturals.com/products" />' . "\n";
        }
    } elseif ($currentFile === "subcategoryproducts.php" && isset($_GET['categoryno'], $_GET['subcategoryno'])) {
        echo '<link rel="canonical" href="https://shamsnaturals.com/SubProducts/' . $_GET['categoryno'] . '/' . $_GET['subcategoryno'] . '" />' . "\n";
    } elseif ($currentFile === "productdetails.php" && isset($_GET['productno'])) {
        echo '<link rel="canonical" href="https://shamsnaturals.com/Productdetails/' . $_GET['productno'] . '" />' . "\n";
    } elseif ($currentFile === "productenquiry.php" && isset($_GET['productno'])) {
        echo '<link rel="canonical" href="https://shamsnaturals.com/Productdetails/' . $_GET['productno'] . '" />' . "\n";
    } elseif ($currentFile === "aboutus.php") {
        echo '<link rel="canonical" href="https://shamsnaturals.com/ShamsNaturalsCompany-Profile" />' . "\n";
    } elseif ($currentFile === "contactus.php") {
        echo '<link rel="canonical" href="https://shamsnaturals.com/ContactShamsNaturals" />' . "\n";
    } elseif ($currentFile === "dealerselector.php") {
        echo '<link rel="canonical" href="https://shamsnaturals.com/DealerSelector" />' . "\n";
    } elseif ($currentFile === "newarrivals.php") {
        echo '<link rel="canonical" href="https://shamsnaturals.com/NewarrivalProducts" />' . "\n";
    } elseif ($currentFile === "videos.php") {
        echo '<link rel="canonical" href="https://shamsnaturals.com/ShamsNaturalsVideos" />' . "\n";
    }
    ?>

</head>

<body class="bodybg">