<?php
class FootballLeague
{

    public function predictTheWinner(&$resultsLastMatches, $row, $col1, $col2)
    {
        return $resultsLastMatches[$row][$col1] * 0.45 + $resultsLastMatches[$row][$col2] * 0.55 ;

    }

    public function theWinner(&$resultsLastMatches, &$finallResultsLastMatches)
    {
      $teamB = $this->predictTheWinner($resultsLastMatches,1,0,2);
      $teamC = $this->predictTheWinner($resultsLastMatches,2,0,2);
      $teamD = $this->predictTheWinner($resultsLastMatches,3,0,2);

      $matchResult = [];

      if($teamB > $teamC ){
        $matchResult[0] = "B winner";
        $finallResultsLastMatches[1][0]++;//increase number of Times of Win
        $finallResultsLastMatches[2][1]++;//increase number of Times of lose
      }else {
        $matchResult[0] = "C winner";
        $finallResultsLastMatches[2][0]++;//increase number of Times of Win
        $finallResultsLastMatches[1][1]++;//increase number of Times of lose
      }


      if($teamB > $teamD){
        $matchResult[1] = "B winner";
        $finallResultsLastMatches[1][0]++;//increase number of Times of Win
        $finallResultsLastMatches[3][1]++;//increase number of Times of lose
      }else {
        $matchResult[1] = "D winner";
        $finallResultsLastMatches[3][0]++;//increase number of Times of Win
        $finallResultsLastMatches[1][1]++;//increase number of Times of lose
      }

      if($teamC > $teamD  ){
        $matchResult[2] = "C winner";
        $finallResultsLastMatches[2][0]++;//increase number of Times of Win
        $finallResultsLastMatches[3][1]++;//increase number of Times of lose
      }else {
        $matchResult[2]  = "D winner";
        $finallResultsLastMatches[3][0]++;//increase number of Times of Win
        $finallResultsLastMatches[2][1]++;//increase number of Times of lose
      }


      return $matchResult;
   }
}//end of class

  $resultsLastMatches = array
  (
  array(4,2,0.47),
  array(3,1,0.55),
  array(2,2,0.63),
  array(0,4,0.88)
  );

  $finallResultsLastMatches = array
  (
  array(4,2,0.47),
  array(3,1,0.55),
  array(2,2,0.63),
  array(0,4,0.88)
  );

  $result = new FootballLeague();

  $a = $result->theWinner($resultsLastMatches, $finallResultsLastMatches);
 ?>
