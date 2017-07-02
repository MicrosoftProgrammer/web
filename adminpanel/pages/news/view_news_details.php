<?php
    include('../../includes/connection.php');
    include('../../includes/templates.php'); 
    include('../../includes/helpers.php');

    if($_REQUEST['mode']=="view")
    {

        $Id = $_REQUEST["Id"];

        $sql ="select * from news where NewsID=".$Id;
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
    <i class="fa fa-bell fa-fw"></i> News Details
        <a class="pull-right" href="view_news.php"><i class="fa fa-list">&nbsp;</i>View News</a>
</div>
<!-- /.panel-heading -->
<div class="panel-body">
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">                                         
        <tbody>
            <tr>
                <td width="20%">News Title</td>
                <td width="80%"><?php echo $obj->NewsText; ?></td>                                                  
            </tr>
            <tr>
                <td>News Short Description</td>
                <td class="width300"><?php echo $obj->NewsShortDescription; ?></td>                                                  
            </tr>
            <tr>
                <td>News Description</td>
                <td class="width300"><?php echo $obj->NewsDescription; ?></td>                                                  
            </tr>
            <tr>
                <td>News Image</td>
                <td class="width300">
                    <?php $images = explode(",",$obj->NewsImage);
                        foreach($images as $image){
                            echo '<span class="col-lg-2"><img src="../../images/news/'.$image.'" class="img-responsive"/><br>
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