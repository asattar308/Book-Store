
<html>
<head>
<title> Book Store</title>
<link rel="stylesheet" href="book.css">
</head>

<style>
body {
  background-image: url("books.jpg");
  background-size: cover;
}
</style>


<body class="center">

 <h3> Welcome to my book rental store. Here you can choose any books for rental.</h3>



 <section> 
  <p><h5>Very limited</h5></p>
</section>


<?php
$link = mysqli_connect("localhost", "root" , "root" , "Books");

// Connection part 
if($link === false){
	die("ERROR: could not connect. " .mysqli_connect_error());
}


// query execution 
$sql = "SELECT * FROM Book_Store";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Name</th>";
                echo "<th>Author</th>";
                echo "<th>Genre</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Author'] . "</td>";
                echo "<td>" . $row['Genre'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";

        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

 //close connection
mysqli_close($link);
?>



 





</body>














</html>