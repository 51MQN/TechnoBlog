<link href="/public/css/index.css" rel="stylesheet" />

<?php require_once('public/views/pages/home_header.php') ?>

<main>
    <a href="" class="scrollToTop">
        <img src="/public/img/index/gotop.png" alt="go top btn">
    </a>

    <div class="slider">
        <div class="selected-post-preview-container">
            <article class="selected-post-preview white">
                
            </article>
        </div>
        <ul>
            <li>
                <article class="post-preview">
                    
                </article>
            </li>
            <li>
                <article class="post-preview">
                    
                </article>
            </li>
            <li>
                <article class="post-preview">
                    
                </article>
            </li>
            <li>
                <article class="post-preview">
                    
                </article>
            </li>
            <li>
                <article class="post-preview">
                    
                </article>
            </li>
        </ul>
    </div>


    <section class="category world-news">
        <div class="category-head">
            <h2>Mobile</h2>
            <div class="hr-line"></div>
            <nav>
                <ul>
                    <li class="cat-selector kinda-blue" data-category="mobile" data-max-length="<?php echo count(Post::get_by_category(Category::get_by_url_name('mobile')->id))?>">All</li>
                    <li class="cat-selector" data-category="android" data-max-length="<?php echo count(Post::get_by_category(Category::get_by_url_name('android')))?>">Android</li>
                    <li class="cat-selector" data-category="ios" data-max-length="<?php echo count(Post::get_by_category(Category::get_by_url_name('ios')))?>">IOS</li>
                    <li class="cat-selector" data-category="windows-phone" data-max-length="<?php echo count(Post::get_by_category(Category::get_by_url_name('windows-phone')))?>">Windows Phone</li>

                    <li>
                        <img class="btn-left" src="/public/img/index/btn-arrow-left.png" alt="btn-left" />
                    </li>
                    <li>
                        <img class="btn-right <?php echo count(Post::get_by_category(Category::get_by_url_name('mobile')->id)) > 12 ? "active" : ""?>" src="/public/img/index/btn-arrow-right.png" alt="btn-right" />
                    </li>
                </ul>
            </nav>
        </div>

        <div class="post-block" data-coffset="0">
            <ul class="detailed-list">
                <li>
                    <article class="post-preview-detailed">
                        
                    </article>
                </li>

                <li>
                    <article class="post-preview-detailed">
                       
                    </article>
                </li>

                <li>
                    <article class="post-preview-detailed">
                        
                    </article>
                </li>

            </ul>

            <ul>
                <li>
                    <article class="post-preview">
                        
                    </article>
                </li>
                <li>
                    <article class="post-preview">
                        
                    </article>
                </li>
                <li>
                    <article class="post-preview">
                        
                    </article>
                </li>
            </ul>

            <ul>
                <li>
                    <article class="post-preview">
                        
                    </article>
                </li>
                <li>
                    <article class="post-preview">
                        
                    </article>
                </li>
                <li>
                    <article class="post-preview">
                        
                    </article>
                </li>
            </ul>

            <ul>
                <li>
                    <article class="post-preview">
                        
                    </article>
                </li>
                <li>
                    <article class="post-preview">
                        
                    </article>
                </li>
                <li>
                    <article class="post-preview">
                        
                    </article>
                </li>
            </ul>
        </div>

    </section>

    <section class="category fashion" data-max-length="<?php echo count(Post::get_by_category(Category::get_by_url_name('web-design')->id))?>">
        <div class="category-head">
            <h2>Web Design</h2>
            <div class="hr-line"></div>
            <nav>
                <ul>
                    <li class="btn-left">
                        <img src="/public/img/index/btn-arrow-left.png" alt="btn-left" />
                    </li>
                    <li class="btn-right <?php echo count(Post::get_by_category(Category::get_by_url_name('web-design')->id)) > 3 ? "active" : ""?>">
                        <img src="/public/img/index/btn-arrow-right.png" alt="btn-right" />
                    </li>
                </ul>
            </nav>
        </div>

        <div class="post-block" data-coffset="0">
            <ul>
                <li>

                    <article class="post-preview-detailed">

                    </article>

                </li>

                <li>

                    <article class="post-preview-detailed">
                       
                    </article>

                </li>

                <li>

                    <article class="post-preview-detailed">
                       
                    </article>

                </li>
            </ul>

        </div>
    </section>

    <div class="two-col nowrap">
        <div class="left-col">
            <section class="category lifestyle" data-max-length="<?php echo count(Post::get_by_category(Category::get_by_url_name('computers')->id))?>">
                <div class="category-head">
                    <h2>Computers</h2>
                    <div class="hr-line"></div>
                    <nav>
                        <ul>
                            <li class="btn-left">
                                <img src="/public/img/index/btn-arrow-left.png" alt="btn-left" />
                            </li>
                            <li class="btn-right <?php echo count(Post::get_by_category(Category::get_by_url_name('computers')->id)) > 4 ? "active" : ""?>">
                                <img src="/public/img/index/btn-arrow-right.png" alt="btn-right" />
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="post-block" data-coffset="0">
                    <article class="post-preview-large">
                        
                    </article>

                    <ul>
                        <li>
                            <article class="post-preview">
                                
                            </article>
                        </li>

                        <li>

                            <article class="post-preview">
                                
                            </article>

                        </li>

                        <li>
                            <article class="post-preview">
                                
                            </article>
                        </li>
                    </ul>
                </div>

            </section>

            <section class="category sports" data-max-length="<?php echo count(Post::get_by_category(Category::get_by_url_name('desktop')->id))?>">
                <div class="category-head">
                    <h2>Desktop</h2>
                    <div class="hr-line"></div>
                    <nav>
                        <ul>
                            <li class="btn-left">
                                <img src="/public/img/index/btn-arrow-left.png" alt="btn-left" />
                            </li>
                            <li class="btn-right <?php echo count(Post::get_by_category(Category::get_by_url_name('desktop')->id)) > 5 ? "active" : ""?>">
                                <img src="/public/img/index/btn-arrow-right.png" alt="btn-right" />
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="post-block" data-coffset="0">

                    <article class="post-preview-detailed">
                       
                    </article>

                    <ul>
                        <li>
                            <article class="post-preview">
                               
                            </article>
                        </li>

                        <li>
                            <article class="post-preview">
                                
                            </article>
                        </li>
                    </ul>

                    <ul>
                        <li>
                            <article class="post-preview">
                               
                            </article>
                        </li>

                        <li>
                            <article class="post-preview">
                                
                            </article>
                        </li>
                    </ul>
                </div>

            </section>

            <div class="two-col nowrap">
                <section class="category technology" data-max-length="<?php echo count(Post::get_by_category(Category::get_by_url_name('technology')->id))?>">

                    <div class="category-head">
                        <h2>Technology</h2>
                        <div class="hr-line"></div>
                        <nav>
                            <ul>
                                <li class="btn-left">
                                    <img src="/public/img/index/btn-arrow-left.png" alt="btn-left" />
                                </li>
                                <li class="btn-right <?php echo count(Post::get_by_category(Category::get_by_url_name('technology')->id)) > 2 ? "active" : ""?>">
                                    <img src="/public/img/index/btn-arrow-right.png" alt="btn-right" />
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="post-block" data-coffset="0">
                        <ul>
                            <li>
                                <article class="post-preview-large">
                                   
                                </article>
                            </li>

                            <li>
                                <article class="post-preview-large">
                                    
                                </article>
                            </li>
                        </ul>
                    </div>

                </section>

                <section class="category food-health" data-max-length="<?php echo count(Post::get_by_category(Category::get_by_url_name('laptop')->id))?>">
                    <div class="category-head">
                        <h2>Laptop</h2>
                        <div class="hr-line"></div>
                        <nav>
                            <ul>
                                <li class="btn-left">
                                    <img src="/public/img/index/btn-arrow-left.png" alt="btn-left" />
                                </li>
                                <li class="btn-right <?php echo count(Post::get_by_category(Category::get_by_url_name('laptop')->id)) > 4 ? "active" : ""?>">
                                    <img src="/public/img/index/btn-arrow-right.png" alt="btn-right" />
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="post-block" data-coffset="0">
                        <ul>
                            <li>
                                <article class="post-preview">
                                    
                                </article>
                            </li>

                            <li>
                                <article class="post-preview">
                                    
                                </article>
                            </li>
                            <li>
                                <article class="post-preview">
                                    
                                </article>
                            </li>
                            <li>
                                <article class="post-preview">
                                    
                                </article>
                            </li>
                        </ul>
                    </div>

                </section>
            </div>
        </div>


        <?php require_once("public/views/pages/home_aside.php") ?>
    </div>

</main>

<footer>
    <div class="footer-container">
        <div class="footer-content">

            <section class="footer-info">
                <div class="logo">
                    <a href="/home/">
                        <h2>
                            <span class="logo-express white">Express</span>
                            <span class="logo-blog kinda-blue">Techno BLog</span>
                        </h2>
                    </a>
                </div>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt tellus lacus. Duis quis mi ante. Vestibulum dignissim
                    velit malesuada.
                </p>

                <div class="social-circles">
                    <ul class="circle-line">
                        <li class="circle">
                            <a href="https://facebook.com">
                                <img src="/public/img/index/Facebook-logo.png" alt="Facebook_logo" />
                            </a>
                        </li>
                        <li class="circle">
                            <a href="https://twitter.com">
                                <img src="/public/img/index/Twitter-logo.png" alt="Twitter_logo" />
                            </a>
                        </li>
                        <li class="circle">
                            <a href="https://youtube.com">
                                <img src="/public/img/index/Youtube-logo.png" alt="Youtube logo" />
                            </a>
                        </li>
                        <li class="circle">
                            <a href="https://vimeo.com">
                                <img src="/public/img/index/Vimeo-logo.png" alt="Vimeo logo" />
                            </a>
                        </li>
                        <li class="circle">
                            <a href="https://pinterest.com">
                                <img src="/public/img/index/Pinterest-logo.png" alt="Pinterest logo" />
                            </a>
                        </li>
                    </ul>

                    <ul class="circle-line">
                        <li class="circle">
                            <a href="https://instagram.com">
                                <img src="/public/img/index/Instagram-logo.png" alt="Instagram logo" />
                            </a>
                        </li>
                        <li class="circle">
                            <a href="https://behance.net">
                                <img src="/public/img/index/Behance-logo.png" alt="Behance logo" />
                            </a>
                        </li>
                        <li class="circle">
                            <a href="https://dribbble.com">
                                <img src="/public/img/index/dribbble-logo.png" alt="Dribbble logo" />
                            </a>
                        </li>
                        <li class="circle">
                            <a href="https://skype.com">
                                <img src="/public/img/index/Skype-logo.png" alt="Skype logo" />
                            </a>
                        </li>
                        <li class="circle">
                            <a href="https://Soundcloud.com">
                                <img src="/public/img/index/Soundcloud-logo.png" alt="Soundcloud logo" />
                            </a>
                        </li>
                    </ul>
                </div>
            </section>

            <section class="footer-most-viewed">
                <div class="category-head">
                    <h2>Most Viewed</h2>
                </div>
                <ul>
                    <?php foreach ($most_viewed as $post) { ?>                        
                        <li>
                            <article class="post-preview bordered">
                                <?php require("public/views/posts/getSingle.php");?>
                            </article>
                        </li>
                    <?php } ?>
                    
                </ul>
            </section>

            <section class="footer-twitter">
                <div class="category-head">
                    <h2>Twitter</h2>
                </div>

                <ul class="twitter-list">
                    <li class="twit bordered">
                        <p>
                            <img src="/public/img/index/twitter-logo-silhouette.png" alt="tweet"> Lorem ipsum dolor sit amet, consectetur
                            <a href="" class="kinda-blue">adipiscing elit</a>. Aliquam tincidunt tellus lacus.
                        </p>
                        <div class="post-metadata">
                            <time datetime="2016-12-14">about 2 weeks ago</time>
                            <div class="btns">
                                <img src="/public/img/index/reply.png" alt="twit">
                                <img src="/public/img/index/retweet-arrows.png" alt="twit">
                            </div>
                        </div>
                    </li>
                    <li class="twit bordered">
                        <p>
                            <img src="/public/img/index/twitter-logo-silhouette.png" alt="tweet"> Lorem ipsum dolor sit amet, consectetur
                            <a href="" class="kinda-blue">adipiscing elit</a>. Aliquam tincidunt tellus lacus.
                        </p>
                        <div class="post-metadata">
                            <time datetime="2016-12-14">about 2 weeks ago</time>
                            <div class="btns">
                                <img src="/public/img/index/reply.png" alt="twit">
                                <img src="/public/img/index/retweet-arrows.png" alt="twit">
                            </div>
                        </div>
                    </li>
                    <li class="twit">
                        <p>
                            <img src="/public/img/index/twitter-logo-silhouette.png" alt="tweet"> Lorem ipsum dolor sit amet, consectetur
                            <a href="" class="kinda-blue">adipiscing elit</a>. Aliquam tincidunt tellus lacus.
                        </p>
                        <div class="post-metadata">
                            <time datetime="2016-12-14">about 2 weeks ago</time>
                            <div class="btns">
                                <img src="/public/img/index/reply.png" alt="twit">
                                <img src="/public/img/index/retweet-arrows.png" alt="twit">
                            </div>
                        </div>
                    </li>
                </ul>
            </section>

        </div>
        <div class="copyright">&copy; Copyright Gomalthemes 2017, All Rights Reserved</div>
    </div>
</footer>
<script src="/public/js/index.js"></script>
