<?php require_once 'layouts/header.php'; ?>

<section class="promo">
            <div class="container">

                <div class="promo_wrapper">

                    <div class="promo_content">

                        <h3>Made for Designes</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat quia a eveniet quaerat
                            molestias nulla numquam deleniti dolor eos dolorem.</p>
                        <button class="button_order"><a href="/catalog/">Super News</a></botton>

                    </div>

                </div>

            </div>
        </section>

        <section class="section advantages">
            <div class="container">

                <h2><a href="/catalog/" class="article">Article Categories.</a></h2>

                <p>The best articles in the World</p>

                <div class="advantages_list">
                    <div class="advantages_item">
                        <h3>Latest information</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Dignissimos, earum.Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Dignissimos, earum.</p>
                    </div>
                    <div class="advantages_item">
                        <h3>Creative news</h3>
                        <p>Necessitatibus amet sequi repellendus hic eius praesentium
                            placeat fugit ut?Necessitatibus amet sequi repellendus hic eius praesentium
                            placeat fugit ut?</p>
                    </div>
                    <div class="advantages_item">
                        <h3>Burning sensations</h3>
                        <p>Fugiat magni soluta tempore aspernatur nulla minus consequuntur
                            inventore totam?Fugiat magni soluta tempore aspernatur nulla minus consequuntur
                            inventore totam?</p>
                    </div>
                </div>

            </div>
        </section>

        <section class="section portfolio" id="portfolio">
            <div class="container">

                <h2>OUR PRODUCTS</h2>

                <p>CHOOSE YOUR GOODS</p>

                
                <div class="cart_items"> <button class="cart_show"><a href ="/cart/"> Корзина 
                                            <span>(<?php echo $countItems ?>)</span></a>
                                         </botton>
                </div>
                

                <div class="portfolio_list">

                    <?php foreach($latestProducts as $product): ?>

                    <div class="portfolio_item">
                        <div class="thumb"><a><img src="<?php echo $product['image']; ?>" alt="<?php $product['title']; ?>"><a href="#"></a></a>
                                           <h3><a href="#"><?php echo $product['title'] ?></a></h3>
                                           <div class ="price">$ <?php echo $product['price'] ?></div>                                       
                        </div>
                                            <button class="cart_order"><a href="/cart/<?php echo $product['id'] ?>">В корзину</a></botton>
                    </div>

                    <?php endforeach; ?>

            </div>
        </section>

<?php require_once 'layouts/footer.php'; ?>