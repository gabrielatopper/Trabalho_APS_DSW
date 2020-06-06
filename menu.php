<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<div id="menu">
    <a class="btn btn-primary" href="index.php">Início</a>
    <a class="btn btn-primary" href="produtos.php">Produtos</a>
    <a class="btn btn-primary" href="meuCarrinho.php">Carrinho de Compras</a>
    
    <?php
        if( session_status() != PHP_SESSION_ACTIVE ){
            session_start();
        }

        if(  isset( $_SESSION['logado']) && $_SESSION['logado']  ){
            echo '<a class="btn btn-primary" href="categorias.php">Categorias</a>';

            echo "Olá ". $_SESSION['nome_usuario']; 
            echo ' <a class="btn btn-primary" href="deslogar.php">Sair</a> ';
        }else{
            echo ' <a class="btn btn-primary" href="login.php">Login</a> ';
        }

    ?>


    
</div>