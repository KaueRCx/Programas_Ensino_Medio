<?php
    class Pet
    {
        private $nome;
        private $nasc;
        private $prop;

        //-------------------------------------

        public function getNome()
        {
            return $this->nome;
        }
        public function setNome($cn)
        {
            $this->nome = $cn;
        }

        //-------------------------------------

        public function getNasc()
        {
            return $this->nasc;
        }
        public function setNasc($cns)
        {
            $this->nasc = $cns;
        }

        //-------------------------------------

        public function getProp()
        {
            return $this->prop;
        }
        public function setProp($cp)
        {
            $this->prop = $cp;
        }

        //-------------------------------------

        public function include()
        {
            include_once "../../BD/conexao.php";

            try {
                $comando=$conexao->prepare("insert into vet (nome,nasc,proprietario) values(?,?,?)");
                $comando->bindParam(1,$this->nome);
                $comando->bindParam(2,$this->nasc);
                $comando->bindParam(3,$this->prop);

                if($comando->execute())
                {
                    $retorno = "Gravação com sucesso";
                }
            }
            catch (PDOException $erro)
            {
                $retorno = "erro: " . $erro->getMessage();
            }
            return $retorno;
        }

        public function consulta()
        {
            include_once "../../BD/conexao.php";

            try {
                $comando=$conexao->prepare("select * from vet where prop = ?");
                $comando->bindParam(1,$this->prop);

                $comando->execute();
                $pet = $comando->fetchAll(PDO::FETCH_ASSOC);
                $retorno = json_encode($pet);

            }
            catch (PDOException $erro)
            {
                $retorno = "erro: " . $erro->getMessage();
            }
            return $retorno;
        }
    }

?>