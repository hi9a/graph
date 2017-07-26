<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="<?=base_url();?>style/graph.css"></style>
<script type="text/javascript" src="<?=base_url();?>js/Flotr2-master/flotr2.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>js/jquery-3.2.1.min.js"></script>
<?php /*<script type="text/javascript" src="<?=base_url();?>js/graph.js"></script>*/?>
<title>graph test</title>
</head>
<body>
<p class="graph-title">折れ線グラフ</p>
<div id="graph"></div>
<script type="text/javascript">
    $function() {

        (function basic(container) {
            var data = JSON.parse('<?php echo json_encode($data); ?>');
            var plots = [];
            var x = 0;

            for(row of data) {
                plotXandY = [];
                plotXandY[0] = Date.parse(row['date_time']);
                plotXandY[1] = parseInt(row['value'], 10);
                plots[x] = plotXandY;
                x++;
            }

            var data = [{
                data: plots,
                label: "プロダクトA"
            }];

            function labelFn(label) {
                return label;
            }

            graph = Flotr.draw(container, data, {
                legend: {
                    position: "se",
                    labelFormatter: labelFn,
                    backgroundColor: "#D2E8FF"
                },
                xaxis: {
                    mode: "time",
                    timeFormat: "%m/%d"
                },
                HtmlText: false
            });
        })(document.getElementById("graph"));
    }, false);
</script>
</body>
</html>