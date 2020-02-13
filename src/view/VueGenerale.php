<?php

namespace GEG\view;

class VueGenerale
{
	function header()
	{
		$app = \Slim\Slim::getInstance();
		$urlHome = $app->urlFor('route_home');

		if($urlHome == "/") {
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
        <link rel="stylesheet" type="text/css" href="$urlHome/style/style.css">
		<link href="$urlHome/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  		<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="$urlHome/css/sb-admin-2.min.css" rel="stylesheet">


END;
		return ($html);
	}

	function navBarre()
	{

		$user = isset($_SESSION['user']['name']) ? $_SESSION['user']['name'] : "";
		$id = isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : 0;

		$app = \Slim\Slim::getInstance();
		$urlHome = $app->urlFor('route_home');

    if($urlHome == "/") {
      $urlHome = "";
    }


		$html = <<<END
		<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          

          <!-- Topbar Navbar -->
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

			<li class="nav-item dropdown no-arrow">
			<a class="nav-link dropdown-toggle" href="$urlHome" id="userDropdown" role="button" data-toggle="dropdown"
			  aria-haspopup="true" aria-expanded="false">
			  <span class="mr-2 d-none d-lg-inline text-gray-600 small" >Accueil</span>
			</a>
			<!-- Dropdown - User Information -->
			<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
			  <a class="dropdown-item" href="#">
				<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
				Profile
			  </a>
			  <a class="dropdown-item" href="#">
				<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
				Settings
			  </a>
			  <a class="dropdown-item" href="#">
				<i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
				Activity Log
			  </a>
			  <div class="dropdown-divider"></div>
			  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
				<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
				Logout
			  </a>
			</div>
		  </li>


            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="$urlHome/loginTest/$id" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">$user</span>
                <img class="img-profile rounded-circle" src="$urlHome/img/$id.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
END;
		return ($html);
	}

	public function js()
	{


		$app = \Slim\Slim::getInstance();
		$urlHome = $app->urlFor('route_home');

    if($urlHome == "/") {
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
			<span>Copyright &copy; Your Website <script>new Date(Date.now()).getYear()+1900</script></span>
		  </div>
		</div>
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
