<section class="text-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 mt-5">
                <p class="fa-2x">In loving memory of Oluremilekun Stella Abimbola.</p>
                <p class="fa-2x">Please share any words of comfort, humour or inspiration that</p>
                <p class="fa-2x">she may have shared with you.</p>
                <div class="portfolio-box mt-2 mb-3">
                    <a class="portfolio-thumb" href="#">
                        <img src="/images/col1.jpg" alt="" />
                    </a>
                </div>
                <div class="portfolio-box mt-2 mb-3">
                    <a class="portfolio-thumb" href="#">
                        <img src="/images/col2.jpeg" alt="" />
                    </a>
                </div>
                <div class="portfolio-box mt-2 mb-3">
                    <a class="portfolio-thumb" href="#">
                        <img src="/images/col3.jpeg" alt="" />
                    </a>
                </div>
                <div class="portfolio-box mt-2 mb-3">
                    <a class="portfolio-thumb" href="#">
                        <img src="/images/col4.jpg" alt="" />
                    </a>
                </div>
                <div class="portfolio-box mt-2 mb-3">
                    <a class="portfolio-thumb" href="#">
                        <img src="/images/col5.jpeg" alt="" />
                    </a>
                </div>

            </div>
        </div>
    </div>

</section>

<section class="">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 mt-5">
                <div class="text-center">
                    <h2>Please Add Consolations Below</h2>
                </div>
                @include('includes.success')
                <div class=" mt-4 mb-4">
                    <form method="POST" class="form-validate" id="" enctype="multipart/form-data" action="{{ route('picture.store') }}">
                        @if ($errors->any() )
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="text-center">
                            <p class=""> </p>
                            <!-- <a href="/login/facebook" class="btn btn-facebook btn-round">
                                        <i class="fab fa-facebook-f"></i> Sign up with Facebook 
                                    </a>  -->
                        </div>
                        <div class="row  no-gutters ">
                            @csrf
                            <p class="form-field-wrapper p-1 col-12">
                                <label for="first_name">Full name</label>
                                <input id="first_name" type="text" class="input--lg form-full" name="first_name" value="{{ old('first_name') }}" autofocus>
                                <input type="hidden" value="{{ $category->slug }}" class="input--lg form-full" name="type" autofocus>
                                <input type="hidden" value="consolation" class="input--lg form-full" name="post" autofocus>


                            </p>

                            <div class="clearfix"></div>


                            <p class="form-field-wrapper p-1 col-12">
                                <label for="Comments">Consolation</label>
                                <textarea id="Comments" class="input--lg form-full" placeholder="Please leave any messages about Oluremilekun Stella Abimbola" name="comments">Please leave any messages about Oluremilekun Stella Abimbola</textarea>
                            </p>
                            <div class="clearfix"></div>
                            <p class="form-field-wrapper col-6">
                                <button type="submit" class="btn btn--lg btn--primary ml-1 bold" name="register" value="Log in">Submit</button>
                            </p>
                            <p class="form-field-wrapper text-right lost_password  col-6">
                            </p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
<div class="clearfix"></div>
<section class="sec-padding">
    <div id="blog-entry" class="blog-entry blog-grid">
        <div class="container">
            <div class="row consolations-wrap justify-content-center">
                <div class="text-center col-md-12 ">
                    <h2> Consolations</h2>
                </div>
                @if( $uploads->count())
                @foreach( $uploads as $upload)
                <!--Item-->
                <div class=" col-lg-6  consolations">
                    <!--Blog Item-->
                    <div class="blog-item border bg--gray">
                        <div class="blog-item-content">

                            <div class="blog-description-content ">
                                <p>
                                <p><?php echo  html_entity_decode($upload->comments);  ?></p>

                                </p>
                            </div>
                            <div class="text-right">
                                <p>
                                    {{ Ucfirst($upload->name) }} {{ Ucfirst($upload->last_name) }}
                                </p>
                            </div>

                        </div>
                    </div>
                    <!--End Blog Item-->
                </div>

                @endforeach
                @else
                <h1></h1>
                @endif


                <!--Item-->

            </div>
        </div>
    </div>
</section>