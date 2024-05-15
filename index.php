</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Watch shop | eCommers</title>
<link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">  <!-- font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- bootstrap -->
  <link rel="stylesheet" href="./src/bootstrap.min.css">
  <link rel="stylesheet" href="./src/style.css">
</head>

<body>
  <header class="position-fixed w-100 z-2">
    <nav class="navbar navbar-expand-md navbar-light bg-light z-2">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="./img/logo/logo.png" alt="">
        </a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Products</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#>Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./form.php"">dashboard</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <section class="hero-sec ">
      <div class="container d-flex h-100 align-items-center">
        <div class="text col-8 ">
          <h1 class="">
            Select Your New
            Perfect Style
          </h1>
          <p>
            Ut enim ad minim veniam, quis nostrud exercitation ullamcc laboris nisi ut aliquip ex
            ea commodo cansequat is aute irure.
          </p>
          <button class="btn"> SHOP NOW</button>
        </div>
        <div class="hero col-4">
        </div>
      </div>
    </section>
    <section class="new-Products container">
      <h3 class="head justify-content-between w-100">New Products
      </h3>
      <div class="cards row text-center">
        <div class="card col-lg-4 col-md-4 col-sm-6 col-12">
          <img src="./img/gallery/new_product1.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-title h6"> Daniel Wellington.</p>
            <p class="card-text">50.00$</p>
          </div>
        </div>
        <div class="card col-lg-4 col-md-4 col-sm-6 col-12">
          <img src="./img/gallery/new_product2.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-title h6">Quartz Watch.</p>
            <p class="card-text">80.00$</p>
          </div>
        </div>
        <div class="card col-lg-4 col-md-4 col-sm-6 col-12">
          <img src="./img/gallery/new_product3.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-title h6">Watchesline</p>
            <p class="card-text">75.00$</p>
          </div>
        </div>
      </div>
    </section>

    <section class="gallery row m-0 mt-4">
      <img class="col-12 col-md-6 col-lg-6 mb-3 mb-md-0" src="./img/gallery/gallery1.png" alt="">
      <img class="col-6 col-md-3 col-lg-3" src="./img/gallery/gallery2.png" alt="">
      <div class="col-6 col-md-3 col-lg-3 p-0">
        <img class="col-12 mb-4" src="./img/gallery/gallery3.png" alt="">
        <img class="col-12" src="./img/gallery/gallery4.png" alt="">
      </div>
    </section>
    <section class="popular container">
      <h3 class="head text-center mt-5">New Products
        <p class="h6">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla, ut.</p>
      </h3>
      <div class="items row text-center">
        <div class="item card border-0 col-lg-4 col-md-4 col-sm-6 col-6">
          <img src="./img/gallery/popular1.png" class=" card-img-top" alt="...">
          <div class="card-body">
            <p class="hover">
              Daniel Wellington
            </p>
            <p class="card-title h6"> Daniel Wellington.</p>
            <p class="card-text">50.00$</p>
          </div>
        </div>
        <div class="item card border-0 col-lg-4 col-md-4 col-sm-6 col-6">
          <img src="./img/gallery/popular2.png" class=" card-img-top" alt="...">
          <div class="card-body">
            <p class="hover">
              Daniel Wellington
            </p>
            <p class="card-title h6"> Daniel Wellington.</p>
            <p class="card-text">50.00$</p>
          </div>
        </div>
        <div class="item card border-0 col-lg-4 col-md-4 col-sm-6 col-6">
          <img src="./img/gallery/popular3.png" class=" card-img-top" alt="...">
          <div class="card-body">
            <p class="hover">
              Daniel Wellington
            </p>
            <p class="card-title h6"> Daniel Wellington.</p>
            <p class="card-text">50.00$</p>
          </div>
        </div>
        <div class="item card border-0 col-lg-4 col-md-4 col-sm-6 col-6">
          <img src="./img/gallery/popular4.png" class=" card-img-top" alt="...">
          <div class="card-body">
            <p class="hover">
              Daniel Wellington
            </p>
            <p class="card-title h6"> Daniel Wellington.</p>
            <p class="card-text">50.00$</p>
          </div>
        </div>
        <div class="item card border-0 col-lg-4 col-md-4 col-sm-6 col-6">
          <img src="./img/gallery/popular5.png" class=" card-img-top" alt="...">
          <div class="card-body">
            <p class="hover">
              Daniel Wellington
            </p>
            <p class="card-title h6"> Daniel Wellington.</p>
            <p class="card-text">50.00$</p>
          </div>
        </div>
        <div class="item card border-0 col-lg-4 col-md-4 col-sm-6 col-6">
          <img src="./img/gallery/popular6.png" class=" card-img-top" alt="...">
          <div class="card-body">
            <p class="hover">
              Daniel Wellington
            </p>
            <p class="card-title h6"> Daniel Wellington.</p>
            <p class="card-text">50.00$</p>
          </div>
        </div>
        <?php
        try {
          // اتصال بقاعدة البيانات SQLite باستخدام PDO
          $db = new PDO('sqlite:watches.db');
          $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
          // استعلام SQL لاسترجاع بيانات الساعات
          $stmt = $db->query('SELECT * FROM watches');
  
          // عرض البيانات على الصفحة
          while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="col-lg-4 col-md-4 col-sm-6 col-6">';
            echo '<div class="card border-0">';
            echo '<img src="uploads/' . $row['image'] . '" class="card-img-top" alt="' . $row['name'] . '">';
            echo '<div class="card-body">';
            echo '<p class="hover">' . $row['name'] . '</p>';
            echo '<p class="card-title h6">' . $row['name'] . '</p>';
            echo '<p class="card-text">' . $row['price'] . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
          }
        } catch (PDOException $e) {
          echo 'Failed to retrieve data from watches table: ' . $e->getMessage();
        }
        ?>
      </div>
    </div>
      </div>
    </section>

    <section class="hero-sec mt-5 choice1">
      <div class="container d-flex h-50 align-items-center">
        <div class="text col-8 ">
          <h1 class="">
            Watch of Choice
          </h1>
          <p>
            Ut enim ad minim veniam, quis nostrud exercitation ullamcc laboris nisi ut aliquip ex
            ea commodo cansequat is aute irure. ea commodo cansequat is aute irure.
          </p>
          <button class="btn"> SHOP NOW</button>
        </div>
        <div class="hero2 col-4">
        </div>
      </div>
    </section>

    <section class="hero-sec choice2">
      <div class="container d-flex h-50 align-items-center">
        <div class="hero3 col-4">

        </div>
        <div class="text col-8 ">
          <h1 class="">
            Watch of Choice
          </h1>
          <p>
            Ut enim ad minim veniam, quis nostrud exercitation ullamcc laboris nisi ut aliquip ex
            ea commodo cansequat is aute irure. ea commodo cansequat is aute irure.
          </p>
          <button class="btn"> SHOP NOW</button>
        </div>
      </div>
    </section>
    <section class="foot  justify-content-between w-100 container">
      <div class="row w-100  d-flex">

        <div class=" col-4">
          <i class="fa-solid fa-box" style="color: #ffffff;"></i>
          <h6>Lorem ipsum .</h6>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
        </div>
        <div class=" col-4">
          <i class="fa-solid fa-lock-open" style="color: #ffffff;"></i>
          <h6>Lorem ipsum .</h6>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
        </div>
        <div class=" col-4">
          <i class="fa-solid fa-rotate" style="color: #ffffff;"></i>
          <h6>Lorem ipsum .</h6>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
        </div>
      </div>
    </section>
    <div class="container mt-5">
      <footer>
        <div class="row">
          <div class="col-6 col-md-3 mb-3">
            <h5><img src="./img/logo/logo2_footer.png" alt=""></h5>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit adipisicing elit.</p>
          </div>
          <div class="col-6 col-md-3 mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
            </ul>
          </div>

          <div class="col-6 col-md-3 mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
            </ul>
          </div>

          <div class="col-6 col-md-3 mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
            </ul>
          </div>



          <div class="d-flex flex-column w-100 flex-sm-row justify-content-between pt-4 mt-4  w- border-top">
            <p>© 2024 Company, Inc. All rights <span class="ps-1 "> abderhman ahmed</span></p>
            <ul class="list-unstyled d-flex ">
              <li class="ms-3"><a class="link-body-emphasis" href="#"><i class="fa-brands fa-facebook"></i></a></li>
              <li class="ms-3"><a class="link-body-emphasis" href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
              <li class="ms-3"><a class="link-body-emphasis" href="#"><i class="fa-brands fa-instagram"></i></a></li>
              <li class="ms-3"><a class="link-body-emphasis" href="#"><i class="fa-solid fa-graduation-cap"></i></a>
              </li>
            </ul>
          </div>

      </footer>
    </div>
  </main>
  <script>
    $(document).ready(function () {
      $('.navbar-nav .dropdown-toggle').click(function () {
        $(this).next('.dropdown-menu').toggleClass('show');
      });

      $(document).on('click', function (event) {
        var $clickedOn = $(event.target),
          $dropdownMenues = $('.dropdown-menu');

        if (!$clickedOn.closest('.navbar').find('.navbar-toggler').attr('aria-expanded') && $dropdownMenues.hasClass('show')) {
          $dropdownMenues.removeClass('show');
        }
      });
    });
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

  <script src="./src/bootstrap.bundle.min.js"></script>
  <script src="./src/bootstrap.min.js"></script>
</body>

</html>