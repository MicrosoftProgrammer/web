<?php
    include('../../includes/connection.php');
    include('../../includes/templates.php'); 
    include('../../includes/helpers.php');

    $Id = $_REQUEST["Id"];

    $sql ="select * from pages where PageID=".$Id;
    $res = mysql_query($sql);
    $obj = mysql_fetch_object($res);

    $error = "";

    if($_REQUEST['mode']=="update")
    {
        $PageSlug = slug($_POST["PageSlug"]);
        if(ExecuteScalar("Select * from pages where PageSlug='".$PageSlug."' and Deleted=0 and PageID!=".$Id)<=0) {
            $PageTitle = $_POST["PageTitle"];
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
                del_img("../../images/pages/",$obj->PageImage);     
                $_REQUEST['PageImage']=post_img($_FILES['PageImage']['name'], $_FILES['PageImage']['tmp_name'],"../../images/pages");
            }

            if($_REQUEST['PageImage']=="")
            {
                $_REQUEST['PageImage'] = $obj->PageImage;
            }
            
            $PageImage = $_REQUEST['PageImage'];

            $sql ="update pages set PageTitle = '$PageTitle',
                    PageImage = '$PageImage',
                    PageShortDescription= '$PageShortDescription',
                    PageDescription='$PageDescription',
                    ShowInHeaderMenu = '$ShowInHeaderMenu',
                    ShowInFooterMenu ='$ShowInFooterMenu',
                    ShowInSideMenu ='$ShowInSideMenu',
                    PageSlug = '$PageSlug',
                    SEOTitle = '$SEOTitle',
                    MetaKeywords = '$MetaKeywords',
                    MetaDescription = '$MetaDescription'
                    where PageID ='$Id'";
                
            mysql_query($sql);   
            header("location:view_pages.php?mode=added");
        }
        else {
            $error ="Page Slug Already Exists";
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
                           <i class="fa fa-edit">&nbsp;</i> Edit Pages
                             <a class="pull-right" href="view_pages.php"><i class="fa fa-list">&nbsp;</i>View Pages</a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                               <form role="form" action="edit_page.php?mode=update" enctype='multipart/form-data'  method="post">
                                        <div class="form-group col-md-6">
                                            <label>Page Title</label>
                                            <input class="form-control" maxLength="300" name="PageTitle" value="<?php echo $obj->PageTitle; ?>" type="text" required />                                            
                                            <input name="Id" value="<?php echo $obj->PageID; ?>" type="hidden" />                                            
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Page Image</label>
                                            <input class="form-control" name="PageImage" type="file" />       
                                            <img src="../../images/pages/<?php echo $obj->PageImage; ?>" width="100" height="100" />                                     
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label class="checkbox-inline">
                                                <input <?php if($obj->ShowInHeaderMenu==1) echo "checked"; ?> name="ShowInHeaderMenu" type="checkbox"> Header Menu
                                            </label>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label class="checkbox-inline">
                                                <input <?php if($obj->ShowInFooterMenu==1) echo "checked"; ?> name="ShowInFooterMenu" type="checkbox"> Footer Menu
                                            </label>
                                        </div>
                                        <div class="form-group col-md-2">
                                           <label class="checkbox-inline">
                                                <input <?php if($obj->ShowInSideMenu==1) echo "checked"; ?> name="ShowInSideMenu" type="checkbox"> Side Menu
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Page Slug</label>
                                            <input class="form-control"  name="PageSlug" type="text" value="<?php echo $obj->PageSlug; ?>" required />  
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Pages Short Description</label>
                                            <textarea class="form-control" maxLength="499" name="PageShortDescription" rows="5" required><?php echo $obj->PageShortDescription; ?></textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Pages Description</label>
                                            <textarea class="form-control editor" name="PageDescription" rows="30"><?php echo $obj->PageDescription; ?></textarea>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>SEO Title</label>
                                            <input class="form-control" maxLength="300" name="SEOTitle" type="text" value="<?php echo $obj->SEOTitle; ?>" required />  
                                        </div>                                    
                                        <div class="form-group col-md-12">
                                            <label>Meta Keyword</label>
                                            <textarea class="form-control" maxLength="500" name="MetaKeywords" rows="5" required><?php echo $obj->MetaKeywords; ?></textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Meta Description</label>
                                            <textarea class="form-control" maxLength="500" name="MetaDescription" rows="5" required><?php echo $obj->MetaDescription; ?></textarea>
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
