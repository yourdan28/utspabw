<?php
   include("fusioncharts.php");
   include "koneksi.php";
?>

<html>
  <head>

    <title>Subject</title>

    <script src="js/fusioncharts.js"></script>
    <script src="js/themes/fusioncharts.theme.fusion.js"></script>
  </head>
   <body>
    <?php
      $strQuery = "select * from tb_slide";

      $result = $koneksi->query($strQuery) or exit("Error code ({$koneksi->error}): {$koneksi->error}");

      if ($result) {
          $arrData = array(
              "chart" => array(
                  "caption" => "Trending",
                  "showValues" => "0",
                  "theme" => "fusion"
                )
            );

          $arrData["data"] = array();
          while($row = mysqli_fetch_array($result)) {
            array_push($arrData["data"], array(
                "label" => $row["judul"],
                "value" => $row["id_slide"]
                )
            );
          }
          $jsonEncodedData = json_encode($arrData);

          $columnChart = new FusionCharts("column3D", "newChart" , 800, 400, "chart-1", "json", $jsonEncodedData);
          $columnChart->render();
          $koneksi->close();
      }
    ?>
    <div id="chart-1"></div>
   </body>
</html>
