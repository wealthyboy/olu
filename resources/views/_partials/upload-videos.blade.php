<section class="sec-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8  bg--light">
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
                                <h3>Upload Mrs Abimbola's Videos</h3>
                                <p class=""> </p>
                                    <!-- <a href="/login/facebook" class="btn btn-facebook btn-round">
                                        <i class="fab fa-facebook-f"></i> Sign up with Facebook 
                                    </a>  -->
                                </div>
                            <div class="row  no-gutters ">
                                @csrf
                                <p class="form-field-wrapper p-1 col-6">
                                    <label for="first_name">First Name</label>
                                    <input id="first_name" type="text" class="input--lg form-full" name="first_name" value="{{ old('first_name') }}" required autofocus>
                                </p>
                                <p class="form-field-wrapper p-1 col-6">
                                    <label for="last_name">Last Name</label>
                                    <input id="last_name" type="text" class="input--lg form-full" name="last_name" value="{{ old('last_name') }}" required autofocus>
                                </p>
                                <div class="clearfix"></div>

                                <p class="form-field-wrapper p-1 col-12">
                                    <label for="email">Email address</label>
                                    <input id="email" type="email" class="input--lg form-full" name="email" value="{{ old('email') }}" required autofocus>
                                    <input  type="hidden" value="{{ 'videos' }}" class="input--lg form-full" name="type"   autofocus>
                                    <input  type="hidden" value="video" class="input--lg form-full" name="post"   autofocus>

                                </p>
                              
                                <div class="clearfix"></div>
                                <p class="form-field-wrapper p-1 col-12 ">
                                    <label for="Comments">Upload Videos</label>
                                    <div class="dropzone col-12 mb-4" id="my-video-dropzone"></div>
                                </div>

                             
                                <p class="form-field-wrapper p-1 col-12">
                                    <label for="Comments">Comments</label>
                                    <textarea id="Comment" class="input--lg form-full" placeholder="Please indicate title and year of event" name="comments"></textarea>   
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