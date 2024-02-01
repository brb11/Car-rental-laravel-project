


<!--Header-->

@include('include.header')<!-- /Header -->

<!--Listing-Image-Slider-->

@foreach($details_data as $result)


<section id="listing_img_slider">
  <div><img src="/storage/admin/img/vehicleimages/{{ $result->img1 }}" class="img-responsive" alt="image1" width="900" height="560"></div>
  <div><img src="/storage/admin/img/vehicleimages/{{ $result->img2 }}" class="img-responsive" alt="image2" width="900" height="560"></div>
  <div><img src="/storage/admin/img/vehicleimages/{{ $result->img3 }}" class="img-responsive" alt="image3" width="900" height="560"></div>
  <div><img src="/storage/admin/img/vehicleimages/{{ $result->img4 }}" class="img-responsive"  alt="image4" width="900" height="560"></div>
  <div><img src="/storage/admin/img/vehicleimages/{{ $result->img5 }}" class="img-responsive"  alt="image5" width="900" height="560"></div>
</section>
<!--/Listing-Image-Slider-->


<!--Listing-detail-->
<section class="listing-detail">
  <div class="container">
    <div class="listing_detail_head row">
      <div class="col-md-9">
        <h2>{{ $result->bra_name }} , {{ $result->name }}</h2>
      </div>
      <div class="col-md-3">
        <div class="price_info">
          <p>₹{{ $result->price }}$ </p>

        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-9">
        <div class="main_features">
          <ul>

            <li> <i class="fa fa-calendar" aria-hidden="true"></i>
              <h5>{{ $result->model_year }}</h5>
            </li>
          </ul>
        </div>
        <div class="listing_more_info">
          <div class="listing_detail_wrap">
        </div>
        </div>
        @endforeach
      </div>
    </div>

</section>
      <!--Side-Bar-->
      <aside class="col-md-3">

        <div class="share_vehicle">
          <p>Share: <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a> </p>
        </div>

        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-envelope" aria-hidden="true"></i>Book Now</h5>
        </div>
        <form method="post" action="{{ route('BookingInsert', ['vid' => $vid]) }}">
        @csrf
        @method('POST')
        <input type="hidden" name="vid" value="{{ $vid }}">
        <div class="form-group">
            <textarea rows="4" class="form-control" name="message" placeholder="Message" required></textarea>
        </div>

        <h5><i class=""></i>Select Type Of Payment:</h5>
        <br>
        <div class="col-sm-4">
            <select class="selectpicker" name="TypePayment" required>
                <option value="">Select</option>
                <option value="Korimi">Korimi</option>
                <option value="Kridit Kard">Kridit Kard</option>
                <option value="Yemen Koait Bank">Yemen Koait Bank</option>
                <option value="Cach">Cach</option>
            </select>
        </div>
        @if(session('success_message'))
        <script>alert('{{ session('success_message') }}');</script>

    @endif


<br><br><br><br>
@if (auth()->check())
<div class="form-group">
    <input type="submit" class="btn"  name="submit" value="Book Now">

</div>

@else
<div class="form-group">
    <a href="{{ route('login') }}" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login For Book</a>

</div>
@endif


</form>
</div>
</aside>
      <!--/Side-Bar-->

    <div class="space-20"></div>
    <div class="divider"></div>

    <!--Similar-Cars-->
    <div class="similar_cars">
      <h3>Similar Cars</h3>
      <div class="row">

@foreach($details_data as $result)

        <div class="col-md-3 grid_listing">
          <div class="product-listing-m gray-bg">
            <div class="product-listing-img"> <a href="{{ route('Vdetails',['vid' => $result->id]) }}"> <img src="/storage/admin/img/vehicleimages/{{$result->img1}}" class="img-responsive" alt="image" /> </a>
            </div>
            <div class="product-listing-content">
              <h5><a ref="{{ route('Vdetails',['vid' => $result->id]) }}">{{ $result->bra_name }} , {{ $result->name }}</a></h5>
              <p class="list-price">${{ $result->price }}</p>
            </div>
          </div>
        </div>
@endforeach

      </div>
    </div>
    <!--/Similar-Cars-->

  </div>
</section>
<!--/Listing-detail-->

<!--Footer -->
@include('include.footer')<!-- /Footer-->





</body>
</html>
