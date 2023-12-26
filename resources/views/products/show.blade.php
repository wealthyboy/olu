@extends('layouts.app')
@section('content')
  <!--Intro-->
<!--Label Bar-->
<section class="label-bar bg--primary text-gold section-dark text-center">
    <div class="container">
        <p class="offer-hignlight">
            <span><a href="#"><i class="fa fa-truck"></i> International shipping</a></span>
        </p>
    </div>
</section>
<!--End Label Bar-->
    <!--End Intro -->

<!--Page Body Content -->
       
      <!--Product Content-->
        <section class="sec-padding--xs">
            <!-- Product -->
            <div class="container product-gallery-style2 ">
                <nav class="text-left text-center-sm mb-4" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-2  text-uppercase">
                        <li class="breadcrumb-item bold"><a href="/"><small>Home</small></a></li>
                        <li class="breadcrumb-item bold"><a href="/products/{{ $category->slug }}"><small>{{ title_case($category->name) }}</small></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><small>{{ $product->product_name }}</small></li>
                    </ol>
                </nav> 
            </div>
            <product-show :attributes="{{ $attributes }}"   :product="{{ $product }}" />
        </section>
        @if ( $product->related_products->count() )

            <!-- End Product -->
            <section class="bg--gray pt-3 pb-5 ">
        
                <!--End Product Tabs-->
                <!--Related Product-->
                <div class="container">
                    <div class="page-head mt-4">
                        <h2 class="page-title text-uppercase heading-hr-margin">Related Products</h2>
                    </div>
                    <div class="product-item-4 owl-carousel owl-theme product-slider">
                    <!--Item-->
                    @foreach( $related_products as $related_product)
                        <div class="item">
                        <div class="product-item  bg--light">
                            <!--Product Img-->
                                <div class="product-item-img no-height">
                                    <!--Image-->
                                    <a href="{{ $related_product->product->link }}" class="product-item-img-link carousel">
                                        <img  class="carousel"src="{{ optional($related_product->product)->image }}" alt="Buy {{ optional($related_product->product)->product_name }}" />
                                    </a>
                                    <!--Add to Link-->
                                    <!-- <div class="add-to-link">
                                        <a class="btn btn--primary btn--sm">Add To Cart</a>
                                    </div> -->
                                    <!--Hover Icons-->
                                </div>
                                <!--Product Content-->
                                <div class="product-item-content">
                                    <div class="tag"><a href="{{ $related_product->product->link }}">{{ optional($related_product->product)->brand->name ?? '' }}</a></div>
                                    <a href="{{ $related_product->product->link }}" class="product-item-title"><span>{{ optional($related_product->product)->product_name }}</span></a>
                                    <p class="product-item-price">
                                        <span class="product-price-amount">
                                            @if ($related_product->product->discount_price )
                                                <del>
                                                    <span class="product-price-currency-symbol">
                                                        {{ optional($related_product->product)->currency }}{{ number_format(optional($related_product->product)->converted_price)  }}
                                                    </span>
                                                </del>
                                                <ins>
                                                    <span class="product-price-currency-symbol">{{ optional($related_product->product)->currency }}{{ number_format(optional($related_product->product)->discount_price) }}</span>
                                                </ins> 
                                            @else
                                                <ins>
                                                    <span class="product-price-currency-symbol">{{ optional($related_product->product)->currency }}{{ number_format(optional($related_product->product)->converted_price) }}</span>
                                                </ins>
                                            @endif
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- Item-->
                    </div>

                    </div>
                <!--End Related Product-->
            </section>

        @endif

        <!--End Product Content-->
<!--End Page Body Content -->
@endsection


@section('inline-scripts')
   


@stop




