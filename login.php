<?php
require ('config.php');
session_start();


if (isset($_POST['username']) & isset($_POST['password'])){
    try {
        $sth = $conn->prepare("SELECT * FROM user WHERE username=:username");
        $sth->bindParam(':username', $_POST['username']);
        $sth->execute();
        $row = $sth->fetch(PDO::FETCH_ASSOC);
        $hash = $row['password'];
        if (password_verify($_POST['password'], $hash)){
            $_SESSION['id']   = $row['id'];
            $_SESSION['username'] = $row['username'];
            header('Location: form.php');
        }else{
            echo "Mauvais mot de passe our username.";
        }
    }catch (PDOException $e){
        print "Erreur !: " . $e->getMessage() . "<br/>";
    }
}else{
    echo "";
}
?>
