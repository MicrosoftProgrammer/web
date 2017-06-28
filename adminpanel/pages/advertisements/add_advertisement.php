<?php
    include('../../includes/connection.php');
    include('../../includes/templates.php'); 
    include('../../includes/helpers.php');

    if($_REQUEST['mode']=="add")
    {
        $AdvertisementText = $_POST["AdvertisementText"];
        $AdvertisementText = str_replace("'","`",$AdvertisementText);
        $AdvertisementDescription = $_POST["AdvertisementDescription"];
        $AdvertisementDescription = str_replace("'","`",$AdvertisementDescription);        
        $AdvertisementImage ="";

        for ($i=0;$i<count($_FILES['AdvertisementImage']);$i++)
        {

            if ($_FILES['AdvertisementImage']['name'][$i]!="")
            {        
                $AdvertisementImage=post_img($_FILES['AdvertisementImage']['name'][$i], $_FILES['AdvertisementImage']['tmp_name'][$i],"../../images/advertisements");
            }

            if($AdvertisementImage=="")
            {
                $AdvertisementImage = "noimage.png";
            }
            
            $AdvertisementImage = $AdvertisementImage .",";
        }

        $AdvertisementImage = substr($AdvertisementImage,0,strlen($AdvertisementImage)-1);
        

        $sql ="insert into advertisements(AdvertisementText,AdvertisementImage,AdvertisementDescription) values
        ('$AdvertisementText','$AdvertisementImage','$AdvertisementDescription')";
        echo $sql;
        mysql_query($sql);   
    //    header("location:view_advertisements.php?mode=added");
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $_SESSION["CompanyName"]; ?></title>
        <?php echo fnCss(); ?>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <?php echo fnMobileMenu(); ?>
            <?php echo fnTopLinks(); ?>
            <?php echo fnSideBar(); ?>
        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-tag">&nbsp;</i>Advertisements</h1>
                      
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <!-- /.row -->
            <div class="row">
              <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                           <i class="fa fa-plus">&nbsp;</i> Add Advertisements
                             <a class="right-menu" href="view_advertisements.php"><i class="fa fa-list">&nbsp;</i>View Advertisements</a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                               <form role="form" action="add_advertisement.php?mode=add" enctype='multipart/form-data' method="post">
                                        <div class="form-group col-lg-6">
                                            <label>Advertisement Text</label>
                                            <input class="form-control" name="AdvertisementText" type="text" required />                                            
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Advertisement Image</label>
                                            <input class="form-control" name="AdvertisementImage[]" type="file" multiple required />                                            
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Pages Description</label>
                                            <textarea class="form-control editor" name="AdvertisementDescription" rows="20"><?php echo $_REQUEST["PageDescription"]; ?></textarea>
                                        </div>                                        
                                        <div class="form-group col-lg-12">
                                            <button type="submit" class="btn btn-success"><i class="fa fa-save">&nbsp;</i>Save</button>
                                            <button type="reset" class="btn btn-danger"><i class="fa fa-remove">&nbsp;</i>Reset</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php fnScript(); ?>
     <script src="http://cloud.tinymce.com/stable/tinymce.min.js"></script>
     <script>tinymce.init({ selector:'.editor' });</script>
</body>

</html>
