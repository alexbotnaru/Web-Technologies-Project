<?php
include("../connection.php");

$query = "SELECT * FROM cars";

$res = mysqli_query($con, $query);

$total_row = mysqli_num_rows($res);

$output = 
    '
    <h3 align="center">Promotii</h3> 
    <table class = "table table-bordered table-striped">
        <tr>
        <th>Id</th>
        <th>Image</th>
        <th>Pret</th>
        <th>Marca</th>
        <th>Model</th>
        <th>Anul</th> 
        <th colspan = "2">Actions</th>
    </tr>
';
//Read All
if($total_row > 0 )
{
    while ($row = mysqli_fetch_assoc($res)) {
        $output .='
        <tr>
            <td>'.$row["car_id"].'</td>
            <td><img style="width: 110px; height:100px" src="'.$row["img_path"].'"</td>
            <td>'.$row["pret"].'</td>
            <td>'.$row["marca"].'</td>
            <td>'.$row["model"].'</td>
            <td>'.$row["anul_fabricarii"].'</td>
            <td>
                <button type="button" name="edit" class="btn btn-primary btn-xs edit" id="'.$row["car_id"].'
                ">Edit</button>
                <button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["car_id"].'
                ">Delete</button>
        </tr>
        ';
    }
}
else
{
    $output .='
    <tr>
        <td colspan="4" align="center">Data not found</td>
    </tr>
    ';
     
}

$output .='</table>';

echo $output;

?>