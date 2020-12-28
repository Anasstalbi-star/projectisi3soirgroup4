

<?php
   include "config.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>FRAY</title>
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
     <link rel="icon" href="img/logo.png" type="image/x-icon" />
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    

</head>

      
        <body class="homepage container-fluid">
           <div class="position-div">
                    
               
               <div id="nav-header" class="header">
                  <a href="" class="logo">FRAY</a>
                  <input class="menu-btn" type="checkbox" id="menu-btn"/>
                  <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
                  <ul class="menu">
                    <li id="#acceuil"><a href="#container-slider"><?php echo $lang['home'] ?></a></li>
                    <li class="service" id="#service"><a href="#services"><?php echo $lang['Services'] ?></a>
                      <div class="drop">
                        <ul class="drop-ul">
                        <li class="drop-li"><a href="#dev"><?php echo $lang['dev-sec'] ?></a></li>
                        <li class="drop-li"><a href="#res"><?php echo $lang['res-sec'] ?></a></li>
                        <li class="drop-li"><a href="#aud">Audio visual</a></li>
                        <li class="drop-li"><a href="#digi">Digital marketing</a></li>
                        </ul>
                        </div>
                        
                      </li>
                    <li id="#choose"><a href="#chooseUs-container"><?php echo $lang['about us'] ?></a></li>
                    <li id="#contact"><a href="#contact-content"><?php echo $lang['contact us'] ?></a></li>
                    <li id="#language"><a href=<?php 
                    if( $_SESSION['lang']== "fr"){ 
                        $_SESSION['lang']= "en"; 
                         }else{
                            $_SESSION['lang']= "fr";
                         }
                     echo "/index.php?lang=".$lang['languages']
                     ?>>
                     <?php echo $lang['languages'] ?></a></li>
                  </ul>
                </div>
            
            
            
            

               

            
            
            
            
            
            <!-- Slider-->  
            <div id="container-slider" class="container-fluid col-12 ajust-padding ajust-margin">
            <div id="main-slider" class="carousel ajust-padding slide col-12" data-ride="carousel" data-interval="3000">
                      <ol class="carousel-indicators">
                        <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                        <li data-target="#main-slider" data-slide-to="1"></li>
                        <li data-target="#main-slider" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item order-img1 active">
                            <div class="container">
                            <div class="row slider-row">
                                <div class="row col-12">
                                    <h1><span><?php echo $lang['slider1-small-h1'] ?> </span></h1></div>
                                <div class="row col-12"><p class="lead"><?php echo $lang['slider1-big-h1'] ?></p></div>
                            
                            </div>
                            </div>
                            
                        </div>
                        <div class="carousel-item order-img2">
                            <div class="container">
                            <div class="row slider-row">
                                <div class="row col-12">
                                    <h1><span>ipsum dolor sit amet. </span></h1></div>
                                <div class="row col-12" ><p class="lead">Quisque euismod a lorem a aliquet. Nulla pharetra molestie egestas. Aenean eu vehicula nibh.</p></div>
                            
                            </div>
                            </div>
                        </div>
                        <div class="carousel-item order-img3">
                              <div class="container">
                                <div class="row slider-row">
                                    <div class="row col-12">
                                        <h1><span><?php echo $lang['slider3-small-h1'] ?></span></h1></div>
                                    <div class="row col-12"><p class="lead"><?php echo $lang['slider3-big-h1'] ?></p></div>

                                </div>
                                </div>
                        </div>
                      </div>
                      
                </div>
            </div>
            
            
            </div>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <!-- Introduction to the company-->
            
            
           
            <div id="intro-row" class="container" data-aos="fade-right">
            <div class="row intro-row">
                <div class="col-sm-12  col-12 col-md-12 col-lg-11 col-xl-11  intro-col-info">
                    <div class="row"><h1><?php echo $lang['intro-row-h1'] ?></h1></div>
                    <div class="row adjust-padding-row"><h2  class="hideme"><span>FRAY  SOLUTION</span></h2></div>
                    <div class="row"><p class="lead hideme"><?php echo $lang['intro-row-p'] ?></p></div>
                   
                    
                    
                </div>
                </div>
            </div>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <!-- Introduction to solution pakage-->
            
       
            <div id="intro-solution-back" class="container-fluid intro-solution-back">
            <div id="intro-solution" class="row intro-row">
                <div id="intro-solution-col" class="col-sm-12 col-md-9 col-lg-6  intro-solution-col"
                     data-aos="fade-right"  data-aos-offset="300"  data-aos-easing="ease-in-sine">
                <div class="row">
                    <span class="intro-solution-span"><?php echo $lang['intro-solution-span'] ?></span>
                    </div>
                <div class="row">
                    <h1 class="intro-solution-h1"><?php echo $lang['intro-solution-h1'] ?></h1>
                    </div>
                <div class="row">
                    <p class="lead intro-solution-p"><?php echo $lang['intro-solution-p'] ?> </p>
                    </div>
                        <div class="row intro-solution-offer-row">
                            <div class="col-12 col-sm-12 col-md-2 col-xl-1 col-lg-1"> 
                                <img src="img/Conference_50px.png" class="intro-solution-offer-img">
                            </div>
                            <div class="col-12 col-sm-12 col-md-9 col-xl-9 col-lg-9">
                            <span class="intro-solution-offer-span"><?php echo $lang['intro-solution-offer-span-1'] ?></span>
                            </div>
                       
                        </div>
                        <div class="row intro-solution-offer-row">
                            <div class="col-12 col-sm-12 col-md-2 col-xl-1 col-lg-1"> 
                                <img src="img/Diamond%20Care_50px.png" class="intro-solution-offer-img"></div>
                            <div class="col-12 col-sm-12 col-md-9 col-xl-9 col-lg-9" >
                            <span class="intro-solution-offer-span"><?php echo $lang['intro-solution-offer-span-2'] ?></span>
                            </div>
                       
                        </div>
                        <div class="row intro-solution-offer-row">
                            <div class="col-12 col-sm-12 col-md-2 col-xl-1 col-lg-1"> 
                                <img src="img/Quick%20Mode%20On_50px.png"  class="intro-solution-offer-img"></div>
                            <div class="col-12 col-sm-12 col-md-9 col-xl-9 col-lg-9">
                            <span class="intro-solution-offer-span"><?php echo $lang['intro-solution-offer-span-3'] ?></span>
                            </div>
                       
                        </div>
                        <div class="row intro-solution-offer-row">
                            <div class="col-12 col-sm-12 col-md-2 col-xl-1 col-lg-1"> 
                                <img src="img/Increase_50px.png" class="intro-solution-offer-img"></div>
                            <div class="col-12 col-sm-12 col-md-9 col-xl-9 col-lg-9">
                            <span class="intro-solution-offer-span"><?php echo $lang['intro-solution-offer-span-4'] ?></span>
                            </div>
                       
                        </div>
                    
                </div>
                </div>
            </div>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <!-- Services-->
            
            <!-- Header Services-->
            
            <div id="services" class="container-fluid ajust-padding header-services">
                <div class="row header-content ajust-margin">
                    <div class="row col-sm-12"><h1 class="header-services-h1 col-sm-12"><?php echo $lang['header-services-h1'] ?></h1></div>   
                </div>
            </div>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
             <!-- Service container-->
            <div id="dev"></div>
            <div id="service-container" class="container-fluid col-sm-10 service-card dev">
            
            
            <!-- service card-->
            
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5" data-aos="fade-right"><img src="img/1280x720-3003453-computer_desk_email_laptop_programming_smartphone_technology_typing_woman_working_writing.jpg" class="service-card-img"></div>
                    <div class="col-sm-12 col-md-12  col-lg-12 col-xl-6 service-card-info  " data-aos="fade-left">
                            <div class="row"><span  class="service-card-span"><?php echo $lang['dev-service-card-span'] ?></span></div>
                            <div class="row"><h1 class="service-card-h1"><?php echo $lang['dev-service-card-h1'] ?></h1></div>
                            <div class="row"><p  class="service-card-p"><?php echo $lang['dev-service-card-p'] ?></p></div>
                            
                    </div>
                </div>
            <!-- service items-->
                <div class="container-fluid">
                        <div  id="items-container" class=" row col-sm-12 items-container justify-content-around ajust-margin">
                            <div class=" row col-sm-12 col-md-5  col-lg-5 item-card ajust-padding ajust-margin" data-aos="flip-up">
                            <span class="fo9"></span>
                                <span class="limen"></span>
                                <span class="tiht"></span>
                                <span class="leser"></span>
                                
                                
                                <div class="row col-12"><img src="img/Monitor_50px.png" class="item-icon"></div>
                                <div class="row col-12"><h2 class="item-h2"><?php echo $lang['dev-item-card-1-h2'] ?></h2></div>
                                <div class="row col-12"><p class="lead item-p"><?php echo $lang['dev-item-card-1-p'] ?></p></div>
                                
                                
                                
                                
                            </div>
                            <div class="row col-sm-12 col-md-5 col-lg-5 item-card ajust-padding ajust-margin" data-aos="flip-up">
                                
                            <span class="fo9"></span>
                                <span class="limen"></span>
                                <span class="tiht"></span>
                                <span class="leser"></span>
                                <div class="row col-12 col-12"><img src="img/Android%20OS_50px.png" class="item-icon "></div>
                                <div class="row col-12"><h2 class="item-h2"><?php echo $lang['dev-item-card-2-h2'] ?></h2></div>
                                <div class="row col-12"><p class="lead item-p"><?php echo $lang['dev-item-card-2-p'] ?></p></div>
                            </div>
                            <div class="row col-12 col-sm-12 col-md-5  col-lg-5  item-card ajust-padding ajust-margin" data-aos="flip-up">
                            <span class="fo9"></span>
                                <span class="limen"></span>
                                <span class="tiht"></span>
                                <span class="leser"></span>
                                <div class="row col-12"><img src="img/Html%205_48px.png" class="item-icon"></div>
                                <div class="row col-12"><h2 class="item-h2"><?php echo $lang['dev-item-card-2-h2'] ?></h2></div>
                                <div class="row col-12"><p class="lead item-p"><?php echo $lang['dev-item-card-2-p'] ?> </p></div>
                            </div>
                            <div class="row col-12 col-sm-12 col-md-5  col-lg-5 item-card  ajust-padding ajust-margin" data-aos="flip-up">
                            <span class="fo9"></span>
                                <span class="limen"></span>
                                <span class="tiht"></span>
                                <span class="leser"></span>
                                <div class="row col-12"><img src="img/Teamwork_50px.png" class="item-icon"></div>
                                <div class="row col-12"><h2 class="item-h2"><?php echo $lang['dev-item-card-3-h2'] ?> </h2></div>
                                <div class="row col-12"><p class="lead item-p"><?php echo $lang['dev-item-card-3-p'] ?></p></div>
                            </div>
                        </div>
                    
                </div>
            </div>
            
            
              <div id="res"></div>
            <div id="service-container" class="container-fluid col-sm-10 service-card">
            
            <!-- service card-->
            
                <div class="row">
                    
                    <div class="col-sm-12 col-md-12  col-lg-12 col-xl-6 service-card-info  justify-content-around" data-aos="fade-right">
                            <div class="row"><span  class="service-card-span"><?php echo $lang['res-service-card-span'] ?></span></div>
                            <div class="row"><h1 class="service-card-h1"><?php echo $lang['res-service-card-h1'] ?></h1></div>
                            <div class="row"><p  class="service-card-p"><?php echo $lang['res-service-card-p'] ?></p></div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5"><img src="img/Onsite-Support.jpg" class="service-card-img" data-aos="fade-left"></div>
                </div>
            <!-- service items-->
                <div class="container-fluid">
                        <div  id="items-container" class=" row col-sm-12 items-container justify-content-around ajust-margin">
                        
                                <div class=" row col-sm-5 col-md-5  col-lg-5 item-card justify-content-around ajust-padding ajust-margin" data-aos="flip-up">
                                <span class="fo9"></span>
                                <span class="limen"></span>
                                <span class="tiht"></span>
                                <span class="leser"></span>
                                <div class="row col-12"><img src="img/Server%20Shutdown_48px.png" class="item-icon"></div>
                                <div class="row col-12"><h2 class="item-h2"><?php echo $lang['res-item-card-1-h2'] ?></h2></div>
                                <div class="row col-12"><p class="lead item-p"><?php echo $lang['res-item-card-1-p'] ?></p></div>
                            </div>
                            <div class="row col-sm-12 col-md-5 col-lg-5 item-card ajust-padding ajust-margin" data-aos="flip-up">
                            <span class="fo9"></span>
                                <span class="limen"></span>
                                <span class="tiht"></span>
                                <span class="leser"></span>
                                <div class="row col-12"><img  src="img/Multichannel_64px.png" class="item-icon "></div>
                                <div class="row col-12"><h2 class="item-h2"><?php echo $lang['res-item-card-2-h2'] ?></h2></div>
                                <div class="row col-12"><p class="lead item-p"><?php echo $lang['res-item-card-2-p'] ?></p></div>
                            </div>
                            <div class="row col-sm-12 col-md-5  col-lg-5  item-card ajust-padding ajust-margin" data-aos="flip-up">
                            <span class="fo9"></span>
                                <span class="limen"></span>
                                <span class="tiht"></span>
                                <span class="leser"></span>
                                <div class="row col-12"><img src="img/Maintenance_48px.png" class="item-icon"></div>
                                <div class="row col-12"><h2 class="item-h2"><?php echo $lang['res-item-card-3-h2'] ?></h2></div>
                                <div class="row col-12"><p class="lead item-p"><?php echo $lang['res-item-card-3-p'] ?> </p></div>
                            </div>
                            <div class="row col-sm-12 col-md-5  col-lg-5 item-card ajust-padding ajust-margin" data-aos="flip-up">
                            <span class="fo9"></span>
                                <span class="limen"></span>
                                <span class="tiht"></span>
                                <span class="leser"></span>
                                <div class="row col-12"><img src="img/Wall%20Mount%20Camera_50px.png" class="item-icon"></div>
                                <div class="row col-12"><h2 class="item-h2"><?php echo $lang['res-item-card-4-h2'] ?></h2></div>
                                <div class="row col-12"><p class="lead item-p"><?php echo $lang['res-item-card-4-p'] ?></p></div>
                            </div>
                        </div>
                    
                </div>
            </div>    
            
            
            
            
              <div id="aud"></div>
            <div id="service-container" class="container-fluid col-sm-10 service-card">
            
            <!-- service card-->
            
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5"><img src="img/DSC100491200.jpg" class="service-card-img" data-aos="fade-right"></div>
                    <div class="col-sm-12 col-md-12  col-lg-12 col-xl-6 service-card-info" data-aos="fade-left">
                            <div class="row"><span  class="service-card-span"><?php echo $lang['aud-service-card-span'] ?></span></div>
                            <div class="row"><h1 class="service-card-h1"><?php echo $lang['aud-service-card-h1'] ?></h1></div>
                            <div class="row"><p  class="service-card-p"><?php echo $lang['aud-service-card-p'] ?></p></div>
                    </div>
                </div>
            <!-- service items-->
                <div class="container-fluid">
                        <div id="items-container" class=" row col-sm-12 items-container justify-content-around ajust-margin">
                                
                                <div class=" row col-sm-12 col-md-5  col-lg-5 item-card justify-content-around ajust-padding ajust-margin" data-aos="flip-up">
                                <span class="fo9"></span>
                                <span class="limen"></span>
                                <span class="tiht"></span>
                                <span class="leser"></span>
                                <div class="row col-12"><img src="img/Audio%20Wave2_50px.png" class="item-icon"></div>
                                <div class="row col-12"><h2 class="item-h2">Curabitur suscipit lectus</h2></div>
                                <div class="row col-12"><p class="lead item-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dictum viverra nisi quis lacinia.</p></div>
                            </div>
                            <div class="row col-sm-12 col-md-5 col-lg-5 item-card ajust-padding ajust-margin" data-aos="flip-up">
                            <span class="fo9"></span>
                                <span class="limen"></span>
                                <span class="tiht"></span>
                                <span class="leser"></span>
                                <div class="row col-12"><img src="img/DJ_50px.png" class="item-icon "></div>
                                <div class="row col-12"><h2 class="item-h2">Curabitur suscipit lectus</h2></div>
                                <div class="row col-12"><p class="lead item-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dictum viverra nisi quis lacinia.</p></div>
                            </div>
                            <div class="row col-sm-12 col-md-5  col-lg-5  item-card justify-content-around ajust-padding ajust-margin" data-aos="flip-up">
                            <span class="fo9"></span>
                                <span class="limen"></span>
                                <span class="tiht"></span>
                                <span class="leser"></span>
                                <div class="row col-12"><img src="img/Micro_48px.png" class="item-icon"></div>
                                <div class="row col-12"><h2 class="item-h2">Curabitur suscipit lectus</h2></div>
                                <div class="row col-12"><p class="lead item-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dictum viverra nisi quis lacinia.</p></div>
                            </div>
                            <div class="row col-sm-12 col-md-5  col-lg-5 item-card ajust-padding ajust-margin" data-aos="flip-up">
                            <span class="fo9"></span>
                                <span class="limen"></span>
                                <span class="tiht"></span>
                                <span class="leser"></span>
                                <div class="row col-12"><img src="img/Play%20Record_64px.png" class="item-icon"></div>
                                <div class="row col-12"><h2 class="item-h2">Curabitur suscipit lectus</h2></div>
                                <div class="row col-12"><p class="lead item-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dictum viverra nisi quis lacinia.</p></div>
                            </div>
                        </div>
                    
                </div>
            </div>
            
            
            
            
            
            
              <div id="digi"></div>
            
            <div id="service-container" class="container-fluid col-sm-10 service-card">
            
            <!-- service card-->
            
                <div class="row">
                    
                    <div class="col-sm-12 col-md-12  col-lg-12 col-xl-6 service-card-info  justify-content-around" data-aos="fade-right">
                            <div class="row"><span  class="service-card-span">Donec dapibus, odio nec interdum</span></div>
                            <div class="row"><h1 class="service-card-h1">Digital marketing</h1></div>
                            <div class="row"><p  class="service-card-p">Integer ac dapibus ligula. Sed id ipsum tincidunt, dapibus risus eget, aliquam ex. Curabitur sed velit accumsan, dignissim dolor id, posuere lorem. Aliquam sed quam semper mi pellentesque</p></div>
                            <div class="row"><p  class="service-card-p">Integer ac dapibus ligula. Sed id ipsum tincidunt, dapibus risus eget, aliquam ex. Curabitur sed velit accumsan, dignissim dolor id, posuere lorem. Aliquam sed quam semper mi pellentesque</p></div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5"><img src="img/cropped-atlanta-digital-marketing-social-media-agency-go-getter-marketing-group-2.jpg" class="service-card-img" data-aos="fade-left"></div>
                </div>
            <!-- service items-->
                <div class="container-fluid ">
                        <div id="items-container" class=" row col-sm-12 items-container justify-content-around ajust-margin">
                         <div class=" row col-sm-12 col-md-5  col-lg-5 item-card justify-content-around ajust-padding ajust-margin" data-aos="flip-up">
                         <span class="fo9"></span>
                                <span class="limen"></span>
                                <span class="tiht"></span>
                                <span class="leser"></span>
                                <div class="row col-12"><img class="item-icon"></div>
                                <div class="row col-12"><h2 class="item-h2">Curabitur suscipit lectus</h2></div>
                                <div class="row col-12"><p class="lead item-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dictum viverra nisi quis lacinia.</p></div>
                            </div>
                            <div class="row col-sm-12 col-md-5 col-lg-5 item-card ajust-padding ajust-margin" data-aos="flip-up">
                            <span class="fo9"></span>
                                <span class="limen"></span>
                                <span class="tiht"></span>
                                <span class="leser"></span>
                                <div class="row col-12"><img class="item-icon "></div>
                                <div class="row col-12"><h2 class="item-h2">Curabitur suscipit lectus</h2></div>
                                <div class="row col-12"><p class="lead item-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dictum viverra nisi quis lacinia.</p></div>
                            </div>
                            <div class="row col-sm-12 col-md-5  col-lg-5  item-card ajust-padding ajust-margin" data-aos="flip-up">
                            <span class="fo9"></span>
                                <span class="limen"></span>
                                <span class="tiht"></span>
                                <span class="leser"></span>
                                <div class="row col-12"><img class="item-icon"></div>
                                <div class="row col-12"><h2 class="item-h2">Curabitur suscipit lectus</h2></div>
                                <div class="row col-12"><p class="lead item-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dictum viverra nisi quis lacinia.</p></div>
                            </div>
                            <div class="row col-sm-12 col-md-5  col-lg-5 item-card ajust-padding ajust-margin" data-aos="flip-up">
                            <span class="fo9"></span>
                                <span class="limen"></span>
                                <span class="tiht"></span>
                                <span class="leser"></span>
                                <div class="row col-12"><img class="item-icon"></div>
                                <div class="row col-12"><h2 class="item-h2">Curabitur suscipit lectus</h2></div>
                                <div class="row col-12"><p class="lead item-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dictum viverra nisi quis lacinia.</p></div>
                            </div>
                        </div>
                    
                </div>
            </div> 
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <!-- WHY choose Us-->
            
           <div id="chooseUs-container" class="container chooseUs-container" data-aos="fade-left">
            <div class="row chooseUs-row  col-xl-12">
                <div class="col-md-12 col-sm-12 col-xl-6 chooseUs-content">
                    <div class="row"><h1 class="chooseUs-h1">Pourquoi choisir FRAY ?</h1></div>
                    <div class="row"><p class="lead chooseUs-p">FRAY cible les professionnels en recherche de visibilité numérique. pour apporter des réponses efficaces aux enjeux des entreprises en mettant en place des programmes privilégiés pour nos partenaires qui donnent lieu à la mise en place de contrats exclusifs.</p></div>
                </div>
                    <div class="col-md-12 col-sm-12 col-xl-5"><img src="img/49572474_l.jpg" class="chooseUs-img"></div>
                </div>
            </div>
            
            <!-- About Us-->
       
         
             <div id="about-container" class="container-fluid about-container  ajust-padding">
                
                        <div class="container about-content col-sm-12 col-md-12  ">
                            <div class="row col about-row-titel"><h1 class="about-titel col">A Propos</h1></div>
                            <div id="about-row" class="row about-row  justify-content-around">
                                <div class="col-sm-12 col-md-8 col-lg-4 col-xl-5 about-col-img">
                                <img src="img/logo.png">
                                </div>
                                <div class="col-sm-11 col-md-11 col-lg-7  col-xl-5 about-col-info">
                                    <div class="row"><h1> L’expertise technique de référence qui accompagne les technologies de pointe potentiel et prometteuse.</h1></div>
                                    <div class="row adjust-padding-row"><h2><span>Chez FRAY </span></h2></div>
                                    <div class="row"><p class="lead">on est expert des nouvelles technologies IT, Réseaux, Télécoms.
                                    Société de conseil et d’ingénierie spécialisée dans l’intégrations de solution informatique et technique, on accompagne nos clients sur des projets complexes et ambitieux dans différents secteurs.</p></div>
                                    <div class="row"><p class="lead"> Entreprise de Services du Numérique, "Engineering and Consulting Alliance" prend en charge les études, les projets, les accompagnements méthodologiques et technologiques requis pour orienter, architecturer, construire, déployer, sécuriser, superviser, optimiser et faire évoluer l’environnement numérique et physique de votre etablisment. </p></div>
                                </div>
                                </div>
                            <!--OUR partners-->
                            <div  class="container">
                            <div id="partner-container" class="row ourpartner-row">
                                    <div class="col-12"><span>ils nous font confiance</span></div>
                                    <div class="col-12"><h1>Nos Partenaires </h1></div>
                                    <div class="col-12 partner-content">
                                        <div class="row">
                                          <div class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3"><img class="partner-icon"></div>
                                            <div class="col-6 col-sm-3  col-md-3 col-lg-3 col-xl-3"><img class="partner-icon"></div>
                                            <div class="col-6 col-sm-3  col-md-3 col-lg-3 col-xl-3"><img class="partner-icon"></div>
                                            <div class="col-6 col-sm-3  col-md-3 col-lg-3 col-xl-3"><img class="partner-icon"></div>
                                        </div>
                                    
                                    </div>
                                     <div class="col-12 partner-content">
                                            <div class="row">
                                                <div class="col-6 col-sm-3  col-md-3 col-lg-3 col-xl-3"><img class="partner-icon"></div>
                                                <div class="col-6 col-sm-3  col-md-3 col-lg-3 col-xl-3"><img class="partner-icon"></div>
                                                <div class="col-6 col-sm-3  col-md-3 col-lg-3 col-xl-3"><img class="partner-icon"></div>
                                                <div class="col-6 col-sm-3  col-md-3 col-lg-3 col-xl-3"><img class="partner-icon"></div>
                                            </div>

                                        </div>
                                   
                                </div>
                            </div>
                            
                          
                        </div>
                        
                    </div>
            
            
            <!--Contact us-->
             
              <div class="container ">
           <div id="contact-content" class="row intro-row  justify-content-around">
                <div class="col-sm-12 col-md-8 col-lg-4 intro-col-img ">
                <img src="img/Googlemap.jpg">
                </div>
                <div class="col-sm-12 col-md-11 col-lg-7    intro-col-info ajust-margin">
                    <div class="row"><h1>FRAY est présente sur les réseau sociaux</h1></div>
                    <div class="row adjust-padding-row"><h2 class="contact-h1"><span>Contacter nous</span></h2></div>
                    <div class="row col-12  justify-content-around">
                        <div class="col-12 num  justify-content-around">
                            <div class=" col-12 col-sm-12 col-md-12 col-lg-12"><img src="img/Phone_52px.png"  class="img-num"></div><div class="col-12">
                            <h1 class="span-num">06 00 00 00 00</h1>
                            <h1 class="span-num">06 00 00 00 00</h1>
                            </div>
                        </div>
                        <div class=" col-12 col-sm-12 col-md-12 col-lg-12  location  justify-content-around">
                            <div class="col-4 "><img src="img/Place%20Marker_52px.png" class="img-location"></div><div class="col-12"><h1 class="span-location">Cecilia Chapman 711-2880 Nulla St. Mankato Mississippi </h1></div>
                        </div>
                    </div>
        
                
                     <div class="row col-12 ajust-padding ajust-margin contact-content">
                           <div class="col-3 col-sm-4 conatct-items" data-aos="fade-right" data-aos-offset="100" >
                        <div class="row contact-img-items">
                             <a href="" target="_blank" class="contact-img face"></a>
                            </div>
                        </div>
                          <div class="col-3 col-sm-4 conatct-items" data-aos="fade-right" data-aos-offset="100" >
                        <div class="row contact-img-items">
                             <a href="" target="_blank" class="contact-img linkedin"></a>
                            </div>
                        </div>
                        <div class="col-4 col-sm-4 conatct-items" data-aos="fade-right" data-aos-offset="100" >
                        <div class="row contact-img-items">
                             <a href="" target="_blank" class="contact-img messenger"></a>
                            </div>
                        </div>
                    </div>
                
                </div>
                </div>
            </div>
          

           
            
            <footer class="container-fluid">
            <h1>  FRAY CopyRights group4 isi3 soir  </h1>
            </footer>
        </body>

        <script src="js/jquery.js"></script>
        <script src="js/main.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script type="text/javascript">
                        AOS.init({ duration : 850, })
            
            
            function myFunction() {
              var x = document.getElementById("myTopnav");
              if (x.className === "topnav") {
                x.className += " responsive";
              } else {
                x.className = "topnav";
              }
            }
        </script>
</html>
