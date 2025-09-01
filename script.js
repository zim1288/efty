function validateAndSubmit(event) {
  event.preventDefault(); // Stop form from submitting immediately

  const questions = ["q1","q2","q3","q4","q5"];
  let allAnswered = true;

  // Remove previous warnings
  document.querySelectorAll(".warning").forEach(w => w.remove());

  // Check each question
  questions.forEach(q => {
    let selected = document.querySelector(`input[name="${q}"]:checked`);
    if (!selected) {
      let questionDiv = document.querySelector(`input[name="${q}"]`).closest(".question");
      let warning = document.createElement("div");
      warning.className = "warning";
      warning.textContent = "⚠ You need to answer this question first!";
      questionDiv.prepend(warning);
      allAnswered = false;
    }
  });

  // Submit if all answered
  if (allAnswered) {
    document.getElementById("examForm").submit();
  }
}
