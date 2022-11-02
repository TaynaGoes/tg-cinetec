<nav>
  <div class="nav-center">
    <!-- nav header -->
    <div class="nav-header">
      <a href="./index.php">
        <img src="./imagens/logo/logo.png" alt="" class="logo" alt="logo" />
      </a>
      <button class="nav-toggle">
        <i class="fas fa-bars"></i>
      </button>
    </div>
    <!-- links menu -->
    <ul class="links">
      <li>
        <a href="./index.php">Home</a>
      </li>
      <li>
        <a href="./filmes-em-cartaz.php">Filmes em Cartaz</a>
      </li>
      <li>
        <a href="#">Fale Conosco</a>
      </li>
    </ul>
    <!-- account -->
    <div class="account-menu">
      <div class="account-item">
        <?php
        session_start();

        $url = "./login.php";

        if (isset($_SESSION['nome'])) {
          $url = "./logout.php";
        }
        ?>

        <a href="<?= $url; ?>">
          <?php if (isset($_SESSION['nome'])) { ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" class="bi bi-person-circle" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg>

            <?php echo 'Olá, ' . $_SESSION['nome']; ?>

            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
              </svg>
            </div>

          <?php } else { ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" class="bi bi-person-circle" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg>

            Entrar
          <?php } ?>
        </a>

        <?php if (isset($_SESSION['nome'])) { ?>
          <label for="cart">
            <div id="btn-cart">
              <svg xmlns="http://www.w3.org/2000/svg" id="openModal" width="20" height="20" fill="#fff" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z" />
              </svg>
              <span class="cart-qty">0</span>
            </div>
          </label>
          <input type="checkbox" name="cart" id="cart">
          <aside class="aside-cart">
            <div class="aside-top">
              <h4>Carrinho de Compras</h4>
            </div>
            <!-- produto -->
            <div class="aside-content">
              <figure>
                <img src="./imagens/produtos/grande.png" alt="">
              </figure>
              <div class="cart-conteudo">
                <p>Pipoca Pequena</p>
                <span class="span_info">Categoria:<span class="span_result">Pipoca</span></span>
                <span class="span_info">Preço: <span class="span_result">R$27,00</span></span>


                <div class="qty">
                  <label for="qty">Quantidade:</label>
                  <button class="qtyminus" aria-hidden="true" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">-</button>
                  <input type="number" name="qty" id="qty" min="1" max="10" step="1" value="1">
                  <button class="qtyplus" aria-hidden="true" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">+</button>
                </div>
              </div>
            </div>

            <!-- filmes -->
            <div class="aside-content">
              <figure>
                <img src="./imagens/filmes/1.png" alt="">
              </figure>
              <div class="cart-conteudo">
                <p>Nome do Filme</p>
                <span class="span_info">Horário:<span class="span_result">13:00</span></span>
                <span class="span_info">Data:<span class="span_result">02/11/2022</span></span>
                <span class="span_info">Poltronas:<span class="span_result">E3,E4,E5</span></span>
                <span class="span_info">Preço: <span class="span_result">Meia = 20 : Inteira = 40</span></span>
              </div>
            </div>

            <!-- tipo de ingresso -->
            <div class="select-wrapper">
              <div class="assento selected"></div>
              <select class="select">
                <option value="" disabled selected>E3</option>
                <option value="20">Meia Entrada</option>
                <option value="40">Inteira</option>
              </select>
            </div>
        

            <!-- finalizar -->
            <div class="box_btn-cart"> 
              <a href="selecao-pagamento.php" class="animated-button finish_cart">Finalizar Carrinho</a> 
            </div>

          </aside>
        <?php } ?>
      </div>
    </div>
  </div>
</nav>