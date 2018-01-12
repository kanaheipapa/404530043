<?php
$data=array(
  array("Volo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
echo '<table border=1>';
 for($i=0;$i<count($data);$i++)
{ echo'<tr>';
 for($j=0;$j<count($data)-1;$j++)
 {
   echo '<td>'.$data[$i][$j].'</td>';
 }
  echo '</tr>';
} 
echo '</table>' ;
?>