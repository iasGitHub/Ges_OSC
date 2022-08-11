<?php include('includes/header.php')?>
        <div class="container-fluid text-center mt-5">
            <div class="p-4 mx-auto shadow rounded" style="margin-top: 50px; width:100%; max-width:360px;">   
            <img src="<?=ROOT?>/assets/hero.png" class="d-block mx-auto rounded-circle" style="width: 100px" alt="">
                <h3 class="">Inscription</h3>
                <input class="form-control my-2 mt-4" type="text" name="firstName" placeholder="Entrez votre nom " >
                <input class="form-control my-2 mt-4" type="text" name="lastName" placeholder="Entrez votre prénom">
                
                <select class="mt-4 my-2 form-control" name="" id="">
                    <option>--- Selectionner votre sexe ---</option>
                    <option>Homme</option>
                    <option>Femme</option>
                </select>

                <select class="mt-4 my-2 form-control" name="" id="">
                    <option value="">--- Selectionner un rôle ---</option>
                    <option value="admin">Administrateur</option>
                    <option value="employe">Employé</option>
                </select>

                <input class="form-control my-2 mt-4" type="email" name="email" placeholder="Entrez votre email">
                <input class="form-control my-2 mt-4" type="password" name="password" placeholder="Entrez votre mot de passe">
                <input class="form-control my-2 mt-4" type="password" name="password2" placeholder="Retapez votre mot de passe">
                <br>
                <button class="btn btn-success" type="submit">S'inscrire</button>
            </div>
        </div>
<?php include('includes/footer.php')?>
