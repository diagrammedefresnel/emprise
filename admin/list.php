<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1,
      shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet" />

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet" />
</head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
        <div class="sidebar-brand-text mx-3">Administration Emprise</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0" />
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60" />
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Déconnexion
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->

        <div class="container-fluid shadow pt-3 pb-5">
          <div class="row ">
            <div class="col-md-12">

              <div class="card">

                <div class="card-header">
                  <h1>
                    <b> <i>LISTE DES ARTICLES</i></b>
                  </h1>

                  <div class="container w-50 text-right">

                    <div class="input-group mb-3">

                      <input type="text" class="form-control" placeholder="Tapez votre recherche ici">

                      <div class="input-group-append">

                        <button class="btn btn-primary" type="submit">
                          <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                        
                      </div>

                    </div>

                  </div>

                  <div class="form-group">
                    <a href="home.php" class="btn btn-disabled"> <i class="fa fa-arrow-left" aria-hidden="true"></i> retour</a>
                    <a href="edit.php" class="btn btn-success"> <i class="fa fa-plus" aria-hidden="true"></i> Rédiger un article</a>
                  </div>

                </div>

              </div>

              <div class="card-body">
                <table class="table">
                  <thead style="text-align: center">
                    <tr>
                      <th>N°</th>
                      <th>Titre</th>
                      <th>Legende</th>
                      <th>Chapeau</th>
                      <th>C.Texte</th>
                      <th>Auteur</th>
                      <th>Pub.Dat</th>
                      <th>image</th>
                      <th>Modification</th>
                      <th>Suppression</th>
                    </tr>
                  </thead>
                  <tbody style="text-align: center">
                    <tr>

                      <td>
                        <b>
                          <p>1</p>
                        </b>
                      </td>

                      <td>
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#legende"
                          title="cliquez ici pour afficher la légende">Afficher</button>
                        <div id="legende" class="modal fade" role="dialog">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">La légende de l'ID</h4>
                              </div>
                              <div class="modal-body" name="apeltitre">
                                <b>
                                  <p>Le titre de l'id 1 en question</p>
                                </b>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>


                      <td>
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#legende"
                          title="cliquez ici pour afficher la légende">Afficher</button>
                        <div id="legende" class="modal fade" role="dialog">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">La légende de l'ID</h4>
                              </div>
                              <div class="modal-body" name="legende">
                                <b>
                                  <p>La légende 1 en question</p>
                                </b>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>

                      <td>
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#chapeau"
                          title="cliquez ici pour afficher le chapeau">Afficher</button>
                        <div id="chapeau" class="modal fade" role="dialog">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Le chapeau de l'ID 1</h4>
                              </div>
                              <div class="modal-body" name="chapeau">
                                <b>
                                  <p>Le chapeau 1 en question de l'id 1 toujours</p>
                                </b>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>

                      <td>
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#contenue"
                          title="cliquez ici pour afficher le chapeau">Afficher</button>
                        <div id="contenue" class="modal fade" role="dialog">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Le contenue de l'ID 1</h4>
                              </div>
                              <div class="modal-body" name="contenue">
                                <b>
                                  <p>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia omnis, obcaecati
                                    placeat quos porro fugiat excepturi eaque ab, eligendi, non nostrum commodi quo odio
                                    facilis velit aspernatur mollitia assumenda consequatur?
                                  </p>
                                </b>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>

                      <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#auteur"
                          title="cliquez ici pour afficher le nom de l'auteur">Afficher</button>
                        <div id="auteur" class="modal fade" role="dialog">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Le nom de l'auteur de l'ID 1</h4>
                              </div>
                              <div class="modal-body" name="auteur">
                                <b>
                                  <p>
                                    Vincent
                                  </p>
                                </b>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>

                      <td>
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#date"
                          title="cliquez ici pour afficher la date">Afficher</button>
                        <div id="date" class="modal fade" role="dialog">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">La date de publication</h4>
                              </div>
                              <div class="modal-body" name="date">
                                <b>
                                  <p>
                                    27-12-2020
                                  </p>
                                </b>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>

                      <td>
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#date"
                          title="cliquez ici pour afficher la date">Afficher</button>
                        <div id="date" class="modal fade" role="dialog">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">La date de publication</h4>
                              </div>
                              <div class="modal-body" name="date">
                                <b>
                                  <p>
                                    27-12-2020
                                  </p>
                                </b>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>

                      <td>
                        <a href="" class="btn btn-success"> <i class="fas fa-edit"></i> </a>
                      </td>

                      <td>
                        <a href="" class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i> </a>
                      </td>

                    </tr>

                    <tr>

                      <td>
                        <b>
                          <p>1</p>
                        </b>
                      </td>

                      <td>
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#legende"
                          title="cliquez ici pour afficher la légende">Afficher</button>
                        <div id="legende" class="modal fade" role="dialog">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">La légende de l'ID</h4>
                              </div>
                              <div class="modal-body" name="apeltitre">
                                <b>
                                  <p>Le titre de l'id 1 en question</p>
                                </b>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>


                      <td>
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#legende"
                          title="cliquez ici pour afficher la légende">Afficher</button>
                        <div id="legende" class="modal fade" role="dialog">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">La légende de l'ID</h4>
                              </div>
                              <div class="modal-body" name="legende">
                                <b>
                                  <p>La légende 1 en question</p>
                                </b>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>

                      <td>
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#chapeau"
                          title="cliquez ici pour afficher le chapeau">Afficher</button>
                        <div id="chapeau" class="modal fade" role="dialog">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Le chapeau de l'ID 1</h4>
                              </div>
                              <div class="modal-body" name="chapeau">
                                <b>
                                  <p>Le chapeau 1 en question de l'id 1 toujours</p>
                                </b>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>

                      <td>
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#contenue"
                          title="cliquez ici pour afficher le chapeau">Afficher</button>
                        <div id="contenue" class="modal fade" role="dialog">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Le contenue de l'ID 1</h4>
                              </div>
                              <div class="modal-body" name="contenue">
                                <b>
                                  <p>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia omnis, obcaecati
                                    placeat quos porro fugiat excepturi eaque ab, eligendi, non nostrum commodi quo odio
                                    facilis velit aspernatur mollitia assumenda consequatur?
                                  </p>
                                </b>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>

                      <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#auteur"
                          title="cliquez ici pour afficher le nom de l'auteur">Afficher</button>
                        <div id="auteur" class="modal fade" role="dialog">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Le nom de l'auteur de l'ID 1</h4>
                              </div>
                              <div class="modal-body" name="auteur">
                                <b>
                                  <p>
                                    Vincent
                                  </p>
                                </b>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>

                      <td>
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#date"
                          title="cliquez ici pour afficher la date">Afficher</button>
                        <div id="date" class="modal fade" role="dialog">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">La date de publication</h4>
                              </div>
                              <div class="modal-body" name="date">
                                <b>
                                  <p>
                                    27-12-2020
                                  </p>
                                </b>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>

                      <td>
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#date"
                          title="cliquez ici pour afficher la date">Afficher</button>
                        <div id="date" class="modal fade" role="dialog">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">La date de publication</h4>
                              </div>
                              <div class="modal-body" name="date">
                                <b>
                                  <p>
                                    27-12-2020
                                  </p>
                                </b>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>

                      <td>
                        <a href="" class="btn btn-success"> <i class="fas fa-edit"></i> </a>
                      </td>

                      <td>
                        <a href="" class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i> </a>
                      </td>

                    </tr>


                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          Select "Logout" below if you are ready to end your current session.
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">
            Cancel
          </button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="assets/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="assets/js/demo/chart-area-demo.js"></script>
  <script src="assets/js/demo/chart-pie-demo.js"></script>
</body>

</html>