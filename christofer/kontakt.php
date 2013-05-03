<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>christofer's portfolio</title>
	<link href="http://fonts.googleapis.com/css?family=Merienda+One" rel="stylesheet" />
	<link href="christofer.css" rel="stylesheet" />
</head>

<!--Måste adda "role" på varje här sen-->

<body>
	
	<header> <!--Måste fixa hashtag-länkar här sen, kanske byta till <NAV>?-->
		<a href="./index.html"><img src="images/homelogo.png" alt="Startsidan" /></a> 
		<a href="./portfolio.html"><img src ="images/portfoliologo.png" alt="Portfolio"/></a>
		<a href="./about.html"><img src="images/aboutlogo.png" alt="About me"/></a>
		<a href="./kontakt.php"><img src="images/contactlogo.png" alt="Contact"/></a>
		<a href="./blog.html"><img src="images/bloglogo.png" alt="Blog"/></a>
		<a href="http://www.facebook.com/"><img src="images/fblogo.gif" alt="My Facebook page"/></a>
		<a href="http://www.twitter.com/"><img src="images/twitterlogo.jpg" alt="My Twitter page"/></a>
	</header>
	
	<!--Main-del för blogposter -->
	<div role="main"> 		
		<h2>simplicity is an art</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed adipiscing porttitor neque at semper. Ut cursus bibendum lacinia. Curabitur et tellus eget nibh suscipit gravida sed id elit. Etiam id nisl nisi. Sed laoreet arcu at tellus pellentesque consectetur. Nullam mi erat, sagittis in consectetur ac, lobortis non nibh. Duis tempor luctus varius. Maecenas tincidunt ligula vitae sem dictum gravida vitae sed erat. Sed id ornare dolor. Praesent imperdiet erat ut ipsum rutrum sodales. Praesent massa erat, pharetra a suscipit eu, mollis vitae est. Sed volutpat augue non turpis adipiscing et pretium arcu consequat. Nulla facilisi. Vivamus euismod sapien in magna posuere non vulputate odio feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mauris tellus, imperdiet a elementum nec, pellentesque ut dui. 
		</p>
	</div>
	
		<div role="main">
		<form action="kontakt.php" method="post">
			<fieldset>
				<legend>Vem är du?</legend>
				<p>
					<label for="uname">Namn:
						<strong class="required" title="Obligatorisk uppgift">*</strong>
					</label>
					<input type="text" name="uname" id="uname" required placeholder="Förnamn Efternamn" />
				</p>
				<p>
					<label for="umail">Mailadress:
						<strong class="required" title="Obligatorisk uppgift">*</strong>
					</label>
					<input type="email" name="uamail" id="umail" required placeholder="foo@bar.com" />
				</p>
			</fieldset>
			
			<fieldset>
			<legend>Meddelande</legend>
					<p>
						<label for="mmessage">Text:
							<strong class="required" title="Obligatorisk uppgift">*</strong>
						</label>
						<textarea id="mmessage" name="mmessage" required placeholder="Skriv ditt meddelande. Minst 25 tecken."></textarea>
					</p>
			</fieldset>
		
			<p>
			<input type="submit" value="Skicka" />
			</p>
		</form>
		
	</div>
	
	<footer>
		<small>&copy;Oskar Emilsson & Christofer Rudenmalm</small>
	</footer>
	
</body>
</html>