<?php
  $sqli = "SELECT COUNT(*) AS cantidad FROM usuarios";
  $query = mysqli_query($conexion, $sqli);
  $c = mysqli_fetch_array($query);
  $cantidad_total = $c["cantidad"];
?>

<nav aria-label="Page navigation example"> 
  <ul class="pagination justify-content-end">
    <?php
    $cantidad_paginas = ceil($cantidad_total / $offset);
    for ($i = 1; $i <= $cantidad_paginas; $i++ ){
      ?>
      <li class="page-item"><a class="page-link" href="estudiantes.php?page-link=<?php echo $i ?>"><?php echo $i ?></a></li>
    <?php } ?>
  </ul>
</nav>
