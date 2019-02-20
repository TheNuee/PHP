<?php
$arrWarna = array ("Blue", "Black", "Red", "Yellow" , "Green");

echo "Menampilkan isi array dengan for : <br>";
for ($i=0; $i<count($arrWarna); $i++) {
    echo "<br>Menmpilkan isi array dengan foreach: <br>";
    foreach ($arrWarna as $warna){
        echo"Do you like <font color=$warna>". $warna."</font> ? <br>";

    }
}
?>