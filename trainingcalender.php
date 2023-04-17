<?php
include("menu.php");

?>

<!--<?php

//$con = mysqli_connect("localhost","creativetec","ctech@123","eurogulfsafety");
// Check connection
//if (mysqli_connect_errno())
 // {
 // echo "Failed to connect to MySQL: " . mysqli_connect_error();
 // }
?>-->



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
                        <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 400px; overflow: hidden; visibility: hidden;">
                    <!-- Loading Screen -->
                    <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                        <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                    </div>
                    <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 400px; overflow: hidden;">
                        
                        <a data-u="any" href="https://www.jssor.com" style="display:none">Full Width Slider</a>
                        <div data-p="225.00" style="display: none;">
                            <img data-u="image" src="image/calender.jpg" />
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

        

<div class="client-section2  ">
            <div class="container ">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title2  wow fadeInLeft">Our Courses</h2>
                    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="client-item1 wow fadeInDown animated" data-wow-delay="0.2s">
                            <div class="client-content">
                              
                                <p>We offer a range a training courses to equip you and your organisation with knowledge and understanding of fire safety that meets your legal requirements. At the end of the course delegates will have an awareness of the reasons for a fire risk assessment, and the principles of carrying one out.</p>

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
                       
                    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="client-item1 wow fadeInDown animated" data-wow-delay="0.2s">
                            <div class="client-content demo_img">
                            <h2 class="section-title2">IOSH MS</h2>
                              
                               <p>Duration of this course is only four days. No prior HSE Training knowledge is required. This course is highly useful for supervisors and the Managers of any organizations.</p>
                                 <img src="image/managing.jpg"alt=""id="myImg5"/> <br />
                            </div>
                          
                          
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="client-item1 wow fadeInDown animated" data-wow-delay="0.5s">
                            <div class="client-content demo_img">
                                  <h2 class="section-title2">IOSH WS</h2>
                               
                                <p>Duration of this course is only one day to deeply understand the preventions, awareness and causes of working safely. </p><br />
                                   <img src="image/work_safety.png"alt=""id="myImg5"/>
                            </div>
                       
                           
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="client-item1 wow fadeInDown animated" data-wow-delay="0.8s">
                            <div class="client-content demo_img">
                                  <h2 class="section-title2">Diploma Course</h2>
                        
                               <p>Our experts provide practical sessions to the candidates and support throughout the training to learn the risks involved and assess the danger.</p><br />
                                <img src="image/diploma.png"alt=""id="myImg5"/>
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
                       
                    
                    </div>
                </div>
                <div class="row">                    
                    <div class="col-md-4">
                        <div class="client-item1 wow fadeInDown animated" data-wow-delay="0.5s">
                            <div class="client-content content_right_block">
                                  <h2 class="section-title2" style="font-size: 15px;">Training calendar for January, 2018</h2><br />
                                <p style="color:red;">ABUDHABI & DUBAI</p>
                                <marquee height="250px" onmouseout="this.start()" onmouseover="this.stop()" scrollamount="3" direction="up" style="height: 250px;"> 
                              <ul>
<li><img src="image/star_li.png" />&nbsp; NASP, IOSH, HSE Diploma Classes start from January 5th, 2018 every Friday at Dubai EGSC Training Center - REGISTER NOW! &nbsp; 
                       
</li>

<li><img src="image/star_li.png" />&nbsp; To be announced &nbsp;
   

</li>

<li><img src="image/star_li.png" />&nbsp; To be announced &nbsp;


</li> 

<li><img src="image/star_li.png" />&nbsp; To be announced &nbsp;


</li> 

<li><img src="image/star_li.png" />&nbsp; To be announced &nbsp;
  

</li> 




                                </ul> 
                                </marquee>
                                     
                                    
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
                        <h2 class="section-title2 wow fadeInLeft">TRAINING COURSES</h2>
                    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="client-item1 wow fadeInDown animated" data-wow-delay="0.2s">
                            <div class="client-content">
                                <i class="" style="color: #e53099;"></i>
                               
                                     <p>First Aid</p>
  <p>Advanced First Aid</p>
  <p>Fire Warden</p>
  <p>Fire Marshal</p>
  <p>Fire Prevention & Fire Fighting</p>
    <p>Rigger & Slinger</p>
  <p>Rigging Supervisor</p>
<p>Banks Man & Flag man</p>
   <p>Emergency Response</p>
 <p>Risk Assessment</p>
  <p>Chemical Hazardous</p>
  <p>Compressed Gas Safety</p>
   <p>Excavation Safety</p>
  <p>Heat Stress Awareness</p>
<p>Defensive Driving</p>
                            </div>
                            
                         
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="client-item1 wow fadeInDown animated" data-wow-delay="0.5s">
                            <div class="client-content">
                                <i class="" style="color: #e53099;"></i>
                                    <p>Scaffold Erection & Dismantling</p>
  <p>Mobile scaffold erection & dismantling</p>
  <p>H2s Awareness</p>
  <p>Authorized Gas Tester ( AGT )</p>
  <p>Electrical Safety</p>
    <p>Lock out  Tag out</p>
  <p>Hand & Power tools safety</p>
  <p>Safe Cutting & Welding Operation Awareness</p>
  <p>Emergency Evacuation Procedures</p>
    <p>Radiation Safety</p>
 <p>Health & Safety Site Inspection</p>
  <p>Office Safety</p>
  <p>Safety Officer Refresher Training</p>
 <p>Health & Safety at Work Place</p>
  <p>Blood Borne Pathogens</p>

                            </div>
                            
                            
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="client-item1 wow fadeInDown animated" data-wow-delay="0.5s">
                            <div class="client-content">
                                <i class="" style="color: #e53099;"></i>
                                    <p>Falls & Falling Objects</p>
   <p>Working at Height</p>
  <p>Hazard Recognition & Assessment</p>
   <p>Control of Substances Hazardous to Health</p>
   <p>House Keeping Practices</p>
   <p>Safe Grinding</p>
   <p>Color Coding System</p>
   <p>Hazmat ( Hazardous Material Handling)</p>
    <p>Construction Safety Awareness</p>
   <p>Ergonomics Awareness</p>
   <p>Manual Handling</p>
  <p>Defensive Driving</p>
    <p>Personal Protective Equipment ( PPE )</p>
   <p>Permit to Work ( PTW )</p>
   <p>Accident / Incident Investigation</p>
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
                            <br />
                            <br />
                                <li><img src="image/star-8-xxl.png" style="width: 10px;"/>&nbsp;&nbsp;&nbsp;&nbsp;UK Certification</li>
                                <li><img src="image/star-8-xxl.png" style="width: 10px;"/>&nbsp;&nbsp;&nbsp;&nbsp;UAE Certification </li>
                                <li><img src="image/star-8-xxl.png" style="width: 10px;"/>&nbsp;&nbsp;&nbsp;&nbsp;US Certification </li>
                                <li><img src="image/star-8-xxl.png" style="width: 10px;"/>&nbsp;&nbsp;&nbsp;&nbsp;INDIA Certification</li>
                                 
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
                            <a href="inspection">ReadMore</a>
                        </div>
                    </div>
                    <div class="col-md-4 table-content wow fadeInDown animated" data-wow-delay="0.81s">
                        <div class="table-item platinum">
                            
                            <h3>CONSULTANCY</h3>
                            <ul>
                            <br />
                            <br />
                                <li><img src="image/star-8-xxlorange.png" style="width: 10px;"/>&nbsp;&nbsp;EHS Consultancy</li>
                                <li><img src="image/star-8-xxlorange.png" style="width: 10px;"/>&nbsp;&nbsp;ISO Training</li>
                                <li><img src="image/star-8-xxlorange.png" style="width: 10px;"/>&nbsp;&nbsp;ISO Certification</li>
                               <li style="font-size: 13px;"><img src="image/star-8-xxlorange.png" style="width: 10px;"/>&nbsp;&nbsp;HSC Manpower</li>
                             
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
<div class="padding_bottom"></div>

          <?php include("footer.php")?>
       

        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>
