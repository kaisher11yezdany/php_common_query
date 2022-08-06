<?php
  $con=new mysqli('localhost','root','','crm_final_crm');
  $query=$con->query("
  SELECT full_name FROM leads
  ");
  foreach($query as$data)
  {
    $month[]=$data['full_name'];
     
  }
 
?>
  <?php echo json_encode($month)?>;
