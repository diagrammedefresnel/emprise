<?php include('inc/header.php') ?>

<!-- main start -->
<main class="js-animsition-overlay" data-animsition-overlay="true">
    <!-- pos-rel start -->
    <section id="up" class="pos-rel js-parallax-bg"
        style="background-image:url(assets/images/backgrounds/contact.jpg)">
        <!-- bg-overlay -->
        <div class="bg-overlay-black"></div>
        <!-- pos-rel start -->
        <div class="pos-rel flex-min-height-100vh">
            <div class="padding-top-bottom-120 container small after-preloader-anim">
                <!-- title start -->
                <h2 class="headline-xl">
                    <span class="hidden-box d-block">
                        <span class="anim-slide">La meilleure</span>
                    </span>
                    <span class="hidden-box d-block">
                        <span class="anim-slide tr-delay-01">des agences pour</span>
                    </span>
                    <span class="hidden-box d-block">
                        <span class="anim-slide tr-delay-02">votre Business</span>
                    </span>
                </h2><!-- title end -->
            </div>
        </div><!-- pos-rel end -->
    </section><!-- pos-rel end -->

    <!-- contact us start -->
    <section id="down" class="pos-rel section-bg-dark-1">
        <!-- pos-rel start -->
        <div class="pos-rel flex-min-height-100vh">
            <!-- container start -->
            <div class="padding-top-bottom-120 container">
                <!-- content start -->
                <div class="js-scrollanim">
                    <h2 class="headline-l">
                        Nous Contacter
                    </h2>
                </div><!-- content end -->

                <!-- flex-container start -->
                <div class="flex-container padding-top-30">
                    <!-- column start -->
                    <div class="four-columns column-50-100 padding-top-60">
                        <div class="column-r-margin-20 js-scrollanim">
                            <p class="headline-xxxxs anim-text-double-fill invert" data-text="Email us">Email</p>
                            <div class="padding-top-20">
                                <h6 class="anim-fade tr-delay-01">
                                    <a href="#"
                                        class="subhead-xxs text-color-dadada text-hover-to-red js-pointer-small">infos@emprice.ci</a>
                                </h6><br>
                                <h6 class="anim-fade tr-delay-02">
                                    <a href="#"
                                        class="subhead-xxs text-color-dadada text-hover-to-red js-pointer-small">customers@emprise.ci</a>
                                </h6>
                            </div>
                        </div>
                    </div><!-- column end -->

                    <!-- column start -->
                    <div class="four-columns column-50-100 padding-top-60">
                        <div class="column-r-margin-20 js-scrollanim">
                            <p class="headline-xxxxs anim-text-double-fill invert" data-text="Visit us">Adresse</p>
                            <h6 class="list list_margin-1px padding-top-20 text-color-b0b0b0">
                                <span class="list__item">
                                    <span class="d-inline-block hidden-box">
                                        <span class="subhead-xxs anim-reveal tr-delay-01">Cocody Cité des Arts</span>
                                    </span>
                                </span>
                                <span class="list__item">
                                    <span class="d-inline-block hidden-box">
                                        <span class="subhead-xxs anim-reveal tr-delay-02">Abidjan</span>
                                    </span>
                                </span>
                                <span class="list__item">
                                    <span class="d-inline-block hidden-box">
                                        <span class="subhead-xxs anim-reveal tr-delay-03">Côte d'Ivoire
                                            CI</span>
                                    </span>
                                </span>
                            </h6>
                        </div>
                    </div><!-- column end -->

                    <!-- column start -->
                    <div class="four-columns column-50-100 padding-top-60">
                        <div class="column-r-margin-20 js-scrollanim">
                            <p class="headline-xxxxs anim-text-double-fill invert" data-text="Call us">Appelez nous</p>
                            <div class="padding-top-20">
                                <h6 class="anim-fade tr-delay-01">
                                    <a href="#"
                                        class="subhead-xxs text-color-dadada text-hover-to-red js-pointer-small">+225 00 00 00 00</a>
                                </h6><br>
                                <h6 class="anim-fade tr-delay-02">
                                    <a href="#"
                                        class="subhead-xxs text-color-dadada text-hover-to-red js-pointer-small">+225 00 00 00 00</a>
                                </h6>
                            </div>
                        </div>
                    </div><!-- column end -->
                </div><!-- flex-container end -->

            </div><!-- container end -->
        </div><!-- pos-rel end -->
    </section><!-- contact us end -->

    <!-- form section start -->
    <section class="pos-rel bg-img-cover"
        style="background-image:url(assets/images/backgrounds/message.jpg)">
        <!-- bg-overlay -->
        <div class="bg-overlay-black"></div>
        <!-- pos-rel start -->
        <div class="pos-rel flex-min-height-100vh">
            <!-- container start -->
            <div class="container small padding-top-bottom-120 form-box">
                <h1 class="headline-xxxxs text-center"><span style="font-size:50px">Ecrivez nous</span> </h1>
                <!-- flex-container start -->
                <form action="#" method="post" name="formobrsv" id="send_form" class="flex-container padding-top-90">
                    <!-- column start -->
                    <div class="four-columns">
                        <div class="column-r-margin-10">
                            <input type="text" name="name" placeholder="Entrer votre nom" id="first_name" required
                                class="form-input js-pointer-small">
                        </div>
                    </div><!-- column end -->
                    <!-- column start -->
                    <div class="four-columns">
                        <div class="column-l-r-margin-5">
                            <input type="email" name="last_name" placeholder="Entrer votre mail" id="email"
                                required class="form-input js-pointer-small">
                        </div>
                    </div><!-- column end -->
                    <!-- column start -->
                    <div class="four-columns">
                        <div class="column-l-margin-10">
                            <input type="text" name="subject" placeholder="Entrer votre sujet" id="subject" required
                                class="form-input js-pointer-small">
                        </div>
                    </div><!-- column end -->
                    <!-- column start -->
                    <div class="twelve-columns">
                        <textarea name="message" placeholder="Entrer votre message ici" id="message" required
                            class="form-input js-pointer-small"></textarea>
                    </div><!-- column end -->
                    <!-- column start -->
                    <div class="twelve-columns text-center padding-top-90">
                        <button id="send" class="border-btn js-pointer-large">
                            <span class="border-btn__inner">Envoyer</span>
                            <span class="btn-wait">Patienter</span>
                            <span class="border-btn__lines-1"></span>
                            <span class="border-btn__lines-2"></span>
                        </button>
                    </div><!-- column end -->
                </form><!-- flex-container end -->
            </div><!-- container end -->

            <!-- alert start -->
            <div class="js-popup-fade" id="m_sent">
                <div class="js-popup">
                    <div class="popup-icon">
                        <i class="fas fa-check"></i>
                    </div>
                    <p class="popup-alert headline-xs">
                        Thank you!<br>
                        Your submission<br>
                        has been received!
                    </p>
                    <div class="js-popup-close js-pointer-large">
                        <div class="flip-btn" data-text="Close">Close</div>
                    </div>
                </div>
            </div><!-- alert end -->

            <!-- alert start -->
            <div class="js-popup-fade" id="m_err">
                <div class="js-popup">
                    <div class="popup-icon">
                        <i class="fas fa-times"></i>
                    </div>
                    <p class="popup-alert headline-xs">Error</p>
                    <div class="js-popup-close js-pointer-large">
                        <div class="flip-btn" data-text="Close">Close</div>
                    </div>
                </div>
            </div><!-- alert end -->
        </div><!-- pos-rel end -->
    </section><!-- form section end -->
</main><!-- main end -->

<?php include('inc/footer.php') ?>