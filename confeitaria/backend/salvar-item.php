<?php

    include_once 'item-class.php';

    if(isset($_POST['item_nome']) && isset($_POST['item_descr']) && isset($_POST['item_prec']) && isset($_POST['item_cate'])){
            
            $item = new item();

                /*if(isset($_POST['id'])){

                    $cardapio->set_card_id($_POST['id']);

                }*/

                $item->set_item_nome($_POST['item_nome']);
                $item->set_item_descr($_POST['item_descr']);
                $item->set_item_prec($_POST['item_prec']);
                $item->set_item_cate($_POST['item_cate']);
    }

?>
