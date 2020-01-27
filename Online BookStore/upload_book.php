<?php
ob_start();
session_start();
require "functions/function.php";
require "design/header.php";
$title = "Add new book";

$conn = db_connect();

if(isset($_POST['add'])){


    $title = trim($_POST['title']);
    $title = mysqli_real_escape_string($conn, $title);

    $author = trim($_POST['author']);
    $author = mysqli_real_escape_string($conn, $author);

    $descr = trim($_POST['descr']);
    $descr = mysqli_real_escape_string($conn, $descr);

    $price = floatval(trim($_POST['price']));
    $price = mysqli_real_escape_string($conn, $price);

    $category = trim($_POST['category']);
    $category = mysqli_real_escape_string($conn, $category);

    // add image
    if(isset($_FILES['image']) && $_FILES['image']['name'] != ""){
        $image = $_FILES['image']['name'];
        $directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);
        $uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . $directory_self . "assets/images/";
        $uploadDirectory .= $image;
        move_uploaded_file($_FILES['image']['tmp_name'], $uploadDirectory);
    }


    $query = "INSERT INTO book (title, author, image, description, price, category) VALUES ('" . $title . "', '" . $author . "', '" . $image . "', '" . $descr . "', '" . $price . "', '" . $category . "')";

    $result = mysqli_query($conn, $query);
    $username=$_SESSION['username'];
    $sql1 = "SELECT book_id FROM book where title='$title'";
    $result1 = mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_assoc($result1);
    $bid=$row1["book_id"];

    $sql2 = "SELECT id FROM registration where username='$username'";
    $result2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($result2);
    $uid=$row2["id"];

    $sql3 = "insert into sells (seller_id, book_id) values ('$uid', '$bid')";
    $result3 = mysqli_query($conn, $sql3);



    if(!$result){
        echo "Can't add new data " . mysqli_error($conn);
        exit;
    } else {
        if($result3){
            echo "yes kaj hoice";
        }
        header("Location: usedbooks.php");

    }


}


?>
    <hr>
    <div class="row mt-lg-5">
    </div>
    <h2 class="text-center mt-xl-5">Upload Your book</h2>
    <hr class="justify-content-center col-2 purple-gradient">

    <div class="row mt-lg-5 wow fadeInUp slow">



        <div class="col-md-2">

        </div>
        <div class="col-md-6">

            <form method="post" action="upload_book.php" enctype="multipart/form-data">
                <table class="table">

                    <tr>
                        <th>Title</th>
                        <td><input class="form-control" type="text" name="title" required></td>
                    </tr>
                    <tr>
                        <th>Author</th>
                        <td><input class="form-control" type="text" name="author" required></td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <td>

                            <form class="md-form">
                                <div class="file-field">
                                    <a class="btn-floating purple-gradient mt-0 float-left">
                                        <i class="fa fa-cloud-upload" aria-hidden="true"></i>
                                        <input type="file" name="image">
                                    </a>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Upload your file">
                                    </div>
                                </div>
                            </form>

                        </td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><div class="form-group shadow-textarea">

                                <textarea class="form-control z-depth-1" name="descr" cols="40" rows="5"></textarea>
                            </div>
                        </td>



                    </tr>
                    <tr>
                        <th>Price</th>
                        <td><input class="form-control" type="text" name="price" required></td>
                    </tr>
                    <tr>
                        <th>Category</th>
                        <td><input class="form-control" type="text" name="category" required></td>
                    </tr>
                </table>
                <input type="submit" name="add" value="Add new book" class="btn btn-info btn-rounded">
                <input type="reset" value="cancel" class="btn btn-danger btn-rounded">
            </form>

        </div>

    </div>
    <br/>
<?php
if(isset($conn)) {mysqli_close($conn);}
require_once "./design/footer.php";
?>