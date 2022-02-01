<?php
    if (isset($_POST["acao"])){
        $nome=$_POST["nome"];
        $email=$_POST["email"];
        $radio=$_POST["setor"];
        $radio=$_POST["possuiexperiencia"];
        $radio=$_POST["possuicursos"];
        $radio=$_POST["fazercursos"];
        $checkbox=$_POST["considera ..."];
        $msg=$_POST["infoadicional"];
    }
    echo "<p>Nome candidato: ".$nome."</p>";
        echo "<p>email: ".$email."</p>";
        echo "<p>Setor pretendido é: ".$radio."</p>";
        echo "<p>Possui experiencia na area? ".$radio."</p>";
        echo "<p>Possui cursos na area? ".$radio."</p>";
        echo "<p>Aceita fazer cursos na area? ".$radio."</p>";
        echo "<p>se considera ... ".$checkbox."</p>";
        echo "<p>Sinformação adicional:<br/>".$msg."</p>";
    }
?>