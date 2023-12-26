<section class="sec-padding portfolio-page">
    <div class="container">
        <div class="row  pictures-wrap" >
            @if ($uploads->count())
                @foreach($uploads as $upload)
                <!--Item-->
                <div class="pictures col-lg-6 col-6 col-md-6 mt-3" >
                    <div class="">
                        <a class="" href="portfolio_grid.html#">
                            <img src="{{ $upload->link }}" alt="Oluremi abimbola">
                        </a>
                        <div class=" mt-3">{{ $upload->comments }}</div>
                    </div>
                </div>
                @endforeach
            @else
               <div class="portfolio-item-grid col-lg-12 col-12   col-md-12" >
                    <div class="portfolio-box text-center">
                        <div class="border pt-3">
                            <h1>No Images yet</h1>
                        </div>
                    </div>
                </div>
            @endif
           
        </div>
    </div>
</section>