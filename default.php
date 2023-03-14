<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="index.css">
	</head>

	<body>
		<div class="header">
			<div class="nav">
				<ul>
					<li class="list active" id="accueil">
						<a href="#">
							<span class="icon">
								<ion-icon name="home-outline"></ion-icon>
							</span>
							<span class="text">Home</span>
						</a>

					</li>
				
					<li class="list " id="Healthics">
						<a href="#">
							<span class="icon">
								<ion-icon name="bandage-outline"></ion-icon>
							</span>
							<span class="text">Healthics</span>
						</a>					
					</li>
				
					<li class="list" id="ASAP">
						<a href="#">
							<span class="icon">
								<ion-icon name="car-outline"></ion-icon>
							</span>
							<span class="text">ASAP</span>
						</a>					
					</li>
				
					<li class="list" id="Groupe">
						<a href="#">
							<span class="icon">
								<ion-icon name="people-circle-outline"></ion-icon>
							</span>
							<span class="text">Groupe</span>
						</a>					
					</li>
				
					<li class="list" id="autre">
						<a href="#">
							<span class="icon">
								<ion-icon name="add-circle-outline"></ion-icon>
							</span>
							<span class="text">Autre</span>
						</a>
					</li>
					<div class="indicator"></div>
				</ul>
			</div>
		</div>
		<div class="corp">
			<div class="card active" id=6>
				<div class="circle" style="--clr:#6BDBB9">
					<img src="img/santeconnect.png" class="logo">
				</div>
				<div class="content">
					<h2>SanteConnect</h2>
					<p>SanteConnect est une plateforme regroupant plusieurs entreprises présentant des applications destinées à aider les gens. Parmi elles, ASAP, Healthics ont pour objectif de simplifier les démarches durant un appel d'urgence pour le rendre plus intuitif et rapide.</p>
				</div>
			<img src="img/santeconnect.png" class="product_img">
			</div>
			<div class="card " id=8>
				<div class="circle" style="--clr:#1F3BC6">
					<img src="img/Healthics.png" class="logo">
				</div>
				<div class="content">
					<h2>Healthics</h2>
					<p>L'entreprise Healthics et son application SanTell ont pour but de simplifier les démarches de santé de l'utilisateur. Cette application se présente sous la forme d'un chat vocal, mettant en relation la personne utilisant le service, et une intelligence artificielle, qui envoie un professionnel de santé adéquat sur les lieux de l'incident.</p>
					<a href="http://healthics.santeconnect.fr">En savoir +</a>
				</div>
			<img src="img/Santel.png" class="product_img">
			</div>
			<div class="card" id=7>
				<div class="circle" style="--clr:#4A9FE0">
					<img src="img/ASAP.png" class="logo">
				</div>
				<div class="content">
					<h2>ASAP</h2>
					<p>L'entreprise ASAP et son application Guard Dogo ont pour objectif de venir en aide aux personnes qui en ont besoin. Notre application se présente sous la forme d'une messagerie vous mettant en relation avec notre intelligence artificielle, pour vous guider vers le service de secours adapté.</p>
					<a href="http://asap.santeconnect.fr">En savoir +</a>
				</div>
			<img src="img/guard_dogo.png" class="product_img">
			</div>
			
			<div class="card " id=9>
				<div class="circle" style="--clr:#7318DB">
					<img src="img/groupe.png" class="logo">
				</div>
				<div class="content">
					<h2>Groupe</h2>
					<p>discour fictif des individus</p>
				</div>
			<img src="img/groupe.png" class="product_img">
			</div>
			<div class="card " id=10>
				<div class="circle" style="--clr:#CE2F16">
					<img src="img/JPnoUta.png" class="logo">
				</div>
				<div class="content">
					<h2>JP No Uta</h2>
					<p>discourd fictif sur le mp3 Jp no Uta</p>
				</div>
			<img src="img/JPnoUta.png" class="product_img">
			</div>

			
		</div>
	<script>
		const list =document.querySelectorAll("li.list")
		const affi =document.querySelectorAll("div.card")
		function activeLink(){
			list.forEach((item)=>item.classList.remove('active'));
			affi.forEach((item)=>item.classList.remove('active'));
			this.classList.add('active');
			var idelt= this.getAttribute('id');
			if (idelt=="accueil"){
				var elem =document.getElementById('6')				
			}else if(idelt=="ASAP"){
				var elem =document.getElementById('7')	
			}else if(idelt=="Healthics"){
				var elem =document.getElementById('8')	
			}else if(idelt=="Groupe"){
				var elem =document.getElementById('9')	
			}else if(idelt=="autre"){
				var elem =document.getElementById('10')	
			}
			elem.classList.add('active')
		}
		list.forEach((item)=>item.addEventListener('click',activeLink));
	</script>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	</body>
</html>