<?php
    include('../../includes/connection.php');
    include('../../includes/templates.php'); 
    include('../../includes/helpers.php');

    if($_REQUEST['mode']=="delete")
    {

        $Id = $_REQUEST["Id"];

        $sql ="update pages set Deleted = 1
                where PageID=".$Id;
        mysql_query($sql);

        header("location:view_pages.php?mode=deleted");
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $_SESSION["CompanyName"]; ?></title>
        <?php echo fnCss(); ?>
        <?php echo fnDataTableCSS(); ?>
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
                    <h1 class="page-header"><i class="fa fa-tags">&nbsp;</i>Page </h1>
               
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
                <?php if($_REQUEST["mode"]=="added") { ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <strong>Success!</strong> Page Added Successfully.
            </div>
            <?php } ?>
            <?php if($_REQUEST["mode"]=="updated") { ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <strong>Success!</strong> Page Updated Successfully.
            </div>
            <?php } ?>
            <?php if($_REQUEST["mode"]=="deleted") { ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <strong>Success!</strong> Page Deleted Successfully.
            </div>
            <?php } ?>
            <!-- /.row -->
            <div class="row">
            
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                        <i class="fa fa-list">&nbsp;</i>
                            View Pages
                               <a class="pull-right" href="add_page.php"><i class="fa fa-plus">&nbsp;</i>Add Page</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Page Title</th>  
                                        <th>Page Slug</th>                                                                           
                                        <th>Status</th>
                                        <th>Action</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $sql = "select * from pages where Deleted=0 ";
                                    $sql .= " order by PageID";
                              
                                    $res = mysql_query($sql);
                                    $numrows = mysql_num_rows($res);
                                    if ($numrows > 0) {
                                        $cnt = 0;
                                        while ($obj = mysql_fetch_object($res)) {
                                            $cnt++;
                                            if ($cnt % 2 == 0)
                                                $class = "even";
                                            else
                                                $class = "odd";
                                    ?>
                                    <tr class="<?php echo $class; ?> gradeX">
                                        <td><?php echo $cnt; ?></td>
                                        <td><?php echo $obj->PageTitle; ?></td>    
                                        <td><?php echo $obj->PageSlug; ?></td>
                                        
                                        <td class="center"><?php if($obj->Status=="1") echo "Active"; else echo "In-Active"; ?></td>
                                        <td class="center">
                                            <a class="details" title="<?php echo $obj->PageName; ?>" href="view_page.php?mode=view&Id=<?php echo $obj->PageID; ?>"><i class="fa fa-search">&nbsp;</i>View</a>
                                            &nbsp;&nbsp;
                                            <a title="<?php echo $obj->PageName; ?>" href="edit_page.php?mode=view&Id=<?php echo $obj->PageID; ?>"><i class="fa fa-edit">&nbsp;</i>Edit</a>
                                            &nbsp;&nbsp;
                                            <a href="javascript:void(0)" onclick="fnDelete(<?php echo $obj->PageID; ?>);"><i class="fa fa-remove">&nbsp;</i>Delete</a>
                                        </td>
                                    </tr>  
                                    <?php }
                                         } ?>                                 
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                       
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

     <?php fnAdminScript(); ?>
     <?php fnDataTableScript(); ?>
     <?php fnColorBox(); ?>
     <script>
     function fnDelete(pageId)
     {
         if(confirm("Are you sure want to delete .?"))
         {
             document.location.href="view_pages.php?mode=delete&Id="+pageId;
         }
     }
     
     $(document).ready(function(){
	    $(".details").colorbox();
     });
     </script>
</body>

</html>
