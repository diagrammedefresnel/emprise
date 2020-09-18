<?php include('inc/header.php') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between
              ">
        <h1 class="h1 mb-5 text-gray-800 mt-4"> <i class="fa fa-paper-plane" aria-hidden="true"></i> Envoie de Mail</h1>
    </div>

    <!-- Content Row -->

    <!-- Dropdown Card Example -->
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center
                  justify-content-between col-md-12 col-xl-12">
            <h6 class="m-0 font-weight-bold text-warning">Veuillez à remplir tous les champs</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow
                      animated--fade-in" aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Action:</div>
                    <a class="dropdown-item" href="list.html">Lister les messages</a>
                    <a class="dropdown-item" href="home.php">Annuler la saisie</a>
                    <div class="dropdown-divider"></div>
                </div>
            </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">


            <form>

                <div class="form-group">
                    <label for="mail">Mail</label>
                    <input id="mail" name="mail" placeholder="Entrez le Mail" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="sujet">Sujet</label>
                    <input id="sujet" name="legende" placeholder="Entrez le sujet" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Entrez votre texte"></textarea>
                </div>

                <div class="form-group">
                    <a href="home.php" class="btn btn-disabled"> <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        retour</a>
                    <button name="submit" type="submit" class="btn btn-primary">Poster l'article</button>
                </div>

            </form>






        </div>
    </div>

</div>


</div>


</div>
<!-- End of Content Wrapper -->

<?php include('inc/footer.php') ?>