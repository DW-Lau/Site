<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<!-- Bonjour et bienvenu sur mon portfolio. Entièrement coder, sans framework,en HTML5/CSS3 et Javascript. 
	N'hésitez pas à me contacter pour tous renseignements.
	Laura  -->
<head>
	
	<meta charset="utf-8"/>

		<meta name="description" content="Portfolio">

		<meta name="keywords" content="Portfolio, galerie, developpeur, web, Developpeuse, graphiste, design, cv, laura,lariccia, font, front end" />
<!--			
			<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
			<script>
				tinymce.init({
					selector:'textarea'
					});
			</script> 
			-->

		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Poppins&family=Quicksand&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="CSS/styles.css">
		<link rel="stylesheet" type="text/css" href="CSS/header.css">

		<title>Laura Lariccia: Developpeuse Web.</title>
</head>
<body>
	<header>
			<nav id="slider">
				<ul>
					<li>
						<a href="#home" class="nav_links"> <i  title="Accueil" class="fas fa-home"></i></a>
					</li>
					<li>
						<a href="#competences" class="nav_links"><i title="CV" class="fas fa-file-alt"></i></a>
					</li>
					<li> 
						<a href="#galerie" class="nav_links"> <i title="Galerie"  class="far fa-images"></i></a>
					</li>
					<li>
						<a href="#contact" class="nav_links"><i  title="Contact" class="fas fa-id-card"></i></a>
					</li>
				</ul>
			</nav>
	</header>
	<section id="bloc_contenu">
		<div id="home" class="bloc_home">
			<section id="p_contenu">
				
					<div id="banniere">
						<h1>Developpeuse Web Front-End<br>Junior </h1>
					</div>	 
				
				<article id="home_Main">
				<aside id="bloc_logo">
				<img src="Images/Galerie/LogoLL.png" alt="logo Laura" class="logo">
				</aside>
					<div id="presentation">
						<p>
							Bonjour et bienvenu .<br>
							Je m'appelle Laura L, retrouvez <a href="#competences" class="liens_Home">mon parcours</a> et<a href="#competences" class="liens_Home"> mes projets </a>dans les lignes qui suivent.
							<br>
							Pour toutes questions, ou compléments d'informations: <a href="#contact" class="liens_Home">Mail</a> ou <a href="#contact" class="liens_Home">Réseaux sociaux</a>.
						</p>
					
					<button class="dll_CV">
						<a href="Images/logo.png" target="_blank" title="Télécharger CV">CV disponible ici</a>
					</button></div>
				</article>
			</section>
		</div> 

		<!-- ---------FIN BLOC HOME--------- -->

		<div id="competences" class="bloc_competences">
			<h2> # Compétences </h2>
			<section id="exp_contenu">
					<!-- Compétences informatiques  -->
				<aside id="comp_Pro">
						<h4>Front</h4>
						<div class="techno front">
							<i class="fab fa-html5"></i>
							<i class="fab fa-css3-alt"></i>
							<i class="fab fa-js"></i>
					
						</div>
					
						<div class="techno end">
							<h4>End</h4>
							<i class="fab fa-php"></i>
							<img src="Images/Icones_Logos/Vector_MySQL.png" alt="MySQL" title="MySQL" class="iconesImages">
						</div>
						<div class="techno cms_Frame">
						<h4> Framework /CMS</h4>
							<i class="fab fa-sass"></i>
							<i class="fab fa-wordpress"></i>

						</div>
						<div class="techno software">
						<h4>Logiciels</h4>
							<img src="Images/Icones_Logos/Vector_Photoshop.png" alt="Photoshop" title="Photoshop" class="iconesImages">
							<img src="Images/Icones_Logos/Vector_Illustrator.png" alt=" Illustrator" title="Illustrator" class="iconesImages">
							<img src="Images/Icones_Logos/Vector_Indesign.png" alt="InDesign" title="InDesign" class="iconesImages">
							<img src="Images/Icones_Logos/Figma.png" alt=" Figma" title="Figma" class="iconesImages">
						</div>
						<div class="techno outils">
						<h4>Outils</h4>
							<i class="fab fa-github"></i>
							<i class="fab fa-codepen"></i>

						</div>
					<!-- <div id="comp_prog">
								 <h3>Programmation:  </h3>
								<div><img src="Images/Logos/HTML5.png" title="HTML5" alt="HTML5"></div>
									<div><img src="Images/Logos/CSS3.png" title="CSS" alt="CSS"></div>
									<div><img src="Images/Logos/JavaScript.png" title="JavaScript" alt="JavaScript"></div>
									<div><img src="Images/Logos/PHP.png" title="PHP" alt="PHP"></div>
									<div><img src="Images/Logos/Mysql.png" title="MySQL" alt="MySQL"></div>
							
								 <h3> Logiciels :</h3> 
									<div><img src="Images/Logos/Photoshop.png" alt ="Photoshop"title="Photoshop"></div>
									<div><img src="Images/Logos/Illustrator.png" title="Illustrator"></div>
									<div><img src="Images/Logos/InDesign.png" title="InDesign"></div>
						
								 <h3>FrameWorks / CMSs </h3>
									<div><img src="Images/Logos/WordPress.png" title="WordPress" alt="WordPress"></div>
									<div><img src="Images/Logos/Boostrap.png" title="Boostrap" alt="Boostrap"></div>
								 <div class="workingProgress"><img src="Images/Logos/Sass.png" title="Sass" alt="Sass"><figcaption>*</figcaption></div>
									<div class="workingProgress"><img src="Images/Logos/Angular.png" title="Angular" alt="Angular" ><figcaption >*</figcaption></div> 
							
								<h3>Outils :</h3> 
									<div><img src="Images/Logos/GitHub.png" alt="Git Hub" title="GitHub"></div>
									<div><img src="Images/Logos/Visual_Studio.png" title="Visual Studio" alt="Visual Studio"></div>
									<div><img src="Images/Logos/Codepen.png" title="Codepen"alt="Codepen"></div>

					</div> -->
					
				</aside>
				<!-- Compétences général  -->
				<article id="comp_Pri">
					<div id="experiences">
						<h3>Expériences :</h3>
						<div id="exp_left">
								
								<!-- <i class="far fa-dot-circle"></i> -->
								<p class="ennoncer">AST Lor'N, Developpeuse Web<br>11/2018-11/2019</p>
							
								<!-- <i class="far fa-dot-circle"></i> -->
								<p class="ennoncer">Projet Openclassroom,( Formation, DWJ )<br>2017-2018 </p>
							
						</div>
					</div>
					<div id="formations">
						<h3>Formations :</h3>
						<div id="exp_right">
							<div class="titres_formations">
							<i class="far fa-dot-circle"></i>	<p class="ennoncer">Developpeuse Web Junior, Openclassroom<br>2017-2018 </p>
								
								
							</div>	<!-- fin div titres_exp -->
							<div class="titres_formations">
								
								<i class="far fa-dot-circle"></i>
							<p class="ennoncer">Licence Image et Son Numériques <br>2011-2012</p><i class="fas fa-puzzle-piece"></i>
						</div>	<!-- fin div titres_exp -->
						

						</div>
					</div>
					<div id="comp_savoir">
						<h3 class="title_exep">Compétences :</h3>
						<div id="savoir_faire">
							<ul>
								<li>
									<span><i class="fas fa-check"></i></span> Découpe et intégration de maquette.
								</li>
							</ul>
							<ul>
								<li>
									<span><i class="fas fa-check"></i></span> Applications responsiv.
								</li>
							</ul>
							<ul>
								<li>
									<span><i class="fas fa-check"></i></span> Flexbox et MediaQueries
								</li>
							</ul>
							
						</div>
						<div id="savoir_etre">
							<ul>
								<li>
									<span><i class="fas fa-check"></i></span> Respect du cahier des charges 
								</li>
							</ul>
						</div>
					</div>
						<button class="dll_CV">
						<a href="Images/CV/CV_Laura.pdf" target="_blank" title="Télécharger CV Laura" >CV au format PDF </a> <!-- modifier le lien avant l'upload du site -->
					</button>

				</article>
			
			</section>
		</div>
		<!-- ---------FIN BLOC COMPETENCES--------- -->
		<div id="galerie" class="bloc_galerie">
			<h2> # Galerie </h2>
			<section id="illustrations">
				<aside id="intro_illustration">
					<p>Technologies et résumés des projets sont disponbles directement sur les vignettes, depuis leur coin gauche. D'autres projets viendront prochaimenent compléter cette liste, n'hésitez pas à la consulter régulièrement</p>
				</aside>
				<div class="entrelignes"></div>
				<article id="all_cases">
					<div class="tuilles">
						<div class="overlay">
								<h5>AST Lor'N </h5>
							<p>
								Depuis le 1er Janvier 2020, "AST Lor'N" est devenue "AGESTRA". </br>
								Le site n'étant donc plus d'actualité, vous pouvez consulter quelques screens shoots depuis ce diaporama.</br>
								Dans un soucis de confidencialité, les textes ont été floutés.</br>
								(CMS: Wordpress - JS-PHP)
							</p>
							</div>	
						<span class="chevrons">
							<a href="#galerie" onclick="changeBg(-1)" , return false , id="chevron--left">
								<i id="chevrons-L" class="fa fa-chevron-left" aria-hidden="true"></i>
							</a>
						</span>	
							<img src="Images/Galerie/Sauvegardes/Laptop/home.png" id="carrousel" class="photos--vignettes" title="AST Lor'n" alt="AST Lor'N">
						<span class="chevrons">
							<a href="#galerie" onclick="changeBg(1)" , return false , id="chevron--right"> 
								<i id="chevrons-R" class="fa fa-chevron-right" aria-hidden="true"></i>
							</a>
						</span>
					</div>
<!--Projet OPENCLASSROOM 1 -->
					 <div class="tuilles"> 
						<div class="overlay">
								<h5 > WebAgency</h5>
								<p> (Projet 1 OpenclassRooms)</br>
									A partir d'une maquette, créer le site de la WebAgency. Site responsive</br> (HTML/CSS)</p>
							</div>
						<a href="http:www.projet1.laura-lariccia.fr"  target="_blank" >
							<img src="Images/Galerie/Projet1.PNG" class="photos--vignettes" title="WebAgency" alt="WebAgency">
						</a>
					</div>
<!--Projet OPENCLASSROOM 3 -->
					<div class="tuilles">
						<div class="overlay">
								<h5>Vélib'</h5>
									<p>
										(Projet 3 OpenclassRooms) Réaliser un site de réservation de vélo ( Vélib' Paris, lors de l'évaluation). </br>
										L'API est re-centré sur la ville de Lyon (nouvelle évaluation) </br>(HTML/CSS-JS/JSON).</br>
										<strong>Une nouvelle version du site est en cours</strong> 
									</p>
						</div>
						<a href="www.projet3.laura-lariccia.fr"  target="_blank">
							<img src="Images/Galerie/Projet3.PNG" class="photos--vignettes" title="Vélib'Paris " alt="Vélib' Paris">
						</a>
					</div>
<!--Projet OPENCLASSROOM 4 -->
					<div class="tuilles">
						<div class="overlay">
							<h5>Billet simple pour l'Alaska</h5>
								<p>
									(Projet 4 OpenclassRooms) Réaliser un blog pour un écrivain : Jean-RocheFort, Billet simple pour l'Alaska.</br> 
									Création de compte administrateur et utilisateurs. Création et suppression de messages et commentaires. </br>(HTML/CSS-JS-PHP-MySQL) </br>
									<a href="https://github.com/DW-Lau/Projet4" class="overlay__liens">GIT</a>du projet. 
								</p>
						</div>
						<a href="www.projet4.laura-lariccia.fr"  target="_blank">
							<img src="Images/Galerie/Projet4.PNG" class="photos--vignettes" title="Billet simple pour l'Alaska" alt="Billet simple pour l'Alaska">
						</a>
					</div>
<!--Projet OPENCLASSROOM 5 -->
					<div class="tuilles">
						<div class="overlay">
							<h5>Projet Libre : Blender Open Projects</h5>
								<p>
									(Projet 5 OpenclassRooms) Fondation Blender: Présentation des films Blender Open Projects.
									Création de compte administrateur et utilisateurs, sélection d'avatar. Création et suppression de messages et commentaires. </br>(HTML/CSS-JS-PHP-MySQL) </br>
									<a href="https://github.com/DW-Lau/Projet5" class="overlay__liens">GIT</a>du projet. 
								</p>
							</div>
						<a href="www.projet5.laura-lariccia.fr"  target="_blank">
							<img src="Images/Galerie/Projet5.PNG" class="photos--vignettes" title="Projet Libre : Blender Open Projects" alt="Projet Libre : Blender Open Projects">
						</a>
					</div>

				</article>
			</section>
			</div>
		<!-- ---------FIN BLOC GALERIE--------- -->
		<div id="contact" class="bloc_contacts">
			<h2> # Contacts </h2>
			<article id="infosContacts">
				<div id="formulaire">
					<h3>Contact</h3>
					<p>Contacter moi directement par email ici, ou par téléphone ( disponible sur mon CV)</p>
					<form id="formulaire_Contact" action="php/mail.php" name="formContact" method="post" >
						<span class="names_champ">
								<label for="nom">Nom * </label>
								<input type="text" id="nom" name="nom"  />

								<label for="prenom">
									 Prénom *
								</label>
								<input type="text" id="prenom" name="prenom"  />
							</span>
							<span class="infos_champ">
								<label for="mail">
									Email *
								</label>
								<input type="email" id="mail" name="mail"  />

								<label for="telephone">
									 Téléphone
								</label>
								<input type="tel" id="telephone" maxlength="20" name="telephone" />
							</span>


								<label for="objet">
									 Objet *
								</label>
								<input type="text" id="objet" maxlength="100"name="objet" />

								<label for="message">
									 Message *
								</label>
								<textarea name="message"  id="message" name="message"></textarea>
                                <?php if(array_key_exists(('erreurs'),$_SESSION) ):?>
                                    <div id="messageErreur">
                                        <?= implode('<br>', $_SESSION['erreurs']);?>

                                    </div>
                                <?php unset($_SESSION['erreurs']); endif; ?>
							<input  id="btnEnvoie" type="submit" value="Envoyer">
						</form>
				</div>
				<div id="reseauxContact">
					<h3>Réseaux :</h3>
					<a href="" target="_blank"> <!-- Lien  LinkedIn-->
						<i class="fab fa-linkedin"></i>
					</a>
					<a href="" target="_blank"> <!-- Lien Discord-->
						<i class="fab fa-discord"></i>
					</a>
					
					<a href="" target="_blank"> <!-- Lien CodePen-->
						<i class="fab fa-codepen"></i>
					</a>
					<a href="" target="_blank"> <!-- Lien GitHub -->
						<i class="fab fa-github"></i>
					</a>
				</div>
				<div id="localisation">
					<h3>Où me trouver :</h3>
					<div id="map"></div>
					<!-- Api google Maps-->

				</div>
			</article>
			<footer>
			<div id="mentions"> <a href="mentions.html">Mentions Légal</a> , Laura 2021 ©</div>
		</footer>
		</div>
		
	</section>
	
</body>

<!-- <script src="JavaScript/mail.js"></script> -->
<script src="JavaScript/carrousel.js"></script>
<script src="JavaScript/animationTitre.js" defer></script>
<script>
				  

let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 49.51897906966993, lng: 5.767401379060701 },
    zoom: 12,
  });
}	</script>
				  <script async defer src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap"
				  type="text/javascript"></script>
</html>