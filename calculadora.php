<center>
<?php
      
      $tmaxima= $_POST['alt'] .'<br>';
    $tminima= $_POST['mas'];
   

    echo "Su temperatura maxima es: ", $tmaxima, "  Su temeperatura minima es: ", $tminima, ".<br />";
    echo "La Suma de la tempetara maxima y minima es : ", $tmaxima+$tminima,"<br />";
    $resulatdo=$tmaxima+$tminima;
    echo "Su temperatura media es : ",$resulatdo/2,"<br />";
    echo"<br><a href='punto2.php'>vover al formulario</a>";      
    ?>
</center>
