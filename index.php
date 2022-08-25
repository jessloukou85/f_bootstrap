<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
      .header{
        background-color: var(--bs-gray);
        color: white;
      }
      .img-fluid{
        height: 500px;
        width: 500px;
      }
      .card-body{
        font-family: Georgia, 'Times New Roman', Times, serif;
      }

    </style>
    <title>Bootstrap demo</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Formation bootstrap</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Acceuil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Formation</a>
        </li> 
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a href="#" class="nav-link">se connecter</a>
        </li>
        <li class="item">
          <a href="#" class="btn btn-info">s'inscrire</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<section class="header text-center p-4">
  <div class="container">
    <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam, rerum consequatur ut praesentium nemo labore?</span>
    <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#exampleModal">souscrire</button>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog text-danger">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Tooltip on right"></button>
      </div>
      <div class="modal-body">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora dignissimos aut vel aliquam ratione. Neque, voluptate vitae. Nobis molestiae fugiat doloremque voluptate quaerat. Fugit, nostrum vitae ipsam accusamus est qui.
        Dolores facilis ut harum odit, eum aut accusamus sunt quas ducimus magni ipsa dolorem incidunt, blanditiis atque, error quaerat enim rerum dicta nostrum ex. Quae quasi nulla amet consectetur fuga!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
 </div>
</div>
</section>
<section class="main-page py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-3 bg-dark">
        <img class="img-fluid" src="assets/image/v1.jpg" alt="">
      </div>
      <div class="col-md-6">
        <div class="card rounded-0">
          <div class="card-header text-center p-4">
            <h2>bibliographie</h2>
          </div>
          <div class="card-body p-5 ">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam expedita at modi tempora, quibusdam delectus alias magnam harum laborum molestias blanditiis soluta cum. Possimus vel eum exercitationem eaque enim nostrum!
          </div>
        </div>
        <form class="pt-5">
          <div class="input-group mb-3 ">
            <input type="email" class="form-control" placeholder="Adresse email" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <button class="input-group-text btn btn-primary">s'inscrire</button>
          </div>
          </form>
      </div>
        <div class="col-md-3 bg-dark">
        <img class="img-fluid" src="assets/image/v2.jpg" alt="">
        </div>
    </div>
  </section>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
  </script>
  </body>
</html>