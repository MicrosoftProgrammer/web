<?php
    include('../../includes/connection.php');
    include('../../includes/templates.php'); 
    include('../../includes/helpers.php');

    $Id = $_REQUEST["Id"];

    $sql ="select * from news where NewsID=".$Id;
    $res = mysql_query($sql);
    $obj = mysql_fetch_object($res);

    if($_REQUEST['mode']=="delete")
    {
        $updateImage = removeFromString($obj->NewsImage,$_REQUEST["image"]);
        del_img("../../../images/news/",$_REQUEST["image"]);   
        $sql ="update news set NewsImage = '".$updateImage."'
                where NewsID=".$Id;
        mysql_query($sql);

        header("location:edit_news.php?mode=edit&Id=".$Id);
    }

    if($_REQUEST['mode']=="update")
    {
        $NewsText = $_POST["NewsText"];
        $NewsText = str_replace("'","`",$NewsText);
        $NewsDescription = $_POST["NewsDescription"];
        $NewsDescription = str_replace("'","`",$NewsDescription);
        $NewsShortDescription = $_POST["NewsShortDescription"];
        $NewsShortDescription = str_replace("'","`",$NewsShortDescription);           
        $Id = $_POST["Id"];

        foreach($_FILES["NewsImage"]["tmp_name"] as $key=>$tmp_name)
        {
                $file_name=$_FILES["NewsImage"]["name"][$key];
                $file_tmp=$_FILES["NewsImage"]["tmp_name"][$key];

            if ($file_name!="")
            {        
                $NewsImage=post_img($file_name, $file_tmp,"../../../images/news");
            }    
            
            $NewsImages = $NewsImages.$NewsImage.",";
        }

        $NewsImages = substr($NewsImages,0,strlen($NewsImages)-1);

        $sql ="update news set NewsText = '$NewsText',
        NewsShortDescription='$NewsShortDescription',
        NewsDescription='$NewsDescription'";
                
        if($NewsImages!="")
        {
            $sql =$sql.",NewsImage = concat(NewsImage,',','$NewsImages')";
        }

        $sql =$sql." where NewsID=".$Id;
        mysql_query($sql);
       header("location:view_news.php?mode=updated");
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
                           <i class="fa fa-edit">&nbsp;</i> Edit News
                             <a class="pull-right" href="view_news.php"><i class="fa fa-list">&nbsp;</i>View News</a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                               <form role="form" enctype='multipart/form-data' action="edit_news.php?mode=update" method="post">
                                        <div class="form-group col-lg-6">
                                            <label>News Text</label>
                                            <input class="form-control" name="NewsText" value="<?php echo $obj->NewsText; ?>" type="text" required />                                            
                                            <input name="Id" value="<?php echo $obj->NewsID; ?>" type="hidden"/>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>News Image</label>
                                            <input class="form-control" name="NewsImage[]" type="file" multiple />
                                            
                                             <br/>                                            
                                        <?php $images = explode(",",$obj->NewsImage);
                                            foreach($images as $image){
                                                echo '<span class="col-lg-2"><img src="../../../images/news/'.$image.'" class="img-responsive"/><br>
                                                <a href="javascript:void(0)" onclick=fnDeleteImage("'.$obj->NewsID.'","'.$image.'")><i class="fa fa-remove">&nbsp;</i>Delete</a>
                                                </span>';
                                            }
                                         ?>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>News Short Description</label>
                                            <textarea class="form-control" maxlength="499" name="NewsShortDescription" rows="8"><?php echo $obj->NewsShortDescription; ?></textarea>
                                        </div>                                                                   
                                        <div class="form-group col-md-12">
                                            <label>News Description</label>
                                            <textarea class="form-control editor" name="NewsDescription" rows="20"><?php echo $obj->NewsDescription; ?></textarea>
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
     
     function fnDeleteImage(newsId,image){
         document.location.href="edit_news.php?mode=delete&Id="+newsId+"&image="+image;
     }
     </script>
</body>

</html>
