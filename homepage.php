<?php /* Template Name: Homepage Template */ ?>
<?php get_header(); ?>

    <section id="welcome" class="top-background">

        <div class="box-center">

            <div class="image-logo">

                <img src="<?php bloginfo('template_url') ?>/images/logo.png" alt="Grimm-geldanlage">

            </div>

            <div class="title">

                <h2><?php echo get_field('welcome_title'); ?></h2>

                <div class="scroll-down">

                    <a href="#first-section">
                        
                        <img src="<?php bloginfo('template_url') ?>/images/scroll-down.gif" alt="Scroll down">
                        
                    </a>

                </div>

            </div>

            <!-- <h4><?php echo get_field('welcome_description'); ?></h4> -->

        </div>

    </section>

    <section id="first-section">

        <div class="container">

            <h3><span><?php echo get_field('first_section_title'); ?></span></h3>

            <div class="content">

                <?php echo get_field('first_section_text'); ?>

            </div>

        </div>

    </section>
<!--
    <section id="second-section">

        <div class="container-fluid">

            <h3><?php echo get_field('second_section_section_title'); ?></h3>

            <div class="diamonds">

                <div class="diamond">

                    <div class="content">

                        <h4><?php echo get_field('second_section_1st_title'); ?></h4>

                        <h5><?php echo get_field('second_section_1st_subtitle'); ?></h4>

                    </div>

                </div>

                <div class="diamond">

                    <div class="content">

                        <h4><?php echo get_field('second_section_2nd_title'); ?></h4>

                        <h5><?php echo get_field('second_section_2nd_subtitle'); ?></h4>

                    </div>

                </div>

                <div class="diamond">
                
                    <div class="content">

                        <h4><?php echo get_field('second_section_3rd_title'); ?></h4>

                        <h5><?php echo get_field('second_section_3rd_subtitle'); ?></h4>

                    </div>

                </div>

                <div class="diamond">

                    <div class="content">

                        <h4><?php echo get_field('second_section_4th_title'); ?></h4>

                        <h5><?php echo get_field('second_section_4th_subtitle'); ?></h4>

                    </div>

                </div>

                <div class="diamond">

                    <div class="content">

                    <h4><?php echo get_field('second_section_5th_title'); ?></h4>

                    <h5><?php echo get_field('second_section_5th_subtitle'); ?></h4>

                    </div>

                </div>

            </div>

        </div>

    </section>
-->
    <section id="third-section">

        <div class="container">

            <h3><span><?php echo get_field('third_section_title'); ?></span></h3>

            <div class="total">

                <div class="content">

                    <?php echo get_field('third_section_text'); ?>

                </div>

                <div class="image" style="background-image: url('<?php echo get_field('third_section_image')['url']; ?>')"></div>

            </div>

        </div>

    </section>

    <section id="contact">

        <h3><span>Kontakt</span></h3>

        <div class="contact-box">

            <div class="text">

                <?php echo get_field('contact_text'); ?>

            </div>

            <div class="info">

                <!--
                <div class="image">

                    <img src="<?php echo get_field('contact_image')['url']; ?>" alt="<?php echo get_field('contact_image')['url']; ?>">

                </div>
                -->

                <div class="contact-form">

                    <?php echo do_shortcode('[contact-form-7 id="91" title="Contact form 1"]'); ?>

                </div>

                <div class="contact-info">

                    <div class="address">
                        
                        <i class="fas fa-map-marker-alt"></i>

                        <span><?php echo get_field('contact_address'); ?></span>

                    </div>

                    <div class="phone">

                        <i class="fas fa-phone-square"></i>

                        <span><?php echo get_field('contact_phone'); ?></span>

                    </div>

                    <div class="email">

                        <i class="fas fa-envelope"></i>

                        <span><?php echo get_field('contact_email'); ?></span>

                    </div>

                </div>

            </div>

        </div>

    </section>

<?php get_footer(); ?>