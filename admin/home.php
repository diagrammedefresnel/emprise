<?php include('inc/header.php') ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4 ">
            <h1 class="h1 mb-5 text-gray-800 mt-4"> <i class="fa fa-home" aria-hidden="true"></i>  Bienvenue Ben</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-6 ">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-3"><h2>ArticleS</h2></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800 mb-5">Nombre d'articles du blog : 52</div>
                      <div class="mt-3 text-center">
                        <a href="edit.php" class="btn btn-primary"> <i class="fa fa-plus" aria-hidden="true"></i> Ecrire un article</a>
                        <a href="list.php" class="btn btn-success"> <i class="fa fa-list" aria-hidden="true"></i> Lister les articles</a>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-file fa-3x text-gray-600" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <!-- Pending Requests Card Example -->
            <div class="col-xl-6 col-md-6">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-3 "><h2>Messages</h2></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800 mb-5">Nombres de messages : 18</div>
                      <div class="mt-3 text-center">
                        <a href="sendmail.php" class="btn btn-primary"> <i class="fa fa-paper-plane pr-1" aria-hidden="true"></i> Envoyer un message   </a>
                        <a href="list-mail.php" class="btn btn-success"> <i class="fa fa-list" aria-hidden="true"></i> Lister les messages</a>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-3x text-gray-600"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


    </div>
    <!-- End of Content Wrapper -->


    <?php include('inc/footer.php') ?>