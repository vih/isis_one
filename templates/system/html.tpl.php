<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">
    <?php print $head; ?>

    <!--[if lt IE 9]>
    <script type="text/javascript" src="sites/all/themes/isis_one/assets/plugins/lt-ie9/html5.js"></script>
    <script type="text/javascript" src="sites/all/themes/isis_one/assets/plugins/lt-ie9/respond.min.js"></script>
    <script type="text/javascript" src="sites/all/themes/isis_one/assets/plugins/lt-ie9/excanvas.compiled.js"></script>
    <![endif]-->

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800|Dosis:300,400" rel="stylesheet" type="text/css" />

    <!-- ICONS -->
    <link rel="shortcut icon" href="sites/all/themes/isis_one/assets/images/favicon.png" type="image/x-icon" />
    <link rel="icon" href="sites/all/themes/isis_one/assets/images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="sites/all/themes/isis_one/assets/images/favicon.ico" type="image/x-icon" />

    <!-- mobile settings -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
    <title><?php print $head_title; ?></title>
    <?php print $styles; ?>
    <?php print $scripts; ?>
    <!--[if lt IE 9]>
    <script>
        document.createElement('header');
        document.createElement('nav');
        document.createElement('section');
        document.createElement('article');
        document.createElement('aside');
        document.createElement('footer');
    </script>
    <![endif]-->
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
<div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
</div>

<?php print $page_top; ?>
<?php print $page; ?>
<?php print $page_bottom; ?>
</body>
</html>