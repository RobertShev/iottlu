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
              <label for="LvsL">Local vs Local</label>
              <input type="radio" name="radio" id="LvsL" value="LvsL"/>
            <br />
            <label for="LvsO">Local vs Online</label>
            <input type="radio" name="radio" id="LvsO" value="LvsO"/>
            <br />
            <label for="LvsL">Online vs Online</label>
            <input type="radio" name="radio" id="OvsO" value="OvsO"/>
            <br />
            <input type="submit" name="submit" value="submit"/>
            </form>
            <?php
                if(isset($_POST['submit']))
                {
                    $radio_value = $_POST["radio"];
                    header("Location:pages/tund3/game.php?gameMode=$radio_value");
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
