<?php
require_once 'includes/header.php'; ?>
<section class="horange">
    <div class="container">
        <h1>Nous contacter !</h1> 
        <div class="row">
            <div class="col-md-5">
                <img class=" mt-1" src="img/contact.jpg" class="img-thumbnail mb-2" width="100%" alt="contact mephi">
            </div>
            <div class="col-md-7">
                <form action="" method="POST">
                    <input type="text" class="form-control" placeholder="votre prénom"><br>
                    <input type="text" class="form-control" placeholder="votre nom"><br>
                    <input type="text" class="form-control" placeholder="votre email"><br>
                    <textarea name="" id="" cols="77" rows="3" placeholder="votre message"></textarea>
                    <button type="submit" class="form-control btn btn-outline-info">Envoyer</button>
                </form>
            </div>
        </div>
        <p class="text-justify mt-3 text-light descript">Venez nous rencontrer dans notre chaleureux espace de travail où nous aurons plaisir à vous accueillir.

Stationnement accessible à tous au cœur de la propriété.</p>
    </div>
</section>
<?php
require_once 'includes/footer.php'; ?>