<?php require_once 'layouts/header.php'; ?>

        <div class="header_bot">
                <div class="container">

                    <div class="header_bot_wrapper">

                        <h2>CATEGORIES</h2>
                        <!-- <div class="logo"><a href="#"><img src="../images/logo.png" alt="logo image"></a></div> -->

                        <?php foreach($categoriesList as $category): ?>

                        <nav class="nav">
                            <ul>
                                <li><a href="/category/<?php echo $category['id']; ?>">Article <?php echo $category['name']; ?></a></li>
                            </ul>
                        </nav>

                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

<section class="section advantages">

            <div class="container">

                <h2>Articles</h2>

                <div class="advantages_list">

                    <?php foreach($latestArticles as $article): ?>  

                        <div class="advantages_item">
                            <h3><a href="/article/<?php echo $article['id'] ?>"><?php echo $article['title'] ?></a></h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>

                    <?php endforeach; ?>

                </div>

            </div>
        </section>

<?php require_once 'layouts/footer.php'; ?>