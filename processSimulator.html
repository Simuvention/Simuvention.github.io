<!DOCTYPE html>
<html lang = "en-US"> 

  <head>
    <meta charset = "UTF-8">
    <title>processSimulator.php</title>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  
  <script>
//    setTimeout(function () { window.location.href= 'Trial.html'; // redirection address, back to home screen
//},5000); // Redirect after 5 seconds
//adapted from http://stackoverflow.com/questions/6119451/page-redirect-after-certain-time-php
  </script>  
  </head>
  <body>
    
    <h1>The data you provided was: </h1>
    <h3>You will be redirected back to the home page shortly...</h3>
    <?php
    //read data from form
    $firstName = filter_input(INPUT_POST, "firstName");
    $lastName = filter_input(INPUT_POST, "lastName");
    // previous code now with heredoc below //print "<h1>Hi, $userName!</h1>";
    $email = filter_input(INPUT_POST, "email");
    $NCBI = filter_input(INPUT_POST, "NCBIchoice");
    $reaction = filter_input(INPUT_POST, "reaction");
    // previous code now with heredoc below //print "<p>The car you chose was a $car, what a brilliant choice $userName</p>";
    
    $modelSeedResource;
    $seedModelNo;
    //B.subtilis
    if($NCBI == 224308){$modelSeedResource = "Opt224308.1.xml";}
    if($NCBI == 224308){$seedModelNo = "224308.1";}
      //E.coli
    if($NCBI == 83333){$modelSeedResource = "Opt83333.1.xml";}
    if($NCBI == 83333){$seedModelNo = "83333.1";}
      //S.aureus
    if($NCBI == 158879){$modelSeedResource = "Opt158878.1.xml";}
    if($NCBI == 158879){$seedModelNo = "158879.1";}
    
 //print results to user, using a heredoc
print <<<HERE
 <h1>Hi, $firstName $lastName!</h1>
 <p>The NCBI number of the organism you chose was: $NCBI </p>
 <p>Resource: $modelSeedResource</p>
 <p>SEED Model: $seedModelNo</p>
 <p>Reaction: $reaction</p>
 <p>Your email address is $email</p>
HERE;
// end HTML inclusion of code

//Contents to be output to a file, using a heredoc
   $output = <<<HERE
# Imports the sybeam module.
import sybeam
# Use the data in the Bacillus subtilis SEED model to extract and process the # reaction data. Last two pieces of information provide taxonomy data (SEED # and NCBI respectively)
# about the organism. The processed data is stored in # the file data.xml.
sybeam.data.seed_OPT_xml_data("$modelSeedResource", "data.xml", $seedModelNo, $NCBI)
# Same as the above, but for E. coli and S. aureus respectively.
sybeam.data.seed_OPT_xml_data("Opt83333.1.xml",  "data.xml", 83333.1, 83333)
sybeam.data.seed_OPT_xml_data("Opt158879.1.xml", "data.xml", 158879.1, 158879)
import simulatorRun
HERE;

//Contents to be output to a file, using a heredoc
   $outputExtra = <<<HERE
# Imports the sybeam module.
import sybeam
sybeam.simulate.setup_simulation("data.xml", "$reaction", $NCBI, "biomass_224308_1.pkl", "224308.1_m9_nitrogen_limited.pkl")
sybeam.simulate.simulate("riboflavin_nitrogen_limited.txt", solver="cglpk")
HERE;

   
 //open a file for output
   $fp = fopen/*Open connection to file- made if does not already exist*/("simulatorSetUp.py", "w"); // "a" appends to the end of the document | "w" overwrites the contents of the file
   fwrite($fp, $output); //write the file opened in $output
   fclose($fp);//close connection to the file

   
//open a file for output
   $fp = fopen/*Open connection to file- made if does not already exist*/("simulatorRun.py", "w"); // "a" appends to the end of the document | "w" overwrites the contents of the file
   fwrite($fp, $outputExtra); //write the file opened in $output
   fclose($fp);//close connection to the file
   ?>
   
   
   <?php echo exec("commandSim.bat"); ?> <br />
<!--for exec() on button press- http://stackoverflow.com/questions/7540847/html-button-to-call-php-shell-exec-command-->
<INPUT type="button" value="Click to check job status" onClick="window.open('checkStatus.php','windowname',' width=400,height=200')">
<!--Adapted from- http://stackoverflow.com/questions/7865669/opening-a-new-page-in-php-on-a-button-press-->
<!--<a href="checkStatus.php">Click to check job status</a>-->
  </body>
</html>