<header>
    <div class="branding"> <img src="/roux_academy/images/ralogo_monogram.png" alt="Logo">
      <p>Roux Academy<br>
        Art • Media • Design</p>
    </div>
    <div class="description">
      <h1>Roux Academy 2016 Art Conference</h1>
      <p>Join over 500 hundred of the most creative and brilliant minds of art colleges all around the world for five days of lectures by world-renowned art scholars and artists, and seven days and nights of gallery exhibits featuring the best in contemporary art, including painting, sculpture, and more, in the beautiful halls of Hotel Contempo in the heart of Seattle.</p>
    </div>
    <nav>
      <ol>
        <li><a href="/roux_academy/index.php">HOME</a></li>
        <li><a href="/roux_academy/artists.php">ARTISTS</a></li>
        <li><a href="/roux_academy/schedule/index.php">SCHEDULE</a></li>
        <li><a href="/roux_academy/venue.php">VENUE/TRAVEL</a></li>
        <li><a href="/roux_academy/register/index.php">REGISTER</a></li>
        <?php
          session_start();
          if(isset($_SESSION['user'])){
            echo '<li><a href="/roux_academy/asistants.php">VIEW RECORDS</a></li>';
            echo '<li><a href="/roux_academy/close_session.php">LOGOUT: ' . $_SESSION["user"] .'</a></li>';
            //echo '<li>Current user:'. $_SESSION["user"] . '</li>';
          }else{
            echo '<li><a href="/roux_academy/login.php">LOGIN</a></li>';
          }
        ?>
      </ol>
    </nav>
  </header>