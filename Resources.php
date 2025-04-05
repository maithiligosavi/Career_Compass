<?php include '../script/pages-header.php'; ?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Educational Resources - Career Guidance Portal</title>
    <link rel="stylesheet" href="../Assets/css/styles.css" />
  </head>
  <body>
    

    <main class="resources-container">
      <h1>Educational Resources</h1>
      
      <div class="career-field-nav">
        <button class="field-btn active" data-field="it">IT</button>
        <button class="field-btn" data-field="healthcare">Healthcare</button>
        <button class="field-btn" data-field="finance">Finance</button>
        <button class="field-btn" data-field="engineering">Engineering</button>
        <button class="field-btn" data-field="creative">Creative Arts</button>
        <button class="field-btn" data-field="legal">Legal</button>
        <button class="field-btn" data-field="education">Education</button>
        <button class="field-btn" data-field="government">Government</button>
        <button class="field-btn" data-field="business">Business</button>
        <button class="field-btn" data-field="science">Science</button>
      </div>
      
      <section class="resource-grid" id="it-section">
        <!-- Software Engineer -->
        <div class="resource-card">
          <h2>Software Engineer</h2>
          <div class="resource-content">
            <div class="degrees">
              <h3>Recommended Degrees</h3>
              <ul>
                <li>B.Tech/B.E. in Computer Science</li>
                <li>B.Tech in Software Engineering</li>
                <li>M.Tech in Computer Science</li>
              </ul>
            </div>
            <div class="certifications">
              <h3>Key Certifications</h3>
              <ul>
                <li>AWS Certified Developer</li>
                <li>Microsoft Certified: Azure Developer</li>
                <li>Oracle Certified Professional: Java</li>
              </ul>
            </div>
            <div class="courses">
              <h3>Online Learning Platforms</h3>
              <ul>
                <li><a href="https://www.coursera.org/specializations/software-development" target="_blank">Coursera - Software Engineering</a></li>
                <li><a href="https://www.udacity.com/school-of-programming" target="_blank">Udacity - Programming</a></li>
                <li><a href="https://www.pluralsight.com" target="_blank">Pluralsight</a></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- AI/ML Engineer -->
        <div class="resource-card">
          <h2>AI/ML Engineer</h2>
          <div class="resource-content">
            <div class="degrees">
              <h3>Recommended Degrees</h3>
              <ul>
                <li>B.Tech in AI & ML</li>
                <li>M.Tech in Artificial Intelligence</li>
                <li>MS in Machine Learning</li>
              </ul>
            </div>
            <div class="certifications">
              <h3>Key Certifications</h3>
              <ul>
                <li>TensorFlow Developer Certificate</li>
                <li>AWS Machine Learning Specialty</li>
                <li>IBM AI Engineering Professional</li>
              </ul>
            </div>
            <div class="courses">
              <h3>Online Learning Platforms</h3>
              <ul>
                <li><a href="https://www.deeplearning.ai" target="_blank">DeepLearning.AI</a></li>
                <li><a href="https://www.fast.ai" target="_blank">Fast.ai</a></li>
                <li><a href="https://www.coursera.org/specializations/deep-learning" target="_blank">Coursera - Deep Learning</a></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Cloud Engineer -->
        <div class="resource-card">
          <h2>Cloud Engineer</h2>
          <div class="resource-content">
            <div class="degrees">
              <h3>Recommended Degrees</h3>
              <ul>
                <li>B.Tech in Cloud Computing</li>
                <li>M.Tech in Cloud Technologies</li>
                <li>B.E. in Computer Science</li>
              </ul>
            </div>
            <div class="certifications">
              <h3>Key Certifications</h3>
              <ul>
                <li>AWS Solutions Architect</li>
                <li>Google Cloud Professional</li>
                <li>Microsoft Azure Administrator</li>
              </ul>
            </div>
            <div class="courses">
              <h3>Online Learning Platforms</h3>
              <ul>
                <li><a href="https://acloud.guru" target="_blank">A Cloud Guru</a></li>
                <li><a href="https://www.cloudacademy.com" target="_blank">Cloud Academy</a></li>
                <li><a href="https://www.coursera.org/specializations/cloud-computing" target="_blank">Coursera - Cloud Computing</a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="resource-grid hidden" id="healthcare-section">
        <!-- Doctor -->
        <div class="resource-card">
          <h2>Doctor (Medical Professional)</h2>
          <div class="resource-content">
            <div class="degrees">
              <h3>Recommended Degrees</h3>
              <ul>
                <li>MBBS</li>
                <li>MD/MS (Specialization)</li>
                <li>DM/MCh (Super Specialization)</li>
              </ul>
            </div>
            <div class="certifications">
              <h3>Key Certifications</h3>
              <ul>
                <li>Medical License (State Medical Council)</li>
                <li>USMLE (for USA)</li>
                <li>Specialty Board Certifications</li>
              </ul>
            </div>
            <div class="courses">
              <h3>Online Learning Resources</h3>
              <ul>
                <li><a href="https://www.medscape.com" target="_blank">Medscape</a></li>
                <li><a href="https://www.bmj.com/learning" target="_blank">BMJ Learning</a></li>
                <li><a href="https://www.uptodate.com" target="_blank">UpToDate</a></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Nurse -->
        <div class="resource-card">
          <h2>Nurse</h2>
          <div class="resource-content">
            <div class="degrees">
              <h3>Recommended Degrees</h3>
              <ul>
                <li>B.Sc Nursing</li>
                <li>M.Sc Nursing</li>
                <li>Post Basic B.Sc Nursing</li>
              </ul>
            </div>
            <div class="certifications">
              <h3>Key Certifications</h3>
              <ul>
                <li>Registered Nurse (RN) License</li>
                <li>Basic Life Support (BLS)</li>
                <li>Advanced Cardiac Life Support (ACLS)</li>
              </ul>
            </div>
            <div class="courses">
              <h3>Online Learning Platforms</h3>
              <ul>
                <li><a href="https://www.nurse.com" target="_blank">Nurse.com</a></li>
                <li><a href="https://www.nursingcenter.com" target="_blank">Nursing Center</a></li>
                <li><a href="https://www.coursera.org/courses?query=nursing" target="_blank">Coursera - Nursing</a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="resource-grid hidden" id="finance-section">
        <!-- Financial Analyst -->
        <div class="resource-card">
          <h2>Financial Analyst</h2>
          <div class="resource-content">
            <div class="degrees">
              <h3>Recommended Degrees</h3>
              <ul>
                <li>B.Com in Finance</li>
                <li>BBA in Finance</li>
                <li>MBA in Finance</li>
              </ul>
            </div>
            <div class="certifications">
              <h3>Key Certifications</h3>
              <ul>
                <li>Chartered Financial Analyst (CFA)</li>
                <li>Financial Risk Manager (FRM)</li>
                <li>Certified Financial Planner (CFP)</li>
              </ul>
            </div>
            <div class="courses">
              <h3>Online Learning Platforms</h3>
              <ul>
                <li><a href="https://www.wallstreetprep.com" target="_blank">Wall Street Prep</a></li>
                <li><a href="https://www.cfainstitute.org" target="_blank">CFA Institute</a></li>
                <li><a href="https://www.coursera.org/specializations/investment-management" target="_blank">Coursera - Investment Management</a></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Investment Banker -->
        <div class="resource-card">
          <h2>Investment Banker</h2>
          <div class="resource-content">
            <div class="degrees">
              <h3>Recommended Degrees</h3>
              <ul>
                <li>BBA in Investment Banking</li>
                <li>MBA in Finance</li>
                <li>Master's in Investment Management</li>
              </ul>
            </div>
            <div class="certifications">
              <h3>Key Certifications</h3>
              <ul>
                <li>Series 79 - Investment Banking Representative</li>
                <li>CFA Charter</li>
                <li>Investment Banking Certification (IB)</li>
              </ul>
            </div>
            <div class="courses">
              <h3>Online Learning Platforms</h3>
              <ul>
                <li><a href="https://www.breakingintowallstreet.com" target="_blank">Breaking Into Wall Street</a></li>
                <li><a href="https://corporatefinanceinstitute.com" target="_blank">Corporate Finance Institute</a></li>
                <li><a href="https://www.udemy.com/course/the-complete-investment-banking-course-2016" target="_blank">Udemy - Investment Banking</a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="resource-grid hidden" id="engineering-section">
        <!-- Civil Engineer -->
        <div class="resource-card">
          <h2>Civil Engineer</h2>
          <div class="resource-content">
            <div class="degrees">
              <h3>Recommended Degrees</h3>
              <ul>
                <li>B.Tech/B.E. in Civil Engineering</li>
                <li>M.Tech in Structural Engineering</li>
                <li>M.Tech in Construction Management</li>
              </ul>
            </div>
            <div class="certifications">
              <h3>Key Certifications</h3>
              <ul>
                <li>Professional Engineer (PE) License</li>
                <li>LEED Certification</li>
                <li>PMP Certification</li>
              </ul>
            </div>
            <div class="courses">
              <h3>Online Learning Platforms</h3>
              <ul>
                <li><a href="https://www.autodesk.com/certification" target="_blank">Autodesk Certification</a></li>
                <li><a href="https://www.coursera.org/specializations/construction-management" target="_blank">Coursera - Construction Management</a></li>
                <li><a href="https://www.linkedin.com/learning/topics/civil-engineering" target="_blank">LinkedIn Learning - Civil Engineering</a></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Mechanical Engineer -->
        <div class="resource-card">
          <h2>Mechanical Engineer</h2>
          <div class="resource-content">
            <div class="degrees">
              <h3>Recommended Degrees</h3>
              <ul>
                <li>B.Tech/B.E. in Mechanical Engineering</li>
                <li>M.Tech in Machine Design</li>
                <li>M.Tech in Thermal Engineering</li>
              </ul>
            </div>
            <div class="certifications">
              <h3>Key Certifications</h3>
              <ul>
                <li>ASME Certification</li>
                <li>Certified Manufacturing Engineer (CMfgE)</li>
                <li>Six Sigma Certification</li>
              </ul>
            </div>
            <div class="courses">
              <h3>Online Learning Platforms</h3>
              <ul>
                <li><a href="https://www.edx.org/learn/mechanical-engineering" target="_blank">edX - Mechanical Engineering</a></li>
                <li><a href="https://www.solidworks.com/certifications" target="_blank">SOLIDWORKS Certification</a></li>
                <li><a href="https://www.coursera.org/specializations/cad-design-manufacturing" target="_blank">Coursera - CAD/CAM</a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="resource-grid hidden" id="creative-section">
        <!-- Graphic Designer -->
        <div class="resource-card">
          <h2>Graphic Designer</h2>
          <div class="resource-content">
            <div class="degrees">
              <h3>Recommended Degrees</h3>
              <ul>
                <li>BFA in Graphic Design</li>
                <li>B.Des in Visual Communication</li>
                <li>Master's in Digital Design</li>
              </ul>
            </div>
            <div class="certifications">
              <h3>Key Certifications</h3>
              <ul>
                <li>Adobe Certified Professional</li>
                <li>Certified Graphic Designer</li>
                <li>UI/UX Design Certification</li>
              </ul>
            </div>
            <div class="courses">
              <h3>Online Learning Platforms</h3>
              <ul>
                <li><a href="https://www.skillshare.com/graphics-design" target="_blank">Skillshare - Design Courses</a></li>
                <li><a href="https://www.domestika.org/graphic-design" target="_blank">Domestika</a></li>
                <li><a href="https://www.coursera.org/specializations/graphic-design" target="_blank">Coursera - Graphic Design</a></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Digital Marketing Specialist -->
        <div class="resource-card">
          <h2>Digital Marketing Specialist</h2>
          <div class="resource-content">
            <div class="degrees">
              <h3>Recommended Degrees</h3>
              <ul>
                <li>BBA in Digital Marketing</li>
                <li>Bachelor's in Mass Communication</li>
                <li>MBA in Marketing</li>
              </ul>
            </div>
            <div class="certifications">
              <h3>Key Certifications</h3>
              <ul>
                <li>Google Digital Marketing Certification</li>
                <li>HubSpot Inbound Marketing Certification</li>
                <li>Facebook Blueprint Certification</li>
              </ul>
            </div>
            <div class="courses">
              <h3>Online Learning Platforms</h3>
              <ul>
                <li><a href="https://www.digitalmarketer.com" target="_blank">DigitalMarketer</a></li>
                <li><a href="https://www.semrush.com/academy" target="_blank">Semrush Academy</a></li>
                <li><a href="https://www.udacity.com/course/digital-marketing-nanodegree--nd018" target="_blank">Udacity - Digital Marketing</a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="resource-grid hidden" id="legal-section">
        <!-- Corporate Lawyer -->
        <div class="resource-card">
          <h2>Corporate Lawyer</h2>
          <div class="resource-content">
            <div class="degrees">
              <h3>Recommended Degrees</h3>
              <ul>
                <li>Bachelor of Laws (LLB)</li>
                <li>Master of Laws (LLM) in Corporate Law</li>
                <li>Juris Doctor (JD)</li>
              </ul>
            </div>
            <div class="certifications">
              <h3>Key Certifications</h3>
              <ul>
                <li>Bar Council Registration</li>
                <li>Securities Law Certification</li>
                <li>Corporate Governance Certification</li>
              </ul>
            </div>
            <div class="courses">
              <h3>Online Learning Platforms</h3>
              <ul>
                <li><a href="https://www.lawsikho.com" target="_blank">LawSikho</a></li>
                <li><a href="https://www.coursera.org/learn/corporate-law" target="_blank">Coursera - Corporate Law</a></li>
                <li><a href="https://www.edx.org/learn/law" target="_blank">edX - Law Courses</a></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Legal Advisor -->
        <div class="resource-card">
          <h2>Legal Advisor</h2>
          <div class="resource-content">
            <div class="degrees">
              <h3>Recommended Degrees</h3>
              <ul>
                <li>Bachelor of Laws (LLB)</li>
                <li>Master of Laws (LLM)</li>
                <li>MBA with Legal Studies</li>
              </ul>
            </div>
            <div class="certifications">
              <h3>Key Certifications</h3>
              <ul>
                <li>Bar Council Registration</li>
                <li>Legal Compliance Certification</li>
                <li>Alternative Dispute Resolution Certification</li>
              </ul>
            </div>
            <div class="courses">
              <h3>Online Learning Platforms</h3>
              <ul>
                <li><a href="https://www.lexisnexis.com/university" target="_blank">LexisNexis University</a></li>
                <li><a href="https://www.westlaw.com/training" target="_blank">Westlaw Training</a></li>
                <li><a href="https://www.coursera.org/specializations/legal-studies" target="_blank">Coursera - Legal Studies</a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="resource-grid hidden" id="education-section">
        <!-- Professor/Lecturer -->
        <div class="resource-card">
          <h2>Professor/Lecturer</h2>
          <div class="resource-content">
            <div class="degrees">
              <h3>Recommended Degrees</h3>
              <ul>
                <li>Ph.D. in Relevant Field</li>
                <li>Master's Degree (M.A./M.Sc.)</li>
                <li>M.Phil</li>
              </ul>
            </div>
            <div class="certifications">
              <h3>Key Certifications</h3>
              <ul>
                <li>NET/SET Qualification</li>
                <li>Teaching License</li>
                <li>Research Methodology Certification</li>
              </ul>
            </div>
            <div class="courses">
              <h3>Online Learning Platforms</h3>
              <ul>
                <li><a href="https://www.facultyfocus.com" target="_blank">Faculty Focus</a></li>
                <li><a href="https://www.chronicle.com" target="_blank">Chronicle of Higher Education</a></li>
                <li><a href="https://www.coursera.org/professional-certificates/google-it-support" target="_blank">Coursera - Higher Education Teaching</a></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Educational Consultant -->
        <div class="resource-card">
          <h2>Educational Consultant</h2>
          <div class="resource-content">
            <div class="degrees">
              <h3>Recommended Degrees</h3>
              <ul>
                <li>M.Ed. in Educational Leadership</li>
                <li>M.A. in Education</li>
                <li>Ph.D. in Education</li>
              </ul>
            </div>
            <div class="certifications">
              <h3>Key Certifications</h3>
              <ul>
                <li>Certified Educational Planner (CEP)</li>
                <li>Career Development Facilitator</li>
                <li>Educational Consulting Certificate</li>
              </ul>
            </div>
            <div class="courses">
              <h3>Online Learning Platforms</h3>
              <ul>
                <li><a href="https://www.iecaonline.com" target="_blank">IECA Training</a></li>
                <li><a href="https://www.nacac.org" target="_blank">NACAC Professional Development</a></li>
                <li><a href="https://www.edx.org/learn/education" target="_blank">edX - Education & Teaching</a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="resource-grid hidden" id="government-section">
        <!-- Civil Services -->
        <div class="resource-card">
          <h2>Civil Services (IAS, IPS, IFS)</h2>
          <div class="resource-content">
            <div class="degrees">
              <h3>Recommended Degrees</h3>
              <ul>
                <li>Bachelor's Degree (Any Stream)</li>
                <li>Master's in Public Administration</li>
                <li>Master's in Political Science</li>
              </ul>
            </div>
            <div class="certifications">
              <h3>Key Examinations</h3>
              <ul>
                <li>UPSC Civil Services Examination</li>
                <li>State Public Service Commission Exams</li>
                <li>UPSC Forest Services Examination</li>
              </ul>
            </div>
            <div class="courses">
              <h3>Online Learning Platforms</h3>
              <ul>
                <li><a href="https://www.visionias.in" target="_blank">Vision IAS</a></li>
                <li><a href="https://www.insightsonindia.com" target="_blank">Insights IAS</a></li>
                <li><a href="https://www.clearias.com" target="_blank">Clear IAS</a></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Urban Planner -->
        <div class="resource-card">
          <h2>Urban Planner</h2>
          <div class="resource-content">
            <div class="degrees">
              <h3>Recommended Degrees</h3>
              <ul>
                <li>B.Plan (Bachelor of Planning)</li>
                <li>M.Plan (Master of Planning)</li>
                <li>Master's in Urban Design</li>
              </ul>
            </div>
            <div class="certifications">
              <h3>Key Certifications</h3>
              <ul>
                <li>AICP Certification</li>
                <li>GIS Certification</li>
                <li>Urban Development Certification</li>
              </ul>
            </div>
            <div class="courses">
              <h3>Online Learning Platforms</h3>
              <ul>
                <li><a href="https://www.planning.org/certification" target="_blank">APA Learning Center</a></li>
                <li><a href="https://www.coursera.org/learn/urban-planning" target="_blank">Coursera - Urban Planning</a></li>
                <li><a href="https://www.edx.org/learn/urban-planning" target="_blank">edX - Urban Planning</a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="resource-grid hidden" id="business-section">
        <!-- Business Analyst -->
        <div class="resource-card">
          <h2>Business Analyst</h2>
          <div class="resource-content">
            <div class="degrees">
              <h3>Recommended Degrees</h3>
              <ul>
                <li>BBA in Business Analytics</li>
                <li>MBA in Business Analytics</li>
                <li>Master's in Data Analytics</li>
              </ul>
            </div>
            <div class="certifications">
              <h3>Key Certifications</h3>
              <ul>
                <li>CBAP (Certified Business Analysis Professional)</li>
                <li>PMI-PBA (Professional in Business Analysis)</li>
                <li>IIBA-AAC (Agile Analysis Certification)</li>
              </ul>
            </div>
            <div class="courses">
              <h3>Online Learning Platforms</h3>
              <ul>
                <li><a href="https://www.iiba.org/professional-development" target="_blank">IIBA Training</a></li>
                <li><a href="https://www.udemy.com/topic/business-analysis" target="_blank">Udemy - Business Analysis</a></li>
                <li><a href="https://www.coursera.org/specializations/business-analytics" target="_blank">Coursera - Business Analytics</a></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Marketing Manager -->
        <div class="resource-card">
          <h2>Marketing Manager</h2>
          <div class="resource-content">
            <div class="degrees">
              <h3>Recommended Degrees</h3>
              <ul>
                <li>BBA in Marketing</li>
                <li>MBA in Marketing</li>
                <li>Master's in Marketing Management</li>
              </ul>
            </div>
            <div class="certifications">
              <h3>Key Certifications</h3>
              <ul>
                <li>Professional Certified Marketer (PCM)</li>
                <li>Digital Marketing Certifications</li>
                <li>Project Management Professional (PMP)</li>
              </ul>
            </div>
            <div class="courses">
              <h3>Online Learning Platforms</h3>
              <ul>
                <li><a href="https://www.hubspot.com/academy" target="_blank">HubSpot Academy</a></li>
                <li><a href="https://www.googleskillshop.com" target="_blank">Google Skillshop</a></li>
                <li><a href="https://www.coursera.org/specializations/marketing-management" target="_blank">Coursera - Marketing Management</a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="resource-grid hidden" id="science-section">
        <!-- Environmental Scientist -->
        <div class="resource-card">
          <h2>Environmental Scientist</h2>
          <div class="resource-content">
            <div class="degrees">
              <h3>Recommended Degrees</h3>
              <ul>
                <li>B.Sc in Environmental Science</li>
                <li>M.Sc in Environmental Studies</li>
                <li>Ph.D. in Environmental Science</li>
              </ul>
            </div>
            <div class="certifications">
              <h3>Key Certifications</h3>
              <ul>
                <li>Certified Environmental Scientist (CES)</li>
                <li>HAZWOPER Certification</li>
                <li>Environmental Management ISO 14001</li>
              </ul>
            </div>
            <div class="courses">
              <h3>Online Learning Platforms</h3>
              <ul>
                <li><a href="https://www.environmental-science.org" target="_blank">Environmental Science.org</a></li>
                <li><a href="https://www.coursera.org/specializations/environmental-science" target="_blank">Coursera - Environmental Science</a></li>
                <li><a href="https://www.edx.org/learn/environmental-science" target="_blank">edX - Environmental Science</a></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Forensic Scientist -->
        <div class="resource-card">
          <h2>Forensic Scientist</h2>
          <div class="resource-content">
            <div class="degrees">
              <h3>Recommended Degrees</h3>
              <ul>
                <li>B.Sc in Forensic Science</li>
                <li>M.Sc in Forensic Science</li>
                <li>Ph.D. in Forensic Studies</li>
              </ul>
            </div>
            <div class="certifications">
              <h3>Key Certifications</h3>
              <ul>
                <li>ABC Certification (American Board of Criminalistics)</li>
                <li>IAI Certification</li>
                <li>Forensic DNA Analyst Certification</li>
              </ul>
            </div>
            <div class="courses">
              <h3>Online Learning Platforms</h3>
              <ul>
                <li><a href="https://www.forensicscience.org" target="_blank">ForensicScience.org</a></li>
                <li><a href="https://www.coursera.org/learn/forensic-science" target="_blank">Coursera - Forensic Science</a></li>
                <li><a href="https://www.futurelearn.com/subjects/science-engineering-and-maths-courses/forensics" target="_blank">FutureLearn - Forensics</a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <script>
        document.addEventListener('DOMContentLoaded', function() {
          const fieldButtons = document.querySelectorAll('.field-btn');
          const sections = document.querySelectorAll('.resource-grid');

          fieldButtons.forEach(button => {
            button.addEventListener('click', () => {
              // Remove active class from all buttons
              fieldButtons.forEach(btn => btn.classList.remove('active'));
              // Add active class to clicked button
              button.classList.add('active');

              // Hide all sections
              sections.forEach(section => section.classList.add('hidden'));
              // Show selected section
              document.getElementById(`${button.dataset.field}-section`).classList.remove('hidden');
            });
          });
        });
      </script>
    </main>

    <footer>
      <p>&copy; 2024 Career Compass. All rights reserved.</p>
    </footer>
  </body>
</html>