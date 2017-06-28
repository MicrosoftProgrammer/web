<?php
    include('../../includes/connection.php');
    include('../../includes/templates.php'); 
    include('../../includes/helpers.php');

    if($_REQUEST['mode']=="add")
    {
        $BannerText = $_POST["BannerText"];
        $BannerText = str_replace("'","`",$BannerText);

        if ($_FILES['BannerImage']['name']!="")
	    {        
		    $_REQUEST['BannerImage']=post_img($_FILES['BannerImage']['name'], $_FILES['BannerImage']['tmp_name'],"../../images/banners");
	    }

        if($_REQUEST['BannerImage']=="")
        {
            $_REQUEST['BannerImage'] = "noimage.png";
        }
        
        $BannerImage = $_REQUEST['BannerImage'];

        $sql ="insert into banners(BannerText,BannerImage) values
        ('$BannerText','$BannerImage')";
        
        mysql_query($sql);   
        header("location:view_banners.php?mode=added");
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
                    <h1 class="page-header"><i class="fa fa-tag">&nbsp;</i>Banners</h1>
                      
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <!-- /.row -->
            <div class="row">
              <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                           <i class="fa fa-plus">&nbsp;</i> Add Banners
                             <a class="right-menu" href="view_banners.php"><i class="fa fa-list">&nbsp;</i>View Banners</a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                               <form role="form" action="add_banner.php?mode=add" enctype='multipart/form-data' method="post">
                                        <div class="form-group col-lg-6">
                                            <label>Banner Text</label>
                                            <input class="form-control" name="BannerText" type="text" required />                                            
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Banner Image</label>
                                            <input class="form-control" name="BannerImage" type="file" required />                                            
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
</body>

</html>
