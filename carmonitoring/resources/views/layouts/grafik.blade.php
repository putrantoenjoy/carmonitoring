<meta charset="UTF-8">
<script type="text/javascript">
window.onload = function() {

var options = {
	title: {
		text: "Pemakaian Kendaraan"
	},
	data: [{
			type: "pie",
			startAngle: 45,
			showInLegend: "true",
			indexLabel: "{label} ({y})",
			yValueFormatString:"#,##0.#"%"",
			dataPoints: [
				{ label: "kendaraan pengangkut orang", y: 3 },
				{ label: "kendaraan pengangkut barang", y: 1 },
			]
	}]
};
$("#chartContainer").CanvasJSChart(options);

}
</script>