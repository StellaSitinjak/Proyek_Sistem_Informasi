<!DOCTYPE html>
<html>
    <head>
        <title>Rumah Makan Sinar Minang Balige</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="styles.css" />
        <script src="store.js" async></script>
    </head>
    <body>
        <header class="main-header">
           
            <h1 class="title-name title-name-large">Daftar Pesanan</h1>
        </header>
        <section class="container content-section">
            <h2 class="section-header">Makanan </h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Rendang khas Padang</span>
                    <img class="shop-item-image" src="images/img-01.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">35,000</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Sate Padang</span>
                    <img class="shop-item-image" src="images/img-02.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">18,000</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Nasi Campur Padang</span>
                    <img class="shop-item-image" src="images/menu-3.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">25,000</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Ikan Bakar Bumbu</span>
                    <img class="shop-item-image" src="images/menu-4.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">24,000</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">Minuman</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Lemon Tea Minang</span>
                    <img class="shop-item-image" src="images/drink-1.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">12,000</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Orange juice + lime</span>
                    <img class="shop-item-image" src="images/drink-2.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">15,000</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                <div class="shop-item">
                    <span class="shop-item-title">Manggo breeze</span>
                    <img class="shop-item-image" src="images/drink-3.jpg">
                    <div class="shop-item-details">
                    <span class="shop-item-price">19,000</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">Rp0</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
        </section>
       
    </body>
</html>