<?php
require '../config.php';
$sql "DELETE FROM personne WHERE id = :id"; $db = config::getConnexion();
try {
$query = $db->prepare($sql);
$query->bindParam(1, $id, PDO:: PARAM_INT);
$query->execute();
$rowCount = $query->rowCount();
if ($rowCount > 0) {
echo "Delete successful. $rowCount rows affected.";
} else {
}
echo "No rows deleted.";
} catch (Exception $e) {
}
?>
die('Error:' . $e->getMessage());