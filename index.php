
<?php
include 'calculation.php'
?>

<html>
    <head> 
        <title> CALCULATE ELECTRICITY BILL </title>
    </head>

<h1> CALCULATE ELECTRICITY BILL </h1>
<body>

<?php
if($error !="")
    echo"<p Warning:</br> . $error . </p>";
    ?>





    <div style="margin-bottom: 50px">
<table border="1">
<tr>
<th> Block Tariff (per month) </th>   
<th> Unit </th>
<th> Rate </th>
</tr>
<tr>
<td> For the first 200 kWh (1-200 kWh) per month </td>
<td> 1-200 kWh </td>
<td> 0.218 </td>
</tr>
<tr>
<td> For the next 100 kWh (201 – 300 kWh) per month </td>
<td> 201-300 kWh </td>
<td> 0.334 </td>
</tr>
<tr>
<td> For the next 300 kWh (301 – 600 kWh) per month </td>
<td> 301-600 kWh </td>
<td> 0.516 </td>
</tr>
<tr>
<td>For the next 300 kWh (601 – 900 kWh) per month</td>
<td> 601-900 kWh </td>
<td> 0.546 </td>
</tr>
<tr>
<td> For the next kWh (901 kWh onwards) per month</td>
<td> 901 kWh </td>
<td> 0.571 </td>
</tr>
<tr>
<td colspan="3"> The minimum monthly charge is RM300</td>
</tr>

</table>
</div>

<form method="post">
 <br>Enter your first 200 kWh per month (1-200 kWh)
<input type="text" name="block1" value=""> <br> </br>

Enter next 100 kWh (201 – 300 kWh) per month
<input type="text" name="block2" value=""> <br> </br>

Enter next 300 kWh (301 – 600 kWh) per month
<input type="text" name="block3" value=""> <br> </br>

Enter next 300 kWh (601 - 900 kWh) per month
<input type="text" name="block4" value=""> <br> </br>

Enter next kWh (901 kWh onwards) per month
<input type="text" name="block5" value=""> <br>
</br>

<hr></hr>
Your total electricity bill is: RM
<br>

<input type="submit" name="calculate" value="Calculate"></input>
<input type="reset" name="reset" value="Reset"></input>
</br>

</form>



</body>

<?php
if(isset($_POST['calculate']) && $error == "") {

    echo "1 - 200 kWh: " . $block1 . "kWh x 0.218 = RM" . $charge1 . "<br>"; 
    echo "201 - 300 kWh: " . $block2 . "kWh x 0.334 = RM" . $charge2 . "<br>"; 
    echo "301 - 600 kWh: " . $block3 . "kWh x 0.516 = RM" . $charge3 . "<br>"; 
    echo "601 - 900 kWh: " . $block4 . "kWh x 0.546 = RM" . $charge4 . "<br>"; 
    echo "901 kWh onwards: " . $block5 . "kWh x 0.571 = RM" . $charge5 . "<br>";

    echo "<br>";

    echo "Total kWh: " . $totalKwh . "kWh <br>";
    echo "Total Charge: RM" . $totalCharge . "<br>";
    echo "SST (6%): RM" . $sst . "<br>";
    echo "Total Bill: RM" . $totalBill . "<br>";

    
    



}



?>
</html>
