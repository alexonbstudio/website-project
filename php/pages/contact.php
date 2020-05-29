    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg_contact">
        <h3><?php echo $title; ?></h3>
    </div>
    <!-- bradcam_area_end -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">
                <div class="d-none d-sm-block mb-5 pb-4">
                </div>
    
                <div class="row">
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo $trad['pages']['contact']['contents']['put'].'  '.$trad['pages']['contact']['contents']['message']; ?>'" placeholder=" <?php echo $trad['pages']['contact']['contents']['message']; ?>"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your <?php echo $trad['pages']['contact']['contents']['name']; ?>'" placeholder="<?php echo $trad['pages']['contact']['contents']['name']; ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo $trad['pages']['contact']['contents']['put'].'  '.$trad['pages']['contact']['contents']['email']; ?>'" placeholder="<?php echo $trad['pages']['contact']['contents']['email']; ?>">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="phone" id="phone" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo $trad['pages']['contact']['contents']['put'].'  '.$trad['pages']['contact']['contents']['phone']; ?>'" placeholder="<?php echo $trad['pages']['contact']['contents']['phone']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn"><?php echo $trad['pages']['contact']['contents']['send']; ?></button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3><?php echo $offices['all']['siege-social']['full-name']; ?></h3>
                                <p><?php echo $offices['all']['siege-social']['adresse'].'<br />'.$offices['all']['siege-social']['code-postal'].' '.$offices['all']['siege-social']['villes'].' '.$offices['all']['siege-social']['pays']; ?></p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3><?php echo $offices['all']['siege-social']['nmobile-text']; ?></h3>
                                <p><?php echo $trad['pages']['contact']['contents']['disponible']; ?></p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3><?php echo $website['info']['site']['email-contact']; ?></h3>
                                <p><?php echo $trad['pages']['contact']['contents']['ask']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->
    

    <!-- forQuery_start -->
    <div class="forQuery">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1 col-md-12">
                    <div class="Query_border">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-xl-6 col-md-6">
                                <div class="Query_text">
                                    <p><?php echo $trad['pages']['donation']['content']['full']; ?></p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="phone_num">
                                    <a href="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/'.$trad['pages']['donation']['url-full']; ?>" class="mobile_no"><?php echo $trad['pages']['donation']['title']; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- forQuery_end-->