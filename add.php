<?php
$link = mysqli connect("localhost", "root" , "root" , "Books");

// Connection part 
if($link === false){
	die("ERROR: could not connect. " .mysqli connect error ())
}

//Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// attempt insert query execution
$sql = "INSERT INTO persons (Name, Author, Genre) 
VALUES ('Titanic', 'Romance', '1999')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>




