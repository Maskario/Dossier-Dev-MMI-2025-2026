<?php
$tabvetements = ['pantalon','tee-shirt','sweat','chemise'];
$tabmois = ['janvier','fevrier','mars','avril','mai','juin'];
$saison = ['automne','été','hiver','printemps',];
$tab2D = [[1,2,10,1],[2,2,0,1],[3,2,0,1],[1,2,3,1],[1,2,0,1],
[6,2,4,1]];
// { part1end }
//

echo "PARTIE 1 <br>\n";
echo "En $tabmois[0], $tabmois[1], $tabmois[2], j'ai acheté des
 $tabvetements[0]s, des $tabvetements[1]s, des
 $tabvetements[2]s, et des $tabvetements[3]s.<br />\n";
echo "Et de même en $tabmois[3], $tabmois[4], $tabmois[5].";
// boucle simple
echo "<br>\n<br>\n";

echo "PARTIE 2 <br>\n";
for ($i=0; $i<6; $i++){
 echo "En $tabmois[$i], j'ai acheté "
 .$tab2D[$i][0].' '.$tabvetements[0].' pour l\''.$saison[0].' '
 .$tab2D[$i][1].' '.$tabvetements[1].' pour l\''.$saison[1].' '
 .$tab2D[$i][2].' '.$tabvetements[2].' pour l\''.$saison[2].' '
 .$tab2D[$i][3].' '.$tabvetements[3].' pour le '.$saison[3].' ';
 echo "<br />\n";
 }; 
// double boucle
echo "<br />\n";
echo "PARTIE 3 <br>\n";
for ($i=0; $i<6; $i++)
 { echo "En $tabmois[$i], j'ai acheté ";
 for ($j=0; $j<4 ; $j++)
 {echo $tab2D[$i][$j].' '.$tabvetements[$j].', ';}
 echo "et j'en suis content. <br>\n";
 }
echo "<br>\n";

echo '___________________________________________________________________________________';


echo "<br>\n <br>\n";
echo "PARTIE 5 <br>\n";
$tabAsso = [['mois'=>'janvier','pantalon'=>'1','teeshirt'=>'2','sweat'=>'10','chemise'=>1],
['mois'=>'fevrier','pantalon'=>'2','teeshirt'=>'2','sweat'=>'0','chemise'=>1],
['mois'=>'mars','pantalon'=>'3','teeshirt'=>'2','sweat'=>'0','chemise'=>1],
['mois'=>'avril','pantalon'=>'1','teeshirt'=>'2','sweat'=>'3','chemise'=>1],
['mois'=>'mai','pantalon'=>'1','teeshirt'=>'2','sweat'=>'0','chemise'=>1],
['mois'=>'juin','pantalon'=>'6','teeshirt'=>'2','sweat'=>'4','chemise'=>1]];
foreach ($tabAsso as $cle=>$val)
{ echo "En ". $val['mois'].", j'ai acheté ".$val['pantalon']."
pantalons, ".
 $val['tee-shirt']." tee shirts, ".$val['sweat']." sweats, ".
 $val['chemise']." chemises et j'en suis content. <br>\n"; }
// mise au pluriel si plusieurs éléments
function pluriel ($nbre, $habit)
 { if ($nbre>1) {$result = $habit.'s';}
 else {$result = $habit; }
 ; return $result;
 }

?>