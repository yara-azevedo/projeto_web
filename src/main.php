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
        "d";
    }

    footer {
      grid-area: c;
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
      background-image: linear-gradient(#0C4271, #A3D4FD);
    }

    .quem-somos {
      background-color: white;
      margin: 10%;
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

    .review {
      grid-area: c;
      background-image: linear-gradient(#A3D4FD, #86CDE3, #89C0E7, #1B5F9C, #0C4271);
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
        <p>Precisa de uma consulta com o veterinário? De alguém para passear
          com o seu cachorro ou cuidar dele enquanto você trabalha?
          Nós temos a solução!
          Cadastre-se e agende uma das nossas opções de serviço.</p>
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
        <p>Somos uma clínica veterinária especializada no atendimento de cachorros e gatos.
          Oferecemos diversos serviços para te ajudar a cuidar dos seus bichanos da melhor forma.
          Temos um time preparado, que ama animais, e que vai tratar os seus como se fosse da família.
          Nossas dependencias são modernas e confortáveis tanto para nossa equipe quanto para os pacientes.</p>
      </div>
    </div>
    <div class="review">
      <h2 id="titulo">O Que Dizem Nossos CLientes</h2>
      <div class="blocos">
        <div class="bloco-1">
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
        <div class="bloco-2">
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
        <div class="bloco-3">
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
    </div>
  </section>
  <footer>
  </footer>
</body>
</html>