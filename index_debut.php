<!DOCTYPE html>
<html lang="FR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="shortcut icon" href="favicon.ico">
  <script src="https://kit.fontawesome.com/bdf8dcd65d.js"></script>
  <title>Bienvenue ACtion Mephi</title>
</head>

<body>
  <div class="fixed-top">
    <div class="container-fluid handy1">
      <div class="row bg-primary">
        <div class="col-xs-5 col-md-5 col-lg-5">
          <a href=""><img src="img/facebook.png" width="35px" height="" alt=""></a>
          <a href=""><img src="img/instagram.png" width="35px" height="" alt=""></a>
          <a href=""><img src="img/twitter.png" width="35px" height="" alt=""></a>
          <a href=""><img src="img/google.png" width="35px" height="" alt=""></a>
          <a href=""><img src="img/youtube.png" width="35px" height="" alt=""></a>
        </div>
        <div class="col-xs-7 col-md-7 col-lg-7 text-light ">
          <div class="row">
            <div class="col-xs-4 col-md-4 col-lg-4  mt-2 heure text-right">
              <a class="mel" href="tel:+4922198625080"><i class="fas fa-headset mr-2"></i>+49 221 98 62 50 80 </a>
            </div>
            <div class="col-xs-4 col-md-4 col-lg-4  mt-2 heure">
              <a class="mel" href="mailto:info@actionmephi.com"><i class="fas fa-envelope-open-text mr-2"></i>info@actionmephi.com</a>
            </div>
            <div class="col-xs-4 col-md-4 col-lg-4">
              <form class="form-inline my-2 my-lg-0 heure">
                <button class="horange text-light my-2 my-sm-0" type="submit"><i class="fas fa-hand-holding-heart mr-2"></i> JE FAIS UN DON</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--#################### menu #################################"-->


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="row">
        <div class="col-xs-5 col-md-5">
          <div class="navbar-brand"><a href="index.php"><img src="img/actionmephi.png" width="50%" /></a></div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <div class="col-xs-7 col-md-7 col-lg-7">
          <div class="collapse navbar-collapse" id="navbarColor01">
            <h4>
              <ul class="navbar-nav mr-auto menu-milieu">
                <li class="nav-item <?php echo ($page == "index") ? "active" : ""  ?>">
                  <a class="nav-link" href="">Accueil<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?php echo ($page == "predications") || ($page == "handy") ? "active" : "" ?>">
                  <a class="nav-link" href="">A propos</a>
                </li>
                <li class="nav-item <?php echo ($page == "temoignages") ? "active" : ""  ?>">
                  <a class="nav-link" href="">Projets</a>
                </li>
                <li class="nav-item <?php echo ($page == "bible") ? "active" : ""  ?>">
                  <a class="nav-link" href="">Medias</a>
                </li>
                <li class="nav-item <?php echo ($page == "bible") ? "active" : ""  ?>">
                  <a class="nav-link" href="">Contact</a>
                </li>
              </ul>
            </h4>
          </div>
        </div>
    </nav>
  </div>
  </div>
  <header class="text-danger">

  </header>

  <section class="bg-light haut text-justify justify-content-center">
    <div class="row align-items-center">
      <div class="col-md-2 col-lg-2"></div>
      <div class="col-md-4 col-lg-4">
        <h1 class="text-center text-dark mt-5">Notre Fardeau</h1>
        <p class="text-center">lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. At mollitia eveniet ut repellendus in perspiciatis, ratione nesciunt soluta voluptatum neque dolore ad ducimus illo tempora repudiandae repellat, delectus itaque. Ad!</p>
        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mt-1">
            <a href=""><button type="button" class="btn btn-primary btn-block"><i class="fas fa-arrow-right mr-2"></i>Lire plus</button></a>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mt-1">
            <a href=""><button type="button" class="btn btn-primary btn-block"><i class="fas fa-hand-holding-heart mr-2"></i>Je fais Un Don</button></a>
          </div>
        </div>
      </div>
      <div class="col-xs-4 col-md-4 col-lg-4">
        <img src="img/communication.png" class="align-middle mr-5" width="100%" alt="">
      </div>
      <div class="col-xs-2 col-md-2 col-lg-2"></div>
    </div>
  </section>

  <section class="bg-danger haut text-justify">
    <h1 class="text-center text-light mt-4">Nos Projets</h1>
    <div class="row">
      <div class="col-xs-6 col-md-6 col-lg-6 mt-3">
        <p class="ml-5">HandyLorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid voluptate voluptatibus minus ipsum porro, ducimus eligendi! Quae, ipsa quod! Doloremque at placeat omnis voluptatum, architecto unde id quam excepturi esse?
          Pariatur, voluptatibus enim? Cupiditate quis adipisci amet non, quibusdam ea perferendis molestiae itaque odio quo ipsum magnam animi voluptatem distinctio eligendi et, iusto perspiciatis odit placeat magni, recusandae voluptates beatae?
          Mollitia nesciunt tempore aperiam, beatae perferendis iste possimus autem dolore unde corporis accusantium ratione quibusdam delectus velit. Aliquam totam pariatur repellat quas accusamus voluptatem fugiat, dolorum et aut, iure facilis?
          Qui magnam unde voluptatibus veniam necessitatibus consectetur nemo nesciunt deleniti quod delectus dolorem excepturi ullam fuga at, ad aperiam! Amet voluptates sunt nulla nobis minus aliquam consequuntur in rem voluptate.
        </p>
      </div>
      <div class="col-xs-6 col-md-6 col-lg-6 mt-3">
        <ul class="nav nav-tabs mr-5" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
          </li>
        </ul>
        <div class="tab-content mr-5" id="myTabContent">
          <div class="tab-pane fade  bg-danger text-light" id="home" role="tabpanel" aria-labelledby="home-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex veritatis aut perspiciatis illum totam ratione natus aliquid aspernatur in quasi provident consectetur, expedita assumenda, alias error minus facere a quod!Voluptatem, magnam saepe aliquid molestiae facilis minus ipsa mollitia distinctio non, deserunt fuga. Ut itaque, consectetur provident, mollitia sit eaque vitae inventore corporis esse est ratione iure sapiente alias placeat.</div>
          <div class="tab-pane fade show active bg-danger text-light" id="profile" role="tabpanel" aria-labelledby="profile-tab">HAndyLorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ad itaque laboriosam odio maxime nostrum quisquam ex rem quidem tempora dolore provident repellat fugit reiciendis facilis, veritatis quibusdam beatae porro?Atque ratione incidunt dignissimos architecto ipsam, veniam vero neque dicta nemo placeat modi aut, odit error possimus. Cum ipsam voluptatem tenetur aliquam nam dolorum, reprehenderit, sit dolores, voluptas quisquam molestias?</div>
          <div class="tab-pane fade bg-danger text-light" id="contact" role="tabpanel" aria-labelledby="contact-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde iste laudantium optio consequuntur, et eaque possimus tenetur pariatur numquam doloremque iusto, voluptate amet veniam ducimus aliquam, quod nesciunt ullam deleniti.Impedit quas cupiditate suscipit tempora distinctio, dicta at in, reprehenderit quisquam numquam iste debitis sit nulla. Expedita iusto, ullam voluptatibus dolor quasi beatae adipisci dolorum! Qui quod eum veniam incidunt.</div>
        </div>
      </div>
    </div>
  </section>
  <!-- ######################### Mephi news ######################### -->
  <section class="bg-dark haut" role="alert">
    <h1 class="text-center text-light">Mephi News</h1>
    <div class="row text-light mr-2 ml-2">
      <div class="col-xs-4 col-md-4 col-lg-4 mt-3">
        <div class="row">
          <div class="col-xs-6 col-md-6 col-lg-6">
            <img class="filtre" src="img/inclusion.png" width="100%" alt="">
          </div>
          <div class="col-xs-6 col-md-6 col-lg-6">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla natus excepturi necessitatibus ipsam magnam sequi,
          </div>
        </div>
      </div>
      <div class="col-sx-4 col-md-4 col-lg-4 mt-3">
        <div class="row">
          <div class="col-sx-6 col-md-6 col-lg-6">
            <img class="filtre" src="img/inclusion.png" width="100%" alt="">
          </div>
          <div class="col-sx-6 col-md-6 col-lg-6">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </div>
        </div>
      </div>
      <div class="col-sx-4 col-md-4 col-lg-4 mt-3">
        <div class="row">
          <div class="col-sx-6 col-md-6 col-lg-6">
            <img class="filtre" src="img/inclusion.png" width="100%" alt="nos news">
          </div>
          <div class="col-sx-6 col-md-6 col-lg-6">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. .
          </div>
        </div>
      </div>
    </div>
    <hr class="barre">
    <p class="ml-3 mr-2 text-light mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero reprehenderit aliquid iure unde quidem ullam cumque deserunt cum hic, quo dolorem exercitationem amet non dolorum distinctio impedit, dignissimos ratione. Quibusdam.</p><br>
  </section>
  <!--################## Musiques ################## -->
  <section class="bg-videos haut">
    <h1 class="text-center text-light mb-2">Nos Actions</h1>
    <div class="row ml-2 mr-2 mb-2">
      <div class="col-sx-3 col-md-3 col-lg-3">
        <img class="filtre mt-1" src="img/mephi_arriere.jpg" class="img-thumbnail mb-2 zoom" width="100%" alt="">
      </div>
      <div class="col-sx-3 col-md-3 col-lg-3">
        <img class="filtre mt-1" src="img/gp_musique.jpg" class="img-thumbnail mb-2" width="100%" alt="">
      </div>
      <div class="col-sx-3 col-md-3 col-lg-3">
        <img class="filtre mt-1" src="img/lesmamans.jpg" class="img-thumbnail mb-2" width="100%" alt="">
      </div>
      <div class="col-sx-3 col-md-3 col-lg-3">
        <img class="filtre mt-1" src="img/ikebaali.jpg" class="img-thumbnail mb-2" width="100%" alt="">
      </div>
    </div><br>
  </section>
  <?php require_once 'includes/footer.php' ?>