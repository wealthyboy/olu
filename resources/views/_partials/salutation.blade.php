<section class="sec-padding">
    <div id="blog-entry" class="blog-entry blog-grid">
        <div class="container">
            <div class="row">

                <div class="col-md-8 col-lg-8">
                    <div class="row">
                        @if( $uploads->count())
                        @foreach( $uploads as $upload)
                         <!--Item-->
                        <div class="col-md-6 col-lg-6">
                            <!--Blog Item-->
                            <div class="blog-item border bg--gray">
                                <div class="blog-item-content">
                                
                                    <div class="blog-description-content ">
                                        <p>
                                            {{ $upload->comments }}
                                        </p>
                                    </div>
                                    <div class="text-right">
                                        <p>
                                            {{ Ucfirst($upload->name) }}  {{ Ucfirst($upload->last_name) }}
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <!--End Blog Item-->
                        </div>

                        @endforeach

                        @else
                            <h1>No Salutations Yet</h1>
                        @endif



                    </div>
                </div>

                <!--Item-->
                <div class="col-md-4 col-lg-4">
                @include('includes.success')

                    <div class=" mt-4 mb-4">
                        <form method="POST"  class="form-validate" id="" enctype="multipart/form-data" action="{{ route('picture.store') }}">
                            @if ($errors->any() )
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all()  as $error)
                                           <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="text-center">
                                <h3></h3>
                                <p class=""> </p>
                                    <!-- <a href="/login/facebook" class="btn btn-facebook btn-round">
                                        <i class="fab fa-facebook-f"></i> Sign up with Facebook 
                                    </a>  -->
                                </div>
                            <div class="row  no-gutters ">
                                @csrf
                                <p class="form-field-wrapper p-1 col-12">
                                    <label for="first_name">Full name</label>
                                    <input id="first_name" type="text" class="input--lg form-full" name="first_name" value="{{ old('first_name') }}"  autofocus>
                                </p>
                                
                              
                                <div class="clearfix"></div>

                                <p class="form-field-wrapper p-1 col-12">
                                    <label for="email">Email address</label>
                                    <input id="email" type="email" class="input--lg form-full" name="email" value="{{ old('email') }}"  autofocus>
                                    <input  type="hidden" value="{{ $category->slug }}" class="input--lg form-full" name="type"   autofocus>
                                </p>
                              
                                <div class="clearfix"></div>
                                <p class="form-field-wrapper p-1 col-12">
                                    <label for="relationship">Relationship</label>
                                    <select name="relationship" class="product-select-size input--lg form-full">
                                        <option value="professional">Professional</option>
                                        <option value="personal">Personal</option>
                                    </select>
                                </p>
                                <p class="form-field-wrapper p-1 col-12">
                                    <label for="Comments">Salutation</label>
                                    <textarea id="Comments" class="input--lg form-full" name="comments"></textarea>   
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
    </div>
</section>