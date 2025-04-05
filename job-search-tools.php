<?php include '../script/pages-header.php'; ?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Job Search Tools - Career Compass</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <link rel="stylesheet" href="../Assets/css/styles.css" />
    <style>
      .job-search-container {
        max-width: 1200px;
        margin: 2rem auto;
        padding: 0 20px;
      }

      .career-field {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin-bottom: 2rem;
        overflow: hidden;
      }

      .field-header {
        background: #8b4513;
        color: white;
        padding: 1rem;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      .field-content {
        display: none;
        padding: 1.5rem;
      }

      .field-content.active {
        display: block;
      }

      .job-role {
        margin-bottom: 1.5rem;
        padding-bottom: 1.5rem;
        border-bottom: 1px solid #eee;
      }

      .job-role:last-child {
        border-bottom: none;
      }

      .job-role h3 {
        color: #2c3e50;
        margin-bottom: 1rem;
      }

      .tips-list {
        list-style-type: none;
        padding-left: 0;
      }

      .tips-list li {
        margin-bottom: 0.5rem;
        padding-left: 1.5rem;
        position: relative;
      }

      .tips-list li:before {
        content: "→";
        position: absolute;
        left: 0;
        color: #8b4513;
      }

      .search-bar {
        margin: 2rem 0;
        display: flex;
        gap: 1rem;
      }

      .search-bar input {
        flex: 1;
        padding: 0.8rem;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 1rem;
      }

      .search-bar button {
        padding: 0.8rem 1.5rem;
        background: #8b4513;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      .search-bar button:hover {
        background: #654321;
      }

      .field-icon {
        margin-right: 1rem;
        width: 24px;
        text-align: center;
      }

      .job-search-container h1 {
        text-align: center;
        margin-top: 4rem;
        color: #2c3e50;
      }

      .job-search-container > p {
        text-align: center;
        margin-bottom: 2rem;
        color: #666;
      }

      nav {
        background: #8b4513;
        padding: 1rem 0;
        position: fixed;
        width: 100%;
        top: 0;
        z-index: 1000;
      }

      body {
        padding-top: 60px;
      }

      .career-section {
        padding: 20px;
        margin: 20px 0;
        border-radius: 8px;
        background-color: #f9f9f9;
      }

      .tool-list {
        list-style-type: none;
        padding-left: 0;
      }

      .tool-list li {
        margin: 10px 0;
        padding: 10px;
        background-color: white;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      }

      .career-title {
        color: #2c3e50;
        border-bottom: 2px solid #3498db;
        padding-bottom: 10px;
        margin-bottom: 20px;
      }

      .back-to-top {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: #3498db;
        color: white;
        padding: 10px 15px;
        border-radius: 5px;
        text-decoration: none;
      }

      .quick-nav {
        position: sticky;
        top: 20px;
        background-color: white;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      }

      .quick-nav a {
        display: block;
        margin: 5px 0;
        color: #2c3e50;
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    <!-- Navigation (reusing the same navigation from main page) -->


    <div class="job-search-container">
      <h1>Job Search Tools & Tips</h1>
      <p>
        Discover field-specific strategies and tips to enhance your job search
        in your chosen career path.
      </p>

      <div class="search-bar">
        <input
          type="text"
          id="careerSearch"
          placeholder="Search for a career field or role..."
        />
        <button onclick="searchCareers()">
          <i class="fas fa-search"></i> Search
        </button>
      </div>

      <!-- Information Technology Section -->
      <div class="career-field">
        <div class="field-header" onclick="toggleField(this)">
          <h2>
            <i class="fas fa-laptop-code field-icon"></i> Information Technology
            (IT)
          </h2>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="field-content">
          <div class="job-role">
            <h3>Software Engineer</h3>
            <ul class="tips-list">
              <li>Build a strong GitHub portfolio with personal projects</li>
              <li>
                Practice coding challenges on platforms like LeetCode and
                HackerRank
              </li>
              <li>Contribute to open-source projects</li>
              <li>
                Stay updated with latest programming languages and frameworks
              </li>
              <li>Create a technical blog to showcase your knowledge</li>
            </ul>
          </div>
          <div class="job-role">
            <h3>Data Scientist</h3>
            <ul class="tips-list">
              <li>Create a portfolio of data analysis projects</li>
              <li>Master Python, R, and SQL</li>
              <li>Participate in Kaggle competitions</li>
              <li>Get certifications in machine learning and data science</li>
              <li>
                Network with data science communities on LinkedIn and Twitter
              </li>
            </ul>
          </div>
          <!-- Add other IT roles similarly -->
        </div>
      </div>

      <!-- Healthcare Section -->
      <div class="career-field">
        <div class="field-header" onclick="toggleField(this)">
          <h2><i class="fas fa-hospital field-icon"></i> Healthcare</h2>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="field-content">
          <div class="job-role">
            <h3>Doctor</h3>
            <ul class="tips-list">
              <li>
                Build strong clinical experience through residencies and
                internships
              </li>
              <li>Join medical associations in your specialty</li>
              <li>Attend medical conferences and workshops</li>
              <li>Publish research papers in medical journals</li>
              <li>
                Network with healthcare professionals on specialized platforms
              </li>
            </ul>
          </div>
          <div class="job-role">
            <h3>Nurse</h3>
            <ul class="tips-list">
              <li>Obtain relevant certifications in specialized areas</li>
              <li>Join nursing associations and forums</li>
              <li>Keep up with the latest healthcare technologies</li>
              <li>Develop strong interpersonal and communication skills</li>
              <li>Consider additional qualifications like BSN or MSN</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Finance & Banking Section -->
      <div class="career-field">
        <div class="field-header" onclick="toggleField(this)">
          <h2>
            <i class="fas fa-chart-line field-icon"></i> Finance & Banking
          </h2>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="field-content">
          <div class="job-role">
            <h3>Financial Analyst</h3>
            <ul class="tips-list">
              <li>Get certified as a CFA (Chartered Financial Analyst)</li>
              <li>Develop strong Excel and financial modeling skills</li>
              <li>Stay updated with market trends and financial news</li>
              <li>Build a network in the financial sector</li>
              <li>Create a portfolio of financial analysis projects</li>
            </ul>
          </div>
          <div class="job-role">
            <h3>Investment Banker</h3>
            <ul class="tips-list">
              <li>Gain internship experience at top investment banks</li>
              <li>Master financial modeling and valuation techniques</li>
              <li>Develop strong presentation and communication skills</li>
              <li>Network at investment banking events</li>
              <li>Stay informed about M&A deals and market trends</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Engineering Section -->
      <div class="career-field">
        <div class="field-header" onclick="toggleField(this)">
          <h2><i class="fas fa-cogs field-icon"></i> Engineering</h2>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="field-content">
          <div class="job-role">
            <h3>Civil Engineer</h3>
            <ul class="tips-list">
              <li>Obtain professional engineering (PE) license</li>
              <li>Build a portfolio of construction and design projects</li>
              <li>Learn popular CAD software and BIM tools</li>
              <li>Join civil engineering associations</li>
              <li>Stay updated with sustainable construction practices</li>
            </ul>
          </div>
          <div class="job-role">
            <h3>Mechanical Engineer</h3>
            <ul class="tips-list">
              <li>Master 3D modeling software like SolidWorks or AutoCAD</li>
              <li>Get certified in specific areas of expertise</li>
              <li>Develop knowledge of manufacturing processes</li>
              <li>Stay updated with Industry 4.0 trends</li>
              <li>Build experience with prototyping and testing</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Creative Arts & Media Section -->
      <div class="career-field">
        <div class="field-header" onclick="toggleField(this)">
          <h2>
            <i class="fas fa-paint-brush field-icon"></i> Creative Arts & Media
          </h2>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="field-content">
          <div class="job-role">
            <h3>Graphic Designer</h3>
            <ul class="tips-list">
              <li>Create a stunning online portfolio</li>
              <li>Master Adobe Creative Suite</li>
              <li>Stay updated with design trends</li>
              <li>Build a presence on design platforms like Behance</li>
              <li>Develop UI/UX design skills</li>
            </ul>
          </div>
          <div class="job-role">
            <h3>Content Writer</h3>
            <ul class="tips-list">
              <li>Create a diverse writing portfolio</li>
              <li>Start a blog to showcase your writing</li>
              <li>Learn SEO and content marketing</li>
              <li>Build a strong social media presence</li>
              <li>Network with editors and publishers</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Law & Legal Services Section -->
      <div class="career-field">
        <div class="field-header" onclick="toggleField(this)">
          <h2>
            <i class="fas fa-balance-scale field-icon"></i> Law & Legal Services
          </h2>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="field-content">
          <div class="job-role">
            <h3>Lawyer</h3>
            <ul class="tips-list">
              <li>Pass the bar exam in your jurisdiction</li>
              <li>Join legal associations in your specialty</li>
              <li>Build a network through legal conferences</li>
              <li>Publish articles in legal journals</li>
              <li>Develop expertise in emerging areas of law</li>
            </ul>
          </div>
          <div class="job-role">
            <h3>Legal Advisor</h3>
            <ul class="tips-list">
              <li>Gain experience in corporate law</li>
              <li>Develop strong analytical skills</li>
              <li>Stay updated with regulatory changes</li>
              <li>Build expertise in specific industries</li>
              <li>Network with business professionals</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Education & Research Section -->
      <div class="career-field">
        <div class="field-header" onclick="toggleField(this)">
          <h2>
            <i class="fas fa-graduation-cap field-icon"></i> Education &
            Research
          </h2>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="field-content">
          <div class="job-role">
            <h3>Professor/Lecturer</h3>
            <ul class="tips-list">
              <li>Earn a Ph.D. in your field of expertise</li>
              <li>Publish research papers in reputed journals</li>
              <li>Gain teaching experience through assistantships</li>
              <li>Build a strong academic network</li>
              <li>Present at academic conferences</li>
            </ul>
          </div>
          <div class="job-role">
            <h3>Research Scientist</h3>
            <ul class="tips-list">
              <li>Develop strong research methodology skills</li>
              <li>Master data analysis and statistical tools</li>
              <li>Publish findings in peer-reviewed journals</li>
              <li>Collaborate on international research projects</li>
              <li>Stay updated with funding opportunities</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Government & Public Administration Section -->
      <div class="career-field">
        <div class="field-header" onclick="toggleField(this)">
          <h2>
            <i class="fas fa-landmark field-icon"></i> Government & Public
            Administration
          </h2>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="field-content">
          <div class="job-role">
            <h3>Civil Services</h3>
            <ul class="tips-list">
              <li>Prepare thoroughly for civil service examinations</li>
              <li>Stay updated with current affairs and policy changes</li>
              <li>Develop strong administrative skills</li>
              <li>Build expertise in public policy and governance</li>
              <li>Network with government officials</li>
            </ul>
          </div>
          <div class="job-role">
            <h3>Public Policy Analyst</h3>
            <ul class="tips-list">
              <li>Get a degree in public policy or related field</li>
              <li>Gain experience in policy research</li>
              <li>Develop strong analytical and writing skills</li>
              <li>Stay informed about legislative processes</li>
              <li>Build connections with policy think tanks</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Business & Management Section -->
      <div class="career-field">
        <div class="field-header" onclick="toggleField(this)">
          <h2>
            <i class="fas fa-briefcase field-icon"></i> Business & Management
          </h2>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="field-content">
          <div class="job-role">
            <h3>Business Analyst</h3>
            <ul class="tips-list">
              <li>Develop strong analytical and problem-solving skills</li>
              <li>Learn business intelligence tools</li>
              <li>Get certified in business analysis (CBAP)</li>
              <li>Build expertise in project management</li>
              <li>Stay updated with industry trends</li>
            </ul>
          </div>
          <div class="job-role">
            <h3>Marketing Manager</h3>
            <ul class="tips-list">
              <li>Build a portfolio of successful marketing campaigns</li>
              <li>Master digital marketing tools and analytics</li>
              <li>Get certified in marketing specializations</li>
              <li>Develop strong leadership skills</li>
              <li>Stay updated with marketing trends</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Science & Environment Section -->
      <div class="career-field">
        <div class="field-header" onclick="toggleField(this)">
          <h2><i class="fas fa-flask field-icon"></i> Science & Environment</h2>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="field-content">
          <div class="job-role">
            <h3>Environmental Scientist</h3>
            <ul class="tips-list">
              <li>Get certified in environmental science</li>
              <li>Gain experience with environmental assessment tools</li>
              <li>Develop strong field research skills</li>
              <li>Stay updated with environmental regulations</li>
              <li>Build connections with environmental organizations</li>
            </ul>
          </div>
          <div class="job-role">
            <h3>Marine Biologist</h3>
            <ul class="tips-list">
              <li>Gain practical experience through field work</li>
              <li>Develop strong research and laboratory skills</li>
              <li>Get certified in diving and marine safety</li>
              <li>Build expertise in marine conservation</li>
              <li>Network with marine research institutions</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <script>
      function toggleField(header) {
        const content = header.nextElementSibling;
        const icon = header.querySelector(".fa-chevron-down");
        content.classList.toggle("active");
        icon.style.transform = content.classList.contains("active")
          ? "rotate(180deg)"
          : "rotate(0)";
      }

      function searchCareers() {
        const searchTerm = document
          .getElementById("careerSearch")
          .value.toLowerCase();
        const careerFields = document.querySelectorAll(".career-field");

        careerFields.forEach((field) => {
          const fieldText = field.textContent.toLowerCase();
          if (fieldText.includes(searchTerm)) {
            field.style.display = "block";
            if (searchTerm.length > 0) {
              field.querySelector(".field-content").classList.add("active");
            }
          } else {
            field.style.display = "none";
          }
        });
      }

      // Show first section by default
      document.querySelector(".field-content").classList.add("active");
    </script>
  </body>
</html>
