<?php

class Conexao{
    private static $local = "localhost";
    private static $user = "root";
    private static $senha = "";
    private static $banco = "loja_livros";

    private static function abrir(){ //função p abrir a conexão
        $conn = mysqli_connect(self::$local , self::$user, self::$senha , self::$banco );
        if( $conn ) { //conn = conexão
            return $conn;
        }else{
            return NULL;
        }
    }
    private static function fechar( $conn ){ //metodo p fechar a conexão 
        if( $conn ){
            mysqli_close($conn);
        }
    }
    public static function consultar($query){
        $conn = self::abrir(); //abrir a conexão
        if( $conn ){
            $result = mysqli_query($conn, $query); //executa uma query no banco
            self::fechar($conn);
            return $result;
        }
    }

    public static function executar($query){ //recebe uma query (o q irá executar no banco)
        $conn = self::abrir();
        if( $conn ){
            mysqli_query($conn, $query);
            self::fechar($conn);
        }     
    }



}


?>