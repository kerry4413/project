<?php
    function store($x, $y, $z, $a, $b){
        include('pro_connect.php');
        $temp = $_POST[$x];
        $temp1 = $_POST[$y];
        $temp2 = $_POST[$z];
        $temp3 = $_POST[$a];
        $temp4 = $_POST[$b];
        $query = ('Insert into player ('.$x.','.$y.','.$z.','.$a.','.$b.', plevel) values(?, ?, ?, ?, ?, 1)');
        $stmt = $db->prepare($query);
        $stmt->bind_param("sssss", $temp, $temp1, $temp2, $temp3, $temp4);
        $stmt->execute();
        mysqli_close($db);
    }
?>