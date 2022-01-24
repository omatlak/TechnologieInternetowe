<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "library";
    //połączenie z bazą
    $conn = new mysqli($servername, $username, $password);
    //zapytanie czy login już istnieje
    $conn->query("use library");
    $articleId=$_GET['article_id'];
    $sql = "SELECT * FROM article WHERE articleId=$articleId";
    $result = mysqli_query($conn,$sql);   
    $row = $result->fetch_row();
    echo $row[0]."<br>";
    echo $row[2]."<br>";
    echo $row[3]."<br>";
    echo $row[4]."<br>";
    echo $row[5]."<br>";
    // if ( mysqli_num_rows($result) > 0) { //jeśli zapytanie coś zwróciło
    //     //rozpoczęcie sesji
    //     session_start();
    //     $_SESSION['user']=$_POST['frm_login'];
    //     $row = $result->fetch_row();
    //     $_SESSION['user_id'] = $row[0];
    //     //wyczyszczenie tablicy $post
    //     $_POST = array();
    //     echo "powinienem zalogować";
    //     echo "User: ".$_SESSION['user']." ID: ".$_SESSION['user_id'];    
    //   }
    // else {
    //     //wyczyszczenie tablicy $post
    //     $_POST = array();
    //     //przekierowanie do logowania
    //     // header("Location: logowanie.html");
    //     echo "powinienem nie logować";
        
    //   }
      $conn->close();