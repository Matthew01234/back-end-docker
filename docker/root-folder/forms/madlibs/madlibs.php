<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo 'Uit onderzoek is gebleken dat het persoon die dit ingevuld heeft extreem slecht is in '.$_POST['favorieteding'].' Hij doet dit met iedreen behalve dat mormel'.$_POST['huisdiernaam'].'. Het is zon sukkel die zou wel nooit leren om te '.$_POST['kunnen'].' Gellukig heeft hij wel veel zin in '.$_POST['overkomen'].' en dit wel '.$_POST['favorietegetal'].'keer';
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
    <form action="madlibs.php" method="post">
    Hoe zou je jouw huisdier noemen:ㅤ<input type="text" name="huisdiernaam" required><br>
    
    Wat is jouw favoriete ding om te doenㅤ<input type="text" name="favorieteding" required><br>
    Wat zou je graag willen kunnenㅤ<input type="text" name="kunnen" required><br>
    Wat is het ergste wat je zou kunnen overkomenㅤ<input type="text" name="overkomen" required><br>
    Wat is je favorietegetalㅤ<input type="text" name="favorietegetal" required><br>
    <input type="submit">
    </div>

    <div class = div2> 
        <h3>Voor onze  madlibs klik op de buttons hier beneden </h3>
        <button onclick="window.location.replace('madlibs.php')">Madlib1, Bedenk zelf maar een leuke naam</button>
        <button onclick="window.location.replace('madlibs2.php')">Madlib2, Er heerst paniek</button>

    </div>
</body>
</html>