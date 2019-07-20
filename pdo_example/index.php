<?php
  $host = 'localhost';
  $user = 'root';
  $password = 'Cla@5027jesuschrist';
  $dbname = 'pdoposts';

  // Set DSN (Data source name: a string that has the associated data structure to describe a connection to a data source)
  // this is where we include the driver or database we use
  $dsn = 'mysql:host='. $host . ';dbname='. $dbname;

  // Create a PDO(connection) instance
  $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,
      PDO::FETCH_OBJ);

  # PDO QUERY

//  $stmt = $pdo->query('SELECT * FROM posts');

  // here the result is formatted as an associative array
//  while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//      echo $row['title']. '<br>';
//  }

  // here the result set is formatted as an object
//    while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
//      echo $row->title. '<br>';
//    }

  // here the fetch method does not require an attribute
  // because of $pdo->setAttribute (line 13), default result set is an object
//  while($row = $stmt->fetch()) {
//      echo $row->title. '<br>';
//  }

  # PREPARED STATEMENT (prepare & execute)
  // UNSAFE
//  $sql = "SELECT * FROM posts WHERE author= '$author'";

  // FETCH MULTIPLE POSTS
  $author = 'Claude Christ';
  $is_published = false;
  $id = 1;

  // Positional Params
//  $sql = 'SELECT * FROM posts WHERE author = ?';
//  $stmt = $pdo->prepare($sql);
//  $stmt->execute([$author]);
//  $posts = $stmt->fetchAll();

    // Named prams
//  $sql = 'SELECT * FROM posts WHERE author = :author && is_published = :is_published';
//  $stmt = $pdo->prepare($sql);
//  $stmt->execute( ['author' => $author, "is_published" => $is_published]);
//  $posts = $stmt->fetchAll();
//
////  var_dump($posts);
//
// foreach ($posts as $post) {
//     echo $post->title . '<br>';
// }

  // FETCH SINGLE POST
//  $sql = 'SELECT * FROM posts WHERE id = :id';
//  $stmt = $pdo->prepare($sql);
//  $stmt->execute( ['id' => $id]);
//  $post = $stmt->fetch();

//  echo $post->body;

  // GET ROW COUNT
//  $stmt = $pdo->prepare('SELECT * FROM posts WHERE author = ?');
//  $stmt->execute([$author]);
//  $postCount = $stmt->rowCount();
//  echo $postCount;

  // INSERT DATA
//    $title = 'Post Five';
//    $body = 'This is post five';
//    $author = 'Kevin';
//
//    $sql = 'INSERT INTO posts(title, body, author) VALUES(:title, :body, :author)';
//    $stmt = $pdo->prepare($sql);
//    $stmt->execute(['title'=> $title, 'body' => $body, 'author' => $author]);
//
//    echo 'Post Added';

  // UPDATE DATA
//  $id = 1;
//  $body = 'This is the updated post';
//  $author = 'Kevin';
//
//  $sql = 'UPDATE posts SET body = :body WHERE id = :id';
//  $stmt = $pdo->prepare($sql);
//  $stmt->execute(['body'=> $body, 'id' => $id]);
//
//  echo 'Post Updated';

  // DELETE DATA
//  $id = 3;
//
//  $sql = 'DELETE FROM posts WHERE  id= :id';
//  $stmt = $pdo->prepare($sql);
//  $stmt->execute(['id' => $id]);
//  echo 'Post Deleted';

  // SEARCH DATA
  $search = "%f%"; // like operator
  $sql = 'SELECT * FROM posts WHERE title LIKE ?';
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$search]);

  $posts = $stmt->fetchAll();

  foreach ($posts as $post) {
      echo "$post->title<br>";
  }
