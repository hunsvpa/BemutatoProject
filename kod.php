// Ez egy bemutató projekt a verzió kezeléshez
// a fájl neve: kod.php és ez egy PHP fájl lesz, webalkalmazáshoz

<?php
function Kiirni($mitIrjonKi) {
return date("Y.m.d H:i:s")." - ".$mitIrjonKi;
}

echo Kiirni("Helló Eurasia IT");
?>
