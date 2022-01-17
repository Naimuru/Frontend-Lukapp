@extends('master')
@section("content")
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->

  <div class="carousel-inner">
    <div class="item active">
      <img src="https://i.ibb.co/h9t1FP7/1-Title.jpg" alt="Chania">
      <div class="carousel-caption">
      </div>
    </div>

    <div class="item">
      <img src="https://i.ibb.co/mTRc9pj/2-Welcome.jpg" alt="Chicago">
      <div class="carousel-caption">
      </div>
    </div>

    <div class="item">
      <img src="https://i.ibb.co/wJpHpW9/3-Services.jpg" alt="New York">
      <div class="carousel-caption">
      </div>
    </div>

    <div class="item">
      <img src="https://i.ibb.co/VL5StHq/4-Services.jpg" alt="New York">
      <div class="carousel-caption">
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  
@endsection

<!-- <a href="https://ibb.co/pw9rjt0"><img src="https://i.ibb.co/h9t1FP7/1-Title.jpg" alt="1-Title" border="0"></a>
<a href="https://ibb.co/JtcsvZ1"><img src="https://i.ibb.co/mTRc9pj/2-Welcome.jpg" alt="2-Welcome" border="0"></a>
<a href="https://ibb.co/pW4D4zt"><img src="https://i.ibb.co/wJpHpW9/3-Services.jpg" alt="3-Services" border="0"></a>
<a href="https://ibb.co/6yLPmvW"><img src="https://i.ibb.co/VL5StHq/4-Services.jpg" alt="4-Services" border="0"></a> -->