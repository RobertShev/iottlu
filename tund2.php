<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.php">TLU IOT</a>
    </li>
    <li class="breadcrumb-item active">Tund 2</li>
</ol>
<!--Chart Part-->
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-chart-area"></i>
    Niiskus</div>
    <div class="card-body">
    <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiODVmZTc3ZWEtMjRjYi00ZGNhLTljM2YtNmUxZGM0OWJmMDgyIiwidCI6ImVkMDE1NmY4LTFlOWUtNDE2ZC1hYWZlLWY2ZTIxYzAzNzMxMSJ9" frameborder="0" allowFullScreen="true"></iframe>
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