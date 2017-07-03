<?php
    include("adminpanel/includes/connection.php");
    include("adminpanel/includes/helpers.php");
    include("adminpanel/includes/templates.php");

    if($_REQUEST['mode']=="resume")
    {
        $Name = $_POST["Name"];
        $Name = str_replace("'","`",$Name);
        $Email = str_replace("'","`",$Email);
        $ContactNo = $_POST["ContactNo"];

        $path = $_FILES['Resume']['name'];
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        $filesize = $_FILES['Resume']['size'];

        if((strtolower($ext)=="doc" || strtolower($ext)=="docx" || strtolower($ext)=="pdf") && $filesize < 204800) 
        {
            if ($_FILES['Resume']['name']!="")
            {        
                $_REQUEST['Resume']=post_img($_FILES['Resume']['name'], $_FILES['Resume']['tmp_name'],"images/resume");
            }

            $Resume = $_REQUEST['Resume'];        

            $sql ="insert into career(Name,Email,ContactNo,Resume) values
            ('$Name','$Email','$ContactNo','$Resume')";
            mysql_query($sql);  
            header("location:page.php?PageSlug=".$_REQUEST["PageSlug"]."&mode=success");
        }
        else{
            $resumeerror ="Invalid document extension or file size exceeds 200kb, Please upload anther document";
        }
    }

    if($_REQUEST['mode']=="enquiry")
    {
        $Name = $_POST["Name"];
        $Name = str_replace("'","`",$Name);
        $Description = $_POST["Description"];
        $Description = str_replace("'","`",$Description);        
        $Email = $_REQUEST["Email"];
        $ContactNo = $_POST["ContactNo"];

        $sql ="insert into enquiry(Name,Email,ContactNo,Description) values
        ('$Name','$Email','$ContactNo','$Description')";
        mysql_query($sql);  
        header("location:page.php?PageSlug=".$_REQUEST["PageSlug"]."&mode=success");
    }    

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
                                        echo fnCareer($resumeerror);
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