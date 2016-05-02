<?php 

  $objDateTime = new DateTime($fechaActual.' first day of last month');
  $objDateTime2 = new DateTime($fechaActual.' last day of last month');
  
  echo $objDateTime->format('Y-m-d');
  echo $objDateTime2->format('Y-m-d');
