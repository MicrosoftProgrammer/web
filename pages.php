<?php
    include("adminpanel/includes/connection.php");
    include("adminpanel/includes/helpers.php");
    include("adminpanel/includes/templates.php");

    $title="";
    $content="";
    $images =array();

    $Id = $_REQUEST["Id"];

    if($_REQUEST["mode"]=="service"){
        $sql ="select * from service where ServiceID=".$Id;
        $res = mysql_query($sql);
        $obj= mysql_fetch_object($res);
        $title = $obj->ServiceText;
        $content = $obj->ServiceDescription;
        $images = explode(",",$obj->ServiceImage);
        if(count($images)==0){
            $images = array($obj->ServiceImage);
        }
    }
    else if($_REQUEST["mode"]=="advertisement"){
        $sql ="select * from advertisement where AdvertisementID=".$Id;
        $res = mysql_query($sql);
        $obj= mysql_fetch_object($res);
        $title = $obj->AdvertisementText;
        $content = $obj->AdvertisementDescription;
        $images = explode(",",$obj->AdvertisementImage);
    }
    else if($_REQUEST["mode"]=="news"){
        $sql ="select * from news where NewsID=".$Id;
        $res = mysql_query($sql);
        $obj= mysql_fetch_object($res);
        $title = $obj->NewsText;
        $content = $obj->NewsDescription;
        $images = explode(",",$obj->NewsImage);
    }

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
                        <h4 class="title"><?php echo $title; ?></h4>
                        <div class="content">
                            <?php echo $content; ?>
                                                <?php
                        foreach($images as $image){
                            echo '<span><img src="images/service/'.$image.'" class="img-responsive"/><br>
                            </span>';
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