<?php
$data=array(
    array("Volo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);
$i=0;
function myfunction($value)
{  
    return $result=join(" ", $value);
}
$hello=array_map("myfunction",$data);
echo '<table border=1>';
for($i=0;$i<count($hello);$i++)
{  
    echo '<tr><td>'.$hello[$i].'</td></tr>';
}
echo '</table>' ;
?>