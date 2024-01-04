<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Highcharts Example</title>

		@include('admin.templates_landing.partials.head')
	</head>
	<body>
<script src="{{ asset('template/grafik/code/highcharts.js') }}"></script>
<script src="{{ asset('template/grafik/code/modules/exporting.js') }}"></script>
<script src="{{ asset('template/grafik/code/modules/export-data.js') }}"></script>
<script src="{{ asset('template/grafik/code/modules/accessibility.js') }}"></script>

<figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
        Chart showing column comparisons with negative values.
        Column charts are commonly used to compare values, and remains one of
        the most popular and readable types of charts.
    </p>
</figure>


		<script type="text/javascript">
      Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Column chart with negative values'
        },
        xAxis: {
            categories: ['Apples', 'Oranges', 'Pears', 'Grapes', 'Bananas']
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'John',
            data: [5, 3, 4, 7, 2]
        }, {
            name: 'Jane',
            data: [2, 2, 3, 2, 1]
        }, {
            name: 'Joe',
            data: [3, 4, 4, 2, 5]
        }]
      });
		</script>
	</body>
</html>
