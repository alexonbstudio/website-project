    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg_minecraft">
        <h3><?php echo $title; ?></h3>
    </div>
    <!-- bradcam_area_end -->

    <div class="about_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="about_info">
                        <div class="section_title mb-20px">
                            
                            <h4><?php echo $trad['server']['default']['title']; ?> - Minecraft (<?php echo $trad['server']['minecraft']['content']['name-serv']; ?>)</h4>
                        </div>
                        <p><?php echo $trad['server']['minecraft']['content']['info']; ?></p>
						<div class="alert alert-primary" role="alert">
							<?php echo $trad['server']['minecraft']['content']['ip-serv'].' '.$trad['server']['minecraft']['content']['port-serv']; ?>
						</div>
						<p>Option:<br /> <?php echo $trad['server']['minecraft']['content']['option']; ?></p>
						
						<p>Compatible: <a href="https://minecraft-fr.gamepedia.com/Version_Bedrock">Android, IOS, Fire OS, Gear VR, Samsung gear VR, Windows 10, Windows Phone</a></p>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="about_thumb d-flex">
                        <div class="img_1">
                            <img src="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/assets/production/images/gaming-1.png" alt="<?php echo $trad['default']['slide']['1']['title']; ?>">
                        </div>
                        <div class="img_2">
                            <img src="<?php echo $website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url']; ?>/assets/production/images/gaming-2.png" alt="<?php echo $trad['default']['slide']['1']['title']; ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	


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