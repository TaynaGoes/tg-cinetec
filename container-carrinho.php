<div class="modal">
    <div class="modal__container">
        <div class="modal__header">
            <span class="modal__header-title">Carrinho de Compras</span>
            <span class="modal__header-close"><img src="./imagens/arquivos-site/close.png" alt=""></span>
        </div>
        <div class="modal__content">
            <div class="modal_cart-description">
                <figure>
                    <img src="./imagens/produtos/grande.png" alt="">
                </figure>
                <div class="cart_description cart_description-product">
                    <div>
                        <h4>Pipoca</h4>
                        <p>R$ 00,00 </p>
                    </div>
                    <div class="qty">

                        <i class="increment" onclick="incrementQty()">+</i>

                        <input type="text" name="qty_2" maxlength="12" value="0" title="" class="input-text">

                        <i class="decrement" onclick="decrementQty()">-</i>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal__content">
            <div class="modal_cart-description">
                <figure>
                    <img src="./imagens/filmes/1.png" alt="">
                </figure>
                <div class="cart_description">
                    <h4>Nome do Filme</h4>
                    <p>Sessão: </p>
                    <p>Data:</p>
                </div>
            </div>
        </div>
        <div class="modal__content">
            <div class="modal_cart-description">
                <div class="cart_description">
                    <h4>Poltronas</h4>
                    <div class="box-poltronas_cart">
                        <div class="assento">A3</div>
                        <select name="" id="">
                            <option value="meia">Meia</option>
                            <option value="inteira">Inteira</option>
                        </select>
                    </div>
                    <div class="box-poltronas_cart">
                        <div class="assento">A4</div>
                        <select name="" id="">
                            <option value="meia">Meia</option>
                            <option value="inteira">Inteira</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <a href="">Finalizar carrinho</a>
    </div>
</div>