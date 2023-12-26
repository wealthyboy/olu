


<section class="sec-padding portfolio-page">
    <div class="container">
        <div class="row videos-wrap  portfolio-grid" >
           @if ($uploads->count())
                @foreach($uploads->slice(1) as $upload)
                <!--Item-->
                <div class="pictures col-lg-6   ml-1 mr-1  col-6 col-md-6 mt-3" >
                    <div class="">
                        <a class="" href="portfolio_grid.html#">
                            <img src="{{ $upload->link }}" alt="Oluremi abimbola">
                        </a>
                        <div class=" mt-3">{{ $upload->comments }}</div>
                    </div>
                </div>
                @endforeach

                <div class="portfolio-item-grid mr-3 videos col-lg-6 col-6 col-md-6 mt-3" >
                   <iframe width="560" height="315"  src="https://www.youtube.com/embed/ZWErQl97I88?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <p>
                      <div class=" mt-3">Family Tribute for Late Mrs Oluremilekun Abimbola - 04/08/20</div>
                    </p>
                </div>

                <div class="portfolio-item-grid ml-3 videos col-lg-6 col-6 col-md-6 mt-3" >
                   <iframe width="560" height="315" src="https://www.youtube.com/embed/VnZFbyzDiqY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <p>
                      <div class=" mt-3">Public Tribute for Late Mrs Oluremilekun Abimbola - 05/08/20</div>
                    </p>
                </div>


                <div class="portfolio-item-grid mr-3 videos col-lg-6 col-6 col-md-6 mt-3" >
                   <iframe width="560" height="315" src="https://www.youtube.com/embed/Ghjs4Eq9egg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <p>
                      <div class=" mt-3">Wake Keep Service for Late Mrs Oluremilekun Abimbola - 06/08/20</div>
                    </p>
                </div>

                <div class="portfolio-item-grid ml-3 videos col-lg-6 col-6 col-md-6 mt-3" >
                   <iframe width="560" height="315" src="https://www.youtube.com/embed/dviBtZCJGeU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <p>
                      <div class=" mt-3">Funeral Service for Late Mrs Oluremilekun Abimbola 07/08/20 - 06/08/20</div>
                    </p>
                </div>

                <div class="portfolio-item-grid mr-3  videos col-lg-6 col-6 col-md-6 mt-3" >
                <iframe width="560" height="315" src="https://www.youtube.com/embed/xIgD-5PesAU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <p>
                      <div class=" mt-3">Interment Service for Late Mrs Oluremilekun Abimbola</div>
                    </p>
                </div>
               
                <div class="portfolio-item-grid ml-3 videos col-lg-6 col-6 col-md-6 mt-3" >
                <iframe width="560" height="315" src="https://www.youtube.com/embed/ofEYsHmCY-4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <p>
                      <div class=" mt-3">Mum Estate Tribute </div>
                    </p>
                </div>
                <div class="portfolio-item-grid  ml-3 videos col-lg-6 col-6 col-md-6 mt-3" >

                    <p>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/S5kYqWZG-FI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </p>
                    <p>
                      <div class=" mt-3"> Tribute to Grandma</div>
                    </p>
                </div>
            @else
               <div class="portfolio-item-grid col-lg-12 col-12   col-md-12" >
                    <div class="portfolio-box text-center">
                        <div class="border pt-3">
                            <h1>No Videos yet</h1>
                        </div>
                    </div>
                </div>
            @endif
           
        </div>
    </div>
</section>