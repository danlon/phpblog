<?php include '/config/config.php'; ?>
<?php include '/libraries/Database.php'; ?>
<?php include '/includes/header.php'; ?>
<?php
    //create DB object
    $db = new Database();


?>


        <div class="blog-post">
            <h2 class="blog-post-title">International PHP conference</h2>
            <p class="blog-post-meta">January 1, 2015 by <a href="#">Mark</a></p>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. 
                
            <a class="readmore" href="post.php?id=1">Read More</a>
        </div><!-- /.blog-post -->

        <div class="blog-post">
            <h2 class="blog-post-title">PHP beta 6.0 released!</h2>
            <p class="blog-post-meta">December 23, 2015 by <a href="#">Jacob</a></p>
            <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
            <a class="readmore" href="post.php?id=1">Read More</a>
        </div><!-- /.blog-post -->

            
        <div class="blog-post">
            <h2 class="blog-post-title">New feature</h2>
            <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>

            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <ul>
              <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
              <li>Donec id elit non mi porta gravida at eget metus.</li>
              <li>Nulla vitae elit libero, a pharetra augue.</li>
            </ul>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
            <a class="readmore" href="post.php?id=1">Read More</a>
        </div><!-- /.blog-post -->

<?php include '/includes/footer.php'; ?>