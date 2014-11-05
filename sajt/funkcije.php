<?php
    function lista_za_glavnu(){
        $query="SELECT ime_opstine FROM opstine";
        $result=@mysqli_query($dbcon,$query);
        while($row=mysqli_fetch_array($result,MYSQL_ASSOC))
        {
            echo "<option>".$row['ime_opstine'];
        }
    }
?>