@extends("layouts.app")
@section("content")

@if(session('info'))
<div class=" container alert alert-info">
     {{ session('info') }}
</div>
@endif

  {{-- First Section  --}}
    <div class=" first">

    
      <div class="banner d-flex justify-content-center align-items-center text-center">
        <div class="banner-body">
            <p class="text-dark">Perfume 100%</p>
            <h3 class="text-dark">Moments to Frangrance</h3>
            <p class="text-dark">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium quos voluptatem maxime fuga voluptates corporis quaerat .</p>
            <a href="#" class="btn button" style="background-color: #333; color: white;">SHOP PREVIEW</a>
        </div>
       </div>
       
    </div>
    {{-- End First Section  --}}

    {{-- Start Second Section  --}}
      <div class="container mt-5 mb-5 mx-5">
        <div class="row">
          <div class="col-md-6 text-center">
              <div class="row">
                <div class="col-md-6 mt-3">
                  <img src="{{asset('images/perfume11.jpeg')}}" alt="" width="250">
                </div>
                <div class="col-md-6 mt-5">
                  <img src="{{asset('images/perfume9.jpeg')}}" alt="" width="250">
                </div>
              </div>
          </div> 
          <div class="col-md-6 mt-5 ">
            <h5 style="color: #9cc3f0; font-size:30px">Explore <span style="color: black; font-size:20px">The Greatest Collection Of All Time</span></h5>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, deserunt excepturi! Expedita, repudiandae accusantium! Iusto odio explicabo, possimus cupiditate sunt autem temporibus dolore. Similique soluta blanditiis illum odit reprehenderit maxime.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae nesciunt esse excepturi quia cupiditate exercitationem est incidunt, aliquam ipsa ea, ipsam mollitia veritatis, maxime architecto iste nam voluptatem hic tempore?</p>
            <button class="explore">Explore Now !</button>
          </div>
        </div>
      </div>
    {{-- End Second Section  --}}

    {{-- Start Third Section  --}}
      <div class="container mt-5 " id="sale">
        <h3 style="color: #333; font-weight:700;" class="text-center">Most Popular Perfume Brands</h3>
       
        <br>
        <div class="row text-center ">
          @foreach ($products as $product)
            <div class="col-md-3 mt-3 pb-2">
              <div class="card p-3">
                <div>
                  <img src="{{asset('img')}}/{{$product->image}}" alt="">
                 
                </div>
                <div>
                  <h4 class="mt-2" style="color: rosybrown;">{{$product->product_name}}</h4>
                  <p>{{$product->product_description}}</p>
                  <p><strong>Price:</strong>${{$product->price}}</p>
                  <a class="buy mb-3"    href="{{url("/products/view/$product->id")}}">Buy Now</a>
                </div>
              </div>
             
            </div>
            
          @endforeach
        </div> <br> <br>
        <a href="{{asset('/products/add')}}" class="more">Buy more</a>
      </div>
    {{-- End Third Section  --}}

    

    {{-- Start Fourth Section  --}}
      <div class="container mt-5 post py-5">
          <h3 style="color: #333; font-weight:600;" class="text-center">All Arrival Products</h3> <br><br>
          <div class="d-flex justify-content-end">
            <select class="p-2" style="color: #333">
              <option value="">Default Fragrance</option>
              <option value="">Active</option>
              <option value="">CICA</option>
              <option value="">Aexo</option>
              <option value="">Roja</option>
            </select>
          </div> <br> <br>

          <div class="row text-center">
            <div class="col-md-4 mt-4">
              <div id="fod">
                <div class="fod-container">
                  <div class="img-container">
                    <img src="{{asset('images/perfume1.jpeg')}}" alt="" width="300">
                    <div class="img-content">
                      <h5>Fragrance</h5>
                      <a href="{{url('/products/add')}}">Add To Cart</a>
                      
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <div class="col-md-4 mt-4">
              <div id="fod">
                <div class="fod-container">
                  <div class="img-container">
                    <img src="{{asset('images/perfume2.jpeg')}}" alt="" width="300">
                    <div class="img-content">
                      <h5>Fragrance</h5>
                      <a href="{{url('products/add')}}">Add To Cart</a>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 mt-4">
              <div id="fod">
                <div class="fod-container">
                  <div class="img-container">
                    <img src="{{asset('images/perfume3.jpeg')}}" alt="" width="300">
                    <div class="img-content">
                      <h5>Fragrance</h5>
                      <a href="{{url('/products/add')}}">Add To Cart</a>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>

            {{-- <div class="row mt-3">
              
              </div> --}}

              <div class="col-md-4 mt-4">
                <div id="fod">
                  <div class="fod-container">
                    <div class="img-container">
                      <img src="{{asset('images/perfume4.jpeg')}}" alt="" width="300">
                      <div class="img-content">
                        <h5>Fragrance</h5>
                        <a href="{{url('/products/add')}}">Add To Cart</a>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 mt-4">
                <div id="fod">
                  <div class="fod-container">
                    <div class="img-container">
                      <img src="{{asset('images/perfume5.jpeg')}}" alt="" width="300">
                      <div class="img-content">
                        <h5>Fragrance</h5>
                        <a href="{{url('/products/add')}}">Add To Cart</a>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 mt-4">
                <div id="fod">
                  <div class="fod-container">
                    <div class="img-container">
                      <img src="{{asset('images/perfume6.jpeg')}}" alt="" width="300">
                      <div class="img-content">
                        <h5>Fragrance</h5>
                        <a href="{{url('/products/add')}}">Add To Cart</a>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 mt-4">
                <div id="fod">
                  <div class="fod-container">
                    <div class="img-container">
                      <img src="{{asset('images/perfume7.jpeg')}}" alt="" width="300">
                      <div class="img-content">
                        <h5>Fragrance</h5>
                        <a href="{{url('/products/add')}}">Add To Cart</a>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 mt-4">
                <div id="fod">
                  <div class="fod-container">
                    <div class="img-container">
                      <img src="{{asset('images/perfume8.jpeg')}}" alt="" width="300">
                      <div class="img-content">
                        <h5>Fragrance</h5>
                        <a href="{{url('/products/add')}}">Add To Cart</a>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 mt-4">
                <div id="fod">
                  <div class="fod-container">
                    <div class="img-container">
                      <img src="{{asset('images/perfume9.jpeg')}}" alt="" width="300">
                      <div class="img-content">
                        <h5>Fragrance</h5>
                        <a href="{{url('/products/add')}}">Add To Cart</a>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 mt-4">
                <div id="fod">
                  <div class="fod-container">
                    <div class="img-container">
                      <img src="{{asset('images/perfume10.jpeg')}}" alt="" width="300">
                      <div class="img-content">
                        <h5>Fragrance</h5>
                        <a href="{{url('/products/add')}}">Add To Cart</a>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 mt-4">
                <div id="fod">
                  <div class="fod-container">
                    <div class="img-container">
                      <img src="{{asset('images/perfume11.jpeg')}}" alt="" width="300">
                      <div class="img-content">
                        <h5>Fragrance</h5>
                        <a href="{{url('/products/add')}}">Add To Cart</a>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 mt-4">
                <div id="fod">
                  <div class="fod-container">
                    <div class="img-container">
                      <img src="{{asset('images/perfume12.jpeg')}}" alt="" width="300">
                      <div class="img-content">
                        <h5>Fragrance</h5>
                        <a href="{{url('/products/add')}}">Add To Cart</a>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 mt-4">
                <div id="fod">
                  <div class="fod-container">
                    <div class="img-container">
                      <img src="{{asset('images/perfume13.jpeg')}}" alt="" width="300">
                      <div class="img-content">
                        <h5>Fragrance</h5>
                        <a href="{{url('/products/add')}}">Add To Cart</a>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 mt-4">
                <div id="fod">
                  <div class="fod-container">
                    <div class="img-container">
                      <img src="{{asset('images/perfume14.jpeg')}}" alt="" width="300">
                      <div class="img-content">
                        <h5>Fragrance</h5>
                        <a href="{{url('/products/add')}}">Add To Cart</a>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            
          </div> <br>

          <div class=" container page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
          </div>
      </div>
    {{-- End Fourth Section  --}}

   
    {{-- Start Five Section  --}}
      <div class="mt-5 five">
        <div class="container">
          <h3 class="py-5 text-center text-dark" style="font-weight:600">TESTIMONIES</h3>
          <div class="owl-carousel owl-theme">
            <div class="item">
              <div class="cart p-3">
                <img src="{{asset('images/women1.jpg')}}" alt=""  style="width: 100px; height:100px" class="rounded-circle "><br>
                <p>“In love with these floral perfumes! The scents are balanced, not overpowering, and evoke a sense of serenity. I appreciate their commitment to sustainability too.”</p>
                <img src="{{asset('images/star1.svg')}}" alt="">
              </div>
            </div>
            <br>
            {{-- <div class="item"></div> --}}
            <div class="item">
              <div class="cart p-3">
                <img src="{{asset('images/women2.jpg')}}" alt=""  style="width: 100px; height:100px" class="rounded-circle "> <br>
                <p>“In love with these floral perfumes! The scents are balanced, not overpowering, and evoke a sense of serenity. I appreciate their commitment to sustainability too.”</p>
                <img src="{{asset('images/star1.svg')}}" alt="">
              </div>
            </div> 
            <div class="item"></div>
            <div class="item">
              <div class="cart p-3">
              <img src="{{asset('images/women3.jpg')}}" alt=""  style="width: 100px; height:100px" class="rounded-circle "> <br>
              <p>“These have become my go-to gift for my girlfriends birthdays. Great floral scents that are fit for everyone.”</p>
              <img src="{{asset('images/star1.svg')}}" alt="">
            </div></div>
            
            <div class="item"></div>
            <div class="item">
              <div class="cart p-3">
              <img src="{{asset('images/women4.jpg')}}" alt=""  style="width: 100px; height:100px" class="rounded-circle "> <br>
              <p>“In love with these floral perfumes! The scents are balanced, not overpowering, and evoke a sense of serenity. I appreciate their commitment to sustainability too.”</p>
              <img src="{{asset('images/star1.svg')}}" alt="">
            </div></div>
            
             <div class="item"></div>
            <div class="item">
              <div class="cart p-3">
                <img src="{{asset('images/women5.jpg')}}" alt=""  style="width: 100px; height:100px" class="rounded-circle "> <br>
                <p>“These have become my go-to gift for my girlfriends birthdays. Great floral scents that are fit for everyone.”</p>
                <img src="{{asset('images/star1.svg')}}" alt="">
              </div>
            </div>
            
            <div class="item"></div>
            <div class="item">
              <div class="cart p-3">
                <img src="{{asset('images/women6.jpg')}}" alt=""  style="width: 100px; height:100px" class="rounded-circle "> <br>
                <p>“These have become my go-to gift for my girlfriends birthdays. Great floral scents that are fit for everyone.”</p>
                <img src="{{asset('images/star1.svg')}}" alt="">
              </div>
            </div>
            
            <div class="item"></div> 
            <div class="item">
              <div class="cart text-center p-3">
                <img src="{{asset('images/women7.jpg')}}" alt="" style="width: 100px; height:100px" class="rounded-circle "> <br>
                <p>"I have tried four of the scents already and I love them all. Consistent quality amongst all of the perfumes I've tried from this brand."</p>
                <img src="{{asset('images/star1.svg')}}" alt="">
              </div>
            </div> 
            <div class="item"></div>
        </div>
       
        </div>
      </div>
      {{-- End Five Section  --}}

      {{-- Start Six Section  --}}
      <section class="p-5">
        <div class="container-fluid">
            <!-- start title -->
            <div class="col-md-12 text-center">
                <h2 class=" display-7 text-dark" style="font-weight:500">Contact</h2>
            </div> <br>
            <!-- end title -->

            <div class="row">

                <div class="col-lg-6 col-md-8  col-sm-10 mx-auto">
                    <div class="card">

                        <div class="card-header">
                            <h5 class="card-title">Office Location</h5>
                        </div>
                        <div class="card-body">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3817.9022798320184!2d96.09335557389606!3d16.8807278839226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c195bb344e0307%3A0x6897badd261111a0!2sYangon!5e0!3m2!1sen!2smm!4v1709822787870!5m2!1sen!2smm" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="maps"></iframe>
                        </div>
                        <div class="card-footer">
                            <p>Phone : 09978870095</p>
                            <p>Email : info@gmail.com</p>
                            <p>Address :no,123, Aung San St, Mandalay Myanmar</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-8 col-sm-10 mx-auto mb-3">
                    <div class="text-secondary text-center">
                        <h3>Got Question?</h3>
                        <p>Stay Connected</p>
                    </div>

                    <form action="" method="">

                        <div class="col-md-12 form-group mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control form-control-sm rounded-0" placeholder="Enter your Name">
                        </div>

                        <div class="col-md-12 form-group mb-3">
                            <label for="name">Email</label>
                            <input type="text" name="password" id="password" class="form-control form-control-sm rounded-0" placeholder="Enter your Email">
                        </div>

                        <div class="col-md-12 form-group mb-3">
                            <label for="name">Message</label>
                            <textarea name="message" id="message" cols="30" rows="3" placeholder="Enter Your Message" class="form-control form-control-sm rounded-0"></textarea>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn rounded-0" style="background:#333; color:white;">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
      {{-- End Six Section  --}}

      {{-- Start Footer Section  --}}
          <footer>
            <div class="container">
              <div class="row">
                <div class="col-md-3 mt-5">
                  <h5 class="text-light">Download Our App</h5>
                  <p class=" text-light">Download app for android and iso mobile phone!</p>
                  <img src="{{asset('images/play-store.png')}}" alt="" width="100">
                  <img src="{{asset('images/app-store.png')}}" alt="" width="100">

                </div>
                <div class="col-md-3 mt-5 text-light">
                  <h5>Ecommerce Site</h5>
                  <p>Our Purpose Is To Sustainably Make the Pleasure and Benefits of Sports Accessible to the Many.</p>
                </div>
                <div class="col-md-3 mt-5 text-light">
                  <h5>Useful Links</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum placeat, minus animi ipsum odio excepturi.</p>
                </div>
                <div class="col-md-3 mt-5 text-light">
                  <h5>Follow Us</h5>
                  <div class="text-light">
                    <img src="{{asset('images/home.svg')}}" alt="">
                    <img src="{{asset('images/heart.svg')}}" alt="">
                    <img src="{{asset('images/code.svg')}}" alt="">
                    <img src="{{asset('images/dot.svg')}}" alt="">
                  </div>
                </div>
              </div>
              
            </div>
            <hr>
            <div class="container-fluid">
              <div class="col-12 text-center">
                  <p class="text-white">&copy;Copyright  <span id="autoyear"></span> - Ahkara</p>
              </div>
               <!-- elfsight -->
        <div class="elfsight-app-480d6b72-d28f-44a2-9197-fb4a1a282848" data-elfsight-app-lazy></div>

          </footer>
      {{-- End Footer Section  --}}
@endsection