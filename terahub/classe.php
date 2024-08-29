<?php
    class clsVendas
    {
        private $codv;
        private $qtd;
        private $date;
        private $pgt;

        //-------------------------------------

        public function getCodv()
        {
            return $this->codv;
        }
        public function setCodv($ccv)
        {
            $this->codv = $ccv;
        }

        //-------------------------------------

        public function getQtd()
        {
            return $this->qtd;
        }
        public function setQtd($cqtd)
        {
            $this->qtd = $cqtd;
        }

        //-------------------------------------

        public function getDate()
        {
            return $this->date;
        }
        public function setDate($cd)
        {
            $this->date = $cd;
        }

        //-------------------------------------

        public function getPgt()
        {
            return $this->pgt;
        }
        public function setPgt($cpgt)
        {
            $this->pgt = $cpgt;
        }

        //------------------------------------

        public function inserir()
        {
            include_once "BD/conexao.php";

            try {
                $comando=$conexao->prepare("insert into formvendas (codv,qtd,dat,pagto) values(?,?,?,?)");
                $comando->bindParam(1,$this->codv);
                $comando->bindParam(2,$this->qtd);
                $comando->bindParam(3,$this->date);
                $comando->bindParam(4,$this->pgt);

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

        public function apagar()
        {
            include_once "BD/conexao.php";

            try {
                $comando=$conexao->prepare("delete from formvendas where codv = ?");
                $comando->bindParam(1,$this->codv);

                if($comando->execute())
                {
                    $retorno = "Deletado com sucesso";
                }
            }
            catch (PDOException $erro)
            {
                $retorno = "erro: " . $erro->getMessage();
            }
            return $retorno;
        }

        public function alteracao()
        {
            include_once "BD/conexao.php";

            try {
                $comando=$conexao->prepare("update formvendas set qtd = ? ,dat = ? ,pagto = ? where codv = ? ");
                $comando->bindParam(4,$this->codv);
                $comando->bindParam(1,$this->qtd);
                $comando->bindParam(2,$this->date);
                $comando->bindParam(3,$this->pgt);

                if($comando->execute())
                {
                    $retorno = "Alterado com sucesso";
                }
            }
            catch (PDOException $erro)
            {
                $retorno = "erro: " . $erro->getMessage();
            }
            return $retorno;
        }
    }

    class clsProd
    {
        private $codprod;
        private $desc;
        private $venc;
        private $valor;

        //-------------------------------------

        public function getcodprod()
        {
            return $this->codprod;
        }
        public function setcodprod($ccp)
        {
            $this->codprod = $ccp;
        }

        //-------------------------------------

        public function getdesc()
        {
            return $this->desc;
        }
        public function setdesc($cds)
        {
            $this->desc = $cds;
        }

        //------------------------------------

        public function getVenc()
        {
            return $this->venc;
        }
        public function setVenc($cvenc)
        {
            $this->venc = $cvenc;
        }

        //------------------------------------

        public function getVlr()
        {
            return $this->valor;
        }
        public function setVlr($cvlr)
        {
            $this->valor = $cvlr;
        }

        //------------------------------------

        public function inserir()
        {
            include_once "BD/conexao.php";

            try {
                $comando=$conexao->prepare("insert into produtos (codprod,descricao,valor,vencimento) values(?,?,?,?)");
                $comando->bindParam(1,$this->codprod);
                $comando->bindParam(2,$this->desc);
                $comando->bindParam(3,$this->valor);
                $comando->bindParam(4,$this->venc);

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

        public function apagar()
        {
            include_once "BD/conexao.php";

            try {
                $comando=$conexao->prepare("delete from produtos where codprod = ?");
                $comando->bindParam(1,$this->codprod);

                if($comando->execute())
                {
                    $retorno = "Deletado com sucesso";
                }
            }
            catch (PDOException $erro)
            {
                $retorno = "erro: " . $erro->getMessage();
            }
            return $retorno;
        }

        public function alteracao()
        {
            include_once "BD/conexao.php";

            try {
                $comando=$conexao->prepare("update produtos set descricao = ? ,valor = ? ,vencimento = ? where codprod = ? ");
                $comando->bindParam(4,$this->codprod);
                $comando->bindParam(1,$this->desc);
                $comando->bindParam(2,$this->valor);
                $comando->bindParam(3,$this->venc);

                if($comando->execute())
                {
                    $retorno = "Alterado com sucesso";
                }
            }
            catch (PDOException $erro)
            {
                $retorno = "erro: " . $erro->getMessage();
            }
            return $retorno;
        }

    }

    class listagemP
    {
        private $dataInicial;
        private $dataFinal;
        private $listagemCD;

        //-------------------------------------

         public function getDataI()
         {
             return $this->dataInicial;
         }
         public function setDataI($DI)
         {
             $this->dataInicial = $DI;
         }

        //-------------------------------------

        public function getDataF()
        {
            return $this->dataFinal;
        }
        public function setDataF($DF)
        {
            $this->dataFinal = $DF;
        }

        //-------------------------------------

         public function getListagemCD()
         {
             return $this->listagemCD;
         }
         public function setListagemCD($LCD)
         {
             if($LCD == "cod")
             {
                 $this->listagemCD = "codprod";
                 return $this->listagemCD;
             }
             else
             {
                 $this->listagemCD = "descricao";
                 return $this->listagemCD;
             }
         }

         //------------------------------------

         public function listagemData()
        {
            include_once "BD/conexao.php";

            try {
                $comando=$conexao->prepare("select * from produtos where vencimento >= ? and vencimento <= ?");
                $comando->bindParam(1,$this->dataInicial);
                $comando->bindParam(2,$this->dataFinal);

                $comando->execute();
                $retorno = $comando->fetchAll(PDO::FETCH_ASSOC);

            }
            catch (PDOException $erro)
            {
                $retorno = "erro: " . $erro->getMessage();
            }
            return $retorno;
        }

        public function listagemCD()
        {
            include_once "BD/conexao.php";

            try {
                $comando=$conexao->prepare("select * from produtos order by ?");
                $comando->bindParam(1,$this->listagemCD);

                $comando->execute();
                $retorno = $comando->fetchAll(PDO::FETCH_ASSOC);
            }
            catch (PDOException $erro)
            {
                $retorno = "erro: " . $erro->getMessage();
            }
            return $retorno;
        }
    }

    class listagemV
    {
        private $listagem;

        //-------------------------------------

        public function getListagem()
        {
            return $this->listagem;
        }
        public function setListagem($LPV)
        {
            if($LPV == "vista")
            {
                $this->listagem = "v";
                return $this->listagem;
            }
            else
            {
                $this->listagem = "p";
                return $this->listagem;
            }
        }

        //------------------------------------

        public function listagemVe()
        {
            include_once "BD/conexao.php";
            // var_dump($conexao);exit;
            try {
                $comando=$conexao->prepare("select * from formvendas where pagto = ?");
                $comando->bindParam(1,$this->listagem);

                $comando->execute();
                $retorno = $comando->fetchAll(PDO::FETCH_ASSOC);
            }
            catch (PDOException $erro)
            {
                $retorno = "erro: " . $erro->getMessage();
            }
            return $retorno;
        }
    }

    class listagemC
    {

        public function listagemCli()
        {
            include_once "BD/conexao.php";
            // var_dump($conexao);exit;
            try {
                $comando=$conexao->prepare("select * from clientes order by cpf");

                $comando->execute();
                $retorno = $comando->fetchAll(PDO::FETCH_ASSOC);
            }
            catch (PDOException $erro)
            {
                $retorno = "erro: " . $erro->getMessage();
            }
            return $retorno;
        }
    }

    class cliente
    {

        private $cpf;
        private $nome;
        private $cep;
        private $tel;
        private $email;
        private $nasc;

         //-------------------------------------

         public function getCpf()
         {
             return $this->cpf;
         }
         public function setCpf($ccs)
         {
             $this->cpf = $ccs;
         }

          //-------------------------------------

        public function getNome()
        {
            return $this->nome;
        }
        public function setNome($ccp2)
        {
            $this->nome = $ccp2;
        }

         //-------------------------------------

         public function getCep()
         {
             return $this->cep;
         }
         public function setCep($ccp3)
         {
             $this->cep = $ccp3;
         }

          //-------------------------------------

        public function getTel()
        {
            return $this->tel;
        }
        public function setTel($ccp4)
        {
            $this->tel = $ccp4;
        }

         //-------------------------------------

         public function getEmail()
         {
             return $this->email;
         }
         public function setEmail($ccp5)
         {
             $this->email = $ccp5;
         }

          //-------------------------------------

        public function getNasc()
        {
            return $this->nasc;
        }
        public function setNasc($ccp6)
        {
            $this->nasc = $ccp6;
        }
        
          //--------------------------------------

        public function inserir()
        {
            include_once "BD/conexao.php";

            try {
                $comando=$conexao->prepare("insert into clientes (cpf,nome,cep,tel,email,nasc) values(?,?,?,?,?,?)");
                $comando->bindParam(1,$this->cpf);
                $comando->bindParam(2,$this->nome);
                $comando->bindParam(3,$this->cep);
                $comando->bindParam(4,$this->tel);
                $comando->bindParam(5,$this->email);
                $comando->bindParam(6,$this->nasc);

                if($comando->execute())
                {
                    $retorno = "Gravado com sucesso";
                }
            }
            catch (PDOException $erro)
            {
                $retorno = "erro: " . $erro->getMessage();
            }
            return $retorno;
        }

        public function apagar()
        {
            include_once "BD/conexao.php";

            try {
                $comando=$conexao->prepare("delete from clientes where cpf = ?");
                $comando->bindParam(1,$this->cpf);

                if($comando->execute())
                {
                    $retorno = "Excluido com sucesso";
                }
            }
            catch (PDOException $erro)
            {
                $retorno = "erro: " . $erro->getMessage();
            }
            return $retorno;
        }

        public function alteracao()
        {
            include_once "BD/conexao.php";

            try {
                $comando=$conexao->prepare("update clientes set nome = ? ,cep = ? ,tel = ?, email = ?, nasc = ? where cpf = ? ");
                $comando->bindParam(6,$this->cpf);
                $comando->bindParam(1,$this->nome);
                $comando->bindParam(2,$this->cep);
                $comando->bindParam(3,$this->tel);
                $comando->bindParam(4,$this->email);
                $comando->bindParam(5,$this->nasc);

                if($comando->execute())
                {
                    $retorno = "Alterado com sucesso";
                }
            }
            catch (PDOException $erro)
            {
                $retorno = "erro: " . $erro->getMessage();
            }
            return $retorno;
        }
    }

    class clsConsulta
    {
        private $cpf;

        //-------------------------------------

        public function getCpf()
        {
            return $this->cpf;
        }
        public function setCpf($ccs)
        {
            $this->cpf = $ccs;
        }

        //-------------------------------------

        public function ajaxC()
        {
            include_once "BD/conexao.php";
            // var_dump($conexao);exit;
            try {
                $comando=$conexao->prepare("select * from clientes where cpf = ?");
                $comando->bindParam(1,$this->cpf);
                $comando->execute();
                $retorno = $comando->fetchAll(PDO::FETCH_ASSOC);
            }
            catch (PDOException $erro)
            {
                $retorno = "erro: " . $erro->getMessage();
            }
            return $retorno;
        }
    }
?>
