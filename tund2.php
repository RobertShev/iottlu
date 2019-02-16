<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.php">TLU IOT</a>
    </li>
    <li class="breadcrumb-item active">Tund 2</li>
</ol>

<div class="breadcrumb">
    <div class="form-group row">
        <label for="start-date-input" class="col-2 col-form-label">Alates</label>
        <div class="col-10">
            <input class="form-control" type="date" value="2011-08-19" id="start-date-input">
        </div>
    </div>
    <div class="form-group row">
        <label for="end-date-input" class="col-2 col-form-label">Kuni</label>
        <div class="col-10">
            <input class="form-control" type="date" value="2018-08-19" min="2018-01-01" max="2018-12-31" id="end-date-input">
        </div>
    </div>
</div>
<!--Chart Part-->
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-chart-area"></i>
    Niiskus</div>
    <div class="card-body">
        <canvas id="myAreaChart" width="100%" height="30"></canvas>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
<p id="demo"></p>

<!-- Page level plugin JavaScript-->
<script src="vendor/chart.js/Chart.min.js"></script>
<script>
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var myObj = JSON.parse(this.responseText);
        document.getElementById("demo").innerHTML = myObj[1];
    }
    };
    xmlhttp.open("GET", "pages/tund2/getData.php", true);
    xmlhttp.send();
</script>
<!-- Demo scripts for this page-->
<script src="js/demo/chart-area-demo.js"></script>
<?php if($_GET['rel']!='tab'){ echo "</div>";} ?>