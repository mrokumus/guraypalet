<? include "variables.php"; ?>
<!DOCTYPE html>
<html lang="tr">
<script src='https://www.google.com/recaptcha/api.js'></script>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="
    <?php if (have_rows('meta', 'option')):
        while (have_rows('meta', 'option')):
            the_row();
            echo the_sub_field('meta_etiketi') . ", ";
        endwhile; endif; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Güray Palet">
    <title>
        <?php if ($_SERVER["REQUEST_URI"] == "/") {
            echo "Ana Sayfa | GÜRAY PALET";
        } else {
            wp_title('| GÜRAY PALET', true, 'right');
        } ?>
    </title>

    <link rel="shortcut icon" href="<? echo $favIcon["url"] ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
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
            <a href="/" class="navbar-brand"><img style="max-height: 50px" src="<? echo $logoUrl["url"] ?>"
                                                  alt="Güray Palet"></a>
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
                        <a class="nav-link page-scroll" href="#services">Hizmetlerimiz</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#showcase">Fotoğraflar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#faq"><abbr title="Sık Sorulan Sorular">SSS</abbr></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#contact">İletişim</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


