@extends("layouts.app")
@section("content")
    <div class="container">

         @if(session('info'))
      <div class="alert alert-info">
           {{ session('info') }}
      </div>
      @endif
       
       <table class="table table-hover table-condensed ">
        <thead>
            <tr>
                <th style= "width:50%" >Product</th>
                <th style= "width:10%" >Price</th>
                 <th style= "width:8%" >ID</th> 
                <th style= "width:22%" >Subtotal</th>
                <th style= "width:10%" ></th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>
                    <div class="row">
                        <div class="col-sm-3 hidden-xs">
                            <img src="{{asset('img')}}/{{$product->image}}" alt="width:100"; height="100" class="img-responsive">
                        </div>
                        <div class="col-sm-9 ">
                            <h4 class=" text-center mt-4">{{$product->product_name}}</h4>
                        </div>
                    </div>
                </td>
                <td><h6 class="mt-4">${{$product->price}}</h6></td>
               <td>
                <input type="number" value="{{$product['id']}}" class="form-control quantity cart_update mt-3 text-center" min="1">

               </td>
                <td data-th="Suttotal" class="text-right"> <h5   class="text-center mt-4">${{$product['price']}}</h5> </td>
                <td>
                    <button class="btn btn-danger btn-sm cart_remove mt-4">
                        <a href="{{ url("/products/delete/$product->id") }}" class="nav-link">Delete</a>
                     </button>
                </td>
            </tr>
        </tbody>

        <tfoot class="text-right">
            <tr>
                <td colspan="5" class="text-center "><h3>
                  

                    <strong>Total ${{$product['price']}}</strong>
                    </h3></td>
            </tr>
            <tr>
                <td colspan="5" class="text-center">
                    <a href="{{url('/products')}}" class="btn btn-danger">
                    <i class="fa fa-arrow-left"></i>Continue Shopping</a>
                    {{-- <button class="btn btn-success"><i class="fa fa-money"></i>CheckOut</button> --}}
                    <a href="{{url("/products/add")}}" class="btn btn-success">Add</a>
                </td>
            </tr>
        </tfoot>
       </table>
    </div>
    <br><br>

    <div class="container " id="item">
        <ul class="list-group text-center" >
              {{-- Category: <b>{{ $category->name }}</b>  --}}
            <li class="list-group-item " id="list">
            <b>Comments ({{ count($product->comments) }})</b>
            </li>
            @foreach($product->comments as $comment)
            <li class="list-group-item">
                 {{ $comment->content }}
            </li>
            @endforeach
            </ul>

            <form action="{{url('/comments/add')}}" method="post">
                @csrf
                <input type="hidden" name="product_id"
                value="{{ $product->id }}">
                <textarea name="content" class="form-control mb-2" 
                placeholder="New Comment"></textarea>
                <input type="submit" value="Add Comment"
                class="btn btn-secondary">
               
            </form>
    </div>
@endsection