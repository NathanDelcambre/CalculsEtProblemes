<HTML>
<head>
    <meta charset="utf-8">
    <title>Additions</title>
    <link rel="stylesheet" href="styleCalculs.css">
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
	<div class=space></div>
	
	<div class=calculs>
		<?php
			$nb = $_GET['nb'];
	?>
		<form action="resultats.php?nb=<?=$nb?>" method="post">
		<?php
			for($i=0;$i<$nb;$i=$i+1){
				$a=rand(1,20);
				$b=rand(1,20);?>
				<div class=calcul>
					<p><?php echo $b ?> + <?php echo $a ?> = <input type="number" name="res<?=$i?>" maxlength="3" size="2"></p>
					<?php
					$rep=$a+$b;
					?>
					<input type="hidden" id="1" name="<?=$i?>" value="<?=$rep?>">
				</div>	
		<?php
		}
		?>
		<input type="submit" class=reponses value="Valider">
		</form>
	</div>
	
	
	
<footer>
	<div class="barre"></div>
	<img src="Images/Pikachu.png" alt="Pikachu" />
	<img src="Images/bulbizarre.png" alt="bulbi" />
	<img src="Images/evoli.png" alt="evoli" />
	<img src="Images/germignon.png" alt="germignon" />
	<img src="Images/ouisticram.png" alt="ouisticram" />
	<img src="Images/hericendre.png" alt="hericendre" />
	<img src="Images/kaiminus.png" alt="kaiminus" />
	<img src="Images/carapuce.png" alt="carapuce" />

</footer>
</HTML>