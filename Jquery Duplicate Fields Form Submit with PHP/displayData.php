<?php

if ($_POST['name']) {
    $array = $_POST['name'];
    foreach ($array as $name) {
        if (strlen($name) > 0) {
            echo '<h2>' . $name . '<h2/>';
            // implememnt your mysql query to store data
            //$sql=mysql_query("insert into Empployee..............")
            
        }
    }
}
?>