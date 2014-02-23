$(document).ready(init);


function init(){
    
    $('#register-btn').click(validateReg);
    $('#login-btn').click(validateLogIn);
     numberRestrict();

     CheckPassword();

}



function numberRestrict(){
     $( "input[name=idnum]" ).keypress(function(evt) {
        
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
           
        }
        return true;
    });

}


function isEmpty(form, field){
    var x = document.forms[form][field].value;
    
    if (x == null || x == ""){
       
        $('#'+field).css('border-color', '#ff0000');

        $('#'+field).off('focus');
        $('#'+field).one('focus', function(){
            $(this).css('background-color', '#ffffff');
        
          
        });
        return true;
    }
    else{

        $('#'+field).css('border-color', 'black');
    }
    
    return false;
}       
                
function validateReg(event){
    var isInvalid = false;
    
    if(isEmpty('register-form', 'firstname'))
      isInvalid=true;
    if(isEmpty('register-form', 'lastname'))
        isInvalid=true;
    if(isEmpty('register-form', 'email'))
        isInvalid=true;
    if(isEmpty('register-form', 'regidnum'))
        isInvalid=true;
    if(isEmpty('register-form', 'regpassword'))
      isInvalid=true;  
  /*if(isEmpty('register-form', 'confirmPassword'))
      isInvalid=true; */



    if(isInvalid){

        event.preventDefault();
        return false;
    }       
}
        
function validateLogIn(event){
    var  isInvalid=false;

    if(isEmpty('login-form', 'idnum'))
        isInvalid=true;
    if(isEmpty('login-form', 'password'))
         isInvalid=true;
        
    if(isInvalid){
        event.preventDefault();
        return false;
    }
}
