<?php
require('../model/database.php'); 
require('../model/todoitems.php'); 
require('../model/categories.php');
$action = filter_input(INPUT_POST, 'action'); 
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action'); 
    if ($action == NULL) {
        $action = 'list_tasks'; } } 
if ($action == 'list_tasks') {
    $category_id = filter_input(INPUT_GET, 'categoryID', FILTER_VALIDATE_INT);
    if ($category_id == NULL || $category_id == FALSE) { $category_id = 1;
}
    $category_name = get_category_name($categoryID); 
    $categories = get_categories();
    $products = get_tasks_by_category($categoryID); 
    include('list.php'); } 
else if ($action == 'delete_task') {
    $ItemNum = filter_input(INPUT_POST, 'ItemNum', FILTER_VALIDATE_INT);
    $category_id = filter_input(INPUT_POST, 
    'categoryID', FILTER_VALIDATE_INT);
if ($categoryID == NULL || $categoryID == FALSE || $ItemNum == NULL || $ItemNum == FALSE) { 
    $error = "Missing or incorrect product id or category id."; 
    include('../errors/error.php');
} }else { 
    delete_task($ItemNum); 
    header("Location: .?categoryID=$categoryID"); 
} else if ($action == 'show_add_form') { 
    $categories = get_categories(); 
    include('add.php'); } 
else if ($action == 'add_task') {
    $category_id = filter_input(INPUT_POST, 'categoryID', FILTER_VALIDATE_INT);
    $Title = filter_input(INPUT_POST, 'Title');  
    if ($category_id == NULL || $categoryID == FALSE ||  $Title == NULL ) { 
        $error = "Invalid product data. Check all fields and try again."; 
        include('../errors/error.php');
} else {
add_product($categoryID, $Title); header("Location: .?category_id=$categoryID"); 
} } ?>