<?php
require 'includes/header.php';
?>

<main>
    <link rel="stylesheet" href="css/gallery.css">

    <h1>Gallery</h1>
    <div class="gallery-container">
        <?php
        include_once 'includes/dbhandler.php';

        //upload_date is a name from the table in php my admin
        $sql ="SELECT * FROM gallery ORDER BY upload_date DESC";
        $query= mysqli_query($conn, $sql);

        //the single quote allows for insert php into strings and concatenate
        while($row= mysqli_fetch_assoc($query)){
            echo '<div class= "card">
            <a href="review.php?id='.$row['pid'].'">
            <img src="gallery/'.$row["picpath"].'">
            <h3>'.$row["title"].'</h3>
            <p> '.$row["descript"].'</p>
            </a>
            </div>';

        }

        ?>
    </div>


</main>