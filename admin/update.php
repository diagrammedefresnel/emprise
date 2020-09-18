<?php include('inc/header.php') ?>

          <!-- Begin Page Content -->
          <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between
              mb-4">
              <h1 class="h1 mb-5 text-gray-800 mt-4">Modification de l'article 1 </h1>
            </div>

            <!-- Content Row -->

              <!-- Dropdown Card Example -->
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center
                  justify-content-between col-md-12 col-xl-12">
                  <h6 class="m-0 font-weight-bold text-warning">Veuillez à changer les champs que vous voulez modifier</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button"
                      id="dropdownMenuLink" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow
                      animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Action:</div>
                      <a class="dropdown-item" href="home.php">Annuler la saisie</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">


                  <form>

                    <div class="custom-file mb-4">
                      <input type="file" class="custom-file-input" required>
                      <label class="custom-file-label" for="validatedCustomFile">Choississez votre image...</label>
                      <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>

                    <div class="form-group">
                      <label for="title">Titre de L'article</label> 
                      <input id="title" name="title" placeholder="Titre de l'article" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                      <label for="legende">Légende</label> 
                      <input id="legende" name="legende" placeholder="Légende" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                      <label for="Chapeau">Chapeau</label> 
                      <input id="Chapeau" name="Chapeau" placeholder="chapeau" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                      <label for="content">Corps du texte</label> 
                      <textarea id="content" name="content" cols="40" rows="10" class="form-control"></textarea>
                    </div> 

                    <div class="form-group">
                      <button name="submit" type="submit" class="btn btn-primary">Modifier l'article</button>
                    </div>

                  </form>
                  





                </div>
              </div>

              </div>


            </div>


          </div>
          <!-- End of Content Wrapper -->

  <?php include('inc/footer.php') ?>