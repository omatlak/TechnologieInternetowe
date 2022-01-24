<?php       
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "library";

    $conn = new mysqli($servername, $username, $password);
    //zapytanie czy login już istnieje
    $conn->query("use library");
    $userid = $_SESSION['user_id'];
    $bookid=$_SESSION['bookId'];
    $startDate=$_POST['borrow_date'];
    echo $userid;
    echo $bookid;
    echo $startDate;
    // $startingdate
    // $endingdate
    // $sql = "INSERT INTO borrow(userId,bookId,startingDate,endingDate) VALUES
    // ($userid,$bookId,CURDATE(),DATE_ADD(CURDATE(), INTERVAL 14 DAY))";
    // echo "Dodałem";
    // ;