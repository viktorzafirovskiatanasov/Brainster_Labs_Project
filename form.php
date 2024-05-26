<?php include("db.php"); ?>
<!DOCTYPE html>
<html>

<head>
  <title>Form</title>
  <meta charset="utf-8" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />

  <!-- Latest compiled and minified Bootstrap 4.6 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
  <!-- CSS script -->
  <link rel="stylesheet" href="./css/main.css" />
  <!-- Latest Font-Awesome CDN -->
  <script src="https://kit.fontawesome.com/0e37b883f4.js" crossorigin="anonymous"></script>

  <?php
  // PHP code

  // Include JavaScript script
  echo '<script src="./scripts/script.js"></script>';
  ?>

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-light py-3 justify-content-between">
      <a class="navbar-brand text-center" href="index.html">
        <img src="./imgs/Logo.png" alt="logo" />
        <p class="logo pt-2">brainster</p>
      </a>
      <button type="button" class="close active d-block d-md-none" data-toggle="modal"
        data-target="#modal-fullscreen-xl">
        <span aria-hidden="true"><img src="./imgs/menu.png" alt="" /></span>
      </button>
      <div class="d-none d-md-block">
        <ul class="navbar-nav font-weight-bold text-dark">
          <li class="nav-item active">
            <a class="nav-link" href="https://brainster.co/marketing/" target="_blank">Академија за
              маркетинг</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="https://brainster.co/full-stack/" target="_blank">Академија за
              програмирање</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="https://brainster.co/data-science/" target="_blank">Академија за data
              sciense</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="https://brainster.co/graphic-design/" target="_blank">Академија за
              дизајн</a>
          </li>
        </ul>
      </div>
      <a href="#" class="btn btn-danger d-none d-md-block">Вработи наш студент</a>
    </nav>
  </header>
  <main>
    <form method="post" action="" onsubmit="return validateForm()">
      <div class="hero-form">
        <div class="title text-center">
          <p class="h1 ">Вработи Студенти</p>
        </div>
        <div id="form" class="container-lg form">
          <div class="row ">
            <div class="col-12 col-lg-6">
              <div class="form-group">
                <label for="nameSurname">Име и презиме</label>
                <input id="nameSurname" type="text" class="form-control" name="nameSurname" placeholder="Вашето име и презиме">
                

              </div>
            </div>
            <div class="col-12 col-lg-6">
              <div class="form-group">
                <label for="companyName">Име на компанијата</label>
                <input id="companyName" type="text" class="form-control" name="companyName" placeholder="Име на вашата компанијата" />
              </div>
            </div>
            <div class="col-12 col-lg-6">
              <div class="form-group">
                <label for="email">Контакт имејл</label>
                <input id="email" type="email" class="form-control" name="email" placeholder="Контакт имејл на вашата компанија">
              </div>
            </div>
            <div class="col-12 col-lg-6">
              <div class="form-group">
                <label for="phoneNumber">Контакт телефон</label>
                <input id="phoneNumber" type="tel" class="form-control" name="phoneNumber"
                  placeholder="Контакт телефон на вашата компанија">
              </div>
            </div>
            <div class="col-12 col-lg-6 drop-down">
              <div class="form-group">
                <label for="studentType">Тип на студент</label>
                <select id="studentType" name="studentType" class="form-select form-select-lg border-0 rounded w-100"
                  aria-label=".form-select-lg example">
                  <option class="selector d-none" value="1">Изберете тип на студент</option>
                  <option class="selector" value="Студент од програмирање">Студенти од програмирање
                  </option>
                  <option class="selector" value="Студент од маркетинг">Студенти од маркетинг</option>
                  <option class="selector" value="Студент од data science">Студенти од data science
                  </option>
                  <option class="selector" value="Студент од дизајн">Студенти од дизајн</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-lg-6">
              <input type="submit" value="ИСПРАТИ" class="btn bg-hover text-white w-100" name="insert" >
            </div>
          </div>
        </div>
      </div>
      </div>
    </form>
  </main>
  <footer>
    <div class="content container-fluid text-center py-3">
      <p>Изработено сo ❤️ од студентите на Brainster</p>
    </div>
  </footer>

  <!-- jQuery library -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="ha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>

  <!-- Latest Compiled Bootstrap 4.6 JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
    integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>
     <div
      class="modal modal-fullscreen-xl"
      id="modal-fullscreen-xl"
      tabindex="-1"
      role="dialog"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body pt-0 bg-dark">
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true"
                ><i class="fa-solid fa-xmark pt-3 pr-3" style="color: #ffffff"></i
              ></span>
            </button>
            <ul class="navbar-nav w-100 font-weight-bold text-dark mt-5 pt-5">
              <li class="mb-3">
                <a
                  href="https://brainster.co/marketing/"
                  class="text-decoration-none text-white w-50"
                  target="_blank"
                  >Академиа за маркетинг</a
                >
              </li>
              <li class="mb-3">
                <a
                  href="https://brainster.co/full-stack/"
                  class="text-decoration-none text-white w-50"
                  target="_blank"
                  >Академиа за програмирање</a
                >
              </li>
              <li class="mb-3">
                <a
                  href="https://brainster.co/data-science/"
                  class="text-decoration-none text-white w-50"
                  target="_blank"
                  >Академиа за data sciense</a
                >
              </li>
              <li class="mb-3">
                <a
                  href="https://brainster.co/graphic-design/"
                  class="text-decoration-none text-white w-50"
                  target="_blank"
                  >Академиа за дизајн</a
                >
              </li>

            <li> <a href="form.php" class="btn"
              >Вработи наш студент</a
            ></li>
            </ul>
           
          </div>
        </div>
      </div>
        <!-- jQuery library -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="ha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        
        <!-- Latest Compiled Bootstrap 4.6 JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
        
    </body>
</html>