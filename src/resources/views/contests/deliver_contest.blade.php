@extends('layouts.contest')
@section('content')
<!-- start section1 -->
<section class="win">
    <div class="container"><h3>CHOOSE WHAT YOU’D LIKE TO WIN</h3>

        <div class="slideshow-container">
            <div class="mySlides1">
                <div class="row">
                    <p  class="prag">
                        <img src="/contest/images/one.png"> Apple iPhone X, Fully Unlocked 5.8", 64 GB - Silver</p>
                    <div class="col-md-3 col-sm-5 col-sm-offset-1">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="/contest/images/slide.png" alt="...">
                                </div>
                                <div class="item">
                                    <img src="/contest/images/slide.png" alt="...">
                                </div>
                                <div class="item">
                                    <img src="/contest/images/slide.png" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-6">

                        <!-- START SLIDER -->
                        <div class="choose active" id="choose1">

                            <div class="inner">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                                <p class="hidden-xs">
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis
                                    unde omnis iste natus error.
                                </p>
                                <button class="btn btn-danger">CHOOSE THIS PRIZE</button>
                                <button class="btn btn-default"  onclick="plusSlides(1, 0)">NEXT PRIZE</button>
                            </div>
                        </div>

                        <!-- END SLIDER -->
                    </div>
                </div>
            </div>

            <div class="mySlides1">
                <div class="row">
                    <p  class="prag">
                        <img src="/contest/images/one.png"><span> Apple iPhone X, Fully Unlocked</span></p>
                    <div class="col-md-3 col-sm-5 col-sm-offset-1">
                        <div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic2" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic2" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic2" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="/contest/images/slide2.png" alt="...">
                                </div>
                                <div class="item">
                                    <img src="/contest/images/slide2.png" alt="...">
                                </div>
                                <div class="item">
                                    <img src="/contest/images/slide2.png" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-6">

                        <!-- START SLIDER -->
                        <div class="choose active" id="choose1">

                            <div class="inner">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                                <p class="hidden-xs">
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis
                                    unde omnis iste natus error.
                                </p>
                                <button class="btn btn-danger">CHOOSE THIS PRIZE</button>
                                <button class="btn btn-default" onclick="plusSlides(1, 0)">NEXT PRIZE</button>
                            </div>
                        </div>

                        <!-- END SLIDER -->
                    </div>
                </div>
            </div>

            <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
            <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
        </div>
        <div class="row other-prizes ex">
            <div class="col-md-12">
                <div class="choose" id="choose2">
                    <p class="prag">
                        <img src="/contest/images/two.png">
                        <b>2nd place:</b> 3x50$ gift cards on amazon</p>
                </div>
                <div class="choose" id="choose3">
                    <p class="prag">
                        <img src="/contest/images/three.png">
                        <b>3rd place:</b> 3x25$ gift cards on amazon</p>
                </div>
            </div>
        </div>
        <div class="row order-id">
            <h2>ENTER YOUR ORDER ID:</h2>
            <form action="#" method="POST">
                <div class="form-group">
                    <input type="number" class="form-control" placeholder="6533215409732">
                </div>
                <div class="checkbox text-left">
                    <input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" value="value1">
                    <label for="styled-checkbox-1"><b>I agree with the terms and conditions</b></label>
                </div>
                <button type="submit" class="btn btn-danger">JOIN THE CONTEST</button>
            </form>
        </div>
    </div>
</section>

<!-- section two -->
<section class="how-work">
    <div class="container">
        <div class="row">
            <h2>HOW  IT  WORKS</h2>
            <div class="col-md-3 col-sm-6">
                <img src="/contest/images/gift.png">
                <h3>CHOOSE YOUR PRIZE</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="/contest/images/key.png">
                <h3>ENTER YOUR ORDER ID</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="/contest/images/list.png">
                <h3>INCREASE YOUR CHANCES</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="/contest/images/confet.png">
                <h3>CLAIM YOUR PRIZE</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>
        <div class="text-center">
            <a class="btn btn-default" href="#">read rules</a>
        </div>
    </div>
</section>
<!-- section three -->
<section class="more-info">
    <div class="container">
        <h3>MORE  ABOUT  THE  PRIZES</h3>
        <div class="row">
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-md-4 img-div">
                        <img src="/contest/images/app.png" class="img-responsive">
                    </div>
                    <div class="col-md-8">
                        <h4>Apple iPhone X, Fully Unlocked 5.8"</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>

                    </div>
                </div>
                <a href="#" class="btn btn-default">SEE THE PRODUCT ON
                    <img src="/contest/images/amazon.png">
                </a>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-md-4 img-div">
                        <img src="/contest/images/app.png" class="img-responsive">
                    </div>
                    <div class="col-md-8">
                        <h4>Apple iPhone X, Fully Unlocked 5.8"</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>

                    </div>
                </div>
                <a href="#" class="btn btn-default">SEE THE PRODUCT ON
                    <img src="/contest/images/amazon.png">
                </a>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-md-4 img-div">
                        <img src="/contest/images/app.png" class="img-responsive">
                    </div>
                    <div class="col-md-8">
                        <h4>Apple iPhone X, Fully Unlocked 5.8"</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>

                    </div>
                </div>
                <a href="#" class="btn btn-default">SEE THE PRODUCT ON
                    <img src="/contest/images/amazon.png">
                </a>
            </div>
        </div>
    </div>
</section>
@endsection