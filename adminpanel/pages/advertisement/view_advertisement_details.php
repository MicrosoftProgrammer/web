<?php
    include('../../includes/connection.php');
    include('../../includes/templates.php'); 
    include('../../includes/helpers.php');

    if($_REQUEST['mode']=="view")
    {

        $Id = $_REQUEST["Id"];

        $sql ="select * from advertisement where AdvertisementID=".$Id;
        $res = mysql_query($sql);
        $obj= mysql_fetch_object($res);

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <?php echo fnCss(); ?>
</head>
 <div class="panel panel-default">
    <div class="panel-heading">
    <i class="fa fa-bell fa-fw"></i> Advertisement Details
        <a class="pull-right" href="view_advertisement.php"><i class="fa fa-list">&nbsp;</i>View Advertisement</a>
</div>
<!-- /.panel-heading -->
<div class="panel-body">
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">                                         
        <tbody>
            <tr>
                <td width="20%">Advertisement Title</td>
                <td width="70%"><?php echo $obj->AdvertisementText; ?></td>                                                  
            </tr>
            <tr>
                <td>Advertisement Short Description</td>
                <td class="width300"><?php echo $obj->AdvertisementShortDescription; ?></td>                                                  
            </tr>
            <tr>
                <td>Advertisement Description</td>
                <td class="width300"><?php echo $obj->AdvertisementDescription; ?></td>                                                  
            </tr>
            <tr>
                <td>Advertisement Image</td>
                <td class="width300">
                    <?php $images = explode(",",$obj->AdvertisementImage);
                        foreach($images as $image){
                            echo '<span class="col-lg-2"><img src="../../images/advertisement/'.$image.'" class="img-responsive"/><br>
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