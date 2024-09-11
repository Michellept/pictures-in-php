<?php
$color = isset ( $_GET['color'] ) ? $_GET['color'] : "black";

$list = array ( "Tortillas", "Jitomate", "Queso", "Aguacate" );
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
</head>

<body style=background-color:<?php echo $color; ?>>
    <h1 id="title"><?php echo "Printuras Famosas"; ?></h1>
    <input id="name" type="text" class="form-control"></input>
    <button id="changeTitle"> Cambiar Titulo </button>
    <!-- <h1 id="title">Color del body <?php echo $color; ?></h1> -->



    <!-- <ul><?php foreach ($list as $item) {              
        echo "<li class='ingrediente'> $item </li>";
            }
         ?>
  </ul> 

     <p id="resultado">
    </p> -->

    <div class="container">
        <div class="gallery"></div>

    </div>

    <div class="container-footer">
        <button id="count"> Contar Pinturas </button>
        <p class="date"> <?php echo date("Y-m-d H:i:s" ); ?></p>

    </div>

    <script>
    $(document).ready(function() {
        $("#changeTitle").click(function() {
            newName = $("#name").val();
            $("#title").html(newName);
        });

    });
    </script>

    <script>
    $(document).ready(function() {
        // Cargar los datos de las pinturas desde pictures.php
        $.ajax({
            url: 'pictures.php',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                // Botón para contar el total de pinturas
                $("#count").click(function() {
                    alert("El total de pinturas es: " + data.length);
                });

                // Iterar sobre el array de pinturas y generar el HTML
                $.each(data, function(index, item) {
                    $('.gallery').append(`
                    <div class="painting">
                        <img src="${item.imagen}" alt="${item.title}" class="painting-img" data-title="${item.title}" data-autor="${item.autor}">
                        <div class="title">${item.title}</div>
                        <div class="author">${item.autor}</div>
                    </div>
                `);
                });

                // Asignar evento click a las imágenes
                $('.gallery').on('click', '.painting-img', function() {
                    var title = $(this).attr('data-title');
                    var autor = $(this).attr('data-autor');
                    alert('Obra: ' + title + '\nAutor: ' + autor);
                });
            },
            error: function(error) {
                console.log('Error al cargar las pinturas:', error);
            }
        });
    });
    </script>



</body>

</html>