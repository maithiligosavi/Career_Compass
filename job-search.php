<?php include '../script/pages-header.php'; ?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Job Search Tools - Career Guidance Portal</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <link rel="stylesheet" href="../Assets/css/styles.css" />
    <style>
      .career-section {
        padding: 2rem;
        margin: 2rem 0;
        background: #f9f9f9;
        border-radius: 8px;
      }

      .career-field {
        margin-bottom: 3rem;
      }

      .career-field h2 {
        color: #2c3e50;
        border-bottom: 2px solid #3498db;
        padding-bottom: 0.5rem;
        margin-bottom: 1.5rem;
      }

      .job-role {
        background: white;
        padding: 1.5rem;
        margin: 1rem 0;
        border-radius: 6px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      }

      .job-role h3 {
        color: #3498db;
        margin-bottom: 1rem;
      }

      .tips-list {
        list-style-type: none;
        padding-left: 0;
      }

      .tips-list li {
        margin: 0.5rem 0;
        padding-left: 1.5rem;
        position: relative;
      }

      .tips-list li:before {
        content: "→";
        position: absolute;
        left: 0;
        color: #3498db;
      }

      .search-filters {
        margin: 2rem 0;
        padding: 1rem;
        background: #fff;
        border-radius: 6px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      }

      .filter-input {
        padding: 0.5rem;
        margin-right: 1rem;
        border: 1px solid #ddd;
        border-radius: 4px;
        width: 200px;
      }

      .filter-btn {
        padding: 0.5rem 1rem;
        background: #3498db;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      .filter-btn:hover {
        background: #2980b9;
      }
    </style>
  </head>
  <body>
    <!-- Navigation -->
    

    <!-- Main Content -->
    <main>
      <section class="hero">
        <div class="hero-content">
          <h1>Job Search Tools & Tips</h1>
          <p>Discover field-specific strategies to land your dream job</p>
        </div>
      </section>

      <!-- Search Filters -->
      <div class="search-filters">
        <input
          type="text"
          class="filter-input"
          id="careerSearch"
          placeholder="Search career field..."
        />
        <button class="filter-btn" onclick="filterCareers()">Search</button>
      </div>

      <!-- Career Fields -->
      <div class="career-section">
        <!-- IT Section -->
        <div class="career-field" id="it">
          <h2>
            <i class="fas fa-laptop-code"></i> Information Technology (IT)
          </h2>

          <div class="job-role">
            <h3>Software Engineer</h3>
            <ul class="tips-list">
              <li>Build a strong GitHub portfolio with personal projects</li>
              <li>Practice coding on platforms like LeetCode and HackerRank</li>
              <li>Follow tech companies on LinkedIn and their career pages</li>
              <li>Join developer communities on Discord and Stack Overflow</li>
              <li>Contribute to open-source projects</li>
            </ul>
          </div>

          <div class="job-role">
            <h3>Data Scientist</h3>
            <ul class="tips-list">
              <li>Create a portfolio of data analysis projects on Kaggle</li>
              <li>Get certifications in Python, R, and ML frameworks</li>
              <li>Participate in data science competitions</li>
              <li>Network at data science conferences and meetups</li>
              <li>Share insights on Medium or towards data science</li>
            </ul>
          </div>

          <div class="job-role">
            <h3>Cybersecurity Analyst</h3>
            <ul class="tips-list">
              <li>Get security certifications (CISSP, CompTIA Security+)</li>
              <li>Practice on platforms like HackTheBox and TryHackMe</li>
              <li>Join cybersecurity communities and forums</li>
              <li>Participate in bug bounty programs</li>
              <li>Stay updated with latest security threats and solutions</li>
            </ul>
          </div>

          <div class="job-role">
            <h3>Cloud Engineer</h3>
            <ul class="tips-list">
              <li>Get cloud certifications (AWS, Azure, GCP)</li>
              <li>Build projects using cloud services</li>
              <li>Join cloud computing communities</li>
              <li>Follow cloud service providers</li>
              <li>Learn Infrastructure as Code (Terraform, CloudFormation)</li>
            </ul>
          </div>

          <div class="job-role">
            <h3>AI/ML Engineer</h3>
            <ul class="tips-list">
              <li>Build ML projects portfolio on GitHub</li>
              <li>Get AI/ML certifications (TensorFlow, PyTorch)</li>
              <li>Participate in AI research projects</li>
              <li>Join AI/ML communities and forums</li>
              <li>Follow AI research papers and developments</li>
            </ul>
          </div>

          <div class="job-role">
            <h3>DevOps Engineer</h3>
            <ul class="tips-list">
              <li>Learn CI/CD tools (Jenkins, GitLab CI)</li>
              <li>Master container technologies (Docker, Kubernetes)</li>
              <li>Get DevOps certifications</li>
              <li>Build automation projects</li>
              <li>Join DevOps communities and meetups</li>
            </ul>
          </div>

          <div class="job-role">
            <h3>Ethical Hacker</h3>
            <ul class="tips-list">
              <li>Get CEH certification</li>
              <li>Build penetration testing portfolio</li>
              <li>Participate in CTF competitions</li>
              <li>Join security research communities</li>
              <li>Network with cybersecurity companies</li>
            </ul>
          </div>

          <div class="job-role">
            <h3>Blockchain Developer</h3>
            <ul class="tips-list">
              <li>Learn blockchain platforms (Ethereum, Solana)</li>
              <li>Build DApp portfolio</li>
              <li>Get blockchain certifications</li>
              <li>Join blockchain communities</li>
              <li>Network with crypto companies</li>
            </ul>
          </div>

          <div class="job-role">
            <h3>IT Project Manager</h3>
            <ul class="tips-list">
              <li>Get PMP certification</li>
              <li>Learn project management tools</li>
              <li>Build experience with Agile/Scrum</li>
              <li>Join PM communities</li>
              <li>Network with IT companies</li>
            </ul>
          </div>

          <div class="job-role">
            <h3>UX/UI Designer</h3>
            <ul class="tips-list">
              <li>Create portfolio on Behance/Dribbble</li>
              <li>Master design tools (Figma, Sketch)</li>
              <li>Learn user research methods</li>
              <li>Join design communities</li>
              <li>Network with tech companies and startups</li>
            </ul>
          </div>

          <!-- Add more IT roles similarly -->
        </div>

        <!-- Healthcare Section -->
        <div class="career-field" id="healthcare">
          <h2><i class="fas fa-hospital"></i> Healthcare</h2>

          <div class="job-role">
            <h3>Doctor</h3>
            <ul class="tips-list">
              <li>Join medical associations relevant to your specialty</li>
              <li>Attend medical conferences and workshops</li>
              <li>Network with hospital administrators</li>
              <li>Keep up with medical journals and publications</li>
              <li>Consider hospital residency programs</li>
            </ul>
          </div>

          <div class="job-role">
            <h3>Nurse</h3>
            <ul class="tips-list">
              <li>Get specialized certifications in your area of interest</li>
              <li>Join nursing associations and forums</li>
              <li>Check hospital job boards regularly</li>
              <li>Attend nursing career fairs</li>
              <li>Consider travel nursing opportunities</li>
            </ul>
          </div>

          <!-- Add more healthcare roles similarly -->
        </div>

        <!-- Finance Section -->
        <div class="career-field" id="finance">
          <h2><i class="fas fa-chart-line"></i> Finance & Banking</h2>

          <div class="job-role">
            <h3>Financial Analyst</h3>
            <ul class="tips-list">
              <li>Get CFA certification</li>
              <li>Learn financial modeling and valuation</li>
              <li>Follow financial markets and news</li>
              <li>Network with investment professionals</li>
              <li>Join financial analysis forums and groups</li>
            </ul>
          </div>

          <!-- Add more finance roles similarly -->
        </div>

        <!-- Engineering Section -->
        <div class="career-field" id="engineering">
          <h2><i class="fas fa-hard-hat"></i> Engineering</h2>

          <div class="job-role">
            <h3>Civil Engineer</h3>
            <ul class="tips-list">
              <li>Get your Professional Engineer (PE) license</li>
              <li>Join civil engineering associations (ASCE)</li>
              <li>Build portfolio of construction/design projects</li>
              <li>Learn BIM software (AutoCAD, Revit)</li>
              <li>Network with construction companies and firms</li>
            </ul>
          </div>

          <div class="job-role">
            <h3>Mechanical Engineer</h3>
            <ul class="tips-list">
              <li>Master CAD software (SolidWorks, AutoCAD)</li>
              <li>Get certifications in specific industries (ASME)</li>
              <li>Join engineering forums and communities</li>
              <li>Follow manufacturing companies</li>
              <li>
                Build expertise in emerging technologies (3D printing, robotics)
              </li>
            </ul>
          </div>
        </div>

        <!-- Creative Arts & Media Section -->
        <div class="career-field" id="creative">
          <h2><i class="fas fa-paint-brush"></i> Creative Arts & Media</h2>

          <div class="job-role">
            <h3>Graphic Designer</h3>
            <ul class="tips-list">
              <li>Create an impressive online portfolio (Behance, Dribbble)</li>
              <li>Master Adobe Creative Suite</li>
              <li>Build presence on design communities</li>
              <li>Take on freelance projects</li>
              <li>Follow design agencies and creative directors</li>
            </ul>
          </div>

          <div class="job-role">
            <h3>Content Writer</h3>
            <ul class="tips-list">
              <li>Start a blog to showcase writing skills</li>
              <li>Build portfolio on Medium or LinkedIn</li>
              <li>Join content writing platforms</li>
              <li>Network with content agencies</li>
              <li>Learn SEO and content marketing</li>
            </ul>
          </div>
        </div>

        <!-- Law & Legal Services Section -->
        <div class="career-field" id="legal">
          <h2><i class="fas fa-balance-scale"></i> Law & Legal Services</h2>

          <div class="job-role">
            <h3>Corporate Lawyer</h3>
            <ul class="tips-list">
              <li>Join bar associations</li>
              <li>Network with law firms</li>
              <li>Attend legal conferences</li>
              <li>Build expertise in specific industries</li>
              <li>Follow corporate law developments</li>
            </ul>
          </div>

          <div class="job-role">
            <h3>Legal Advisor</h3>
            <ul class="tips-list">
              <li>Get specialized certifications</li>
              <li>Join legal consulting networks</li>
              <li>Build corporate connections</li>
              <li>Develop industry-specific knowledge</li>
              <li>Stay updated with legal tech trends</li>
            </ul>
          </div>
        </div>

        <!-- Education & Research Section -->
        <div class="career-field" id="education">
          <h2><i class="fas fa-graduation-cap"></i> Education & Research</h2>

          <div class="job-role">
            <h3>Professor/Lecturer</h3>
            <ul class="tips-list">
              <li>Build research portfolio</li>
              <li>Publish in academic journals</li>
              <li>Join academic associations</li>
              <li>Network at academic conferences</li>
              <li>Develop teaching experience</li>
            </ul>
          </div>

          <div class="job-role">
            <h3>Research Scientist</h3>
            <ul class="tips-list">
              <li>Publish research papers</li>
              <li>Apply for research grants</li>
              <li>Join research institutions</li>
              <li>Collaborate on international projects</li>
              <li>Stay updated with latest research trends</li>
            </ul>
          </div>
        </div>

        <!-- Government & Public Administration Section -->
        <div class="career-field" id="government">
          <h2>
            <i class="fas fa-landmark"></i> Government & Public Administration
          </h2>

          <div class="job-role">
            <h3>Civil Services</h3>
            <ul class="tips-list">
              <li>Prepare for civil service exams</li>
              <li>Stay updated with current affairs</li>
              <li>Join civil service preparation groups</li>
              <li>Follow government job portals</li>
              <li>Network with civil servants</li>
            </ul>
          </div>

          <div class="job-role">
            <h3>Public Policy Analyst</h3>
            <ul class="tips-list">
              <li>Get policy analysis certifications</li>
              <li>Join think tanks</li>
              <li>Network with policy makers</li>
              <li>Follow policy research institutions</li>
              <li>Build expertise in specific policy areas</li>
            </ul>
          </div>
        </div>

        <!-- Business & Management Section -->
        <div class="career-field" id="business">
          <h2><i class="fas fa-briefcase"></i> Business & Management</h2>

          <div class="job-role">
            <h3>Business Analyst</h3>
            <ul class="tips-list">
              <li>Get BA certifications (CBAP, CCBA)</li>
              <li>Learn data analysis tools</li>
              <li>Build project portfolio</li>
              <li>Join BA communities</li>
              <li>Network with consulting firms</li>
            </ul>
          </div>

          <div class="job-role">
            <h3>Product Manager</h3>
            <ul class="tips-list">
              <li>Build product management portfolio</li>
              <li>Get PM certifications</li>
              <li>Join product communities</li>
              <li>Network with tech companies</li>
              <li>Learn product analytics tools</li>
            </ul>
          </div>
        </div>

        <!-- Science & Environment Section -->
        <div class="career-field" id="science">
          <h2><i class="fas fa-microscope"></i> Science & Environment</h2>

          <div class="job-role">
            <h3>Environmental Scientist</h3>
            <ul class="tips-list">
              <li>Get environmental certifications</li>
              <li>Join environmental organizations</li>
              <li>Build research experience</li>
              <li>Network with environmental agencies</li>
              <li>Stay updated with environmental regulations</li>
            </ul>
          </div>

          <div class="job-role">
            <h3>Marine Biologist</h3>
            <ul class="tips-list">
              <li>Get field research experience</li>
              <li>Join marine research institutions</li>
              <li>Network with conservation organizations</li>
              <li>Build diving certifications</li>
              <li>Participate in marine research projects</li>
            </ul>
          </div>
        </div>
      </div>
    </main>

    <!-- Footer -->
    <footer>
      <p>&copy; 2024 Career Guidance Portal. All rights reserved.</p>
    </footer>

    <script>
      function filterCareers() {
        const searchTerm = document
          .getElementById("careerSearch")
          .value.toLowerCase();
        const careerFields = document.getElementsByClassName("career-field");

        Array.from(careerFields).forEach((field) => {
          const text = field.textContent.toLowerCase();
          if (text.includes(searchTerm)) {
            field.style.display = "block";
          } else {
            field.style.display = "none";
          }
        });
      }

      // Add smooth scrolling for anchor links
      document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
          e.preventDefault();
          document.querySelector(this.getAttribute("href")).scrollIntoView({
            behavior: "smooth",
          });
        });
      });
    </script>
  </body>
</html>
