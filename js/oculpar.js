var clic = 1;

function mensaje(){ 
   if(clic==1){
        document.getElementById("whatsApp").style.display = "block";
        document.getElementById("call").style.display = "none";
        document.getElementById("email").style.display = "none";
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
    } else{
         document.getElementById("whatsApp").style.display = "none"; 
         clic = 2;
    }   
 }