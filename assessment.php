<?php include '../script/pages-header.php'; ?> 
<?php
if (!isset($_SESSION['user_id'])) {
    header("Location: ../index.php");
    exit();
}
?>
<!-- Rest of your assessment.php HTML and JavaScript -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Career Assessment - Career Guidance Portal</title>
    <link rel="stylesheet" href="../Assets/css/styles.css" />
    <link rel="stylesheet" href="../Assets/css/asses.css">
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js"></script>
    <script src="scripts.js"></script>

  </head>
  <body>
    

    <main class="assessment-container">
      <h1>Career Assessment Test</h1>
      <p>Choose your field of interest to start the assessment:</p>

      <div class="field-buttons">
        <button class="field-btn" onclick="startQuiz('arts')">Arts</button>
        <button class="field-btn" onclick="startQuiz('commerce')">
          Commerce
        </button>
        <button class="field-btn" onclick="startQuiz('science')">
          Science
        </button>
      </div>

      <div id="quiz-container" class="quiz-container">
        <h2 id="field-title"></h2>
        <div id="question-container" class="question"></div>
        <div id="options-container" class="options"></div>
      </div>

      <div id="result-container" class="result-container">
        <h2>Your Assessment Results</h2>
        <div id="career-match"></div>
        <div id="roadmap" class="roadmap"></div>
      </div>
    </main>

    <script>
      const quizData = {
        arts: {
          questions: [
            {
              question: "How comfortable are you with creative expression?",
              options: [
                "Very comfortable",
                "Somewhat comfortable",
                "Neutral",
                "Not very comfortable",
              ],
            },
            {
              question: "Do you enjoy analyzing and interpreting visual media?",
              options: ["Very much", "Somewhat", "Neutral", "Not really"],
            },
            {
              question: "How important is self-expression in your life?",
              options: [
                "Very important",
                "Somewhat important",
                "Neutral",
                "Not important",
              ],
            },
            {
              question: "Do you enjoy working on creative projects?",
              options: ["Always", "Sometimes", "Rarely", "Never"],
            },
            {
              question: "How do you feel about public speaking or performance?",
              options: [
                "Very comfortable",
                "Somewhat comfortable",
                "Nervous",
                "Very uncomfortable",
              ],
            },
            {
              question: "Do you enjoy writing or storytelling?",
              options: ["Very much", "Somewhat", "Not really", "Not at all"],
            },
            {
              question:
                "How interested are you in different cultures and their art forms?",
              options: [
                "Very interested",
                "Somewhat interested",
                "Neutral",
                "Not interested",
              ],
            },
            {
              question:
                "Do you prefer working independently or collaboratively?",
              options: [
                "Always independently",
                "Mostly independently",
                "Mostly collaboratively",
                "Always collaboratively",
              ],
            },
            {
              question: "How important is aesthetic beauty to you?",
              options: [
                "Very important",
                "Somewhat important",
                "Neutral",
                "Not important",
              ],
            },
            {
              question:
                "Do you enjoy learning about history and its influence on art?",
              options: ["Very much", "Somewhat", "Not really", "Not at all"],
            },
            {
              question: "How do you handle criticism of your creative work?",
              options: [
                "Very well",
                "Fairly well",
                "With difficulty",
                "Poorly",
              ],
            },
            {
              question: "Are you interested in design and visual composition?",
              options: [
                "Very interested",
                "Somewhat interested",
                "Neutral",
                "Not interested",
              ],
            },
            {
              question: "How comfortable are you with abstract concepts?",
              options: [
                "Very comfortable",
                "Somewhat comfortable",
                "Neutral",
                "Not comfortable",
              ],
            },
            {
              question: "Do you enjoy visiting museums and art galleries?",
              options: ["Very much", "Sometimes", "Rarely", "Never"],
            },
            {
              question: "How important is innovation in your work?",
              options: [
                "Very important",
                "Somewhat important",
                "Neutral",
                "Not important",
              ],
            },
          ],
          careers: {
            creative: {
              title: "Creative Arts Professional",
              description:
                "You show strong potential for creative expression and visual communication.",
              roadmap: [
                "1. Develop a strong portfolio",
                "2. Consider a Bachelor's degree in Fine Arts or related field",
                "3. Gain practical experience through internships",
                "4. Network with other artists and professionals",
                "5. Consider specialized training in your preferred medium",
                "6. Participate in exhibitions and competitions",
              ],
            },
            performance: {
              title: "Performance Artist",
              description:
                "Your results indicate strong potential in performance-based arts.",
              roadmap: [
                "1. Take acting, dance, or music classes",
                "2. Join performing arts groups",
                "3. Attend workshops and masterclasses",
                "4. Build a performance portfolio",
                "5. Consider formal training at a performing arts school",
                "6. Gain experience through local productions",
              ],
            },
          },
        },
        commerce: {
          questions: [
            {
              question: "How interested are you in business and economics?",
              options: [
                "Very interested",
                "Somewhat interested",
                "Neutral",
                "Not interested",
              ],
            },
            {
              question: "Do you enjoy working with numbers and financial data?",
              options: ["Very much", "Somewhat", "Not really", "Not at all"],
            },
            {
              question:
                "How comfortable are you with risk-taking in business situations?",
              options: [
                "Very comfortable",
                "Somewhat comfortable",
                "Neutral",
                "Not comfortable",
              ],
            },
            {
              question: "Do you enjoy analyzing market trends?",
              options: ["Very much", "Somewhat", "Not really", "Not at all"],
            },
            {
              question: "How good are you at negotiating?",
              options: ["Excellent", "Good", "Fair", "Poor"],
            },
            {
              question: "Are you interested in marketing and advertising?",
              options: [
                "Very interested",
                "Somewhat interested",
                "Neutral",
                "Not interested",
              ],
            },
            {
              question: "How well do you handle leadership roles?",
              options: ["Very well", "Well", "Fairly", "Not well"],
            },
            {
              question: "Do you enjoy problem-solving in business contexts?",
              options: ["Very much", "Somewhat", "Not really", "Not at all"],
            },
            {
              question: "How interested are you in global business?",
              options: [
                "Very interested",
                "Somewhat interested",
                "Neutral",
                "Not interested",
              ],
            },
            {
              question: "Do you enjoy working in team settings?",
              options: ["Very much", "Somewhat", "Not really", "Not at all"],
            },
            {
              question: "How comfortable are you with public speaking?",
              options: [
                "Very comfortable",
                "Somewhat comfortable",
                "Neutral",
                "Not comfortable",
              ],
            },
            {
              question: "Are you interested in entrepreneurship?",
              options: [
                "Very interested",
                "Somewhat interested",
                "Neutral",
                "Not interested",
              ],
            },
            {
              question: "How well do you handle stress and pressure?",
              options: ["Very well", "Well", "Fairly", "Not well"],
            },
            {
              question: "Do you enjoy strategic planning?",
              options: ["Very much", "Somewhat", "Not really", "Not at all"],
            },
            {
              question: "How important is financial success to you?",
              options: [
                "Very important",
                "Important",
                "Somewhat important",
                "Not important",
              ],
            },
          ],
          careers: {
            finance: {
              title: "Financial Analyst",
              description:
                "You show strong analytical skills and interest in financial markets.",
              roadmap: [
                "1. Pursue a degree in Finance, Economics, or Business",
                "2. Gain relevant certifications (CFA, FRM)",
                "3. Develop strong analytical and Excel skills",
                "4. Complete internships at financial institutions",
                "5. Network with industry professionals",
                "6. Consider an MBA for career advancement",
              ],
            },
            business: {
              title: "Business Management",
              description:
                "Your profile indicates strong leadership and business acumen.",
              roadmap: [
                "1. Complete a BBA or similar business degree",
                "2. Gain experience through internships",
                "3. Develop leadership skills through projects",
                "4. Consider an MBA for advancement",
                "5. Build a professional network",
                "6. Gain international business exposure",
              ],
            },
          },
        },
        science: {
          questions: [
            {
              question: "How interested are you in scientific research?",
              options: [
                "Very interested",
                "Somewhat interested",
                "Neutral",
                "Not interested",
              ],
            },
            {
              question: "Do you enjoy solving complex problems?",
              options: ["Very much", "Somewhat", "Not really", "Not at all"],
            },
            {
              question: "How comfortable are you with laboratory work?",
              options: [
                "Very comfortable",
                "Somewhat comfortable",
                "Neutral",
                "Not comfortable",
              ],
            },
            {
              question: "Are you interested in technology and innovation?",
              options: [
                "Very interested",
                "Somewhat interested",
                "Neutral",
                "Not interested",
              ],
            },
            {
              question: "How do you feel about mathematical calculations?",
              options: ["Love them", "Like them", "Neutral", "Dislike them"],
            },
            {
              question: "Do you enjoy analyzing data and patterns?",
              options: ["Very much", "Somewhat", "Not really", "Not at all"],
            },
            {
              question:
                "How interested are you in understanding how things work?",
              options: [
                "Very interested",
                "Somewhat interested",
                "Neutral",
                "Not interested",
              ],
            },
            {
              question: "Do you enjoy conducting experiments?",
              options: ["Very much", "Somewhat", "Not really", "Not at all"],
            },
            {
              question: "How comfortable are you with abstract concepts?",
              options: [
                "Very comfortable",
                "Somewhat comfortable",
                "Neutral",
                "Not comfortable",
              ],
            },
            {
              question: "Are you interested in environmental science?",
              options: [
                "Very interested",
                "Somewhat interested",
                "Neutral",
                "Not interested",
              ],
            },
            {
              question:
                "How do you feel about working with computers and technology?",
              options: [
                "Very comfortable",
                "Comfortable",
                "Neutral",
                "Uncomfortable",
              ],
            },
            {
              question:
                "Do you enjoy learning about new scientific discoveries?",
              options: ["Very much", "Somewhat", "Not really", "Not at all"],
            },
            {
              question: "How important is precision and accuracy to you?",
              options: [
                "Very important",
                "Important",
                "Somewhat important",
                "Not important",
              ],
            },
            {
              question: "Are you interested in healthcare and medicine?",
              options: [
                "Very interested",
                "Somewhat interested",
                "Neutral",
                "Not interested",
              ],
            },
            {
              question: "Do you enjoy solving logical puzzles?",
              options: ["Very much", "Somewhat", "Not really", "Not at all"],
            },
          ],
          careers: {
            research: {
              title: "Scientific Researcher",
              description:
                "You show strong analytical skills and interest in scientific investigation.",
              roadmap: [
                "1. Complete a Bachelor's degree in your chosen scientific field",
                "2. Gain research experience through internships",
                "3. Pursue a Master's or Ph.D.",
                "4. Develop technical and analytical skills",
                "5. Publish research papers",
                "6. Network with other researchers",
              ],
            },
            tech: {
              title: "Technology Professional",
              description:
                "Your profile indicates strong aptitude for technology and innovation.",
              roadmap: [
                "1. Pursue a degree in Computer Science or related field",
                "2. Learn programming languages and tools",
                "3. Complete technical certifications",
                "4. Build a project portfolio",
                "5. Gain practical experience through internships",
                "6. Stay updated with latest technologies",
              ],
            },
          },
        },
      };

      let currentField = "";
      let currentQuestion = 0;
      let answers = [];

      function startQuiz(field) {
        currentField = field;
        currentQuestion = 0;
        answers = [];
        document.getElementById("quiz-container").style.display = "block";
        document.getElementById("result-container").style.display = "none";
        document.getElementById("field-title").textContent = `${
          field.charAt(0).toUpperCase() + field.slice(1)
        } Assessment`;
        showQuestion();
      }

      function showQuestion() {
        const questionData = quizData[currentField].questions[currentQuestion];
        const questionContainer = document.getElementById("question-container");
        const optionsContainer = document.getElementById("options-container");

        questionContainer.innerHTML = `
          <h3>Question ${currentQuestion + 1} of ${
          quizData[currentField].questions.length
        }</h3>
          <p>${questionData.question}</p>
        `;

        optionsContainer.innerHTML = questionData.options
          .map(
            (option, index) => `
          <button class="option-btn" onclick="selectAnswer(${index})">${option}</button>
        `
          )
          .join("");
      }

      function selectAnswer(answerIndex) {
        answers.push(answerIndex);
        if (currentQuestion < quizData[currentField].questions.length - 1) {
          currentQuestion++;
          showQuestion();
        } else {
          showResults();
        }
      }

      function showResults() {
        const score = calculateScore();
        const resultContainer = document.getElementById("result-container");
        const careerMatch = document.getElementById("career-match");
        const roadmap = document.getElementById("roadmap");

        document.getElementById("quiz-container").style.display = "none";
        resultContainer.style.display = "block";

        const career = determineCareer(score);
        careerMatch.innerHTML = `
          <h3>${career.title}</h3>
          <p>${career.description}</p>
        `;

        roadmap.innerHTML = `
          <h3>Your Career Roadmap:</h3>
          <ul>
            ${career.roadmap.map((step) => `<li>${step}</li>`).join("")}
          </ul>
        `;
      }

      function calculateScore() {
        return (
          answers.reduce((total, answer) => total + answer, 0) / answers.length
        );
      }

      function determineCareer(score) {
        const careers = quizData[currentField].careers;
        return score < 2
          ? Object.values(careers)[0]
          : Object.values(careers)[1];
      }
    </script>
  </body>
</html>
