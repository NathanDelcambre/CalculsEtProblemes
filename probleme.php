<HTML>
<head>
    <meta charset="utf-8">
    <title>Mathématiques</title>
    <link rel="stylesheet" href="styleProbleme.css">
</head>

<body>

    <header>
        <div class="barre"></div>
        <div class="overlay"></div>

            <nav>
                <a href=Accueil.php class=accueil><h2>LES MATHÉMATIQUES</h2></a>
				<a href=Accueil.php><img src="Images/maison.png" alt="maison" /></a>
            </nav>
    </header>
	
	<div class="barre"></div>
	
	<?php
	$numProb=$_GET['p'];
	?>

	<div class=enonce>
	
	<?php
		switch ($numProb) {
		case 1:
	?>
	<form action="resultatsProbleme.php?numProb=<?=$numProb?>" method="post">
			<h1>Dans ma trousse, j'ai 10 crayons. J'en ajoute 3.</h1>
			<h1>Combien il y a de crayons dans ma trousse désormais ?</h1>
			<figure>
				<audio
					controls
					src="Sons/1.mp3">
						Your browser does not support the
						<code>audio</code> element.
				</audio>
			</figure>
			<div class=ajout>
				<input class=case type="number" name="1" maxlength="3" size="2"></p>
				<input class=caseRes type="number" name="2" maxlength="3" size="2"></p>
				<input class=case type="number" name="3" maxlength="3" size="2"></p>
			</div>
			
			<div class=fleche1>
				<img src="Images/fleche.png" alt="fleche" />
			</div>
			
			<div class=fleche2>
				<img src="Images/fleche.png" alt="fleche" />
			</div>
			<input type="submit" class=reponsesp value="Valider">
	</form>
		<?php
		break;
			
		case 2:
	?>
	<form action="resultatsProbleme.php?numProb=<?=$numProb?>" method="post">
			<h1>J'ai 11 bonbons. J'en donne 4 à mon ami Marcel.</h1>
			<h1>Combien ai-je de bonbons maintenant ?</h1>
			<figure>
				<audio
					controls
					src="Sons/1.mp3">
						Your browser does not support the
						<code>audio</code> element.
				</audio>
			</figure>
			<div class=ajout>
				<input class=case type="number" name="4" maxlength="3" size="2"></p>
				<input class=caseRes type="number" name="5" maxlength="3" size="2"></p>
				<input class=case type="number" name="6" maxlength="3" size="2"></p>
			</div>
			
			<div class=fleche1>
				<img src="Images/fleche.png" alt="fleche" />
			</div>
			
			<div class=fleche2>
				<img src="Images/fleche.png" alt="fleche" />
			</div>
			<input type="submit" class=reponsesp value="Valider">
	</form>
	<?php
		break;
			
		case 3:
	?>
	<form action="resultatsProbleme.php?numProb=<?=$numProb?>" method="post">
			<h1>Hier, Julie avait 6 cartes. Aujourd'hui, Matt lui en donne 5 de plus.</h1>
			<h1>Combien Julie a-t-elle de cartes maintenant ?</h1>
			<figure>
				<audio
					controls
					src="Sons/1.mp3">
						Your browser does not support the
						<code>audio</code> element.
				</audio>
			</figure>
			<div class=ajout>
				<input class=case type="number" name="7" maxlength="3" size="2"></p>
				<input class=caseRes type="number" name="8" maxlength="3" size="2"></p>
				<input class=case type="number" name="9" maxlength="3" size="2"></p>
			</div>
			
			<div class=fleche1>
				<img src="Images/fleche.png" alt="fleche" />
			</div>
			
			<div class=fleche2>
				<img src="Images/fleche.png" alt="fleche" />
			</div>
			<input type="submit" class=reponsesp value="Valider">
	</form>
	<?php
		break;
		
		case 4:
	?>
	<form action="resultatsProbleme.php?numProb=<?=$numProb?>" method="post">
			<h1>Aujourd'hui Lily a 6 billes. Hier elle n'en avait que 4.</h1>
			<h1>Combien de billes a-t-elle gagné aujourd'hui ?</h1>
			<figure>
				<audio
					controls
					src="Sons/1.mp3">
						Your browser does not support the
						<code>audio</code> element.
				</audio>
			</figure>
			<div class=ajout>
				<input class=case type="number" name="10" maxlength="3" size="2"></p>
				<input class=caseRes type="number" name="11" maxlength="3" size="2"></p>
				<input class=case type="number" name="12" maxlength="3" size="2"></p>
			</div>
			
			<div class=fleche1>
				<img src="Images/fleche.png" alt="fleche" />
			</div>
			
			<div class=fleche2>
				<img src="Images/fleche.png" alt="fleche" />
			</div>
			<input type="submit" class=reponsesp value="Valider">
	</form>
	<?php
			break;
			
		case 5:
	?>
	<form action="resultatsProbleme.php?numProb=<?=$numProb?>" method="post">
			<h1>Hector a 8 fleurs. Il veut les partager équitablement entre son père et sa mère.</h1>
			<h1>Combien auront-ils de fleurs chacun ?</h1>
			<figure>
				<audio
					controls
					src="Sons/1.mp3">
						Your browser does not support the
						<code>audio</code> element.
				</audio>
			</figure>
			<div class=ajout>
				<input class=casespe1 type="number" name="13" maxlength="3" size="2"></p>
				<input class=casespe2 type="number" name="14" maxlength="3" size="2"></p>
				<input class=casespe3 type="number" name="15" maxlength="3" size="2"></p>
			</div>
			
			<div class=fleche1p>
				<img src="Images/fleche.png" alt="fleche" />
			</div>
			
			<div class=fleche2p>
				<img src="Images/fleche.png" alt="fleche" />
			</div>
			<input type="submit" class=reponsesp value="Valider">
			<div class="moins1">
				<h1>-</h1>
			</div>
			<div class="moins2">
				<h1>-</h1>
			</div>
			<div class="plus">
				<h1>+</h1>
			</div>
	</form>
	<?php
		break;
		
		case 6:
	?>
	<form action="resultatsProbleme.php?numProb=<?=$numProb?>" method="post">
			<h1>Lilou partage ses bonbons équitablement entre ses deux amis. Ils en ont 5 chacun.</h1>
			<h1>Combien Lilou avait-elle de bonbons avant de les partager ?</h1>
			<figure>
				<audio
					controls
					src="Sons/1.mp3">
						Your browser does not support the
						<code>audio</code> element.
				</audio>
			</figure>
			<div class=ajout>
				<input class=casespe1 type="number" name="16" maxlength="3" size="2"></p>
				<input class=casespe2 type="number" name="17" maxlength="3" size="2"></p>
				<input class=casespe3 type="number" name="18" maxlength="3" size="2"></p>
			</div>
			
			<div class=fleche1p>
				<img src="Images/fleche.png" alt="fleche" />
			</div>
			
			<div class=fleche2p>
				<img src="Images/fleche.png" alt="fleche" />
			</div>
			<input type="submit" class=reponsesp value="Valider">
			<div class="moins1">
				<h1>_</h1>
			</div>
			<div class="moins2">
				<h1>_</h1>
			</div>
			<div class="plus">
				<h1>+</h1>
			</div>
	</form>
	<?php
		break;
	}
	?>
	</div>
	
<footer>
	<div class="barre"></div>
	<img src="Images/Pikachu.png" alt="Pikachu" />
	<img src="Images/bulbizarre.png" alt="bulbi" />
	<img src="Images/evoli.png" alt="evoli" />
	<img src="Images/germignon.png" alt="germignon" />
	<h2>Les mathématiques c'est fantastique !</h2>
	<img src="Images/ouisticram.png" alt="ouisticram" />
	<img src="Images/hericendre.png" alt="hericendre" />
	<img src="Images/kaiminus.png" alt="kaiminus" />
	<img src="Images/carapuce.png" alt="carapuce" />

</footer>
</HTML>