<?php

session_start();

class ClienteClass
{
    //atributos
    private $nome_cliente;
    private $dataNasc_cliente;
    private $email_cliente;
    private $cpf_cliente;
    private $estado_cliente;
    private $descricao;

    //get & set 
    /**
     * Get the value of nome_cliente
     */
    public function getNomeCliente()
    {
        return $this->nome_cliente;
    }

    /**
     * Set the value of nome_cliente
     */
    public function setNomeCliente($nome_cliente): self
    {
        $this->nome_cliente = $nome_cliente;

        return $this;
    }

    /**
     * Get the value of dataNasc_cliente
     */
    public function getDataNascCliente()
    {
        return $this->dataNasc_cliente;
    }

    /**
     * Set the value of dataNasc_cliente
     */
    public function setDataNascCliente($dataNasc_cliente): self
    {
        $this->dataNasc_cliente = $dataNasc_cliente;

        return $this;
    }

    /**
     * Get the value of email_cliente
     */
    public function getEmailCliente()
    {
        return $this->email_cliente;
    }

    /**
     * Set the value of email_cliente
     */
    public function setEmailCliente($email_cliente): self
    {
        $this->email_cliente = $email_cliente;

        return $this;
    }

    /**
     * Get the value of cpf_cliente
     */
    public function getCpfCliente()
    {
        return $this->cpf_cliente;
    }

    /**
     * Set the value of cpf_cliente
     */
    public function setCpfCliente($cpf_cliente): self
    {
        $this->cpf_cliente = $cpf_cliente;

        return $this;
    }

    /**
     * Get the value of estado_cliente
     */
    public function getEstadoCliente()
    {
        return $this->estado_cliente;
    }

    /**
     * Set the value of estado_cliente
     */
    public function setEstadoCliente($estado_cliente): self
    {
        $this->estado_cliente = $estado_cliente;

        return $this;
    }

    /**
     * Get the value of descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }


    //metodos
    public function inseir_cliente($nome, $dtn , $cpf ,$email, $descricao, $estado)
    {
        //setar valores
        $this->setNomeCliente($nome);
        $this->setEmailCliente($email);
        $this->setDescricao($descricao);
        $this->setEstadoCliente($estado);
        $this->setCpfCliente($cpf);
        $this->setDataNascCliente($dtn);

        //conectar com o bancodew dados insere os dados

        $resultado = true;

        //testar o resultado
        if ($resultado == true) {
            //mensagem
            $_SESSION["mensagem"] = 'Cliente cadastrado com sucesso';
            $_SESSION['mostrar_mensagem'] = 'SIM';
            header('location: inserir.php');
        } else {
            $_SESSION['mensagem'] = 'Erro';
            $_SESSION['mostrar_mensagem'] = 'SIM';
            header('location: inserir.php');
        }

    }


    public function consultar_cliente($nome , $cpf )
    {
        $this->setNomeCliente($nome);
        $this->setCpfCliente($cpf);

        //conectar com o bancodew dados insere os dados

        $clientes = [
            [
                  "nome" => "Severino Guilherme da Mata", 
                  "idade" => 78, 
                  "cpf" => "598.179.034-27", 
                  "rg" => "45.631.279-1", 
                  "data_nasc" => "13/01/1947", 
                  "sexo" => "Masculino", 
                  "signo" => "Capricórnio", 
                  "mae" => "Rebeca Hadassa Alana", 
                  "pai" => "Isaac Mário Osvaldo da Mata", 
                  "email" => "severinoguilhermedamata@libbero.com.br", 
                  "senha" => "Eb4Ot8m4E0", 
                  "cep" => "70686-715", 
                  "endereco" => "Quadra SQNW 111 Bloco C", 
                  "numero" => 433, 
                  "bairro" => "Setor Noroeste", 
                  "cidade" => "Brasília", 
                  "estado" => "DF", 
                  "telefone_fixo" => "(61) 3793-2759", 
                  "celular" => "(61) 99513-1386", 
                  "altura" => "1,62", 
                  "peso" => 72, 
                  "tipo_sanguineo" => "B-", 
                  "cor" => "laranja" 
               ], 
            [
                     "nome" => "Vanessa Letícia Elisa dos Santos", 
                     "idade" => 22, 
                     "cpf" => "713.903.440-02", 
                     "rg" => "38.070.146-7", 
                     "data_nasc" => "08/02/2003", 
                     "sexo" => "Feminino", 
                     "signo" => "Aquário", 
                     "mae" => "Malu Benedita Jennifer", 
                     "pai" => "Miguel Mateus dos Santos", 
                     "email" => "vanessa-dossantos79@fitttransportes.com.br", 
                     "senha" => "zUrMBjoeFA", 
                     "cep" => "68907-611", 
                     "endereco" => "Alameda Atenas", 
                     "numero" => 436, 
                     "bairro" => "Renascer", 
                     "cidade" => "Macapá", 
                     "estado" => "AP", 
                     "telefone_fixo" => "(96) 2962-9495", 
                     "celular" => "(96) 98726-7560", 
                     "altura" => "1,59", 
                     "peso" => 66, 
                     "tipo_sanguineo" => "B-", 
                     "cor" => "roxo" 
                  ], 
            [
                        "nome" => "Francisca Ayla Rocha", 
                        "idade" => 49, 
                        "cpf" => "340.275.227-10", 
                        "rg" => "36.647.250-1", 
                        "data_nasc" => "14/01/1976", 
                        "sexo" => "Feminino", 
                        "signo" => "Capricórnio", 
                        "mae" => "Louise Alessandra Cristiane", 
                        "pai" => "Pedro Paulo Matheus Rocha", 
                        "email" => "francisca-rocha94@hellokitty.com", 
                        "senha" => "Oc7RttJEDD", 
                        "cep" => "78557-096", 
                        "endereco" => "Rua Corumbá", 
                        "numero" => 105, 
                        "bairro" => "Setor Industrial", 
                        "cidade" => "Sinop", 
                        "estado" => "MT", 
                        "telefone_fixo" => "(66) 2779-5554", 
                        "celular" => "(66) 98746-0704", 
                        "altura" => "1,68", 
                        "peso" => 58, 
                        "tipo_sanguineo" => "AB+", 
                        "cor" => "preto" 
                     ], 
            [
                           "nome" => "Fátima Jennifer Souza", 
                           "idade" => 50, 
                           "cpf" => "841.622.282-72", 
                           "rg" => "15.990.201-0", 
                           "data_nasc" => "15/01/1975", 
                           "sexo" => "Feminino", 
                           "signo" => "Capricórnio", 
                           "mae" => "Emily Stella", 
                           "pai" => "Bernardo Nicolas Gael Souza", 
                           "email" => "fatimajennifersouza@solucao.adm.br", 
                           "senha" => "XiE7hdo2xy", 
                           "cep" => "92030-082", 
                           "endereco" => "Rua A", 
                           "numero" => 776, 
                           "bairro" => "Estância Velha", 
                           "cidade" => "Canoas", 
                           "estado" => "RS", 
                           "telefone_fixo" => "(51) 2927-4897", 
                           "celular" => "(51) 98406-8829", 
                           "altura" => "1,67", 
                           "peso" => 57, 
                           "tipo_sanguineo" => "AB+", 
                           "cor" => "vermelho" 
                        ], 
            [
                              "nome" => "Heloise Vanessa Nogueira", 
                              "idade" => 27, 
                              "cpf" => "059.944.944-61", 
                              "rg" => "42.606.006-4", 
                              "data_nasc" => "19/02/1998", 
                              "sexo" => "Feminino", 
                              "signo" => "Aquário", 
                              "mae" => "Isadora Sophia Allana", 
                              "pai" => "Diego Tiago Nogueira", 
                              "email" => "heloise-nogueira70@helponline-sti.com", 
                              "senha" => "1ZZ5NrSXRu", 
                              "cep" => "35930-079", 
                              "endereco" => "Rua Doutor Mascarenhas", 
                              "numero" => 578, 
                              "bairro" => "Novo Horizonte", 
                              "cidade" => "João Monlevade", 
                              "estado" => "MG", 
                              "telefone_fixo" => "(31) 3564-2674", 
                              "celular" => "(31) 98245-6300", 
                              "altura" => "1,85", 
                              "peso" => 86, 
                              "tipo_sanguineo" => "A+", 
                              "cor" => "verde" 
                           ], 
            [
                                 "nome" => "Isabela Liz da Luz", 
                                 "idade" => 46, 
                                 "cpf" => "300.248.261-70", 
                                 "rg" => "27.338.183-0", 
                                 "data_nasc" => "22/01/1979", 
                                 "sexo" => "Feminino", 
                                 "signo" => "Aquário", 
                                 "mae" => "Jaqueline Nicole Tereza", 
                                 "pai" => "Tiago Danilo Fábio da Luz", 
                                 "email" => "isabelalizdaluz@cerimoniallis.com.br", 
                                 "senha" => "AK7ws55l1a", 
                                 "cep" => "39404-319", 
                                 "endereco" => "Rua Padre Marinho", 
                                 "numero" => 574, 
                                 "bairro" => "Independência", 
                                 "cidade" => "Montes Claros", 
                                 "estado" => "MG", 
                                 "telefone_fixo" => "(38) 2836-8812", 
                                 "celular" => "(38) 98541-4055", 
                                 "altura" => "1,58", 
                                 "peso" => 60, 
                                 "tipo_sanguineo" => "B-", 
                                 "cor" => "vermelho" 
                              ], 
            [
                                    "nome" => "Camila Benedita Elaine Aragão", 
                                    "idade" => 80, 
                                    "cpf" => "301.675.930-64", 
                                    "rg" => "26.278.775-1", 
                                    "data_nasc" => "07/01/1945", 
                                    "sexo" => "Feminino", 
                                    "signo" => "Capricórnio", 
                                    "mae" => "Elza Priscila Adriana", 
                                    "pai" => "Gustavo Carlos Eduardo João Aragão", 
                                    "email" => "camila_benedita_aragao@balloons.com.br", 
                                    "senha" => "cIPRYNgCtQ", 
                                    "cep" => "65602-740", 
                                    "endereco" => "Travessa do Cemitério", 
                                    "numero" => 590, 
                                    "bairro" => "Seriema", 
                                    "cidade" => "Caxias", 
                                    "estado" => "MA", 
                                    "telefone_fixo" => "(99) 3904-0812", 
                                    "celular" => "(99) 99950-5436", 
                                    "altura" => "1,79", 
                                    "peso" => 55, 
                                    "tipo_sanguineo" => "AB+", 
                                    "cor" => "amarelo" 
                                 ], 
            [
                                       "nome" => "Fábio Ryan Farias", 
                                       "idade" => 25, 
                                       "cpf" => "000.128.104-60", 
                                       "rg" => "46.750.581-0", 
                                       "data_nasc" => "13/02/2000", 
                                       "sexo" => "Masculino", 
                                       "signo" => "Aquário", 
                                       "mae" => "Vitória Stefany Tânia", 
                                       "pai" => "Severino Severino Farias", 
                                       "email" => "fabio_farias@renatoseguros.com", 
                                       "senha" => "Ck8f7l28WT", 
                                       "cep" => "84174-550", 
                                       "endereco" => "Rua Eurico Madureira Novaes", 
                                       "numero" => 604, 
                                       "bairro" => "Jardim das Araucárias", 
                                       "cidade" => "Castro", 
                                       "estado" => "PR", 
                                       "telefone_fixo" => "(42) 2601-0723", 
                                       "celular" => "(42) 98283-4020", 
                                       "altura" => "1,96", 
                                       "peso" => 94, 
                                       "tipo_sanguineo" => "B-", 
                                       "cor" => "verde" 
                                    ], 
            [
                                          "nome" => "José Henrique Osvaldo Melo", 
                                          "idade" => 52, 
                                          "cpf" => "410.698.877-14", 
                                          "rg" => "41.542.259-0", 
                                          "data_nasc" => "13/02/1973", 
                                          "sexo" => "Masculino", 
                                          "signo" => "Aquário", 
                                          "mae" => "Nair Benedita Heloisa", 
                                          "pai" => "Thales Diego Vitor Melo", 
                                          "email" => "jose_melo@db9.com.br", 
                                          "senha" => "JuitEjKAWD", 
                                          "cep" => "59069-050", 
                                          "endereco" => "Rua Poetisa Cecília Meireles", 
                                          "numero" => 929, 
                                          "bairro" => "Pitimbu", 
                                          "cidade" => "Natal", 
                                          "estado" => "RN", 
                                          "telefone_fixo" => "(84) 3549-0041", 
                                          "celular" => "(84) 98183-3226", 
                                          "altura" => "1,69", 
                                          "peso" => 70, 
                                          "tipo_sanguineo" => "AB+", 
                                          "cor" => "vermelho" 
                                       ], 
            [
                                             "nome" => "Maria Clara Peixoto", 
                                             "idade" => 35, 
                                             "cpf" => "439.285.194-09", 
                                             "rg" => "11.342.538-7", 
                                             "data_nasc" => "02/02/1990", 
                                             "sexo" => "Feminino", 
                                             "signo" => "Aquário", 
                                             "mae" => "Fabiana Silvana", 
                                             "pai" => "Lucca Hugo Ricardo Peixoto", 
                                             "email" => "maria-peixoto98@gerj.com.br", 
                                             "senha" => "rkYkJfmh1S", 
                                             "cep" => "76811-480", 
                                             "endereco" => "Rua Pandeiro", 
                                             "numero" => 571, 
                                             "bairro" => "Castanheira", 
                                             "cidade" => "Porto Velho", 
                                             "estado" => "RO", 
                                             "telefone_fixo" => "(69) 3634-8893", 
                                             "celular" => "(69) 99358-9504", 
                                             "altura" => "1,66", 
                                             "peso" => 46, 
                                             "tipo_sanguineo" => "O+", 
                                             "cor" => "azul" 
                                          ] 
         ]; 
        
         $_SESSION["resultado"] = $clientes;
            header('location: consultar.php');
          
    }

}