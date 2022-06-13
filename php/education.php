<?php
include("connection.php");
if(isset($_GET['edu'])){

    $edu = $_GET['edu'];

    $edunotsql = "SELECT EduTitle, EduId, EduText FROM education ORDER BY `EduId` DESC";
    $edunotresult = mysqli_query($conn,$edunotsql);

    while($edunotrow = mysqli_fetch_array($edunotresult)) {
        if($edunotrow['EduId'] != $edu){
            if($edunotrow['EduText'] != NULL){
                echo '<p>'.$edunotrow['EduTitle'].'
                <a href="resume.php?edu='.$edunotrow['EduId'].'">
                    Read more
                </a>
                <br></p>';
            }
            else{
                echo '<p>'.$edunotrow['EduTitle'].'
                <br></p>';
            } 
        }
        else{
            $edusql = "SELECT * FROM education WHERE EduId LIKE ". $edu ."";
            $eduresult = mysqli_query($conn,$edusql);

            $edurow = mysqli_fetch_array($eduresult);

            echo '<p>'.$edurow['EduTitle'].' <br> <br>'.$edurow['EduText'].'
                <a href="resume.php">
                    Read less
                </a></p>';
        }
        
    }

    
}
else{
    $edunotsql = "SELECT EduTitle, EduId, EduText FROM education ORDER BY `EduId` DESC";
    $edunotresult = mysqli_query($conn,$edunotsql);

    while($edunotrow = mysqli_fetch_array($edunotresult)) {
        if($edunotrow['EduText'] != NULL){
            echo '<p>'.$edunotrow['EduTitle'].'
            <a href="resume.php?edu='.$edunotrow['EduId'].'">
                Read more
            </a>
            <br></p>';
        }
        else{
            echo '<p>'.$edunotrow['EduTitle'].'
            <br></p>';
        }
    }
}
?>