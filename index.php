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
	
		 <meta property="og:title" content="Laura Lariccia: Developpeuse Web" />
		<meta property="og:type" content="article" /> 
		<meta property="og:url" content="http://www.laura-lariccia.fr" /> 
		<meta property="og:image" content="images/" /> 
		<meta property="og:description" content="" /> 
		<meta property="og:site_name" content="" /> 
		<meta property="fb:admins" content="Facebook numeric ID" />
			
		<meta name="twitter:card" content="images/.png">
		<meta name="twitter:site" content="@laura"> 
		<meta name="twitter:title" content="">
		<meta name="twitter:description" content=""> 
		<meta name="twitter:creator" content="@author_handle">
		<meta name="twitter:image:src" content="images.png"> 

			<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
			<script>
				tinymce.init({
					selector:'textarea'
					});
			</script> 
			-->

		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&family=Raleway:wght@200;400&display=swap" rel="stylesheet">
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
						<a href="#home" class="nav_links"> <i id="iconeAbout" class="fas fa-home"></i><p id="linkAbout">About</p></a>
					</li>
					<li>
						<a href="#competences"class="nav_links"><i class="fas fa-file-alt"></i><p id="linkCV">CV </p></a>
					</li>
					<li> 
						<a href="#galerie" class="nav_links"> <i id="icone" class="far fa-images"></i><p id="linkGalerie">Galerie</p> </a>
					</li>
					<li>
						<a href="#contact" class="nav_links"><i class="fas fa-id-card"></i><p id="linkContact">Contact</p></a>
					</li>
				</ul>
			</nav>
			<div id="nav_liens">
				<ul>
					<li>
						<a href="mailto:laura.lariccia@gmail.com" title="E-Mail" class="nav_links popup_mail"><i class="far fa-envelope"></i></a>
					</li>
					<li>
						<a href="Images/logo.png" target="_blank" title="Télécharger CV" class="nav_links dll_CV"><i class="far fa-id-badge"></i></a>
					</li>
				</ul>
				
			</div>
	</header>
	<section id="bloc_contenu">
		<div id="home" class="bloc_home">
			<section id="p_contenu">
				<aside id="top_content">
					<h1>Développeuse Web <span
						class="txt-rotate"
						data-period="2500"
						data-rotate='[ "Front - End.", "Junior. " ]'></span>
				   </h1>
				</aside>
				<article div="p_resume">
					<div id="logo_Title">
						<img src="Images/Galerie/LogoLL.png" alt="logo Laura" class="logo">
					</div>
					<!-- Modifier les paragraphes de présentation + liens de contact ! -->
					 <span id="presentation">
						<p>Je suis Laura !</p>
						<p>Passionnée d'informatique et de dessin, il est naturel de m'être orientée vers un cursus universitaire dans le domaine de l'infographie et développement web. <br></p>
						<p>Vous pouvez me contacter par <a href="#contact">mail</a> ou par<a href="#contact"> les réseaux sociaux</a>.<br>
						N'hésitez pas à consulter mon CV</p>
					</span>
				</article>

				<aside id="bottom_content">
					<button id="btn_dll_CV">
						<a href="Images/logo.png" target="_blank" title="Télécharger CV" class="link_dll">Télécharger le CV</a>
					</button>
				</aside>
			</section>
		</div> 

		<!-- ---------FIN BLOC HOME--------- -->

		<div id="competences" class="bloc_competences">
			<h2> # Compétences </h2>
			<section id="exp_contenu">
					<!-- Compétences informatiques  -->
				<article id="comp_Pro">
					<!-- <i class="fas fa-desktop"></i> -->
					<div id="comp_prog">
								<!-- <h3>Programmation:  </h3> -->
								<figure><img src="Images/Logos/HTML5.png" title="HTML5" alt="HTML5"></figure>
									<figure><img src="Images/Logos/CSS3.png" title="CSS" alt="CSS"></figure>
									<figure><img src="Images/Logos/JavaScript.png" title="JavaScript" alt="JavaScript"></figure>
									<figure><img src="Images/Logos/PHP.png" title="PHP" alt="PHP"></figure>
									<figure><img src="Images/Logos/Mysql.png" title="MySQL" alt="MySQL"></figure>
							
								<!-- <h3> Logiciels :</h3> -->
									<figure><img src="Images/Logos/Photoshop.png" alt ="Photoshop"title="Photoshop"></figure>
									<figure><img src="Images/Logos/Illustrator.png" title="Illustrator"></figure>
									<figure><img src="Images/Logos/InDesign.png" title="InDesign"></figure>
						
								<!-- <h3>FrameWorks / CMSs </h3> -->
									<figure><img src="Images/Logos/WordPress.png" title="WordPress" alt="WordPress"></figure>
									<figure><img src="Images/Logos/Boostrap.png" title="Boostrap" alt="Boostrap"></figure>
									<!-- <figure class="workingProgress"><img src="Images/Logos/Sass.png" title="Sass" alt="Sass"><figcaption>*</figcaption></figure>
									<figure class="workingProgress"><img src="Images/Logos/Angular.png" title="Angular" alt="Angular" ><figcaption >*</figcaption></figure>  -->
							
								<!-- <h3>Outils :</h3> -->
									<figure><img src="Images/Logos/GitHub.png" alt="Git Hub" title="GitHub"></figure>
									<figure><img src="Images/Logos/Visual_Studio.png" title="Visual Studio" alt="Visual Studio"></figure>
									<figure><img src="Images/Logos/Codepen.png" title="Codepen"alt="Codepen"></figure>

					</div>
					
				</article>
				<!-- Compétences général  -->
				<article id="comp_Pri">
					<div id="experiences">
						<h3>Expériences :</h3>
						<div id="exp_left">
							<div class="titres_exp">
								
									<i class="fas fa-puzzle-piece"></i>
								<p class="ennoncer">AST Lor'N, Developpeuse Web<br>11/2018-11/2019</p>
							</div>	<!-- fin div titres_exp -->
							<div class="titres_exp">
								
								<i class="fas fa-puzzle-piece"></i>
							<p class="ennoncer">Projet Openclassroom,( Formation, DWJ )<br>2017-2018 </p>
						</div>	<!-- fin div titres_exp -->
						

						</div>
					</div>
					<div id="formations">
						<h3>Formations :</h3>
						<div id="exp_right">
							<div class="titres_formations">
								<p class="ennoncer">Developpeuse Web Junior, Openclassroom<br>2017-2018 </p>
									<i class="fas fa-puzzle-piece"></i>
								
							</div>	<!-- fin div titres_exp -->
							<div class="titres_formations">
								
								
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
						<button id="dll_CV">
						<a href="Images/CV/CV_Laura.pdf" target="_blank" title="Télécharger CV Laura" class="link_dll">CV au format PDF </a> <!-- modifier le lien avant l'upload du site -->
					</button>
	<span id="bottom_content">
		
				
				</span>
				</article>
			
			</section>
		</div>
		<!-- ---------FIN BLOC COMPETENCES--------- -->
		<div id="galerie" class="bloc_galerie">
			<h2> # Galerie </h2>
			<section id="illustrations">
				<aside id="intro_illustration">
					<p>Similes celsius nec dispexerint nec nec vastabant parvi hostes umquam poterat optandi nec inmorantur hostes citroque amici nec inveniri nec praedam aut quicquid si citroque momento citroque ultro citroque qui.</p>
				</aside>
				<div class="entrelignes"></div>
				<article id="all_cases">
						<figure class="projets_galerie">
						 <!--Diaporama et informations-->
							
							<img src="Images/Galerie/Sauvegardes/Laptop/home.png" id="carrousel" class="image_zoom" title="projet" al t="projet">
							
						
						<div class="legendes">
							<a href="#galerie" onclick="changeBg(-1)" , return false , id="chevron-l">
								<i id="chevrons-L" class="fa fa-chevron-left" aria-hidden="true"></i></a>
						
						
							<figcaption id="explicatif" class="texts_galerie"></figcaption>
						
							<a href="#galerie" onclick="changeBg(1)" , return false , id="chevron-r"> 
								<i id="chevrons-R" class="fa fa-chevron-right" aria-hidden="true"></i></a>
						</div>	
						</figure>
						<!-- fin images & carrousel -->
						
						<figure class="projets_galerie">
							<a href="www.projet1.laura-lariccia.fr">
								<img src="Images/Galerie/Projet1.PNG" class="image_zoom" title="projet" al t="projet">
							</a>
							<figcaption class="texts_galerie">Projet formation Openclassroom</figcaption>
						</figure>
						<figure class="projets_galerie">
							<a href="www.projet3.laura-lariccia.fr">
								<img src="Images/Galerie/Projet3.PNG" class="image_zoom" title="projet" al t="projet">
							</a>
							<div class="legendes">
								<figcaption class="texts_galerie">Projet formation Openclassroom</figcaption>
							</div>
						</figure>
						<figure class="projets_galerie">
							<a href="www.projet4.laura-lariccia.fr">
								<img src="Images/Galerie/Projet4.PNG" class="image_zoom" title="projet" al t="projet">
							</a>
							<div class="legendes">
								<figcaption class="texts_galerie">Projet formation Openclassroom</figcaption>
							</div>
						</figure>
						<figure class="projets_galerie">
							<a href="www.projet5.laura-lariccia.fr">
								<img src="Images/Galerie/Projet5.PNG" class="image_zoom" title="projet" al t="projet">
							</a>
							<div class="legendes">
								<figcaption class="texts_galerie">Projet formation Openclassroom</figcaption>
							</div>
						</figure>
				
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
		<div id="mentions"> Mentions Légal, Laura 2020 ©</div>
	</footer>
		</div>
		
	</section>
	
</body>

<!-- <script src="JavaScript/mail.js"></script> -->
<script src="JavaScript/carrousel.js"></script>
<script src="JavaScript/animationTitre.js" defer></script>
<script src="JavaScript/menuHeader.js" ></script>
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