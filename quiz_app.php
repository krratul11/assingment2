<?php
// Example Function
$questions = [

    ['question' => 'What is 2 + 2?', 'correct' => '4'],
    ['question' => 'What is the capital of France?', 'correct' => 'Paris'],
    ['question' => 'Who wrote "Hamlet"?','correct' => 'Shakespeare'],
];

$answers=[];
foreach($questions as $index=>$question){
     echo ($index+1) . ". " . $question["question"]."\n";
     $answers[] = trim(readline("Your Answer: "));
}

// Evaluate Function

function evaluateQuiz(array $questions,array $answers):int{
    $score =0;
    foreach ($questions as $index => $question){
        if($answers[$index]=== $question['correct']){
          $score++;
        }
    }
    return $score;
}
// calculate score
$score =evaluateQuiz($questions, $answers);
echo "\nYou scored $score out of". count($questions)."\n";
 if($score ===count($questions)){
    echo "Excellent job! \n";
 }elseif($score>1){
    echo "Good Effort! \n";
 }else{
    echo "Better Luck next time! \n";
 }

?>