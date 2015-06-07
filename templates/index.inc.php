      <div class="row">
        <div class="col-xs-12">
          <h1>Schlocktoberfest <small>The best worst movie film festival</small></h1>
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-6">
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          
          <p><?php 

            $launch = new DateTime("2015-10-31T19:30:00+12:00");
            $now = new DateTime();

            echo $launch->format("g:ia M jS Y");
            echo " - "; 

            $interval = $now->diff($launch);

            echo $interval->format('%m months, %d days, %h hours, %i minutes, %s seconds');

            // 7:30pm Oct 31st 2015

          ?></p>
          <button class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-film" aria-hidden="true"></span> Film Programme</button>
          <button class="btn btn-success btn-lg"><span class="glyphicon glyphicon-sunglasses" aria-hidden="true"></span> Book Tickets Now (coming soon!)</button>
        </div>
        <div class="col-sm-6 hidden-xs">
          <img class="img-responsive" src="https://placekitten.com/700/400" alt="">
        </div>
      </div>

      <div class="row">
        <div class="col-sm-4">
          <h3 class="text-center">Best Worst Movie (2009)</h3>
          <p>This documentary reviews the making of the film "Troll 2" from the perspective of its former child actor star, Michael Stephenson.</p>
        </div>
        <div class="col-sm-4">

          <form id="moviesuggest" action="./?page=moviesuggest" method="POST" class="form-horizontal">
            
            <h3 class="text-center">Suggest a Movie</h3>           

            <div class="form-group input-lg <?php if ($errors['title']): ?> has-error <?php endif; ?>">
              <label for="movietitle" class="col-sm-4 control-label">Movie Title</label>
              <div class="col-sm-8">
                <input id="movietitle" class="form-control input-lg" name="title" 
                  placeholder="Troll 2 (1990)"
                  value="<?php echo $title; ?>">
                <div class="help-block"><?php echo $errors['title']; ?></div>
              </div>
            </div>
            <div class="form-group input-sm <?php if ($errors['email']): ?> has-error <?php endif; ?>">
              <label for="email" class="col-sm-4 control-label">Email Address</label>
              <div class="col-sm-8">
                <input id="email" class="form-control input-sm" name="email" type="email"
                  placeholder="joshua@nilbog.org"
                  value="<?php echo $email; ?>">
                <div class="help-block"><?php echo $errors['email']; ?></div>
              </div>
            </div>
            <div class="form-group">
               <div class="col-sm-offset-4 col-sm-8">
                <div class="checkbox">
                  <label>
                    <input id="newsletter" name="newsletter" type="checkbox" 
                      <?php if ($newsletter): ?> checked <?php endif; ?>
                      value="yes">
                    Sign up for Schlocktoberfest Newsletter
                    <small>once a month, promise</small>
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-4 col-sm-8">
                <button class="btn btn-primary">Suggest Movie</button>
              </div>
            </div>
          </form>

        </div>
        <div class="col-sm-4">
          <h3 class="text-center">Our Sponsors</h3>
          <p>Lorem ipsum dolor sit amet, ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
        </div>
      </div>
