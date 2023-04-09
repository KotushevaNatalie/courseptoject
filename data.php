
<?php 
    require('database.php');
    $id = $_GET['id'];

    $sql = mysqli_query($conn, "SELECT * FROM `map`");
    while ($result = mysqli_fetch_array($sql)) {
        echo '<tr>'.'<td>'.$result['id'].'">'.$result['OrderNumber'].'">'
        .'</a>'.'</td>'.'<td>'. $result['CustomerConstruction'].'</td>'.'<td>' .$result['GeneralContractor'].'</td>'.'<td>'.
        $result['AdmArea'].'</td>'.'<td>'.$result['District'].'</td>'.'</tr>';

}
?>


