<?php
    include('../../includes/connection.php');
    include('../../includes/templates.php'); 
    include('../../includes/helpers.php');

    $Id = $_REQUEST["Id"];

    $sql ="select * from advertisement where AdvertisementID=".$Id;
    $res = mysql_query($sql);
    $obj = mysql_fetch_object($res);

    if($_REQUEST['mode']=="delete")
    {
        $updateImage = removeFromString($obj->AdvertisementImage,$_REQUEST["image"]);
        del_img("../../../images/advertisement/",$_REQUEST["image"]);   
        $sql ="update advertisement set AdvertisementImage = '".$updateImage."'
                where AdvertisementID=".$Id;
        mysql_query($sql);

        header("location:edit_advertisement.php?mode=edit&Id=".$Id);
    }

    if($_REQUEST['mode']=="update")
    {
        $AdvertisementText = $_POST["AdvertisementText"];
        $AdvertisementText = str_replace("'","`",$AdvertisementText);
        $AdvertisementDescription = $_POST["AdvertisementDescription"];
        $AdvertisementDescription = str_replace("'","`",$AdvertisementDescription);
        $AdvertisementShortDescription = $_POST["AdvertisementShortDescription"];
        $AdvertisementShortDescription = str_replace("'","`",$AdvertisementShortDescription);           
        $Id = $_POST["Id"];

        foreach($_FILES["AdvertisementImage"]["tmp_name"] as $key=>$tmp_name)
        {
                $file_name=$_FILES["AdvertisementImage"]["name"][$key];
                $file_tmp=$_FILES["AdvertisementImage"]["tmp_name"][$key];

            if ($file_name!="")
            {        
                $AdvertisementImage=post_img($file_name, $file_tmp,"../../../images/advertisement");
            }    
            
            $AdvertisementImages = $AdvertisementImages.$AdvertisementImage.",";
        }

        $AdvertisementImages = substr($AdvertisementImages,0,strlen($AdvertisementImages)-1);

        $sql ="update advertisement set AdvertisementText = '$AdvertisementText',
        AdvertisementShortDescription='$AdvertisementShortDescription',
        AdvertisementDescription='$AdvertisementDescription'";
                
        if($AdvertisementImages!="")
        {
            $sql =$sql.",AdvertisementImage = concat(AdvertisementImage,',','$AdvertisementImages')";
        }

        $sql =$sql." where AdvertisementID=".$Id;
        mysql_query($sql);
       header("location:view_advertisement.php?mode=updated");
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
                    <h1 class="page-header"><i class="fa fa-tag">&nbsp;</i>Advertisement</h1>
                      
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
                             <a class="pull-right" href="view_advertisement.php"><i class="fa fa-list">&nbsp;</i>View Advertisement</a>
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
                                            <input class="form-control" name="AdvertisementImage[]" type="file" multiple />
                                            
                                             <br/>                                            
                                        <?php $images = explode(",",$obj->AdvertisementImage);
                                            foreach($images as $image){
                                                echo '<span class="col-lg-2"><img src="../../../images/advertisement/'.$image.'" class="img-responsive"/><br>
                                                <a href="javascript:void(0)" onclick=fnDeleteImage("'.$obj->AdvertisementID.'","'.$image.'")><i class="fa fa-remove">&nbsp;</i>Delete</a>
                                                </span>';
                                            }
                                         ?>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Advertisement Short Description</label>
                                            <textarea class="form-control" maxlength="499" name="AdvertisementShortDescription" rows="8"><?php echo $obj->AdvertisementShortDescription; ?></textarea>
                                        </div>                                                                   
                                        <div class="form-group col-md-12">
                                            <label>Advertisement Description</label>
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
     <script>tinymce.init({ selector:'.editor' });
     
     function fnDeleteImage(advertisementId,image){
         document.location.href="edit_advertisement.php?mode=delete&Id="+advertisementId+"&image="+image;
     }
     </script>
</body>

</html>
