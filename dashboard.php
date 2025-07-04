<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
      <link rel="stylesheet" href="style.css">
       <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&display=swap" rel="stylesheet">
      <head>
</head>
      
</head>
<body>
  <header>
    
    <div class="logo">ludix</div>
    <label class="switch">
  <input type="checkbox" id="modoToggle" onclick="toggleDarkMode()">
  <span class="slider">
    <span class="icon" id="iconMode">🌙</span>
  </span>
</label>
  </header>
<section class="banner">
  <video autoplay muted loop class="video-banner">
    <source src="fundo.mp4" type="video/mp4">
  </video>
 <section class="hero">
  <div class="hero-container">
    <div class="hero-text">
      <h1>Bem vindo!</h1>
      <p>Aqui na nossa loja garantimos uma entrega rápida, com parcelas até 10 vezes. 
        Variedade de opções de jogos e estilos, e categorias.</p>
    </div>
    <div class="hero-logo">
      <img src="logo.png" alt="Ludix Logo">
    </div>
  </div>
</section>

  <section class="destaques">
  <h2>Destaques de Hoje</h2>
  <div class="card-container" id="produtos">
    
    <div class="produto-card">
      <img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQhF43XXw3_33lMK5vmjxwsq7Rg0NWIhpUCox6iucNsePMGIiE1l125O7yhNSuzPRGLyMFn3zRoVJWdKc7urMHB01ispmvBe8KemRMkH-tSns6aPkox_HKIDg" alt="DOOM">
      <h3>DOOM</h3>
      <p>R$ 907,80 </p>
      <button>Comprar</button>
    </div>

    <div class="produto-card">
      <img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcT2Wp-6Nleo5_nYOaJNXi12ZIOuTLdFfrIsLrGpmLEO9lT8xMRAKuco-XEEoUR6AjmSSiROhrNlwqa1SEtQS0hzh0hSVrxwa_3_-wSKgNkE-CQYmQt6D8DhNQ" alt="Cuphead">
      <h3>Cuphead</h3>
      <p>R$  204.01</p>
      <button>Comprar</button>
    </div>

    <div class="produto-card">
      <img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcTSagw1cDtl4Zb3XUDkl2pBAO9TZXqcFkFnlbU38d_lF7iDn1MGWdB46pkqReFMc-0X23nVtpmo-0AQtEIXUfxrwSaSi2Aex1bYgCtXUnMo7Ugf29OkPzUlDA" alt="Uncharted">
      <h3>Uncharted</h3>
      <p>R$ 179.90</p>
      <button>Comprar</button>
    </div>

    <div class="produto-card">
      <img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcSeoNTuzk4IBLiZFqVtFVDbWK-MsDIH71Wmz0ldksv8aGsc4KL2lB4PfiOm6bM8rU0gIvnIKhWtZkkrVSU0ZZi3sGbzjZuHX-SqNKn_tjWSO5V1_vW9vjoeTw" alt="Call of Duty: Black Ops II">
      <h3>Call of Duty: Black Ops II</h3>
      <p>R$  39.99</p>
      <button>Comprar</button>
    </div>

  </div>
</section>
  <section class="categorias">
  <h2>Categorias</h2>
  <div class="categorias-container">
    <div class="cat">Terror</div>
    <div class="cat">Ação</div>
    <div class="cat">E-sports</div>
    <div class="cat">Outros</div>
  </div>
</section>  

    <button id="carrinho-fixo">🛒 Carrinho (0)</button>
  <script src="script.js"></script>
</body>
</html>