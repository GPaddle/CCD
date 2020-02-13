<?php

namespace GEG\view;

class VueGenerale
{
	function header()
	{
		$app = \Slim\Slim::getInstance();
		$urlHome = $app->urlFor('route_home');

		if ($urlHome == "/") {
			$urlHome = "";
		}

		$html = <<<END
		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
	  
		<title>Gestion personnel</title>
	  
		<!-- Custom fonts for this template-->
		<link href="$urlHome/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <meta charset="utf-8">

  <!-- Custom styles for this template-->
  <link href="$urlHome/css/sb-admin-2.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="$urlHome/style/style.css">


END;
		return ($html);
	}

	function navBarre()
	{

		$user = isset($_SESSION['user']['name']) ? $_SESSION['user']['name'] : "";
		$id = isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : 0;

		$app = \Slim\Slim::getInstance();
		$urlHome = $app->urlFor('route_home');
		$urlPagePerso = $app->urlFor('route_loginTestId', ['id' => $id]);

		$urlDeconnexion = $app->urlFor('route_deconnexion');

		//		if (isset($_SESSION['user'])) {
		$usrSection = `
		
            `;
		//		}

		if ($urlHome == "/") {
			$urlHome = "";
		}


		$siCo = isset($_SESSION['user'])? <<<END

		<!-- Nav Item - User Information -->
		<li class="nav-item dropdown no-arrow">
		  <a class="nav-link dropdown-toggle" href="{$urlHome}loginTest/$id" id="userDropdown" role="button" data-toggle="dropdown"
			aria-haspopup="true" aria-expanded="false">
			<div class="mr-2 d-none d-lg-inline text-gray-600 small">$user</div>
		<div class="topbar-divider d-none d-sm-block"></div>
			<img class="img-profile rounded-circle" src="{$urlHome}img/$id.jpg">
		  </a>

		  <!-- Dropdown - User Information -->
		  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
			<a class="dropdown-item" href="$urlPagePerso">
			  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
			  Profil
			</a>
			<a class="dropdown-item" href="$urlDeconnexion">
			  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
			  Logout
			</a>
		  </div>
		</li>
END
: "";

		$html = <<<END
		<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          

          <!-- Topbar Navbar -->
          <a class="nav-link" href="$urlHome">
			  <span class="mr-2  d-lg-inline text-gray-600 h3" >Accueil</span>
			</a>
				<img class=" logo" src="{$urlHome}img/logo.svg">
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                      aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

			<li class="nav-item ">
			
			
		  </li>

		  $siCo

          </ul>

        </nav>
END;
		return ($html);
	}

	public function js()
	{

		$app = \Slim\Slim::getInstance();
		$urlHome = $app->urlFor('route_home');

		if ($urlHome == "/") {
			$urlHome = "";
		}

		$html = <<<END
    <!-- Bootstrap core JavaScript-->
  <!--script src="$urlHome/vendor/jquery/jquery.min.js"></script-->
  <script src="$urlHome/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="$urlHome/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <!--script src="$urlHome/js/sb-admin-2.min.js"></script-->

  <!-- Page level custom scripts -->
  <!--script src="$urlHome/js/demo/chart-area-demo.js"></script>
  <script src="$urlHome/js/demo/chart-pie-demo.js"></script-->
END;

		return $html;
	}

	function footer()
	{
		$html = <<<END
		
		<footer class="sticky-footer bg-white">
		<div class="container my-auto">
		  <div class="copyright text-center my-auto">
			<span id="date"></span>
		  </div>
		</div>
		
		<script>
		let txt="Copyright &copy; Your Website "
		txt+=new Date(Date.now()).getYear()+1900;

		document.querySelector("#date").innerHTML=txt;
		</script>
	  </footer>
END;
		return ($html);
	}


	public function render($html)
	{

		$header = $this->header();
		$footer = $this->footer();
		$navBarre = $this->navBarre();
		$js = $this->js();

		$general = <<<END

		$header
		<body>
			$navBarre
			<section class="content">
				$html
			</section>
			$footer


			$js
		</body>
END;

		echo $general;
	}
}
