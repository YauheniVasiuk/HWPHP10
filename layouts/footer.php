<footer class="footer">
            <div class="footer_top">
                <div class="container">

                    <div class="footer_top_list">
                        <div class="footer_top_item">

                            <h3>Who we are</h3>

                            <a class="footer_logo" href="#"><img src="/images/logo_footer.png" alt="logo"></a>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Ab quas laborum rem perspiciatis
                                dicta fugiat pariatur laboriosam praesentium blanditiis et!</p>

                            <a href="#" class="more">More about us<span class="ico ico_arrow_right"></span></a>

                        </div>
                        <div class="footer_top_item">

                            <h3>Latest Articles</h3>

                            <div class="footer_portfolio_list">
                            <?php foreach($latestArticles as $article): ?>
                                <div class="footer_portfolio_item"><a href="/article/<?php echo $article['id'] ?>"><img src="/images/footer_portfolio_img<?php echo $article['author_id'] ?>.png" alt="article"></a></div>
                            <?php endforeach; ?>
                            </div>                     

                        </div>
                        <div class="footer_top_item">

                            <h3>Get in touch</h3>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur porro harum nobis blanditiis quis possimus!</p>

                            <ul class="footer_contacts_list">
                                <li><span class="ico ico_location"></span>84 Street, City, State 24813</li>
                                <li><span class="ico ico_phone"></span><a href="#">+00 (123) 456 78 90</a></li>
                                <li><span class="ico ico_mail"></span><a href="#">info@reen.com</a></li>
                            </ul>


                        </div>
                    </div>

                </div>
            </div>
            <div class="footer_bot">
                <div class="container">

                 <div class="footer_bot_wrapper">

                    <div class="footer_bot_copyrights">&copy; 2014 REEN. All rights reservsd.</div>

                    <div class="footer_bot_nav">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>

                 </div>

                </div>
            </div>
        </footer>

        <a href="#site" class="up"></a>

    </div>

</body>

</html>