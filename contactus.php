
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
                            <img data-u="image" src="image/pageheader/Contact us  page.webp" />
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

               

<script language="javascript">
function validateForm()
{
var a = document.form1.name.value;
if(a=="")
{
alert("please Enter the Name");
document.form1.name.focus();
return false;
}
/* if((a.length < 1) || (a.length > 5))
{
alert(" Your name must be 1 to 5 character");
document.form1.name.select();
return false;
} 
 /*if(a=="")
{
alert("please Enter first name is capital");
document.form1.name.focus();
return false;
}*/
var x=document.forms["form1"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail Address");
  return false;
  }


 var a = document.form1.phone.value;
if(a=="")
{
alert("please Enter the Contact Number");
document.form1.phone.focus();
return false;
}
if(isNaN(a))
{
//alert("Enter the valid Mobile Number(Like : 9566137117)");//
alert("Enter the values number Only");
document.form1.phone.focus();
return false;
}
if((a.length < 1) || (a.length > 10))
{
alert(" Your Mobile Number must be 1 to 10 Integers");
document.form1.phone.select();
return false;
}
var a = document.form1.zipcode.value;
if(a=="")
{
alert("please Enter the Zip Code");
document.form1.zipcode.focus();
return false;
}
 var a = document.form1.city.value;
if(a=="")
{
alert("please Enter the  City");
document.form1.city.focus();
return false;
}

var a = document.form1.Message.value;
if(a=="")
{
alert("please Enter the Message");
document.form1.Message.focus();
return false;
}
 
}


</script>
 <?php
                        if(isset($_POST['submit'])){
                            $name=$_POST['name'];$name=preg_replace('/[^A-Za-z0-9\-]/', '', $name);
                            $email=$_POST['email'];
                            $phone=$_POST['phone'];
                            $zipcode=$_POST['zipcode'];
                            $city=$_POST['city'];$city=preg_replace('/[^A-Za-z0-9\-]/', '-', $city);
                            $Message=$_POST['Message'];$Message=preg_replace('/[^A-Za-z0-9\-]/', '-', $Message);
                            $content=$_POST['message'];
                            $to="contact@eurogulfsafety.com";
                            $subject = "Details";
                            $message = <<<END
<html>
<body>
    <h2>Enquiry Received through website www.eurogulfsafety.com</h2>
    

   <table style="color: #333; width: 640px; border-collapse: collapse; border-spacing: 0;">


<tr>
    <th style="border: 1px solid transparent; height: 30px; transition: all 0.3s; padding-left:20px; background: #DFDFDF; text-align: left; font-weight: bold;">Name:</th>
    <td style="border: 1px solid transparent; height: 30px; transition: all 0.3s; padding-left:20px; background: #DFDFDF; text-align: left;">$name</td>
    
</tr>


<tr>
    <th style="border: 1px solid transparent; height: 30px; transition: all 0.3s; padding-left:20px; background: #FAFAFA; text-align: left; font-weight: bold;">Email:</th>
    <td style="border: 1px solid transparent; height: 30px; transition: all 0.3s; padding-left:20px; background: #FAFAFA; text-align: left;">$email</td>
    
</tr>

<tr>
    <th style="border: 1px solid transparent; height: 30px; transition: all 0.3s; padding-left:20px; background: #DFDFDF; text-align: left; font-weight: bold;">Phone:</th>
    <td style="border: 1px solid transparent; height: 30px; transition: all 0.3s; padding-left:20px; background: #DFDFDF; text-align: left;">$phone</td>
    
</tr>

<tr>
    <th style="border: 1px solid transparent; height: 30px; transition: all 0.3s; padding-left:20px; background: #FAFAFA; text-align: left; font-weight: bold;">Zipcode:</th>
    <td style="border: 1px solid transparent; height: 30px; transition: all 0.3s; padding-left:20px; background: #FAFAFA; text-align: left;">$zipcode</td>
    
</tr>
<tr>
    <th style="border: 1px solid transparent; height: 30px; transition: all 0.3s; padding-left:20px; background: #DFDFDF; text-align: left; font-weight: bold;">City:</th>
    <td style="border: 1px solid transparent; height: 30px; transition: all 0.3s; padding-left:20px; background: #DFDFDF; text-align: left;">$city</td>
    
</tr>
<tr>
    <th style="border: 1px solid transparent; height: 30px; transition: all 0.3s; padding-left:20px; background: #FAFAFA; text-align: left; font-weight: bold;">Message:</th>
    <td style="border: 1px solid transparent; height: 30px; transition: all 0.3s; padding-left:20px; background: #FAFAFA; text-align: left;">$Message</td>
    
</tr>
</table> 
</body>
</html> 
END;

                            $headers .= "Content-type: text/html\r\n";
                            $retval = mail ($to,$subject,$message,$headers);
                            $msg = "Your Form has been submitted Sucessfully..";
                            $style = "background-color: #CCFF99; border: 1px solid green; width: 100%; margin: 0 0 35px 0; padding: 10px 20px; font-weight: bold;";
                            echo "<script>alert('Thank you for contacting us. We will get back to you soon!!!');</script>";
                            echo "<script>window.location='contactus';</script>";
                        }
                        ?>

<!doctype html>
<html lang="en">


        <div class="client-section3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title3 wow fadeInLeft">CONTACT US</h2>
                    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="client-item1 wow fadeInDown animated" data-wow-delay="0.2s">
                            <div class="client-content">
                                <i class="" style="color: #e53099;"></i>
                               
                                
    <div class="wrap clearfix white_bg" >
        <div class="width_100 section" >
            <div class="width_100 quickenquiry wow zoomIn" ><br /><br />
                <h2 class="section-title3 wow zoomInLeft">Send Enquiry</h2>
              <br /> <br />
                <div class="clear" ></div>
                <form name="form1" action="contactus" onsubmit="return validateForm()" method="post" class="quickcontact">
              
                    <fieldset>
                        <div class="width_100 quickenquiry" >
                            <span><i class="fa fa-user" ></i></span>
                            <input type="text" name="name" placeholder="Name"  />
                        </div>
                    </fieldset>
                    
                    <fieldset>
                        <div class="width_100" >
                            <span><i class="fa fa-reply" ></i></span>
                            <input type="text" name="email" placeholder="E-mail"  />
                        </div>
                    </fieldset>
                    
                    <fieldset>
                        <div class="width_100" >
                            <span><i class="fa fa-mobile" ></i></span>
                            <input type="text" name="phone" placeholder="Contact No"  />
                        </div>
                    </fieldset>
                    
                    <fieldset>
                        <div class="width_100" >
                            <span><i class="fa fa-code" ></i></span>
                            <input type="text" name="zipcode" placeholder="Zip Code"  />
                        </div>
                    </fieldset>
                    
                    <fieldset>
                        <div class="width_100" >
                            <span><i class="fa fa-location-arrow" ></i></span>
                            <input type="text" name="city" placeholder="City"  />
                        </div>
                    </fieldset>
                    
                    <fieldset>
                        <div class="width_100" >
                            <span style="padding: 28.5px 10px;"><i class="fa fa-envelope" ></i></span>
                            <textarea style="height: 80px;" name="Message" placeholder="Message" rows="5" ></textarea>
                        </div>
                    </fieldset>
                    
                    <fieldset>
                    <br />
                        <div class="width_100" >
                         <br />  <br />
                          <button type="submit" name="submit" id="submit" ></span> Send Message</button>
                        </div>
                    </fieldset>
                    <br />
                    <br />
                 
                   <br />  <br />
                </form>
              
            </div>
        </div>
       
      
       
          <br />

</div>
                          

                            </div>
                            
                         
                        </div>  
                    </div>
                    <div class="col-md-6">
                        <div class="  wow fadeInDown animated" data-wow-delay="0.5s">
                            <div class="client-content ">
                                <i class="" style="color: #e53099;"></i>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3635.5068813851726!2d54.53514031451318!3d24.328829872350727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e38a4b309ba39%3A0xd0d57898c1f563d6!2sEuro+Gulf+Safety+Consultant!5e0!3m2!1sen!2s!4v1471596837212" width="100%" height="180" frameborder="0" style="box-shadow: 0px 0px 3px gray ;" allowfullscreen></iframe>

                            </div>
                            
                            
                        </div>
                    </div>
                   <div class="col-md-6">
                        <div class="client-item1 wow fadeInDown animated" data-wow-delay="0.8s">
                            <div class="client-content demo_img sidelinkstyle">
                                  <h2 class="section-title3">HEAD OFFICE</h2>
                                  <br />
                                   <p> <i class="fa fa-home" ></i>  Mez office #3,</p>
                                   <p>  Honda showroom Building, </p>
                                   <p>  Mussafah sanaiya sector 3, </p>
                                    <p><i class="fa fa-fax" ></i>   Post Box-35710, </p>
                                   <p>  Abu dhabi-UAE </p>
                                  
                                    <p><i class="fa fa-phone" ></i> +971 2 5530845,</p>
                                    <p><i class="fa fa-fax" ></i> +971 2 5530846</p>
                                     <p><i class="fa fa-mobile" ></i>  +971 50 5809428 </p>
                                      <p><i class="fa fa-mobile" ></i>  +971 52 8030830</p>
                                    <p><i class="fa fa-envelope-o" ></i> info@egsc.ae,</p>
                                    <p><i class="fa fa-envelope-o" ></i> bose@eurogulfsafety.com </p>
                                
                            </div>
                          
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        
        
         <div class="client-section3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                       
                    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="client-item1 wow fadeInDown animated" data-wow-delay="0.2s">
                            <div class="client-content demo_img">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3607.8941549195442!2d55.32572621501103!3d25.27414578386044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5cb860a1d80b%3A0x7862366b39341a52!2sEuro+Gulf+Safety+Consultant!5e0!3m2!1sen!2s!4v1499592783692" width="800" height="430" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                           <div></div>
                           <br />
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="client-item1 wow fadeInDown animated" data-wow-delay="0.8s">
                            <div class="client-content demo_img sidelinkstyle">
                                  <h2 class="section-title3">DUBAI OFFICE</h2>
                                  <br />
                                   
                                   <p>   <i class="fa fa-home" ></i> 106, First Floor, Lulu Center Building,   </p>
                                   <p> Opposite Excelsior Hotel,</p>
                                   <p> AL Muteena DEIRA,</p>
                                    <p><i class="fa fa-fax" ></i>   Post Box-183801, </p>
                                    <p> DUBAI- U.A.E</p>
                                   <p><i class="fa fa-phone" ></i> +971 4 2288662</p>
                                   <p><i class="fa fa-fax" ></i> +971 4 2288664</p>
                                    
                                     <p><i class="fa fa-mobile" ></i> +971 50 3352536</p>
                                     <p><i class="fa fa-mobile" ></i> +971 52 8030830</p>
                                    
                                    <p><i class="fa fa-envelope-o" ></i> infodxb@egsc.ae, </p>
                                    <p><i class="fa fa-envelope-o" ></i> bose@eurogulfsafety.com </p>
                                
                            </div>
                          
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="client-section3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                       
                    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="client-item1 wow fadeInDown animated" data-wow-delay="0.2s">
                            <div class="client-content demo_img">
                            
                              <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d124402.89324249442!2d80.03056245918167!3d12.998028617959713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3a52601d1b5bbf71%3A0xbd335130ab6b1ace!2segsca!3m2!1d12.998038!2d80.10060299999999!5e0!3m2!1sen!2sin!4v1468910060191" width="800" height="330" frameborder="0" style="border:0" allowfullscreen></iframe>
                                
                            </div>
                           
                          
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="client-item1 wow fadeInDown animated" data-wow-delay="0.8s">
                            <div class="client-content demo_img sidelinkstyle">
                                  <h2 class="section-title3">CHENNAI</h2>
                                  <br />
                                   <p><i class="fa fa-home" ></i>  No:22, 2nd Floor Pammal Main Road. </p>
                                   <p>  Muthamizah Nagar, </p>
                                   <p>  Pammal, Chennai - 600 075 </p>
                                   <p>Tamil Nadu, India</p>
                                   <p><i class="fa fa-phone" ></i>  91-44-4858 7933 </p>
                                    <p><i class="fa fa-mobile" ></i> +91-8939 2468 02</p>
                                     <p><i class="fa fa-mobile" ></i>  +91-80154 18604</p>
                                    <p><i class="fa fa-envelope-o" ></i> contact@eurogulfsafety.com,</p>
                                    <p><i class="fa fa-envelope-o" ></i> bose@eurogulfsafety.com </p>
                                
                            </div>
                          
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
            </div>
        </div>
        
        
        
         <div class="client-section3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                       
                    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="client-item1 wow fadeInDown animated" data-wow-delay="0.2s">
                            <div class="client-content demo_img">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.3616731618763!2d77.28825031466495!3d8.266752302737052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b04f8b246820945%3A0x23b3cdfe6e9da31a!2sEuro+Gulf+Safety+Consultant+and+Academy!5e0!3m2!1sen!2sin!4v1499593094131" width="800" height="310" frameborder="0" style="border:0" allowfullscreen></iframe>
                       </div>
                    </div>
                </div>
                    
                    <div class="col-md-4">
                        <div class="client-item1 wow fadeInDown animated" data-wow-delay="0.8s">
                            <div class="client-content demo_img sidelinkstyle">
                                  <h2 class="section-title3">MULAGUMOODU</h2>
                                  <br />
                                   <p><i class="fa fa-home" ></i> 1st Floor, Moni Complex, </p>
                                 
                                   <p>  Near Thankamahal Auditorium,</p>
                                   <p> Azhagiyamandapam, </p>
                                   <p> Mulagumoodu - 629167, India </p>
                                  <p><i class="fa fa-phone" ></i>  91-44-4858 7933 </p>
                                   <p><i class="fa fa-mobile" ></i> +91-8939 2468 02 </p>
                                   <p><i class="fa fa-mobile" ></i> +91-80154 18604 </p>
                                   <p><i class="fa fa-envelope-o" ></i> contact@eurogulfsafety.com,</p>
                                    <p><i class="fa fa-envelope-o" ></i> bose@eurogulfsafety.com </p>
                                    
                                
                            </div>
                          
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        
        <div class="client-section3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                       
                    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="client-item1 wow fadeInDown animated" data-wow-delay="0.2s">
                            <div class="client-content demo_img">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d984.8185339420229!2d76.81669492920064!3d9.129693899590693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b0612a8d6120ead%3A0x8e03ae274cdcad39!2sEurogulfsafetyconsultant!5e0!3m2!1sen!2sin!4v1499688317280" width="800" height="280" frameborder="0" style="border:0" allowfullscreen></iframe>
                            
                            </div>
                           
                          
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="client-item1 wow fadeInDown animated" data-wow-delay="0.8s">
                            <div class="client-content demo_img sidelinkstyle">
                                  <h2 class="section-title3">KOTTAYAM</h2>
                                  <br />
                                   <p><i class="fa fa-home" ></i> PMN Arcade, </p>
                                   <p> 20th mile Kottayam to ponkunnanm road,</p>
                                  
                                   <p> Kottayam (district),Kerala. </p>
                                   <p> India.</p>
                                  <p><i class="fa fa-phone" ></i>  91-44-4858 7933 </p>
                                   <p><i class="fa fa-mobile" ></i> +91-8939 2468 02</p>
                                   
                                   <p><i class="fa fa-envelope-o" ></i> contact@eurogulfsafety.com,</p>
                                    <p><i class="fa fa-envelope-o" ></i> bose@eurogulfsafety.com </p>
                                    
                                
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
                            <a href="inspection">ReadMore</a>
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
 
<div class="padding_bottom"></div>

        
         <?php include("footer.php")?>
    
        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/custom.js"></script>
       