<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Inscription</h1>
                            </div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="name" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Nom de l'utilisateur">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="prenom" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Prénoms de l'utilisateur">
                                    </div>
                                </div>
                                <div class="form-group" >
                                    <input type="date" name="date_de_naissance" class="form-control form-control-user"
                                        placeholder="Date de naissance de l'utilisateur">
                                </div>
                                <div class="form-group" >
                                    <input type="number" name="numero" class="form-control form-control-user"
                                        placeholder="Téléphone de l'utilisateur">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="adresse" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Adresse de l'utilisateur">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="profession" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Profession de l'utilisateur">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email de l'utilisateur">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Mot de passe de l'utilisateur">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password"  name="password_confirmation" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <button  class="btn btn-primary btn-user btn-block">
                                    Enregistrer
                                </button>
                                <hr>

                            </form>
                            <hr>

                            <div class="text-center">
                                <a class="small" href="{{ route('login') }}">Vous avez déjà un compte? Connectez vous!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendorr/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendorr/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendorr/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

</body>

</html>
