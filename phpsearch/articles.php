<?php 
    include('header.php');

?>



        
<h1>Articles page </h1>

<div class='container'>
    <?php
    // Varijable za spremanje podataka koji se salju get metodom preko a taga 
        $gettitle=mysqli_real_escape_string($db, $_GET['title']);
        $gdate=mysqli_real_escape_string($db, $_GET['gdate']);
        //Ispis podataka koji su nadeni pretragom u novoj stranici preko title i date kolona u bazi podataka 
        // Rezultat cemo dobiti samo kada se title i date poklapaju sa title i dateom u bazi 
        $sql="SELECT * FROM articles WHERE a_title='$gettitle' AND a_date='$gdate'";
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