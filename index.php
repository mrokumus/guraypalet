<? get_header();
include "variables.php"; ?>
<div class="container">
    <div class="row space-100">
        <div class="col-lg-6 col-md-12 col-xs-12">
            <div class="contents">
                <h2 class="head-title"><?php the_field('ana_sayfa_baslik', "option"); ?></h2>
                <p><?php the_field('ana_sayfa_metin', "option"); ?></p>
                <div class="header-button">
                    <? if (get_field('telefon_numarasi', "option") == ""): else: ?>
                        <a href="tel:<? echo $phoneNumber ?>" class="btn btn-border-filled"
                           style="background-color: #2F3556;border-color: #2F3556">Telefon</a>
                    <? endif; ?>
                    <? if (get_field('whatsapp_numarasi', "option") == ""): else: ?>
                        <a href="<? echo $whatsappUrl ?>" class="btn btn-border-filled">WhatsApp</a>
                    <? endif; ?>
                </div>
            </div>
        </div>
        <? $ana_sayfa_resim = get_field('ana_sayfa_resim', "option"); ?>
        <div class="col-lg-6 col-md-12 col-xs-12 p-0">
            <div class="intro-img">
                <img src="<? echo $ana_sayfa_resim["url"] ?>" alt="">
            </div>
        </div>
    </div>
</div>
</header>
<!--Değerlerimiz-->
<section id="values" class="section">
    <div class="container">
        <div class="row">
            <?php if (have_rows('ilkeler', 'option')):
                while (have_rows('ilkeler', 'option')):
                    the_row(); ?>
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="services-item text-center card h-100 service-card">
                            <div class="icon">
                                <i style="font-size: 60px;"
                                   class="<?php the_sub_field('ilkeler_icon'); ?> service-icon"></i>
                            </div>
                            <div class="card-body" style="padding: 10px">
                                <h4><?php the_sub_field('ilkeler_baslik'); ?></h4>
                                <p><?php the_sub_field('ilkeler_metin'); ?></p>
                            </div>
                        </div>
                    </div>
                <? endwhile; endif; ?>
        </div>
    </div>
</section>
<!-- Hakkımızda-->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 pl-0 pt-70 pr-5">
                <div class="business-item-img">
                    <? if (get_field("hakkimizda_resim", "option") == ""): ?>
                        <img src="<? echo get_template_directory_uri() . "/inc/img/about_us.svg" ?>" class="img-fluid"
                             alt="About Us Image">
                    <? else: ?>
                        <img src="<? $aboutImage = get_field("hakkimizda_resim", "option");
                        echo $aboutImage["url"] ?>" class="img-fluid" alt="About Us Image">
                    <? endif; ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 pl-4">
                <div class="business-item-info">
                    <h3><? echo get_field("hakkimizda_baslik", "option"); ?></h3>
                    <p><? echo get_field("hakkimizda_metin", "option"); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hizmetlerimiz-->
<section id="services" class="section">
    <div class="container">
        <!-- Start Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="features-text section-header text-center">
                    <div>
                        <h2 class="section-title"><? echo get_field("hizmetlerimiz_baslik", "option"); ?></h2>
                        <div class="desc-text">
                            <p><? echo get_field("hizmetlerimiz_metin", "option"); ?>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row featured-bg">
            <?php if (have_rows('hizmetler', 'option')):
                while (have_rows('hizmetler', 'option')):
                    the_row();
                    ?>
                    <div class="col-lg-6 col-md-6 col-xs-12 p-0">
                        <div class="feature-item featured-border2 h-100">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="feature-icon float-right">
                                        <? echo get_sub_field("hizmetler_icon", "option"); ?>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="feature-info float-left">
                                        <h4 style="font-size: 20px"><? echo get_sub_field("hizmetler_baslik", "option"); ?></h4>
                                        <p style="font-size: 16px"><? echo get_sub_field("hizmetler_metin", "option"); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <? endwhile;endif; ?>
        </div>
    </div>
</section>
<!-- Fotoğraflar -->
<section id="showcase">
    <div class="container-fluid right-position">
        <div class="row gradient-bg">
            <div class="col-lg-12">
                <div class="showcase-text section-header text-center">
                    <div>
                        <h2 class="section-title"><? echo get_field("fotograflar_baslik", "option") ?></h2>
                        <div class="desc-text">
                            <p><? echo get_field("fotograflar_metin", "option") ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center showcase-area">
            <div class="col-lg-12 col-md-12 col-xs-12 pr-0">
                <div class="showcase-slider owl-carousel">
                    <?php if (have_rows('fotograflar', 'option')):while (have_rows('fotograflar', 'option')):the_row(); ?>
                        <div class="item">
                            <div class="screenshot-thumb" style="height: 500px; max-width: 300px; margin: 10px">
                                <img src="<? echo get_sub_field("fotograf", "option")["url"] ?>" class="img-fluid"
                                     alt=""/>
                            </div>
                        </div>
                    <? endwhile;endif; ?>

                </div>
            </div>
        </div>

    </div>
</section>
<!-- SSS -->
<section id="faq" class="section" style="margin-top: 50px ">
    <div class="row gradient-bg">
        <div class="col-lg-12">
            <div class="showcase-text section-header text-center">
                <div>
                    <h2 class="section-title"><? echo get_field("sss_baslik", "option") ?></h2>
                    <div class="desc-text">
                        <p><? echo get_field("sss_metin", "option") ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="accordion" id="accordionExample">
            <?php if (have_rows('sss', 'option')):
                while (have_rows('sss', 'option')):
                    the_row();
                    ?>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading<? echo get_row_index() ?>">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse<? echo get_row_index() ?>" aria-expanded="false"
                                    aria-controls="collapse<? echo get_row_index() ?>">
                                <? echo get_sub_field("baslik", "option") ?>
                            </button>
                        </h2>
                        <div id="collapse<? echo get_row_index() ?>" class="accordion-collapse collapse"
                             aria-labelledby="heading<? echo get_row_index() ?>"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <? echo get_sub_field("metin", "option") ?>
                            </div>
                        </div>
                    </div>
                <? endwhile;endif; ?>
        </div>
    </div>
</section>
<!-- İletişim -->
<section id="contact" class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-text section-header text-center">
                    <div>
                        <h2 class="section-title"><?php the_field('iletisim_baslik', "option"); ?></h2>
                        <div class="desc-text">
                            <?php the_field('iletisim_metin', "option"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <form id="contactForm" action="mail.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="İsminiz"
                                       required data-error="Lütfen isminizi Giriniz">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" placeholder="Konu" id="msg_subject" class="form-control"
                                       name="msg_subject" required data-error="Lütfen Konunuzu Giriniz">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email"
                                       required data-error="Lütfen Email adresinizi Giriniz">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" id="message" name="message" placeholder="Mesajınız"
                                          rows="4" data-error="Lütfen Mesajınızı Giriniz" required></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="submit-button">
                                        <button class="btn btn-common" id="submit" type="submit">Gönder</button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="control-group form-group">
                                        <div class="g-recaptcha"
                                             data-sitekey="<?echo $google_site_key?>"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-4 col-md-12">
                <div class="contact-img">
                    <? if (get_field("iletisim_resim", "option") == ""): ?>
                        <img src="<? echo get_template_directory_uri() . "/inc/img/contact_us.svg" ?>" class="img-fluid"
                             alt="Contact Image">
                    <? else: ?>
                        <img src="<? $contactImage = get_field("iletisim_resim", "option");
                        echo $contactImage["url"] ?>" class="img-fluid" alt="Contact Image">
                    <? endif; ?>
                </div>
            </div>
            <div class="col-lg-1">
            </div>
        </div>
    </div>
</section>

<!--Back To Top -->
<a href="#" class="back-to-top">
    <i class="lni-chevron-up"></i>
</a>

<? get_footer() ?>


