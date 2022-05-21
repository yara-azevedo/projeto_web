<html>

<head>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Tela de Serviços</title>
  <link rel="icon" href="../img/icons-servicos/logo-pagina.png">
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
      background-image: url(../img/icons-servicos/canto-direito.png);
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
    }

    .mae-bloco {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100%;
    }

    .bloco {
      border-width: 4px;
      border-color: #F2F2F2;
      border-style: solid;
      border-radius: 30px;
      width: 850px;
      background-color: white;
      height: 80%;
      padding: 5%;
      display: grid;
      grid-template-columns: 1fr 1fr;
      grid-template-areas: "a b"
        "c d"
        "e f";
      grid-gap: 5%;
    }

    /*.conteudo-servicos{
  margin: 10%;
}*/
    .conteudo-servicos {
      margin-left: 20%;
      margin-top: 5%;
      color: #555455;
    }

    .conteudo-servicos h1 {
      color: #CB6CE6;
    }

    .conteudo {
      width: 100%;
    }

    .img {
      float: left;
      height: 100%;
      width: 30%;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .descricao {
      float: left;
      height: 90%;
      width: 65%;
      margin-left: 2%;
    }

    .titulo {
      height: 40px;
      font-weight: bold;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #CB6CE6;
    }

    .texto {
      height: 60%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #555455;
      text-align: center;
    }

    .banho {
      background-color: #F2F2F2;
      grid-area: a;
    }

    .bloco-banho {
      margin: 2%;
      border-radius: 10px;
      background-color: white;
      height: 90%;
      padding: 2%;
    }

    .daycare {
      background-color: #F2F2F2;
      grid-area: b;
    }

    .bloco-daycare {
      margin: 2%;
      border-radius: 10px;
      background-color: white;
      height: 90%;
      padding: 2%;
    }

    .walker {
      background-color: #F2F2F2;
      grid-area: c;
    }

    .bloco-walker {
      margin: 2%;
      border-radius: 10px;
      background-color: white;
      height: 90%;
      padding: 2%;
    }

    .petsitter {
      background-color: #F2F2F2;
      grid-area: d;
    }

    .bloco-petSitter {
      margin: 2%;
      border-radius: 10px;
      background-color: white;
      height: 90%;
      padding: 2%;
    }

    .consulta {
      background-color: #F2F2F2;
      grid-area: e;
    }

    .bloco-consultaVet {
      margin: 2%;
      border-radius: 10px;
      background-color: white;
      height: 90%;
      padding: 2%;
    }

    .hospedagem {
      background-color: #F2F2F2;
      grid-area: f;
    }

    .bloco-hospedagem {
      margin: 2%;
      border-radius: 10px;
      background-color: white;
      height: 90%;
      padding: 2%;
    }
  </style>
  <header>
    <nav>
      <ul>
        <li><a href="#"><img src="../img/icons-servicos/logo.png" width="250px" height="90px"></a></li>
        <li><a href="login.html">Login</a></li>
        <li><a href="#">Sobre</a></li>
        <li><a href="#">Contato</a></li>
        <li><a href="tela_servicos.php">Serviços</a></li>
        <li><a id="login" href="#">Cliente Logado</a></li>
      </ul>
    </nav>
  </header>

  <section>
    <div class="conteudo-servicos">
      <div class="titulo-servicos">
        <h1>Serviços Oferecidos</h1>
      </div>
      <div class="descricao-servicos">
        <p>Para agendar clique no serviço desejado e siga as instruções.</p>
      </div>
    </div>

    <div class="mae-bloco">

      <div class="bloco">

        <div class="banho">

          <div class="bloco-banho">

            <div class="conteudo">

              <div class="img">
                <!-- <img src="https://static.thenounproject.com/png/989967-200.png" width="80px" height="80px"> -->
                <img src="../img/icons-servicos/dog.png" width="80px" height="80px">
              </div>

              <div class="descricao">

                <div class="titulo">
                  <p>Banho e Tosa</p>
                </div>

                <div class="texto">
                  <p>Pro seu pet ficar limpinho e cheirosinho</p>
                </div>

              </div>

            </div>

          </div>

        </div>

        <div class="daycare">
          <div class="bloco-daycare">

            <div class="conteudo">

              <div class="img">
                <img src="../img/icons-servicos/pet-house.png" width="80px" height="80px">
              </div>

              <div class="descricao">
                <div class="titulo">
                  <p>Day Care</p>
                </div>

                <div class="texto">
                  <p>Muito mais aconchegante que uma creche comum</p>
                </div>
              </div>

            </div>

          </div>

        </div>

        <div class="walker">
          <div class="bloco-walker">
            <div class="conteudo">

              <div class="img">
                <img src="../img/icons-servicos/walking-the-dog.png" width="80px" height="80px">
              </div>

              <div class="descricao">
                <div class="titulo">
                  <p>Pet Walker</p>
                </div>

                <div class="texto">
                  <p>Porque passear é uma delícia</p>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="petsitter">
          <div class="bloco-petSitter">
            <div class="conteudo">

              <div class="img">
                <img src="../img/icons-servicos/dog-house.png" width="80px" height="80px">
              </div>

              <div class="descricao">
                <div class="titulo">
                  <p>Pet Sitter</p>
                </div>

                <div class="texto">
                  <p>Cuidamos do seu pet com amor e carinho</p>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="consulta">
          <div class="bloco-consultaVet">
            <div class="conteudo">

              <div class="img">
                <img src="../img/icons-servicos/veterinarian.png" width="80px" height="80px">
              </div>

              <div class="descricao">
                <div class="titulo">
                  <p>Consulta Veterinária</p>
                </div>

                <div class="texto">
                  <p>Profissionairs prontos para tratar o seu pet</p>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="hospedagem">
          <div class="bloco-hospedagem">
            <div class="conteudo">

              <div class="img">
                <img src="../img/icons-servicos/hotel.png" width="80px" height="80px">
              </div>

              <div class="descricao">
                <div class="titulo">
                  <p>Hospedagem</p>
                </div>

                <div class="texto">
                  <p>Seu pet como um membro da família</p>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <footer>
    <img src="../img/icons-servicos\canto-esquerdo.png" height="300px" width="600px">
  </footer>
</body>

</html>