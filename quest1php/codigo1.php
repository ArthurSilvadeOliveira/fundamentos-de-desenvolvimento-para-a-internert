<?php
$ano = $_GET["ano"];

if($ano<2011||$ano>2016){
    echo "ano invalido";
    die();
}
if($ano==2011){
    $col=1;
}
if($ano==2012){
    $col=2;
}
if($ano==2013){
    $col=3;
}
if($ano==2014){
    $col=4;
}
if($ano==2015){
    $col=5;
}
if($ano==2016){
    $col=6;
}
$file = fopen("violencia-domestica-df.csv","r");
if (!$file) {
}
else {
    while( ($row = fgetcsv($file)) !== FALSE){
         if (isset($row[$col])) {
         }
         echo "<p>";
         echo $row[0];
         echo $row[$col];
         echo "</p>";
    }
}

fclose($file);

?>
