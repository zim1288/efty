<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score = 0;

    $answers = array(
        "q1" => "<a>",
        "q2" => "color",
        "q3" => "HTML",
        "q4" => "echo",
        "q5" => "//"
    );

    foreach ($answers as $key => $value) {
        if (isset($_POST[$key]) && $_POST[$key] == $value) {
            $score++;
        }
    }

    echo "<h2>Exam Submitted!</h2>";
    echo "<p>Your score: $score out of ".count($answers)."</p>";
} else {
    echo "Invalid request.";
}
?>
