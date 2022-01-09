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
			$numProb=$_GET['numProb'];
			
			$verif=array(10,3,13,11,4,7,6,5,11,6,4,2,8,4,4,10,5,5);
			$tabReponses=array();
			$i=0;
			$score=0;
			
			foreach($_POST as $value){
				$tabReponses[$i]=$value;
				$i=$i+1;
			}
			
			switch($numProb){
				case 1:
					if($tabReponses[0]==$verif[0]){
						$score=$score+1;
					}
					if($tabReponses[1]==$verif[1]){
						$score=$score+1;
					}
					if($tabReponses[2]==$verif[2]){
						$score=$score+1;
					}
				
				break;
				
				case 2:
					if($tabReponses[0]==$verif[3]){
						$score=$score+1;
					}
					if($tabReponses[1]==$verif[4]){
						$score=$score+1;
					}
					if($tabReponses[2]==$verif[5]){
						$score=$score+1;
					}
				break;
				
				case 3:
					if($tabReponses[0]==$verif[6]){
						$score=$score+1;
					}
					if($tabReponses[1]==$verif[7]){
						$score=$score+1;
					}
					if($tabReponses[2]==$verif[8]){
						$score=$score+1;
					}					
				break;
				
				case 4:
					if($tabReponses[0]==$verif[9]){
						$score=$score+1;
					}
					if($tabReponses[1]==$verif[10]){
						$score=$score+1;
					}
					if($tabReponses[2]==$verif[11]){
						$score=$score+1;
					}				
				break;
				
				case 5:
					if($tabReponses[0]==$verif[12]){
						$score=$score+1;
					}
					if($tabReponses[1]==$verif[13]){
						$score=$score+1;
					}
					if($tabReponses[2]==$verif[14]){
						$score=$score+1;
					}						
				break;
				
				case 6:
					if($tabReponses[0]==$verif[15]){
						$score=$score+1;
					}
					if($tabReponses[1]==$verif[16]){
						$score=$score+1;
					}
					if($tabReponses[2]==$verif[17]){
						$score=$score+1;
					}						
				break;
			}
			
			echo "Score : ".$score."/3";?><BR><BR><?php
			echo "Bien joué !";
			?>
	</div>
	<div class=imgRec>
	<?php
			if($score == 1){?>
				<img class=imgRecompense src="Images/luxray.png" alt="0" />
			<?php
			}
			if($score == 2){?>
				<img class=imgRecompense src="Images/palkia.png" alt="10" />
			<?php
			}
			if($score == 3){?>
				<img class=imgRecompense src="Images/giratina.png" alt="20" />
			<?php
			}
			if($score == 0){?>
				<img class=imgRecompense src="Images/psycho.png" alt="30" />
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