<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo 'Uit onderzoek is gebleken dat het persoon die dit ingevuld heeft echt een lelijke naam heeft '.$_POST['naam'].' Hij doet dit met iedreen behalve dat mormel'.$_POST['moedernaam'].'. Het is zon sukkel die zou wel nooit leren om iets fatsoenlijks te worden net als  '.$_POST['vadernaam'].' Gellukig heeft hij wel veel zin in het slaan van'.$_POST['naamzusjeofbroertje'].' en dit wel keer 2 miljoen x ';
}
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="madlibs.css">
</head>

<body>
    <div class = div1>
    <h1> Madlibs</h1>
    <form action="madlibs2.php" method="post">
   Wat is je naamㅤ<input type="text" name="naam" required><br>
    
   moeders naamㅤ<input type="text" name="moedernaam" required><br>
    vaders naamㅤ<input type="text" name="vadernaam" required><br>
    zusje of broertje naamㅤ<input type="text" name="naamzusjeofbroertje" required><br>
    <input type="submit">
    </div>

    <div class = div2> 
        <h3>Voor onze  madlibs klik op de buttons hier beneden </h3>
        <button onclick="window.location.replace('madlibs.php')">Madlib1, Bedenk zelf maar een leuke naam</button>
        <button onclick="window.location.replace('madlibs2.php')">Madlib2, Er heerst paniek</button>

    </div>
</body>
</html>