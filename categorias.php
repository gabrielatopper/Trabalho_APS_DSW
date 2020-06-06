<?php
    $action = "inserir";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div id="body">
    <?php  require_once "menu.php"; ?>

    <h1>Categorias</h1>

    <form method="POST" action="salvarCategoria.php?<?php echo $action; ?>">
        <label for="txtNome">Nome:</label>
        <input type="text" name="txtNome" required />
        <br>
        <input class="btn btn-primary" type="submit" value="Salvar" />
        <input class="btn btn-primary" type="reset" value="Limpar" />
    </form>

    <hr>

    <table id="tbl_categorias">
        <tr>
            <th>Código</th>
            <th>Nome</th>
        </tr>

        <?php
            include_once 'model/clsConexao.php';
            $query = "SELECT * FROM categorias";
            $result = Conexao::consultar( $query );

            while( $cat = mysqli_fetch_array($result)){
                echo '<tr>'; 
                echo '    <td>'.$cat['id'].'</td>';
                echo '    <td>'.$cat['nome'].'</td>';
                echo '</tr>';
            }
        ?>
        
    </table>


    
</body>
</div>
</html>