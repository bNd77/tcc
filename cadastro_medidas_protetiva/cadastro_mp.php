<?php
   include "../conexao.php";

    echo $nome = $_POST['nome'];
   


    $sql = "INSERT INTO `medida_protetiva`( `nome`) 
     VALUES ('$nome')";

     if (mysqli_query($conn, $sql)) {
        header("location: admin/index.php");
     } else{
     echo "$nome NÃO foi cadastrado";
     }
    ?>
</body>
</html>