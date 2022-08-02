<?php
    include_once 'contato-class.php';

    // if(isset($_POST['cont_nome']) && isset($_POST['cont_descr']) && isset($_POST['cont_prec']) && isset($_POST['cont_cate'])){
            
        $cont = new contato();

            /*if(isset($_POST['id'])){

                $cardapio->set_card_id($_POST['id']);

            }*/

        $cont->set_cont_nome($_POST['cont_nome']);
        $cont->set_cont_email($_POST['cont_email']);
        $cont->set_cont_mensagem($_POST['cont_mensagem']);

        $cont->inserir_cont();

        header("location: http://localhost/confeitaria/frontend/cardapio.php");
   // }

?>