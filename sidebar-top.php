
<nav class="navbar navbar-default navbar-custom">

<div class="container-fluid container-custom">

    <div class="navbar-header">

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#top-navbar">

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>                        

        </button>

        <!--

        <a class="navbar-brand" href="<?php echo site_url(); ?>">
            
            <img src="<?php bloginfo('template_url') ?>/images/logo.png" alt="Grimm-geldanlage">

        </a>

        -->

    </div>

    <div class="collapse navbar-collapse" id="top-navbar">

        <ul class="nav navbar-nav navbar-right">

            <?php 

            $locations = get_nav_menu_locations();

            $menu = get_term( $locations['header_menu'], 'nav_menu' );

            $menu_items = wp_get_nav_menu_items($menu->term_id);
            
            ?>

            <?php foreach ($menu_items as $item) : ?>

            <li <?php if (get_permalink() == $item->url) : ?>class="active"<?php endif; ?>>

                <a title="<?php echo $item->title; ?>" href="<?php echo $item->url; ?>">
                    
                    <?php $icon = implode(" ",$item->classes); ?>

                    <?php if (strlen($icon) > 0) : ?>

                        <i class="<?php echo $icon; ?>"></i>

                    <?php endif; ?>

                    <span class="menu-text"><?php echo $item->title; ?></span>
                    
                </a>

            </li>

            <?php endforeach; ?>

        </ul>

    </div>

</div>

</nav>