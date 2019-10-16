// Ez egy bemutató projekt a verzió kezeléshez
// a fájl neve: kod.php és ez egy PHP fájl lesz, webalkalmazáshoz

<?php

// új feature-t kell beiktatni a programba
function Osszeadas($aSzam,$bSzam) {
return "A két szám ".$aSzam." és ".$bSzam." összege: ".$aSzam+$bSzam;
}

function Kiirni($mitIrjonKi) {
return date("Y.m.d H:i:s")." - ".$mitIrjonKi."!";
}

echo Kiirni("Helló Eurasia IT");
?>
