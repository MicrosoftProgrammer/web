<?php
    include('../../includes/connection.php');
    include('../../includes/templates.php'); 
    include('../../includes/helpers.php');

    if($_REQUEST['mode']=="view")
    {

        $Id = $_REQUEST["Id"];

        $sql ="select * from enquiry where EnquiryID=".$Id;
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
    <i class="fa fa-bell fa-fw"></i> Enquiry Details
        <a class="pull-right" href="view_enquiry.php"><i class="fa fa-list">&nbsp;</i>View Enquiry</a>
</div>
<!-- /.panel-heading -->
<div class="panel-body">
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">                                         
        <tbody>
            <tr>
                <td width="20%">Name</td>
                <td width="70%"><?php echo $obj->Name; ?></td>                                                  
            </tr>
            <tr>
                <td>Email</td>
                <td class="width300"><?php echo $obj->Email; ?></td>                                                  
            </tr>
            <tr>
                <td>Contact No</td>
                <td class="width300"><?php echo $obj->ContactNo; ?></td>                                                  
            </tr>            
            <tr>
                <td>Description</td>
                <td class="width300"><?php echo $obj->Description; ?></td>                                                  
            </tr>  
            <tr>
                <td>Enquired Time</td>
                <td class="width300"><?php echo $obj->EnquiredTime; ?></td>                                                  
            </tr>                                                                                                                                                                                                             
        </tbody>
    </table>
</div>
</div>
</div>