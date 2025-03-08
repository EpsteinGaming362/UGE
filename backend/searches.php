
<html>
<head>
    <title>Search Results</title>
</head>
<body>
<?php
function search($query){
    include 'connection.php';
    if($conn->connect_errno){
        echo 'Error with connection: '. $conn -> connect_error;
        exit();
    }
    echo '<center><p>Results for "'.$query.'"</p></center>';
    //Start search
    $newQuery = "SELECT * FROM `sites`";
    $result = $conn -> query($newQuery);
    while($row = $result->fetch_assoc()) {
        $myArray[] = $row;
    }
    $queryResults = array();
    $i = 0;
    for($i = 0; $i < count($myArray); $i++){
        $curLoop = $myArray[$i];
        if(str_contains(strtolower($curLoop['TITLE']), strtolower($query)) || str_contains(strtolower($curLoop['BODY']), strtolower($query))){
            $queryResults[] = $myArray[$i];
        }
    }
    $fullResults = $queryResults;
    for($i = 0; $i < count($fullResults); $i++){
        echo '<div class="result"><p>'.$fullResults[$i]['TITLE'].'<br>'.$fullResults[$i]['BODY'].'</p><button onclick="window.open('."'".$fullResults[$i]['LINK']."'".')">Open</button></div>';
    }
    if(count($fullResults) == 0){
        echo '<div class="result">No results found for query of "'.$query.'".</div>';
    }
    $conn -> close(); 
}
function dump(){
    include 'connection.php';
    if($conn->connect_errno){
        echo 'Error with connection: '. $conn -> connect_error;
        exit();
    }
    echo '<center>Results for all sites</center>';
    $myArray = array();
    $newQuery = "SELECT * FROM `sites`";
    $result = $conn -> query($newQuery);
    while($row = $result->fetch_assoc()) {
        $myArray[] = $row;
    }
    for($i = 0; $i < count($myArray); $i++){
        echo '<div class="result"><p>'.$myArray[$i]['TITLE'].'<br>'.$myArray[$i]['BODY'].'</p><button href="'.$myArray[$i]['LINK'].'">Open</button></div>';
    }
    $conn -> close();
}
?>
</body>
<style>
.result{
    width: 25vw;
    height: 15vh;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0px 3px 5px black;
}
.result *{
    margin: 15px;
}
*{
    font-family: "Lucida Console", "Courier New", monospace;
}
</style>
<html>
