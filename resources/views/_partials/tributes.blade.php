

<section class="text-center">
    <div class="container">
        <div class="row justify-content-center">
               <div class="col-lg-12 mt-5"> 
                   <div class="text-left">
                        <h1 class="h-name-life">BEAUTIFUL LIFE</h1>
                    </div>
                    <div class="text-left"> 
                    <p class="fa-12x">
                       Oluremilekun Stella Abimbola, nee Onibokun, passed on in the early hours of Sunday, 19th July 2020, which is befitting because she was a fervent Christian and Sunday was her favourite day. She was my dearest mother and the rock from which I took my leap. 
                    </p>
                    <p class="fa-12x">
                       What made her my rock were her teachings. It was what she loved to do, to train people. She caught and taught anyone who was weary enough to wander within her radar, very little could get past her. Teaching was her passion and she was fearless about it. She truly believed that when she was faced with a situation that she could make better and she did nothing, she had let herself down. 
                    </p>
                    <p class="fa-12x">
                    She believed in self-discipline and sticking to one’s word. Woes betide you if she ever caught you in a misrepresentation or omission. She was also a consummate diplomat and a world-class charmer. She could make you laugh out loud when you know you should be crying but she took you by surprise and you couldn’t help yourself. 
                    </p> 
                    <p class="fa-12x">
                    She did not believe in short-cuts or quick fixes. She would say to me your hands are tools, combine them with your mind and you can accomplish anything. She was a determined woman and she wanted to leave the world a better place than she found it. 

                    </p>

                    <p class="fa-12x">
                       Why did she love teaching so much? I believe it’s because it made her happy. She found it fulfilling and loved helping people achieve their potential. She did this by example, instruction, guidance, reprimand but most of all, with sincerity. It was a calling that she took seriously and she will be dearly missed for it. 
                    </p>
                    <p class="fa-12x">
                    I feel like my train has left the station. There are no other trains coming, she was the last one. She’s left behind solid tracks that anyone can follow but they can only lead to her essence and not her embrace. But, I am grateful for her life, her light, her love and her laws. They remind me that once your heart has been touched with sincerity, it will always guide you through the dark. 

                    </p>
                    <p class="fa-12x">
                    I can hear her now, her voice in my head, telling me that it’s late and I should be sleeping. I can finish this tomorrow. She was like that in life; she stayed with you, even after she was gone. 

                    </p>
                    <p class="fa-12x">
                    She was a beautiful woman and she led a beautiful life. 
                   </p>
                    

                    
                    <p class="fa-12x  font-weight-bold">Abolaji Abimbola</p>
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
                        <h2>Please Add Your Tributes Below</h2> 
                    </div> 
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
                                    <input  type="hidden" value="tribute" class="input--lg form-full" name="post"   autofocus>

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
                                    <label for="Comments">Tributes</label>
                                    <textarea id="Comments" class="input--lg form-full" placeholder="Please leave any messages about Oluremilekun Stella Abimbola" name="comments"></textarea>   
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
<section class="sec-padding">
    <div id="blog-entry" class="blog-entry blog-grid">
        <div class="container">
            <div class="row tributes-wrap">
                @if( $uploads->count())
                @foreach( $uploads as $upload)
                    <!--Item-->
                <div class="col-md-6 tributes col-lg-6">
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
                                    {{ Ucfirst($upload->name) }}  {{ Ucfirst($upload->last_name) }}
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