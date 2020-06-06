<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Guild</title>
    <link rel = "icon" type = "image/png" href = "{{ asset('images/crunch_logo.jpg') }}">
    <link rel="stylesheet" href="{{ asset('css/slideshow.css') }}">
    <link href="{{ asset('fontawesome-free-5.13.0-web/css/all.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('MDB-Free_4.17.0/css/mdb.min.css') }}">
</head>
<body>
    <div class="container" id="body">
        <ul class="nav justify-content-end" style="margin-right: 0">
            <li class="nav-item">
                <a class="nav-link btn-login" href="login" id="Login">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn-signup" href="signup" tabindex="-1">Join Us</a>
            </li>
        </ul>

        <div class="title text-center">
            <p class="fade-anim" id="title-paragraph">Welcome to the Guild</p>
            <a class="fade-anim nav-link btn-signup" href="signup" id="title-button">Join Us</a>
        </div>

        <div class="parallax">
            <div class="clip">
                <p class="fade-anim clip-content">Come over, brag all you want</p>
                <p class="fade-anim clip-content">Raise all banter and recommend on tons</p>
                <p class="fade-anim clip-content">of anime and manga</p>
                <p class="fade-anim" id="clip-special">Receive top news from fellow otakus</p>
                <p class="fade-anim" id="clip-bottom">The Guild is for everyone on the Anime Crunch platform</p>
            </div>
        </div>
        <div class="quote">
            <blockquote>
                You can spill drinks on me, even spit on me.
                I'll just laugh about it.
                But if you hurt my friends...I WON'T FORGIVE YOU"
                <div class="d-flex justify-content-start">
                    <img class="img-fluid shanks_pic" src="{{ asset('images/shanks.jpeg') }}" alt="Shanks">
                    <span class="quote_info">Shanks <br>One Piece</span>
                </div>
            </blockquote>

            <div id="quote-bottom">
                <h2 class="quote-bottom--left">We live by the nakama spirit! </h2>
                <h6 style="padding-left: 10px">Come make friends, support friends and make rivals</h6>
                <h2 id="quote-bottom--right">After all it’s just about the anime</h2>
            </div>
        </div>

        <!-- Slideshow container -->
        <div class="slideshow-container" >

            <div class="view mySlides" style="width: 100%">
                <img src="{{ asset('images/44299.jpg') }}" class="img-fluid" alt="">
                <div class="mask flex-center rgba-black-light text-center">
                    <p class="white-text slideshow-text">Keep lists of anime and manga you want to and are following</p>
                </div>
            </div>

            <div class="view mySlides" style="width: 100%">
                <img src="{{ asset('images/anime.jpg') }}" class="img-fluid" alt="">
                <div class="mask flex-center rgba-black-light text-center">
                    <p class="white-text slideshow-text">Connect with other Otakus and see their tastes and ponder on their recommendations</p>
                </div>
            </div>

            <div class="view mySlides" style="width: 100%">
                <img src="{{ asset('images/1084967.jpg') }}" class="img-fluid" alt="">
                <div class="mask flex-center rgba-black-light text-center">
                    <p class="white-text slideshow-text">Create custom recommendation lists and share publicly or privately &#x1F609;</p>
                </div>
            </div>

            <div class="view mySlides" style="width: 100%">
                <img src="{{ asset('images/itl.cat_konosuba-wallpaper_208090.png') }}" class="img-fluid" alt="">
                <div class="mask flex-center rgba-black-light text-center">
                    <p class="white-text slideshow-text">Post banter, comment and up vote your favorite banters on the guild board</p>
                </div>
            </div>

            <div class="view mySlides" style="width: 100%">
                <img src="{{ asset('images/176214.jpg') }}" class="img-fluid" alt="">
                <div class="mask flex-center rgba-black-light text-center">
                    <p class="white-text slideshow-text">Seen an anime? Read a manga? We would love to hear your take on it, post reviews as much
                        as you can and give your personal rating on the show and share with the community</p>
                </div>
            </div>

            <div class="view mySlides" style="width: 100%">
                <img src="{{ asset('images/that-time-i-got-reincarnated-as-a-slime-anime-characters-rimuru-tempest-shizue-iawa-v7544.jpg') }}" class="img-fluid" alt="">
                <div class="mask flex-center rgba-black-light text-center">
                    <p class="white-text slideshow-text">Want this and more? Join us now, start your journey into the Otaku world and establish your dominance</p>
                </div>
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>

        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
        </div>

        <div class="highlight text-center">
            <p style="padding-top: 50px; font-weight: 900">Join the community today! Don’t be left out</p>

            <div class="row" style="margin-top: 100px">
                <div class="col-md-4 text-center">
                    <span><i class="fas fa-users fa-5x"></i></span>
                    <p class="highlight-text">Connect with friends </p>
                </div>
                <div class="col-md-4 text-center">
                    <span><i class="far fa-list-alt fa-5x"></i></span>
                    <p class="highlight-text">Keep track of your favorite shows and manga using personalized lists</p>
                </div>
                <div class="col-md-4 text-center">
                    <span><i class="far fa-thumbs-up fa-5x" style="padding-right: 10px"></i><i class="far fa-thumbs-down fa-5x"></i></span>
                    <p class="highlight-text">Give personalized reviews</p>
                </div>
            </div>

            <div class="row" style="margin-top: 100px">
                <div class="col-md-4 text-center">
                    <span><i class="far fa-list-alt fa-5x" style="padding-right: 10px"></i><i class="far fa-share-square fa-5x"></i></span>
                    <p class="highlight-text">Create and share personalized recommendations</p>
                </div>
                <div class="col-md-4 text-center">
                    <span><i class="far fa-comments fa-5x"></i></span>
                    <p class="highlight-text">Discuss various anime/manga topics on the guild board</p>
                </div>
                <div class="col-md-4 text-center">
                    <span><i class="fas fa-newspaper fa-5x"></i></span>
                    <p class="highlight-text">Receive information on hangouts, events, games, anime, manga and many more...</p>
                </div>
            </div>
        </div>

        <div class="contact text-center">
            <p class="contact-text">Contact Us</p>
        </div>

        <!-- Footer -->
        <footer class="page-footer font-small cyan darken-3 text-center">

            <!-- Footer Elements -->
            <div class="container" id="page-footer">

                <!-- Grid row-->
                <div class="row" style="color: #7a1e26;">

                    <!-- Grid column -->
                    <div class="col-md-12">
                        <div class="mb-5 flex-center">

                            <!-- Facebook -->
                            <a class="fb-ic">
                                <i class="fab fa-facebook-f fa-lg mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                            <!-- Twitter -->
                            <a class="tw-ic">
                                <i class="fab fa-twitter fa-lg mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                            <!-- Google +-->
                            <a class="gplus-ic">
                                <i class="fab fa-google-plus-g fa-lg mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                            <!--Linkedin -->
                            <a class="li-ic">
                                <i class="fab fa-linkedin-in fa-lg mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                            <!--Instagram-->
                            <a class="ins-ic">
                                <i class="fab fa-instagram fa-lg mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                            <!--Pinterest-->
                            <a class="pin-ic">
                                <i class="fab fa-pinterest fa-lg fa-2x"> </i>
                            </a>
                        </div>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row-->

            </div>
            <!-- Footer Elements -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3" id="footer-copyright">© 2020 Copyright:
                <span>Prom&Chybee</span>
            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->

    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/919170cfe4.js"></script>
    <script src="{{ asset('js/index.js') }}"></script>
    <script src="{{ asset('js/slideshow.js') }}"></script>
</body>
</html>
