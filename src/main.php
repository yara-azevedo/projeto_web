<!DOCTYPE html>
<html lang="en">

<head>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <title>Heicão</title>
  <link rel="icon" href="../img/main/logo-pagina.png">
</head>

<body>

  <style>
    body {
      grid-template-areas: "a"
        "b"
        "c";
      font-family: 'League Spartan', sans-serif;
      max-width: 100%;
      overflow-x: hidden;
    }

    li {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }

    #a {
      margin-left: 80px;
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
      /* justify-content: space-between; */
      align-items: center;
      margin-right: 3%;
    }

    nav {
      grid-area: a;
      background-color: none;
      position: relative;

    }

    section {
      grid-area: b;
      display: grid;
      grid-template-areas: "a"
        "b"
        "c"
        "d"
        "e"
        "f";
    }

    footer {
      grid-area: c;
      padding-top: 1%;
      padding-right: 5%;
      padding-left: 5%;
    }

    .main {
      grid-area: a;
    }

    #fundo-direito {
      position: absolute;
      top: 0px;
      right: 0;
      width: 600px;
      height: 600px;
    }

    .intro {
      width: 300px;
      margin-left: 5%;
      margin-top: 8%;
      margin-bottom: 6%;
    }

    #fundo-esquerdo {
      width: 600px;
      height: 300px;
    }

    .botao-container {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .botao {
      border-radius: 8px;
      background-color: #CB6CE6;
      color: #FFFFFF;
      width: 150px;
      height: 40px;
      border: none;
      box-shadow: 3px 3px #f2f2f2;
    }

    .botao a {
      text-decoration: none;
      color: #FFFFFF;
    }

    .botao a:hover {
      color: #FFFFFF;
    }

    .botao:hover {
      background-color: #d992ed;
    }

    .intro-empresa {
      grid-area: b;
      background-image: linear-gradient(#0C4271, #598CB9, #78AAD5);
    }

    .quem-somos {
      background-color: white;
      margin-top: 5%;
      margin-left: 19%;
      margin-right: 19%;
      margin-bottom: 3%;
      padding: 3%;
      border-top-left-radius: 0;
      border-top-right-radius: 10px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 10px;
    }

    #titulo {
      color: #CB6CE6;
      margin-top: 2%;
      margin-bottom: 3%;
    }
    .review-1 {
      grid-area: c;
      background-image: linear-gradient(#78AAD5, #98C4EA,#A3D4FD);
    }
    .review-2 {
      grid-area: d;
      background-image: linear-gradient(#A3D4FD, #86CDE3, #89C0E7);
    }
    .review-3 {
      grid-area: e;
      background-image: linear-gradient(#89C0E7, #528FC2);
    }
    .saiba-mais{
      grid-area: f;
      height:100%;
      /* background-image: linear-gradient(#1B5F9C, #0C4271);
      background-image: url(../img/main/bottom.png);
      background-repeat: no-repeat;
      background-size:  auto; */
    }

    .blocos{
      background-color: white;
      margin-left: 19%;
      margin-right: 19%;
      /* padding: 3%; */
    }
.bloco-top{
  background-color: white;
  margin-left: 19%;
  margin-right: 19%;
  border-top-right-radius: 10px;
}
.bloco-bottom{
  background-color: white;
  margin-left: 19%;
  margin-right: 19%;
  border-bottom-left-radius: 10px;
}
.bloco{
  /* border: 1px solid #CCCCCC; */
  display: flex;
  /* margin-bottom: 5%; */
  align-items: center;
}
.texto-bloco{
    width: 100%;
    display: flex;
    justify-content: center;
    margin-left: 5%;
}
.texto{
  width: 350px;
}

#titulo-review{
  color: #CB6CE6;
  margin-top: 2%;
  margin-bottom: 3%;
  padding:5%;
}
.saibamais-botao {
  border-radius: 8px;
  background-color: #CB6CE6;
  color: #FFFFFF;
  width: 150px;
  height: 40px;
  border: none;
  /* box-shadow: 3px 3px #f2f2f2; */
}

.saibamais-botao a {
  text-decoration: none;
  color: #FFFFFF;
}

.saibamais-botao a:hover {
  color: #FFFFFF;
}

.saiba-mais-botao:hover {
  background-color: #d992ed;
}
.info-saibamais{
  display: flex;
  justify-content: center;
  align-items: center;
  height: 200px;
  background-image: linear-gradient(#528FC2,#1B5F9C,#0C4271);
}
.texto-saibamais{
  text-align: center;
  width: 500px;
  color:#FFFFFF;
}
.foto-saibamais{
  height: 300px;
  display: flex;
  justify-content: center;
  background-image: url(../img/main/bottom.png);
  background-repeat: no-repeat;
  background-size: 100% 300px;
}
#titulo-contato{
  font-weight: bold;
}
  </style>

  <section>
    <div class="main">
      <nav>
        <ul>
          <li><a href="main.php"><img src="..\img\perfil-tutor\logo.png" width="250px" height="90px"></a></li>
          <li><a id="a" href="login.html">Login</a></li>
          <li><a id="a" href="#">Sobre</a></li>
          <li><a id="a" href="#">Contato</a></li>
          <li><a id="a" href="tela_servicos.php">Serviços</a></li>
        </ul>
      </nav>
      <div class="lado-direito">
        <img id="fundo-direito" src="../img/main/contorno-direito.png">
      </div>
      <div class="intro">
        <p>Suspendisse faucibus vitae justo vel consectetur.
          Praesent ac magna ac neque ultricies viverra.
          Suspendisse faucibus vitae justo vel consectetur.
          Praesent ac magna ac neque ultricies viverra.
          Suspendisse faucibus vitae justo vel consectetur.
          Praesent ac magna ac neque ultricies viverra.</p>
        <div class="botao-container">
          <button id="titulo-info" class="botao"><a href="cadastro_tutor.html">Cadastre-se Já</a></button>
        </div>
      </div>
      <div class="lado-esquerdo">
        <img id="fundo-esquerdo" src="../img/main/contorno-esquerdo.png">
      </div>
    </div>
    <div class="intro-empresa">
      <div class="quem-somos">
        <h2 id="titulo">Quem Somos</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Nam accumsan sollicitudin sem, ac aliquet sem mollis at.
          Mauris sed ullamcorper ante. Donec varius lobortis tincidunt.
          Nam eleifend vulputate augue eget consectetur.
          Sed posuere pretium sodales. Suspendisse lobortis laoreet velit in porta.
          Aliquam ut semper urna, id dignissim lectus.
          Fusce efficitur tortor et venenatis vestibulum.
          Aliquam sollicitudin a odio vitae varius. Cras ac turpis arcu.
          In id posuere nulla. Pellentesque at posuere nunc. In fringilla tortor id odio vestibulum varius.</p>
      </div>
    </div>
    <div class="review-1">
      <div class="bloco-top">
        <h2 id="titulo-review">O Que Dizem Nossos CLientes</h2>
        <div class="bloco">
          <div class="texto-bloco">
            <div class="texto">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nam accumsan sollicitudin sem, ac aliquet sem mollis at. Mauris sed ullamcorper ante.
                <br>
                <br>
                José Lorêncio - 5 Anos
                Pet do Camilo</p>
            </div>
          </div>
          <div class="img-bloco">
            <img src="../img/main/cat.jpg" style="border-radius: 50%;height: 300px;width: 300px;">
          </div>
        </div>
      </div>
    </div>
    <div class="review-2">
        <div class="blocos">
          <div class="bloco">
            <div class="img-bloco">
              <img src="../img/main/doguinho-1.jpg" style="border-radius: 50%;height: 300px;width: 300px;">
            </div>
            <div class="texto-bloco">
              <div class="texto">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Nam accumsan sollicitudin sem, ac aliquet sem mollis at. Mauris sed ullamcorper ante.
                  <br>
                  <br>
                  Paulo André e Scooby - 1 ano e 2 Anos
                  Pets do Tadeu</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="review-3">
        <div class="bloco-bottom">
          <div class="bloco">
            <div class="texto-bloco">
              <div class="texto">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Nam accumsan sollicitudin sem, ac aliquet sem mollis at. Mauris sed ullamcorper ante.
                  <br>
                  <br>
                  Chico - 1 ano e 2 mese
                  Pet da Joana</p>
              </div>
            </div>
            <div class="img-bloco">
              <img src="../img/main/doguinho-2.jpg" style="border-radius: 50%;height: 300px;width: 300px;">
            </div>
          </div>
        </div>
      </div>
      <div class="saiba-mais">
        <div class="info-saibamais">
          <div class="texto-saibamais">
            <h2>Conheça os serviços oferecidos pela equipe Heicão</h2>
          </div>
        </div>
        <div class="foto-saibamais">
              <button id="titulo-info" class="saibamais-botao"><a href="tela_servicos.php">Saiba Mais</a></button>
        </div>
      </div>
  </section>
  <footer>
    <div class="contato">
      <h2 id="titulo">Onde nos encontrar</h2>
      <div class="row">
        <div class="col-4">
          <p id="titulo-contato">Contato<p>
          <p>alunosbcc@fmu.com.br</p>
        </div>
        <div class="col-4">
          <p id="titulo-contato">Localizados em</p>
          <p>São Paulo, SP</p>
        </div>
        <div class="col">
          <img src="../img/main/facebook.png" style="height:30px; width:30px;">
        </div>
        <div class="col">
          <img src="../img/main/instagram.png" style="height:30px; width:30px;">
        </div>
        <div class="col">
          <img src="../img/main/twitter.png" style="height:30px; width:30px;">
        </div>
      </div>
    </div>
  </footer>
</body>

</html>
