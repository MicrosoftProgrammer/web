<?php
    include('../../includes/connection.php');
    include('../../includes/templates.php'); 
    include('../../includes/helpers.php');

    if($_REQUEST['mode']=="view")
    {

        $Id = $_REQUEST["Id"];

        $sql ="select * from pages where PageID=".$Id;
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
                            <i class="fa fa-bell fa-fw"></i> Page Details
                             <a class="pull-right" href="view_pages.php"><i class="fa fa-list">&nbsp;</i>View Pages</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                         <div class="table-responsive">
                                         <table class="table table-bordered table-hover table-striped">                                         
                                            <tbody>
                                                <tr>
                                                    <td>Page Name</td>
                                                    <td class="width300"><?php echo $obj->PageTitle; ?></td>                                                  
                                                </tr>
                                                <tr>
                                                    <td>Page Slug</td>
                                                    <td class="width300"><?php echo $obj->PageSlug; ?></td>                                                  
                                                </tr>
                                                <tr>
                                                    <td>Description</td>
                                                    <td class="width300"><?php echo $obj->PageDescription; ?></td>                                                  
                                                </tr>
                                                <tr>
                                                    <td>Page Short Description</td>
                                                    <td class="width300"><?php echo $obj->PageShortDescription; ?></td>                                                  
                                                </tr>
                                                <tr>
                                                    <td>Page Image</td>
                                                    <td class="width300">
                                                        <img src="../../images/pages/<?php echo $obj->PageImage; ?>" style='width:100%' />
                                                    </td>                                                  
                                                </tr>
                                                <tr>
                                                    <td>Show In Header Menu</td>
                                                    <td><?php if($obj->ShowInHeaderMenu==1) echo "Yes"; else echo "No"; ?></td>                                                  
                                                </tr>
                                                <tr>
                                                    <td>Show In Footer Menu</td>
                                                    <td><?php if($obj->ShowInFooterMenu==1) echo "Yes"; else echo "No"; ?></td>                                                  
                                                </tr>
                                                <tr>
                                                    <td>Show In Side Menu</td>
                                                    <td><?php if($obj->ShowInSideMenu==1) echo "Yes"; else echo "No"; ?></td>                                                  
                                                </tr>                                                
                                                <tr>
                                                    <td>Status</td>
                                                    <td><?php if($obj->Status==1) echo "Active"; else echo "In-Active"; ?></td>                                                  
                                                </tr>  
                                               <tr>
                                                    <td>SEO Title</td>
                                                    <td class="width600"><?php echo $obj->SEOTitle; ?></td>                                                  
                                                </tr>
                                                <tr>
                                                    <td>Meta Keywords</td>
                                                    <td class="width600"><?php echo $obj->MetaKeywords; ?></td>                                                  
                                                </tr>
                                               <tr>
                                                    <td>Meta Description</td>
                                                    <td class="width600"><?php echo $obj->MetaDescription; ?></td>                                                  
                                                </tr>                                                                                                                                                                                              
                                            </tbody>
                                        </table>
                                    </div>
                        </div>
                        </div>