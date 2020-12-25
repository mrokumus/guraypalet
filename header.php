<? include "variables.php"; ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="
    <?php if (have_rows('meta', 'option')):
          while (have_rows('meta', 'option')):
             the_row();
                 echo the_sub_field('meta_etiketi') .", ";
    endwhile; endif;?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Güray Palet">
    <title>
        <?php if ($_SERVER["REQUEST_URI"] == "/") {
            echo "Ana Sayfa | GÜRAY PALET";
        } else {
            wp_title('| GÜRAY PALET', true, 'right');
        } ?>
    </title>

    <link rel="shortcut icon" href="<? echo $favIcon["url"] ?>" type="image/png">
    <link rel="stylesheet" href="<? echo get_template_directory_uri() ?>/scss/css/bootstrap.min.css">
    <link rel="stylesheet" href="<? echo get_template_directory_uri() ?>/scss/css/animate.css">
    <link rel="stylesheet" href="<? echo get_template_directory_uri() ?>/scss/css/LineIcons.css">
    <link rel="stylesheet" href="<? echo get_template_directory_uri() ?>/scss/css/owl.carousel.css">
    <link rel="stylesheet" href="<? echo get_template_directory_uri() ?>/scss/css/owl.theme.css">
    <link rel="stylesheet" href="<? echo get_template_directory_uri() ?>/scss/css/magnific-popup.css">
    <link rel="stylesheet" href="<? echo get_template_directory_uri() ?>/scss/css/nivo-lightbox.css">
    <link rel="stylesheet" href="<? echo get_template_directory_uri() ?>/scss/css/main.css">
    <link rel="stylesheet" href="<? echo get_template_directory_uri() ?>/scss/css/responsive.css">
    <link rel="stylesheet" href="<? echo get_template_directory_uri() ?>/scss/main.css">

</head>

<body>

<header id="home" class="hero-area">
    <div class="overlay">
        <span></span>
        <span></span>
    </div>
    <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
            <a href="/" class="navbar-brand"><img style="max-height: 50px" src="<? echo $logoUrl["url"] ?>" alt="Güray Palet"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="lni-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto w-100 justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#home">Ana Sayfa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#values">İlkelerimiz</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#about">Hakkımızda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#home">Ana Sayfa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#contact">İletişim</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


