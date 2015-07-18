<?php include 'includes/header.php'; ?>

<?php
    $id = $_GET['id'];
    
    //create DB object
    $db = new Database();
    
    //create query for posts
    $query = "SELECT * FROM categories WHERE id = ". $id;

    //run query
    $category = $db->select($query)->fetch_assoc();


    //create query for Categories
    $query = "SELECT * FROM categories";

    //run query
    $categories = $db->select($query);

?>

<?php
    if (isset($_POST['submit'])) {
        //assign Variables
        $name = mysqli_real_escape_string($db->link, $_POST['name']);
        
        //simple validation
        if($name == '') {
            //set error
            $error = 'Please Fill out Required Fields';
        } else {
            $query = "UPDATE categories
                    SET 
                    name = '$name'
                    WHERE id =" .$id;
            $update_row = $db->update($query);
        }
    }

?>


<?php
    if (isset($_POST['delete'])) {
        //create query
        $query = "DELETE FROM categories WHERE id = " .$id;
        $delete_row = $db->delete($query);
            
    }

?>

<form role="form" method="post" action="edit_category.php?id=<?php echo $id; ?>"> 
    <div class="form-group">
        <label for="exampleInputEmail1">Edit Category Name</label>
        <input name="name" type="text" class="form-control" placeholder=" Enter Category Name" value="<?php echo $category['name']; ?>">
    </div>
    <input name="submit" type="submit" class="btn btn-default" value="Submit" />
    <a href="index.php" class="btn btn-default">Cancel</a>
    <input name="delete" type="submit" class="btn btn-danger" value="Delete" />
    <br /><br />
</form>


<?php include 'includes/footer.php'; ?>