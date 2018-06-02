<?php

include 'dbConfig.php';

if(!empty($_POST['country_id'])):
   $query = $db->query("SELECT * FROM states WHERE country_id = " . $_POST['country_id']);

   $rowCount = $query->num_rows;

   