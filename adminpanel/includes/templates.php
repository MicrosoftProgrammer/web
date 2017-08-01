<?php
function fnSideBar(){
    $html ='
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                        <img src="../../../images/'.$_SESSION["Logo"].'" alt="Logo" class="logo" />

                            <!-- /input-group -->
                        </li>';
    $html =$html.'<li>
                            <a href="../dashboard/index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="../pages/view_pages.php"><i class="fa fa-globe fa-fw"></i> Pages</a>
                        </li>
                         <li>
                            <a href="../service/view_service.php"><i class="fa fa-wrench fa-fw"></i> Services</a>
                        </li>
                         <li>
                            <a href="../news/view_news.php"><i class="fa fa-newspaper-o fa-fw"></i> News</a>
                        </li>                        
                         <li>
                            <a href="../advertisement/view_advertisement.php"><i class="fa fa-sitemap fa-fw"></i> Advertisements</a>
                        </li>
                         <li>
                            <a href="../banners/view_banners.php"><i class="fa fa-image fa-fw"></i> Banner</a>
                        </li>
                         <li>
                            <a href="../career/view_career.php"><i class="fa fa-graduation-cap fa-fw"></i> Careers</a>                     
                        </li>
                         <li>
                            <a href="../enquiry/view_enquiry.php"><i class="fa fa-question fa-fw"></i> Enquiries</a>                     
                        </li>                        
                         <li>
                            <a href="../user/userlog.php"><i class="fa fa-user fa-fw"></i> User log</a>
                        </li>
    ';

    $html = $html.'</div>
                <!-- /.sidebar-collapse -->
            </div>';

    return $html;
}

function fnTopLinks(){
    $html ='<ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">                
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    Welcome , '.$_SESSION["Name"].'
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                    <li><a href="../user/profile.php"><i class="fa fa-tag fa-fw"></i> My Profile</a>
                        </li>
                        ';
                if($_SESSION["UserType"]=="1"){
                  $html =$html.'<li><a href="../dashboard/settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                  ';
                }
          $html =$html.' <li class="divider"></li>
                        <li><a href="../../login.php?mode=logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>';
        return $html;
}

function fnMobileMenu(){
    $html ='<div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <a class="navbar-brand" href="#">                
                '.$_SESSION["CompanyName"].'</a>
            </div>';

    return $html;
}

function fnGetLogs($LogID){
    $sql = "select * from userlog where LogID=".$LogID;
    $res=mysql_query($sql);
    $html ='<div class="panel panel-success">
                <div class="panel-heading">
                    <i class="fa fa-bell fa-fw"></i> User Logs
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="list-group">
                    <ul>';
    while($obj = mysql_fetch_object($res)){
         $html =$html.$obj->UserAction;
    }
                    
   $html =$html.'</ul>                           
                    </div>
                    <!-- /.list-group -->
                </div>
                <!-- /.panel-body -->
        </div>';



    return $html;
}

function fnFrontMenu(){
    $html='    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">'.$_SESSION["CompanyName"].'</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    '.fnHeaderMenu().'                                                         
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>';

    return $html;
}

function fnlogoBanner(){
    $html ='<div class="row">
            <div class="col-md-3">
                <a href="/" title="'.$_SESSION["CompanyName"].'">';


                               $ext = pathinfo("images/".$_SESSION["Logo"], PATHINFO_EXTENSION);
                                    if($ext=="swf"){
                                    $html =$html.'<embed src="images/'.$_SESSION["Logo"].'" 
                    alt="'.$_SESSION["CompanyName"].'" />';
                                    }
                                    else{
                                    $html =$html.'<img src="images/'.$_SESSION["Logo"].'" 
                    alt="'.$_SESSION["CompanyName"].'" />';
                                    }
    $html =$html.'                                 
                </a>
            </div>
            <div class="col-md-9">
                <div class="row carousel-holder">
                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">';
                                $sql = "select * from banners where deleted=0";
                                $res=mysql_query($sql);
                                $cnt=0;
                                while($obj = mysql_fetch_object($res)){
                                    $active ="";
                                    if($cnt==0){
                                        $active="active";
                                        $cnt++;
                                    }

                                    $ext = pathinfo("images/banners/".$obj->BannerImage, PATHINFO_EXTENSION);
                                    if($ext=="swf"){
                                    $html =$html.'<div class="item '.$active.'">
                                        <embed width="800" height="300" class="slide-image" src="images/banners/'.$obj->BannerImage.'" alt="">
                                    </div>';
                                    }
                                    else{
                                    $html =$html.'<div class="item '.$active.'">
                                        <img class="slide-image" src="images/banners/'.$obj->BannerImage.'" alt="">
                                    </div>';
                                    }
                                }
                    $html =$html.'
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>                    
                </div>        
            </div>
        </div>';
    
    return $html;
}

function fnNews(){
    $sql = "select * from news where deleted=0";
    $res=mysql_query($sql);
    $html ='<div id="recent-news">Recent News</div><div class="microsoft newscontainer">
            
                <div class="marquee">';
    while($obj = mysql_fetch_object($res)){
         $html =$html."<a class='pull-right' href='pages.php?mode=news&Id=".$obj->NewsID."'><div class='news'><h3>".$obj->NewsText."</h3>";
         $html =$html."<p>".$obj->NewsShortDescription."</p>";
         $html =$html."Read More</div></a>";
    }
                    
   $html =$html.'</div>
        </div>';
    return $html;
}

function fnAdvertisement(){
    $sql = "select * from advertisement where deleted=0";
    $res=mysql_query($sql);
    $html ='<div class="row"><div class="col-md-12">';
    while($obj = mysql_fetch_object($res)){
        $AdvertisementImage = explode(",",$obj->AdvertisementImage);
        $html =$html.'    
                            <div class="thumbnail">
                            <a href="pages.php?mode=advertisement&Id='.$obj->AdvertisementID.'">';
                                    $ext = pathinfo("images/advertisement/".$AdvertisementImage[0], PATHINFO_EXTENSION);
                                    if($ext=="swf"){
                                    $html =$html.'<emebed width="320" height="150" src="images/advertisement/'.$AdvertisementImage[0].'" alt="'.$obj->AdvertisementText.'" />  ';
                                    }
                                    else{
                                    $html =$html.'<img width="320" height="150" src="images/advertisement/'.$AdvertisementImage[0].'" alt="'.$obj->AdvertisementText.'" />  ';
                                    }

                $html =$html.'   


                                    <h4 class="ad-title">'.$obj->AdvertisementText.'
                                    </h4>  
                                    </a>                             
                            </div>
                       ';
    }
                    
   $html =$html.'</div></div>';
    return $html;
}

function fnService(){
    $sql = "select * from service where deleted=0";
    $res=mysql_query($sql);
    $html ='<div class="col-md-12" id="service">';
    while($obj = mysql_fetch_object($res)){
        $ServiceImage = explode(",",$obj->ServiceImage);
        $html =$html.'    <div class="col-sm-6 col-lg-6 col-md-6">
        <div class="column">
                            <div id="recent-news"><a href="pages.php?mode=service&Id='.$obj->ServiceID.'">'.$obj->ServiceText.'</a></div>
                            <div class="thumbnail">
                                <img src="images/service/'.$ServiceImage[0].'" alt="'.$obj->ServiceText.'" />
                                <div class="caption">
                                    <h4><a href="#">'.$obj->ServiceText.'</a>
                                    </h4>
                                    <p>'.$obj->ServiceShortDescription.'</p>
                                </div>
                            </div>
                            </div>
                        </div>';
    }
                    
   $html =$html.'</div>';
    return $html;
}

function fnPage($PageSlug){
    $sql = "select * from pages where Deleted=0 and PageSlug='".$PageSlug."'";
    $res=mysql_query($sql);
    $obj = mysql_fetch_object($res);
    return $obj;
}

function fnFooterMenu(){
    $sql = "select * from pages where deleted=0 and ShowInFooterMenu=1";
    $res=mysql_query($sql);
    $html ='<ul>';
    while($obj = mysql_fetch_object($res)){
        $html =$html.'<li><a href="page.php?PageSlug='.$obj->PageSlug.'">'.$obj->PageTitle.'</a></li>';
    }
                    
   $html =$html.'</ul>';
    return $html;
}

function fnHeaderMenu(){
    $sql = "select * from pages where deleted=0 and ShowInHeaderMenu=1";
    $res=mysql_query($sql);
    $html="";
    while($obj = mysql_fetch_object($res)){
        if($_REQUEST["PageSlug"]==$obj->PageSlug || ($_REQUEST["PageSlug"]=="" && $obj->PageSlug=="home")){
            $html =$html.'<li><a class="active" href="page.php?PageSlug='.$obj->PageSlug.'">'.$obj->PageTitle.'</a></li>';
        }
        else{
            $html =$html.'<li><a href="page.php?PageSlug='.$obj->PageSlug.'">'.$obj->PageTitle.'</a></li>';
        }
    }

    $html =$html.'<li>  <div id="login" class="dropdown">
    <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">Login
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a target="_blank" href="'.$_SESSION["AdminUrl"].'">Global Pack</a></li>
      <li><a target="_blank" href="'.$_SESSION["WMSUrl"].'">WMS</a></li>
    </ul>
  </div></li>';
                    
    return $html;
}

function fnServicesMenu(){
    $sql = "select * from service where deleted=0";
    $res=mysql_query($sql);
    $html ='<ul>';
    while($obj = mysql_fetch_object($res)){
        $html =$html.'<li><a href="pages.php?mode=service&Id='.$obj->ServiceID.'">'.$obj->ServiceText.'</a></li>';
    }
                    
   $html =$html.'</ul>';
    return $html;
}

function fnCareer($resumeerror=""){
   $html ='';
   if($resumeerror!=""){
     $html =$html.'<div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-remove">&nbsp;</i></button>
                <strong>Error!</strong> '.$resumeerror.'.
            </div>';
   }
   else if($_REQUEST["mode"]=="success"){
       $html = $html.'<div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <strong>Success!</strong> Resume Uploaded Successfully.
            </div>';
   }

    $html =$html.'<div class="panel panel-primary">
                <div class="panel-heading">
                    <i class="fa fa-send">&nbsp;</i> Send us your details
                </div>
                <div class="panel-body">
                    <form role="form" action="page.php?mode=resume&PageSlug=career" enctype="multipart/form-data" method="post">
                        <div class="form-group col-lg-6">
                            <label>Name</label>
                            <input class="form-control" name="Name" value="'.$_REQUEST["Name"].'" type="text" required />                                            
                        </div>
                        <div class="form-group col-lg-6">
                            <label>Email</label>
                            <input class="form-control" name="Email" value="'.$_REQUEST["Email"].'" type="email" required />                                            
                        </div>
                        <div class="form-group col-md-6">
                            <label>Contact No</label>
                             <input class="form-control" name="ContactNo" value="'.$_REQUEST["ContactNo"].'" type="number" required />  
                        </div>                                           
                        <div class="form-group col-md-6">
                            <label>Resume (PDF/DOC/DOCX & max file size is 200 kb)</label>
                            <input class="form-control" name="Resume" value="'.$_REQUEST["Resume"].'" type="file" required />  
                        </div>                                        
                        <div class="form-group col-lg-12">
                            <button type="submit" class="btn btn-success"><i class="fa fa-save">&nbsp;</i>Send</button>
                        </div>
                    </form>
                </div>
            </div>';

    return $html;
}

function fnContact(){
    $html ='';
    if($_REQUEST["mode"]=="success"){
       $html = $html.'<div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <strong>Success!</strong> Enquiry Sent Successfully.
            </div>';
    }

    $html =$html.'<div class="col-md-6"><div class="panel panel-primary">
                <div class="panel-heading">
                    <i class="fa fa-send">&nbsp;</i> Contact Us
                </div>
                <div class="panel-body">
                    <form role="form" action="page.php?mode=enquiry&PageSlug=contact-us" enctype="multipart/form-data" method="post">
                        <div class="form-group col-lg-12">
                            <label>Name</label>
                            <input class="form-control" name="Name" value="'.$_REQUEST["Name"].'" type="text" required />                                            
                        </div>
                        <div class="form-group col-lg-12">
                            <label>Email</label>
                            <input class="form-control" name="Email" value="'.$_REQUEST["Email"].'" type="email" required />                                            
                        </div>
                        <div class="form-group col-md-12">
                            <label>Contact No</label>
                             <input class="form-control" name="ContactNo" value="'.$_REQUEST["ContactNo"].'" type="number" required />  
                        </div>                                           
                        <div class="form-group col-md-12">
                            <label>Description</label>
                            <textarea class="form-control" name="Description" rows="6">'.$_REQUEST["Description"].'</textarea>
                        </div>                                      
                        <div class="form-group col-lg-12">
                            <button type="submit" class="btn btn-success"><i class="fa fa-save">&nbsp;</i>Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>';
 $html =$html.'<div class="col-md-6" align="center">
            '.$_SESSION["Location"].'</div>';


    return $html;
}

function fnFrontFooter(){
    ?>
            <footer>
            <div class="row">
                <div class="col-lg-2">
                    <h4>About Us</h4>
                    <div><?php echo fnFooterMenu(); ?></div>
                </div>
                <div class="col-lg-5">
                    <h4>Services</h4>
                    <div><?php echo fnServicesMenu(); ?></div>
                </div>                
                <div class="col-lg-3">                    
                    <?php $page= fnPage('news'); ?>
                    <h4><?php echo $page->PageTitle; ?></h4>
                    <div><?php echo $page->PageShortDescription; ?></div>
                </div>
                <div class="col-lg-2">
                    <?php $page= fnPage('privacy-policy'); ?>
                    <h4><?php echo $page->PageTitle; ?></h4>
                    <div><?php echo $page->PageShortDescription; ?></div>
                </div>

                <div class="col-lg-12">
                    <br>
                    <p class="text-center">Copyright &copy; 2017 <?php echo $_SESSION["CompanyName"]; ?> | Designed by Our Own Solutions</p>
                </div>
            </div>
        </footer>
    <?php
}


?>