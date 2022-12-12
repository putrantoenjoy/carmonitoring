<meta charset="UTF-8">
<script type="text/javascript">
window.onload = function() {

var options = {
	title: {
		text: "Kendaraan"
	},
	data: [{
			type: "pie",
			startAngle: 45,
			showInLegend: "true",
			indexLabel: "{label} ({y})",
			yValueFormatString:"#,##0.#"%"",
			dataPoints: [
				{ label: "Angkutan Orang", y: 36 },
				{ label: "Angkutan Barang", y: 31 },
			]
	}]
};
$("#chartContainer").CanvasJSChart(options);

}
</script>