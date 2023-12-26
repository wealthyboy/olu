@extends('layouts.checkout')
 
@section('content')
  <checkout-index  :csrf="{{ $csrf }}" />
@endsection



