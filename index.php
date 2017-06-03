<!DOCTYPE html>
<html lang="en">
<!--[if IE 9]>
<html class="ie9" lang="en">    <![endif]-->
<!--[if IE 8]>
<html class="ie8" lang="en">    <![endif]-->
<head>

   <title>Saransh | About me</title>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name=viewport content="width=device-width, initial-scale=1">
   <meta name="description" content="Saransh Seth personal CV/Resume">
   <meta name="keywords" content="html5, one page, one-page, template, website, responsive, bootstrap, saransh, cv, resume ">
   <link rel=icon href=favicon.ico sizes="16x16" type="image/png">
   <style>
      #preloader {
         position: fixed;
         /*position: absolute;*/
         left: 0;
         top: 0;
         z-index: 99999;
         width: 100%;
         height: 100%;
         overflow: visible;
         background-color: #252b33;
         /*background: #202020 url("../images/preloader.gif") no-repeat center center;*/
      }
      .sk-folding-cube {
         width: 40px;
         height: 40px;
         position: absolute;
         top: 0;
         left: 0;
         bottom: 60px;
         right: 0;
         margin: auto;
         -webkit-transform: rotateZ(45deg);
         transform: rotateZ(45deg);
      }
      .sk-folding-cube .sk-cube {
         float: left;
         width: 50%;
         height: 50%;
         position: relative;
         -webkit-transform: scale(1.1);
         -ms-transform: scale(1.1);
         transform: scale(1.1);
      }
      .sk-folding-cube .sk-cube:before {
         content: '';
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         background-color: #fff;
         -webkit-animation: sk-foldCubeAngle 2.4s infinite linear both;
         animation: sk-foldCubeAngle 2.4s infinite linear both;
         -webkit-transform-origin: 100% 100%;
         -ms-transform-origin: 100% 100%;
         transform-origin: 100% 100%;
      }
      .sk-folding-cube .sk-cube2 {
         -webkit-transform: scale(1.1) rotateZ(90deg);
         transform: scale(1.1) rotateZ(90deg);
      }
      .sk-folding-cube .sk-cube3 {
         -webkit-transform: scale(1.1) rotateZ(180deg);
         transform: scale(1.1) rotateZ(180deg);
      }
      .sk-folding-cube .sk-cube4 {
         -webkit-transform: scale(1.1) rotateZ(270deg);
         transform: scale(1.1) rotateZ(270deg);
      }
      .sk-folding-cube .sk-cube2:before {
         -webkit-animation-delay: 0.3s;
         animation-delay: 0.3s;
      }
      .sk-folding-cube .sk-cube3:before {
         -webkit-animation-delay: 0.6s;
         animation-delay: 0.6s;
      }
      .sk-folding-cube .sk-cube4:before {
         -webkit-animation-delay: 0.9s;
         animation-delay: 0.9s;
      }
      @-webkit-keyframes sk-foldCubeAngle {
         0%, 10% {
            -webkit-transform: perspective(140px) rotateX(-180deg);
            transform: perspective(140px) rotateX(-180deg);
            opacity: 0;
         } 25%, 75% {
              -webkit-transform: perspective(140px) rotateX(0deg);
              transform: perspective(140px) rotateX(0deg);
              opacity: 1;
           } 90%, 100% {
                -webkit-transform: perspective(140px) rotateY(180deg);
                transform: perspective(140px) rotateY(180deg);
                opacity: 0;
             }
      }
      @keyframes sk-foldCubeAngle {
         0%, 10% {
            -webkit-transform: perspective(140px) rotateX(-180deg);
            transform: perspective(140px) rotateX(-180deg);
            opacity: 0;
         } 25%, 75% {
              -webkit-transform: perspective(140px) rotateX(0deg);
              transform: perspective(140px) rotateX(0deg);
              opacity: 1;
           } 90%, 100% {
                -webkit-transform: perspective(140px) rotateY(180deg);
                transform: perspective(140px) rotateY(180deg);
                opacity: 0;
             }
      }
   </style>

</head>
<body class="">

<!--Pre-Loader-->
<div id="preloader">
   <div class="sk-folding-cube">
      <div class="sk-cube1 sk-cube"></div>
      <div class="sk-cube2 sk-cube"></div>
      <div class="sk-cube4 sk-cube"></div>
      <div class="sk-cube3 sk-cube"></div>
   </div>
</div>

<!-- Off-canvas menu -->
<div class="menu-wrap mobmenu-john">
   <div class="dividewhite4"></div>
   <nav class="menu">
      <ul class="icon-list">
         <li>
            <div class="m-usermenu">
               <div>
                  <div class="article-author-name">
                     <h4 class="font-accident-one-bold"><a href="#!">Saransh Seth</a></h4>
                     <p class="nopadding">
                        <span class="extrasmall fontcolor-invert">Web Developer</span>
                     </p>
                  </div>
               </div>
            </div>
            <div class="dividewhite2"></div>
         </li>
         <li class="menu-item"><a href="#header-wrapper-mp"><i class="fa fa-fw fa-star-o"></i><span>Home</span></a></li>
         <li class="menu-item"><a href="#details"><i class="fa fa-fw fa-bell-o"></i><span>Details</span></a></li>
         <!-- <li class="menu-item"><a href="#counts"><i class="fa fa-fw fa-bell-o"></i><span>Counts</span></a></li> -->
         <li class="menu-item"><a href="#portfolio"><i class="fa fa-fw fa-comment-o"></i><span>Portfolio</span></a></li>
         <li class="menu-item"><a href="#progress"><i class="fa fa-fw fa-bar-chart-o"></i><span>Skills</span></a></li>
         <li class="menu-item"><a href="#timeline-vertical"><i class="fa fa-fw fa-shopping-cart"></i><span>Timeline</span></a></li>
         <li class="menu-item"><a href="#photocard"><i class="fa fa-fw fa-recycle"></i><span>Featured</span></a></li>
         <li class="menu-item"><a href="#testmonials"><i class="fa fa-fw fa-bell-o"></i><span>Testmonials</span></a></li>
         <li class="menu-item"><a href="#feedback"><i class="fa fa-fw fa-bell-o"></i><span>Feedback</span></a></li>
         <li class="menu-item"><a href="https://wrapbootstrap.com/theme/fletcher-personal-landing-page-html-WB029022K?ref=neuethemes" target="_blank"><i class="fa fa-fw fa-bell-o"></i><span>Buy the Template</span></a></li>
         <li class="socials">
            <ul>
               <li><a href="#!"><i class="flaticon-facebook44"></i></a></li>
               <li><a href="#!"><i class="flaticon-google110"></i></a></li>
               <li><a href="#!"><i class="flaticon-pinterest27"></i></a></li>
               <li><a href="#!"><i class="flaticon-instagram13"></i></a></li>
               <li><a href="#!"><i class="flaticon-linkedin21"></i></a></li>
            </ul>
         </li>
      </ul>


   </nav>
   <div class="close-button nav-icon2" id="close-button">
      <div></div>
   </div>
</div>
<!-- / Off-canvas menu -->

<div class="content-wrap">

   <!-- main-top -->

   <!-- Top Navigation -->
   <header id="header-wrapper-mp" class="head-overlay sticky-menu-light pt-section" data-name="Home">
      <div class="sticky-header header-dark sticky-overlay nobg" role="navigation">
         <div class="container mp-nav">

            <!-- Logo -->
            <div id="site-title"><a href="index.html"><h1 class="font-accident-one-bold">Saransh Seth</h1></a></div>

            <!-- Main menu -->
            <nav id="main-menu" class="nav site-navigation primary-navigation">
               <ul class="sf-menu clearfix" id="example">
                  <li class="m-desktop menu-item active"><a href="#header-wrapper-mp">Home</a></li>
                  <li class="m-desktop menu-item"><a href="#details">Details</a></li>
                  <li class="m-desktop menu-item"><a href="#portfolio">Portfolio</a></li>
                  <li class="m-desktop menu-item"><a href="#timeline-vertical">Timeline</a></li>
                  <li class="mob-button">
                     <div class="menu-button nav-icon" id="open-button">
                        <div></div>
                     </div>
                  </li>
               </ul>
            </nav>

         </div>

      </div>

   </header>
   <!-- /Top Navigation -->



   <div id="content">

      <!-- Revolution Slider -->
      <section id="slider-revolution" class="slider-revolution">
         <div class="rev_slider_wrapper">
            <div id="slider0" class="rev_slider head-overlay" data-version="5.0">
               <ul>
                  <!-- SLIDE  -->
                  <li data-transition="fade" data-slotamount="default" data-masterspeed="default"
                      data-thumb="assets/custom/images/saransh/rs-images/images/transparent.png"
                      data-title="Slide">
                     <!-- MAIN IMAGE -->
                     <img src="assets/custom/images/saransh/rs-images/01.JPG" alt="fullslide1"
                          data-bgposition="center center"
                          data-bgfit="cover"
                          data-bgrepeat="no-repeat">
                     <!-- LAYERS -->

                     <!-- LAYER NR. 1 -->

                     <div class="tp-caption cap-title font-accident-one-bold color01 tp-resizeme rs-parallaxlevel-1"
                          data-x="left"
                          data-y="center"
                          data-basealign="grid"
                          data-voffset="-50"
                          data-hoffset="['0','10','18','21']"
                          data-width=”auto”
                          data-height=”auto”
                          data-whitespace=”[‘nowrap’,’normal’,’normal’,’normal’]”
                          data-transform_idle="o:1;"
                          data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                          data-transform_out="auto:auto;s:700;"
                          data-start="1600"
                          data-splitin=”none”
                          data-splitout=”none”
                          data-responsive_offset=”on”
                          data-fontsize="['72','64','50','40']"
                          data-lineheight="['80','70','60','40']"
                          style="z-index: 2;">Saransh
                     </div>

                     <!-- LAYER NR. 2 -->
                     <div class="tp-caption cap-subtitle font-accident-one-light color01 tp-resizeme rs-parallaxlevel-1"
                          data-x="left"
                          data-y="center"
                          data-basealign="grid"
                          data-voffset="0"
                          data-hoffset="['0','10','18','21']"
                          data-width=”auto”
                          data-height=”auto”
                          data-whitespace=”[‘nowrap’,’normal’,’normal’,’normal’]”
                          data-transform_idle="o:1;"
                          data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                          data-transform_out="auto:auto;s:700;"
                          data-start="2000"
                          data-splitin=”none”
                          data-splitout=”none”
                          data-responsive_offset=”on”
                          data-fontsize="['21','21','21','21']"
                          data-lineheight="['32','28','26','24']"
                          style="z-index: 2;">Web Developer / Web Deisgner
                     </div>

                     <!-- LAYER NR. 3 -->
                     <div class="tp-caption cap-sub-subtitle color01 tp-resizeme rs-parallaxlevel-1"
                          data-x="left"
                          data-y="center"
                          data-basealign="grid"
                          data-voffset="30"
                          data-hoffset="['0','10','18','21']"
                          data-width=”auto”
                          data-height=”auto”
                          data-whitespace=”[‘nowrap’,’normal’,’normal’,’normal’]”
                          data-transform_idle="o:1;"
                          data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                          data-transform_out="auto:auto;s:700;"
                          data-start="2200"
                          data-splitin=”none”
                          data-splitout=”none”
                          data-responsive_offset=”on”
                          data-fontsize="['14','14','14','14']"
                          data-lineheight="['14','14','14','14']"
                          style="z-index: 2;">Front-end Developer
                     </div>

                  </li>

               </ul>
               <div class="tp-bannertimer"></div>
            </div>

         </div>
      </section>
      <!-- /Revolution Slider -->

      <!-- Details Block -->
      <section id="details" class="e-block dark bg-darkblue pt-section" data-name="Details">
         <div class="container dark">

            <div class="container text-center">
               <span class="flaticon-solar-system-2 details-big-icon"></span>
               <div class="dividewhite1"></div>
               <h2 class="font-accident-one-bold fontcolor-invert">Experienced Web Developer</h2>
               <div class="dividewhite2"></div>
               <h5 class="font-regular-bold uppercase hovercolor">Front-end Specialist</h5>
               <div class="dividewhite3"></div>
               <p class="">
                 With a strong technical skill-set and attention to detail, I want to work as a
                 <br>front-end web developer where I could create digital magic and elevate user experience to the next level.
               </p>
            </div>

            <div class="dividewhite8"></div>

            <div class="row">
               <div class="col-md-2 infoblock">
                  <div class="row">
                     <div class="col-lg-3 col-md-4 col-sm-2 text-right"><i class="flaticon-satellite"></i><div class="dividewhite1"></div></div>
                     <div class="col-lg-9 col-md-8 col-sm-10">
                        <h4 class="font-accident-one-bold">Creative</h4>
                        <div class="dividewhite1"></div>
                     </div>
                  </div>
               </div>
               <div class="col-md-2 infoblock">
                  <div class="row">
                     <div class="col-lg-3 col-md-4 col-sm-2 text-right"><i class="flaticon-rocket"></i><div class="dividewhite1"></div></div>
                     <div class="col-lg-9 col-md-8 col-sm-10">
                        <h4 class="font-accident-one-bold">Self-motivated</h4>
                        <div class="dividewhite1"></div>
                        <!-- <p class="fontcolor-medium-light">
                           Fletcher Theme is suitable for photographers, designers, artist, painters, illustrators and other creative persons for showing their skills
                        </p> -->
                     </div>
                  </div>
               </div>
               <div class="col-md-3 infoblock">
                  <div class="row">
                     <div class="col-lg-3 col-md-4 col-sm-2 text-right"><i class="flaticon-smiling-baby"></i><div class="dividewhite1"></div></div>
                     <div class="col-lg-9 col-md-8 col-sm-10">
                        <h4 class="font-accident-one-bold">Good Communication</h4>
                        <div class="dividewhite1"></div>
                        <!-- <p class="fontcolor-medium-light">
                           Fletcher Theme is suitable for photographers, designers, artist, painters, illustrators and other creative persons for showing their skills
                        </p> -->
                     </div>
                  </div>
               </div>
               <div class="col-md-2 infoblock">
                  <div class="row">
                     <div class="col-lg-3 col-md-4 col-sm-2 text-right"><i class="flaticon-saturn"></i><div class="dividewhite1"></div></div>
                     <div class="col-lg-9 col-md-8 col-sm-10">
                        <h4 class="font-accident-one-bold">Punctual</h4>
                        <div class="dividewhite1"></div>
                     </div>
                  </div>
               </div>
               <div class="col-md-2 infoblock">
                  <div class="row">
                     <div class="col-lg-3 col-md-4 col-sm-2 text-right"><i class="flaticon-target-3"></i><div class="dividewhite1"></div></div>
                     <div class="col-lg-9 col-md-8 col-sm-10">
                        <h4 class="font-accident-one-bold">Multitasking</h4>
                        <div class="dividewhite1"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- /Details Block -->

      <!--  Portfolio Block  -->
      <section id="portfolio" class="e-block light pt-section" data-name="Portfolio">
         <div class="">

            <div class="container text-center">
               <h2 class="font-accident-one-bold dark-blue">Portfolio</h2>
               <div class="dividewhite1"></div>
               <h5 class="font-accident-one-bold uppercase hovercolor">Working hard and making the success</h5>
               <div class="dividewhite3"></div>
            </div>

            <div class="dividewhite8"></div>

            <div class="dividewhite4"></div>
            <div class="grid container text-center">

               <div id="posts" class="row popup-container">

                  <div class="grid-item web col-lg-3 col-md-4 col-sm-6">
                     <div class="item-wrap">
                        <figure class="effect-goliath">
                           <div class="popup-call">
                              <a href="assets/custom/images/saransh/portfolio/01.jpg" class="gallery-item"><i class="flaticon-gallery"></i></a>
                           </div>
                           <img src="assets/custom/images/saransh/portfolio/01.jpg" class="img-responsive'" alt="img11"/>
                           <figcaption>
                              <div class="fig-description">
                                 <h3>Weather scraper</h3>
                                 <p>HTML JS AJAX PHP BOOTSTRAP</p>
                                 <a href="https://weather-scraper-weatherapp.herokuapp.com/">Live demo</a>
                              </div>
                           </figcaption>
                        </figure>
                     </div>
                  </div>

                  <div class="grid-item web col-lg-3 col-md-4 col-sm-6">
                     <div class="item-wrap">
                        <figure class="effect-goliath">
                           <div class="popup-call">
                              <a href="assets/custom/images/saransh/portfolio/02.jpg" class="gallery-item"><i class="flaticon-gallery"></i></a>
                           </div>
                           <img src="assets/custom/images/saransh/portfolio/02.jpg" class="img-responsive'" alt="img11"/>
                           <figcaption>
                              <div class="fig-description">
                                 <h3>Silverado</h3>
                                 <p>HTML JS AJAX PHP BOOTSTRAP</p>
                                 <a href="https://silverado-cinema-website.herokuapp.com/">Live demo</a>
                              </div>
                           </figcaption>
                        </figure>
                     </div>
                  </div>
                  <div class="grid-item grid-sizer web seo col-lg-3 col-md-4 col-sm-6">
                     <div class="item-wrap">
                        <figure class="effect-goliath">
                           <div class="popup-call">
                              <a href="assets/custom/images/saransh/portfolio/03.jpg" class="gallery-item"><i class="flaticon-gallery"></i></a>
                           </div>
                           <img src="assets/custom/images/saransh/portfolio/03.jpg" class="img-responsive" alt="img03"/>
                           <figcaption>
                              <div class="fig-description">
                                 <h3>Sweet Memories</h3>
                                 <p>HTML BOOTSTRAP LIGHTBOX</p>
                                 <a href="https://sweet-memories.herokuapp.com/gallery.html">Live demo</a>
                              </div>
                           </figcaption>
                        </figure>
                     </div>
                  </div>

               </div>

            </div>

         </div>
      </section>
      <!-- /Portfolio Block  -->

      <!-- Circle Progress Block -->
      <section id="progress" class="e-block-ins dark pt-section bg-john-00 jarallax" data-name="Success">
         <div class="container">
            <div class="row">
               <div class="progressblock">

                  <div class="col-md-3 text-center">
                     <div class="progressbar" data-animate="false">
                        <div class="circle" data-percent="90"><div></div></div>
                     </div>
                     <h4 class="font-accident-one-normal">Web technologies & frameworks<br><br><hr>MeteorJS - AngularJS - Polymer - Ruby on Rails - PHP</h4>

                     <div class="divider-dynamic"></div>
                  </div>
                  <div class="col-md-3 text-center">
                     <div class="progressbar" data-animate="false">
                        <div class="circle" data-percent="97"><div></div></div>
                     </div>
                     <h4 class="font-accident-one-normal">Web design tools<br><br><hr>Bootstrap - MaterializeCSS - AnimateCSS - TextillateJS - C3js - D3</h4>

                     <div class="divider-dynamic"></div>
                  </div>
                  <div class="col-md-3 text-center">
                     <div class="progressbar" data-animate="false">
                        <div class="circle" data-percent="82.5"><div></div></div>
                     </div>
                     <h4 class="font-accident-one-normal">Database<br><br><hr>SQL - MongoDB - JSON - FireBase</h4>

                     <div class="divider-dynamic"></div>
                  </div>
                  <div class="col-md-3 text-center">
                     <div class="progressbar" data-animate="false">
                        <div class="circle" data-percent="90"><div></div></div>
                     </div>
                     <h4 class="font-accident-one-normal ">Project management tools & version control<br><br><hr>Trello - Github - Slack - Heroku</h4>

                     <div class="divider-dynamic"></div>
                  </div>
               </div>

            </div>
         </div>
      </section>
      <!-- /Circle Progress Block -->

      <!-- Timeline Block -->
      <section id="timeline-vertical" class="e-block dark bg-darkblue pt-section" data-name="Timeline">
         <div class="container">

            <div class="text-center">
               <h2 class="font-accident-one-bold">My Professional Timeline</h2>
               <div class="dividewhite1"></div>
               <h5 class="font-accident-one-bold uppercase hovercolor">Work harder than you think you did yesterday!</h5>
               <div class="dividewhite2"></div>
            </div>

            <div class="dividewhite8"></div>

            <ul class="timeline-vert">
               <li>
                  <div class="timeline-badge primary"><i class="flaticon-star"></i></div>
                  <div class="timeline-panel">
                     <p class="timeline-time">July 2013 - Aug 2014</p>
                     <div class="timeline-photo john-timeline-01"></div>
                     <div class="timeline-heading">
                        <h4 class="font-accident-one-bold">Mobile App Creation</h4>
                        <h6>Android Developer</h6>
                     </div>
                     <div class="timeline-body">
                        <p class="small color02">Kinsh Technologies | India.</p>
                     </div>
                  </div>
               </li>
               <li class="timeline-inverted">
                  <div class="timeline-badge success"><i class="flaticon-star"></i></div>
                  <div class="timeline-panel">
                     <p class="timeline-time">April 2016 - Oct 2016</p>
                     <div class="timeline-photo john-timeline-02"></div>
                     <div class="timeline-heading">
                        <h4 class="font-accident-one-bold">Internship</h4>
                        <h6>Web developer</h6>
                     </div>
                     <div class="timeline-body">
                        <p class="small color02">IBM | Melbourne, Australia.</p>
                     </div>
                  </div>
               </li>
               <li>
                  <div class="timeline-badge danger"><i class="flaticon-star"></i></div>
                  <div class="timeline-panel">
                     <p class="timeline-time">June 2016 - Nov 2016</p>
                     <div class="timeline-photo john-timeline-03"></div>
                     <div class="timeline-heading">
                        <h4 class="font-accident-one-bold">Web development Project</h4>
                        <h6>Web developer/Project Analyst</h6>
                     </div>
                     <div class="timeline-body">
                        <p class="small color02">Core Management | Melbourne, Australia.</p>
                     </div>
                  </div>
               </li>
               <li class="timeline-inverted info">
                  <div class="timeline-badge warning"><i class="flaticon-star"></i></div>
                  <div class="timeline-panel">
                     <p class="timeline-time">April 2017 - Current</p>
                     <div class="timeline-photo john-timeline-04"></div>
                     <div class="timeline-heading">
                        <h4 class="font-accident-one-bold">Internship</h4>
                        <h6>Web developer</h6>
                     </div>
                     <div class="timeline-body">
                        <p class="small color02">Dun & Bradstreet | Melbourne, Australia.</p>
                     </div>
                  </div>
               </li>

            </ul>

         </div>
      </section>
      <!-- /Timeline Block -->

      <!-- Quote -->
      <section id="quote" class="e-block-ins light jarallax bg-john-04">
         <div class="container">
            <div class="row">
               <div class="col-md-2"></div>
               <div class="col-md-8">
                  <blockquote><p>It's always a pleasure to work with this guy. He is great with his work and a fun guy to be around. His work is always flawless and always delivered on time. Surely a great asset to any company.<cite>Work Colleague</cite></p></blockquote>
               </div>
               <div class="col-md-2"></div>
            </div>
         </div>
      </section>
      <!-- /Quote -->

      <!-- Testmonials Block -->
      <section id="testmonials" class="e-block-ins dark bg-darkblue2 pt-section" data-name="Testmonials">

         <div class="container">

            <div class="text-center">
               <h2 class="font-accident-one-bold">Testimonials</h2>
               <div class="dividewhite1"></div>
               <div class="dividewhite8"></div>
            </div>

            <div class="row">

               <div class="col-md-6">
                  <div class="row">
                     <div class="col-xs-2">
                        <img src="assets/custom/images/userpic01.jpg" alt="Rachel James Johnes" class="img-responsive img-circle author-userpic">
                     </div>
                     <div class="col-xs-10">
                        <h4 class="font-accident-one-bold">Nishant Desai</h4>
                        <p class="company">Kinsh Technologies</p>
                        <p class="">
                           It was a great experience to work with Saransh. Saransh was very dedicated, sincere and focused in his work. He is a fun loving guy who makes the office environment lively by his jolly nature. I wish him all the best for his future.
                        </p>
                     </div>
                  </div>
                  <div class="divider-dynamic"></div>
               </div>
               <div class="col-md-6">
                  <div class="row">
                     <div class="col-xs-2">
                        <img src="assets/custom/images/userpic02.jpg" alt="Rachel James Johnes" class="img-responsive img-circle author-userpic">
                     </div>
                     <div class="col-xs-10">
                        <h4 class="font-accident-one-bold">Alessio Bonti</h4>
                        <p class="company">IBM</p>
                        <p class="">
                          I had the pleasure to work with Saransh for about 6 months as a software developer intern under my supervision, he is very skilled and I am sure he will become a great developer in the future. While working at IBM, he was forced to learn new technologies very quickly and jump from one project to another without warning. During this time, he has developed skills and a good attitude towards team work and proper software engineering practises.
                        </p>
                     </div>
                  </div>
                  <div class="divider-dynamic"></div>
               </div>
            </div>
         </div>
      </section>
      <!-- /Testmonials Block -->

      <!-- Feedback Block -->
      <section id="feedback" class="e-block-ins dark jarallax bg-john-02 pt-section" data-name="Feedback">
         <div class="container text-center dark">
            <div class="row feedback">
               <div class="col-md-12">
                  <h2 class="font-accident-one-bold">Hire me!</h2>
                  <div class="dividewhite1"></div>
                  <h5 class="font-accident-one-bold uppercase hovercolor">What do you think about my work/profile?</h5>
                  <div class="dividewhite8"></div>
               </div>
               <div class="col-md-12"></div>
               <div class="col-md-2"></div>
               <div class="col-md-8 e-centered">
                  <div id="form-messages"></div>
                  <form id="ajax-contact" method="post" action="assets/custom/php/form.php" class="wpcf7-form">
                     <div class="field">
                        <!--<label for="name">Name:</label>-->
                        <input type="text" id="name" name="name" placeholder="Name" required>
                     </div>

                     <div class="field">
                        <!--<label for="email">Email:</label>-->
                        <input type="email" id="email" name="email" placeholder="Email" required>
                     </div>

                     <div class="field">
                        <!--<label for="message">Message:</label>-->
                        <textarea id="message" name="message" placeholder="Message" rows="7" cols="30"  required></textarea>
                     </div>

                     <div class="dividewhite6"></div>

                     <div class="field">
                        <button type="submit" class="btn btn-lg btn-lgr-str">Send email</button>
                     </div>
                  </form>
               </div>
               <div class="col-md-2"></div>
               <div class="col-md-12 divider-dynamic"></div>
            </div>
         </div>
      </section>
      <!-- /Feedback Block -->

   </div>

   <!-- Google Map -->
   <div class="bg-darkblue">
      <a class="gm-toggle-link">
         <div class="gm-toggle">
            <i class="flaticon-placeholder-1"></i>
         </div>
      </a>
      <div id="gm-panel">
         <div id="google-map" class="bigmap"></div>
      </div>
   </div>
   <!-- /Google Map -->

   <!-- footer -->
   <footer>
      <div id="footer-wrapper" class="bg-darkblue dark">
         <div class="container">
            <div class="row">
               <div class="col-sm-4">
                  <!-- About Widget -->
                  <h4>Saransh Seth</h4>
                  <div class="dividewhite2"></div>
                  <p>The Experienced UI/UX Specialist, Web-designer, Web-developer</p>
                  <!-- / About Widget -->
                  <div class="dividewhite4"></div>
               </div>
               <div class="col-sm-4">
                  <!-- Contacts Widget -->
                  <h4>Contacts</h4>
                  <div class="dividewhite2"></div>
                  <div class="contact">
                     <div class="footer-addr">
                        <div class="footer-icon"><i class="fa fa-home"></i></div>
                        <div class="addr-text"> Melbourne, Australia.</div>
                     </div>
                     <div class="footer-addr">
                        <div class="footer-icon"><i class="fa fa-phone"></i></div>
                        <div class="addr-text"> 0450 927 335</div>
                     </div>
                  </div>
                  <!-- / Contacts Widget -->
                  <div class="dividewhite4"></div>
               </div>
               <div class="col-sm-4">
                  <!-- Follow us Widget -->
                  <h4>Follow me</h4>
                  <div class="dividewhite2"></div>
                  <div class="follow dark">
                     <div class="inline-block">
                        <a href="https://www.facebook.com/saransh.seth.5">
                           <i class="fa fa-facebook" title="Facebook" aria-hidden="true"></i>
                        </a>
                     </div>
                     <div class="inline-block">
                        <a href="https://au.pinterest.com/saranshseth93/">
                           <i class="fa fa-pinterest" title="Pinterest" aria-hidden="true"></i>
                        </a>
                     </div>
                     <div class="inline-block">
                        <a href="https://www.linkedin.com/in/saranshseth/">
                           <i class="fa fa-linkedin" title="LinkedIn" aria-hidden="true"></i>
                        </a>
                     </div>
                  </div>
                  <!-- / Follow us Widget -->
                  <div class="dividewhite4"></div>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- /footer -->

   <!-- Back to Top -->
   <div id="back-top"><a href="#top"></a></div>
   <!-- /Back to Top -->

</div>

<div id="image-cache" class="hidden"></div>

<!-- CSS -->
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" property='stylesheet' rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/vendor/fontawesome/css/font-awesome.min.css" property='stylesheet' rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/vendor/flaticon/flaticon.css" property='stylesheet' rel="stylesheet" type="text/css" media="screen"/>

<link href="assets/vendor/rs-plugin/css/settings.css" property='stylesheet' rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/vendor/rs-plugin/css/layers.css" property='stylesheet' rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/vendor/rs-plugin/css/navigation.css" property='stylesheet' rel="stylesheet" type="text/css" media="screen"/>

<link href="assets/vendor/mfp/css/magnific-popup.min.css" property='stylesheet' rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/vendor/progresstracker/css/jquery.progresstracker.min.css" property='stylesheet' rel="stylesheet">

<!-- Custom CSS -->
<link href="assets/custom/css/style.css" property='stylesheet' rel="stylesheet" type="text/css" media="screen"/>



<!-- JS -->
<script type="text/javascript" src="assets/vendor/jquery/js/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/vendor/sticky/js/jquery.sticky.min.js"></script>
<script type="text/javascript" src="assets/vendor/horiz-timeline/js/hortimeline.min.js"></script>
<script type="text/javascript" src="assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
<script type="text/javascript" src="assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
<script type="text/javascript" src="assets/vendor/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="assets/vendor/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="assets/vendor/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="assets/vendor/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="assets/vendor/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>

<script type="text/javascript" src="assets/vendor/jarallax/js/jarallax.js"></script>
<script type="text/javascript" src="assets/vendor/imagesloaded/js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="assets/vendor/isotope/js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="assets/vendor/mfp/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="assets/vendor/anicounter/jquery.counterup.min.js"></script>
<script type="text/javascript" src="assets/vendor/circle-progress/circle-progress.min.js"></script>
<script type="text/javascript" src="assets/vendor/waypoints/waypoints.min.js"></script>
<script type="text/javascript" src="https://maps.google.com/maps/api/js" defer async></script>
<script type="text/javascript" src="assets/vendor/offcanvas-menu/js/classie.min.js"></script>
<script type="text/javascript" src="assets/vendor/progresstracker/js/jquery.progresstracker.min.js"></script>
<script type="text/javascript" src="assets/vendor/flickr/js/jflickrfeed.min.js"></script>

<!-- Custom JS -->
<script type="text/javascript" src="assets/custom/js/script.js"></script>

</body>
</html>
