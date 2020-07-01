<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="julienmastrangelo.css">
	<title>Julien Mastrangelo</title>
</head>
<body>
	<header>
		<h1><a href="#">Julien Mastrangelo</a></h1>
		<nav>
			<ul>
				<li><a href="#education">Education</a></li>
				<li><a href="#experience">Experience</a></li>
				<li><a href="#skills">Skills</a></li>
				<li><a href="#projects">Projects</a></li>
				<li><a href="#hobbies">Interests</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
		</nav>
	</header>

	<section id="block1">
		<div class="presentation">
			<div id="profile_picture"></div>
			<div class="details">
				<h2>Julien Mastrangelo</h2>
				<h3>STUDENT ENGINEERING</h3>
				<p><strong>Email: </strong> <a href="mailto:julien.mastrangelo@etu.emse.fr">julien.mastrangelo@etu.emse.fr</a></p>
				<p><strong>City: </strong>Aix-en-Provence, France</p>
				<p><strong>Age: </strong>20</p>
			</div>
			<ul class="social_network">
				<li class="linkedin">
					<a href="https://www.linkedin.com/in/julien-mastrangelo-5b72a8194/"><img class="icon" src="img/linkedin.png" alt="linkedin" title="LinkedIn"></a>
				</li>
				<li id="github">
					<a><img class="icon" src="img/github.png" alt="github" title="github"></a>
				</li>
				<li id="pdf">
					<a href="Julien_MASTRANGELO_CV_2020_English.pdf"><img class="icon" src="img/pdf.png" alt="pdf document" title="pdf version of my CV"></a>
				</li>
				<li id="mailto">
					<a href="mailto:julien.mastrangelo@etu.emse.fr"><img class="icon" src="img/email.png" alt="mail" title="e-mail me!"></a>
				</li>
			</ul>
		</div>		
	</section>

	<section id="brief">
		<h2>Hello! I'm Julien</h2>
		<p>I am a rigorous and motivated engineering student from l’Ecole des Mines de St-Etienne. I am recognized for my ability to fit into a work team. I have a taken part in a variety of project such as building a model car capable of staying between 2 laser beams independently or creating a business plan for a new indoor connected warehouse. I am looking for a position in an R&D department or in a laboratory, where I can use my creativity and my technical skills.</p>
	</section>

	<section id="education" class="history-timeline-container">
		<h2 class="title">Education</h2>

		<ul class="timeline">
			<!--<div class="bar">.</div>  bar of the timeline-->
			<li class="timeline_element" id="mines">
				<div class="container left">
					<p class="date">2019 - 2023</p>
					<h3 class="degree">Engineer degree</h3>
				</div>
				<div class="container right">
					<h3 class="name"><a href="https://www.mines-stetienne.fr/" target="_blank">Mines St-Etienne <img src="img/web-page.png" class="link" /></a></h3>
					<p class="description">Engineering degree in microelectronics & computer science.</p>
					<p class="hidden">Analogic electronics, digital electronics. Linux, C, signal mathematics, signal processing, probabilities, linear system theory, algorithmics and programming, microcontroller systems, corporate vision and strategy, relationship development.</p>
					<p class="read">Read more</p>
				</div>
			</li>
			<li class="timeline_element" id="prep">
				<div class="container left">
					<p class="date">2017 - 2019</p>
					<h3 class="degree">Bac +2 (120 ECTS)</h3>
				</div>
				<div class="container right">
					<h3 class="name">Prep school, lycée Pothier</h3>
					<p class="description">MPSI, MP*<br/>
					Two-year intensive preparation for the national competitive entrance exams to leading French engineering schools. Maths, physics, computer science.</p>
				</div>
			</li>
			<li class="timeline_element" id="bac">
				<div class="container left">
					<p class="date">2017</p>
					<h3 class="degree">Baccalaureate</h3>
				</div>
				<div class="container right">
					<h3 class="name">Lycée Jean Zay</h3>
					<p class="description">With honours, maths, physics, natural sciences, intensive English.</p>
				</div>
			</li>
		</ul>
	</section>

	<section id="experience" class="history-timeline-container">
		<h2 class="title">Experience</h2>
		<ul class="timeline">
			<li class="timeline_element" id="NPS">
				<div class="container left">
					<p class="date">2020</p>
					<h3 class="job">Trainee</h3>
				</div>
				<div class="container right">
					<h3 class="name">NPS Diesel</h3>
					<p class="description">I worked with a technical team to repair diesel power generators on yachts in Antibes, France.</p>
				</div>
			</li>
			<li class="timeline_element" id="digger">
				<div class="container left">
					<p class="date">2019</p>
					<h3 class="job">Digger</h3>
				</div>
				<div class="container right">
					<h3 class="name">Departmental Archaeology Service of Aveyron, France</h3>
					<p class="description">Excavation traineeship. I worked as a volunteer on a protohistoric excavation site from Iron Age.</p>
				</div>
			</li>
			<li class="timeline_element" id="summer_jobs">
				<div class="container left">
					<p class="date">2019, 2018, 2017 summers</p>
					<h3 class="job">Summer jobs</h3>
				</div>
				<div class="container right">
					<h3 class="name">Val de France, John Deere</h3>
					<p class="description">Cleaning a high school in compliance with health department regulations. I packed spare parts of tractor engines.</p>
				</div>
			</li>
			<li class="timeline_element" id="CNRS">
				<div class="container left">
					<p class="date">2014</p>
					<h3 class="job">Trainee</h3>
				</div>
				<div class="container right">
					<h3 class="name">CNRS (French national centre of scientific research)</h3>
					<p class="description">Observation placement. I visited laboratories of the CNRS campus in Orléans.</p>
				</div>
			</li>
		</ul>
	</section>

	<section id="skills">
		<h2 class="title">Computer skills</h2>
		<ul>
			<li><img class="icon" src="img/c.png" /><p>C language</p></li>
			<li><img class="icon" src="img/python.png" /><p>Python 3</p></li>
			<li><img class="icon" src="img/html5.png" /><p>HTML5</p></li>
			<li><img class="icon" src="img/css3.png" /><p>CSS3</p></li>
			<li><img class="icon" src="img/sql.png"><p>SQL</p></li>
			<li><img class="icon" src="img/git.png" /><p>Git</p></li>
			<li><img class="icon" src="img/ocaml2.png" /><p>OCaml</p></li>
			<li><img class="icon" src="img/packet-tracer.png" /><p>Cisco Packet Tracer</p></li>
		</ul>
		
	</section>

	<section id="other_skills">
		
	</section>

	<section id="projects">
		<h2 class="title">Projects</h2>
		<p>les entreps, blockchain vote, voiture laser, site web perso</p>
		<div id="entrep">
			<h3>Les Entrepreunariales</h3>
			<img src="img/logo-les-entrep.png"/>
			<p></p>
		</div>
		<div id="car">
			<h3>Autonomous car model</h3>
			<img src="" id="car_pic"/>
			<a href="" class="code"></a>
		</div>
		<div id="website">
			
		</div>
	</section>

	<section id="hobbies">
		<h2 class="title">Interests</h2>
		<div class="content">	
			<article id="musician">
				<h3>Musician</h3>
				<p>I play the trumpet since I am 7 years old. I played an opera (Aïda from Verdi) in Orléans’s Zénith.<br/>
				I also play bass guitar and guitar.</p>
			</article>
			<article id="BDE">
				<h3>BDE</h3>
				<p>I am an active member of the BDE. This society organizes major events on the campus such as trips, journey...</p>
			</article>
			<article id="computer_science_society">
				<h3>Member of Minitel</h3>
				<p>Minitel is Mines St-Etienne's computer science and computer network society. The society gère le réseau de la résidence.</p>			
			</article>
		</div>
	</section>

	<section id="contact">
		<h2>Contact</h2>
		<div class="content">
			<form method="post" action="contact.php">
					<label for="name"></label>
					<input id="name" type="text" name="name" placeholder="Name *" maxlength="63" required class="input">
					<label for="email"></label>
					<input id="email" type="email" name="email" placeholder="E-mail *" maxlength="127" required class="input">
					<label for="phone"></label>
					<input id="phone" type="tel" name="phone" placeholder="Phone" maxlength="15" class="input">
					<textarea id="message" name="message" placeholder="Your message (1023 characters max.)" maxlength="1023" required class="input"></textarea>
					<input type="submit" value="Submit" id="submit">
			</form>
			<div class="presentation">
				<div class="details">
					<h2>Julien Mastrangelo</h2>
					<h3>STUDENT ENGINEERING</h3>
					<p><strong>Email: </strong> <a href="mailto:julien.mastrangelo@etu.emse.fr">julien.mastrangelo@etu.emse.fr</a></p>
				</div>
				<ul class="social_network">
					<li class="linkedin">
						<a href="https://www.linkedin.com/in/julien-mastrangelo-5b72a8194/"><img class="icon" src="img/linkedin.png" alt="linkedin" title="LinkedIn"></a>
					</li>
				</ul>
			</div>
		</div>
	</section>

	<footer>
		<h3>Credits</h3>
		<ul>
			<li>Icons made by <a href="https://www.flaticon.com/authors/iconixar" title="iconixar">iconixar</a> and <a href="https://www.flaticon.com/authors/pixel-perfect" title="Pixel perfect">Pixel perfect</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></li>
			<li>Background picture : © Cedric Daya</li>
		</ul>
	</footer>

	<script type="text/javascript" src="julienmastrangelo.js"></script>
</body>
</html>