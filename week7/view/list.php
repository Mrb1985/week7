<?php include '../view/header.php'; ?> 
<main>
<h1>Task List</h1> 
<aside>
 
<h2>Categories</h2> 
<nav> 
<ul>
<?php foreach ($categories as $category) : ?> 
    <li>
    <a href="?category_id=<?php echo $category['categoryID']; ?>"> 
        <?php echo $category['categoryName']; ?>
    </a> 
    </li>
<?php endforeach; ?> 
</ul> 
</nav>
</aside> 
<section> 
    <h2><?php echo $category_name; ?></h2> 
    <table> 
        <tr>
            
            <th>Title</th>
             
            <th>&nbsp;</th>
    </tr>
    <?php foreach ($tasks as $task) : ?> 
    <tr>
        
        <td><?php echo $task['Title']; ?></td> 
       
        <td><form action="." method="post"> 
            <input type="hidden" name="action" value="delete_task">
            <input type="hidden" name="ItemNum"value="<?php echo $task['ItemNum']; ?>"> 
<input type="hidden" name="category_id"value="<?php echo $task['categoryID']; ?>"> 
<input type="submit" value="Delete">
</form></td> 
</tr> <?php endforeach; ?> </table>
<p class="last_paragraph"> </p>
</section> </main> <?php include '../view/footer.php'; ?> <a href="index.php?action=show_add_form">Add task</a> 