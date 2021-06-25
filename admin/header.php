<?php 
session_start();
    include_once 'include/class.user.php';
    $user = new User();

    $id_admin = $_SESSION['id_admin'];
    $xid_admin = $_SESSION['id_admin'];

    if (!$user->get_session()){
       header("location:login.php");
    }

    if (isset($_GET['logout'])){
        $user->user_logout();
        header("location:login.php");
    }
?>
<?php ?>
<!doctype html>
<html lang="en">


<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:29:18 GMT -->
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Keswan | <?php echo $thisPage; ?></title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard-pro" />
    <!--  Social tags      -->
    <meta name="keywords" content="material dashboard, bootstrap material admin, bootstrap material dashboard, material design admin, material design, creative tim, html dashboard, html css dashboard, web dashboard, freebie, free bootstrap dashboard, css3 dashboard, bootstrap admin, bootstrap dashboard, frontend, responsive bootstrap dashboard, premiu material design admin">
    <meta name="description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template">
    <meta itemprop="description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
    <meta itemprop="image" content="../../../s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template">
    <meta name="twitter:description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="../../../s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg">
    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://www.creative-tim.com/product/material-dashboard-pro" />
    <meta property="og:image" content="../../../s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg" />
    <meta property="og:description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design." />
    <meta property="og:site_name" content="Creative Tim" />
    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/css/google-roboto-300-700.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar fixed-top" data-active-color="blue" data-background-color="white">
            <!--
        Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
        Tip 2: you can also add an image using data-image tag
        Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->
            <div class="logo">
                <a href="index.php" class="simple-text">
                    KESWAN | ADMIN
                </a>
            </div>
            <div class="logo logo-mini">
                <a href="index.php" class="simple-text">
                    K
                </a>
            </div>
            <div class="sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <img src="../assets/img/admin.png" />
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                            <?php echo $xid_admin; ?>
                            <b class="caret"></b>
                        </a>
                        <div class="collapse" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a href="profile.php">Profile</a>
                                </li>
                                <li>
                                    <a href="?logout=logout">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav">
                    <li class="<?php if ($thisPage == "Home") { echo "active"; }?>">
                        <a href="index.php">
                            <i class="material-icons">dashboard</i>
                            <p>Home</p>
                        </a>
                    </li>
                    <li class="<?php if ($thisPage == "Hewan") { echo "active"; }?>">
                        <a href="hewan.php">
                            <i class="material-icons">pets</i>
                            <p>Data Hewan</p>
                        </a>
                    </li>
                    <li class="<?php if ($thisPage == "Pengguna") { echo "active"; }?>">
                        <a href="pengguna.php">
                            <i class="material-icons">people</i>
                            <p>Data Pengguna</p>
                        </a>
                    </li>
                    <li class="<?php if ($thisPage == "Petugas") { echo "active"; }?>">
                        <a href="petugas.php">
                            <i class="material-icons">perm_identity</i>
                            <p>Data Petugas</p>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#formsExamples">
                            <i class="material-icons">content_paste</i>
                            <p>Pelayanan
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="formsExamples">
                            <ul class="nav">
                                <li class="<?php if ($thisPage == "Kesehatan") { echo "active"; }?>">
                                    <a href="kesehatan.php">Kesehatan Hewan</a>
                                </li>
                                <li class="<?php if ($thisPage == "Inseminasi") { echo "active"; }?>">
                                    <a href="inseminasi.php">Inseminasi Buatan</a>
                                </li>
                                <li class="<?php if ($thisPage == "Kelahiran") { echo "active"; }?>">
                                    <a href="kelahiran.php">Periksa Kelahiran</a>
                                </li>
                                <li class="<?php if ($thisPage == "Vaksinasi") { echo "active"; }?>">
                                    <a href="vaksinasi.php">Vaksinasi</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="<?php if ($thisPage == "Laporan") { echo "active"; }?>">
                        <a href="laporan.php">
                            <i class="material-icons">print</i>
                            <p>Laporan</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute fixed-top">
                <div class="container-fluid">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                            <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                            <i class="material-icons visible-on-sidebar-mini">view_list</i>
                        </button>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <?php if ($thisPage == "Home"){ ?> 
                        <a class="navbar-brand" href="index.php">Dashboard</a>
                        <?php } else{ ?>
                        <a class="navbar-brand" href="javascript:javascript:history.go(-1)"><i class="material-icons">keyboard_arrow_left</i></a>    
                        <?php };?>
                    </div>
                </div>
            </nav>