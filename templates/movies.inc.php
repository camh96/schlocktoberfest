<div class="row">
       <div class="col-xs-12">
         
         <h1>Movies</h1>
         <?php if (static::$auth->isAdmin()): ?>
                  <p>
            <a href="./?page=movie.create" class="btn btn-default">
              <span class="glyphicon glyphicon-plus"></span> Add Movie
            </a>
          </p>
        <?php endif ?>
             <ol>
             <?php foreach($movies as $movie): ?>
                <li><a href="./?page=movie&amp;id=<?= $movie->id ?>">
                <?= $movie->title; ?> (<?= $movie->year; ?>)
                </a></li>
              <?php endforeach; ?>
          </ol>

