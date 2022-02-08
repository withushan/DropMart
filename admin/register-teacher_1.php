<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Register Teacher</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container-fluid mt-3">
    <div class="row">
      <div class="col">
        <?php include "./databases/connection.php";
        $sql ="SELECT * FROM `teacher` WHERE `teacherId`=".$_GET["id"]."";

        $result = mysqli_query($con,$sql);

        if(mysqli_num_rows($result)> 0)
        {
          $row = mysqli_fetch_assoc($result);

          ?>
          <form class="update-form" action="registrationStatus.php?id=<?php echo $_GET["id"];?>" method="post" enctype="multipart/form-data">

            <table class="table" width="50%" border="0" align="center">
              <tr>
                <td class="updateitem-td right" width=auto>Registration Status</td>
                <td class="updateitem-td" width=auto>
                  <input type="radio" class="p1" name="status" id="status" value='0' <?php if($row['registerStatus']=0){echo "checked";}?>/>Reject &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" class="p1" name="status" id="status" value='1' <?php if($row['registerStatus']=1){echo "checked";}?>/>Register

                </td>

              </tr>


              <tr>
                <td class="updateitem-td center"  colspan="2"><blockquote>

                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input name="btnSubmit" type="submit" class="btn btn-warning" id="btnSubmit" value="Update"   />
                  <input name="btnReset" type="reset" class="btn btn-dark" id="btnReset" value="Cancel"   />

                </blockquote></td>
              </tr>
            </table>
            <?php
          }
          mysqli_close($con);
          ?>
        </form>

      </div>
    </div>
  </div>


</body>
</html>
