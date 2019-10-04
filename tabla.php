<?php

$a= 20;

?>

<table border="1">
    <tr><td> Numeros</td></tr>

<?php

while($a < 25){
    echo "<tr><td>$a</td></tr>";
    $a++;
}

?>
</table>