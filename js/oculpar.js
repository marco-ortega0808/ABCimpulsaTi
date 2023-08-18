var clic = 1;

function mensaje(){ 
   if(clic==1){
        document.getElementById("whatsApp").style.display = "block";
        document.getElementById("call").style.display = "none";
        document.getElementById("email").style.display = "none";
        document.getElementById("color-sms").style.color="#25D366 !important";
        document.getElementById("color-email").style.color="#9a9996 !important";
        document.getElementById("color-tel").style.color="#9a9996 !important";
   } else{
        document.getElementById("whatsApp").style.display = "none";      
        clic = 2;
   }   
}
function correo(){ 
   if(clic==1){
        document.getElementById("whatsApp").style.display = "none";
        document.getElementById("call").style.display = "none";
        document.getElementById("email").style.display = "block";
        document.getElementById("color-email").style.color="#f5e400 !important";
        document.getElementById("color-sms").style.color="#9a9996 !important";
        document.getElementById("color-tel").style.color="#9a9996 !important";
   } else{
        document.getElementById("whatsApp").style.display = "none";
        clic = 2;
   }   
}

function telefono(){ 
    if(clic==1){
         document.getElementById("whatsApp").style.display = "none";
         document.getElementById("call").style.display = "block";
         document.getElementById("email").style.display = "none";
         document.getElementById("color-tel").style.color="#0071b8 !important";
         document.getElementById("color-email").style.color="#9a9996 !important";
         document.getElementById("color-sms").style.color="#9a9996 !important";
    } else{
         document.getElementById("whatsApp").style.display = "none"; 
         clic = 2;
    }   
 }