<?php
    include('../../includes/connection.php');
    include('../../includes/templates.php'); 
    include('../../includes/helpers.php');

    $Id = $_REQUEST["Id"];

    $sql ="select * from banners where BannerID=".$Id;
    $res = mysql_query($sql);
    $obj = mysql_fetch_object($res);


    if($_REQUEST['mode']=="update")
    {
        $BannerText = $_POST["BannerText"];
        $BannerText = str_replace("'","`",$BannerText);
        $Id = $_POST["Id"];

        if ($_FILES['BannerImage']['name']!="")
	    {        
		    del_img("../../images/banners/",$obj->BannerImage);            
		    $_REQUEST['BannerImage']=post_img($_FILES['BannerImage']['name'], $_FILES['BannerImage']['tmp_name'],"../../images/banners");
	    }

        $sql ="update banners set BannerText = '$BannerText'";
                
        if($_REQUEST['BannerImage']!="")
        {
            $BannerImage = $_REQUEST['BannerImage'];
            $sql =$sql.",BannerImage = '$BannerImage'";
        }

        $sql =$sql."where BannerID=".$Id;
        mysql_query($sql);

        header("location:view_banners.php?mode=updated");
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
                           <i class="fa fa-edit">&nbsp;</i> Edit Banner
                             <a class="right-menu" href="view_banners.php"><i class="fa fa-list">&nbsp;</i>View Banners</a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                               <form role="form" enctype='multipart/form-data' action="edit_banner.php?mode=update" method="post">
                                        <div class="form-group col-lg-6">
                                            <label>Banner Text</label>
                                            <input class="form-control" name="BannerText" value="<?php echo $obj->BannerText; ?>" type="text" required />                                            
                                            <input name="Id" value="<?php echo $obj->BannerID; ?>" type="hidden"/>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Banner Image</label>
                                            <input class="form-control" name="BannerImage" type="file" /> <br/>                                            
                                            <img src="../../images/banners/<?php echo $obj->BannerImage; ?>" width="100" height="100" />
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
