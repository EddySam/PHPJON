<?php
function get_bulk($prise)
{
    if ($prise > 50) {
        $percent = 20;
    } else {
        $percent = 10;
    }
    return $prise - ($prise * ($percent / 100));
}

/*
 if(condition):
else:
andif

  */
var_dump($_POST);
$products = array(
    array(
        'gorox', 'горох', 'this is gorox', '10'
    ),
    array(
        'Fasol', 'горох', 'this is Fasol', '50'
    ),
    array(
        'Chechevitza', 'горох', 'this is Chechevitza', '100'
    ),

    );
$products[]=array($_POST['eng_name'], $_POST['rus_name'], $_POST['description'], $_POST['price'],)
/*if(! isset($_POST['name']) && $_POST['name'] == "" ){
    $name="Mudack";
}
else{
    $name =$_POST['name'];
}

echo "Hello,".$name."";
$_POST;
$_GET:
$_REQUEST:
$_SERVER;vsi infa*/

?>
<table border="1">
    <tr>
        <th>ENG NAME</th>
        <th>RU NAME</th>
        <th>DESC</th>
        <th>PRICE</th>
        <th>OPT</th>
    </tr>
    <?php
    /*  foreach ($products as $product) {
          echo "<tr><td>" . $product . "</td></tr>";
      }*/
    foreach ($products as $xyz) {
        echo "<tr>";
        echo "<td>" . $xyz[0] . "</td>";
        echo "<td>" . $xyz[1] . "</td>";
        echo "<td>" . $xyz[2] . "</td>";
        echo "<td>" . $xyz[3] . "</td>";

        /*echo "<td>".get_bulk($xyz[3],10)."</td>";*/
        echo "<td>" . get_bulk($xyz[3]) . "</td>";
        echo "</tr>";


    }
    ?>
</table>

<form method="POST" action="index.php">
    <input type="text" name="name" placeholder="Input english name..."/>
    <input type="submit"/>
</form>


<form method="POST" action="index.php">
    <input type="text" name="eng_name" placeholder="Input english name..."/>
    <input type="text" name="rus_name" placeholder="Input russian name..."/>
    <input type="text" name="description" placeholder="Input description ..."/>
    <input type="text" name="price" placeholder="Input prise..."/>
    <input type="submit"/>
</form>