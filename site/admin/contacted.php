<?php

session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

# Load data
require_once __DIR__ . "/../includes/glob.inc.php";




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Forms</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

<body class="animsition">
    <div class="page-wrapper">
        
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="header-button">
                            <div class="noti-wrap">
                                    <button type="button" class="btn btn-primary mb-1" data-toggle="modal" data-target="#saveChanges">
											Save Page Configuration
										</button>
                                    <div class="noti__item js-item-menu"></div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="<?= "../" . $data['design']['favicon'] ?>" alt="Admin" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?= $_SESSION['username']; ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                           
                                            <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                    <a href="../" target="_blank">
                                                        <i class="zmdi zmdi-home"></i>View Site</a>
                                                </div>
                                                <hr>
                                                <div class="account-dropdown__item">
                                                    <a href="index.php" target="_blankt">
                                                        <i class="zmdi zmdi-settings"></i>Design</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="content.php">
                                                        <i class="zmdi zmdi-money-box"></i>Edit Projects</a>
                                                </div>

                                                <div class="account-dropdown__item">
                                                    <a href="services.php">
                                                        <i class="zmdi zmdi-money-box"></i>Edit Services</a>
                                                </div>
                                                
                                                <hr>
                                                <div class="account-dropdown__item">
                                                    <a href="contacted.php">
                                                        <i class="zmdi zmdi-quote"></i>Contact Requests</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="login.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                
                                    <!-- modal large -->
			<div class="modal fade" id="saveChanges" tabindex="-1" role="dialog" aria-labelledby="saveChangesLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="saveChangesLabel">Are you sure you wish to continue?</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<p>
								You're about to make changes that will be updating the front end website, are you sure you wish to proceed?
							</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <form method="POST">
							    <input type="submit" name="saveChanges" class="btn btn-primary" value="Confirm">
                           
						</div>
					</div>
				</div>
			</div>
			<!-- end modal large -->
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                           
                         
                        <?php if (isset($_POST['saveChanges'])) {
                          #  echo json_encode($data);

                          
                         
                          $newData = json_decode(file_get_contents(__DIR__ . "/../includes/site.json"));
                            
 
              
                            array_push($newData->services, array('status'=> 1, 'pid'=>rand(1000,9999), 'pageName'=> $_POST['projectName'],'pageHref'=> 'index.php', 'content'=> $_POST['content'], 'description' => $_POST['smallTitle'], 'imagePath'=>$_POST['cover']));

                            $myfile = fopen(__DIR__ ."/../includes/site.json", "w") or die("Unable to open file!");
                            $txt = json_encode($newData);
                            fwrite($myfile, $txt);
                            fclose($myfile);
                            
                            echo '<meta http-equiv="refresh" content="0">';
                        } ?>

                          


                            
                            <div class="col-lg-12">

                                <div class="card">
                                <div class="card-header">
                                        <strong>Contact Us</strong> All Contact Requests
                                        <small class="form-text text-muted">Below is a list of all submissions to contact you through the site.</small>
                                    </div>
                                 
                                         <table>       
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Message</th>
                                            <th>Timestamp</th>
                                        </tr>
                                                  <?php 
                                                  
                                                  foreach ($conf->getContacts() as $contact) {  
                                                    echo "
                                                    <div class='col col-md-3'>
                                                      <tr>
                                                        <td>".$contact->name."</td>
                                                        <td>".$contact->email."</td>
                                                        <td>".$contact->phone."</td>
                                                        <td>".$contact->message."</td>
                                                        <td>".$contact->timestamp."</td>
                                                        </tr>
                                                        </div>
";

                                              
                                                    }
                                                        ?>
                                                        </table>

                                                  
                                 
                                </div>
                          
                          
                           
                        <div class="row ">
                            <div class="col-md-12 ">
                                <div class="copyright">
                                    <p>Copyright © 2023 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
