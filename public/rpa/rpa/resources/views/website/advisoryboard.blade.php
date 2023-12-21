@extends('website.layouts.app')
@section('title')
    About
@endsection
@section('header')
    @include('website.layouts.header')
@endsection
@section('content')
    @include('website.style')

<style type="text/css">
    #more  {display:  none;}
</style>
    <div class="row text-center justify-content-center" style="margin-top: 15px;">
            <div class="col-md-12">
                <h1 class=" text-uppercase text-primary">ADVISORY BOARD</h1>

            </div>
    </div>
    <div class="container my-5">
      <div class="card box-shadow-1 mb-2">
        <div class="card-body">
        <div class="row">

             @if($allAdvisoryBoardList)
             @foreach($allAdvisoryBoardList as $getallAdvisoryBoardList )
            <div class="col-md-12 mb-2">
             
             <div class="row no-gutters">
                <div class="col-md-3 courses-card-image">
                
                    <center>
                    <img src="<?php echo env('APP_URL');?>public/asset/AdvisoryBoard/Image/{{$getallAdvisoryBoardList->image}}" width="80" height="50" style="border-radius: 50%;">
                    <h5 class="card-title">{{$getallAdvisoryBoardList->name}}</h5>
                    <h5 class="card-title">{{$getallAdvisoryBoardList->designation}}</h5>
                    </center>
                
                </div>
                <div class="col-md-9">
                <div class="card box-shadow-1 mb-2">
                  <div class="card-body">
                    
                    <p class="card-text" style="text-align: justify;">
                    {{ str_limit($getallAdvisoryBoardList->content,100, '') }}
                     @if (strlen($getallAdvisoryBoardList->content) > 100)
                        <span id="dots_<?php echo $getallAdvisoryBoardList->id; ?>">...</span>
                        <span id="more_<?php echo $getallAdvisoryBoardList->id; ?>">{{ substr($getallAdvisoryBoardList->content, 100) }}</span>
                    @endif
                    <button class="btn btn-primary btn-sm" onclick="myFunction(<?php echo $getallAdvisoryBoardList->id; ?>)" id="myBtn_<?php echo $getallAdvisoryBoardList->id; ?>">Read more</button>
                    </p>
                  </div>
                </div>
            </div>
            </div>
        
            </div>
            <br>
            @endforeach
            @else
            <div class="alert alert-danger" role="alert" align="center">
              No ADVISORY BOARD Uploaded Yet !!
            </div>
            @endif
        </div>
    </div>
</div>
    </div>
 <script>
function myFunction(id) {
   // alert(id);
  var readMoreId='myBtn_'+id;
  var dotsId='dots_'+id;
  var moreId='more_'+id;
   
    var dots = document.getElementById(dotsId);
    var moreText = document.getElementById(moreId);
    var btnText = document.getElementById(readMoreId);

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
    }
}
</script>   
@endsection
@section('footer')
    @include('website.layouts.footer')
@endsection
