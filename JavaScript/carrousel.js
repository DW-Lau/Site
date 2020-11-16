	var Diaporama={	
	sources:"",
	textes:"",
	compteur:0,
	
		change: function(i){
			 this.compteur +=i;
				if( this.compteur >  this.sources.length-1&& this.compteur> this.textes.length-1){
					this.compteur=0;
				}
				if( this.compteur<0){
				  this.compteur= this.sources.length-1&&this.textes.length-1;
				}
				document.getElementById("carrousel").src=this.sources[ this.compteur];//affichage de l'image
				document.getElementById("explicatif").innerHTML=this.textes[this.compteur];//affichage de la légende
			},

		init:function(tabImgs,tabTextes){
			 this.sources=tabImgs;
			 this.textes=tabTextes;
		}
	};

var diapo=["./Images/Galerie/Sauvegardes/Laptop/home.png","./Images/Galerie/Sauvegardes/Laptop/laptop_calcul.png","./Images/Galerie/Sauvegardes/Mobile/ResponsiveSite.png"];
var description=["Le site ayant été supprimé, voici quelques captures d'écrans", "bla ","blo"];
document.getElementById("explicatif").innerHTML="AST Lor'N";
var affichage=Object.create(Diaporama);
affichage.init(diapo,description);


//description sur les petites résolutions.
var tailleB=window.innerWidth; 
var petiteDiapo=[""];
var petiteA=Object.create(Diaporama);
petiteA.init(petiteDiapo, description);


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