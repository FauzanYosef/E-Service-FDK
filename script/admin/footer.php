		<div class="row">
			<div class="col-sm-12">
				<!-- <p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p> -->
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	
	<script src="../../assets/js/jquery-1.11.1.min.js"></script>
	<script src="../../assets/js/bootstrap.min.js"></script>
	<script src="../../assets/js/chart.min.js"></script>
	<script src="../../assets/js/chart-data.js"></script>
	<script src="../../assets/js/easypiechart.js"></script>
	<script src="../../assets/js/easypiechart-data.js"></script>
	<script src="../../assets/js/bootstrap-datepicker.js"></script>
	<script src="../../assets/js/custom.js"></script>
	<script>
	window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
	var chart2 = document.getElementById("bar-chart").getContext("2d");
	window.myBar = new Chart(chart2).Bar(barChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
	var chart3 = document.getElementById("doughnut-chart").getContext("2d");
	window.myDoughnut = new Chart(chart3).Doughnut(doughnutData, {
	responsive: true,
	segmentShowStroke: false
	});
	var chart4 = document.getElementById("pie-chart").getContext("2d");
	window.myPie = new Chart(chart4).Pie(pieData, {
	responsive: true,
	segmentShowStroke: false
	});
	var chart5 = document.getElementById("radar-chart").getContext("2d");
	window.myRadarChart = new Chart(chart5).Radar(radarData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.05)",
	angleLineColor: "rgba(0,0,0,.2)"
	});
	var chart6 = document.getElementById("polar-area-chart").getContext("2d");
	window.myPolarAreaChart = new Chart(chart6).PolarArea(polarData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	segmentShowStroke: false
	});
};
	</script>
	<script type="text/javascript">
	 $(function(){
	  $(".datepicker").datepicker({
	      format: 'dd-mm-yyyy',
	      autoclose: true,
	      todayHighlight: true,
	  });
	 });
	</script>	
</body>
</html>
