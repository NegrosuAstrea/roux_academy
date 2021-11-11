<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/roux_academy/css/style.css">
<title>Roux Conference: Register</title>
</head>
<body id="page_register">
<div class="wrapper">
  <?php
    require("../layout/header.php");
  ?>
  <div id="rotator"> <img src="/roux_academy/images/art01.jpg" alt="Artwork from show"> </div>
  <!-- Rotator -->
  <section id="main">
    <article>
      <h2>Register</h2>
      <p>To attend the Roux Academy 2016 Contemporary Art Conference, please complete the information below. </p>
    </article>
    <!-- About the event -->
    
    <article id="registrationform">
      <form method="POST" action="">
        <fieldset>
          <legend>Personal Info</legend>
          <ol>
            <li>
              <label for="myname">Name *</label>
              <input type="text" name="myname" id="myname" autofocus placeholder="Last, First" required>
            </li>
            <li>
              <label for="companyname">Company Name</label>
              <input type="text" name="companyname" id="companyname">
            </li>
            <li>
              <label for="myemail">Email *</label>
              <input type="email" name="myemail" id="myemail" required autocomplete="off">
            </li>
            <li>
              <div class="grouphead">Request Type</div>
              <ol>
                <li>
                  <input type="radio" name="requesttype" value="question" id="question">
                  <label for="question">Question</label>
                </li>
                <li>
                  <input type="radio" name="requesttype" value="comment" id="comment">
                  <label for="comment">Comment</label>
                </li>
              </ol>
            </li>
            <li>
              <label for="mycomments">Comment</label>
              <textarea name="mycomments" id="mycomments"></textarea>
            </li>
            <li class="singleline">
              <input type="checkbox" id="subscribe" name="subscribe" checked="" value="yes">
              <label for="subscribe">Subscribe to our mailing list?</label>
            </li>
            <li>
              <label for="reference">How did you hear about us?</label>
              <select name="reference" id="reference">
                <option>Choose...</option>
                <option value="friend">A friend</option>
                <option value="facebook">Facebook</option>
                <option value="twitter">Twitter</option>
              </select>
            </li>
          </ol>
          <input type="submit" name="register" value="Send">
        </fieldset>
      </form>
    </article>
  </section>
  <?php
        if(isset($_POST['register'])){
          require("../bd_connection.php");
          $name = $_POST['myname'];
          $company = $_POST['companyname'];
          $email = $_POST['myemail'];
          $comments = $_POST['mycomments'];

          //echo "xd" . $name;
          //echo "xd2" . $company;
          //echo "xd3" . $email;
          //echo "xd4 " . $comments;

          $query = "INSERT INTO asistants VALUES (null, '$name','$company','$email','$comments') ";
          $result = $conn->query($query);  
        }
  ?>


  <!-- maincontent -->
  
  <aside id="sidebar">
    <article id="artistlist">
      <h2>Featured Artists</h2>
      <p>Each year, nine individuals are honored as Featured Artists - each being granted his or her own exhibit hall to display entire collections or themed pieces. Each Featured Artist has an opportunity to speak at the conference to share his or her vision, perspective, and techniques with conference attendees.</p>
      <div class="pixgrid">
        <ul>
          <li><img src="/roux_academy/images/artists/Barot_Bellingham_tn.jpg" alt="Barot Bellingham"></li>
          <li><img src="/roux_academy/images/artists/Constance_Smith_tn.jpg" alt="Constance Smith"></li>
          <li><img src="/roux_academy/images/artists/Hassum_Harrod_tn.jpg" alt="Hassum Harrod"></li>
          <li><img src="/roux_academy/images/artists/Hillary_Goldwynn_tn.jpg" alt="Hillary Goldwynn"></li>
          <li><img src="/roux_academy/images/artists/Jennifer_Jerome_tn.jpg" alt="Jennifer Jerome"></li>
          <li><img src="/roux_academy/images/artists/Jonathan_Ferrar_tn.jpg" alt="Jonathan Ferrar"></li>
          <li><img src="/roux_academy/images/artists/LaVonne_LaRue_tn.jpg" alt="LaVonne LaRue"></li>
          <li><img src="/roux_academy/images/artists/Riley_Rewington_tn.jpg" alt="Riley Rewington"></li>
          <li><img src="/roux_academy/images/artists/Xhou_Ta_tn.jpg" alt="Xhou Ta"></li>
        </ul>
        <p><a class="link" href="/roux_academy/artists.php">Artist Info</a></p>
      </div>
    </article>
    <!-- Featured Artists -->    <!-- Coming to event --> 
  </aside>
  <!-- Sidebar -->
  <?php
    require("../layout/footer.php");
  ?>
</div>
</body>
</html>