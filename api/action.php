<?php

include("../connection.php");

if(isset($_POST["action"]))
    {
        //Create
        if($_POST["action"] == "insert")
        {
            $query = "INSERT INTO cars(pret, marca, model, anul_fabricarii, img_path) 
                      VALUES('".$_POST["pret"]."', '".$_POST["marca"]."', '".$_POST["model"]."', '".$_POST["anul"]."', '".$_POST["image_path"]."')
                
                      ";
            mysqli_query($con, $query);
            echo '<p>Date inregistrate </p>';
        }

        //Read One
        if($_POST["action"] == 'fetch_single')
        {
            $query = "
            SELECT * FROM cars WHERE car_id = '".$_POST["id"]."'

            ";

            $result = mysqli_query($con, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                $output['pret'] = $row['pret'];
                $output['marca'] = $row['marca'];
                $output['model'] = $row['model'];
                $output['anul'] = $row['anul_fabricarii'];
                $output['image_path'] = $row['img_path'];

            }

            echo json_encode($output);//convert php array to json string
            
        }

        //Update
        if($_POST["action"] == "update")
        {
            $query = "
            UPDATE cars SET 
            pret = '".$_POST["pret"]."',
            marca = '".$_POST["marca"]."',
            model = '".$_POST["model"]."',
            anul_fabricarii = '".$_POST["anul"]."',
            img_path = '".$_POST["image_path"]."'
            WHERE car_id = '".$_POST["hidden_id"]."'
            ";

            mysqli_query($con, $query);
            echo '<p>Date actualizate</p>';
        }

        //Delete
        if($_POST["action"] == 'delete')
        {
           $query = "
           DELETE FROM cars WHERE car_id = '".$_POST["id"]."'
           ";

           mysqli_query($con, $query);

           echo '<p> Datele au fost sterse</p>';

        }
    }
?>