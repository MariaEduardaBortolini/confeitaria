<?php
 
    include_once 'conn.class.php';
    
    class contato {

        // VARIÁVEIS DOS ITENS

        private $cont_nome;
        private $cont_email;
        private $cont_mensagem;

        // GETS DOS ITENS

        public function get_cont_id(){
            return $this->cont_id;
        }

        public function get_cont_nome(){
            return $this->cont_nome;
        }

        public function get_cont_email(){
            return $this->cont_email;
        }

        public function get_cont_mensagem(){
            return $this->cont_mensagem;
        }

        // SETS DOS ITENS

        public function set_cont_id($valor){
            $this->cont_id = $valor;
        }

        public function set_cont_nome($valor){
            $this->cont_nome = $valor;
        }

        public function set_cont_email($valor){
            $this->cont_email = $valor;
        }

        public function set_cont_mensagem($valor){
            $this->cont_mensagem = $valor;
        }

        // CRUD ITENS

        public function inserir_cont(){

            $pdo = conn::connect();

                // if($this->ingr_id !== null && $this->ingr_id != ''){

                //     $sql = 'UPDATE cont
                //             SET nome = :nome, email = :email, mensagem = :mensagem
                //             WHERE id = :id';
                // }else{

                    $sql = 'INSERT INTO contato
                            (nome, email, mensagem)
                            VALUES(:nome, :email, :mensagem)';
                    
                    
                //}

                //die($sql);
                $resultado = $pdo->prepare($sql);

                    $resultado->bindValue(':nome', $this->cont_nome);
                    $resultado->bindValue(':email', $this->cont_email);
                    $resultado->bindValue(':mensagem', $this->cont_mensagem);

                    // if($this->cont_id !== null && $this->cont_id != ''){

                    //     $resultado->bindValue(':id', $this->cont_id);

                    // }

                $resultado->execute();
                
            $pdo = conn::disconnect();

        }

        public function excluir_ingr(){

            $pdo = $this->connect();

                if($this->cont_id !== null && $this->cont_id != ''){

                    $sql = 'DELETE FROM cont
                            WHERE id = :id';

                }

                $resultado = $pdo->prepare($sql);
                        
                    $resultado->bindValue(':id', $this->cont_id);
                    
                $resultado->execute();
                
            $pdo = $this->disconnect();

        }

        public function listar_cont(){

            $pdo = $this->connect();

                if($this->cont_id !== null && $this->cont_id != ''){

                    $sql = 'SELECT * FROM contato
                            WHERE id = :id';

                }else{

                    $sql = 'SELECT * FROM contato';

                }

                $resultado = $pdo->prepare($sql);
                    
                    if($this->cont_id !== null && $this->cont_id != ''){

                        $resultado->bindValue(':id', $this->cont_id);
                    
                    }
                    
                $resultado->execute();
                
            $pdo = $this->disconnect();
            
            return $resultado->fetchAll(PDO::FETCH_ASSOC);

        }

    }
?>