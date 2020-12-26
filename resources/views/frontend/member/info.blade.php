@extends('frontend.layouts.master')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body class="page-body">

        <script>          
function showPreview(event){
  if(event.target.files.length > 0){
    var src = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("image1");
    preview.src = src;
    preview.style.fontSize ="1px";
  }
}
</script>
  <main class="main-content">
    <!-- Start Content Area -->
    <section class="content-section">
      <div class="container">
         <form  action="{{URL::to('/info-member-store/'.Session::get('id'))}}" class="input-transparent" method="POST">
              @csrf
        <div class="row gutters-y">
          <div class="col-lg-7 text-light">
            <div class="mb-6">
              <h3>Contact Us</h3>
              <p class="lead-1">Morbi aliquet felis nec nisl congue interdum. Quisque vitae sapien ullamcorper.</p>
            </div>
           
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <input class="form-control form-control-lg" value="{{$info->name}}" type="text" name="name" placeholder="Your Name" required>
                  </div>
                  
                  <div class="form-group col-md-6">
                    <input class="form-control form-control-lg" value="{{$info->birthday}}" type="date" name="birthday" placeholder="Birthday" required>
                  </div>
                  
                </div>

                  <div class="form-row">
                  
                 <div class="form-group col-md-6">
                    <input class="form-control form-control-lg" value="{{$info->zip}}" type="text" name="zip" placeholder="Tax code" required>
                  </div>
                  
                  <div class="form-group col-md-6">
                    <input class="form-control form-control-lg" value="{{$info->mobile}}" type="text" name="mobile" placeholder="Phone Number" required>
                  </div>
                </div>

                <div class="form-group">
                  <input name="email" type="email" value="{{$info->email}}" class="form-control" placeholder="Email" required>
                </div>

                <div class="form-group">
                   <b>{{$info->ref}}</b>
                  <!-- <input readonly="" name="ref" type="text" value="{{$info->ref}}" class="form-control" placeholder="Ref" required> -->
                </div>

                <!-- <div class="form-group">
                  <textarea class="form-control form-control-lg" rows="4" placeholder="Your Message" name="message" required></textarea>
                </div>
 -->                <button class="btn btn-lg btn-warning" type="submit">Submit</button>
             
          </div>

          <div class="col-lg-5" >
            <div class="p-4 border border-secondary" data-overlay="9">
              <div class="p-relative">
                <div class="mb-7" >
            
        <div class="form-group row container">
          <div class="col-sm-6 ">
              @if($info->avatar)
                <img src="{{ URL::to('/public/avatar/'.$info->avatar)}}" style="height: 170px; width: 200px;" class="rounded-circle">
              @else
                <img style="height: 170px; width: 200px;" class="rounded-circle" id="image1";>
              @endif
                         
          </div>
      </div>  
                </div>
               
                <div class="container">
                  <h5 class="lead-2 fw-500 text-warning">Choose an image</h5>
                  <div class="social-buttons">
                    <input name="avatar" type="file"  onchange="showPreview(event);"/>
                </div>
              </div>
            </div>
            
          </div>
        </div>
     
      </div>
    </form>
    </div>





    </section>
    <!-- End Content Area -->

    <!-- Start Content Area -->
    
    <!-- End Content Area -->

  </main>

  <!-- offcanvas-cart -->

  <!-- /.offcanvas-cart -->
</body>
@stop