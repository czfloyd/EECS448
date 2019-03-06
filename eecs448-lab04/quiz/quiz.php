<?php
//access the global array called $_POST to get the values from the text fields
echo '<head><title>Results</title><link href="../../styles/style.css" rel="stylesheet" type="text/css" /></head>';

$answers = array($_POST["q1"], $_POST["q2"], $_POST["q3"], $_POST["q4"], $_POST["q5"]);
$questions = array(
  "Question 1: Ostriches can sprint at speeds up to:",
  "Question 2: The Ostriches' wingspan is about:",
  "Question 3: Ostrich eggs can be as long as:",
  "Question 4: Ostriches have:",
  "Question 5: Ostriches' feet each have:"
);
$corrects = array("70 km/hr", "2 meters", "15 cm", "3 stomachs", "2 toes");

$numRight = 0;

for ($i = 0; $i < 5; $i++){
  echo $questions[$i] . "<br>";
  echo "You answered: " . $answers[$i] . "<br>";
  echo "Correct answer: " . $corrects[$i] . "<br> <br>";
  if ($answers[$i] == $corrects[$i]){
    $numRight++;
  }
}
echo "You got " . $numRight . " out of 5 correct!<br>";
echo "You scored a " . ($numRight / 5 * 100) . "%!"

?>
