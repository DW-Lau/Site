let formulaire=document.getElementById("formulaire_Contact");

formulaire.addEventListener("submit",function(e){

    e.preventDefault();
    let erreur= "Une erreur est survenue, veuillez vérifier vos informations.";

    let name = document.getElementById("nom");
    let prenom=document.getElementById("prenom");
    let tel =document.getElementById("telephone");
    let adMail=document.getElementById("mail");
    let ob=document.getElementById("objet");
    let message=document.getElementById("message");
    let messageError=document.getElementById("messageError");

const nomPrenomTest= /[^0-9]/ ;
const telTest=/[0-9]{10}/gmu;
const mail=/^[\w\-]+(\.[\w\-]+)*@[\w\-]+(\.[\w\-]+)*\.[\w\-]{2,}$/;

console.log(nomPrenomTest.test(name));
console.log(telTest.test(tel)); 
console.log(mail.test(adMail));
  
console.log(name.value);
console.log(tel.value); 
console.log(adMail.value);
       
});

// if (name||prenom||adMail||ob||message!==""){
    //     
    //     if( name.value== nomPrenomTest){
    //         alert("votre nom correspond");
    //          alert("formulaire envoyer");
    //     }else{
    //         return  messageError.innerHTML='Une erreur est survenue';
    //     }
       
       
    // }else{
    //       messageError.innerHTML='Une erreur est survenue';
      
    // }

    //

        // if (erreur){
        //     e.preventDefault();
        //     document.getElementById("error")
        // }else{
        //  alert('Formulaire envoyé');
        // }