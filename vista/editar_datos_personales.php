<?php
    session_start();
    if( $_SESSION['us_tipo'] == 3 ) {

        include_once 'layouts/header.php';
?>

        <title>Adm | Editar Datos</title>

<?php 
        include_once 'layouts/nav.php';    
?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Datos Personales</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="../vista/adm_catalogo.php">Home</a></li>
                                    <li class="breadcrumb-item active">Datos Personales</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <section>
                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card card-success card-outline">
                                        <div class="card-body box-profile">
                                            <div class="text-center">
                                                <img  class="profile-user-img img-fluid img-circle" src="../img/foto.jpg">
                                            </div>
                                            <h3 class="profile-username text-center text-success">Daniel Alberto</h3>
                                            <p class="text-muted text-center">Canaviri Mena</p>
                                            <ul class="list-group list-group-unbordered mb-3">
                                                <li class="list-group-item">
                                                    <b style="color: #0B7300;">Edad</b>
                                                    <a href="" class="float-right">37</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <b style="color: #0B7300;">DNI</b>
                                                    <a href="" class="float-right">23</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <b style="color: #0B7300;">Tipo Usuario</b>
                                                    <span class="badge badge-primary float-right">Administrador</span>
                                                </li>
                                            </ul>   
                                        </div>
                                    </div>
                                    <div class="card card-success">
                                        <div class="card-header">
                                            <div class="card-title">Sobre mi</div>
                                        </div>
                                        <div class="card-body">
                                            <strong style="color: #0B7300;">
                                                <i class="fas fa-phone mr-1"></i>Teléfono
                                            </strong>
                                            <p class="text-muted">69908854</p>
                                            <strong style="color: #0B7300;">
                                                <i class="fas fa-map-marker-alt mr-1"></i>Residencia
                                            </strong>
                                            <p class="text-muted">Santa Cruz - Bolivia</p>
                                            <strong style="color: #0B7300;">
                                                <i class="fas fa-at mr-1"></i>Correo
                                            </strong>
                                            <p class="text-muted">danwebdeveloper@gmail.com</p>
                                            <strong style="color: #0B7300;">
                                                <i class="fas fa-smile-wink mr-1"></i>Sexo
                                            </strong>
                                            <p class="text-muted">Masculino</p>
                                            <strong style="color: #0B7300;">
                                                <i class="fas fa-pencil-alt mr-1"></i>Información Adicional
                                            </strong>
                                            <p class="text-muted">Ingeniero de Sistemas</p>
                                            <button class="btn btn-block bg-gradient-danger">Editar</button>
                                        </div>
                                        <div class="card-footer">
                                            <p class="text-muted text-center">Click en el boton si desea editar los datos personales.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
            <!-- /.content-wrapper -->

            
<?php
        include_once 'layouts/footer.php';
    } else {
        header('Location: ../index.php');
    }
?>