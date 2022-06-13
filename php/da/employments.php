<?php
include("connection.php");
if(isset($_GET['emp'])){

    $emp = $_GET['emp'];

    $empnotsql = "SELECT EmpTitle, EmpId FROM employment_da ORDER BY `EmpId` DESC";
    $empnotresult = mysqli_query($conn,$empnotsql);

    while($empnotrow = mysqli_fetch_array($empnotresult)) {
        if($empnotrow['EmpId'] != $emp){
            echo '<p>'.$empnotrow['EmpTitle'].'
            <a href="resume.php?emp='.$empnotrow['EmpId'].'">
                Læs mere
            </a>
            <br></p>'; 
        }
        else{
            $empsql = "SELECT * FROM employment_da WHERE EmpId LIKE ". $emp ."";
            $empresult = mysqli_query($conn,$empsql);

            $emprow = mysqli_fetch_array($empresult);

            echo '<p>'.$emprow['EmpTitle'].' <br> <br>'.$emprow['EmpText'].'
                <a href="resume.php">
                    Læs mindre
                </a></p>';
        }
        
    }

    
}
else{
    $empnotsql = "SELECT EmpTitle, EmpId FROM employment_da ORDER BY `EmpId` DESC";
    $empnotresult = mysqli_query($conn,$empnotsql);

    while($empnotrow = mysqli_fetch_array($empnotresult)) {
        echo '<p>'.$empnotrow['EmpTitle'].'
        <a href="resume.php?emp='.$empnotrow['EmpId'].'">
            Læs mere
        </a>
        <br></p>';
    }
}
?>