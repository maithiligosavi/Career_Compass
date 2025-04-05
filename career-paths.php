<?php include '../script/pages-header.php'; ?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us - Career Guidance Portal</title>
    <link rel="stylesheet" href="../Assets/css/styles.css" />
    
    <style>
        .career-paths-container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 20px;
        }

        .career-buttons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 30px;
        }

        .career-btn {
            padding: 12px 24px;
            font-size: 1.1rem;
            border: none;
            border-radius: 5px;
            background-color: #3E2723;
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .career-btn:hover {
            background-color: #4E342E;
            transform: translateY(-2px);
        }

        .career-info {
            display: none;
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .career-info.active {
            display: block;
            animation: fadeIn 0.5s ease;
        }

        .career-roles, 
        .career-info > ul {
            background-color: #e8f4f8;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .career-info h2 {
            color: #2c3e50;
            margin-bottom: 20px;
            text-align: center;
            font-size: 2rem;
        }

        .career-info h3 {
            color: #34495e;
            margin: 15px 0;
            font-size: 1.3rem;
            background-color: #e8f4f8;
            padding: 10px 20px;
            border-radius: 8px;
            display: inline-block;
        }

        .career-info ul {
            list-style-type: disc;
            margin-left: 20px;
        }

        .career-info li {
            margin: 8px 0;
            color: #555;
            line-height: 1.6;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .career-buttons {
                flex-direction: column;
                align-items: stretch;
            }

            .career-btn {
                width: 100%;
            }
        }
    </style>

  </head>
  <body>
   

    <main class="career-paths-container">
        <h1>Explore Career Paths</h1><br>
        <div class="career-buttons">
            <button class="career-btn" onclick="showCareerInfo('it')">IT</button>
            <button class="career-btn" onclick="showCareerInfo('healthcare')">Healthcare</button>
            <button class="career-btn" onclick="showCareerInfo('finance')">Finance & Banking</button>
            <button class="career-btn" onclick="showCareerInfo('engineering')">Engineering</button>
            <button class="career-btn" onclick="showCareerInfo('creative')">Creative Arts & Media</button>
            <button class="career-btn" onclick="showCareerInfo('legal')">Law & Legal</button>
            <button class="career-btn" onclick="showCareerInfo('education')">Education</button>
            <button class="career-btn" onclick="showCareerInfo('government')">Government</button>
            <button class="career-btn" onclick="showCareerInfo('business')">Business</button>
            <button class="career-btn" onclick="showCareerInfo('science')">Science</button>
        </div>

        <div class="career-info" id="it-info">
            <h2>Information Technology (IT)</h2>
            <div class="career-roles">
                <h3>Key Roles:</h3>
                <ul>
                    <li>Software Engineer</li>
                    <li>Data Scientist</li>
                    <li>Cybersecurity Analyst</li>
                    <li>Cloud Engineer</li>
                    <li>AI/ML Engineer</li>
                    <li>DevOps Engineer</li>
                    <li>Ethical Hacker</li>
                    <li>Blockchain Developer</li>
                    <li>IT Project Manager</li>
                    <li>UX/UI Designer</li>
                </ul>
            </div>
            <h3>Requirements:</h3>
            <ul>
                <li>B.Tech/BE in Computer Science, IT, or related field</li>
                <li>Programming skills (Python, Java, JavaScript, etc.)</li>
                <li>Cloud certifications (AWS, Azure, GCP)</li>
                <li>Problem-solving abilities</li>
                <li>Relevant certifications (CISSP, PMP, etc.)</li>
            </ul>
            <h3>Potential Growth:</h3>
            <ul>
                <li>15-20% annual growth rate in the industry</li>
                <li>Global opportunities and remote work options</li>
                <li>Career progression to Technical Lead, Architect, or CTO</li>
                <li>Entrepreneurship opportunities in tech startups</li>
            </ul>
            <h3>Average Salaries (Per Annum):</h3>
            <ul>
                <li>Entry Level: ₹4,00,000 - ₹8,00,000</li>
                <li>Mid Level: ₹10,00,000 - ₹25,00,000</li>
                <li>Senior Level: ₹25,00,000 - ₹50,00,000+</li>
                <li>Specialist Roles (AI/ML, Cybersecurity): ₹30,00,000 - ₹80,00,000+</li>
            </ul>
        </div>

        <div class="career-info" id="healthcare-info">
            <h2>Healthcare</h2>
            <div class="career-roles">
                <h3>Key Roles:</h3>
                <ul>
                    <li>Doctor (General Physician, Specialist)</li>
                    <li>Nurse</li>
                    <li>Pharmacist</li>
                    <li>Medical Laboratory Technician</li>
                    <li>Physiotherapist</li>
                    <li>Radiologist</li>
                    <li>Surgeon</li>
                    <li>Healthcare Administrator</li>
                    <li>Psychologist</li>
                    <li>Medical Research Scientist</li>
                </ul>
            </div>
            <h3>Requirements:</h3>
            <ul>
                <li>MBBS/BDS/BAMS/BHMS for doctors</li>
                <li>B.Sc/M.Sc Nursing for nurses</li>
                <li>Relevant specialization degrees (MD/MS/DNB)</li>
                <li>State Medical Council registration</li>
                <li>Clinical experience and internships</li>
            </ul>
            <h3>Potential Growth:</h3>
            <ul>
                <li>10-15% annual growth in healthcare sector</li>
                <li>Super-specialization opportunities</li>
                <li>Private practice establishment</li>
                <li>Research and academic positions</li>
            </ul>
            <h3>Average Salaries (Per Annum):</h3>
            <ul>
                <li>MBBS Doctors: ₹5,00,000 - ₹12,00,000</li>
                <li>Specialist Doctors: ₹15,00,000 - ₹50,00,000+</li>
                <li>Super Specialists: ₹40,00,000 - ₹1,00,00,000+</li>
                <li>Nurses: ₹3,00,000 - ₹8,00,000</li>
            </ul>
        </div>

        <div class="career-info" id="finance-info">
            <h2>Finance & Banking</h2>
            <div class="career-roles">
                <h3>Key Roles:</h3>
                <ul>
                    <li>Financial Analyst</li>
                    <li>Investment Banker</li>
                    <li>Chartered Accountant (CA)</li>
                    <li>Risk Manager</li>
                    <li>Actuary</li>
                    <li>Wealth Manager</li>
                    <li>Stock Market Analyst</li>
                    <li>Tax Consultant</li>
                    <li>Auditor</li>
                    <li>Insurance Advisor</li>
                </ul>
            </div>
            <h3>Requirements:</h3>
            <ul>
                <li>CA/CFA/MBA Finance</li>
                <li>Strong analytical and mathematical skills</li>
                <li>Knowledge of financial markets and regulations</li>
                <li>Professional certifications (FRM, CFP)</li>
            </ul>
            <h3>Potential Growth:</h3>
            <ul>
                <li>12-15% annual growth rate</li>
                <li>International exposure opportunities</li>
                <li>Partnership opportunities in CA firms</li>
                <li>Senior management roles in banks/financial institutions</li>
            </ul>
            <h3>Average Salaries (Per Annum):</h3>
            <ul>
                <li>Entry Level: ₹5,00,000 - ₹8,00,000</li>
                <li>Mid Level: ₹10,00,000 - ₹20,00,000</li>
                <li>Senior Level: ₹25,00,000 - ₹50,00,000+</li>
                <li>Investment Banking: ₹15,00,000 - ₹80,00,000+</li>
            </ul>
        </div>

        <div class="career-info" id="engineering-info">
            <h2>Engineering</h2>
            <div class="career-roles">
                <h3>Key Roles:</h3>
                <ul>
                    <li>Civil Engineer</li>
                    <li>Mechanical Engineer</li>
                    <li>Electrical Engineer</li>
                    <li>Aerospace Engineer</li>
                    <li>Robotics Engineer</li>
                    <li>Environmental Engineer</li>
                    <li>Biomedical Engineer</li>
                    <li>Petroleum Engineer</li>
                    <li>Structural Engineer</li>
                    <li>Industrial Engineer</li>
                </ul>
            </div>
            <h3>Requirements:</h3>
            <ul>
                <li>B.Tech/BE in relevant branch</li>
                <li>M.Tech/ME for specialized roles</li>
                <li>Professional certifications</li>
                <li>Technical software proficiency</li>
            </ul>
            <h3>Potential Growth:</h3>
            <ul>
                <li>10-12% annual growth rate</li>
                <li>Project management opportunities</li>
                <li>Consulting roles</li>
                <li>Research and development positions</li>
            </ul>
            <h3>Average Salaries (Per Annum):</h3>
            <ul>
                <li>Entry Level: ₹3,50,000 - ₹7,00,000</li>
                <li>Mid Level: ₹8,00,000 - ₹15,00,000</li>
                <li>Senior Level: ₹18,00,000 - ₹40,00,000+</li>
                <li>Specialized Fields: ₹25,00,000 - ₹60,00,000+</li>
            </ul>
        </div>

        <div class="career-info" id="creative-info">
            <h2>Creative Arts & Media</h2>
            <div class="career-roles">
                <h3>Key Roles:</h3>
                <ul>
                    <li>Graphic Designer</li>
                    <li>Animator</li>
                    <li>Content Writer/Copywriter</li>
                    <li>Film Director</li>
                    <li>Video Editor</li>
                    <li>Photographer</li>
                    <li>Music Producer</li>
                    <li>Fashion Designer</li>
                    <li>Digital Marketing Specialist</li>
                    <li>Social Media Manager</li>
                </ul>
            </div>
            <h3>Requirements:</h3>
            <ul>
                <li>Degree in Fine Arts/Design/Mass Communication</li>
                <li>Strong portfolio</li>
                <li>Proficiency in creative software</li>
                <li>Industry certifications</li>
            </ul>
            <h3>Potential Growth:</h3>
            <ul>
                <li>8-12% annual growth rate</li>
                <li>Freelance opportunities</li>
                <li>Creative Director positions</li>
                <li>Own studio/agency opportunities</li>
            </ul>
            <h3>Average Salaries (Per Annum):</h3>
            <ul>
                <li>Entry Level: ₹2,50,000 - ₹5,00,000</li>
                <li>Mid Level: ₹6,00,000 - ₹12,00,000</li>
                <li>Senior Level: ₹15,00,000 - ₹30,00,000+</li>
                <li>Top Positions: ₹40,00,000+</li>
            </ul>
        </div>

        <div class="career-info" id="legal-info">
            <h2>Law & Legal Services</h2>
            <div class="career-roles">
                <h3>Key Roles:</h3>
                <ul>
                    <li>Lawyer (Corporate, Criminal, Civil, IP, Tax)</li>
                    <li>Judge</li>
                    <li>Legal Advisor</li>
                    <li>Public Prosecutor</li>
                    <li>Paralegal</li>
                    <li>Compliance Officer</li>
                    <li>Contract Manager</li>
                </ul>
            </div>
            <h3>Requirements:</h3>
            <ul>
                <li>LLB/LLM degree</li>
                <li>Bar Council registration</li>
                <li>Specialization certifications</li>
                <li>Strong analytical and research skills</li>
            </ul>
            <h3>Potential Growth:</h3>
            <ul>
                <li>10-15% annual growth rate</li>
                <li>Partnership in law firms</li>
                <li>Independent practice</li>
                <li>Judicial services</li>
            </ul>
            <h3>Average Salaries (Per Annum):</h3>
            <ul>
                <li>Entry Level: ₹3,00,000 - ₹7,00,000</li>
                <li>Mid Level: ₹8,00,000 - ₹20,00,000</li>
                <li>Senior Level: ₹25,00,000 - ₹50,00,000+</li>
                <li>Top Law Firms: ₹50,00,000 - ₹1,00,00,000+</li>
            </ul>
        </div>

        <div class="career-info" id="education-info">
            <h2>Education & Research</h2>
            <div class="career-roles">
                <h3>Key Roles:</h3>
                <ul>
                    <li>Professor/Lecturer</li>
                    <li>Educational Consultant</li>
                    <li>School Teacher</li>
                    <li>Instructional Designer</li>
                    <li>Research Scientist</li>
                    <li>Curriculum Developer</li>
                    <li>Academic Writer</li>
                </ul>
            </div>
            <h3>Requirements:</h3>
            <ul>
                <li>Master's degree in relevant field</li>
                <li>Ph.D. for higher education roles</li>
                <li>Teaching certifications</li>
                <li>Research experience</li>
            </ul>
            <h3>Potential Growth:</h3>
            <ul>
                <li>8-10% annual growth rate</li>
                <li>Administrative positions</li>
                <li>Research opportunities</li>
                <li>Educational leadership roles</li>
            </ul>
            <h3>Average Salaries (Per Annum):</h3>
            <ul>
                <li>School Teachers: ₹2,50,000 - ₹6,00,000</li>
                <li>College Lecturers: ₹4,00,000 - ₹8,00,000</li>
                <li>Professors: ₹8,00,000 - ₹15,00,000</li>
                <li>Research Scientists: ₹6,00,000 - ₹20,00,000+</li>
            </ul>
        </div>

        <div class="career-info" id="government-info">
            <h2>Government & Public Administration</h2>
            <div class="career-roles">
                <h3>Key Roles:</h3>
                <ul>
                    <li>Civil Services (IAS, IPS, IFS)</li>
                    <li>Public Policy Analyst</li>
                    <li>Political Analyst</li>
                    <li>Urban Planner</li>
                    <li>Government Relations Specialist</li>
                </ul>
            </div>
            <h3>Requirements:</h3>
            <ul>
                <li>Bachelor's degree (any discipline for UPSC)</li>
                <li>Clearing UPSC/State PSC examinations</li>
                <li>Strong analytical and administrative skills</li>
                <li>Knowledge of public policy and governance</li>
            </ul>
            <h3>Potential Growth:</h3>
            <ul>
                <li>Structured career progression</li>
                <li>Higher administrative positions</li>
                <li>Policy-making roles</li>
                <li>International assignments</li>
            </ul>
            <h3>Average Salaries (Per Annum):</h3>
            <ul>
                <li>Entry Level: ₹6,00,000 - ₹8,00,000</li>
                <li>Mid Level: ₹10,00,000 - ₹15,00,000</li>
                <li>Senior Level: ₹15,00,000 - ₹25,00,000+</li>
                <li>Additional benefits: Housing, healthcare, etc.</li>
            </ul>
        </div>

        <div class="career-info" id="business-info">
            <h2>Business & Management</h2>
            <div class="career-roles">
                <h3>Key Roles:</h3>
                <ul>
                    <li>Business Analyst</li>
                    <li>Marketing Manager</li>
                    <li>HR Manager</li>
                    <li>Entrepreneur</li>
                    <li>Operations Manager</li>
                    <li>Sales Executive</li>
                    <li>Supply Chain Manager</li>
                    <li>Product Manager</li>
                </ul>
            </div>
            <h3>Requirements:</h3>
            <ul>
                <li>MBA/PGDM</li>
                <li>Strong communication skills</li>
                <li>Leadership abilities</li>
                <li>Industry-specific knowledge</li>
            </ul>
            <h3>Potential Growth:</h3>
            <ul>
                <li>12-15% annual growth rate</li>
                <li>C-suite positions</li>
                <li>Entrepreneurship opportunities</li>
                <li>Global business roles</li>
            </ul>
            <h3>Average Salaries (Per Annum):</h3>
            <ul>
                <li>Entry Level: ₹4,00,000 - ₹8,00,000</li>
                <li>Mid Level: ₹10,00,000 - ₹20,00,000</li>
                <li>Senior Level: ₹25,00,000 - ₹50,00,000+</li>
                <li>Top Management: ₹50,00,000 - ₹1,00,00,000+</li>
            </ul>
        </div>

        <div class="career-info" id="science-info">
            <h2>Science & Environment</h2>
            <div class="career-roles">
                <h3>Key Roles:</h3>
                <ul>
                    <li>Environmental Scientist</li>
                    <li>Marine Biologist</li>
                    <li>Astronomer</li>
                    <li>Physicist</li>
                    <li>Geologist</li>
                    <li>Meteorologist</li>
                    <li>Forensic Scientist</li>
                </ul>
            </div>
            <h3>Requirements:</h3>
            <ul>
                <li>M.Sc/Ph.D. in relevant field</li>
                <li>Research experience</li>
                <li>Laboratory skills</li>
                <li>Technical knowledge</li>
            </ul>
            <h3>Potential Growth:</h3>
            <ul>
                <li>8-10% annual growth rate</li>
                <li>Research leadership positions</li>
                <li>Academic careers</li>
                <li>Consulting opportunities</li>
            </ul>
            <h3>Average Salaries (Per Annum):</h3>
            <ul>
                <li>Entry Level: ₹3,00,000 - ₹6,00,000</li>
                <li>Mid Level: ₹7,00,000 - ₹12,00,000</li>
                <li>Senior Level: ₹15,00,000 - ₹25,00,000+</li>
                <li>Research Directors: ₹30,00,000+</li>
            </ul>
        </div>
    </main>

    <script>
        function showCareerInfo(career) {
            // Hide all career info sections
            const allInfos = document.querySelectorAll('.career-info');
            allInfos.forEach(info => {
                info.classList.remove('active');
            });

            // Show the selected career info
            const selectedInfo = document.getElementById(`${career}-info`);
            selectedInfo.classList.add('active');

            // Update active button state
            const allButtons = document.querySelectorAll('.career-btn');
            allButtons.forEach(button => {
                button.style.backgroundColor = '#3E2723';
            });
            event.target.style.backgroundColor = '#4E342E';

            // Smooth scroll to the info section
            selectedInfo.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }

        // Show IT section by default when page loads
        window.onload = function() {
            showCareerInfo('it');
        }
    </script>

    


    
    </body>
