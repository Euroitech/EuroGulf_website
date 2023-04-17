     
/*=============== CHECK ERROR ===================*/
(function($) {
    $.fn.checkerror = function(options) {
        var defaults={ errorClass: 'error', isEmpty:false,errorId:'' };
        var options = $.extend(defaults, options);
        var that=this,
            v=that.val(),
            $er=$(options.errorId),
            l=v.length;
        
        if(l==0)
        {
            that.addClass(options.errorClass);
            $er.html('<i class="fa fa-times" ></i> Should be Filled');
            return false; 
        }
        else if(that.hasClass(options.errorClass))
            return false; 
        else
            return true; 
        
        
        
    }
})(jQuery);

/*=============== VALIDATION ===================*/
(function($) {
    
    $.fn.validate = function(options) {
        
                 
        var defaults={
                    errorClass: 'error',
                    errorId:'',
                    url:'',
                    checkexit:false,
                    existmsg:'',
                    spanError:'error',
                    oldval:'',
                    minLen:4,
                    maxLen:15,
                    nospace:false,
                    type:'text'  // text,email,number,txtnum,all
                };
        var options = $.extend(defaults, options);
        var $this=this,
            o=options,
            $errortarget=$(o.errorId),
            elmerr=true;
        
        var keyup = function() {
            if(o.nospace)
                var string=no_space($this.val());
            else
                var string=singlespace($this.val());                        
            $this.val(string);            
            var l=len(string);     
            typeValidate(string,l); 
            
            if( o.checkexit )
            {        
                 if(elmerr==false)
                    $errortarget.html('<i class="fa fa-spinner fa-spin"></i> Checking').addClass(o.spanError);
            }
                                                        
        };
        
        
        
        
        var change=function()
        {
            if( o.checkexit )
            {        
                 if(elmerr==false)
                 isalreadyexist(); 
            }
           
        };
        var isalreadyexist=function()
        {
            var elmval=$this.val(),
                oldvalue=o.oldval;
            $.ajax({
                type:'POST',
                url:o.url,
                data:'value='+elmval+'&oldvalue='+oldvalue,
                beforeSubmit:  onprogress(), 
    			// uploadProgress: OnProgress(),
                success:function(response)
                {
                    if(parseInt(response)==0)
                    {
                        $this.removeClass(o.errorClass); 
                        $errortarget.html('<i class="fa fa-check" ></i> '+o.existmsg+' Available').removeClass(o.spanError);
                        
                    }
                    else
                    {
                        $this.addClass(o.errorClass); 
                        $errortarget.html('<i class="fa fa-times" ></i> '+o.existmsg+' exist').addClass(o.spanError);
                    }
                }
            });
            
        };
        
        var onprogress=function()
        {
            $errortarget.html('<i class="fa fa-spinner fa-spin"></i> Checking');
        }
        /*=========   string Length ===========*/
        var len=function(string)
        {
            return string.length;
        };
        var Msg=function()
        {
            var message='<i class="fa fa-times" ></i> Min '+o.minLen+' Max '+o.maxLen;
            return message;
        };
        /*=========   Type validate ===========*/
        var typeValidate=function(string,l)
        {
            var type=o.type;
            if(type=='text')
                textvalidate(string,l);
            if(type=='email')
                emailvalidate(string,l); 
            if(type=='number')
                numbervalidate(string,l); 
            if(type=='txtnum')
                txtnumvalidate(string,l); 
            if(type=='all')
                allvalidate(string,l); 
        };
        
        
        var textvalidate=function(string,l)
        {
            var filter = /^[a-z A-Z]{0,100}$/;
            if(!filter.test(string))
            {
                $this.addClass(o.errorClass); 
                $errortarget.html('<i class="fa fa-times" ></i> Alphabets Only').addClass(o.spanError);
                elmerr=true;
            }
            else if(l<o.minLen || l>o.maxLen)
            {
                $this.addClass(o.errorClass); 
                $errortarget.html(Msg()).addClass(o.spanError); 
                elmerr=true;
            }      
            else
            {
                $this.removeClass(o.errorClass); 
                $errortarget.html('').removeClass(o.spanError);
                elmerr=false;
            }
                    
        };
        var emailvalidate=function(string,l)
        {
            var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
            if(filter.test(string))
                {
                    $this.removeClass(o.errorClass); 
                    $errortarget.html('').removeClass(o.spanError);
                    elmerr=false;
                }
                else
                {
                    $this.addClass(o.errorClass); 
                    $errortarget.html('<i class="fa fa-times" ></i> Not a Valid Email').addClass(o.spanError);
                    elmerr=true;
                }
                    
        };  
        var numbervalidate=function(string,l)
        {
            var filter = /^[0-9]{6,10}$/;
            if(filter.test(string))
            {
                $this.removeClass(o.errorClass); 
                $errortarget.html('').removeClass(o.spanError); 
                elmerr=false;
            }
            else
            {
                $this.addClass(o.errorClass); 
                $errortarget.html('<i class="fa fa-times" ></i> Only Numbers').addClass(o.spanError);
                elmerr=true;
            }
                    
        };
        var txtnumvalidate=function(string,l)
        {
            var filter = /^[a-zA-Z 0-9]{0,100}$/;
            if(!filter.test(string))
            {
                $this.addClass(o.errorClass); 
                $errortarget.html('<i class="fa fa-times" ></i> Only Alphabets and Numbers').addClass(o.spanError);
                elmerr=true;
            }
            else if(l<o.minLen || l>o.maxLen)
            {
                $this.addClass(o.errorClass); 
                $errortarget.html(Msg()).addClass(o.spanError);
                elmerr=true;
            }      
            else
            {
                $this.removeClass(o.errorClass); 
                $errortarget.html('').removeClass(o.spanError); 
                elmerr=false;
            }
                    
        };
        var allvalidate=function(string,l)
        {
            if(l<o.minLen || l>o.maxLen)
            {
                $this.addClass(o.errorClass); 
                $errortarget.html(Msg()).addClass(o.spanError);
                elmerr=true;
            }      
            else
            {
                $this.removeClass(o.errorClass); 
                $errortarget.html('').removeClass(o.spanError); 
                elmerr=false;
            }
                    
        };
        /*================ Remove all Space =============*/
        var no_space=function(string)
        {
            var without_space = string.replace(/ /g, "");
            return without_space;
          //  var without_special_char = without_space.replace(/[^a-zA-Z 0-9]+/g, "");
        };
        var singlespace=function(string)
        {
            var space = string.replace(/  /g, " ");
            return space;
        }
        
        
        /*========== Initiating function============*/
        $this.keyup(keyup).change(change);
        
    }
})(jQuery);

