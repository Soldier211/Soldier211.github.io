<!DOCTYPE html> <!-- dokument HTML5-->
<html lang="en-US"><!--jezyk strony-->
	<head>
		<meta charset = "UTF-8"><!--meta tag - informacje o naszym pliku-->
		<!--UTF-8 bardzo popoularny, zwykly zestaw znakow-->
		<meta name="description" content = "This is an awesome website">
		<meta name="author" content="Soldier211">
		<meta name="keywords" content="HTML, CSS, JavaScript"><!--slowa kluczowe-->
		<meta http-equiv="refresh" content="30"><!--odswieza strone co 30 sekund-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"><!--viewport - szerokosc urzadzenia, skala-->
		<base href="/" target="_blank"><!--bazowy adres url-->
		<!--charset,name,content - atrybuty, wlasciwosci-->
		<title>Soldier211's Website</title><!--tytul-widoczny jest na zakladce, zawiera tekst-->
		<link rel="stylesheet" href="style.css"><!--link do pliku css-->
		<link rel="icon" href="images/dark.png">
	</head>
	<body style = "background-color:rgb(10,10,10,0.7); color: white"><!--zawartosc naszej strony, ten znacznik jest tak zwanym dzieckiem tagu html-->
		<a href="#C4">Jump to Chapter 4</a>
		<a href="page2.html#C4">Jump to page 2 html</a>
		<h1 style="font-size:300%; text-align:center; border:2px solid dodgerblue;">Lubie placki</h1>
		<a href="https://www.google.com" target="_blank"><h1>Google's <b>Homepage</b></h1></a>
		<!--href dalemy link i jak nacisniemy na Google's Homepage przeniesie nas na google.com
		ale dzieki wlasciwosci target zostaje otwarta nowa karta-->
		<a href="page2.html">Page2</a>
		<iframe src="page2.html" title="page3html" width="100%" height="300"></iframe>
		<br>
		<a href="dir/page3.html">Page3</a>
		<br>
		<center><img src="images/omori.avif" alt="Omori" width="50%" height="auto" usemap="#friends"></center>
		<map name="friends">
			<area shape="circle" coords="239.5,151,200" title="Omori's friends" alt="Sunny" href="/" onclick="myFunction()">
			<!--default (defise entire region)-->
			<!-- dla poly podaje sie dokladne kordynaty-->
		</map>
		<header>
			<nav><!--zawiera linki-->
		
			</nav>
		
		
		
		</header>
		<hr>
		<main>
			<article><!--tu bedzie artykul-->
				<section>
					<aside>
						<div class="city">
							<h2>London</h2>
							<p>London is the capital of England</p>
						</div>
					</aside>
				<table>
					<tr>
						<th style="width:50%">Company</th>
						<th>Contact</th>
						<th>Country</th>
					</tr>
					<tr>
						<td>Alfreds Futterkiste</td>
						<td>Maria Anders</td>
						<td>Germany</td>
					</tr>
					<tr>
						<td>Centro comercial Moctezuma</td>
						<td>Francisco Chang</td>
						<td>Mexico</td>
					</tr>
				</table>
				<ul style="list-style-type:square;">
					<li>Coffee</li>
					<li>Tea</li>
					<li>Milk</li>
				</ul>
				<ol type="A">
					<li>Coffee</li>
					<li>Tea</li>
					<li>Milk</li>
				</ol>
				Lorem ipsum<div>I am a div</div> dolor sit amet.
				</section>
				<section>
					<form action="/action_page.php" method="post">
						<label for="fname">First name:</label><br>
						<input type="text" name="fname" value="John"><br><!--name - okresla nazwe pod jaka dane z tego zostana
						przeslane do serwera w formularzu-->
						<label for="lname">Last name:</label><br>
						<input type="text" name="lname" value="Doe"><br><br>
						<input type="submit" value="Submit"><!-- your input was received as 
						fname=John&lname=Doe , pozniej do sie odbiera za pomoca PHP-->
					</form>
				</section>
			
			</article>
		
		
		</main>
		<footer>
		
		
		
		</footer>
		<picture>
			<source srcset="images/omori.avif" media="(min-width:800px)" width="50%" height="auto">
			<source srcset="images/OIP.jpg" media="(min-width:600px)">
			<img src="images/dog.jpg">
		</picture>
		<blockquote cite="http://www.worldwildlife.org/who/index.html">
			For 60 years, WWF has worked to help people and nature thrive. As the world's leading conservation organization, WWF works in nearly 100 countries. At every level, we collaborate with people around the world to develop and deliver innovative solutions that protect communities, wildlife, and the places in which they live.
		</blockquote>
		<p>WWF's goal is to: <q>Build a future where people live in harmony with nature.</q></p>
		<!--dziala na zasadzie cudzyslowia-->
		<p>The <abbr title="World Health Organization">WHO</abbr> was founded in 1948.</p> <!--pokazuje dymek-->
		<h2 style="font-family:verdana;"">Soldier211's Website</h2> <!--naglowek od h1 do h6-->
		<hr/><!--horizontal rule tab - linia przedzialu-->
		<br/><!--break-nowa pusta linia-->
		<p><big>This</big><small> is</small> my <i><b>paragraph</b></i></p> <!--dzieki b tekst 
		zostanie pogrubiony-->
		<!--dzieki big tekst zrobi sie wiekszy-->
		<!--jesli uzyjemy i to tekst bedzie pochylony-->
		<p>H<sub>10</sub>0</p>
		<br> <!--pusta linijka miedzy paragrafami-->
		<p>10<sup>2</sup></p>
		<p style="color:red;">This is a red paragraph</p>
		<p title='John "Shotgun" Johnson' style="text-align:center">This is a paragraph with a title</p> <!--pojawi sie dymek-->
		
		<h2 style = "color:green;">Style and Colors</h2>
		<p style="color:red;background-color:blue;">You can style your HTML and make it loop pretty</p>
		<pre><!--preformatted text zachowuje spacje i entery-->
			My Bonnie lies over the ocean.
		  
			My Bonnie lies over the sea.
		  
			My Bonnie lies over the ocean.
		  
			Oh, bring back my Bonnie to me.
		</pre>
		<em>This text is emphasized</em>
		<br>
		<small>This is some smaller text.</small>
		<br>
		<strong>This is strong text</strong>
		<p>Do not forget to buy <mark>milk</mark> today.</p>
		<p>My favorite color is <del>blue</del> red.</p> <!--deleted text-->
		<p>My favorite color is <del>blue</del> <ins>red</ins>.</p> <!--underlined text-->
		<a href="https://www.w3schools.com/" target="_blank">Visit W3Schools.com!</a>
		<!--<a href="mailto:s217357@sggw.edu.pl">Send email</a>-->
		<!--_self, _blank, _parent, _top-->
		<!-- _top -  Jeśli ten link zostanie kliknięty wewnątrz iframe,
		spowoduje załadowanie strony w pełnym oknie, zamiast tylko w ramce-->
		<!--parent przeciwnie dziala-->
		<h2 id="C4">Chapter 4 Location</h2>
		<address>
			Written by John Doe.<br>
			Visit us at:<br>
			Example.com<br>
			Box 564, Disneyland<br>
			USA
		</address>
		<p><cite>The Scream</cite> by Edvard Munch. Painted in 1893.</p><!--tytul ksiazki, filmu-->
		<bdo dir="rtl">This text will be written from right to left</bdo>
		<div class="city">
			<h2>London</h2>
			<p>London is the capital of England</p>
		</div>
		<code>
			x=5;
			y=6;
			z=x+y;
		</code>
		<p> Save the document by pressing <kbd>Ctrl+S</kbd></p>
		<p>Message from my computer:</p>
		<p><samp>File not found.<br>Press F1 to continue</samp></p>
		<pre>
			<code>
x=5;
y=6;
z=x+y;
			</code>
		</pre>
		<p>The area of a triangle is: 1/2 x <var>b</var> x <var>h</var>, where <var>b</var> is the base, and <var>h</var> is the vertical height.</p>
		<p>I will display &copy;</p>



		<script src="script.js"></script>
		<noscript>Sorry, your browser does not support JavaScript!</noscript>
	</body>
</html><!--znacznik zamykajacy-->