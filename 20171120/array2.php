<?php
$data=array(
    array("Volo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);
echo '<table border=1>';
foreach($data as $value){
    echo '<tr>';
    foreach($value as $value2)
    {echo '<td>'.$value2.'</td>';
    }
    echo '</tr>';
}
echo '</table>' ;
?>
