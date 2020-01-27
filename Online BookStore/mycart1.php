<?php
ob_start();
session_start();
require "design/header1.php";
require "functions/function.php";
$conn=db_connect();
?>
<div class="row mt-lg-5 wow zoomIn faster">
    <div class="container">
        <div class="row mt-lg-5">
            <div class="col-md-12">
                <div class="card">
                    <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Your Cart</h3>
                    <div class="card-body">

                        <!-- Shopping Cart table -->
                        <div class="table-responsive">

                            <table class="table product-table">

                                <!-- Table head -->
                                <thead class="mdb-color lighten-5">
                                <tr>
                                    <th></th>
                                    <th class="font-weight-bold">
                                        <strong>Title</strong>
                                    </th>
                                    <th class="font-weight-bold">
                                        <strong>Price</strong>
                                    </th>

                                    <th class="font-weight-bold">
                                        <strong>Quantity</strong>
                                    </th>
                                    <th class="font-weight-bold">
                                        <strong>Add/Remove</strong>
                                    </th>
                                    <th class="font-weight-bold">
                                        <strong>Remove</strong>
                                    </th>

                                </tr>
                                </thead>
                                <tbody>





                                <?php
                                $price=0;
                                $username=$_SESSION['username'];
                                $sql = "SELECT id FROM registration where username='$username'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $buyer_id=$row["id"];

                                $query = "select book_id from order_book where buyer_id='$buyer_id' and confirm=0";
                                $result2 = mysqli_query($conn, $query);

                                while($row2=mysqli_fetch_array($result2)){

                                    $bid = $row2['book_id'];



                                    $query2=" select title, author ,image, price, category from book_admin where book_id='$bid' ";
                                    $result3 = mysqli_query($conn, $query2);
                                    $row3=mysqli_fetch_array($result3);

                                    $query5 = "select amount from order_book where book_id='$bid' and buyer_id='$buyer_id' and confirm=0";
                                    $result5 = mysqli_query($conn, $query5);
                                    $row5=mysqli_fetch_array($result5);
                                    $amount=$row5['amount'];

                                    $price+=getbookprice($bid)*$amount;


                                    echo "
        
         

                <!-- First row -->
                <tr>
                    <th scope=\"row\">
                        <img src=\"assets/images/".$row3['image']."\" alt=\"\" class=\"img-fluid z-depth-0\">
                    </th>
                    <td>
                        <h5 class=\"mt-3\">
                            <strong>".$row3['title']."</strong>
                        </h5>
                        <p class=\"text-muted\">".$row3['author']."</p>
                    </td>
                    <td>".$row3['price']."</td>
                   
                    <td class='text-center'>".$row5['amount']."</td>
                    <td>
                       <a href='cart_item_add.php?amount=$amount&amp;book_id=$bid&amp;buyer_id=$buyer_id' class=\"btn-floating btn-sm btn-success\"><i class=\"fa fa-plus\"></i></a>
                        <a href='cart_item_remove.php?amount=$amount&amp;book_id=$bid&amp;buyer_id=$buyer_id' class=\"btn-floating btn-sm btn-danger\"><i class=\"fa fa-minus\"></i></a>
                    </td>
                   
                    <td>
                        <a href='deletecart.php?book_id=$bid'><button type=\"button\" class=\"btn btn-sm btn-primary\" data-toggle=\"tooltip\" data-placement=\"top\"
                                title=\"Remove item\">X
                        </button></a>
                    </td>
                </tr>
              
        
        
        ";




                                }


                                ?>

                                </tbody>

                            </table>

                        </div>
                        <!-- /.Shopping Cart table -->

                    </div>

                </div>





                        </div>
                    </div>
                </div>
            </div>

<div class="row my-lg-5 container wow fadeInLeft" data-wow-delay=".6s">
    <div class="col-md-6">

    </div>
    <div class="col-md-1">

        <h4 class="mt-2">
            <strong>Total</strong>
        </h4>


    </div>
    <div class="col-md-1">

        <h4 class="mt-2">
            <strong><?php echo '$'.$price  ?></strong>
        </h4>


    </div>
    <div class="col-md-2">
        <div class="row justify-content-center mb-2">

            <button type="button" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#modalSocial">Checkout</button>

        </div>


    </div>
    <div class="col-md-2">
        <div>
            <a href="drop_cart.php?buyer_id=<?php echo "$buyer_id" ?>"><button type="button" class="btn btn-danger btn-rounded">Drop Cart</button></a>
        </div>


    </div>
</div>



<div class="modal fade" id="modalSocial" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">

        <!--Content-->
        <div class="modal-content">

            <!--Header-->
            <div class="modal-header light-blue darken-3 white-text">
                <h4 class="title"><i class="fa fa-money"></i> Your Checkout!</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <!--Body-->
            <div class="modal-body mb-0 text-center">

                <i class="fa fa-check fa-4x mb-3 animated rotateIn"></i>

                <p>Cash on Delivery</p>

                <div class="modal-footer justify-content-center">
                    <a type="button" class="btn btn-primary" href="purchase_confirm.php?buyer_id=<?php echo "$buyer_id" ?>">Purchase <i class="fa fa-diamond ml-1 text-white"></i></a>
                    <a type="button" class="btn btn-outline-primary waves-effect" data-dismiss="modal">No, thanks</a>
                </div>


                <!--Facebook-->


            </div>

        </div>
        <!--/.Content-->

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




