<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <?php include "imports.php"; ?>
  <title>Single</title>
</head>
<script type="text/javascript">
$(document).ready(function(){
  $("button").click(function(){
    $(".card-text").load();
  });
});
</script>
<style>
.marginify{
  margin-top: 3em !important;
  margin-bottom: 3em !important;
}
</style>

<body>
  <?php session_start();
  if(!isset($_SESSION["loggedInCust"]))
  {
    include "headerLoggedOut.php";
  }else {
    include "headerLoggedIn.php";
  }
  ?>

  <div class="container marginify">
    <?php include 'dbconfig.php';

    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $currentURL = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . $_SERVER['QUERY_STRING'];


    $sql ="SELECT * FROM `products` WHERE `products`.`id`='".$_GET["id"]."'";
    $result = mysqli_query($con,$sql);

    if(mysqli_num_rows($result)> 0)
    {
      $row = mysqli_fetch_assoc($result);
      $pid=$row['id'];
      $title=$row['title'];
      $price=$row['price'];
      $image=$row['image'];
      $category=$row['category'];
      ?>
      <div class="row">
        <div class="col-7">
          <img src="<?php echo $image; ?>" class="img-fluid w-100" alt="Responsive image">
        </div>
        <div class="col-5">
          <p class="h2 font-weight-bold"><?php echo $title; ?></p>
          <p class="h4 font-weight-normal">LKR <?php echo $price; ?></p>
          <hr>
          <p class="h6">Item Code - <?php echo $pid; ?></p>
          <p class="h6">Category - <?php echo ucwords($category); ?></p>
          <?php
          if (array_key_exists($pid,$_SESSION["cartProducts"]))
          {
            ?>
            <a href="cart.php"><p class="card-text text-center"><button type="button" class="btn btn-outline-dark">Added To Cart</button></p></a>
            <?php
          }else {
            ?>
            <form method="post">
              <input type="hidden" value="<?php echo $pid; ?>" name="id"/>
              <div class="row mx-2">
                <input type="number" value="1" class="form-control col w-25" name="qty" min="1" max="25" placeholder="Quantity"/>
                <div class="col-2"></div>
                <button type="submit" name="Addbtn" class="btn btn-outline-success col">Add To Cart</button>
              </div>
            </form>
            <?php
            if(isset($_POST["Addbtn"])){
              $id=$_POST["id"];
              $qty=$_POST["qty"];
              if (isset($_POST["qty"])) {
                $_SESSION["cartProducts"][$id] = $qty;
                echo "<script>window.onload = function() {if(!window.location.hash) {window.location = window.location + '#Added';window.location.reload();}}</script>";
              }else {
                $_SESSION["cartProducts"][$id] = 1;
                echo "<script>window.onload = function() {if(!window.location.hash) {window.location = window.location + '#Added';window.location.reload();}}</script>";
              }
            }
          }
          ?>
        </div>
      </div>
      <?php
    }
    mysqli_close($con);
    ?>

    <div class="row">
      <div class="col">
        <p class="h2 text-center">Related Products</p>
        <div class="card-deck">
          <?php
          include 'dbconfig.php';
          $rpsql ="SELECT * FROM `products` WHERE `products`.`category`='$category' AND NOT `products`.`id`='$pid' ORDER BY RAND() LIMIT 4";
          $rpresult = mysqli_query($con,$rpsql);
          if(mysqli_num_rows($rpresult)> 0)
          {
            while($rprow = mysqli_fetch_assoc($rpresult)){
              $rppid=$rprow['id'];
              $rptitle=$rprow['title'];
              $rpprice=$rprow['price'];
              $rpimage=$rprow['image'];
              $rpcategory=$rprow['category'];
              ?>
              <div class="card shadow">
                <img class="card-img-top" src="<?php echo $rpimage; ?>" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $rptitle; ?></h5>
                  <p class="card-text mt-n3">LKR <?php echo $rpprice; ?></p>
                  <a href="single.php?id=<?php echo "$rppid"; ?>"><button type="submit" name="Addbtn" class="btn btn-outline-success col">View Details</button></a>
                </div>
              </div>
              <?php
            }
          }else {
            echo "NO RELATED PRODUCTS";
          }
          ?>
        </div>
      </div>
    </div>
  </div>

  <?php include "footer.php"; ?>



</body>
</html>
