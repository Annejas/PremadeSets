<html>
    <head>
        <title><?php echo $title; ?></title>
        <script type="text/javascript" src="<?php echo WEBPATH; ?>jquery.js"></script>
        <script type="text/javascript" src="<?php echo WEBPATH; ?>general.js"></script>
        <script type="text/javascript" src="<?php echo WEBPATH; ?>colorbox/colorbox.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo WEBPATH; ?>style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo WEBPATH; ?>colorbox/colorbox.css" />
    </head>
    <body>
        <div class="container">
            <div class="menu">
                <div class="logo"></div>
                <div class="item first">Home</div>
                <div class="item">second</div>
            </div>
            <div class="content">
                <?php echo $content; ?>
            </div>
        </div>
    </body>
</html>