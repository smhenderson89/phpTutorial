<?php 

// Connection to the database
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud','root','');

// Check if connection was successful
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// $pdo->exec("INSERT INTO products (title, image, description, price, create_date)
//                 VALUE('$title','','$description',$price,'$date')
// ") 
// Beginner way of putting a post into the database

$errors = []; // Add to errors for troubleshooting

// echo $_SERVER['REQUEST_METHOD'].'<br>';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $date = date('Y-m-d H:i:s');


    if(!$title) {
        $errors[] = 'Product title is required';
    }

    if (!$price) {
        $errors[] = 'Product price is required';
    }

    // Better way - Check if request method is get or POST?
    $statement = $pdo->prepare("INSERT INTO products (title, image, description, price, create_date)
                    VALUE(:title, :image, :description, :price, :date)"); 

    $statement->bindValue(':title', $title);
    $statement->bindValue(':image', '');
    $statement->bindValue(':description', $description);
    $statement->bindValue(':price', $price);
    $statement->bindValue(':date', $date);
    $statement->execute();
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel = "stylesheet" href = "app.css">
  </head>
  <body>
    <h1>Create New Product</h1>
        <?php if (!empty($errors)): ?>
            <div class="alert alert-danger" role="alert">

                <?php foreach ($errors as $error): ?>
                    <div><?php echo $error ?></div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <form action="" method = "post"> <!-- Where form will be submitted and which method -->
            <div class="mb-3">
                <label>Product Image</label>
                <br>
                <input type = "file" name = "image"> 
            </div>
            <div class="mb-3">
                <label>Product Title</label>
                <input type = "text" name = "title" class="form-control"> 
            </div>
            <div class="mb-3">  
                <label>Product Description</label>
                <textarea name = "description" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label>Product Price</label>
                <input type = "number" name = "price" step="0.01" class="form-control"> 
            </div>
            <button type="submit" id = "submit" class="btn btn-primary">Submit</button>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>