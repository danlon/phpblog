<?php include 'includes/header.php'; ?>


<form role="form" method="post" action="add_category.php"> 
    <div class="form-group">
        <label for="exampleInputEmail1">Category Name</label>
        <input name="name" type="text" class="form-control" placeholder=" Enter Category Name">
    </div>
    <input name="submit" type="submit" class="btn btn-default" value="Submit" />
    <br /><br />
</form>


<?php include 'includes/footer.php'; ?>