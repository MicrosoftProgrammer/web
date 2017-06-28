<?php
    include('../../includes/connection.php');
    include('../../includes/templates.php'); 
    include('../../includes/helpers.php');

    $Id = $_REQUEST["Id"];

    $sql ="select * from advertisements where AdvertisementID=".$Id;
    $res = mysql_query($sql);
    $obj = mysql_fetch_object($res);


    if($_REQUEST['mode']=="update")
    {
        $AdvertisementText = $_POST["AdvertisementText"];
        $AdvertisementText = str_replace("'","`",$AdvertisementText);
        $AdvertisementtDescription = $_POST["AdvertisementtDescription"];
        $AdvertisementtDescription = str_replace("'","`",$AdvertisementtDescription);
        $Id = $_POST["Id"];

        if ($_FILES['AdvertisementImage']['name']!="")
	    {        
		    del_img("../../images/advertisements/",$obj->AdvertisementImage);            
		    $_REQUEST['AdvertisementImage']=post_img($_FILES['AdvertisementImage']['name'], $_FILES['AdvertisementImage']['tmp_name'],"../../images/advertisements");
	    }

        $sql ="update advertisements set AdvertisementText = '$AdvertisementText',
        AdvertisementtDescription='$AdvertisementtDescription'";
                
        if($_REQUEST['AdvertisementImage']!="")
        {
            $AdvertisementImage = $_REQUEST['AdvertisementImage'];
            $sql =$sql.",AdvertisementImage = '$AdvertisementImage'";
        }

        $sql =$sql."where AdvertisementID=".$Id;
        mysql_query($sql);

        header("location:view_advertisements.php?mode=updated");
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
                           <i class="fa fa-edit">&nbsp;</i> Edit Advertisement
                             <a class="right-menu" href="view_advertisements.php"><i class="fa fa-list">&nbsp;</i>View Advertisements</a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                               <form role="form" enctype='multipart/form-data' action="edit_advertisement.php?mode=update" method="post">
                                        <div class="form-group col-lg-6">
                                            <label>Advertisement Text</label>
                                            <input class="form-control" name="AdvertisementText" value="<?php echo $obj->AdvertisementText; ?>" type="text" required />                                            
                                            <input name="Id" value="<?php echo $obj->AdvertisementID; ?>" type="hidden"/>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Advertisement Image</label>
                                            <input class="form-control" name="AdvertisementImage" type="file" /> <br/>                                            
                                            <img src="../../images/advertisements/<?php echo $obj->AdvertisementImage; ?>" width="100" height="100" />
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Pages Description</label>
                                            <textarea class="form-control editor" name="AdvertisementDescription" rows="20"><?php echo $obj->AdvertisementDescription; ?></textarea>
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
