<?php
    include('../../includes/connection.php');
    include('../../includes/templates.php'); 
    include('../../includes/helpers.php');

    if($_REQUEST['mode']=="add")
    {
        $NewsText = $_POST["NewsText"];
        $NewsText = str_replace("'","`",$NewsText);
        $NewsDescription = $_POST["NewsDescription"];
        $NewsDescription = str_replace("'","`",$NewsDescription);        
        $NewsShortDescription = $_POST["NewsShortDescription"];
        $NewsShortDescription = str_replace("'","`",$NewsShortDescription);           
        $NewsImages ="";

        foreach($_FILES["NewsImage"]["tmp_name"] as $key=>$tmp_name)
        {
                $file_name=$_FILES["NewsImage"]["name"][$key];
                $file_tmp=$_FILES["NewsImage"]["tmp_name"][$key];

            if ($file_name!="")
            {        
                $NewsImage=post_img($file_name, $file_tmp,"../../../images/news");
            }

            if($NewsImage=="")
            {
                $NewsImage = "noimage.png";
            }        
            
            $NewsImages = $NewsImages.$NewsImage.",";
        }

        $NewsImages = substr($NewsImages,0,strlen($NewsImages)-1);
        

        $sql ="insert into news(NewsText,NewsImage,NewsDescription,NewsShortDescription) values
        ('$NewsText','$NewsImages','$NewsDescription','$NewsShortDescription')";
        mysql_query($sql);  
        
        header("location:view_news.php?mode=added");
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
                    <h1 class="page-header"><i class="fa fa-tag">&nbsp;</i>News</h1>
                      
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <!-- /.row -->
            <div class="row">
              <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                           <i class="fa fa-plus">&nbsp;</i> Add News
                             <a class="pull-right" href="view_news.php"><i class="fa fa-list">&nbsp;</i>View News</a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                               <form role="form" action="add_news.php?mode=add" enctype='multipart/form-data' method="post">
                                        <div class="form-group col-lg-6">
                                            <label>News Title</label>
                                            <input class="form-control" name="NewsText" type="text" required />                                            
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>News Images (Select Multiple files and upload)</label>
                                            <input class="form-control" name="NewsImage[]" type="file" multiple required />                                            
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>News Short Description</label>
                                            <textarea class="form-control" maxlength="499" name="NewsShortDescription" required rows="8"><?php echo $_REQUEST["NewsShortDescription"]; ?></textarea>
                                        </div>                                           
                                        <div class="form-group col-md-12">
                                            <label>News Description</label>
                                            <textarea class="form-control editor" name="NewsDescription" rows="20"><?php echo $_REQUEST["PageDescription"]; ?></textarea>
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
