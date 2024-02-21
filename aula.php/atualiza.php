<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PDO - Atualizar um Registro - Tutorial PHP CRUD</title>

 

  <!-- (A) Linca o css do bootstrap  -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

 

<body>

 

    <div class="container">

        <div class="page-header">

            <h1>Atualizar Produto</h1>

        </div>

    </div>

   

    <?php

        // obter o valor do parâmetro passado, neste caso, o ID do registro

 

        // P2 a  O que faz o isset? De onde vem o ID? (R)--> Ele puxa os dados do id.

        $id = isset($_GET['id']) ? $_GET['id'] : die('ERRO: ID do registro não encontrado.');

 

        // P2 b O que faz esse include? (R)--> Ele vincula o banco de dados.

        include 'config/bancodedadps.php';

 

        // ler os dados do registro atual

        try {

            // P2 c Quando montamos a query e executamos o prepare preparamos o que? (R)--> Preparamos os dados para ser executado.

            $query = "SELECT id, nome, descricao, preco FROM produtos

            WHERE id = ? LIMIT 0,1";

            $stmt = $con->prepare($query);

 

            // P2 d O marcador abaixo será qual marcador na consulta?

            $stmt->bindParam(1, $id);

 

            // P2 e A linha de baixo faz qual ação? (R)--> Ele executa o código.

            $stmt->execute();

 

            // P2 f Após realizar a busca como o resultado vem? (R)--> Em PDO.

            $row = $stmt->fetch(PDO::FETCH_ASSOC);

 

            // P2 g Para que vamos usar esses valor após puxar? (R)--> Para pegar o nome, descrição e preço.

            $nome = $row['nome'];

            $descricao = $row['descricao'];

            $preco = $row['preco'];

        }

        // mostrar erro

        catch (PDOException $exception) {

            die('ERRO: ' . $exception->getMessage());

        }

        ?>

       

 

 

 

        <!-- (B) lincar o javascript do bootstrap -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

 

    <!-- (C) linca o jquery do javascript -->

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

 

</body>

 

</html>