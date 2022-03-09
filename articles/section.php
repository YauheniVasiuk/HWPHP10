<?php require_once 'layouts/header.php'; ?>

<section class="section  advantages">

    <div class="container">

            <div class="advantages_item">

            <h3>Article Category <?php echo $categoryId?></h3>

            <?php foreach($articles as $article): ?>

                <h4><a href="/article/<?php echo $article['id'] ?>"><?php echo $article['title']?></a></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, ratione unde! Voluptates adipisci obcaecati maxime minus temporibus cupiditate
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, ratione unde! Voluptates adipisci obcaecati maxime minus temporibus cupiditate...
                    </p><br />

            <?php endforeach; ?>

            <div class="pagination">
                <?php echo $pagination->get(); ?>
            </div>

            </div>

           

    </div>

    
</section>



<?php require_once 'layouts/footer.php'; ?>