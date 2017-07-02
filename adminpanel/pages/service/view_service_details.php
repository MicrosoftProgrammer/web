<?php
    include('../../includes/connection.php');
    include('../../includes/templates.php'); 
    include('../../includes/helpers.php');

    if($_REQUEST['mode']=="view")
    {

        $Id = $_REQUEST["Id"];

        $sql ="select * from service where ServiceID=".$Id;
        $res = mysql_query($sql);
        $obj= mysql_fetch_object($res);

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <?php echo fnCss(); ?>
</head>
 <div class="panel panel-primary">
    <div class="panel-heading">
    <i class="fa fa-bell fa-fw"></i> Service Details
        <a class="pull-right" href="view_service.php"><i class="fa fa-list">&nbsp;</i>View Service</a>
</div>
<!-- /.panel-heading -->
<div class="panel-body">
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">                                         
        <tbody>
            <tr>
                <td width="20%">Service Title</td>
                <td width="80%"><?php echo $obj->ServiceText; ?></td>                                                  
            </tr>
            <tr>
                <td>Service Short Description</td>
                <td class="width300"><?php echo $obj->ServiceShortDescription; ?></td>                                                  
            </tr>
            <tr>
                <td>Service Description</td>
                <td class="width300"><?php echo $obj->ServiceDescription; ?></td>                                                  
            </tr>
            <tr>
                <td>Service Image</td>
                <td class="width300">
                    <?php $images = explode(",",$obj->ServiceImage);
                        foreach($images as $image){
                            echo '<span class="col-lg-2"><img src="../../../images/service/'.$image.'" class="img-responsive"/><br>
                            </span>';
                        }
                        ?>
                </td>                                                  
            </tr>                                                                                                                                                                                                      
        </tbody>
    </table>
</div>
</div>
</div>