<?php
    include('header.php');

?>
<div class=header>
    <a id='home' href="index.php">Home page</a>
</div>

<h1>Search page</h1>

<p>Search results</p>
<div class='container'>
<?php

   // kada se klikne seearch button rije  koje se pretrazuje uporeduje sa svakim redom u bazi podataka i ako se taj rijec pronade u jednom od redova tabele ispisuje se cijeli red
    if(isset($_POST['submitSearch'])){
        $search=mysqli_real_escape_string($db, $_POST['search']);
        $sql="SELECT * FROM articles WHERE a_title LIKE '%$search%' OR a_text LIKE '%$search%' OR a_author LIKE '%$search%' OR a_date LIKE '%$search%'"; 
        $result=mysqli_query($db, $sql);
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                // link tag koji otvara rezultat pretrage u novoj stranici
                echo " <a href='articles.php?title=". $row['a_title'] ."& gdate=".$row['a_date']."'><div class='items'>
                <h3>".$row['a_title']."</h3>
                <p>".$row['a_text'] ."</p>
                <p>".$row['a_date'] ."</p>
                <p>".$row['a_author'] ."</p>
            
            
            </div></a>";

            }
        }else{
            echo "Nema pronadenih rezultata";         }
    }
 
?>
   </div>

