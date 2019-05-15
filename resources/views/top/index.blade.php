@extends('layouts.app')
@section('content')
<div class="container mainSlide">
    <div id="mainSlider" class="carousel slide" data-ride="carousel" data-interval="2000">
        <ol class="carousel-indicators">
            <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
            <li data-target="#mainSlider" data-slide-to="1" class="active"></li>
            <li data-target="#mainSlider" data-slide-to="2" class="active"></li>
        </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./images/image1.jpg" alt="" class="w-100" height="600"/>
            　　　　<div class="carousel-caption">
            　　　　　　　　<h4>We Assure Better Design</h4>
            　　　　</div>
        </div>
        <div class="carousel-item">
        　　　　<img src="./images/image2.jpg" alt=""class="w-100" height="600"/>
        　　　　　　　　<div class="carousel-caption">
        　　　　　　　　　　　　<h4>We Assure Better Design</h4>
                    　</div>
        </div>
        <div class="carousel-item">
        　　　　<img src="./images/image3.jpg" alt="" class="w-100" height="600"/>
        　　　　　　　　<div class="carousel-caption">
                        　　　　<h4>We Assure Better Design</h4>
                    　</div>
        </div>
   　　 </div>
            <a href="#mainSlider" class="carousel-control-prev" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a href="#mainSlider" class="carousel-control-next" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>

    <div class="container">
        <div class="row box-one">
            <div class="col-md-3">
                <div class="card">
                    <img src="./images/kansai-airport.jpeg" alt="" class="card-img-top" height="200"/>
                    <div class="card-body">
                        <h4 class="card-title">kansai Airport</h4>
                        <p class="card-text">Kansai Airport is establised in 1999</p>
                        <a href="" class="btn btn-success">Read More...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="./images/kansai-airport.jpeg" alt="" class="card-img-top" height="200"/>
                        <div class="card-body">
                            <h4 class="card-title">kansai Airport</h4>
                                <p class="card-text">Kansai Airport is establised in 1999</p>
                                    <a href="" class="btn btn-success">Read More...</a>
                        </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="./images/kansai-airport.jpeg" alt="" class="card-img-top" height="200"/>
                        <div class="card-body">
                            <h4 class="card-title">kansai Airport</h4>
                            <p class="card-text">Kansai Airport is establised in 1999</p>
                            <a href="" class="btn btn-success">Read More...</a>
                        </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="./images/kansai-airport.jpeg" alt="" class="card-img-top" height="200"/>
                        <div class="card-body">
                            <h4 class="card-title">kansai Airport</h4>
                            <p class="card-text">Kansai Airport is establised in 1999</p>
                            <a href="" class="btn btn-success">Read More...</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row box-two">
            <div class="col-md-3">
                <div class="card" style="padding: top 20px">
                    <img src="./images/kansai-airport.jpeg" alt="" class="card-img-top" height="200"/>
                        <div class="card-body">
                            <h4 class="card-title">kansai Airport</h4>
                            <p class="card-text">Kansai Airport is establised in 1999</p>
                            <a href="" class="btn btn-success">Read More...</a>
                        </div>
                </div>
            </div>
        <div class="col-md-3">
            <div class="card">
                <img src="./images/kansai-airport.jpeg" alt="" class="card-img-top" height="200"/>
                    <div class="card-body">
                        <h4 class="card-title">kansai Airport</h4>
                        <p class="card-text">Kansai Airport is establised in 1999</p>
                        <a href="" class="btn btn-success">Read More...</a>
                    </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="./images/kansai-airport.jpeg" alt="" class="card-img-top" height="200"/>
                    <div class="card-body">
                        <h4 class="card-title">kansai Airport</h4>
                        <p class="card-text">Kansai Airport is establised in 1999</p>
                        <a href="" class="btn btn-success">Read More...</a>
                    </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="./images/kansai-airport.jpeg" alt="" class="card-img-top" height="200"/>
                   <div class="card-body">
                       <h4 class="card-title">kansai Airport</h4>
                       <p class="card-text">Kansai Airport is establised in 1999</p>
                    　　<a href="" class="btn btn-success">Read More...</a>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection