<!DOCTYPE html>
<html lang = "en-US"> 

  <head>
    <meta charset = "UTF-8">
    <title>Trial.php</title>
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script>//JavaScript to ensure only one checkbox is selected when asking about speed setting
$(document).ready(function(){
    $(':checkbox').bind('change', function() {
        var thisClass = $(this).attr('class');
        if ($(this).attr('checked')) {
            $(':checkbox.' + thisClass + ":not(#" + this.id + ")").removeAttr('checked');
        }
        else {
            $(this).attr('checked', 'checked');
        }
    });
});
</script>

<link rel="stylesheet" type="text/css" href="cssStyle.css">		
  </head>
  <body>
<form onsubmit="return validate();" method ="post" action="processSimulator.php">
<div id="page">
	<h1>Interventions simulator </h1>
	<p>Use the form below to specify the criteria of the organism you want to use and the product you require to over produce<br />
	Follow the form step by step to allow all the appropriate criteria to be specified in order to ensure all possible intervention are provided<br />
	Once completed press the submit button to send off your criteria, possible interventions will then be worked out<br />
	<p>Due to the duration of program used to work out possible interventions the results will be emailed to you</p>
		<fieldset>
      <p>
			<fieldset>
				<legend><b>Step One </b>- Organism</legend>       
				  <label>Pick the NCBI number of the organism you want to use:</label>
          <select name = "NCBIchoice">
						<option value = "224308">
							Bacillus Subtilis - 224308
						</option>
						<option value = "83333">
							Escherichia coli - 83333
						</option>
						<option value = "158879">
							Staphylococcus aureus - 158879
						</option>
					</select>
			</fieldset>
				</p>
				
				<p>
			 <fieldset>
					<legend><b>Step Two</b> - Reaction</legend>
          <label>Pick the product to be overproduced:</label>
          <select name = "reaction">
						<option value = "EX_cpd00220_e0">
							Riboflavin
						</option>
					</select>
			</fieldset>
				</p>
			
			<fieldset>
			<legend><b>Step Three</b> - Your details</legend>
			<table >
				<tr>
				<td><label>Please enter your first name: </label></td>
        <td><input type = "text" name = "firstName" style= "width:250px;" required="required" placeholder="eg.Siobhan"/></td>
				</tr>
				<tr>
				<td><label>Please enter your last name: </label></th>
        <td><input type = "text" name = "lastName" style= "width:250px;" required="required" placeholder="eg.Lister"/></td>
				</tr>
				<tr>
				<td><label>Please enter your email address: </label></td>
        <td><input type = "email" name = "email" style= "width:250px;" placeholder="eg.someone@somewhere.co.uk" required="required"/></td>
				</tr>
			</table>
			</fieldset>
			</select>
        </p>
				<fieldset>
					<legend><b>Step Five</b> - Completion</legend>
				<input type="submit" value="Submit" style="width: 300px"/> or <input type="reset" value="Reset" />
				</fieldset>
    </form>
		</fieldset>
</div>	
</body>
</html>
