<!DOCTYPE html>
<!--Last updated by Darius Clark 
julia smith 
on 11/1/2012-->
<html>
<head>
	<title>Upload a picture</title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="js/javascript.js"></script>	
</head>
<body  id="uploadpic">
<? session_start();	
	include('navbar.php');
?>
<h1 >Upload Picture</h1>


<form id="upload"  name="upload" method="post" action="php/uploadphoto.php" >
<table>
		<tr>
			<td><label for="browse"  >Select File:</label></td>
			<td><input type="file" name="browse" id="browse"/></td>
		</tr>
		<tr>
			<td> <label for="title1">Picture Title:</label></td>
			<td><input type="text" name="title1" id="title1"/></td>
		</tr>
		<tr>
			<td><label for="description1">Description:</label></td>
			<td><input type="text" name="description" id="description1"/></td>
		</tr>
		<tr>
			<td><label for="tags1">Tags:</label></td>
			<td><input type="text" name="tags" id="tags1"/><td>   
		</tr>
		</table>
			
		Choose date:
		<input type="date" name="date" value="" placeholder="MM/DD/YYYY"/>
		<p></p>
		
			Privacy:
			<select id="privacy" name="privacy">
			<option value="public">Public</option>
			<option value="private">Private</option>
			</select>
		<p></p>
<input type="submit" value="Upload"class="button"/>
		
		
</form>


</body>

</html>
