</form>

    <?php
    $n1= $_POST['alt'] .'<br>';
    $n2= $_POST['mas'];

echo "Los numeros son ", $n1, " y ", $n2."<br/>";

echo "Suma: ", $n1+$n2,"<br />";

echo "Resta: ", $n1-$n2,"<br />";
echo "multiplicacion: ", $n1*$n2,"<br />";
echo "Division: ", $n1/$n2,"<br />";
printf("Division sin decimales: %d<br />", $n1/$n2);
echo "O bien: ", intval($n1/$n2), "<br />";
echo "Resto de la division: ", $n1 % $n2, "<br />";
echo "Concatenados: ", $n1 .$n2, "<br />";
?>

