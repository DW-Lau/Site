//récupération menu
let barreMenu=document.getElementById('slider');
//récupération liens menu
let textAbout=document.getElementById('linkAbout');
let textGalerie=document.getElementById("linkGalerie");
let textCV=document.getElementById("linkCV");
let textContact=document.getElementById("linkContact");

//Changement de style
textAbout.style.display="none";
textGalerie.style.display="none";
textCV.style.display="none";
textContact.style.display="none";



barreMenu.addEventListener("mouseenter",function(){
  textAbout.style.display="inline";
  textGalerie.style.display="inline";
  textCV.style.display="inline";
  textContact.style.display="inline";
});
barreMenu.addEventListener("mouseleave",function(){
  textAbout.style.display="none";
  textGalerie.style.display="none";
  textCV.style.display="none";
  textContact.style.display="none";
});