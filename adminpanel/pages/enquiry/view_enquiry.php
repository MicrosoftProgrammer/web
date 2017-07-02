<?php
    include('../../includes/connection.php');
    include('../../includes/templates.php'); 
    include('../../includes/helpers.php');
        
    if($_REQUEST['mode']=="delete")
    {
        $Id = $_REQUEST["Id"];

        $sql ="update enquiry set Deleted = 1
                where EnquiryID=".$Id;
        mysql_query($sql);

        header("location:view_enquiry.php?mode=deleted");
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
                    <h1 class="page-header"><i class="fa fa-tags">&nbsp;</i>Enquiry</h1>
               
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
                <?php if($_REQUEST["mode"]=="added") { ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-remove">&nbsp;</i></button>
                <strong>Success!</strong> Enquiry Added Successfully.
            </div>
            <?php } ?>
            <?php if($_REQUEST["mode"]=="updated") { ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-remove">&nbsp;</i></button>
                <strong>Success!</strong> Enquiry Updated Successfully.
            </div>
            <?php } ?>
            <?php if($_REQUEST["mode"]=="deleted") { ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-remove">&nbsp;</i></button>
                <strong>Success!</strong> Enquiry Deleted Successfully.
            </div>
            <?php } ?>
            <!-- /.row -->
            <div class="row">
            
                <div ++ass="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-list">&nbsp;</i>View Enquiry
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
                                        <th>Enquired Time</th>
                                        <th>Action</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $sql = "select * from enquiry where Deleted=0 ";
                                    $sql .= " order by EnquiryID";
                              
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
                                        <td><?php echo $obj->EnquiredTime; ?></td>                                          
                                        <td class="center">
                                            <a href="javascript:void(0)" onclick="fnDelete(<?php echo $obj->EnquiryID; ?>);"><i class="fa fa-remove">&nbsp;</i>Delete</a>
                                            &nbsp;&nbsp;
                                            <a href="view_enquiry_details.php?mode=view&Id=<?php echo $obj->EnquiryID; ?>"><i class="fa fa-search">&nbsp;</i>View</a>
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
     function fnDelete(enquiryId)
     {
         if(confirm("Are you sure want to delete .?"))
         {
             document.location.href="view_enquiry.php?mode=delete&Id="+enquiryId;
         }
     }
     
     $(document).ready(function(){
	    $(".details").colorbox();
     });
     </script>
</body>

</html>
