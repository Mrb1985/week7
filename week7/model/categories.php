<?php
function get_categories() { global $db;
$query = 'SELECT * FROM categories ORDER BY categoryID';
$statement = $db->prepare($query); $statement->execute();
$category = $statement->fetchAll(); 
$statement->closeCursor(); 
return $category;
}
function get_category_name($categoryID) { global $db;
$query = 'SELECT * FROM categories WHERE categoryID = :categoryID'; $statement = $db->prepare($query);
$statement->bindValue(':categoryID', $categoryID); $statement->execute();
$category = $statement->fetch(); 
$statement->closeCursor();
$category_name = $category['categoryName']; 
return $category_name;
} ?>