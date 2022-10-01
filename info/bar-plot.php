<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header("Access-Control-Allow-Methods: POST");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Access-Control-Allow-Origin");
include('../class/database.php');
class Details extends database
{
    public function showDetails()
    {
        $sql = "SELECT count(if(microbiome='Extreme',1,null)) as Microbiome, count(if(extremophile='Yes',1,null)) as Extremophile from scientific_tbl";
        $res = mysqli_query($this->link, $sql);
        $arr = array();
        if ($res) {
            foreach ($res as $row) {
                $arr[] = $row;
            }
            return json_encode($arr);
        } else {
            return '';
        }
    }
}
$obj = new Details;
echo $obj->showDetails();