@extends('layouts.app')
 
@section('content')
  
   <!--Content-->
    <section class="pb-4 mt-1">                
        <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/products">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
            </ol>
        </nav> 
        <favorite-index  />
        
         
        </div>
    </section>
    <!--End Content-->
@endsection



