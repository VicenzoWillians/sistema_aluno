<?php
    //Executa o comando SQL
    $query=mysqli_query($con, $SQL);

    if($query){
        echo $texto;
        echo "<a href='menu.php'>Voltar ao Menu</a>";
    } else{
        echo mysqli_error($con);
    }

    mysqli_close($con);
?>