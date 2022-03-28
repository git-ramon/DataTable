<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.11.5/r-2.2.9/datatables.css"/>
 
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.11.5/r-2.2.9/datatables.js"></script>
    <title>DataTable</title>

</head>
<body>
    <div class="">
        <h2>Usando DataTable</h2>
        <table class="table" id="tableuser">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Sobre Nome</th>
                    <th>Login</th>
                    <th>Email</th>
                </tr>
            </thead>
        </table>
    </div>

        <!-- Usando DataTable com Ajax  -->
        <script>
            $(document).ready(function() {
            $('#tableuser').DataTable( {
                "ajax": "Ajax/Usuarios/getDados",
                "language": {
                        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json" // Traduçao dos campos nativos 
                    }
                } );
            } );
        </script> 
</body>
</html>