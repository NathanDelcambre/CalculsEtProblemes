<HTML>
<head>
    <meta charset="utf-8">
    <title>Résultats</title>
    <link rel="stylesheet" href="styleResultats.css">
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
	
	<div class=body>	
		<?php
			$nb=$_GET['nb'];
			$verif=array();
			$i=0;
			$score=0;
			foreach($_POST as $value){
				$verif[$i]=$value;
				$i=$i+1;
			}
			
			for($j=0;$j<2*$nb;$j=$j+2){
				if($verif[$j]==$verif[$j+1]){
					$score=$score+1;
				}
			}
			
			echo "Score : ".$score."/".$nb;?><BR><BR><?php
			echo "Bien joué !";
			
			$pct=$score/$nb*100;
			?>
	</div>
	<div class=imgRec>
	<?php
			if($pct < 10){?>
				<img class=imgRecompense src="Images/0.png" alt="0" />
			<?php
			}
			if($pct >= 10 && $pct < 20){?>
				<img class=imgRecompense src="Images/10.png" alt="10" />
			<?php
			}
			if($pct >= 20 && $pct < 30){?>
				<img class=imgRecompense src="Images/20.png" alt="20" />
			<?php
			}
			if($pct >= 30 && $pct < 40){?>
				<img class=imgRecompense src="Images/30.png" alt="30" />
			<?php
			}
			if($pct >= 40 && $pct < 50){?>
				<img class=imgRecompense src="Images/40.png" alt="40" />
			<?php
			}
			if($pct >= 50 && $pct < 60){?>
				<img class=imgRecompense src="Images/50.png" alt="50" />
			<?php
			}
			if($pct >= 60 && $pct < 70){?>
				<img class=imgRecompense src="Images/60.png" alt="60" />
			<?php
			}
			if($pct >= 70 && $pct < 80){?>
				<img class=imgRecompense src="Images/70.png" alt="70" />
			<?php
			}
			if($pct >= 80 && $pct < 90){?>
				<img class=imgRecompense src="Images/80.png" alt="80" />
			<?php
			}
			if($pct >= 90 && $pct < 100){?>
				<img class=imgRecompense src="Images/90.png" alt="90" />
			<?php
			}
			if($pct == 100){?>
				<img class=imgRecompense src="Images/100.png" alt="100" />
			<?php
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