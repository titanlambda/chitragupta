<?php
    include "../includes/config.php";
    if(isset($_POST["usage"])){
        switch($_POST["usage"]){
            case 1: echo populate_data($mysqli);
        break;
        case 2: echo get_domain($mysqli);
    break;
        case 3: echo get_subdomain($mysqli);
    break;
    case 4: echo add_domain($mysqli);
    break;
    case 5: echo del_domain($mysqli);
    break;
    case 6: echo map_ip($mysqli);
    break;
        }
    }else echo json_encode("{error:true,message:'invalid usage'}");

    function get_domain($mysqli){
        $data = array();
        $domai = $mysqli->prepare("SELECT `id`,`name` FROM `domains` WHERE `isDeleted`=0");
        $domai->execute();
        $res = $domai->get_result();
        // echo $res->num_rows;
        if($res->num_rows > 0){
            $count = $res->num_rows;
            while($count--){
                $data[] = $res->fetch_assoc();
            }
            // print_r($data);
            return json_encode(array("error"=>"false","data"=>$data));
        }
        return json_encode(array("error"=>"true","data"=>$data));
    }

    function map_ip($mysqli){
        $get_ip = $mysqli->prepare("SELECT `value` FROM `ip_table` WHERE `subdomain` = ?");
        $get_ip->bind_param("i",$_POST["subid"]);
        $get_ip->execute();
        $res = $get_ip->get_result();
        if($res->num_rows > 0){
            $res = $res->fetch_assoc();
            return $res["value"];
        }else{
            $_domain = "www.".trim($_POST["subdomain"]);
            $_domain = gethostbyname($_domain);
            $set_ip = $mysqli->prepare("INSERT INTO `ip_table`(`domain`, `subdomain`, `value`) VALUES (?,?,?)");
            $set_ip->bind_param("iis",$_POST["domain"],$_POST["subid"],$_domain);
            $set_ip->execute();
            return $_domain;

        }
        // $domain = "baidu1.com";
    }

    function get_subdomain($mysqli){

        //declaring data array;
        $data = array();

        //gettting domain name from database;
        $get_domain_name = $mysqli->prepare("SELECT `name` FROM `domains` WHERE `id` = ? LIMIT 1");
        $get_domain_name->bind_param("i",$_POST["domain"]);
        $get_domain_name->execute();
        $res = $get_domain_name->get_result();
        $res = $res->fetch_assoc();

        //fetching all sundomains from api and meriging to  make array
        $subs = file_get_contents("https://chitragupta.herokuapp.com/?domain=".$res["name"]);
        $subs = explode(",",substr($subs,1,strlen($subs)-2));

        //fetching total number of subdomain from database
        $subd = fetch_subdomain($mysqli,true);
        if($subd > 0){
            
            //inserting new values in case our database is not up to date
            if($subd < sizeof($subs)){
                $data = populate_data($mysqli,array_slice($subs,$subd-1),$_POST["domain"]);
            }
        }else populate_data($mysqli,$subs,$_POST["domain"]);

        //getting updated value from database;
        $data = fetch_subdomain($mysqli,false);

        //setting error value based on either we have data or not.
        if(sizeof($data) > 0) $error = false;
        else $error = true;

        //returning the subdomain finally!!
        return json_encode(array("error"=>$error,"data"=>$data));
    }
    function fetch_subdomain($mysqli,$rt){
        $get_domain = $mysqli->prepare("SELECT `subdomain`,`ip_address`,`domain`,`id` FROM `dns_lookup` WHERE `domain` = ?");
        $get_domain->bind_param("s",$_POST["domain"]);
        $get_domain->execute();
        $res = $get_domain->get_result();

        //returning Count in case $rt is true else $data;
        if($rt){
            // echo  $res->num_rows;
            return $res->num_rows;
        }
        else{
            $data = array();
            $count = $res->num_rows;
            while($count--){
                $data[] = $res->fetch_assoc();
            }
            return $data ;
        }
        return $data;
    }
    function populate_data($mysqli,$data,$domain){
        // print_r($data);
        $populate = $mysqli->prepare("INSERT INTO `dns_lookup`(`subdomain`, `domain`) VALUES (?,?)");
        foreach ($data as $name) {
            // echo $name."\n";
            $name = str_replace('"','',$name);
            $populate->bind_param("si",$name,$domain);
            $populate->execute();
            $res = $populate->get_result();
        }
        return true;
    }
    function add_domain($mysqli){
        // print_r($_POST);
        $add = $mysqli->prepare("INSERT INTO `domains`(`name`) VALUES (?)");
        $add->bind_param("s",$_POST["domain"]);
        $add->execute();
        $res = $add->get_result();
        if($add->affected_rows > 0) return json_encode(array("error"=>"false"));
        return json_encode(array("error"=>"false", "message"=>$mysqli->error));
    }
    function del_domain($mysqli){
        $del=$mysqli->prepare("UPDATE `domains` SET `isDeleted`=1 WHERE `id`=?");
        $del->bind_param("i",$_POST["domain"]);
        $del->execute();
        $res = $del->get_result();
        if($del->affected_rows > 0) return json_encode(array("error"=>"false"));
        return json_encode(array("error"=>"false", "message"=>$mysqli->error));
    }
?>