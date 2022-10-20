<?php
    $typeRetour = $_POST['flexRadioDefault'];
    $email = $_POST['exampleInputEmail1'];
    $nom = $_POST['lblNom'];
    $prenom = $_POST['lblPrenom'];
    $genre = $_POST['selectGenre'];
    $retour = $_POST['txtRetour'];

    // Connection a la base de donnees

    $conn = new mysqli('localhost', 'raphaelgrougnet', 'raphael2004', 'tp2_web');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into enregistrement(typeRetour, email, nom, prenom, genre, retour) values(?,?,?,?,?,?)");
        $stmt->bind_param("ssssss", $typeRetour, $email, $nom, $prenom, $genre, $retour);
        $stmt->execute();
        echo "Enregistrement reussi...";
        $stmt->close();
        $conn->close();
    }
?>