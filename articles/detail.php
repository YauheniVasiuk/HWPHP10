<?php require_once 'layouts/header.php'; ?>

<section class="section  advantages">

    <div class="container">

        <section class="section  advantages">

            <div class="container">

                <div class="advantages_item">

                    <?php foreach($articleDetails as $article) : ?>

                        <h3><?php echo $article['title'] ?></h3>
                        <p><?php echo $article['content'] ?></p><br />
                        <p><?php echo $author[(int)$article['author_id']-1]['name'] ?></p><br />
                        <p><?php echo $article['date'] ?></p><br />
                    <?php endforeach; ?>

                </div>

            </div>
        </section>

    </div>

        <?php require_once 'layouts/footer.php'; ?>