<?php include 'includes/header.php'; ?>
<?php
//create DB object
$db = new Database;
//creating query
$query = "SELECT posts.*, categories.name FROM posts
            INNER JOIN categories
            ON posts.category = categories.id";

$posts = $db->select($query);

?>
            
<table class="table table-striped">
    <tr>
        <th>Post #id</th>
        <th>Post Title</th>
        <th>Category</th>
        <th>Author</th>
        <th>Date</th>
    </tr>
    <tr>
        <?php while($row = $posts->fetch_assoc()) : ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><a href="edit_post.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['author']; ?></td>
                <td><?php echo formatDate($row['date']); ?></td>
            </tr>    
        <?php endwhile; ?>
    </tr>
</table>

<table class="table table-striped">
    <tr>
        <th>Category #id</th>
        <th>Category Name</th>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
</table>
            
            

<?php include 'includes/footer.php'; ?>
