<?php
ob_start();
session_start();
if($_SESSION['username']==null){
    header("Location: signin.php");
}

$book_id = $_GET['book_id'];
// connecto database
include "include/connection.php";
require_once "./functions/function.php";
$conn = db_connect();

$query = "SELECT * FROM book_admin WHERE book_id = '$book_id'";
$result = mysqli_query($conn, $query);
if(!$result){
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
}

$row = mysqli_fetch_assoc($result);
if(!$row){
    echo "Empty book";
    exit;
}

$sql = "SELECT seller_id from sells where book_id='$book_id'";
$result1 = mysqli_query($conn, $sql);
$row1 = mysqli_fetch_assoc($result1);
$temp = $row1['seller_id'];

$sql1 = "SELECT username, email, phone_number  from registration where id='$temp'";
$result2 = mysqli_query($conn, $sql1);
$row2 = mysqli_fetch_assoc($result2);


$title = $row['title'];
require "design/header.php";

?>
    <!-- Example row of columns -->
    <div class="row mt-5">

    </div>
    <h3 class="brown-text text-center my-xl-5"><?php echo $row['title']; ?></h3>
    <div class="row wow fadeInUp">
        <div class="col-md-3 text-center">
            <img class="img-responsive img-thumbnail" src="assets/images/<?php echo $row['image']; ?>">
        </div>
        <div class="col-md-7">
            <h4 class="brown-text">Book Description</h4>
            <p><?php echo $row['description']; ?></p>
            <h4 class="brown-text">Book Details</h4>
            <table class="table">
                <?php foreach($row as $key => $value){
                    if($key == "description" || $key == "image" || $key == "category" || $key == "title"){
                        continue;
                    }
                    switch($key){
                        case "book_id":
                            $key = "ID";
                            break;
                        case "title":
                            $key = "Title";
                            break;
                        case "author":
                            $key = "Author";
                            break;
                        case "price":
                            $key = "Price";
                            break;
                    }
                    ?>
                    <tr>
                        <td><?php echo $key; ?></td>
                        <td><?php echo $value; ?></td>
                    </tr>
                    <?php
                }
                if(isset($conn)) {mysqli_close($conn); }
                ?>
            </table>
            <form method="get" action="cart.php" class="my-lg-5">
                <input type="hidden" name="book_id" value="<?php echo $book_id;?>">
                <input type="submit" value="Add to cart" name="cart" class="btn btn-rounded btn-warning">

            </form>
        </div>
    </div>
    <!--<div class="row my-5">
        <div class="col-md-3">

        </div>
        <div class="col-md-6">

            <h4 class="brown-text">Uploader Detail</h4>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><?php /*echo $row2['username']; */?></td>
                    <td><?php /*echo $row2['email']; */?></td>
                    <td><?php /*echo $row2['phone_number']; */?></td>
                </tr>

                </tbody>
            </table>

        </div>

    </div>-->
<?php
require "design/footer.php";
?>