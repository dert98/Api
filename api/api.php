
<?php
// Content Type JSON
header("Content-type: application/json");
include("dbml.php");
$dbml = new dbManager("producto", "id_producto");
if (isset($_GET)) {
        $action = $_GET['action'];
        if ($action == 'r') {
                $dbml->select();
                $resul = $dbml->getArray();
        }
        if ($action == 'b') {
                $id = $_GET['id'];
                $dbml->select();
                $dbml->where('id_producto','=',$id);
                $resul = $dbml->getArray();
        }
}
print_r($resul);
echo json_encode($resul);
die();
?>