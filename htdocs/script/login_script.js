$(document).ready(init);


function init(){
    
    $('#register-btn').click(validateReg);
    $('#login-btn').click(validateLogIn);
     numberRestrict();
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
       
        $('#'+field).css('background-color', '#faa5a5');
        $('#'+field).off('focus');
        $('#'+field).one('focus', function(){
            $(this).css('background-color', '#ffffff');
        });
        return true;
    }
    
    return false;
}       
                
function validateReg(event){
    var hasEmpty = false;
    
    if(isEmpty('register-form', 'firstname'))
      hasEmpty=true;
    if(isEmpty('register-form', 'lastname'))
        hasEmpty=true;
    if(isEmpty('register-form', 'email'))
        hasEmpty=true;
    if(isEmpty('register-form', 'regidnum'))
        hasEmpty=true;
    if(isEmpty('register-form', 'regpassword'))
      hasEmpty=true;  
    
    if(hasEmpty){

        event.preventDefault();
        return false;
    }       
}
        
function validateLogIn(event){
    var  hasEmpty=false;

    if(isEmpty('login-form', 'idnum'))
        hasEmpty=true;
    if(isEmpty('login-form', 'password'))
         hasEmpty=true;
        
    if(hasEmpty){
        event.preventDefault();
        return false;
    }
}