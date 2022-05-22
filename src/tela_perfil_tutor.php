<html>

<head>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <title>Perfil do Tutor</title>
  <link rel="icon" href="../img/perfil-tutor/logo-pagina.png">
</head>

<body>

  <style>
    body {
      grid-template-areas: "a a a"
        "b b b"
        "c c c";
      font-family: 'League Spartan', sans-serif;
    }

    li {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }

    li a {
      text-decoration: none;
      color: #555455;
    }

    li a:hover {
      color: #CB6CE6;
      font-weight: bold;
    }

    #login {
      color: #FFFFFF;
    }

    ul {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-right: 3%;
    }

    header {
      grid-area: a;
      background-image: url(../img/perfil-pet/canto-direito.png);
      background-repeat: no-repeat;
      background-size: 600px 300px;
      background-position: right;
      height: 250px;
    }

    section {
      grid-area: b;
    }

    footer {
      grid-area: c;
      background-image: url(../img/perfil-pet/canto-esquerdo.png);
      background-size: 600px 300px;
      background-repeat: no-repeat;
      background-position: left;
      height: 250px;
    }

    .main {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100%;
    }

    .bloco {
      border-width: 6px;
      border-color: #F2F2F2;
      border-style: solid;
      border-radius: 30px;
      width: 850px;
      /*background-color: white;*/
      /*height: 90%;*/
      background-color: #F2F2F2;
      margin-top: 20%;
      margin-bottom: 20%;
    }

    .perfil-top {
      padding: 2%;
      border-width: 6px;
      border-color: #F2F2F2;
      border-style: solid;
      border-radius: 30px;
      /*height: 60%;*/
      background-color: #FFFFFF;
    }

    .perfil-middle {
      border-width: 6px;
      border-color: #F2F2F2;
      border-style: solid;
      border-radius: 30px;
      /* height: 150px; */
      background-color: #FFFFFF;
      padding: 2%;
    }

    .perfil-bottom {
      border-width: 6px;
      border-color: #F2F2F2;
      border-style: solid;
      border-radius: 30px;
      /*height: 60%;*/
      background-color: #FFFFFF;
      padding: 2%;
    }

    #foto-perfil {
      border-radius: 50%;
      height: 80px;
      /*width: 250px; */
    }

    #titulo {
      color: #CB6CE6;
      margin-bottom: 3%;
    }

    #titulo-info {
      font-weight: bold;
    }

    .botao:hover {
      background-color: #d992ed;
    }

    .botao {
      margin-top: 10%;
      margin-right: 5%;
      margin-bottom: 5%;
      margin-left: 5%;
      border-radius: 5px;
      background-color: #CB6CE6;
      color: #FFFFFF;
      width: 120px;
      height: 35px;
      border: none;
    }

    .span {
      margin-left: 3%;
    }

    .info-adicional {
      margin-left: 2%;
    }

    .info-geral {
      margin-left: 2%;
    }

    .pesquisa {
      width: 400px;
    }

    #table {
      margin-right: 3%;
      margin-top: 3%;
      margin-bottom: 3%;
      margin-left: 1%;
    }
  </style>
  <header>
    <nav>
      <ul>
        <li><a href="main.php"><img src="..\img\perfil-tutor\logo.png" width="250px" height="90px"></a></li>
        <li><a href="login.html">Login</a></li>
        <li><a href="main.php/#quem-somos">Sobre</a></li>
        <li><a href="main.php/#contato">Contato</a></li>
        <li><a href="tela_servicos.php">Serviços</a></li>
        <li><a id="login" href="#">Cliente Logado</a></li>
      </ul>
    </nav>
  </header>

  <section>
    <div class="main">
      <div class="bloco">
        <div class="perfil-top">
          <h2 id="titulo">Informações Gerais</h2>
          <div class="info-geral">
            <div class="row">
              <div class="col">
                <p name="nome_tutor">Nome do tutor do pet</p>
              </div>
              <div class="col">
                <p name="cpf_tutor">000.000.000-00</p>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <p name="endereco_tutor">Rua dos Alfeneiros, nº 4</p>
              </div>
              <div class="col">
                <p name="telefone_tutor">+55 011 90000-0000</p>
              </div>
            </div>
            <div class="row">
              <p name="email_tutor">emaildotutor@gmail.com</p>
            </div>
            <div class="row justify-content-center">
              <div class="col-auto">
                <button id="titulo-info" class="botao">Atualizar</button>
              </div>
            </div>
          </div>
        </div>
        <div class="perfil-middle">
          <h2 id="titulo">Seu Pet</h2>
          <div id="foto-pet" class="col-4">
            <span name="foto_pet"><img id="foto-perfil" src="..\img\perfil-tutor\foto-petzinho.PNG"></span>
            <span name="nome_pet">Pipoca</span>
          </div>
        </div>
        <div class="perfil-bottom">
          <h2 id="titulo">Histórico de Agendamentos</h2>
          <div class="info-adicional">
            <div class="row">
              <p id="titulo-info">Pesquise pelo nome do pet</p>
              <div class="pesquisa">
                <input class="pesquisa" type="text" name="pesquisa_valor"></input>
                <img src="..\img\perfil-tutor\lupa.png" style="height:30px">
              </div>
            </div>
            <div id="table" class="row">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Nome do Pet</th>
                    <th scope="col">Tipo de Serviço</th>
                    <th scope="col">Horário</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Lulu</td>
                    <td>Banho e tosa</td>
                    <td>12/04/2022 15:30:00</td>
                    <td>Agendado</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
  </section>
  <footer>
    <!-- <img src="perfil-pet\canto-esquerdo.png" height="300px" width="600px"> -->
  </footer>
</body>

</html>
