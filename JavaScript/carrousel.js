	var Diaporama={	
	sources:"",
	compteur:0,
	
		change: function(i){
			 this.compteur +=i;
				if( this.compteur >  this.sources.length-1){
					this.compteur=0;
				}
				if( this.compteur<0){
				  this.compteur= this.sources.length-1;
				}
				document.getElementById("carrousel").src=this.sources[ this.compteur];
				
			},

		init:function(tabImgs){
			 this.sources=tabImgs;
		}
	};

var diapo=["./Images/Galerie/Sauvegardes/Laptop/home.png","./Images/Galerie/Sauvegardes/Laptop/laptop_calcul.png","./Images/Galerie/Sauvegardes/Mobile/ResponsiveSite.png"];
var affichage=Object.create(Diaporama);
affichage.init(diapo);


//description sur les petites résolutions.
var tailleB=window.innerWidth; 
var petiteDiapo=[""];
var petiteA=Object.create(Diaporama);
petiteA.init(petiteDiapo);


if(tailleB <=900){
		
		pDroite.addEventListener("click",function(){
			petiteA.change(1);
		});
		pGauche.addEventListener("click",function(){
			petiteA.change(-1);
		});
	} 
else if( tailleB> 900){
	var droite=document.getElementById("chevrons-R");//récupération des boutons sur pc
	var gauche=document.getElementById("chevrons-L");//récupération des boutons sur pc

		droite.addEventListener("click",function(){
			affichage.change(1);
		});
		gauche.addEventListener("click",function(){
		affichage.change(-1);
		});
}// fin du if