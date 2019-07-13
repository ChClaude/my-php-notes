<?php

    require('config/config.php');
    require('config/db.php');

    // Check For Submit
    if (isset($_POST['submit'])) {
        // Get form data
        $updated_id = mysqli_real_escape_string($conn, $_POST['update_id']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $body = mysqli_real_escape_string($conn, $_POST['body']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);

        $query = "UPDATE posts SET
                title='$title',
                author='$author',
                body='$body'
                WHERE id = {$updated_id}
        ";

    //    die($query); // this is used to print the query

        if (mysqli_query($conn, $query)) {
            header('Location: ' . ROOT_URL . '');
        } else {
            echo 'ERROR ' . mysqli_error($conn);
        }

    }

    // get ID
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Create Query
    $query = 'SELECT * FROM posts WHERE id = ' . $id;

    // Get Result
    $result = mysqli_query($conn, $query);

    // Fetch Data
    $post = mysqli_fetch_assoc($result);
    //        var_dump($post);

    // Free Result
    mysqli_free_result($result);

    // Close Connection
    mysqli_close($conn);


?>

<?php include('inc/header.php') ?>

    <div class="container">

        <h1>Add Post</h1>

        <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control"  value="<?php echo $post['title']?>">
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="author" id="author" class="form-control"  value="<?php echo $post['author']?>">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" id="body" class="form-control" ><?php echo $post['body']?></textarea>
            </div>
            <input type="hidden" name="update_id" value="<?php echo $post['id']; ?>">
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>
<?php include('inc/footer.php') ?>