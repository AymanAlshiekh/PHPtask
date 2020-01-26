<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Php Task</title>
    <link href="cssStyle.css" rel="stylesheet" type="text/css">
    <?php include 'phpTask.php';?>
</head>
<body>

  <h3 class="title lazy">First 3 weeks Result</h3>

   <table id="displayTable" class="lazy hvr-grow">
     <tr>
       <th>Team</th>
       <th>Times of Win</th>
       <th>Times of Lose </th>
       <th>Strength History</th>
     </tr>
     <tr>
       <td>Team A</td>
       <td><?php echo $resultsLastMatches[0][0]; ?></td>
       <td><?php echo $resultsLastMatches[0][1]; ?></td>
       <td><?php echo $resultsLastMatches[0][2]; ?></td>
     </tr>

     <tr>
       <td>Team B</td>
       <td><?php echo $resultsLastMatches[1][0]; ?></td>
       <td><?php echo $resultsLastMatches[1][1]; ?></td>
       <td><?php echo $resultsLastMatches[1][2]; ?></td>
     </tr>

     <tr>
       <td>Team C</td>
       <td><?php echo $resultsLastMatches[2][0]; ?></td>
       <td><?php echo $resultsLastMatches[2][1]; ?></td>
       <td><?php echo $resultsLastMatches[2][2]; ?></td>
     </tr>

     <tr>
       <td>Team D</td>
       <td><?php echo $resultsLastMatches[3][0]; ?></td>
       <td><?php echo $resultsLastMatches[3][1]; ?></td>
       <td><?php echo $resultsLastMatches[3][2]; ?></td>
     </tr>

   </table>

  <h3 class="title lazy">Last Week 4th Result</h3>
  <table id="displayTable" class="lazy">
    <tr>
      <th>Match</th>
      <th>Winner</th>

    </tr>
    <tr>
      <td>B and C</td>
      <td><?php echo $a[0]; ?></td>
    </tr>

    <tr>
      <td>B and D</td>
      <td><?php echo $a[1]; ?></td>
    </tr>

    <tr>
      <td>C and D</td>
      <td><?php echo $a[2]; ?></td>
    </tr>
  </table>

  <h3 class="title lazy">Finally Result</h3>

   <table id="displayTable" class="lazy">
     <tr>
       <th>Team</th>
       <th>Times of Win</th>
       <th>Times of Lose </th>
       <th>Strength History</th>
     </tr>
     <tr>
       <td>Team A</td>
       <td><?php echo $finallResultsLastMatches[0][0]; ?></td>
       <td><?php echo $finallResultsLastMatches[0][1]; ?></td>
       <td><?php echo $finallResultsLastMatches[0][2]; ?></td>
     </tr>

     <tr>
       <td>Team B</td>
       <td><?php echo $finallResultsLastMatches[1][0]; ?></td>
       <td><?php echo $finallResultsLastMatches[1][1]; ?></td>
       <td><?php echo $finallResultsLastMatches[1][2]; ?></td>
     </tr>

     <tr>
       <td>Team C</td>
       <td><?php echo $finallResultsLastMatches[2][0]; ?></td>
       <td><?php echo $finallResultsLastMatches[2][1]; ?></td>
       <td><?php echo $finallResultsLastMatches[2][2]; ?></td>
     </tr>

     <tr>
       <td>Team D</td>
       <td><?php echo $finallResultsLastMatches[3][0]; ?></td>
       <td><?php echo $finallResultsLastMatches[3][1]; ?></td>
       <td><?php echo $finallResultsLastMatches[3][2]; ?></td>
     </tr>

   </table>

   <script src="jquery-3.4.1.min.js"></script>
   <script type="text/javascript" src="jquery.lazy.min.js"></script>
   <script src="jsCode.js"></script>
   <script src="jquery.nicescroll.min.js"></script>
    <script src="wow.min.js"></script>
    <script> new WOW().init(); </script>
   </body>

   </html>
