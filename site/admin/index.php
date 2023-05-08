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

                          
                            $site = array(
                                'mode' => $_POST['mode'],
                                'homeBg' => $_POST['homeBg'],
                                'line1' => $_POST['line1'],
                                'line2' => $_POST['line2'],
                                'about' => $_POST['about'],
                                'contact' => $_POST['contact'],
                                'contactable' => $_POST['contactable'],
                                'companyName' => $_POST['companyName'],
                                'contactEmail' => $_POST['contactEmail'],
                                'contactPhone' => $_POST['contactPhone'],
                                'address1' => $_POST['address1'],
                                'address2' => $_POST['address2'],
                                'town' => $_POST['town'],
                                'region' => $_POST['region'],
                                'postalCode' => $_POST['postalCode']
                        );

                        $contactTop = array(
                            array("cId" => 1, 'cName' => $_POST['heading1Title'], 'Content'=> $_POST['heading1Content']),
                            array("cId" => 2, 'cName' => $_POST['heading2Title'], 'Content'=> $_POST['heading2Content']),
                            array("cId" => 3, 'cName' => $_POST['heading3Title'], 'Content'=> $_POST['heading3Content']),
                        );

                        

                        $contactBottom = array(
                            array("cId" => 1, 'cName' => $_POST['heading4Title'], 'Content'=> $_POST['heading4Content']),
                            array("cId" => 2, 'cName' => $_POST['heading5Title'], 'Content'=> $_POST['heading5Content']),
                            array("cId" => 3, 'cName' => $_POST['heading6Title'], 'Content'=> $_POST['heading6Content'])
                            );

                            $contact = array(
                                "main" => $_POST['contact'],
                                "why" => $_POST['why'],
                                "tagline" => $_POST['tagline'],
                                "pageTop" => $contactTop,
                                "pageBottom" => $contactBottom,
                            );


                         $social = array(
                            'checkatrade' => $_POST['checkatrade'],
                            'facebook' => $_POST['facebook'],
                            'instagram' => $_POST['instagram'],
                            'twitter' => $_POST['twitter'],
                        );

                       $tags = array();
                       
                       $tagData = explode(",",$_POST['tags']);

                       foreach ($tagData as $tag) {
                           if ($tag != "") {   
                                array_push($tags, $tag);
                           }   
                        }

                        $design = array(
                            'favicon' => $data['design']['favicon'],
                            'lightlogo' => $data['design']['lightlogo'],
                            'darklogo' => $data['design']['darklogo'],
                            'background' => 'hex',
                            'theme1' => $_POST['theme1'],
                            'theme2' => $_POST['theme2'],
                                    );

                        

                            # Combine all data
                            $values = array(
                                "site" => $site,
                                "pages" => $data['pages'],
                                "contact" => $contact,
                                "socials" => $social,
                                "design" => $design,    
                                "services" => $data['services'],
                                "projects" => $data['projects'],
                                "tags"=> $tags
                            );

                            $myfile = fopen(__DIR__ ."/../includes/site.json", "w") or die("Unable to open file!");
                            $txt = json_encode($values);
                            fwrite($myfile, $txt);
                            fclose($myfile);
                            
                            echo '<meta http-equiv="refresh" content="0">';
                        } ?>

                            <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                        <strong>Configuration</strong> Site controller
                                        <small class="form-text text-muted">This will be applied across all pages</small>
                                    </div>
                                    <div class="card-body card-block">
                                         
                                        <!-- Site Enabled -->
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Site Status</label>
                                                </div>
                                                <div class="col-12 col-md-9">

                                                
                                                <select name="mode" class="form-control">
                                                <?php
                                                    if ($data['site']['mode'] == 1) {
                                                    echo "<option value='1'>Enabled</option><option disabled>-------------------</option>";
                                                    } else {
                                                    echo "<option value='0'>Disabled</option><option disabled>-------------------</option>";
                                                    } ?>
                                                    <option value='1'>Enabled</option>
                                                    <option value='0'>Disabled</option>
                                                </select>
                                                </div>
                                        </div>


                                        <!-- Contactable -->
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Contactable</label>
                                                </div>
                                                <div class="col-12 col-md-9">

                                                
                                                <select name="contactable" class="form-control">
                                                <?php
                                                    if ($data['site']['contactable'] == 1) {
                                                    echo "<option value='1'>Yes</option><option disabled>-------------------</option>";
                                                    } else {
                                                    echo "<option value='0'>No</option><option disabled>-------------------</option>";
                                                    } ?>
                                                    <option value='1'>Yes</option>
                                                    <option value='0'>No</option>
                                                </select>
                                                </div>
                                        </div>


                                         <!-- Company Name -->
                                         <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Company Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="companyName" id="text-input" value="<?= $data['site']['companyName'] ?>" class="form-control">
                                                </div>
                                        </div>


                                        <!-- Contact Tagline -->
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Contact Tagline</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="tagline" id="text-input" value="<?= $data['contact']['tagline'] ?>" class="form-control">
                                                </div>
                                        </div>

                                         <!-- Contact Tagline -->
                                         <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Home BG</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="homeBg" id="text-input" value="<?= $data['site']['homeBg'] ?>" class="form-control">
                                                </div>
                                        </div>

                                        <!-- Contact Tagline -->
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Home Line 1</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="line1" id="text-input" value="<?= $data['site']['line1'] ?>" class="form-control">
                                                </div>
                                        </div>

                                         <!-- Contact Tagline -->
                                         <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Home Line 2</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="line2" id="text-input" value="<?= $data['site']['line2'] ?>" class="form-control">
                                                </div>
                                        </div>


                                        <!-- Contact Email -->
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Contact Email</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="contactEmail"  value="<?= $data['site']['contactEmail'] ?>" class="form-control">
                                                </div>
                                        </div>

                                        <!-- Contact Phone -->
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Contact Phone</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="contactPhone"  value="<?= $data['site']['contactPhone'] ?>" class="form-control">
                                                </div>
                                        </div>


                                        <!-- Address 1 -->
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Address 1</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="address1"  value="<?= $data['site']['address1'] ?>" class="form-control">
                                                </div>
                                        </div>

                                        <!-- Address 2 -->
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Address 2</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="address2" value="<?= $data['site']['address2'] ?>" class="form-control">
                                                </div>
                                        </div>

                                        <!-- Town -->
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Town</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="town" value="<?= $data['site']['town'] ?>" class="form-control">
                                                </div>
                                        </div>

                                        <!-- Region -->
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Region</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="region" value="<?= $data['site']['region'] ?>" class="form-control">
                                                </div>
                                        </div>

                                        <!-- Post Code -->
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Postal Code</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="postalCode" value="<?= $data['site']['postalCode'] ?>" class="form-control">
                                                </div>
                                        </div>
                                       
                                        
                                    </div>
                                 
                                </div>
                                <div class="card">
                                    
                                <div class="card-header">
                                        <strong>Configuration</strong> Site Design
                                        <small class="form-text text-muted">This will be applied across all pages</small>
                                    </div>
                                    <div class="card-body card-block">
                                        
                                       

                                         <!-- Site Theme 1 -->
                                         <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Site Theme 1</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="color" id="text-input" name="theme1" value="<?= $data['design']['theme1'] ?>" class="form-control">
                                                </div>
                                        </div>

                                        <!-- Site Theme 2 -->
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Site Theme 2</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="color" id="text-input" name="theme2" value="<?= $data['design']['theme2'] ?>" class="form-control">
                                                </div>
                                        </div>

                                        <!-- Site Theme 2 -->
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Fav Icon</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <img src="<?= "../" . $data['design']['favicon'] ?>"> <?= $data['design']['favicon'] ?>
                                                </div>
                                        </div>

                                         <!-- Site Theme 2 -->
                                         <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Light Logo</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <img src="<?= "../" . $data['design']['lightlogo'] ?>"> <?= $data['design']['lightlogo'] ?>
                                                </div>
                                        </div>

                                        <!-- Site Theme 2 -->
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Dark Logo</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <img src="<?= "../" . $data['design']['darklogo'] ?>"> <?= $data['design']['darklogo'] ?>
                                                </div>
                                        </div>

                                        


                                       
                                        

                                        
                                    </div>
                                  
                                </div>

                                <div class="card">
                                <div class="card-header">
                                        <strong>Social Media</strong> Let your clients find you
                                        <small class="form-text text-muted">This will be applied across all pages</small>
                                    </div>
                                    <div class="card-body card-block">
                                    
                                        
                                        <!-- Facebook -->
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Facebook</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="facebook" value="<?= $data['socials']['facebook'] ?>" class="form-control">
                                                </div>
                                        </div>


                                        <!-- Instagram -->
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Instagram</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="instagram" value="<?= $data['socials']['instagram'] ?>" class="form-control">
                                                </div>
                                        </div>


                                        <!-- Twitter -->
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Twitter</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="twitter" value="<?= $data['socials']['twitter'] ?>" class="form-control">
                                                </div>
                                        </div>

                                        <!-- Checkatrade -->
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Checkatrade</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="checkatrade" value="<?= $data['socials']['checkatrade'] ?>" class="form-control">
                                                </div>
                                        </div>

                                       
                                        
                                    </div>
                                 
                                </div>




                                <div class="card">
                                <div class="card-header">
                                        <strong>Site Handler</strong> Wipe your site!
                                        <small class="form-text text-muted">This will remove everything and set them back to its default setting - which is irreversable.</small>
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="row form-group">
                                                <a href="../includes/deploy.inc.php"  style="margin-left:15px" class="btn btn-danger mb-1" name="reset_site">
                                                    Reset website to default + Delete chat logs
                                                </a>
                                        </div>


                                    </div>
                                 
                                </div>
                                                </div>


                                                


                            
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>About Us </strong> Main Content
                                        <small class="form-text text-muted">This will appear on the contact us page</small>
                                    </div>
                                    <div class="card-body card-block">
                                        
                                    <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">About us</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="about" id="textarea-input" rows="3" placeholder="" class="form-control"><?= $data['site']['about'] ?></textarea>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Why us</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="why" id="textarea-input" rows="3" placeholder="" class="form-control"><?= $data['contact']['why'] ?></textarea>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Contact Details</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="contact" id="textarea-input" rows="2" placeholder="" class="form-control"><?= $data['site']['contact'] ?></textarea>
                                                </div>
                                            </div>
                                       

                                            <hr>
                                                  
                                    <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Heading 1 Title</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="heading1Title" value="<?= $data['contact']['pageTop'][0]['cName'] ?>" class="form-control">
                                                </div>
                                            </div>
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Heading 1 Content</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="heading1Content" id="textarea-input" " rows="3" placeholder="" class="form-control"><?= $data['contact']['pageTop'][0]['Content'] ?></textarea>
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Heading 2 Title</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="heading2Title" value="<?= $data['contact']['pageTop'][1]['cName'] ?>" class="form-control">
                                                </div>
                                            </div>
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Heading 2 Content</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="heading2Content" id="textarea-input" rows="3" placeholder="" class="form-control"><?= $data['contact']['pageTop'][1]['Content'] ?></textarea>
                                                </div>
                                            </div>

                                            
                                            <hr>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Heading 3 Title</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="heading3Title" value="<?= $data['contact']['pageTop'][2]['cName'] ?>" class="form-control">
                                                </div>
                                            </div>
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Heading 3 Content</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="heading3Content" id="textarea-input" rows="3" placeholder="" class="form-control"><?= $data['contact']['pageTop'][2]['Content'] ?></textarea>
                                                </div>
                                            </div>


                                        
                                    </div>
                                  
                                </div>

                                
                                <div class="card">
                                <div class="card-header">
                                        <strong>About Us </strong> Bottom Content
                                        <small class="form-text text-muted">This will appear on the contact us page</small>
                                    </div>
                                    <div class="card-body card-block">
                                    
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Heading 1 Title</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="heading4Title" value="<?= $data['contact']['pageBottom'][0]['cName'] ?>" class="form-control">
                                                </div>
                                            </div>
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Heading 1 Content</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="heading4Content" id="textarea-input" rows="3" placeholder="" class="form-control"><?= $data['contact']['pageBottom'][0]['Content'] ?></textarea>
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Heading 2 Title</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="heading5Title" value="<?= $data['contact']['pageBottom'][1]['cName'] ?>" class="form-control">
                                                </div>
                                            </div>
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Heading 2 Content</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="heading5Content" id="textarea-input" rows="3" placeholder="" class="form-control"><?= $data['contact']['pageBottom'][1]['Content'] ?></textarea>
                                                </div>
                                            </div>

                                            
                                            <hr>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Heading 3 Title</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="heading6Title" value="<?= $data['contact']['pageBottom'][2]['cName'] ?>" class="form-control">
                                                </div>
                                            </div>
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Heading 3 Content</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="heading6Content" id="textarea-input" rows="3" placeholder="" class="form-control"><?= $data['contact']['pageBottom'][2]['Content'] ?></textarea>
                                                </div>
                                            </div>


                                        
                                    </div>
                                 
                                </div>


                                <div class="card">
                                <div class="card-header">
                                        <strong>Site Tags </strong> For SEO
                                        <small class="form-text text-muted">Shown at bottom of page, split by comma</small>
                                    </div>
                                    <div class="card-body card-block">
                                    
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Tags</label>
                                                </div>

                                                
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="tags" placeholder="Enter,Your,Tags,Here" value="<?php foreach ($data['tags'] as $tag) {  echo $tag .",";  } ?>" class="form-control">
                                                </div>
                                            </div>
                                      

                                                </form>


                                        
                                    </div>
                                 
                                </div>

                              
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
