<?php

include 'dbConfig.php';

if(!empty($_POST['country_id'])):
   $query = $db->query("SELECT * FROM states WHERE country_id = " . $_POST['country_id']);

   $rowCount = $query->num_rows;

      if($rowCount > 0) :
      echo '<option value="">Selectionner un etat</option>';
      while($row = $query->fetch_assoc()):
         echo'<option value="' .$row['state_id'] . '">' . $row['state_name'] . '</option>';
      endwhile;
   endif;
endif;
?>