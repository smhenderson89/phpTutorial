<?php 

// Connection to the database
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud','root','');

// Check if connection was successful
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Make SQL request
$statement = $pdo->prepare('SELECT * FROM products ORDER BY create_date DESC'); // Create SQL text
$statement->execute(); // Execute SQL request
$products = $statement->fetchAll(PDO::FETCH_ASSOC); // Fetch as an associated array
// echo json_encode($products);

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
    <h1>Products CRUD</h1>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Create Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody> <!-- Iterate over Fetch request for all products -->
            <?php foreach ($products as $i => $product) { ?>
                <tr>
                    <th scope="row"><?php echo $i +1 ?></th>
                    <td></td>
                    <td><?php echo $product['title'] ?></td>
                    <td><?php echo $product['price'] ?></td>
                    <td><?php echo $product['create_date'] ?></td>
                    <td>
                        <button type="button" class="btn btn-sm btn-outline-primary">Edit</button>
                        <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
  </body>
</html>