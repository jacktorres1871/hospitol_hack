!DOCTYPE html>
<html>
<?php
	$firstname = "Aadarsh";
	$lastname = "Kenia";
	$disease_name = "Amnesia";
	$about_me = "Fun Loving";
?>

<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<title>profile</title>
</head>
<body>
	<table align="center">
      <tr>
        <td>
          <h1 id="lol"><?php echo $firstname, " ", $lastname;
					?></h1>
					<h3 id="place">Something about me: <?php echo $about_me;?></h3>
        </td>
        <td>
          <textarea rows="4" cols="50">
          </textarea><input type="submit" value="something about me">
        </td>
      </tr>
    </table>
<i>Desease I suffer from: <?php echo $disease_name;?></i>

		<table align="center" border="2">
			<tr>
				<td>
  				<p>Things that I like</p>
      			<ul>
        			<li class="1"><input type="text" name="like1" size="30" maxlength="30" class="theweeknd"/><button id="1">x</button></li>
        			<li class="2"><input type="text" name="lik2" size="30" maxlength="30" class="2"/><button id="2">x</button></li>
        			<li class="3"><input type="text" size="30" maxlength="30" name="Illness[]" class="3"><button id="3">x</button></li>
        			<div id="divName" class="4">
        			</div>
      			</ul>
      				<input type="button" value="Add Input" onClick="addInput('divName');">
			</td>
			<td>
  				<p aling="left">Goals I will like to achieve</p>
      			<ul>
        			<li class="5"><input type="text" name="like1" size="30" maxlength="30" class="5"/><button id="5">x</button></li>
        			<li class="6"><input type="text" name="lik2" size="30" maxlength="30" class="6"/><button id="6">x</button></li>
        			<li class="7"><input type="text" size="30" maxlength="30" name="Illness[]" class="7"><button id="7">x</button></li>
        			<div id="divName2" class="8">
			        </div>
      			</ul>
      				<input type="button" value="Add Input" onClick="Input('divName2');">
		  </td>
		</tr>
		<tr>
			<td>
				<p>Favorite Sport</p>
					<ul>
						<li><input type="text" name="like1" size="30" maxlength="30"/></li>
					</ul>
			</td>
			<td>
				<p>What is your favorite animal?</p>
				<ul>
					<li><input type="text" size="30" maxlength="30"/></li>
				</ul>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<p>Hobbies (Insert Three favorites)</p>
				<ul>
					<li><input type="text" size="30" maxlength="30"/></li>
					<li><input type="text" size="30" maxlength="30"/></li>
					<li><input type="text" size="30" maxlength="30" ></li>
				</ul>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<p>What is my favorite thing to do during my free time</p>
					<ul>
						<li><input type="text" name="like1" size="30" maxlength="30"/></li>
					</ul>
			</td>
		</tr>
	</table>
	<input type="button" value="submit" align="right">

</body>
<script src="../FrontEnd/javascript/profile.js"> </script>

</html>
