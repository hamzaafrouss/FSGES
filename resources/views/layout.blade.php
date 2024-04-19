<!DOCTYPE html>
<html lang="en">

<head>
  <link href="/css/app.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <script src="/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="/css/style.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fsjes Réunions </title>
</head>

<body>
      <div class="col-9">
        <div class="card" style="position: absolute; width: 950px; height: 600px; top:30px; bottom:0; left:0; right: 0; margin: auto;">
          <div class="card-header bg-secondary" style="color:white; font-size: 25px; font-weight:bold;" style="width: 100%;">
            Gestion des Réunions
          </div>
          <div class="card-body" >

            <div class="container" id="gr">
              @yield('content')

            </div>

            <p class="card-text">

            </p>
          
          </div>
        </div>
      </div>

    </div>
  </div>
  <footer class="bg-secondary text-center text-white">
    <div class="container p-4 pb-0">
      <section class="">
        <form action="">
          <div class="row d-flex justify-content-center">
            <div class="col-auto">
              <p class="pt-2">
                <strong>Fsjes Réunions</strong>
              </p>
            </div>
          </div>
        </form>
      </section>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">faculté science juridique economique et sociale marrakech</a>
    </div>
  </footer>

</body>

</html>