<?php
    include('../../includes/connection.php');
    include('../../includes/templates.php'); 
    include('../../includes/helpers.php');

    $Id = $_REQUEST["Id"];

    $sql ="select * from service where ServiceID=".$Id;
    $res = mysql_query($sql);
    $obj = mysql_fetch_object($res);

    if($_REQUEST['mode']=="delete")
    {
        $updateImage = removeFromString($obj->ServiceImage,$_REQUEST["image"]);
        del_img("../../../images/service/",$_REQUEST["image"]);   
        $sql ="update service set ServiceImage = '".$updateImage."'
                where ServiceID=".$Id;
        mysql_query($sql);

        header("location:edit_service.php?mode=edit&Id=".$Id);
    }

    if($_REQUEST['mode']=="update")
    {
        $ServiceText = $_POST["ServiceText"];
        $ServiceText = str_replace("'","`",$ServiceText);
        $ServiceDescription = $_POST["ServiceDescription"];
        $ServiceDescription = str_replace("'","`",$ServiceDescription);
        $ServiceShortDescription = $_POST["ServiceShortDescription"];
        $ServiceShortDescription = str_replace("'","`",$ServiceShortDescription);           
        $Id = $_POST["Id"];

        foreach($_FILES["ServiceImage"]["tmp_name"] as $key=>$tmp_name)
        {
                $file_name=$_FILES["ServiceImage"]["name"][$key];
                $file_tmp=$_FILES["ServiceImage"]["tmp_name"][$key];

            if ($file_name!="")
            {        
                $ServiceImage=post_img($file_name, $file_tmp,"../../../images/service");
            }    
            
            $ServiceImages = $ServiceImages.$ServiceImage.",";
        }

        $ServiceImages = substr($ServiceImages,0,strlen($ServiceImages)-1);

        $sql ="update service set ServiceText = '$ServiceText',
        ServiceShortDescription='$ServiceShortDescription',
        ServiceDescription='$ServiceDescription'";
                
        if($ServiceImages!="")
        {
            $sql =$sql.",ServiceImage = concat(ServiceImage,',','$ServiceImages')";
        }

        $sql =$sql." where ServiceID=".$Id;
        mysql_query($sql);
       header("location:view_service.php?mode=updated");
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
                    <h1 class="page-header"><i class="fa fa-tag">&nbsp;</i>Service</h1>
                      
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <!-- /.row -->
            <div class="row">
              <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                           <i class="fa fa-edit">&nbsp;</i> Edit Service
                             <a class="pull-right" href="view_service.php"><i class="fa fa-list">&nbsp;</i>View Service</a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                               <form role="form" enctype='multipart/form-data' action="edit_service.php?mode=update" method="post">
                                        <div class="form-group col-lg-6">
                                            <label>Service Text</label>
                                            <input class="form-control" name="ServiceText" value="<?php echo $obj->ServiceText; ?>" type="text" required />                                            
                                            <input name="Id" value="<?php echo $obj->ServiceID; ?>" type="hidden"/>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Service Image</label>
                                            <input class="form-control" name="ServiceImage[]" type="file" multiple />
                                            
                                             <br/>                                            
                                        <?php $images = explode(",",$obj->ServiceImage);
                                            foreach($images as $image){
                                                echo '<span class="col-lg-2"><img src="../../../images/service/'.$image.'" class="img-responsive"/><br>
                                                <a href="javascript:void(0)" onclick=fnDeleteImage("'.$obj->ServiceID.'","'.$image.'")><i class="fa fa-remove">&nbsp;</i>Delete</a>
                                                </span>';
                                            }
                                         ?>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Service Short Description</label>
                                            <textarea class="form-control" maxlength="499" name="ServiceShortDescription" rows="8"><?php echo $obj->ServiceShortDescription; ?></textarea>
                                        </div>                                                                   
                                        <div class="form-group col-md-12">
                                            <label>Service Description</label>
                                            <textarea class="form-control editor" name="ServiceDescription" rows="20"><?php echo $obj->ServiceDescription; ?></textarea>
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
     
     function fnDeleteImage(serviceId,image){
         document.location.href="edit_service.php?mode=delete&Id="+serviceId+"&image="+image;
     }
     </script>
</body>

</html>
