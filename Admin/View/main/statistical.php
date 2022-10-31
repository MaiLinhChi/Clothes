<meta charset="UTF-8">
<!--Load the AJAX API-->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
    google.load('visualization', '1.0', {'packages':['corechart']});
    google.setOnLoadCallback(drawVisualization);
    function drawVisualization() {
        const rows = new Array();
        const data = new google.visualization.DataTable();
        const tenhh = new Array();
        const soluong = new Array();
        let dataName = 0;
        let dataQuantity = 0;

        <?php
            $Product = new Product();
            $result = $Product->getListProductStatistical();
            while($product = $result->fetch())
            {
                $tenhh = $product["tenhh"];
                $soluong = $product["soluongban"];
                echo "tenhh.push('".$tenhh."');";
                echo "soluong.push('".$soluong."');";
            }
        ?>

        for(let i = 0; i < tenhh.length; i++) {
            dataName = tenhh[i];
            dataQuantity = Number(soluong[i]);
            rows.push([dataName, dataQuantity]);
        }
        data.addColumn("string", "Hàng hóa");
        data.addColumn("number", "Số lượng bán");

        data.addRows(rows);

        const option = {
            title: "Thống kê số lượng các mặt hàng được bán",
            width: "100%",
            height: 500,
            is3D: true,
            backgroundColor: "gray"
        };

        const chart = new google.visualization.PieChart(document.getElementById("chart_div"));
        chart.draw(data, option);
    }             
</script>

<div class="statistical">
    <h1 class="text-center">Thống kê sản phẩm</h1>
    <div class="w-100 my-5" id="chart_div"></div>
</div>

 