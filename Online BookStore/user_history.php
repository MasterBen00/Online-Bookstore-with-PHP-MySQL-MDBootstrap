<?php

ob_start();
session_start();
require "design/header1.php";
require "functions/function.php";
include "include/registration/server.php";
if($_SESSION['username']==null){
    header("Location: adminsignin.php");
}
?>
<div class="row mt-lg-5 wow zoomIn fast">
    <div class="container">
        <div class="row mt-lg-5">
            <div class="col-md-12">
                <div class="card">
                    <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Your History</h3>
                    <div class="card-body">
                        <div id="table" class="table-editable">

                            <table class="table table-bordered table-responsive-md table-striped text-center">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Book Title</th>

                                    <th scope="col">Author</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Amount</th>
                                </tr>


<?php

$conn = db_connect();

$username=$_SESSION['username'];
$sql = "SELECT id FROM registration where username='$username'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$buyer_id=$row["id"];

$sql1 = "SELECT  book_id, amount FROM order_book where buyer_id='$buyer_id' and confirm=2";
$result1 = mysqli_query($conn, $sql1);

while($row1 = mysqli_fetch_array($result1)){
    $bid = $row1['book_id'];

    $sql2=" select title, author, price, category from book_admin where book_id='$bid' ";
    $result2 = mysqli_query($conn, $sql2);
    $row2=mysqli_fetch_array($result2);

    echo "
    
     <tr>
          <td class=\"pt-3-half\" contenteditable=\"true\">".$username."</td>
          <td class=\"pt-3-half\" contenteditable=\"true\">".$row2['title']."</td>
          <td class=\"pt-3-half\" contenteditable=\"true\">".$row2['author']."</td>
          <td class=\"pt-3-half\" contenteditable=\"true\">".$row2['price']."</td>
          
          <td class=\"pt-3-half\" contenteditable=\"true\">".$row2['category']."</td>
          <td class=\"pt-3-half\" contenteditable=\"true\">".$row1['amount']."</td>
          </tr>
    
    ";
}

?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<script>
    new WOW().init();
</script>
</body>

</html>
