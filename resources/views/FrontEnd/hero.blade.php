{{--<section class="hero-area" id="home">--}}
{{--    <div class="container">--}}
{{--        <div class="hero-area-slider">--}}
{{--            @foreach($movies as $m)--}}
{{--            <div class="row hero-area-slide">--}}
{{--                <div class="col-lg-6 col-md-5">--}}
{{--                    <div class="hero-area-content">--}}
{{--                        <img src="{{ asset('storage/movie_photos/'.$m->photo) }}" alt="about" />--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-md-7">--}}
{{--                    <div class="hero-area-content pr-50">--}}
{{--                        <div class="d-flex align-items-baseline ">--}}
{{--                            <h2 class="mr-2"> {{ $m->title }}</h2>--}}
{{--                            <span>{{ $m->is_serie ? '(Series)' : '(Movie)' }}</span>--}}
{{--                        </div>--}}
{{--                        <div class="review">--}}
{{--                            <div class="author-review">--}}
{{--                                <i class="icofont icofont-star"></i>--}}
{{--                                <i class="icofont icofont-star"></i>--}}
{{--                                <i class="icofont icofont-star"></i>--}}
{{--                                <i class="icofont icofont-star"></i>--}}
{{--                                <i class="icofont icofont-star"></i>--}}
{{--                            </div>--}}
{{--                            <h4>180k voters</h4>--}}
{{--                        </div>--}}
{{--                        <p>She is a devil princess from the demon world. She grew up sheltered by her parents and doesn't really know how to be evil or any of the common actions,   She is unable to cry due to Keita's accidental first wish, despite needed for him to wish...</p>--}}
{{--                        <h3>Available Downlinks:</h3>--}}
{{--                        <div class="slide-cast">--}}
{{--                            @if(isset($m->one_movie))--}}
{{--                                @foreach($m->one_movie as $one)--}}
{{--                                    <div class="single-slide-cast text-center">--}}
{{--                                        5+--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                        <div class="slide-trailor">--}}
{{--                            <h3>Watch Trailer</h3>--}}
{{--                            <a class="theme-btn theme-btn2" href="#"><i class="icofont icofont-play"></i> Tickets</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--        <div class="hero-area-thumb">--}}
{{--            <div class="thumb-prev">--}}
{{--                <div class="row hero-area-slide">--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="hero-area-content">--}}
{{--                            <img src="assets/img/slide3.png" alt="about" />--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="hero-area-content pr-50">--}}
{{--                            <h2>Last Avatar</h2>--}}
{{--                            <div class="review">--}}
{{--                                <div class="author-review">--}}
{{--                                    <i class="icofont icofont-star"></i>--}}
{{--                                    <i class="icofont icofont-star"></i>--}}
{{--                                    <i class="icofont icofont-star"></i>--}}
{{--                                    <i class="icofont icofont-star"></i>--}}
{{--                                    <i class="icofont icofont-star"></i>--}}
{{--                                </div>--}}
{{--                                <h4>180k voters</h4>--}}
{{--                            </div>--}}
{{--                            <p>She is a devil princess from the demon world. She grew up sheltered by her parents and doesn't really know how to be evil or any of the common actions,   She is unable to cry due to Keita's accidental first wish, despite needed for him to wish...</p>--}}
{{--                            <h3>Cast:</h3>--}}
{{--                            <div class="slide-cast">--}}
{{--                                <div class="single-slide-cast">--}}
{{--                                    <img src="assets/img/cast/cast1.png" alt="about" />--}}
{{--                                </div>--}}
{{--                                <div class="single-slide-cast">--}}
{{--                                    <img src="assets/img/cast/cast2.html" alt="about" />--}}
{{--                                </div>--}}
{{--                                <div class="single-slide-cast">--}}
{{--                                    <img src="assets/img/cast/cast3.png" alt="about" />--}}
{{--                                </div>--}}
{{--                                <div class="single-slide-cast">--}}
{{--                                    <img src="assets/img/cast/cast4.png" alt="about" />--}}
{{--                                </div>--}}
{{--                                <div class="single-slide-cast">--}}
{{--                                    <img src="assets/img/cast/cast5.png" alt="about" />--}}
{{--                                </div>--}}
{{--                                <div class="single-slide-cast">--}}
{{--                                    <img src="assets/img/cast/cast6.png" alt="about" />--}}
{{--                                </div>--}}
{{--                                <div class="single-slide-cast">--}}
{{--                                    <img src="assets/img/cast/cast7.png" alt="about" />--}}
{{--                                </div>--}}
{{--                                <div class="single-slide-cast text-center">--}}
{{--                                    5+--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="slide-trailor">--}}
{{--                                <h3>Watch Trailer</h3>--}}
{{--                                <a class="theme-btn theme-btn2" href="#"><i class="icofont icofont-play"></i> Tickets</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="thumb-next">--}}
{{--                <div class="row hero-area-slide">--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="hero-area-content">--}}
{{--                            <img src="assets/img/slide1.png" alt="about" />--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="hero-area-content pr-50">--}}
{{--                            <h2>The Deer God</h2>--}}
{{--                            <div class="review">--}}
{{--                                <div class="author-review">--}}
{{--                                    <i class="icofont icofont-star"></i>--}}
{{--                                    <i class="icofont icofont-star"></i>--}}
{{--                                    <i class="icofont icofont-star"></i>--}}
{{--                                    <i class="icofont icofont-star"></i>--}}
{{--                                    <i class="icofont icofont-star"></i>--}}
{{--                                </div>--}}
{{--                                <h4>180k voters</h4>--}}
{{--                            </div>--}}
{{--                            <p>She is a devil princess from the demon world. She grew up sheltered by her parents and doesn't really know how to be evil or any of the common actions,   She is unable to cry due to Keita's accidental first wish, despite needed for him to wish...</p>--}}
{{--                            <h3>Cast:</h3>--}}
{{--                            <div class="slide-cast">--}}
{{--                                <div class="single-slide-cast">--}}
{{--                                    <img src="assets/img/cast/cast1.png" alt="about" />--}}
{{--                                </div>--}}
{{--                                <div class="single-slide-cast">--}}
{{--                                    <img src="assets/img/cast/cast2.html" alt="about" />--}}
{{--                                </div>--}}
{{--                                <div class="single-slide-cast">--}}
{{--                                    <img src="assets/img/cast/cast3.png" alt="about" />--}}
{{--                                </div>--}}
{{--                                <div class="single-slide-cast">--}}
{{--                                    <img src="assets/img/cast/cast4.png" alt="about" />--}}
{{--                                </div>--}}
{{--                                <div class="single-slide-cast">--}}
{{--                                    <img src="assets/img/cast/cast5.png" alt="about" />--}}
{{--                                </div>--}}
{{--                                <div class="single-slide-cast">--}}
{{--                                    <img src="assets/img/cast/cast6.png" alt="about" />--}}
{{--                                </div>--}}
{{--                                <div class="single-slide-cast">--}}
{{--                                    <img src="assets/img/cast/cast7.png" alt="about" />--}}
{{--                                </div>--}}
{{--                                <div class="single-slide-cast text-center">--}}
{{--                                    5+--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="slide-trailor">--}}
{{--                                <h3>Watch Trailer</h3>--}}
{{--                                <a class="theme-btn theme-btn2" href="#"><i class="icofont icofont-play"></i> Tickets</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
