<html>

<head>

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <title>Perfil do Pet</title>
  <link rel="icon" href="..\img\icons-servicos\logo-pagina.png">
</head>

<body>
  <style>
    body {
      grid-template-areas: "a a a"
        "b b b"
        "c c c";
      font-family: 'League Spartan', sans-serif;
      font-size:20px;
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
      height: 250px;
      width: 250px;
    }

    #foto-pet {
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      padding-left: 2%;
    }

    #info-pet {
      padding-left: 8%;
    }

    #p-alinhado {
      height: 70px;
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
  </style>
  <header>
    <nav>
      <ul>
        <li><a href="main.php"><img src="../img/icons-servicos/logo.png" width="250px" height="90px"></a></li>
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
              <div id="foto-pet" class="col-4">
                <img id="foto-perfil" src="..\img\perfil-pet\foto-petzinho.PNG">
              </div>
              <div id="info-pet" class="col-6">
                <div class="row">
                  <p id="p-alinhado" name="nome_pet">Nome do Pet</p>
                  <br>
                  <br>
                </div>
                <div class="row">
                  <p id="p-alinhado" name="id_pet">Número do Registro Animal</p>
                  <br>
                  <br>
                </div>
                <div class="row">
                  <div class="col">
                    <p name="raca_pet">Raça</p>
                  </div>
                  <div class="col">
                    <p name="idade_pet">Idade</p>
                  </div>
                  <div class="col">
                    <p name="sexo_pet">Sexo</p>
                  </div>
                  <br>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="perfil-bottom">
          <h2 id="titulo">Informações Adicionais</h2>
          <div class="info-adicional">
            <div class="row">
              <div class="col">
                <p id="titulo-info">Temperamento do Pet
                <p>
                  <span class="span" name="temperamento_pet"></span>
              </div>
              <div class="col">
                <p id="titulo-info">Possui alguma defiência ? Se sim, qual ?</p>
                <span class="span" name="deficiencia_pet"></span>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <p id="titulo-info">Castrado ?
                <p>
                  <span class="span" name="castrado_pet"></span>
              </div>
              <div class="col">
                <p id="titulo-info">Cor</p>
                <span class="span" name="cor_pet"></span>
              </div>
            </div>
            <div class="row">
              <p id="titulo-info">Observações:</p>
              <span class="span" name="obs_pet"></span>
            </div>
            <div class="row justify-content-center">
              <div class="col-auto">
                <button id="titulo-info" class="botao">Atualizar</button>
              </div>
            </div>
          </div>
        </div>
  </section>
  <footer>
    <!-- <img src="perfil-pet\canto-esquerdo.png" height="300px" width="600px"> -->
  </footer>
</body>

</html>
