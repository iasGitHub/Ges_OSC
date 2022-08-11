<?php include('includes/header.php')?>
        <div class="container-fluid text-center mt-5">
            <div class="p-4 mx-auto shadow rounded" style="margin-top: 50px; width:100%; max-width:360px;">   
            <img src="<?=ROOT?>/assets/hero.png" class="d-block mx-auto rounded-circle" style="width: 100px" alt="">
                <h3 class="">Connexion</h3>
                <input class="form-control mt-4" type="email" name="email" placeholder="Entrer votre email" >
                <input class="form-control mt-4" type="password" name="password" placeholder="Entrer votre mot de passe">
                <br>
                <button class="btn btn-success" type="submit">Se connecter</button>
            </div>
        </div>
<?php include('includes/footer.php')?>
