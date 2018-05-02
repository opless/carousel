<html>
<head><title>foo</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script something="somethingelse">
var index = -1;

function LoadIFRAME()
{
	$(function() {
		index ++;
		$.getJSON(
			"./picker.php?id="+index,
			function(data) { $('#debug').text(data);$('#target').attr('src',data+"/"); });
	});
}

setInterval( LoadIFRAME, 3000); // x000 seconds
LoadIFRAME();
</script>

</head>
<body>
<p id="debug">DEBUG</p>
<iframe id="target" width="90%" height="90%" border=0 src="about:blank" />
</body>
</html>
