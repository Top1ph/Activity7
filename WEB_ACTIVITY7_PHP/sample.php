<?php
    $name ="BSIS";
    $campus = 2024;
    $college = "COLLEGE OF INFORMATION AND COMPUTING SCIENCE";
    
    $fullname =(isset($_GET['fullname'])):"";
    $age =(isset(%_GET['age']))? %_GET['age']:0;

    $xn = 1234;
    $profile = "BSIS";

    $collectionOFNames = array("A","B","C","D","E");
    var_dump($x);
    var_dump($profile);

    var_dump($collectionOFNames);

    foreach($collectionOFNames as $name => $val){
        echo "<br>".$name."<br>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SAMPLE</title>
</head>
<body>
    <h1>PHP SAMPLE</h1>

    <h2><?php echo $name;?></h2>
    <h1><?php echo $campus;?></h1>
    <h3><?php echo $college;?></h3> 

    <!--
    GET METHOD - sends data by IRL
    $POST METHOD- second data by HTTP POST
    $POST METHOD-send data by HTTP POST
    -->

    <form action="" method="post">
        <lebel> for ="">Name:</label>
        <input type="text" name="name">
        <label for="">Age:</label>
        <inpu t type="text" name="age">
        <button type="submit=">Submit </button>
     </form>

     <?php
     echo "Fullname:". $fullname . "<br>";
     echo "Age:" . $age . "<br>"
</body>
</html>