<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.php">TLU IOT</a>
    </li>
    <li class="breadcrumb-item active">Tund 2</li>
</ol>
  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  
  <!-- Demo scripts for this page-->
  <script src="js/demo/chart-area-demo.js"></script>
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-chart-area"></i>
    Area Chart Example</div>
    <div class="card-body">
        <canvas id="myAreaChart" width="100%" height="30"></canvas>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
<?php if($_GET['rel']!='tab'){ echo "</div>";} ?>