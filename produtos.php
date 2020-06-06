<?php
    $action = "inserir";

    include_once 'model/clsCategoria.php';
    include_once 'model/clsProduto.php';
    include_once 'model/clsConexao.php';
    include_once 'dao/clsCategoriaDAO.php';
    include_once 'dao/clsProdutoDAO.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" >
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div id="body">
    <?php  require_once "menu.php"; ?>

    <h1>Cadastrar Produtos</h1>

<?php
if (  isset( $_SESSION['logado']) && $_SESSION['logado'] ){ 
?>

    <form method="POST" action="controller/salvarProduto.php?<?php echo $action; ?>" enctype="multipart/form-data">
	<fieldset>
	<legend>Dados do Produto</legend>
        <label for="txtNome">Nome:</label>
        <input type="text" name="txtNome" required />
        <br>
        <label for="txtPreco">Preço:</label>
        <input type="text" name="txtPreco" required />
        <br>
        <label for="txtQuantidade">Quantidade:</label>
        <input type="text" name="txtQuantidade" required />
        <br>

        <label for="categoria">Categoria:</label>
        <select name="categoria">
            <option value="0">Selecione a categoria...</option>
            <?php
                $lista = CategoriaDAO::getCategorias();

                foreach($lista as $cat){
                    echo '<option value="'   . $cat->id.  '">'  .$cat->nome. '</option>';
                }
            ?>
        </select>
        <br>

        <label for="foto">Foto:</label>
        <input type="file" name="foto" required />
        <br>
		
        <input class="btn btn-primary" type="submit" value="Salvar" />
        <input class="btn btn-primary" type="reset" value="Limpar" />
		</fieldset>
    </form>
<?php
}
?>

    <hr>

<?php
    $lista = ProdutoDAO::getProdutos();

    if( count($lista) == 0 ){
        echo "<h2>Nenhum produto cadastrado</h2>";
    }else{ 

?>

	
    <table id="tbl_categorias">
        <tr>
            <th>Código</th>
            <th>Foto</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Categoria</th>
            <th>Excluir</th>
            <th>Adicionar ao Carrinho</th>
        </tr>

        <?php


            foreach( $lista as $produto){
                echo '<tr>'; 
                echo '    <td>'.$produto->id.'</td>';
                echo '    <td><img src="fotos_produtos/'.$produto->foto.'" width="30px" ></td>';
                echo '    <td>'.$produto->nome.'</td>';
                echo '    <td>R$ '.$produto->preco.'</td>';
                echo '    <td>'.$produto->quantidade.'</td>';
                echo '    <td>'.$produto->categoria->nome.'</td>';
                echo '    <td><a href="controller/salvarProduto.php?excluir&idProduto='.$produto->id.'">Excluir</a></td>';
                echo '    <td><a href="controller/carrinho.php?adicionar&idProduto='.$produto->id.'">Adicionar ao Carrinho</a></td>';
                echo '</tr>';
            }
        ?>
        
    </table>

<?php 
    }
?>

 <script src="scripts.js"></script>
</body>
 </div> 
 
</html>