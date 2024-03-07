<?php
function get_tasks_by_category($categoryID) { global $db;
$query = 'SELECT * FROM todoitems WHERE categoryID = :categoryID ORDER BY ItemNum';
$statement = $db->prepare($query);
$statement->bindValue(':categoryID', $categoryID); 
$statement->execute();
$products = $statement->fetchAll(); 
$statement->closeCursor(); 

return $products;
}
function get_task($ItemNum) { global $db;
$query = 'SELECT * FROM todoitems WHERE ItemNum = :ItemNum'; $statement = $db->prepare($query);
$statement->bindValue(':ItemNum', $ItemNum); 
$statement->execute(); 
$item = $statement->fetch(); 
$statement->closeCursor(); return $item;
}
function delete_task($ItemNum) { global $db;
    $query = 'DELETE FROM todoitems
    WHERE ItemNum = :ItemNum'; $statement = $db->prepare($query);
    $statement->bindValue(':ItemNum', $ItemNum); 
    $statement->execute(); 
    $statement->closeCursor();
    }
    function add_task($category_id, $Title) { global $db;
    $query = 'INSERT INTO todoitems (categoryID, Title) VALUES
    (:category_id, :Title)'; 
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id); 
    $statement->bindValue(':Title', $Title); 
     $statement->execute(); $statement->closeCursor();
    } ?>