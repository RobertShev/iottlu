<ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">TLU IOT</a>
          </li>
          <li class="breadcrumb-item active">Tund 3</li>
        </ol>
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
          </div>
          <div class="card-body">
            <div class="table-responsive">
            <form method="post" action="">
              <label for="A">Gamer A</label>
              <input type="radio" name="radio" id="A" value="A"/>
              <br />
              <label for="B">Gamer B</label>
              <input type="radio" name="radio" id="B" value="B"/>
              <br />
              <input type="submit" name="submit" value="submit"/>
            </form>
            <?php
                if(isset($_POST['submit']))
                {
                    $radio_value = $_POST["radio"];
                    header("Location:pages/tund3/game.php?gamer=$radio_value");
                }
            ?>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated on 18.02.2019 at 10:22 AM</div>
        </div>

        <p class="small text-center text-muted my-5">
          <em>More table examples coming soon...</em>
        </p>

      </div>
      <!-- /.container-fluid -->
      <script src="js/demo/datatables-demo.js"></script>
      <script src="vendor/datatables/jquery.dataTables.js"></script>
      <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
      <?php if($_GET['rel']!='tab'){ echo "</div>";} ?>
