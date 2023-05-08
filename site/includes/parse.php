<?php


$folder = "/site/";


class parseFile {
    
function prepareSite() {
    $produce = json_decode(file_get_contents(__DIR__ . "/site.json"));

# Prepare Site data
$site = array(
        'mode' => $produce->site->mode,
        'homeBg' => $produce->site->homeBg,
        'line1' => $produce->site->line1,
        'line2' => $produce->site->line2,
        'about' => $produce->site->about,
        'contact' => $produce->site->contact,
        'contactable' => $produce->site->contactable,
        'companyName' => $produce->site->companyName,
        'contactEmail' => $produce->site->contactEmail,
        'contactPhone' => $produce->site->contactPhone,
        'address1' => $produce->site->address1,
        'address2' => $produce->site->address2,
        'town' => $produce->site->town,
        'region' => $produce->site->region,
        'postalCode' => $produce->site->postalCode

    );

    $pages = array();
    foreach ($produce->pages as $page) {
        array_push($pages, array('id'=> $page->id, 'status'=> $page->status, 'pageName'=> $page->pageName,'pageHref'=> $page->pageHref, 'description' => $page->description));
    }

# Prepare services

$services = array();
foreach($produce->services as $service) {
    array_push($services, array('pid' => $service->pid, 'status'=> $service->status, 'pageName'=> $service->pageName,'pageHref'=> $service->pageHref, 'content' => $service->content, 'description' => $service->description, 'imagePath'=> $service->imagePath));  
}

$projects = array();
foreach($produce->projects as $project) {
    array_push($projects, array('status'=> $project->status, 'projectId' => $project->projectId, 'projectCover'=>$project->projectCover, 'projectName'=> $project->projectName,'projectLocation'=> $project->projectLocation, 'projectType'=> $project->projectType, 'projectDetails' => $project->projectDetails, 'projectBudget' => $project->projectBudget, 'projectCompleted' => $project->projectCompleted));  
}


$contactTop = array();
foreach($produce->contact->pageTop as $contents) {
    array_push($contactTop, array("cId" => $contents->cId, 'cName' => $contents->cName, 'Content'=>$contents->Content));
}

$contactBottom = array();
foreach($produce->contact->pageBottom as $contents) {
    array_push($contactBottom, array("cId" => $contents->cId, 'cName' => $contents->cName, 'Content'=>$contents->Content));
}

$contact = array(
    "main" => $produce->contact->main,
    "why" => $produce->contact->why,
    "tagline" => $produce->contact->tagline,
    "pageTop" => $contactTop,
    "pageBottom" => $contactBottom,
);

# Tags for SEO
$tags = array();
foreach ($produce->tags as $tag) {
    array_push($tags, $tag);
}


# Prepare social media

$social = array(
                'checkatrade' => $produce->socials->checkatrade,
                'facebook' => $produce->socials->facebook,
                'instagram' => $produce->socials->instagram,
                'twitter' => $produce->socials->twitter,
            );

$design = array(
    'favicon' => $produce->design->favicon,
    'lightlogo' => $produce->design->lightlogo,
    'darklogo' => $produce->design->darklogo,
    'background' => $produce->design->background,
    'theme1' => $produce->design->theme1,
    'theme2' => $produce->design->theme2,
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
        "projects" => $projects,
        "tags"=> $tags
    );


return $data;

}

function activePage($page) {
    global $data;
    global $folder;

    $file = str_replace($folder, "", $page);

    if ($file == "") {
        $file = "index.php";
    } 

    return $file;

}



function getTitle($page) {
    global $data;
    global $folder;

    $file = str_replace($folder, "", $page);

    if ($file == "") {
        $file = "index.php";
    } 

    foreach ($data['pages'] as $page) {
        if ($page['pageHref'] == $file) {
            return $page['pageName'];
        }
    }

}


function getDescription($page) {
    global $data;
    global $folder;

    $file = str_replace($folder, "", $page);

    if ($file == "") {
        $file = "index.php";
    } 

    foreach ($data['pages'] as $page) {
        if ($page['pageHref'] == $file) {
            return $page['description'];
        }
    }

}


function deleteProject($projectID) {

    # Open up JSON
    $json = json_decode(file_get_contents(__DIR__ . "/site.json"));

    $projects = array();
    
    foreach($json->projects as $k) {
        if ($k->projectId == $projectID) {
            # Dont add to new array
        } else {
            array_push($projects, $k);
        }
    }

    $newVals = array(
        "site" => $json->site,
        "pages" => $json->pages,
        "contact" => $json->contact,
        "socials" => $json->socials,
        "design" => $json->design,
        "services" => $json->services,
        "projects" => $projects,
        "tags"=> $json->tags
    );


    $myfile = fopen(__DIR__ ."/site.json", "w") or die("Unable to open file!");
    $txt = json_encode($newVals);
    fwrite($myfile, $txt);
    fclose($myfile);

    return true;
}


function deleteService($serviceId) {

    # Open up JSON
    $json = json_decode(file_get_contents(__DIR__ . "/site.json"));

    $services = array();
    
    foreach($json->services as $s) {
        if ($s->pid == $serviceId) {
            # Dont add to new array
        } else {
            array_push($services, $s);
        }
    }

    $newVals = array(
        "site" => $json->site,
        "pages" => $json->pages,
        "contact" => $json->contact,
        "socials" => $json->socials,
        "design" => $json->design,
        "services" => $services,
        "projects" => $json->projects,
        "tags"=> $json->tags
    );


    $myfile = fopen(__DIR__ ."/site.json", "w") or die("Unable to open file!");
    $txt = json_encode($newVals);
    fwrite($myfile, $txt);
    fclose($myfile);

    return true;
}


function getContacts() {
    $json = json_decode(file_get_contents(__DIR__ . "/contacts.json"));
    return $json;
}







}



?>
