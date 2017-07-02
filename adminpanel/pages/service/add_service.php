<?php
    include('../../includes/connection.php');
    include('../../includes/templates.php'); 
    include('../../includes/helpers.php');

    if($_REQUEST['mode']=="add")
    {
        $ServiceText = $_POST["ServiceText"];
        $ServiceText = str_replace("'","`",$ServiceText);
        $ServiceDescription = $_POST["ServiceDescription"];
        $ServiceDescription = str_replace("'","`",$ServiceDescription);        
        $ServiceShortDescription = $_POST["ServiceShortDescription"];
        $ServiceShortDescription = str_replace("'","`",$ServiceShortDescription);           
        $ServiceImages ="";

        foreach($_FILES["ServiceImage"]["tmp_name"] as $key=>$tmp_name)
        {
                $file_name=$_FILES["ServiceImage"]["name"][$key];
                $file_tmp=$_FILES["ServiceImage"]["tmp_name"][$key];

            if ($file_name!="")
            {        
                $ServiceImage=post_img($file_name, $file_tmp,"../../../images/service");
            }

            if($ServiceImage=="")
            {
                $ServiceImage = "noimage.png";
            }        
            
            $ServiceImages = $ServiceImages.$ServiceImage.",";
        }

        $ServiceImages = substr($ServiceImages,0,strlen($ServiceImages)-1);
        

        $sql ="insert into service(ServiceText,ServiceImage,ServiceDescription,ServiceShortDescription) values
        ('$ServiceText','$ServiceImages','$ServiceDescription','$ServiceShortDescription')";
        mysql_query($sql);  
        header("location:view_service.php?mode=added");
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
                           <i class="fa fa-plus">&nbsp;</i> Add Service
                             <a class="pull-right" href="view_service.php"><i class="fa fa-list">&nbsp;</i>View Service</a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                               <form role="form" action="add_service.php?mode=add" enctype='multipart/form-data' method="post">
                                        <div class="form-group col-lg-6">
                                            <label>Service Title</label>
                                            <input class="form-control" name="ServiceText" type="text" required />                                            
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Service Images (Select Multiple files and upload)</label>
                                            <input class="form-control" name="ServiceImage[]" type="file" multiple required />                                            
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Service Short Description</label>
                                            <textarea class="form-control" maxlength="499" name="ServiceShortDescription" required rows="8"><?php echo $_REQUEST["ServiceShortDescription"]; ?></textarea>
                                        </div>                                           
                                        <div class="form-group col-md-12">
                                            <label>Service Description</label>
                                            <textarea class="form-control editor" name="ServiceDescription" rows="20"><?php echo $_REQUEST["PageDescription"]; ?></textarea>
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
