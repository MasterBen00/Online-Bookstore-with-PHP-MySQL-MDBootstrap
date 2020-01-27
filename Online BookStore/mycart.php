<?php
ob_start();
session_start();
require "design/header1.php";
require "functions/function.php";
$conn=db_connect();
?>
<div class="row mt-lg-5 wow fadeInUp" data-wow-delay=".4s">
    <div class="container">
   <div class="row mt-lg-5">
       <div class="col-md-12">
           <div class="card">
               <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Your Cart</h3>
               <div class="card-body">
                   <div id="table" class="table-editable">

                       <table class="table table-bordered table-responsive-md table-striped text-center">
                           <tr>
                               <th class="text-center">Title</th>
                               <th class="text-center">Author</th>
                               <th class="text-center">Category</th>
                               <th class="text-center">Amount</th>
                               <th class="text-center">Price</th>
                               <th class="text-center">Item Add/Remove</th>
                               <th class="text-center">Remove</th>
                           </tr>




<?php
$username=$_SESSION['username'];
$sql = "SELECT id FROM registration where username='$username'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$buyer_id=$row["id"];

    $query = "select book_id from order_book where buyer_id='$buyer_id' and confirm=0";
    $result2 = mysqli_query($conn, $query);

    while($row2=mysqli_fetch_array($result2)){

        $bid = $row2['book_id'];
        $query2=" select title, author , price, category from book_admin where book_id='$bid' ";
        $result3 = mysqli_query($conn, $query2);
        $row3=mysqli_fetch_array($result3);

        $query5 = "select amount from order_book where book_id='$bid' and buyer_id='$buyer_id'";
        $result5 = mysqli_query($conn, $query5);
        $row5=mysqli_fetch_array($result5);
        $amount=$row5['amount'];


        echo "
        
        <tr>
          <td class=\"pt-3-half\" contenteditable=\"true\">".$row3['title']."</td>
          <td class=\"pt-3-half\" contenteditable=\"true\">".$row3['author']."</td>
          <td class=\"pt-3-half\" contenteditable=\"true\">".$row3['category']."</td>
          <td class=\"pt-3-half\" contenteditable=\"true\">".$row5['amount']."</td>
          
          <td class=\"pt-3-half\" contenteditable=\"true\">".$row3['price']."</td>
          
          <td class=\"pt-3-half\">
            <a href='cart_item_add.php?amount=$amount&amp;book_id=$bid&amp;buyer_id=$buyer_id' class=\"btn-floating btn-sm btn-success\"><i class=\"fa fa-plus\"></i></a>
            <a href='cart_item_remove.php?amount=$amount&amp;book_id=$bid&amp;buyer_id=$buyer_id' class=\"btn-floating btn-sm btn-warning\"><i class=\"fa fa-minus\"></i></a>
          </td>
          <td>
            <a href='deletecart.php?book_id=$bid'><button type=\"button\" class=\"btn btn-danger btn-rounded btn-sm my-0\">Remove</button></a>
          </td>
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

<div class="row justify-content-center mb-2 wow fadeInLeft" data-wow-delay=".6s">

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalSocial">Checkout</button>

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
                    <a type="button" class="btn btn-primary">Purchase <i class="fa fa-diamond ml-1 text-white"></i></a>
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

                   var $TABLE = $('#table');
                   var $BTN = $('#export-btn');
                   var $EXPORT = $('#export');

                   $('.table-add').click(function () {
                       var $clone = $TABLE.find('tr.hide').clone(true).removeClass('hide table-line');
                       $TABLE.find('table').append($clone);
                   });

                   $('.table-remove').click(function () {
                       $(this).parents('tr').detach();
                   });

                   $('.table-up').click(function () {
                       var $row = $(this).parents('tr');
                       if ($row.index() === 1) return; // Don't go above the header
                       $row.prev().before($row.get(0));
                   });

                   $('.table-down').click(function () {
                       var $row = $(this).parents('tr');
                       $row.next().after($row.get(0));
                   });

                   // A few jQuery helpers for exporting only
                   jQuery.fn.pop = [].pop;
                   jQuery.fn.shift = [].shift;

                   $BTN.click(function () {
                       var $rows = $TABLE.find('tr:not(:hidden)');
                       var headers = [];
                       var data = [];

// Get the headers (add special header logic here)
                       $($rows.shift()).find('th:not(:empty)').each(function () {
                           headers.push($(this).text().toLowerCase());
                       });

// Turn all existing rows into a loopable array
                       $rows.each(function () {
                           var $td = $(this).find('td');
                           var h = {};

// Use the headers from earlier to name our hash keys
                           headers.forEach(function (header, i) {
                               h[header] = $td.eq(i).text();
                           });

                           data.push(h);
                       });

// Output the result
                       $EXPORT.text(JSON.stringify(data));
                   });
               </script>
               </body>

               </html>




