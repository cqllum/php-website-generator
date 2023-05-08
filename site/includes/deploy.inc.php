<?php

/*
 * This class is used to re-set the website.
*/

class deploy {
    function generate(){

            # Prepare Site data
            $site = array(
                    'mode' => 1,
                    'homeBg'=>'assets/img/slider/slider-bg-1.jpg',
                    'line1'=>'Heading 1',
                    'line2'=>'Heading 2',
                    'about' => 'About us text here',
                    'contact' => 'Contact us text here',
                    'contactable' => 1,
                    'companyName' => 'CompanyName',
                    'contactEmail' => 'test@example.com',
                    'contactPhone' => '1232123123',
                    'address1' => 'Address1',
                    'address2' => 'Address2',
                    'town' => 'Town',
                    'region' => 'Region',
                    'postalCode' => 'Postal'
            );
            
            
            # Prepare navigation pages
            $pages = array(
                array('id'=> 0, 'status'=> 1, 'pageName'=> 'Home','pageHref'=> 'index.php', 'description' => 'Homepage'),
                array('id'=> 1, 'status'=> 1, 'pageName'=> 'About','pageHref'=> 'about.php', 'description' => 'About us'),
                array('id'=> 2, 'status'=> 1, 'pageName'=> 'Services','pageHref'=> 'services.php', 'description' => 'Services'),
                array('id'=> 3, 'status'=> 1, 'pageName'=> 'Projects','pageHref'=> 'work.php', 'description' => 'Work/Projects'),
                array('id'=> 4, 'status'=> 1, 'pageName'=> 'Contact Us','pageHref'=> 'contact.php', 'description' => 'Contact Us'),
            );
            
            # Prepare services
            $services = array(
                array('status'=> 1, 'pid'=>'', 'pageName'=> 'Service Name','pageHref'=> 'index.php', 'content'=> 'Content', 'description' => 'Description', 'imagePath'=>'assets/img/imagebox/image-box-1-370x215.jpg'),
                array('status'=> 1, 'pid'=>'', 'pageName'=> 'Service Name','pageHref'=> 'index.php', 'content'=> 'Content', 'description' => 'Description', 'imagePath'=>'assets/img/imagebox/image-box-2-370x215.jpg'),
                array('status'=> 1, 'pid'=>'', 'pageName'=> 'Service Name','pageHref'=> 'index.php', 'content'=> 'Content', 'description' => 'Description', 'imagePath'=>'assets/img/imagebox/image-box-3-370x215.jpg'),
            );


            # Declare project categories for grouping
            $categories = array("Test", "Construction", "Category3", 'Category4');

            # Projects services
            $projects = array(
                array('status'=> 1, 'projectId' => 1, 'projectCover'=>'assets/img/project/project-1-370x245.jpg', 'projectName'=> 'Project Name','projectLocation'=> 'United Kingdom', 'projectType'=> 'Test', 'projectDetails' => 'Here is some details on the project', 'projectBudget' => '30,000', 'projectCompleted' => '2023'),
                array('status'=> 1, 'projectId' => 2, 'projectCover'=>'assets/img/project/project-2-370x245.jpg', 'projectName'=> 'Project Name','projectLocation'=> 'United Kingdom', 'projectType'=> 'Test', 'projectDetails' => 'Here is some details on the project', 'projectBudget' => '30,000', 'projectCompleted' => '2023'),
                array('status'=> 1, 'projectId' => 3, 'projectCover'=>'assets/img/project/project-3-370x245.jpg', 'projectName'=> 'Project Name','projectLocation'=> 'United Kingdom', 'projectType'=> 'Test', 'projectDetails' => 'Here is some details on the project', 'projectBudget' => '30,000', 'projectCompleted' => '2023'),
            );
            
            # Contact data
            $contactTop = array(
                array("cId" => 1, 'cName' => 'Header1', 'Content'=>'Description here'),
                array("cId" => 2, 'cName' => 'Header2', 'Content'=>'Description here'),
                array("cId" => 3, 'cName' => 'Header3', 'Content'=>'Description here'),
            );

            # Contact data
            $contactBottom = array(
                array("cId" => 1, 'cName' => 'Header1', 'Content'=>'Description here'),
                array("cId" => 2, 'cName' => 'Header2', 'Content'=>'Description here'),
                array("cId" => 3, 'cName' => 'Header3', 'Content'=>'Description here'),
            );

            $contact = array(
                "main" => 'Description here',
                "why" => 'Description here',
                "tagline" => 'Tagline here',
                "pageTop" => $contactTop,
                "pageBottom" => $contactBottom,
            );


            # Tags for SEO
            $tags = array("tag1", "tag2");
            
            # Prepare social media
            $social = array(
                            'checkatrade' => 'url',
                            'facebook' => 'url',
                            'instagram' =>'url',
                            'twitter' => 'url',
                        );
            
            $design = array(
                'favicon' => 'assets/icon/favicon.png',
                'lightlogo' => 'assets/img/logo.png',
                'darklogo' => 'assets/img/logo-dark.png',
                'background' => 'hex',
                'theme1' => '#ffc30c',
                'theme2' => '#ffc30c',
                        );
            
            # Combine all data
            $data = 
                array(
                    "site" => $site,
                    "pages" => $pages,
                    "contact" => $contact,
                    "socials" => $social,
                    "design" => $design,
                    "services" => $services,
                    "category" => $categories,
                    "projects" => $projects,
                    "tags"=> $tags
                );
            
            
            $myfile = fopen("site.json", "w") or die("Unable to open file!");
            $txt = json_encode($data);
            fwrite($myfile, $txt);
            fclose($myfile);

            $myfile = fopen("contacts.json", "w") or die("Unable to open file!");
            $txt = '[]';
            fwrite($myfile, $txt);
            fclose($myfile);
            

            return $data;
            
            
    }


}

$site = new deploy();
$site->generate();
header("Location: ../admin");
?>

