<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package understrap
 */
?>

<div class="_home-container">

    <div id="myCarousel" class="carousel slide _custom-carousel" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active _carousel-button"></li>
        <li data-target="#myCarousel" data-slide-to="1" class="_carousel-button"></li>
        <li data-target="#myCarousel" data-slide-to="2" class="_carousel-button"></li>
        <li data-target="#myCarousel" data-slide-to="3" class="_carousel-button"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="http://localhost/wp-content/uploads/2016/11/001-home.jpg" />
        </div>

        <div class="item">
          <img src="http://localhost/wp-content/uploads/2016/11/001-home.jpg" />
        </div>

        <div class="item">
          <img src="http://localhost/wp-content/uploads/2016/11/001-home.jpg" />
        </div>

        <div class="item">
          <img src="http://localhost/wp-content/uploads/2016/11/001-home.jpg" />
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

</div>
