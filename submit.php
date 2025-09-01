<?php
$answers = [
  "q1" => "correct",
  "q2" => "correct",
  "q3" => "correct",
  "q4" => "correct",
  "q5" => "correct"
];

$score = 0;
$total = count($answers);
$errors = [];

foreach ($answers as $q => $correct) {
    if (!isset($_POST[$q]) || empty($_POST[$q])) {
        $errors[] = "You did not answer question $q!";
    } elseif ($_POST[$q] === $correct) {
        $score++;
    }
}

// Start HTML output
echo "<div style='text-align:center; margin-top:50px; font-family: Arial, sans-serif;'>";

if (!empty($errors)) {
    echo "<div style='display:inline-block; padding:20px; border: 2px solid #007BFF; border-radius:10px; background: rgba(0,123,255,0.1);'>";
    echo "<h2 style='color:red; font-size:24px;'>Please fix the errors</h2>";
    echo "<ul style='color:red; font-size:18px; text-align:left;'>";
    foreach ($errors as $err) {
        echo "<li>$err</li>";
    }
    echo "</ul>";
    echo "<a href='index.html'><button style='background:#28a745; color:white; padding:10px 25px; border:none; border-radius:6px; cursor:pointer; font-size:18px;'>Go Back to Exam</button></a>";
    echo "</div>";
} else {
    $percent = ($score / $total) * 100;
    echo "<div style='display:inline-block; padding:30px; border: 2px solid #007BFF; border-radius:15px; background: rgba(0,123,255,0.1); margin-top:250px;'>"; 
// ↑ Added margin-top:120px to push it down
    echo "<h2 style='font-size:30px; margin-bottom:20px;'>Exam Results</h2>";
    echo "<p style='font-size:22px;'>You got <b>$score</b> out of <b>$total</b> correct.</p>";
    echo "<p style='font-size:22px;'>Your Score: <b>$percent%</b></p>";
    echo "<br><a href='index.html'><button style='background:#28a745; color:white; padding:12px 30px; border:none; border-radius:8px; cursor:pointer; font-size:18px;'>Try Again</button></a>";
    echo "</div>";
}

echo "</div>";
?>
