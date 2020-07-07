<?php require_once('header.php') ?>
<header>
	<p>iOS Developer<br>UI &amp; UX Designer<br><span>New York City</span></p>
	<div id="contact-options">
		<a href="mailto:maurice@achtenhagen.me">Email</a>
		<a href="https://www.linkedin.com/in/achtenhagen" target="_blank">LinkedIn</a>
		<a href="https://github.com/achtenhagen" target="_blank">GitHub</a>
	</div>
	<div id="photo-credits">Photo by <a href="https://unsplash.com/@andersjilden">Anders Jildén</a> on <a href="https://unsplash.com/photos/nrLtvA05jk8">Unsplash</a></div>
</header>
<main>
	<h1>Portfolio</h1>
	<section id="portfolio">
		<div class="project">
			<h4>Bitcoin Price Chart</h4>
			<p>
				Bitcoin Price Chart compared the cost per transaction across different blockchains in an <i>easy on the eye fashion</i>. The user could toggle between a light and dark mode, making it very comfortable to read in any environment. This project was build from scratch using React (JavaScript library) and did not rely on any external dependencies.
			</p>
			<img id="bitcoin-price-chart" src="images/projects/crypto_price_chart.jpg" alt="Bitcoin Price Chart Screen" />
		</div>
		<div class="project">
			<h4>Limella 2.0</h4>
			<p>
				Designed to be a simple app that builds up a grid of your personal experiences. One important focus of this project was to create a meaningful on-boarding experience that emphasizes user privacy and security. The user experience of the first impression is the most critical in my opinion.
			</p>
			<div class="mobile-screenshots">
				<img src="images/projects/limella_v2_screen_01.jpg" alt="Limella 2.0 Onboarding Screen 1" />
				<div class="spacer"></div>
				<img src="images/projects/limella_v2_screen_02.jpg" alt="Limella 2.0 Onboarding Screen 2" />
				<div class="spacer"></div>
				<img src="images/projects/limella_v2_screen_03.jpg" alt="Limella 2.0 Onboarding Screen 3" />
			</div>
		</div>
		<div class="project">
			<h4>Limella</h4>
			<p>
				A social network designed to help people connect with each other, much like a dating site. The back-end of this project proved to be a challenge due to how the matching algorithm worked. This project taught me many of the design principles I use in my day-to-day work.
			</p>
			<img src="images/projects/limella.jpg" alt="Limella" />
		</div>
		<div class="project">
			<h4>Inferno News</h4>
			<p>
				Simple Twitter client for iOS devices with a heavy emphasis on minimalism. It aimed to take away some of the noise that holds Twitter back from having a great user experience. Using artificial intelligence, Inferno would take your Twitter timeline and transform it into a simple news stream, showing you only what’s relevant. The idea behind this project was to see how minimal an app could be, while still providing a great UX.
			</p>
			<div class="mobile-screenshots">
				<img src="images/projects/inferno_screen_01.jpg" alt="Inferno Screen 1" />
				<div class="spacer"></div>
				<img src="images/projects/inferno_screen_02.jpg" alt="Inferno Screen 2" />
				<div class="spacer"></div>
				<img src="images/projects/inferno_screen_03.jpg" alt="Inferno Screen 3" />
			</div>
		</div>
		<div class="project">
			<h4>Releasify</h4>
			<p>
				This application was live on the App Store from January 2016 to April 2017. The idea behind this project was to go against all odds and create an application that is designed to never be opened. This unique user experience challenge proved to be successful, despite the general idea of creating experiences that draw in the user’s attention as much as possible.
			</p>
			<div class="mobile-screenshots">
				<img src="images/projects/releasify_screen_01.jpg" alt="Releasify Screen 1" />
				<div class="spacer"></div>
				<img src="images/projects/releasify_screen_03.jpg" alt="Releasify Screen 2" />
				<div class="spacer"></div>
				<img src="images/projects/releasify_screen_03.jpg" alt="Releasify Screen 3" />
			</div>
		</div>
		<div class="project">
			<h4>Sea Bird</h4>
			<p>
				My very first mobile application. It was live on the webOS App Gallery in 2011 and quickly became the most downloaded application in its category. Sea Bird supported RSS and Atom news feeds and came bundled with an RSS repository, which was hosted on my own server. This allowed users to search for and rank content.
			</p>
			<img src="images/projects/seabird.jpg" alt="Sea Bird for webOS" />
		</div>
	</section>
	<div id="read-more">Read more about me <a href="about.php">here</a></div>
<?php require_once('footer.php') ?>