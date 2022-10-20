<?php

    $nickname = $_POST['lblNickname'];
    $mdp = $_POST['lblPassword'];

    $conn = new mysqli('localhost', 'raphaelgrougnet', 'raphael2004', 'tp2_web');

    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into login(nickname, password) values (?,?)");
        $stmt->bind_param("ss",$nickname, $mdp);
        $stmt->execute();
        echo "Enregistrement reussi...";
        $stmt->close();
        $conn->close();

    }

?>