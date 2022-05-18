<html>
    <head>
        <link rel="stylesheet" type="text/css" href="perfil-pet.css">
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <title>Perfil do Pet</title>
        <link rel="icon" href="img/icons-servicos/logo-pagina.png">
    </head>

    <body>
      <header>
        <nav>
          <ul>
            <li><a href="#"><img src="img\perfil-pet\logo.png" width="250px" height="90px"></a></li>
            <li><a href="#">Login</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Contato</a></li>
            <li><a href="#">Serviços</a></li>
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
                    <img id="foto-perfil" src="img\perfil-pet\foto-petzinho.PNG">
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
                    <p id="titulo-info">Temperamento do Pet<p>
                    <span class="span" name="temperamento_pet"></span>
                  </div>
                  <div class="col">
                    <p id="titulo-info">Possui alguma defiência ? Se sim, qual ?</p>
                    <span class="span" name="deficiencia_pet"></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <p id="titulo-info">Castrado ?<p>
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
