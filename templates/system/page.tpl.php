<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 */
?>
<header id="header">

    <nav class="navbar navbar-inverse" role="navigation"><!-- add "wihite" class for white nav bar -->
        <div class="container">

            <!-- Mobile Menu Button -->
            <button id="mobileMenu" class="fa fa-bars" type="button" data-toggle="collapse" data-target=".navbar-collapse"></button>

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand scrollTo" href="#home">
                    <img src="sites/all/themes/isis_one/assets/images/logo/100x100/white.png" alt="" width="50" height="50" />
                    <!--
                        Span class:
                            - dark
                            - white
                            - styleColor (if you select "green" style color, the color will be green).

                            You can combine them
                            Example:
                                <span class="white">ISIS</span><span class="styleColor">ONE</span>
                    -->
                    <span class=""><?php print $site_name; ?></span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <!-- Fullscreen Button - Unavailable for IE -->
                <a href="#" class="btn-fullscreen"><i class="fa fa-external-link"></i></a>

                <ul class="nav navbar-nav navbar-right">
                    <?php if ($main_menu): ?>
                        <?php print render($main_menu); ?>
                    <?php endif; ?>
                </ul>
            </div><!-- /.navbar-collapse -->

        </div>
    </nav>

</header>


<div id="main-wrapper">
    <div id="main" class="main">
        <div class="container">
            <?php if ($messages): ?>
                <div id="messages">
                    <?php print $messages; ?>
                </div>
            <?php endif; ?>
            <div id="page-header">
                <?php if ($title): ?>
                    <div class="page-header">
                        <h1 class="title"><?php print $title; ?></h1>
                    </div>
                <?php endif; ?>
                <?php if ($tabs): ?>
                    <div class="tabs">
                        <?php print render($tabs); ?>
                    </div>
                <?php endif; ?>
                <?php if ($action_links): ?>
                    <ul class="action-links">
                        <?php print render($action_links); ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
        <div id="content" class="<?php print (!$is_panel) ? 'container' : ''; ?>">
            <?php print render($page['content']); ?>
        </div>
    </div> <!-- /#main -->
</div> <!-- /#main-wrapper -->


<footer>

    <!-- SCROOL TO TOP -->
    <a href="#toTop" class="fa fa-arrow-up toTop"></a>

    <div class="container">

        <div class="row">

            <div class="col-md-6 copyright">
                Your Company, LTD<br />
                2014 &copy; All Rights Reserved.
            </div>

            <div class="col-md-6 text-right">
                <a href="#" class="social fa fa-facebook"></a>
                <a href="#" class="social fa fa-twitter"></a>
                <a href="#" class="social fa fa-google-plus"></a>
            </div>

        </div>

    </div>
</footer>


