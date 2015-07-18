<?php include 'includes/header.php'; ?>

<?php
   
    //create DB object
    $db = new Database();


    if (isset($_POST['submit'])) {
        //assign Variables
        $name = mysqli_real_escape_string($db->link, $_POST['name']);
        
        //simple validation
        if($name == '') {
            //set error
            $error = 'Please Fill out Required Fields';
        } else {
            $query = "INSERT INTO categories
                        (name)
                    VALUES ('$name')";
            
            $update_row = $db->update($query);
        }
    }

?>


<form role="form" method="post" action="add_category.php"> 
    <div class="form-group">
        <label for="exampleInputEmail1">Category Name</label>
        <input name="name" type="text" class="form-control" placeholder=" Enter Category Name">
    </div>
    <input name="submit" type="submit" class="btn btn-default" value="Submit" />
    <br /><br />
</form>


<?php include 'includes/footer.php'; ?>