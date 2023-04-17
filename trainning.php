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
                            <img data-u="image" src="image/pageheader/Training page.webp" />
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
     
<div class="client-section1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title1 wow fadeInLeft">Our Trainings</h2>
                    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="client-item1 wow fadeInDown animated" data-wow-delay="0.2s">
                            <div class="client-content">
                              
                                <p>The ever growing industrialization, the unhindered population growth, massive urbanization have  increased the fire risk to a greater extent. There is a huge demand of trained human resources and equipment in many fold with such an upswing in world industry and economics, need of trained and qualified persons in field of fire protection is much more than ever before.</p>
                            <h5 class=" wow fadeInLeft">Our services don't stop after the training. We provide -</h5>
                            <div class="support">
<p> <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/gallery/1.jpg"/> Support From High Class Professionals </b></p>
</div>
<p> <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/gallery/1.jpg"/> 24/7 Support </b></p>
<p> <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/gallery/1.jpg"/> Best In Class Communication</b></p>

                            </div>
                   
                        
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="client-section1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title1 wow fadeInLeft">PROFESSIONAL HSE COURSES</h2>
                    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="client-item5 wow fadeInDown animated" data-wow-delay="0.2s">
                            <div class="client-content">
                              <ul>
                                
                               
                               
                               <p><a  target="_blank" href="image/IOSH Managing Safely.pdf" style="color: black;"><img src="image/gallery/correct.png"/>IOSH - Managing Safely<img src="image/click2.png"/></a></p>
                               <p><a target="_blank" href="image/IOSH Working Safely.pdf" style="color: black;"><img src="image/gallery/correct.png"/>IOSH - Working Safely<img src="image/click2.png"/></a></p>
                                </ul>
                            </div>
                   
                        
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        
          <div class="client-section1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title1 wow fadeInLeft">PROFESSIONAL US CERTIFICATIONS</h2>
                    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="client-item1 wow fadeInDown animated" data-wow-delay="0.2s">
                            <div class="client-content">
                              <p><img src="image/gallery/correct.png"/>NASP Advance Diploma</p>
                              <p><img src="image/gallery/correct.png"/>NASP Diploma</p>

   <p><img src="image/gallery/correct.png"/>Competent Scaffolder- Scaffolding Training Institute US</p>

                            </div>
                   
                        
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
         <div class="client-section1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title1 wow fadeInLeft">PROFESSIONAL ISO COURSES</h2>
                    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="client-item1 wow fadeInDown animated" data-wow-delay="0.2s">
                            <div class="client-content">
                              <p><img src="image/gallery/correct.png"/>Lead Auditor Course - External Quality Management system - 9001</p>
                              <p><img src="image/gallery/correct.png"/>Environmental Management system - 14001</p>

   <p><img src="image/gallery/correct.png"/>OSHAS - 18001</p>

                            </div>
                   
                        
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        
    <div class="client-section1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title1 wow fadeInLeft">PROFESSIONAL COURSES</h2>
                    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="client-item5 wow fadeInDown animated" data-wow-delay="0.2s">
                            <div class="client-content">
                              <ul>
                               <p><a href="iso9001" style="color: black;"><img src="image/gallery/correct.png"/>9001 - QMS - IRCA<img src="image/click2.png"/></a></p>
                               <p><a href="iso14" style="color: black;"><img src="image/gallery/correct.png"/>14001 - EMS - IEMA/IRCA<img src="image/click2.png"/></a></p>
                               <p><a href="iso18" style="color: black;"><img src="image/gallery/correct.png"/>18001 - OSHAS - IRCA<img src="image/click2.png"/></a></p> 
                                </ul>
                            </div>
                   
                        
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
   <div class="client-section1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title1 wow fadeInLeft"> National Courses</h2>
                    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="client-item1 wow fadeInDown animated" data-wow-delay="0.2s">
                            <div class="client-content">
                              <p>We provide diploma courses Recognised by Bharat Sevak Samaj, Govt of India. Bharath Sevak Samaj is the National Development Agency sponsored by the Planning Commission, Government of India to ensure public co-operation for implementing government plants. The main purpose behind the formulation of Bharat Sevak Samaj is to initiate a nation wide, non official and non political organization with the object of enabling individual citizens to contribute, in the form of an organized co-operative effort, to the implementation of the National Development Plan. The constitution and functioning of Bhart Sevak Samaj is approved unanimously by the Indian Parliament. </p>
                                 <h5 class=" wow fadeInLeft">Who can study?</h5>

<p> <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/gallery/1.jpg"/>Trainees </b></p>
<p> <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/gallery/1.jpg"/>Machine and process operators</b></p>
<p> <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/gallery/1.jpg"/>Office and other non-industrial staff</b></p>
<div class="support1">
<p> <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/gallery/1.jpg"/>First-line supervisors who have no formal HSE Training</b></p>
</div>


                            </div>
                   
                        
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
 
        <div class="client-section1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title1 wow fadeInLeft">HSE TRAINING & CERTIFICATION</h2>
                    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="client-item5 wow fadeInDown animated" data-wow-delay="0.2s">
                            <div class="client-content">
                                <i class="" style="color: #e53099;"></i>
                               
                                    <p><a href="firstaid" style="color: black;"><img src="image/gallery/correct.png"/>First Aid (First Aid International UK)<img src="image/click2.png"/></a></p>
                                    <p><img  src="image/gallery/correct.png"/>Advanced First Aid (First Aid International Advanced)</p>
                                    <p><img  src="image/gallery/correct.png"/>Fire Warden</p>
                                    <p><img  src="image/gallery/correct.png"/>Fire Marshal</p>
                                    <p><img  src="image/gallery/correct.png"/>Fire prevention & Fire Fighting</p>
                                    <p><img  src="image/gallery/correct.png"/>Rigging & Slinging (Refresher)</p>
                                    <p><img  src="image/gallery/correct.png"/>Rigging & Slinging (New Employees)</p>
                                    <p><img  src="image/gallery/correct.png"/>Scaffolding Erection & Dismantling (Refresher)</p>
                                    <p><img  src="image/gallery/correct.png"/>Scaffolding Erection & Dismantling (New Employees)</p>
                                    <p><img  src="image/gallery/correct.png"/>Banks Man & Flag Man</p>
                                    <p><img  src="image/gallery/correct.png"/>Confined Space</p>
                                    <p><img  src="image/gallery/correct.png"/>H2S Awareness</p>
                                    <p><img  src="image/gallery/correct.png"/>Authorized Gas Tester (AGT)</p>
                                    <p><img  src="image/gallery/correct.png"/>SCBA</p>
                                    <p><img  src="image/gallery/correct.png"/>Hand & Power Tools Operator</p>
                                    <p><img  src="image/gallery/correct.png"/>Electrical Safety</p>
                                   
                                  

                            </div>
                            
                         
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="client-item1 wow fadeInDown animated" data-wow-delay="0.5s">
                            <div class="client-content">
                                <i class="" style="color: #e53099;"></i>
                                    <p><img  src="image/gallery/correct.png"/>Lock Out and Tag Out (LOTO)</p>
                                    <p><img  src="image/gallery/correct.png"/>Welding Safety Awareness</p>
                                    <p><img  src="image/gallery/correct.png"/>Working at Height & Rescue</p>
                                    <p><img  src="image/gallery/correct.png"/>Falls & Falling Objects</p>
                                    <p><img  src="image/gallery/correct.png"/>Control of Substances Hazardous to Health (COSHH)</p>
                                    <p><img src="image/gallery/correct.png"/>Hazard Recognition & Assessment</p>
                                    <p><img src="image/gallery/correct.png"/>Ergonomics Awareness</p>
                                    <p><img src="image/gallery/correct.png"/>Manual Handling</p>
                                    <p><img src="image/gallery/correct.png"/>Defensive Driving</p>
                                    <p><img src="image/gallery/correct.png"/>Personal Protective Equipment (PPE)</p>
                                    <p><img src="image/gallery/correct.png"/>Permit To Work (PTW)</p>
                                    <p><img src="image/gallery/correct.png"/>Accident/Incident Investigation</p> 
                                    <p><img src="image/gallery/correct.png"/>Blood Borne Pathogens</p>
                                    <p><img src="image/gallery/correct.png"/>Excavation Safety</p>
                                    <p><img src="image/gallery/correct.png"/>LIFEBUOY MANOVER Board</p>
                                    <p><img src="image/gallery/correct.png"/>Atex & Explosive Atmosphere</p>
                                   
                                    

                            </div>
                            
                            
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>

        <div class="client-section1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title1 wow fadeInLeft">Certificate Verification</h2>
                    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="client-item5 wow fadeInDown animated" data-wow-delay="0.2s">
                            <div class="client-content">
                              <ul>
                               <p><a target="_blank" href="https://eurogulfcertificateverification.blogspot.com/p/certificate-verification.html" style="color: black;"><img src="image/gallery/correct.png"/>Diploma Certificate<img src="image/click2.png"/></a></p>
                               <p><a target="_blank" href="https://eurogulfcertificateverification.blogspot.com/p/certificate-verification.html" style="color: black;"><img src="image/gallery/correct.png"/>Others<img src="image/click2.png"/></a></p>
                                </ul>
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
                            <a href="inspection.">ReadMore</a>
                        </div>
                    </div>
                    <div class="col-md-4 table-content wow fadeInDown animated" data-wow-delay="0.81s">
                        <div class="table-item platinum">
                            
                            <h3>CONSULTANCY</h3>
                            <ul>
                                <li><img src="image/star-8-xxlorange.png" style="width: 10px;"/>&nbsp;&nbsp;EHS Consultancy</li>
                                <li><img src="image/star-8-xxlorange.png" style="width: 10px;"/>&nbsp;&nbsp;ISO Training</li>
                                <li><img src="image/star-8-xxlorange.png" style="width: 10px;"/>&nbsp;&nbsp;ISO Certification</li>
                               <li style="font-size: 13px;"><img src="image/star-8-xxlorange.png" style="width: 10px;"/>&nbsp;&nbsp;HSE Manpower</li>
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

<div class="padding_bottom"></div>

          <?php include("footer.php")?>
         
        

        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>
