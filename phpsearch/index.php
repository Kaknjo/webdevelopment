<?php 
    include('header.php');

?>

<!-- Forma za unos podatak koje zelimo traziti -->

<form action="search.php" method="POST">
    <input  type="text" name="search" placeholder="Search">
    <button type="submit" name="submitSearch">Search</button>
</form>
<h1>Front page</h1>
<h3>Search results</h3>
<div class='container'>
    <?php
    // Ispis svih podataka iz tabele articles
        $sql="SELECT * FROM articles";
        $result=mysqli_query($db, $sql);
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                echo "<div class='items'>
                    <h3>".$row['a_title']."</h3>
                    <p>".$row['a_text'] ."</p>
                    <p>".$row['a_date'] ."</p>
                    <p>".$row['a_author'] ."</p>
                
                
                </div>";
            }
        }
        
    ?>
      
</div>  
  
</body>
</html>