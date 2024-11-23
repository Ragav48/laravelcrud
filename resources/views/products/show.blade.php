@extends('layouts.app')
@section('main')

<h5> <i class="bi bi-pencil-square" > Product Details</i> </h5>
<nav class="my-3">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item active"> product Details</li>
    </ol>
  </nav>

  <div class="card">
    <img src="/products/{{$product->image}}" alt="{{$product->name}}" class="card-img-top">
    <div class="card-body">
        <h5 class = "card-title">{{$product->name}}</h5>
        <p class="card-text">
          {{$product->description}}            
        </p>
        <p class="fw-bold">{{$product->mrp}}<small class=" text-danger text-decoration-line-through"> Rs:35000</small> </p>
        <p class="fw-bold">{{$product->price}}<small class=" text-success text-decoration-line-through"> Rs:33000</small>

    </div>
  </div>

@endsection