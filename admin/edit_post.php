<?php include 'includes/header.php'; ?>

<?php
    $id = $_GET['id'];
    
    //create DB object
    $db = new Database();
    
    //create query for posts
    $query = "SELECT * FROM posts WHERE id = ". $id;

    //run query
    $post = $db->select($query)->fetch_assoc();


    //create query for Categories
    $query = "SELECT * FROM categories";

    //run query
    $categories = $db->select($query);

?>

<?php
    if (isset($_POST['submit'])) {
        //assign Variables
        $title = mysqli_real_escape_string($db->link, $_POST['title']);
        $body = mysqli_real_escape_string($db->link, $_POST['body']);
        $category = mysqli_real_escape_string($db->link, $_POST['category']);
        $author = mysqli_real_escape_string($db->link, $_POST['author']);
        $tags = mysqli_real_escape_string($db->link, $_POST['tags']);
        //simple validation
        if($title == '' || $body == '' || $category == '' || $author == '') {
            //set error
            $error = 'Please Fill out Required Fields';
        } else {
            $query = "UPDATE posts
                    SET 
                    title = '$title',
                    body = '$body',
                    category = '$category',
                    author = '$author',
                    tags = '$tags' 
                    WHERE id =" .$id;
            
            $update_row = $db->update($query);
        }
    }

?>

<?php
    if (isset($_POST['delete'])) {
        //create query
        $query = "DELETE FROM posts WHERE id = " .$id;
        $delete_row = $db->delete($query);
            
    }

?>

<form role="form" method="post" action="edit_post.php?id=<?php echo $id?>">
    <div class="form-group">
        <label>Post Title</label>
        <input name="title" type="text" class="form-control" placeholder="Eter title" value="<?php echo $post['title']; ?>">
    </div>
    
    <div class="form-group">
        <label>Post Body</label>
        <textarea name="body" class="form-control" placeholder="Enter Post Body">
            <?php echo $post['body']; ?>
        </textarea>
    </div>
    
    <div class="form-group">
        <label>Category</label>
        <select name="category" class="form-control">
            <?php while($row = $categories->fetch_assoc()) : ?>
                <?php if($row['id'] == $post['category']){
                   $selected = 'selected';        
                } else {
                    $selected = '';    
                }
            ?>
               <option value="<?php echo $row['id']; ?>" <?php echo $selected; ?>><?php echo $row['name']; ?></option>
            <?php endwhile; ?>
        </select>
    </div>
   
    <div class="form-group">
        <label>Author</label>
        <input name="author" type="text" class="form-control" placeholder="Enter Author Name" value="<?php echo $post['author']; ?>">
    </div>
    
    <div class="form-group">
        <label>Tags</label>
        <input name="tags" type="text" class="form-control" placeholder="Enter Tags for Article" value="<?php echo $post['tags']; ?>">
    </div>
    
    <input name="submit" type="submit" class="btn btn-default" value="Submit" />
    <a href="index.php" class="btn btn-default">Cancel</a>
    <input name="delete" type="submit" class="btn btn-danger" value="Delete" />
    
    <br /><br />
</form>


<?php include 'includes/footer.php'; ?>