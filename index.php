<?php
## language selection
$lang = 'en';
if (array_key_exists('lang', $_GET) && $_GET['lang'] === 'nl') $lang = 'nl';

$title_en = "Pegasus ICT Services";
$title_nl = "Pegasus ICT Dienstverlening";
$title = ($lang === 'en') ? $title_en : $title_nl;

## page selection
$page = 'index';
$page_ext = '.inc.php';

$pages = [
    'about' => ['en' => 'About Me', 'nl' => 'Over Mij'],
    'comp_rep' => ['en' => 'Computer Repair', 'nl' => 'Computer Reparatie'],
    'contact' => ['en' => 'Contact', 'nl' => 'Contact'],
    'data_rec' => ['en' => 'Data Recovery', 'nl' => 'Data Herstel'],
    'error' => ['en' => 'An Error Has Occurred', 'nl' => 'Een Fout Heeft Plaatsgevonden'],
    'faq' => ['en' => 'FAQ', 'nl' => 'Vraag & Antwoord'],
    'index' => ['en' => 'Home', 'nl' => 'Home'],
    'mob_svc' => ['en' => 'Mobile Service', 'nl' => 'Mobiele Service'],
    'netw_sol' => ['en' => 'Internet / Network Solutions', 'nl' => 'Internet / Netwerk Oplossingen'],
    'priv_pol' => ['en' => 'Privacy Policy', 'nl' => 'Privacy Beleid'],
    'svc' => ['en' => 'Service', 'nl' => 'Service'],
    'tech_supp' => ['en' => 'Technical Support', 'nl' => 'Technische Ondersteuning'],
    'term_cond' => ['en' => 'Terms & Conditions', 'nl' => 'Voorwaarden'],
];
### optimize to list subdir, strip ext. etc

if (array_key_exists('page', $_GET) && array_key_exists($_GET['page'], $pages)) $page = $_GET['page'];

function menu_button($target, $index, $lang, $default_class = "btn white_btn")
{
    $class = (array_key_exists($target, $index) && ($target === $_GET['page'])) ? "active" : $default_class;
    echo '<a class="' . $class . '" href="?lang=' . $lang . '&page=' . $target . '">' . $index[$target][$lang] . '</a>';
}

?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Pegasus ICT ~ <?php echo $pages[$page][$lang]; ?></title>
    <meta name="keywords"
          content="Pegasus ICT, Alphen aan den Rijn, IT,ICT,reparatie,repair,pc,server,mobile,tablet,network,infra,internet,consult,advies,advice">
    <meta name="description" content="IT & ICT Service, maintenance & repair">
    <meta name="author" content="Mattijs Snepvangers, Pegasus ICT">
    <!-- site icons -->
    <link rel="icon" href="images/favicon/favicon.png" type="image/png"/>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <!-- Site css -->
    <link rel="stylesheet" href="css/style.css"/>
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css"/>
    <!-- colors css -->
    <link rel="stylesheet" href="css/colors1.css"/>
    <!-- custom css -->
    <link rel="stylesheet" href="css/custom.css"/>
    <!-- wow Animation css -->
    <link rel="stylesheet" href="css/animate.css"/>
    <!-- revolution slider css -->
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css"/>
    <link rel="stylesheet" type="text/css" href="revolution/css/layers.css"/>
    <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css"/>
</head>
<body id="default_theme" class="it_service">
<!-- loader -->
<div class="bg_load"><img class="loader_animation" src="images/loaders/loader_1.png" alt="#"/></div>
<!-- end loader -->
<!-- header -->
<header id="default_header" class="header_style_1">
    <!-- header top -->
    <div class="header_top">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="full">
                        <div class="topbar-left">
                            <ul class="list-inline">
                                <li><span class="topbar-label"><i class="fa  fa-home"></i></span> <span
                                            class="topbar-hightlight">Pieter Floriszstraat 31, Alphen aan den Rijn</span>
                                </li>
                                <li><span class="topbar-label"><i class="fa fa-envelope-o"></i></span> <span
                                            class="topbar-hightlight"><a href="mailto:info@pegasus-ict.nl">info@pegasus-ict.nl</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 right_section_header_top">
                    <div class="float-left">
                        <div class="social_icon">
                            <ul class="list-inline">
                                <li><a class="fa fa-facebook" href="https://www.facebook.com/pegasusict"
                                       title="Facebook" target="_blank"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="float-right">
                        <div class="make_appo"><a class="btn white_btn"
                                                  href="?lang=<?= $lang ?>&page=contact"><?php echo $pages['contact'][$lang] ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header top -->
    <!-- header bottom -->
    <div class="header_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <!-- logo start -->
                    <div class="logo"><a href="/?lang=<?php echo $lang; ?>"><img src="images/logos/logo.png"
                                                                                 alt="logo"/></a></div>
                    <!-- logo end -->
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <!-- menu start -->
                    <div class="menu_side">
                        <div id="navbar_menu">
                            <ul class="first-ul">
                                <li><?php menu_button('index', $pages, $lang) ?></li>
                                <li><?php menu_button('about', $pages, $lang) ?></li>
                                <li><?php menu_button('svc', $pages, $lang) ?></li>
                                <li><?php menu_button('faq', $pages, $lang) ?></li>
                                <li><?php menu_button('priv_pol', $pages, $lang) ?></li>
                                <li><?php menu_button('contact', $pages, $lang) ?></li>
                            </ul>
                        </div>
                    </div>
                    <!-- menu end -->
                </div>
            </div>
        </div>
    </div>
    <!-- header bottom end -->
</header>
<!-- end header -->
<?php require_once('pages' . DIRECTORY_SEPARATOR . $page . '.' . $lang . $page_ext) ?>
<?php require_once('pages' . DIRECTORY_SEPARATOR . 'footer.' . $lang . $page_ext) ?>
<!-- js section -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- menu js -->
<script src="js/menumaker.js"></script>
<!-- wow animation -->
<script src="js/wow.js"></script>
<!-- custom js -->
<script src="js/custom.js"></script>
<!-- revolution js files -->
<script src="revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.video.min.js"></script>
</body>
</html>
