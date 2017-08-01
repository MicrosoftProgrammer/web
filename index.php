<?php
    include("adminpanel/includes/connection.php");
    include("adminpanel/includes/helpers.php");
    include("adminpanel/includes/templates.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $_SESSION["CompanyName"]; ?></title>
    <?php echo fnFrontCss(); ?>
    <style>
    .column{
    background-color: white !important;
    margin-bottom:10px;
}

.column .thumbnail{
    border :none !important;
}
    </style>
</head>
<body>
<?php echo fnFrontMenu(); ?>
    <div class="container">
        <?php echo fnlogoBanner(); ?>
        <div class="row" id="main">
            <div class="container">
                <div class="col-md-9">
                    <div  class="row">
                        <?php echo fnService(); ?>
                    </div>
                </div>
                <div class="col-md-3">            
                    <?php echo fnAdvertisement(); ?>
                    <?php echo fnNews(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <hr>
        <?php fnFrontFooter(); ?>
    </div>
    <?php echo fnFrontScript(); ?>
    <script>
$(document).ready(function(){

    // Select and loop the container element of the elements you want to equalise
    $('#service').each(function(){  
      
      // Cache the highest
      var highestBox = 0;
      
      // Select and loop the elements you want to equalise
      $('.column', this).each(function(){
        
        // If this box is higher than the cached highest then store it
        if($(this).height() > highestBox) {
          highestBox = $(this).height(); 
        }
      
      });  
            
      // Set the height of all those children to whichever was highest 
      $('.column',this).height(highestBox);
                    
    }); 

});
    </script>
</body>
</html>