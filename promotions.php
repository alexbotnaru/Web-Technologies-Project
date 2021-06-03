<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" href="jquery-ui.css">
    <script src="jquery.min.js"></script>  
		<script src="jquery-ui.js"></script>
    


    <title>Expert-Auto</title>
</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-xxl">
        <a class="navbar-brand" href="index.php">Expert-Auto</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="promotions.php">Promotii</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categorii
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Hatchback</a></li>
                <li><a class="dropdown-item" href="#">Sedan</a></li>
                <li><a class="dropdown-item" href="#">Van</a></li>
                <li><a class="dropdown-item" href="#">Coupe</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Remorci</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contacteaza-ne</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="messages.php">Mesaje</a>
            </li>
            <a href="logout.php" class="btn btn-outline-success" >Log Out</a>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="ex.Dacia" aria-label="Cauta">
            <button class="btn btn-outline-success" type="submit">Cauta</button>
          </form>
        </div>
      </div>
    </nav>
  </header>


<div class="container">
  
      <div id="user_data" class="table-responsive">
      </div>
      <div align="right" >
    <button type="button" name="add" id="add" class="btn btn-success btn-xs">Add</button>
  </div>
  
</div>

<div id="user_dialog" title="Add Data">
  <form method="post" id="user_form">
    <div class="form-group">
      <label>Image path</label>
      <input type="text" name="image_path" id="image_path" class="form-control" />
      <span id="error_image_path" class="text-danger"></span>
    </div>

    <div class="form-group">
      <label>Pret</label>
      <input type="text" name="pret" id="pret" class="form-control" />
      <span id="error_pret" class="text-danger"></span>
    </div>

    <div class="form-group">
      <label>Marca</label>
      <input type="text" name="marca" id="marca" class="form-control" />
      <span id="error_marca" class="text-danger"></span>
    </div>

    <div class="form-group">
      <label>Model</label>
      <input type="text" name="model" id="model" class="form-control" />
      <span id="error_model" class="text-danger"></span>
    </div>

    <div class="form-group">
      <label>Anul</label>
      <input type="text" name="anul" id="anul" class="form-control" />
      <span id="error_anul" class="text-danger"></span>
    </div>

    <div class="form-group">
      <input type="hidden" name="action" id="action" value="insert" />
      <input type="hidden" name="hidden_id" id="hidden_id"/>
      <input type="submit" name="form_action" id="form_action" class="btn btn-info" value="Insert"/>
    </div>
    </form>
</div>

<div id="action_alert" title="Action">

</div>

<div id="delete_confirmation" title="confirmation">
  <p> Sunteti sigur ca doriti sa stergeti aceasta inregistrare?</p>
</div>
 
    <script>
      $(document).ready(function(){
        load_data();

        function load_data()
        {
          $.ajax({
            url:"api/fetch.php",
            method:"POST",
            success:function(data)
            {
              $('#user_data').html(data);
            }
          });
        }
      

      $('#user_dialog').dialog({
        autoOpen:false,
        width:400
      });

      $('#add').click(function(){
        $('#user_dialog').attr('title','Add');
        $('#action').val('insert');
        $('#form_action').val('Insert');
        $('#user_form')[0].reset();
        $('#form_action').attr('disabled', false);
        $('#user_dialog').dialog('open');

      });

      $('#user_form').on('submit', function(event){
        event.preventDefault();
        var error_image_path = '';
        var error_pret = '';
        var error_marca = '';
        var error_model = '';
        var error_anul = '';
        if($('#pret').val() == '')
        {
          error_pret = 'Indicati pretul';
          $('#error_pret').text(error_pret);
          $('#pret').css('border-color','#cc0000');
        }
        else
        {
          error_pret = '';
          $('#error_pret').text(error_pret);
          $('#pret').css('border-color', '');
        }


        if($('#marca').val() == '')
        {
          error_marca = 'Indicati marca automobilului';
          $('#error_marca').text(error_marca);
          $('#marca').css('border-color','#cc0000');
        }
        else
        {
          error_marca = '';
          $('#error_marca').text(error_marca);
          $('#marca').css('border-color', '#cc0000');
        }

        if($('#anul').val() == '')
        {
          error_anul = 'Indicati anul automobilului';
          $('#error_anul').text(error_anul);
          $('#anul').css('border-color','#cc0000');
        }
        else
        {
          error_anul = '';
          $('#error_anul').text(error_anul);
          $('#anul').css('border-color', '#cc0000');
        }

        if(error_pret != '' || error_marca != '' || error_anul != '')
        {
          return false;
        }
        else{

          $('#form_action').attr('disabled','disabled');
          var form_data = $(this).serialize();
          $.ajax({
            url:"api/action.php",
            method:"POST",
            data:form_data,
            success:function(data){
              $('#user_dialog').dialog('close');
              $('#action_alert').html(data);
              $('#action_alert').dialog('open');
              load_data();
              $('#form_action').attr('disabled',false);
            }
          });
        }

      });

      $('#action_alert').dialog({
        autoOpen:false
      });

      $(document).on('click', '.edit', function(){
        var id = $(this).attr("id");
        var action = 'fetch_single';
        $.ajax({
          url:"api/action.php",
          method:"POST",
          data:{id:id, action:action},
          dataType:"json",
          success:function(data){
            $('#image_path').val(data.image_path);
            $('#pret').val(data.pret);
            $('#marca').val(data.marca);
            $('#model').val(data.model);
            $('#anul').val(data.anul);

            $('#user_dialog').attr('title', 'Editare');
            $('#action').val('update');
            $('#hidden_id').val(id);
            $('#form_action').val('Update');
            $('#user_dialog').dialog('open'); //deschide fereastra de dialog cu datele completate

          }
        });
      });


      $('#delete_confirmation').dialog({
        autoOpen: false,
        modal: true,
        buttons: {
          Ok: function(){
            var id = $(this).data("id");
            var action = 'delete';
            $.ajax({
              url: "api/action.php",
              method: "POST",
              data:{id:id, action:action},
              success:function(data)
              {
                $('#delete_confirmation').dialog('close');
                load_data();
              }
            })
          },
          Cancel: function(){
            $(this).dialog('close');

          }
        }
      });

      $(document).on('click','.delete', function(){
        var id = $(this).attr("id");
        $('#delete_confirmation').data('id', id).dialog('open');
      });
    });
      </script>
       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    
  
</body>

</html>