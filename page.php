<?php
    include("adminpanel/includes/connection.php");
    include("adminpanel/includes/helpers.php");
    include("adminpanel/includes/templates.php");
    
    $obj=fnPage($_REQUEST["PageSlug"]);
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
                        <h4 class="title"><?php echo $obj->PageTitle; ?></h4>
                        <div class="content">
                            <?php echo $obj->PageDescription;  ?>
                            <?php
                                if($obj->PageImage!="noimage.png"){
                                    echo '<span><img src="images/pages/'.$obj->PageImage.'" class="img-responsive"/><br>
                                    </span>';
                                }
                            ?>
                            <?php 
                                    if($obj->PageSlug=="services"){
                                        echo fnService();
                                    }
                                    else if($obj->PageSlug=="advertisement"){
                                        echo fnAdvertisement();
                                    }
                                    else if($obj->PageSlug=="news"){
                                        echo fnNews();
                                    }
                                    else if($obj->PageSlug=="career"){
                                        echo fnCareer();
                                    }
                                    else if($obj->PageSlug=="contact-us"){
                                        echo fnContact();
                                    }                                                                        
                              ?>
                        </div>
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