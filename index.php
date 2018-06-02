<?php
//Inclusion de la configuration 
include 'dbConfig.php';

//Selection des donnees des pays
$query = $db->query("SELECT * FROM countries ORDER BY country_name ASC");

//Comptons le nombre de resultats
$rowCount = $query->num_rows;
?>

<h1>Formulaire</h1>
<select id="country">
    <option value="">Selectionner un pays</option>
    <?php if ($rowCount > 0):
    while ($row = $query->fetch_assoc()):
      echo '<option value="' . $row['country_id'] .'">' . $row['country_name'] . '</option>';
    endwhile;
    else :
       echo '<option value="">Aucun pays disponible</option>';
    endif;
    ?>

</select>

<select id='state'>
   <option value =''> Selectionner d'abord le pays</option>
</select>

<script src='jquery-3.3.1.min.js'></script>
<script type='text/javascript'>
   $(document).ready(function() {
       $('#country').on('change', function(){
           var countryID = $(this).val();
           if(countryID){
               $.ajax({
                   type: 'POST',
                   url:'ajaxData.php',
                   data: 'country_id= ' + countryID,
                   success :function(html){
                       $('#state').html(html);

                   }
               });
           }else{
               $('#state').html('<option value="">Selectionner le pays en premier</option>');
           }
       });
   })
</script>