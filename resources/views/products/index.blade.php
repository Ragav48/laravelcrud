@extends('layouts.app')
@section('main')
<div class="d-flex justify-content-between">
    <h5><i class="bi bi-journal-richtext"> </i> Product Details</h5>
    <a href="products/create" class="btn btn-primary"
      ><i class="bi bi-plus-circle"> </i>New product</a
    >
  </div>
  <div class="col-md-12 table-responsive mt-3">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>S.No</th>
          <th>Image</th>
          <th>Name</th>
          <th>M.R.P</th>
          <th>Selling price</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
@foreach ($products as $product)
    
        <tr>
          <td>{{$loop->iteration}}</td>
          <td><img src="products/{{$product->image}}" style= "width:50px; height:50px; object-fit:contain" alt="product" /></td>
          <td><a href="products/{{$product->id }}/show">{{$product->name}}</a></td>
          <td>Rs.{{$product->mrp}}</td>
          <td>Rs.{{$product->price}}</td>
          <td>
            <a href="products/{{$product->id }}/edit" class="btn btn-dark btn-sm"
              ><i class="bi bi-pencil-square"></i
            ></a>
            <a href="products/{{$product->id }}/delete"  
              onclick="return confirm('Are you want to delete')"
              class="btn btn-danger btn-sm"
              ><i class="bi bi-trash"></i
            ></a>
          </td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>

@endsection