<?php
    include('../../includes/connection.php');
    include('../../includes/templates.php'); 
    include('../../includes/helpers.php');
        
    if($_REQUEST['mode']=="delete")
    {
        $Id = $_REQUEST["Id"];

        $sql ="update career set Deleted = 1
                where CareerID=".$Id;
        mysql_query($sql);

        header("location:view_career.php?mode=deleted");
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
                    <h1 class="page-header"><i class="fa fa-tags">&nbsp;</i>Career</h1>
               
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
                <?php if($_REQUEST["mode"]=="added") { ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-remove">&nbsp;</i></button>
                <strong>Success!</strong> Career Added Successfully.
            </div>
            <?php } ?>
            <?php if($_REQUEST["mode"]=="updated") { ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-remove">&nbsp;</i></button>
                <strong>Success!</strong> Career Updated Successfully.
            </div>
            <?php } ?>
            <?php if($_REQUEST["mode"]=="deleted") { ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-remove">&nbsp;</i></button>
                <strong>Success!</strong> Career Deleted Successfully.
            </div>
            <?php } ?>
            <!-- /.row -->
            <div class="row">
            
                <div ++ass="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-list">&nbsp;</i>View Career
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>  
                                        <th>Email</th>                                
                                        <th>Contact No</th>
                                        <th>Uploaded Time</th>
                                        <th>Resume</th>
                                        <th>Action</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $sql = "select * from career where Deleted=0 ";
                                    $sql .= " order by CareerID";
                              
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
                                        <td><?php echo $obj->Name; ?></td>   
                                        <td><?php echo $obj->Email; ?></td> 
                                        <td><?php echo $obj->ContactNo; ?></td> 
                                        <td><?php echo $obj->UploadedTime; ?></td> 
                                        
                                        <td class="center">
                                        <?php 
                                            echo '<a target="_blank" href="../../images/career/'.$obj->Resume.'">Resume</a>';
                                         ?>
                                        </td>   
                                        <td class="center">
                                            <a href="javascript:void(0)" onclick="fnDelete(<?php echo $obj->CareerID; ?>);"><i class="fa fa-remove">&nbsp;</i>Delete</a>
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

     <?php fnScript(); ?>
     <?php fnDataTableScript(); ?>
     <?php fnColorBox(); ?>
     <script>
     function fnDelete(careerId)
     {
         if(confirm("Are you sure want to delete .?"))
         {
             document.location.href="view_career.php?mode=delete&Id="+careerId;
         }
     }
     
     $(document).ready(function(){
	    $(".details").colorbox();
     });
     </script>
</body>

</html>
