<?php
 
    include_once 'conn.class.php';
    
    class cadastro {

        // VARIÁVEIS DOS ITENS

        private $cadastro_nome;
        private $cadastro_email;
        private $cadastro_senha;

        // GETS DOS ITENS

        public function get_cadastro_id(){
            return $this->cadastro_id;
        }

        public function get_cadastro_nome(){
            return $this->cadastro_nome;
        }

        public function get_cadastro_email(){
            return $this->cadastro_email;
        }

        public function get_cadastro_senha(){
            return $this->cadastro_senha;
        }

        // SETS DOS ITENS

        public function set_cadastro_id($valor){
            $this->cadastro_id = $valor;
        }

        public function set_cadastro_nome($valor){
            $this->cadastro_nome = $valor;
        }

        public function set_cadastro_email($valor){
            $this->cadastro_email = $valor;
        }

        public function set_cadastro_senha($valor){
            $this->cadastro_senha = $valor;
        }

        // CRUD ITENS

        public function inserir_cadastro(){

            $pdo = conn::connect();

                // if($this->ingr_id !== null && $this->ingr_id != ''){

                //     $sql = 'UPDATE cadastro
                //             SET nome = :nome, email = :email, senha = :senha
                //             WHERE id = :id';
                // }else{

                    $sql = 'INSERT INTO cadastro
                            (nome, email, senha)
                            VALUES(:nome, :email, :senha)';
                    
                    
                //}

                //die($sql);
                $resultado = $pdo->prepare($sql);

                    $resultado->bindValue(':nome', $this->cadastro_nome);
                    $resultado->bindValue(':email', $this->cadastro_email);
                    $resultado->bindValue(':senha', $this->cadastro_senha);

                    // if($this->cadastro_id !== null && $this->cadastro_id != ''){

                    //     $resultado->bindValue(':id', $this->cadastro_id);

                    // }

                $resultado->execute();
                
            $pdo = conn::disconnect();

        }

        public function excluir_ingr(){

            $pdo = $this->connect();

                if($this->cadastro_id !== null && $this->cadastro_id != ''){

                    $sql = 'DELETE FROM cadastro
                            WHERE id = :id';

                }

                $resultado = $pdo->prepare($sql);
                        
                    $resultado->bindValue(':id', $this->cadastro_id);
                    
                $resultado->execute();
                
            $pdo = $this->disconnect();

        }

        public function listar_cadastro(){

            $pdo = $this->connect();

                if($this->cadastro_id !== null && $this->cadastro_id != ''){

                    $sql = 'SELECT * FROM cadastro
                            WHERE id = :id';

                }else{

                    $sql = 'SELECT * FROM cadastro';

                }

                $resultado = $pdo->prepare($sql);
                    
                    if($this->cadastro_id !== null && $this->cadastro_id != ''){

                        $resultado->bindValue(':id', $this->cadastro_id);
                    
                    }
                    
                $resultado->execute();
                
            $pdo = $this->disconnect();
            
            return $resultado->fetchAll(PDO::FETCH_ASSOC);

        }

    }
?>