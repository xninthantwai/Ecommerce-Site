@extends("layouts.app")
@section("content")
 <div class="container">

     @if($errors->any())
        <div class="alert alert-warning">
            <ol>
                @foreach($errors->all() as $error)
                 <li>{{ $error }}</li>
                @endforeach
            </ol>
     </div>
 @endif
 
      
        <form method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12 form-group mb-3">
                <label for="name"> Product Name</label>
                <input type="text" name="product_name" id="name" class="form-control form-control-sm rounded-0" placeholder="Enter your Product"></input>
            </div>

            <div class="col-md-12 form-group mb-3">
                <label for="name">Price</label>
                <input type="text" name="price" id="number" class="form-control form-control-sm rounded-0" placeholder="Price"></input>
            </div>

            <div class="col-md-12 form-group mb-3">
                <label for="name">Product Description</label>
                <textarea name="product_description" id="message" cols="30" rows="3" placeholder="Enter Your Description" class="form-control form-control-sm rounded-0"></textarea>
            </div>

            
                <div class="mb-3">
                    <label for="photo">Choose image from storage</label>
                    <input type="file" name="image" id="photo" class="form-control">
                </div>
           

            <div >
                <button type="submit" class="btn rounded-0" style="background: rosybrown;">Submit</button>
            </div>
        </form>
    </div>
@endsection