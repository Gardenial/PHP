<?php
//Classe de Cadastro
    class Cadastro{
        //Declaração de varáveis
        private int $cpf;
        private string $nome;
        private string $telefone;
        private string $endereco;
        private string $cidade;

        public function __construct($cpf, $nome, $telefone, $endereco, $cidade){
            $this->setCPF($cpf);
            $this->setNome($nome);
            $this->setTelefone($telefone);
            $this->setEndereco($endereco);
            $this->setCidade($cidade);
        }//Fim do construtor

        //Métodos modificadores e de consulta
        public function getCPF(){
            return $this->cpf;
        }//Fim do Método

        public function getNome(){
            return $this->nome;
        }//Fim do Método

        public function getTelefone(){
            return $this->telefone;
        }//Fim do método

        public function getEndereco(){
            return $this->endereco;
        }//Fim do Método

        public function getCidade(){
            return $this->cidade;
        }

        public function setCPF($cpf){
            $this->cpf = $cpf;
        }//fim do método

        public function setNome( $nome ){
            $this->nome = $nome;
        }//Fim do Método

        public function setTelefone( $telefone ){
            $this->telefone = $telefone;
        }//Fim do Método

        public function setEndereco( $endereco ){
            $this->endereco = $endereco;
        }//Fim do Método

        public function setCidade( $cidade ){
            $this->cidade = $cidade;
        }//Fim do Método

        public function imprimir(){
            $msg =  "\nCPF: ".$this->getCPF().
                    "\nNome: ".$this->getNome().
                    "\nTelefone: ".$this->getTelefone().
                    "\nEndereço: ".$this->getEndereco().
                    "\nCidade: ".$this->getCidade();
            return $msg;
        }//Fim do Método

        public function excluir(){
            $this->setCPF(0);
            $this->setNome("");
            $this->setTelefone("");
            $this->setEndereco("");
            $this->setCidade("");
            return "Dados Excluidos!";
        }//Fim do Método
        

        public function menu(){
            $men = "\nEscolha o que deseja atualizar :".
                    "\n 1. Nome".
                    "\n 2. Telefone".
                    "\n 3. Endereço".
                    "\n 4. Cidade";
        }//Fim do Método

        public function atualizar($opcao, $dado){
            switch ($opcao) {
                case 1:
                    $this->setNome($dado);
                    break;
                case 2:
                    $this->setTelefone($dado);
                    break;
                case 3:
                    $this->setEndereco($dado);
                    break;
                case 4:
                    $this->setCidade($dado);
                    break;
                default:
                   return "Opção escolhida não é válida.";
                    break;
            }


        }//Fim do Método
    }//Fim da Classe Cadastro
?>