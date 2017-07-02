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

    <!-- Page Content -->
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

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-2">
                    <h4>About Us</h4>
                    <div><?php echo fnFooterMenu(); ?></div>
                </div>
                <div class="col-lg-2">
                    <h4>Services</h4>
                    <div><?php echo fnServicesMenu(); ?></div>
                </div>                
                <div class="col-lg-4">                    
                    <?php $page= fnPage('news'); ?>
                    <h4><?php echo $page->PageTitle; ?></h4>
                    <div><?php echo $page->PageShortDescription; ?></div>
                </div>
                <div class="col-lg-4">
                    <?php $page= fnPage('privacy-policy'); ?>
                    <h4><?php echo $page->PageTitle; ?></h4>
                    <div><?php echo $page->PageShortDescription; ?></div>
                </div>

                <div class="col-lg-12">
                    <br>
                    <p class="text-center">Copyright &copy; 2017 <?php echo $_SESSION["CompanyName"]; ?> | Designed by Our Own Solutions</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>


</body>

</html>