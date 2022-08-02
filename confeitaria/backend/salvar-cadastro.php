<?php
    include_once 'cadastro-class.php';

    // if(isset($_POST['cadastro_nome']) && isset($_POST['cadastro_descr']) && isset($_POST['cadastro_prec']) && isset($_POST['cadastro_cate'])){
            
        $cadastro = new cadastro();

            /*if(isset($_POST['id'])){

                $cardapio->set_card_id($_POST['id']);

            }*/

        $cadastro->set_cadastro_nome($_POST['cadastro_nome']);
        $cadastro->set_cadastro_email($_POST['cadastro_email']);
        $cadastro->set_cadastro_senha($_POST['cadastro_senha']);

        $cadastro->inserir_cadastro();

        header("location: http://localhost/confeitaria/frontend/cardapio.php");
   // }

?>