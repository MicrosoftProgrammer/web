<?php
    include("adminpanel/includes/connection.php");
    include("adminpanel/includes/helpers.php");
    include("adminpanel/includes/templates.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $_SESSION["CompanyName"]; ?></title>
    <?php echo fnFrontCss(); ?>
</head>
<body>
<?php echo fnFrontMenu(); ?>
    <div class="container">
        <?php echo fnlogoBanner(); ?>
        <div class="row" id="main">
            <div class="container">
                <div class="col-md-9">
                    <div class="row">
                        <?php echo fnService(); ?>
                    </div>
                </div>
                <div class="col-md-3">            
                    <?php echo fnAdvertisement(); ?>
                    <?php echo fnNews(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <hr>
        <?php fnFrontFooter(); ?>
    </div>
    <?php echo fnFrontScript(); ?>
</body>
</html>