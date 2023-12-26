<!--Portfolio-->
<section class="mb-0 bg--gray 100vh  d-none d-lg-block">
    <div class="container-fluid">
        <!--Intro-->
        <div class="row no-gutters">
            <div class="portfolio-item-grid col-12 col-lg-6">
                <div class="row justify-content-center">
                    <div class="portfolio-item-grid col-12  col-lg-12 pr-5">
                        <div class="text-center sec-padding--">
                            <h1 class="h-name">Oluremilekun Stella Abimbola</h1>
                            <h3 class="h-year">1939 - 2020</h3>
                            <a class="btn btn--lg  intro-button" href="https://oluremiabimbola.com/videos">WATCH EVENT VIDEOS</a>
                        </div>
                        <div class="portfolio-item-grid col-12 mt-5 mb-5 col-6">
                            <div class="portfolio-box">
                                <a class="portfolio-thumb" href="/download">
                                    <img src="/images/placeholder.png" alt="portfolio Item" />
                                </a>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
            <div class="portfolio-item-grid col-12 col-md-6 ">
                <div class="portfolio-box">
                    <a class="portfolio-thumb" href="#">
                        <img src="/images/banners/ZgFSVgGHOUvQotouviJAqwJIqXDRC4J93p2DuqWQ.jpeg" alt="portfolio Item" />
                    </a>
                </div>
            </div>


            <div class="clearfix"></div>
        </div>

    </div>

</section>

<!--End Portfolio-->



<!--Portfolio-->
<section class="mb-0 bg--gray  d-lg-none  d-xl-none">
    <div class="container-fluid">
        <!--Intro-->
        <div class="row no-gutters">
            @foreach( $banners as $banner )
            <div class="col-12  {{ $banner->col }} ">
                <div class="">
                    <a class="" href="{{ $banner->link }}">
                        <img src="{{ $banner->image }}" alt="portfolio Item" />
                    </a>
                </div>
            </div>
            @endforeach
            <div class="mt-5 mb-5  col-lg-6">
                <div class="row justify-content-center">
                    <div class="portfolio-item-grid col-12  sec-padding--lg col-lg-12 pr-5">
                        <div class="text-center ">
                            <h1 class="h-name">Oluremilekun Stella Abimbola</h1>
                            <h3 class="h-year">1939 - 2020</h3>
                            <a class="btn btn--lg  intro-button" href="/videos">WATCH EVENT VIDEOS</a>
                            <div class="portfolio-item-grid col-12 mt-5 mb-5 col-6">
                                <div class="portfolio-box">
                                    <a class="portfolio-thumb" href="/download">
                                        <img src="/images/placeholder.png" alt="portfolio Item" />
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!--End Portfolio-->