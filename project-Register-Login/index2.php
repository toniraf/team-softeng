<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Team Null.">
  <meta name="keywords" content="dashboard, index, main">

  <title>Team Null.</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300" rel="stylesheet">
  <!-- Styles -->
  <link href="styles/core.min.css" rel="stylesheet">
  <link href="styles/basics.css" rel="stylesheet">
  <link href="styles/navbar.css" rel="stylesheet">
  <link href="styles/style.css" rel="stylesheet">
  <link href="styles/parallax.css" rel="stylesheet">
</head>
<body data-provide="pace">
  <!-- Preloader -->
  <div class="preloader">
    <div class="spinner-dots">
      <span class="dot1"></span>
      <span class="dot2"></span>
      <span class="dot3"></span>
    </div>
  </div>
  <section class="panel headersec" data-section-name="header">
    <header class="topbar topbar-expand-lg bb-1 border-secondary">
      <div class="topbar-left">
        <span class="topbar-btn topbar-menu-toggler"><i>&#9776;</i></span>
        <span class="topbar-brand"><img src="assets/img/logo.png" alt="logo-icon" style="height:45px;"></span>

        <div class="topbar-divider d-none d-xl-block"></div>

        <nav class="topbar-navigation">
          <ul class="menu">

            <li class="menu-item active">
              <a class="menu-link no-underline" href="#">
                <span class="pe-7s-home pe-lg pe-va"></span>
                <span class="title">Αρχική</span>
              </a>
            </li>

            <li class="menu-item">
              <a class="menu-link no-underline" href="#">
                <span class="pe-7s-albums pe-lg pe-va"></span>
                <span class="title">Κατηγορίες</span>
              </a>
            </li>

            <li class="menu-item">
              <a class="menu-link no-underline" href="#">
                <span class="pe-7s-help1 pe-lg pe-va"></span>
                <span class="title">Πως λειτουργεί;</span>
              </a>
            </li>
           <?php require_once 'core/init.php';
           if(Session::exists('home'))
            {
              echo '<p>' .Session::flash('home').'</p>';
            }


              $user = new User();

              if($user->isLoggedIn()) {
              ?>
              <li class="menu-item active">
                <a class="menu-link no-underline" href="#">
                  <span class="title">Hello,<?php $group=escape($user->data()->group);
                  if($group==1) {Redirect::to('index.php');} echo escape($user->data()->username); echo $group;
                  ?></span>
                </a>
              </li>


          </ul>
        </nav>
      </div>

      <div class="topbar-right">
        <a class="topbar-btn no-underline" href="#qv-global" data-toggle="quickview"><i class="pe-7s-more pe-lg"></i></a>
        <div class="topbar-divider d-none d-xl-block"></div>
        <ul class="topbar-btns">
          <li class="dropdown">
            <span class="topbar-btn" data-toggle="dropdown"><img class="avatar" src="assets/img/avatar/1.jpg" alt="..."></span>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item no-underline" href="paroxos1.php"}><i class="pe-7s-user pe-lg"></i> Προφίλ</a>
              <a class="dropdown-item no-underline" href="#"><i class="pe-7s-wallet pe-lg"></i> Πορτοφόλι</a>
              <div class="dropdown-divider no-underline"></div>
              <a class="dropdown-item no-underline" href="logout.php"><i class="pe-7s-power pe-lg"></i> Έξοδος</a>
            </div>
          </li>


          <!-- Notifications -->
          <li class="dropdown d-none d-md-block">
            <span class="topbar-btn has-new" data-toggle="dropdown"><i class="pe-7s-bell pe-lg"></i></span>
            <div class="dropdown-menu dropdown-menu-right">

              <div class="media-list media-list-hover media-list-divided media-sm">
                <a class="media media-new no-underline" href="#">
                  <span class="avatar bg-success"><i class="ti-user"></i></span>
                  <div class="media-body">
                    <p>Νέος πάροχος εγγράφτηκε</p>
                    <time datetime="2017-07-14 20:00">Μόλις τώρα</time>
                  </div>
                </a>

                <a class="media no-underline" href="#">
                  <span class="avatar bg-pale-success"><i class="ti-face-smile"></i></span>
                  <div class="media-body">
                    <p>Δημιουργίθηκε νέα εκδήλωση</p>
                    <time datetime="2017-07-14 20:00">πριν 24 λεπτά</time>
                  </div>
                </a>

                <a class="media no-underline" href="#">
                  <span class="avatar bg-primary"><i class="ti-money"></i></span>
                  <div class="media-body">
                    <p>Έγινε νέα πληρωμή</p>
                    <time datetime="2017-07-14 20:00">πριν 53 λεπτά</time>
                  </div>
                </a>
              </div>

              <div class="dropdown-footer">
                <div class="left">
                  <a href="#">Ανάγνωση όλων των ειδοποιήσεων</a>
                </div>

                <div class="right">
                  <a href="#" data-provide="tooltip" title="Μαρκάρισμα όλων ως διαβασμένα"><i class="fa fa-circle-o no-underline"></i></a>
                  <a href="#" data-provide="tooltip" title="Ενημέρωση"><i class="fa fa-repeat no-underline"></i></a>
                </div>
              </div>

              <?php
            } else {
                  echo '<p>You need to <a href="login.php">login</a> or <a href="register.php">register</a>';

             ?>
            </div>
          </li>
          <!-- END Notifications -->
        </ul>
           <button class="btn btn-outline btn-primary" data-provide="modaler" data-url="login.php" data-is-modal="true">Είσοδος</button>

         <?php } ?>


      </div>
    </header>
  </section>

  <!-- END Topbar -->
  <main>
    <section class="panel panel1" style="min-height: 100vh;" data-section-name="search">
      <div class="parallax">
        <div class="main-content center-v">
          <div class="center-h">
            <h1 class="header-title" style="color:white; width: 75vw; text-align: center;">
              <strong>Αναζήτηση</strong> Εκδηλώσεων
              <hr class="w-200px border-primary mb-30">
            </h1>
          </div>
          <div class="center-h">
            <div class="card card-shadowed rounded bb-1 border-primary" style="background-color: rgba(255, 255, 255,0.9); width: 75vw;">
              <form class="lookup no-icon lookup-huge rounded">
                <input class="searchfont no-border rounded" style="min-width: 60vw; max-width: 70vw;" type="text" placeholder="Αναζήτηση...">
                <button class="btn btn-w-xs btn-primary" style="min-width: 5vw; max-width: 15vw;" ><i class="ti-search fa-lg"></i></button>
              </form>
            </div>
          </div>
          <br><br>
          <div>
            <i class="ti-mouse fa-inverse fa-2x center-h"></i>
          </div>
        </div>
      </div>
    </section>


    <section class="panel panel2" style="min-height: 100vh;" data-section-name="account">
      <div class="header bb-1 border-secondary pt-50">
        <div class="header-info mt-3 mb-3 pb-0 pt-0">
          <h1 class="header-title mt-0 mb-0 pb-0 pt-0">
            Τι <strong>Προσφέρουμε</strong>;
            <hr class="w-160px border-primary mt-3 mb-1 pb-0 pt-0">
          </h1>
        </div>
      </div><!--/.header -->

      <div class="main-content center-h m-0 pt-0 pb-0">
        <div class="card-deck" style="width: 80vw;">
          <div class="card rounded shadow-1 hover-shadow-3 transition-5s bl-2 border-primary bg-pale-secondary">
            <h4 class="card-title bg-pale-primary" style="text-align: center;"> <span class="ti-user fa-lg fa-pull-left"></span> Για τον <strong>Χρήστη:</strong></h4>

            <div class="card-body" style="text-align: center;">
              <h2 class="fs-60 fw-500"><span class="price-dollar">€</span> 0</h2>
              <p class="center-h">κείμενο</p>
            </div>

            <footer class="card-footer" style="text-align: center;">
              <button class="btn btn-outline btn-primary" data-provide="modaler" data-url="register.php" data-is-modal="true">Εγγραφή</button>
            </footer>
          </div>

          <div class="card rounded shadow-1 hover-shadow-3 transition-5s br-2 border-primary bg-pale-secondary">
            <h4 class="card-title bg-pale-primary" style="text-align: center;"><span class="ti-briefcase fa-lg fa-pull-left"></span> Για τον <strong>Πάροχο:</strong></h4>

            <div class="card-body" style="text-align: center;">
              <h2 class="fs-60 fw-500"><span class="price-dollar">€</span> 0 <span class="price-interval">*</span></h2>
              <p>κείμενο</p>
            </div>

            <footer class="card-footer" style="text-align: center;">
              <button type="button" class="btn btn-outline btn-primary" data-provide="modaler" data-url="register2.php" data-is-modal="true">Εγγραφή</button>
            </footer>
          </div>
          <!--
          <div class="card rounded shadow-1 hover-shadow-3 transition-5s br-2 border-primary bg-pale-secondary">
          <h4 class="card-title center-h bg-pale-primary"><span class="ti-star fa-lg fa-pull-left"></span> Πακέτο <strong>Premium:</strong></h4>

          <div class="card-body" style="text-align: center;">
          <h2 class="fs-60 fw-500"><span class="price-dollar">€</span> 100 <span class="price-interval">/μήνα</span></h2>
          <p>κείμενο</p>
        </div>

        <footer class="card-footer" style="text-align: center;">
        <button type="button" class="btn btn-outline btn-primary" data-provide="modaler" data-url="pages/login.php" data-is-modal="true">Εγγραφή</button>
      </footer>
    </div>  -->
  </div>
</div>
</section>

<section class="panel footersec pt-50" data-section-name="footer">
  <div class="footersec">
    <footer class="site-footer pb-20">
      <div class="row gap-y">
        <div class="col-lg-7">
          <h5 class="fs-16 ls-1">Σχετικά με το Project</h5>
          <p>
            Στο πλαίσιο του μαθήματος "Τεχνολογία Λογισμικού", της σχολής Ηλεκτρολώγων Μηχανικών και Μηχανικών Υπολογιστών, του Εθνικού Μετσόβιου Πολυτεχνείου, αναπτύχθηκε αυτή η πλατφόρμα.
          </p>
          <p>
            Αυτή η διαδικτυακή πλατφόρμα βοηθάει τους γονείς να επιλέξουν δραστηριότητες για τα παιδιά τους. Η πλατφόρμα μας απευθύνεται σε γονείς και τους παρέχει μια εύκολη, γρήγορη και ασφαλή δυνατότητα να αναζητούν, να ενημερώνονται σχετικά με προσφερόμενες υπηρεσίες για τα παιδιά τους καθώς και να αγοράζουν εισιτήρια συμμετοχής σε αυτές. Αυτό γίνεται μέσα από ένα αποτελεσματικό και γρήγορο μηχανισμό ο οποίος παρέχει σύνθετη αναζήτηση με πληθώρα κριτηρίων. Επιπλέον, η πλατφόρμα μας απευθύνεται και σε παρόχους δραστηριοτήτων, οι οποίοι αναζητούν πελάτες για να πουλήσουν τις υπηρεσίες τους. Με αυτό τον τρόπο καλύπτουμε ανάγκες προώθησης και πώλησης των υπηρεσιών τους ενώ ταυτόχρονα βοηθάμε τους γονείς να επιλέξουν τις ιδανικές δραστηριότητες για τα παιδιά τους.
          </p>
        </div>

        <div class="col-9 col-md-9 col-lg-2 text-left1 text-lg-center1">
          <h5 class="fs-16 ls-1">Team Null.</h5>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="#">Σχετικά με την εργασία</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Πως λειτουργεί;</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Όροι Χρήσης</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Πολιτική Προσωπικών Δεδομένων</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Επικοινωνία μαζί μας</a>
            </li>
          </ul>
        </div>

        <div class="col-md-6 col-lg-3 text-left1 text-lg-center1">
          <h5 class="fs-16 ls-1">Newsletter</h5>
          <p><strong>Εγγραφή</strong> στο newsletter μας:</p>
          <br>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Διεύθυνση email...">
          </div>
          <button class="btn btn-primary btn-block" type="button"><i class="fa fa-paper-plane"></i> Εγγραφή</button>
        </div>

      </div>
      <hr />
      <div class="row">
        <div class="col-md-12 center-h">
          <p>Copyright © 2018 <strong>Τζιρής Νικόλαος</strong>, <strong>Τσίκο Δήμητρα</strong>, <strong>Ησαΐας Βρακίδης</strong>, <strong>Κατάρα Αντωνία-Ραφαέλα</strong>, <strong>Κατσαρός Περικλής</strong>, <strong>Καρανικόλα Ελένη</strong>. All rights reserved.</p>
        </div>
      </div>
    </footer>
  </div>
</section>
</main>


<!-- Global quickview -->
<div id="qv-global" class="quickview" data-url="pages/adv_search.php">
  <div class="spinner-linear">
    <div class="line"></div>
  </div>
</div>

<!-- END Global quickview -->

<!-- Scripts -->
<script src="assets/js/core.min.js"></script>
<script src="assets/js/app.js"></script>
<script src="assets/js/script.js"></script>
<script type="text/javascript" src="assets/js/jquery.scrollify.js"></script>

</body>

</html>
