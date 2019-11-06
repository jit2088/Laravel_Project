<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Unica+One" rel="stylesheet">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('css/vegas.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <title>Bahd-recipes </title>
</head>

<body>
    <!-- The navigation bar begin -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <a class="navbar-brand" href="index.html">
            <img src="img/logo.png" class="navbar-logo-img mr-2" alt=""> Bahd-recipes
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="create-recipe.html" class="nav-link create-recipe-link">Create recipe
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link" href="recipes.html">Recipes
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                </form>
            </ul>
        </div>
    </nav>
    <!-- The navigation bar ending -->

    <!-- The Jumbotron Area -->
    <div id="jumbotron" class="jumbotron text-center">
        <h1 class="display-3 mb-5">
            <img src="img/logo.png" class="jumbotron-logo-img mr-2" alt="">
        </h1>

        <p class="lead jumbotron-title display-4 wow bounceInUp" data-wow-duration="2s" style="color: white;">Making everyday cooking fun !</p>
        <br>
        <p class="lead">
            <!-- The home button 
                    If the user is authenticated, let him rather see a create recipe button
                -->
            <a href="login.html" class="btn btn-primary btn-lg">Sign in</a>
            <a href="login.html" class="btn btn-primary btn-lg">Join now</a>
            <!-- End of the home button -->
        </p>
    </div>
    <!-- End of the jumbotron area -->

    <!-- Top rated recipes section -->
    <div class="container-fluid px-5 my-5">
        <h1 class="display-4 text-center my-5 wow fadeInDown" style="padding: 30px 0px;">
            <i class="ion ion-star"></i>
            Top Rated Recipes</h1>
        <br>
        <div class="card-deck wow fadeIn" data-wow-duration="4s">
            <div class="card mb-3">
                <div class="img-zoom">
                    <img class="card-img-top" style="height: 250px;" src="img/meal-1.jpg" alt="Card image cap">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">
                        <a href="single-recipe.html">Pressurized African Cassava Golden Grains ( Garri )</a>
                    </h5>
                    <hr>
                    <p class="text-sm mb-5">
                        <small>
                            <span class="text-muted">by</span> Elizabeth Funkirokeze</small>
                        <span class="text-muted float-right">
                            <i class="ion ion-clock"></i>
                            35 min</span>
                    </p>

                    <p class="h6 text-center">
                        <span class="mr-3 h5">
                            <i class="ion ion-happy-outline"></i> 12 </span>
                        <span class="mr-3 h5">
                            <i class="ion ion-sad-outline"></i> 5,301</span>
                        <span class="mr-3 h5">
                            <i class="ion ion-ios-heart"></i> 5,301</span>
                    </p>
                </div>
            </div>
            <div class="card mb-3">
                <div class="img-zoom">
                    <img class="card-img-top" style="height: 250px;" src="img/meal-2.jpg" alt="Card image cap">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">
                        <a href="single-recipe.html">Emergency Jollof and coconut stew</a>
                    </h5>
                    <hr>
                    <p class="text-sm mb-5">
                        <small>
                            <span class="text-muted">by</span> Kati Frantz</small>
                        <span class="text-muted float-right">
                            <i class="ion ion-clock"></i>
                            2 min</span>
                    </p>
                    <p class="h6 text-center">
                        <span class="mr-3 h5">
                            <i class="ion ion-happy-outline"></i> 12 </span>
                        <span class="mr-3 h5">
                            <i class="ion ion-sad-outline"></i> 5,301</span>
                        <span class="mr-3 h5">
                            <i class="ion ion-ios-heart"></i> 5,301</span>
                    </p>
                </div>
            </div>
            <div class="card mb-3">
                <div class="img-zoom">
                    <img class="card-img-top" style="height: 250px;" src="img/meal-3.jpg" alt="Card image cap">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">
                        <a href="single-recipe.html">Advanced Abacha and Egg sauce</a>
                    </h5>
                    <hr>
                    <p class="text-sm mb-5">
                        <small>
                            <span class="text-muted">by</span> Elizabeth Funkirokeze</small>
                        <span class="text-muted float-right">
                            <i class="ion ion-clock"></i>
                            35 min</span>
                    </p>
                    <p class="h6 text-center">
                        <span class="mr-3 h5">
                            <i class="ion ion-happy-outline"></i> 12 </span>
                        <span class="mr-3 h5">
                            <i class="ion ion-sad-outline"></i> 5,301</span>
                        <span class="mr-3 h5">
                            <i class="ion ion-ios-heart"></i> 5,301</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End of top rated recipes section -->

    <!-- Top rated chefs section -->
    <div class="container px-5 my-5">
        <h1 class="display-4 text-center my-5 wow fadeInDown" style="padding: 30px 0px;">
            <i class="ion ion-person-stalker"></i>
            Most Popular Chefs</h1>
        <br>
        <div class="row wow fadeIn" data-wow-duration="4s">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img class="img-fluid img-responsive" src="http://i.pravatar.cc/300" alt="">
                    <div class="overlay">
                        <p class="my-auto">
                            <a href="profile.html">KATI FRANTZ</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img class="img-fluid img-responsive" src="http://i.pravatar.cc/300" alt="">
                    <div class="overlay">
                        <p class="my-auto">
                            <a href="profile.html">SELINA RYANS</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img class="img-fluid img-responsive" src="http://i.pravatar.cc/300" alt="">
                    <div class="overlay">
                        <p class="my-auto">
                            <a href="profile.html">ELLEN MICHEALS</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img class="img-fluid img-responsive" src="http://i.pravatar.cc/300" alt="">
                    <div class="overlay">
                        <p class="my-auto">
                            <a href="profile.html">CLAUS LEBRONE</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of top rated chefs section -->

    <!-- Most favorited recipes section -->
    <div class="container-fluid px-5 my-5">
        <h1 class="display-4 text-center my-5 wow fadeInDown" style="padding: 30px 0px;">
            <i class="ion ion-heart"></i>
            Most favorited Recipes</h1>
        <br>
        <div class="card-deck wow fadeIn" data-wow-duration="4s">
            <div class="card mb-3">
                <div class="img-zoom">
                    <img class="card-img-top" style="height: 250px;" src="img/meal-4.jpg" alt="Card image cap">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">
                        <a href="single-recipe.html">Pressurized African Cassava Golden Grains ( Garri )</a>
                    </h5>
                    <hr>
                    <p class="text-sm mb-5">
                        <small>
                            <span class="text-muted">by</span> Elizabeth Funkirokeze</small>
                        <span class="text-muted float-right">
                            <i class="ion ion-clock"></i>
                            35 min</span>
                    </p>

                    <p class="h6 text-center">
                        <span class="mr-3 h5">
                            <i class="ion ion-happy-outline"></i> 12 </span>
                        <span class="mr-3 h5">
                            <i class="ion ion-sad-outline"></i> 5,301</span>
                        <span class="mr-3 h5">
                            <i class="ion ion-ios-heart"></i> 5,301</span>
                    </p>
                </div>
            </div>
            <div class="card mb-3">
                <div class="img-zoom">
                    <img class="card-img-top" style="height: 250px;" src="img/meal-5.jpg" alt="Card image cap">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">
                        <a href="single-recipe.html">Emergency Jollof and coconut stew</a>
                    </h5>
                    <hr>
                    <p class="text-sm mb-5">
                        <small>
                            <span class="text-muted">by</span> Kati Frantz</small>
                        <span class="text-muted float-right">
                            <i class="ion ion-clock"></i>
                            2 min</span>
                    </p>
                    <p class="h6 text-center">
                        <span class="mr-3 h5">
                            <i class="ion ion-happy-outline"></i> 12 </span>
                        <span class="mr-3 h5">
                            <i class="ion ion-sad-outline"></i> 5,301</span>
                        <span class="mr-3 h5">
                            <i class="ion ion-ios-heart"></i> 5,301</span>
                    </p>
                </div>
            </div>
            <div class="card mb-3">
                <div class="img-zoom">
                    <img class="card-img-top" style="height: 250px;" src="img/meal-6.jpg" alt="Card image cap">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">
                        <a href="single-recipe.html">Advanced Abacha and Egg sauce</a>
                    </h5>
                    <hr>
                    <p class="text-sm mb-5">
                        <small>
                            <span class="text-muted">by</span> Elizabeth Funkirokeze</small>
                        <span class="text-muted float-right">
                            <i class="ion ion-clock"></i>
                            35 min</span>
                    </p>
                    <p class="h6 text-center">
                        <span class="mr-3 h5">
                            <i class="ion ion-happy-outline"></i> 12 </span>
                        <span class="mr-3 h5">
                            <i class="ion ion-sad-outline"></i> 5,301</span>
                        <span class="mr-3 h5">
                            <i class="ion ion-ios-heart"></i> 5,301</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End of top rated recipes section -->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document" style="padding-top: 130px;">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <div class="row justify-content-center">
                        <div class="col-10">
                            <form>
                                <h3 class="text-center mb-3 mt-3">Login</h3>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="staticEmail" placeholder="email@example.com">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <button class="btn mb-3 btn-primary form-control" type="submit">Login</button>
                                    <span class="mt-5 h6 mr-3">
                                        <a href="" role="button" data-toggle="modal" data-target="#registerModal" data-dismiss="modal">No account ? Register</a>
                                    </span>
                                    <span class="mt-5 ml-2 h6">
                                        <a href="">Forgot your password?</a>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Begin page footer -->
    <footer class="footer">
        <p>Bahd-recipes app by bahdcoder @andela</p>
    </footer>
    <!-- End page footer -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>
    <script src="js/vegas.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
        $("#jumbotron").vegas({
            timer: false,
            shuffle: true,
            transition: 'fade',
            animation: 'kenburns',
            slides: [
                { src: 'img/banner-1.jpg' },
                { src: 'img/banner-2.jpg' },
                { src: 'img/banner-3.jpg' }
            ]
        });
    </script>