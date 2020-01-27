<?php
ob_start();
include "include/registration/server.php";
include "functions/function.php";
if($_SESSION['admin']==null) {
    header("Location: adminsignin.php");
}
include "design/admin_header.php";

$conn = db_connect();
$book_id = $_GET['book_id'];

$query = "SELECT * FROM book_admin WHERE book_id = '$book_id'";
$result = mysqli_query($conn, $query);
if(!$result){
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
}

$row = mysqli_fetch_assoc($result);

?>
<div class="row mt-lg-5">
</div>
<h2 class="text-center ">Edit Book Data</h2>

<div class="row mt-lg-5 wow fadeInLeft">



    <div class="col-md-2">

    </div>
    <div class="col-md-8">

<form method="post" action="admin_edit_success.php" enctype="multipart/form-data">
    <table class="table">
        <tr>
            <th>Book ID</th>
            <td><input class="form-control disabled" type="text" name="book_id" value="<?php echo $row['book_id'];?>" readOnly="true"></td>
        </tr>
        <tr>
            <th>Title</th>
            <td><input class="form-control" type="text" name="title" value="<?php echo $row['title'];?>"></td>
        </tr>
        <tr>
            <th>Author</th>
            <td><input class="form-control" type="text" name="author" value="<?php echo $row['author'];?>" required></td>
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

                <textarea class="form-control z-depth-1" name="descr" cols="40" rows="6"><?php echo $row['description'];?></textarea>
                </div>
            </td>
        </tr>
        <tr>
            <th>Price</th>
            <td><input class="form-control" type="text" name="price" value="<?php echo $row['price'];?>" required></td>
        </tr>
        <tr>
            <th>Category</th>
            <td><input class="form-control" type="text" name="category" value="<?php echo $row['category'];; ?>" required></td>
        </tr>
        <tr>
            <th>Amount</th>
            <td><input class="form-control" type="text" name="amount" value="<?php echo $row['amount'];; ?>" required></td>
        </tr>
    </table>

    <div class="row justify-content-center">
        <input type="submit" name="save_change" value="Save Changes" class="btn btn-secondary btn-rounded btn-md">
        <input type="reset" value="cancel" class="btn btn-danger btn-rounded btn-md">
    </div>

</form>
    </div>
</div>
<br/>
<div class="row justify-content-center">
    <a href="admindashboard.php" class="btn btn-teal btn-rounded">Confirm</a>
</div>


<?php
include "design/footer.php";
?>


