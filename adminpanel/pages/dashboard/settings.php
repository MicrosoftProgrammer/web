<?php        
    include('../../includes/connection.php');
    include('../../includes/helpers.php');
    include('../../includes/templates.php');

    if(!isSuperAdmin())
    {
        header("location:../../login.php");
    }

    if ($_REQUEST["mode"]=="Backup")
    { 
        backup_tables();
        $text="Database Backup Done.";
    }

    if ($_REQUEST["mode"]=="update")
    { 
        $CompanyName = str_replace("'","`",$_REQUEST["CompanyName"]);
        $Address = str_replace("'","`",$_REQUEST["Address"]);
        $ContactNo = str_replace("'","`",$_REQUEST["ContactNo"]);
        $Email = str_replace("'","`",$_REQUEST["Email"]);
        $FromEmail = str_replace("'","`",$_REQUEST["FromEmail"]);
        $file =post_img($_FILES['file']['name'], $_FILES['file']['tmp_name'],"../../../images");
        $caption =post_img($_FILES['caption']['name'], $_FILES['caption']['tmp_name'],"../../../images");
        $Fax = str_replace("'","`",$_REQUEST["Fax"]);
        $Location = str_replace("'","`",$_REQUEST["Location"]);            
        $AdminUrl = $_REQUEST["AdminUrl"];  
        $WMSUrl = $_REQUEST["WMSUrl"];  
        
            $sql = "UPDATE settings SET ";
            $sql.= "CompanyName	=	'".$CompanyName."', ";
            if($file!=""){
                $sql.= "Logo	=	'".$file."', ";
            }
            if($caption!=""){
                $sql.= "Caption	=	'".$caption."', ";
            }
            $sql.= "Address	=	'".$Address."', ";
            $sql.= "ContactNo	=	'".$ContactNo."', ";
            $sql.= "Email	=	'".$Email."', ";
            $sql.= "AdminUrl	=	'".$AdminUrl."', ";
            $sql.= "WMSUrl	=	'".$WMSUrl."', ";            
            $sql.= "Fax	=	'".$Fax."', ";
            $sql.= "Location	=	'".$Location."', ";                 
            $sql.= "FromEmail	=	'".$FromEmail."'";
            mysql_query($sql);				

            $text ="Info Updated Successfully";
      
    }

    $sql="SELECT * FROM settings";
    $res=mysql_query($sql);
    echo mysql_error();
    $numrows=mysql_num_rows($res); 
    if ($numrows>0) 
    {
        $obj= mysql_fetch_object($res);			
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Settings</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Company Information
                        </div>
                        <div class="panel-body">
                            <?php if($error!=""){ ?>
                            <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-remove"></i></button>
                                Error! <strong><?php echo $error; ?></strong>
                            </div>
                            <?php } ?>
                             <?php if($text!=""){ ?>
                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-remove"></i></button>
                                Success! <strong><?php echo $text; ?></strong>
                            </div>
                            <?php } ?>
                            <div class="row">
                                <div class="col-md-12">
                                     <form name="adminForm" method="post" action="settings.php?mode=update" enctype="multipart/form-data">   
                                        <div class="form-group col-md-6">
                                            <label>Company Name</label>
                                            <input type="text" class="form-control" name="CompanyName" required value="<?php echo $obj->CompanyName; ?>" />                                            
                                        </div> 
                                        <div class="form-group col-md-6">
                                            <label>Contact No</label>
                                             <input type="text" class="form-control" name="ContactNo" required value="<?php echo $obj->ContactNo; ?>"/>
                                        </div>  
                                                                                                                         
                                        <div class="form-group col-md-6">
                                            <label>logo</label>
                                            <input type="file" class="form-control" name="file" />                                            
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Caption</label>
                                            <input type="file" class="form-control" name="caption" />    
                                            <p><?php echo $obj->Caption; ?></p>                                        
                                        </div>        
                                                         <div class="form-group col-md-6">
                                            <img src="../../../images/<?php echo $_SESSION['Logo']; ?>" alt="Logo" class="img-responsive" />                                          
                                        </div>                                  
                                        <div class="form-group col-md-6">
                                            <label>Address</label>
                                             <textarea class="form-control" rows="4" required name="Address"><?php echo $obj->Address; ?></textarea>
                                        </div>  
                        
                                        <div class="form-group col-md-6">
                                            <label>Fax</label>
                                             <input type="text" class="form-control" name="Fax" required value="<?php echo $obj->Fax; ?>"/>
                                        </div>  
                                                                                                                
                                        <div class="form-group col-md-6">
                                            <label>Email</label>
                                             <input type="email" class="form-control" name="Email" required  value="<?php echo $obj->Email; ?>"/>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>From Email</label>
                                             <input type="email" class="form-control" name="FromEmail" required value="<?php echo $obj->FromEmail; ?>"/>
                                        </div>   
                                        <div class="form-group col-md-6">
                                            <label>Admin Panel Url</label>
                                             <input type="text" class="form-control" name="AdminUrl" required value="<?php echo $obj->AdminUrl; ?>"/>
                                        </div>  
                                        <div class="form-group col-md-6">
                                            <label>WMS Url</label>
                                             <input type="text" class="form-control" name="WMSUrl" required value="<?php echo $obj->WMSUrl; ?>"/>
                                        </div>                                                                                  
                                        <div class="form-group col-md-12">
                                            <label>Location Google map</label>
                                            <textarea class="form-control" name="Location" rows="8"><?php echo $obj->Location; ?></textarea>
                                        </div>                                                                                                                                                                                                           
                                        <div class="form-group col-md-12">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <button type="reset" class="btn btn-danger">Reset</button>
                                            <a href="settings.php?mode=Backup" class="btn btn-success pull-right">Backup Database</a>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
    </body>
    <?php echo fnScript(); ?>
</html>