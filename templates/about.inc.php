<?php 
$title = "About The Fest";
$page = "about"; 
include "master.inc.php"; 

function content() {
  ?>
      <div class="row">
        <div class="col-xs-12">
          <h1>Schlocktoberfest <small>The best worst movie film festival</small></h1>
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-6 hidden-xs">
          <img class="img-responsive" src="https://placekitten.com/700/400" alt="">
        </div>
        <div class="col-sm-6">
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          <p><?php echo date("c"); ?></p>
          <button class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-film" aria-hidden="true"></span> Film Programme</button>
          <button class="btn btn-success btn-lg"><span class="glyphicon glyphicon-sunglasses" aria-hidden="true"></span> Book Tickets Now (coming soon!)</button>
        </div>
      </div>
  <?php
}
