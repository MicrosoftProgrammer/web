<?php
    include('../../includes/connection.php');
    include('../../includes/templates.php'); 
    include('../../includes/helpers.php');

    $error = "";
    if($_REQUEST['mode']=="add")
    {
        $PageTitle = $_POST["PageTitle"];
        $PageSlug = slug($PageTitle);
        if(ExecuteScalar("Select * from pages where PageSlug='".$PageSlug."' and Deleted=0")<=0) {
            $PageShortDescription = $_POST["PageShortDescription"];
            $PageDescription = stripslashes($_POST["PageDescription"]);
            $PageShortDescription = str_replace("'","`",$PageShortDescription);
            $PageDescription = str_replace("'","`",$PageDescription);
            $ShowInHeaderMenu = 0;
            $ShowInFooterMenu = 0;
            $ShowInSideMenu = 0;

            $SEOTitle = $_POST["SEOTitle"];
            $MetaKeywords = $_POST["MetaKeywords"];
            $MetaDescription = $_POST["MetaDescription"];
            $SEOTitle = str_replace("'","`",$SEOTitle);
            $MetaKeywords = str_replace("'","`",$MetaKeywords);
            $MetaDescription = str_replace("'","`",$MetaDescription);

            if (isset($_REQUEST['ShowInHeaderMenu'])) {
                $ShowInHeaderMenu =  1;
            }

            if (isset($_REQUEST['ShowInFooterMenu'])) {
                $ShowInFooterMenu =  1;
            }

            if (isset($_REQUEST['ShowInSideMenu'])) {
                $ShowInSideMenu =  1;
            }

            if ($_FILES['PageImage']['name']!="")
            {        
                $_REQUEST['PageImage']=post_img($_FILES['PageImage']['name'], $_FILES['PageImage']['tmp_name'],"../../../images/pages");
            }

            if($_REQUEST['PageImage']=="")
            {
                $_REQUEST['PageImage'] = "noimage.png";
            }
            
            $PageImage = $_REQUEST['PageImage'];

            $sql ="insert into pages(PageTitle,PageImage,PageShortDescription,PageDescription,
            ShowInHeaderMenu,ShowInFooterMenu,ShowInSideMenu,PageSlug,
            SEOTitle,MetaKeywords,MetaDescription) values
            ('$PageTitle','$PageImage','$PageShortDescription','$PageDescription',
            '$ShowInHeaderMenu','$ShowInFooterMenu','$ShowInSideMenu','$PageSlug',
            '$SEOTitle','$MetaKeywords','$MetaDescription')";

-\            mysql_query($sql);   
            header("location:view_pages.php?mode=added");
        }
        else {
            $error ="Page Title Already Exists";
        }
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
                <div class="col-md-12">
                    <h1 class="page-header"><i class="fa fa-tag">&nbsp;</i>Pages</h1>                      
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->

            <!-- /.row -->
            <div class="row">
              <div class="col-md-12">
                    <?php if($error!="") { ?>
                            <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <strong>Error!</strong> <?php echo $error; ?>
                            </div>
                        <?php } ?>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                           <i class="fa fa-plus">&nbsp;</i> Add Pages
                             <a class="pull-right" href="view_pages.php"><i class="fa fa-list">&nbsp;</i>View Pages</a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                               <form role="form" action="add_page.php?mode=add" enctype='multipart/form-data'  method="post">
                                        <div class="form-group col-md-6">
                                            <label>Page Title</label>
                                            <input class="form-control" value="<?php echo $_REQUEST["PageTitle"]; ?>" maxLength="299" name="PageTitle" type="text" required />                                            
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Page Image</label>
                                            <input class="form-control" name="PageImage" type="file" />                                            
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label class="checkbox-inline">
                                                <input name="ShowInHeaderMenu" <?php if (isset($_REQUEST['ShowInFooterMenu'])) { echo "checked"; } ?>  type="checkbox"> Header Menu
                                            </label>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label class="checkbox-inline">
                                                <input name="ShowInFooterMenu" <?php if (isset($_REQUEST['ShowInFooterMenu'])) { echo "checked"; } ?>   type="checkbox"> Footer Menu
                                            </label>
                                        </div>
                                        <div class="form-group col-lg-4">
                                           <label class="checkbox-inline">
                                                <input name="ShowInSideMenu" <?php if (isset($_REQUEST['ShowInSideMenu'])) { echo "checked"; } ?>   type="checkbox"> Side Menu
                                            </label>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Pages Short Description</label>
                                            <textarea class="form-control" maxLength="499" name="PageShortDescription" rows="5" required><?php echo $_REQUEST["PageShortDescription"]; ?></textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Pages Description</label>
                                            <textarea class="form-control editor" name="PageDescription" rows="30"><?php echo $_REQUEST["PageDescription"]; ?></textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>SEO Title</label>
                                            <input class="form-control" maxLength="299" value='<?php echo $_REQUEST["SEOTitle"]; ?>' name="SEOTitle" type="text" required />  
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Meta Keyword</label>
                                            <textarea class="form-control" maxLength="499" name="MetaKeywords" rows="5" required><?php echo $_REQUEST["MetaKeywords"]; ?></textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Meta Description</label>
                                            <textarea class="form-control" maxLength="499" name="MetaDescription" rows="5" required><?php echo $_REQUEST["MetaDescription"]; ?></textarea>
                                        </div>                                           
                                        <div class="form-group col-md-12">
                                            <button ="submit" class="btn btn-success"><i class="fa fa-save">&nbsp;</i>Save</button>
                                            <button ="reset" class="btn btn-danger"><i class="fa fa-remove">&nbsp;</i>Reset</button>
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

<?php echo fnScript(); ?>
     <script src="http://cloud.tinymce.com/stable/tinymce.min.js"></script>
     <script>tinymce.init({ selector:'.editor' });</script>
</body>

</html>
