<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Unregistered Teachers</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedcolumns/3.3.0/css/fixedColumns.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/scroller/2.0.1/css/scroller.bootstrap4.min.css"/>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.3.0/js/dataTables.fixedColumns.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/scroller/2.0.1/js/dataTables.scroller.min.js"></script>
    <script>
    $(document).ready(function() {
      $('#ttable').DataTable();
    } );
    </script>
  </head>
  <body>

        <div class="container-fluid mt-3">
          <div class="row">
            <div class="col">

              <table id="ttable" class="table mt-3 display">
                <?php

                include "../dbconfig.php";
                $sql ="SELECT * FROM `teachers` WHERE `regstatus`=0";

                $result = mysqli_query($con,$sql);

                if(mysqli_num_rows($result)> 0)
                {
                  echo   " <thead>
                  <tr class='manage-orders-tr'>
                  <td class='manage-orders-td'>Teacher ID</td>
                  <td class='manage-orders-td'>RegStatus ID</td>
                  <td class='manage-orders-td'>update</td>
                  </tr> </thead><tbody> ";
                  while($row = mysqli_fetch_assoc($result))
                  {
                    echo   " <tr class='manage-orders-tr'>";
                    echo   " <td class='align-middle'><div class=''>".$row["id"]."</div></td>  ";
                    echo   " <td class='align-middle'><div class=''>".$row["regstatus"]."</div></td>  ";
                    echo "<td class='align-middle' width='48'><a href='register-teacher.php?id=".$row["id"]."'><img src='../images/edit.png' alt='' width='20' height='22' /></a></td>  ";
                    echo "</tr>";

                  }
                  echo "</tbody>";
                }
                ?>
              </table>

            </div>
          </div>
        </div>



  </body>
</html>
