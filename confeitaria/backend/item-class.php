<?php
 
    include_once 'conn.class.php';
    
    class item {

        // VARIÁVEIS DOS ITENS

        private $item_nome;
        private $item_descr;
        private $item_prec;
        private $item_cate;
        private $item_foto;

        // GETS DOS ITENS

        public function get_item_id(){
            return $this->item_id;
        }

        public function get_item_nome(){
            return $this->item_nome;
        }

        public function get_item_descr(){
            return $this->item_descr;
        }

        public function get_item_prec(){
            return $this->item_prec;
        }

        public function get_item_cate(){
            return $this->item_cate;
        }

        public function get_item_foto(){
            return $this->item_foto;
        }

        // SETS DOS ITENS

        public function set_item_id($valor){
            $this->item_id = $valor;
        }

        public function set_item_nome($valor){
            $this->item_nome = $valor;
        }

        public function set_item_descr($valor){
            $this->item_descr = $valor;
        }

        public function set_item_prec($valor){
            $this->item_prec = $valor;
        }

        public function set_item_cate($valor){
            $this->item_cate = $valor;
        }

        public function set_item_foto($valor){
            $this->item_foto = $valor;
        }

        // CRUD ITENS

        public function inserir_item(){

            $pdo = conn::connect();

                // if($this->ingr_id !== null && $this->ingr_id != ''){

                //     $sql = 'UPDATE item
                //             SET nome = :nome, descr = :descr, prec = :prec, cate = :cate
                //             WHERE id = :id';
                // }else{

                    $sql = 'INSERT INTO item
                            (nome, descr, prec, cate)
                            VALUES(:nome, :descr, :prec, :cate)';
                    
                    
                //}

                //die($sql);
                $resultado = $pdo->prepare($sql);

                    $resultado->bindValue(':nome', $this->item_nome);
                    $resultado->bindValue(':descr', $this->item_descr);
                    $resultado->bindValue(':prec', $this->item_prec);
                    $resultado->bindValue(':cate', $this->item_cate);

                    // if($this->item_id !== null && $this->item_id != ''){

                    //     $resultado->bindValue(':id', $this->item_id);

                    // }

                $resultado->execute();
                
            $pdo = conn::disconnect();

        }

        public function excluir_ingr(){

            $pdo = $this->connect();

                if($this->item_id !== null && $this->item_id != ''){

                    $sql = 'DELETE FROM item
                            WHERE id = :id';

                }

                $resultado = $pdo->prepare($sql);
                        
                    $resultado->bindValue(':id', $this->item_id);
                    
                $resultado->execute();
                
            $pdo = $this->disconnect();

        }

        public function listar_item(){

            $pdo = $this->connect();

                if($this->item_id !== null && $this->item_id != ''){

                    $sql = 'SELECT * FROM item
                            WHERE id = :id';

                }else{

                    $sql = 'SELECT * FROM item';

                }

                $resultado = $pdo->prepare($sql);
                    
                    if($this->item_id !== null && $this->item_id != ''){

                        $resultado->bindValue(':id', $this->item_id);
                    
                    }
                    
                $resultado->execute();
                
            $pdo = $this->disconnect();
            
            return $resultado->fetchAll(PDO::FETCH_ASSOC);

        }

    }
?>