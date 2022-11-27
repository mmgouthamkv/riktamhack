<html>
<head>

</head>
<body>
<form action="placeintodb.php" method="post">
<p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
<p><label for="file" style="cursor: pointer;">Upload Image</label></p>
<p><img id="output" width="200" /></p>

<script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>
<br><br>
<label>PROVIDE DESCRIPTION</label><br>
<textarea rows="6" cols="50" name="dis"></textarea><br>
<label>PROVIDE LOCATION</label><br>
<input type="text" name="location" ></input><br>
<label>PROVIDE DATE AND TIME</label><br>
<input type="text" name="dat" placeholder="hh:mm dd:mm:yyyy"></input><br>
<input type="submit" value="upload">
</form>
</body>
</html>