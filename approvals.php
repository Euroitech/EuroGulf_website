<?php

include("menu.php");


?>

 
 <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="js/jssor.slider-21.1.6.mini.js" type="text/javascript"></script>
<script type="text/javascript">
        jQuery(document).ready(function ($) {
            
            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,o:-1},{b:0,d:1000,o:1}],
              [{b:1900,d:2000,x:-379,e:{x:7}}],
              [{b:1900,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:1000,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:1900,d:1600,x:-200,o:-1,e:{x:16}}]
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
        
    </script>
    <style>
        / jssor slider bullet navigator skin 05 css /
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            / size of bullet elment /
            width: 16px;
            height: 16px;
            background: url('img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }
        
        / jssor slider arrow navigator skin 22 css /
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        */
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            / size of arrow element /
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('img/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
    </style>

  <div class="table-section">    
<div class="width_100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 wow fadeInDown animated">
                        
                    </div>
                </div>
            </div>
       
       </div>
        </div>
 <div class="table-sectionslider">
                        <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 300px; overflow: hidden; visibility: hidden;">
                    <!-- Loading Screen -->
                    <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                        <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                    </div>
                    <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 300px; overflow: hidden;">
                        
                        <a data-u="any" href="http://www.jssor.com" style="display:none">Full Width Slider</a>
                        <div data-p="225.00" style="display: none;">
                            <img data-u="image" src="image/pageheader/Approval   page.webp" />
                        </div>
                         
                    </div>
                    <!-- Bullet Navigator -->
                    <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
                        <!-- bullet navigator item prototype -->
                        <div data-u="prototype" style="width:16px;height:16px;"></div>
                    </div>
                    <!-- Arrow Navigator -->
                    <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
                    <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
                </div>

</div>
<!doctype html>
<html lang="en">
<link href="css/thumbnail-slider.css" rel="stylesheet" type="text/css" />
        

        
        <div class="client-section2">
        <div class="container">
         <div class="row">
                    <div class="col-md-6">
                        <div class="client-item1 wow fadeInDown animated" data-wow-delay="0.2s">
                            <div class="client-content">
                            <h2 class="section-title2">APPROVED BY</h2><br />
                                    <p><img src="image/gallery/correct.png"/>UAE Ministry of Labour and Social Affairs</p>
                                    <p><img  src="image/gallery/correct.png"/>Dubai Municipality</p>
                                    <p><img  src="image/gallery/correct.png"/>Dubai Center of Ambulance Services(DCAS)</p>
                                    <p><img  src="image/gallery/correct.png"/>Dubai Civil Defence (DCD)</p>
                                    <p><img  src="image/gallery/correct.png"/>Emirates International Accreditation Centre (EIAC)</p>
                                    <p><img  src="image/gallery/correct.png"/>Dubai Civil Aviation (DCA)</p>
                                    <p><img  src="image/gallery/correct.png"/>Knowledge & Human Development Authority (KHDA)</p>
                                    <p><img  src="image/gallery/correct.png"/>EHS-Trakhees</p>
                                    <p style="font-size: 13px;"><img  src="image/gallery/correct.png"/>Abu Dhabi Centre for Technical and Vocational Education and Training (ACTVET)</p>
                                    <p style="font-size: 13px;"><img  src="image/gallery/correct.png"/>Abu Dhabi Occupational Safety and Health Center (OSHAD)</p>
                            </div>
                           
                          
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="client-item1 wow fadeInDown animated" data-wow-delay="0.5s">
                            <div class="client-content">
                                  <h2 class="section-title2">MEMBERSHIP WITH</h2><br />
                                    
                                    <p><img  src="image/gallery/correct.png"/>Institution of Occupational Safety & Health (IOSH)</p>
                                    <p><img  src="image/gallery/correct.png"/>Construction Industry Training Board (CITB)</p>
                                    <p><img  src="image/gallery/correct.png"/>Chartered Institute of Environmental Health (CIEH)</p>
                                    <p><img  src="image/gallery/correct.png"/>International Institute of Risk & Safety Management(IIRSM)</p>
                                    <p><img  src="image/gallery/correct.png"/>National Fire Protection Association (NFPA)</p>
                                    <p><img  src="image/gallery/correct.png"/>First Aid International (FAI-UK)</p>
                                    <p><img  src="image/gallery/correct.png"/>Highfield</p>
                                    <p><img  src="image/gallery/correct.png"/>British Safety Council</p>
                                     <p><img  src="image/gallery/correct.png"/>National Association of Safety Professionals (NASP)</p>
                                       <p><img  src="image/gallery/correct.png"/>Highfield Awarding Body for Compliance (HABC)</p>
                                    
                            </div>
                       
                           
                        </div>
                    </div>
                </div>
         </div>
    </div>
    
    
    <div class="client-section2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title2 wow fadeInLeft">OUR APPROVALS </h2>
                      <div class="cate-right certificateimg ">
				<!-- slider -->
				<ul id="flexiselDemo1">			
					<li>
						<div class="sliderfig-grid wow fadeInDown ">
							<img  src="image/certificate_logo\mod_logo\highfield_logo2.jpg" alt=" " class="img-responsive_slid " />
						</div>
					</li>
					<li>
						<div class="sliderfig-grid wow fadeInDown" >
                        
							<img src="image/certificate_logo\mod_logo\faid2.jpg" alt=" " class="img-responsive_slid  " />
						</div>
					</li>

					<li>
						<div class="sliderfig-grid wow fadeInDown" >
							<img src="image/certificate_logo\mod_logo\logo3.jpg" alt=" " class="img-responsive_slid " />
						</div>
					</li>
                    <li>
						<div class="sliderfig-grid wow fadeInDown" >
							<img src="image\certificate_logo\mod_logo\iosh.jpg" alt=" " class="img-responsive_slid " />
						</div>
					</li>
                    <li>
						<div class="sliderfig-grid wow fadeInDown" >
							<img src="image\certificate_logo\mod_logo\SOHAD_logo4.jpg" alt=" " class="img-responsive_slid " />
						</div>
                        </li>
                        <li>
                        <div class="sliderfig-grid wow fadeInDown" >
							<img src="image\certificate_logo\mod_logo\vincote1.jpg" alt=" " class="img-responsive_slid " />
						</div>
                        </li>
                        <li>
                        <div class="sliderfig-grid wow fadeInDown" >
							<img src="image\certificate_logo\mod_logo\Dubai ambulance.jpg" alt=" " class="img-responsive_slid " />
						</div>
                        </li>
                        <li>
                        <div class="sliderfig-grid wow fadeInDown" >
							<img src="image\certificate_logo\mod_logo\EIAC.jpg" alt=" " class="img-responsive_slid " />
						</div>
                        </li>
                        <li>
                        <div class="sliderfig-grid wow fadeInDown" >
							<img src="image\certificate_logo\mod_logo\IPAF.jpg" alt=" " class="img-responsive_slid " />
						</div>
                        </li>
                        <li>
                        <div class="sliderfig-grid wow fadeInDown" >
							<img src="image\certificate_logo\mod_logo\OSHA.jpg" alt=" " class="img-responsive_slid " />
						</div>
                        </li>
                       <li>
                        <div class="sliderfig-grid wow fadeInDown" >
							<img src="image\certificate_logo\mod_logo\PASMA.jpg" alt=" " class="img-responsive_slid " />
						</div>
                        </li>
                        <li>
                        <div class="sliderfig-grid wow fadeInDown" >
							<img src="image\certificate_logo\mod_logo\Trakhees.jpg" alt=" " class="img-responsive_slid " />
						</div>
                        </li>
                        <li>
                        <div class="sliderfig-grid wow fadeInDown" >
							<img src="image\certificate_logo\mod_logo\ZONES_CORP.jpg" alt=" " class="img-responsive_slid " />
						</div>
                        </li> 
                   
					</ul>
			</div>
                   
                </div>
                
            </div>
        </div> </div>   
        
        <div class="client-section2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title2 wow fadeInLeft">OUR ESTEEMED CLIENTS</h2>
                    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="client-item1 wow fadeInDown animated" data-wow-delay="0.2s">
                           
                            <div class="col-md-6 client-content">
                              <p><img src="image/gallery/correct.png"/>Hyundai Engineering</p>
                              <p><img src="image/gallery/correct.png"/>Kharafi National LLC</p>
                              <p><img src="image/gallery/correct.png"/>Habtoor Lightor Group</p>
                              <p><img src="image/gallery/correct.png"/>Six Construction</p>
                              </div>
                              <div class="col-md-6 client-content">
                              <p><img src="image/gallery/correct.png"/>Eversendai Engineering</p>
                              <p><img src="image/gallery/correct.png"/>PCV JV</p>
                              <p><img src="image/gallery/correct.png"/>Mid Field Terminal Building</p>
                              <p><img src="image/gallery/correct.png"/>Abu Dhabi International Airport</p>
                            </div>
                   
                        
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        
         <div class="table-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title">Our Services</h2>
                        
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-md-4 table-content wow fadeInDown animated" data-wow-delay="0.5s">
                        <div class="table-item gold">
                            
                            <h3>TRAINING</h3>
                            <ul>
                                <li><img src="image/star-8-xxl.png" style="width: 10px;"/>&nbsp;&nbsp;&nbsp;&nbsp;UK Certification</li>
                                <li><img src="image/star-8-xxl.png" style="width: 10px;"/>&nbsp;&nbsp;&nbsp;&nbsp;UAE Certification </li>
                                <li><img src="image/star-8-xxl.png" style="width: 10px;"/>&nbsp;&nbsp;&nbsp;&nbsp;US Certification </li>
                                <li><img src="image/star-8-xxl.png" style="width: 10px;"/>&nbsp;&nbsp;&nbsp;&nbsp;INDIA Certification</li>
                                 <br />
                               
                                <br />
                            </ul>
                            <a href="trainning">ReadMore</a>
                        </div>
                    </div>
                    <div class="col-md-4 table-content wow fadeInDown animated" data-wow-delay="0.2s">
                        <div class="table-item sliver">
                          
                            <h3>INSPECTION</h3>
                            <ul>
                       
                            <p style="color:red; text-align: left;font-family: 'ProximaNovaA-Bold';
                               margin-left:30px;padding:0; font-size:14px;">Accreditated by </p>
                                <li><img src="image/star-8-xxlsky.png" style="width: 10px;" alt="value"/>&nbsp;&nbsp; EIAC</li>
                                <li><img src="image/star-8-xxlsky.png" style="width: 10px;" alt="value"/>&nbsp;&nbsp; IPAF</li>
                                <li><img src="image/star-8-xxlsky.png" style="width: 10px;" alt="value"/>&nbsp;&nbsp; PASMA </li>
                            </ul>
                            <a href="trainning">ReadMore</a>
                        </div>
                    </div>
                    <div class="col-md-4 table-content wow fadeInDown animated" data-wow-delay="0.81s">
                        <div class="table-item platinum">
                            
                            <h3>CONSULTANCY</h3>
                            <ul>
                                <li><img src="image/star-8-xxlorange.png" style="width: 10px;"/>&nbsp;&nbsp;EHS Consultancy</li>
                                <li><img src="image/star-8-xxlorange.png" style="width: 10px;"/>&nbsp;&nbsp;ISO Training</li>
                                <li><img src="image/star-8-xxlorange.png" style="width: 10px;"/>&nbsp;&nbsp;ISO Certification</li>
                               <li style="font-size: 13px;"><img src="image/star-8-xxlorange.png" style="width: 10px;"/>&nbsp;&nbsp;HSC Manpower</li>
                                <br />
                               
                                <br />
                              </ul>
                            <a href="consultancy">ReadMore</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
         <div class="blog-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title-section">Testimonials</h2>
                       
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 wow fadeInDown animated" data-wow-delay="0.2s">
                        <div class="row">
                            <div class="col-md-3a blog-thumb">
                                <a href="testimonial"><img src="image/photo-4.jpg" width="127" height="190" alt=""></a>
                            </div>
                            <div class="col-md-9 blog-content-test">
                                <h3>Carina Bongolon</h3>
                                <p>I was really excited with the level of theory and practical of First Aid training. The trainers are well versed. I enjoyed throughout the training. 
Great thanks to Euro Gulf Safety.</p>
                            </div>
                        </div>
                    </div>
                   <div>
<p></p>
                  </div>
                    <div class="col-md-12 wow fadeInDown animated" data-wow-delay="0.5s">
                        <div class="row">
                            <div class="col-md-3a blog-thumb">
                                <a href="testimonial"><img src="image/photo-6.jpg" width="127" height="190" alt=""></a>
                            </div>
                            <div class="col-md-9 blog-content-test">
                                <h3> Shareehan Kannipoil   </h3>
                                <p>Today I attended the Fire Safety training and during the practical section I had  use the fire extinguisher of CO2 for Electrical fire, Really It was a great experience and I have gained good knowledge.  Big solute to my facilitator. Blessing to Euro Gulf Safety.</p>
                                
                            </div>
                        </div>
                    </div>
                </div>            
               
            </div>
        </div>
        
         
<script src="js/jquery-1.11.1.min.js"></script>

<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 4
					}, 
					landscape: { 
						changePoint:640,
						visibleItems:4
					},
					tablet: { 
						changePoint:768,
						visibleItems: 4
					}
				}
			});
			
		});
</script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>


<?php include("footer.php")?>
       

        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/custom.js"></script>  