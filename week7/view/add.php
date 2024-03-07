<?php include '../view/header.php'; ?> 
<main>
<h1>Add task</h1>
<form action="." method="post" id="add_task_form"> 
    <input type="hidden" name="action" value="add">
<label>Category:</label> 
<select name="categoryID">
<?php foreach ( $categories as $category ) : ?> 
    <option value="<?php echo $category['categoryID']; ?>"> 
        <?php echo $category['categoryName']; ?>
    </option>
<?php endforeach; ?> 
</select> 
<br>
 
<br>

<label>Title:</label>
<input type="text" name="Title" /> 
<br>

<input type="submit" value="Add" /> 
<br>
</form>
<p class="last_paragraph"> </p>
</main> 
<?php include '../view/footer.php'; ?> <a href="?action=list_products">View task List</a> 