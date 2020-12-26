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
                    <?php if (have_rows('fotograflar', 'option')):
                        while (have_rows('fotograflar', 'option')):
                            the_row();
                            ?>
                            <div class="owl-item" style="width: 323px; height: 323px">
                                <div class="item">
                                    <div class="screenshot-thumb">
                                        <img src="<? echo get_sub_field("fotograf", "option")["url"] ?>"
                                             class="img-fluid"
                                             alt=""/>
                                    </div>
                                </div>
                            </div>
                        <? endwhile;endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SSS -->
<section id="faq" class="section">
    <div class="container">
        <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                            Collapsible Group Item #1
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                        anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                        of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                            Collapsible Group Item #2
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                        anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                        of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                            Collapsible Group Item #3
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                        anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                        of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- İletişim -->
<section id="contact" class="section">
    <!-- Container Starts -->
    <div class="container">
        <!-- Start Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-text section-header text-center">
                    <div>
                        <h2 class="section-title">Get In Touch</h2>
                        <div class="desc-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                            <p>eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Row -->
        <!-- Start Row -->
        <div class="row">
            <!-- Start Col -->
            <div class="col-lg-6 col-md-12">
                <form id="contactForm">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                                       required data-error="Please enter your name">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" placeholder="Subject" id="msg_subject" class="form-control"
                                       name="msg_subject" required data-error="Please enter your subject">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email"
                                       required data-error="Please enter your Email">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" placeholder="Budget" id="budget" class="form-control" name="budget"
                                       required data-error="Please enter your Budget">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" id="message" name="message" placeholder="Write Message"
                                          rows="4" data-error="Write your message" required></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="submit-button">
                                <button class="btn btn-common" id="submit" type="submit">Submit</button>
                                <div id="msgSubmit" class="h3 hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- End Col -->
            <!-- Start Col -->
            <div class="col-lg-1">

            </div>
            <!-- End Col -->
            <!-- Start Col -->
            <div class="col-lg-4 col-md-12">
                <div class="contact-img">
                    <img src="img/contact/01.png" class="img-fluid" alt="">
                </div>
            </div>
            <!-- End Col -->
            <!-- Start Col -->
            <div class="col-lg-1">
            </div>
            <!-- End Col -->

        </div>
        <!-- End Row -->
    </div>
</section>
<!--Back To Top -->
<a href="#" class="back-to-top">
    <i class="lni-chevron-up"></i>
</a>
<? get_footer() ?>


