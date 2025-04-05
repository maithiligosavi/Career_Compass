<?php include '../script/pages-header.php'; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interview Preparation - Career Compass</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../Assets/css/styles.css">
    <style>
        .page-title {
            text-align: center;
            color: #8B4513;
            margin: 2rem 0;
            padding: 1rem;
            font-size: 2.5rem;
            font-weight: bold;
        }

        .career-section {
            margin: 2rem 0;
            padding: 2rem;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .career-field {
            margin-bottom: 2rem;
        }

        .career-field h2 {
            color: brown;
            border-bottom: 2px solid brown;
            padding-bottom: 0.5rem;
            margin-bottom: 1.5rem;
        }

        .job-role {
            margin: 1.5rem 0;
        }

        .job-role h3 {
            color: brown;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
        }

        .job-role h3 i {
            margin-right: 10px;
            color: brown;
        }

        .question-list {
            list-style: none;
            padding-left: 2rem;
        }

        .question-list li {
            margin: 0.8rem 0;
            padding: 0.5rem;
            background: #f8f9fa;
            border-left: 3px solid brown;
            border-radius: 0 4px 4px 0;
        }

        .career-nav {
            position: sticky;
            top: 20px;
            background: #fff;
            padding: 1rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .career-nav ul {
            list-style: none;
            padding: 0;
        }

        .career-nav li {
            margin: 0.5rem 0;
        }

        .career-nav a {
            color: #2c3e50;
            text-decoration: none;
            transition: color 0.3s;
        }

        .career-nav a:hover {
            color: #3498db;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .grid-container {
            display: grid;
            grid-template-columns: 250px 1fr;
            gap: 2rem;
            margin-top: 2rem;
        }
    </style>
</head>
<body>
    

    <h1 class="page-title">Interview Preparation Guide</h1>
    
    <div class="container">
        <div class="grid-container">
            <!-- Navigation Sidebar -->
            <div class="career-nav">
                <h3>Quick Navigation</h3>
                <ul>
                    <li><a href="#it">Information Technology</a></li>
                    <li><a href="#healthcare">Healthcare</a></li>
                    <li><a href="#finance">Finance & Banking</a></li>
                    <li><a href="#engineering">Engineering</a></li>
                    <li><a href="#creative">Creative Arts & Media</a></li>
                    <li><a href="#legal">Law & Legal Services</a></li>
                    <li><a href="#education">Education & Research</a></li>
                    <li><a href="#government">Government & Administration</a></li>
                    <li><a href="#business">Business & Management</a></li>
                    <li><a href="#science">Science & Environment</a></li>
                </ul>
            </div>

            <!-- Main Content -->
            <div class="career-sections">
                <!-- IT Section -->
                <section id="it" class="career-section">
                    <div class="career-field">
                        <h2><i class="fas fa-laptop-code"></i> Information Technology (IT)</h2>
                        
                        <div class="job-role">
                            <h3><i class="fas fa-code"></i> Software Engineer</h3>
                            <ul class="question-list">
                                <li>Explain the difference between object-oriented and functional programming.</li>
                                <li>How do you handle version control in your projects?</li>
                                <li>Describe your approach to debugging complex issues.</li>
                                <li>What's your experience with agile development methodologies?</li>
                                <li>How do you ensure code quality and maintainability?</li>
                            </ul>
                        </div>

                        <div class="job-role">
                            <h3><i class="fas fa-database"></i> Data Scientist</h3>
                            <ul class="question-list">
                                <li>Explain the difference between supervised and unsupervised learning.</li>
                                <li>How do you handle missing data in a dataset?</li>
                                <li>Describe a challenging data analysis project you've worked on.</li>
                                <li>What tools do you use for data visualization?</li>
                                <li>How do you validate your machine learning models?</li>
                            </ul>
                        </div>

                        <div class="job-role">
                            <h3><i class="fas fa-shield-alt"></i> Cybersecurity Analyst</h3>
                            <ul class="question-list">
                                <li>How do you stay updated with the latest security threats?</li>
                                <li>Explain your incident response process.</li>
                                <li>What tools do you use for network monitoring?</li>
                                <li>How do you perform vulnerability assessments?</li>
                                <li>Describe a security breach you helped prevent or resolve.</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Healthcare Section -->
                <section id="healthcare" class="career-section">
                    <div class="career-field">
                        <h2><i class="fas fa-hospital"></i> Healthcare</h2>
                        
                        <div class="job-role">
                            <h3><i class="fas fa-user-md"></i> Doctor</h3>
                            <ul class="question-list">
                                <li>How do you handle difficult patient interactions?</li>
                                <li>Describe a challenging diagnosis you've made.</li>
                                <li>How do you stay updated with medical advances?</li>
                                <li>What's your approach to patient education?</li>
                                <li>How do you handle medical emergencies?</li>
                            </ul>
                        </div>

                        <div class="job-role">
                            <h3><i class="fas fa-nursing"></i> Nurse</h3>
                            <ul class="question-list">
                                <li>How do you prioritize patient care during busy shifts?</li>
                                <li>Describe your experience with electronic health records.</li>
                                <li>How do you handle medication administration?</li>
                                <li>What's your approach to team collaboration?</li>
                                <li>How do you maintain patient confidentiality?</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Finance Section -->
                <section id="finance" class="career-section">
                    <div class="career-field">
                        <h2><i class="fas fa-chart-line"></i> Finance & Banking</h2>
                        
                        <div class="job-role">
                            <h3><i class="fas fa-calculator"></i> Financial Analyst</h3>
                            <ul class="question-list">
                                <li>How do you approach financial modeling?</li>
                                <li>Explain your investment analysis process.</li>
                                <li>How do you stay updated with market trends?</li>
                                <li>Describe your experience with risk assessment.</li>
                                <li>What financial software are you proficient in?</li>
                            </ul>
                        </div>

                        <div class="job-role">
                            <h3><i class="fas fa-landmark"></i> Investment Banker</h3>
                            <ul class="question-list">
                                <li>How do you value a company?</li>
                                <li>Describe a successful M&A deal you've worked on.</li>
                                <li>How do you handle client relationships?</li>
                                <li>What's your approach to due diligence?</li>
                                <li>How do you manage work-life balance in investment banking?</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Add more sections following the same pattern -->
                
                <!-- Engineering Section -->
                <section id="engineering" class="career-section">
                    <div class="career-field">
                        <h2><i class="fas fa-hard-hat"></i> Engineering</h2>
                        
                        <div class="job-role">
                            <h3><i class="fas fa-building"></i> Civil Engineer</h3>
                            <ul class="question-list">
                                <li>How do you ensure structural safety in your designs?</li>
                                <li>What software tools do you use for structural analysis?</li>
                                <li>How do you handle project cost overruns?</li>
                                <li>Describe a challenging construction project you managed.</li>
                                <li>How do you incorporate sustainability in your designs?</li>
                            </ul>
                        </div>

                        <div class="job-role">
                            <h3><i class="fas fa-cogs"></i> Mechanical Engineer</h3>
                            <ul class="question-list">
                                <li>Explain your experience with CAD software.</li>
                                <li>How do you approach thermal analysis in design?</li>
                                <li>Describe a product you helped design from concept to production.</li>
                                <li>How do you ensure manufacturing efficiency?</li>
                                <li>What's your experience with quality control processes?</li>
                            </ul>
                        </div>

                        <div class="job-role">
                            <h3><i class="fas fa-robot"></i> Robotics Engineer</h3>
                            <ul class="question-list">
                                <li>How do you approach robot motion planning?</li>
                                <li>Explain your experience with sensor integration.</li>
                                <li>What programming languages do you use for robotics?</li>
                                <li>How do you ensure robot safety in human environments?</li>
                                <li>Describe a challenging robotics project you worked on.</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Creative Arts & Media Section -->
                <section id="creative" class="career-section">
                    <div class="career-field">
                        <h2><i class="fas fa-paint-brush"></i> Creative Arts & Media</h2>
                        
                        <div class="job-role">
                            <h3><i class="fas fa-pencil-alt"></i> Graphic Designer</h3>
                            <ul class="question-list">
                                <li>How do you approach a new design brief?</li>
                                <li>What's your creative process like?</li>
                                <li>How do you handle client feedback and revisions?</li>
                                <li>What design software are you proficient in?</li>
                                <li>How do you stay updated with design trends?</li>
                            </ul>
                        </div>

                        <div class="job-role">
                            <h3><i class="fas fa-video"></i> Film Director</h3>
                            <ul class="question-list">
                                <li>How do you develop a vision for a film?</li>
                                <li>How do you work with actors to achieve desired performances?</li>
                                <li>How do you handle budget constraints?</li>
                                <li>Describe your experience with different filming techniques.</li>
                                <li>How do you manage a film crew effectively?</li>
                            </ul>
                        </div>

                        <div class="job-role">
                            <h3><i class="fas fa-hashtag"></i> Digital Marketing Specialist</h3>
                            <ul class="question-list">
                                <li>How do you develop a digital marketing strategy?</li>
                                <li>What tools do you use for analytics and tracking?</li>
                                <li>How do you measure campaign success?</li>
                                <li>Describe a successful marketing campaign you managed.</li>
                                <li>How do you stay updated with digital marketing trends?</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Law & Legal Services Section -->
                <section id="legal" class="career-section">
                    <div class="career-field">
                        <h2><i class="fas fa-balance-scale"></i> Law & Legal Services</h2>
                        
                        <div class="job-role">
                            <h3><i class="fas fa-gavel"></i> Corporate Lawyer</h3>
                            <ul class="question-list">
                                <li>How do you handle complex contract negotiations?</li>
                                <li>Describe your experience with mergers and acquisitions.</li>
                                <li>How do you stay updated with corporate law changes?</li>
                                <li>How do you manage multiple client relationships?</li>
                                <li>Describe a challenging legal case you handled.</li>
                            </ul>
                        </div>

                        <div class="job-role">
                            <h3><i class="fas fa-user-tie"></i> Legal Advisor</h3>
                            <ul class="question-list">
                                <li>How do you approach risk assessment?</li>
                                <li>How do you explain complex legal matters to non-lawyers?</li>
                                <li>What's your approach to compliance monitoring?</li>
                                <li>How do you handle confidential information?</li>
                                <li>Describe your experience with regulatory bodies.</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Education & Research Section -->
                <section id="education" class="career-section">
                    <div class="career-field">
                        <h2><i class="fas fa-graduation-cap"></i> Education & Research</h2>
                        
                        <div class="job-role">
                            <h3><i class="fas fa-chalkboard-teacher"></i> Professor/Lecturer</h3>
                            <ul class="question-list">
                                <li>How do you engage students in learning?</li>
                                <li>What's your teaching philosophy?</li>
                                <li>How do you handle academic research alongside teaching?</li>
                                <li>How do you assess student learning?</li>
                                <li>How do you incorporate technology in teaching?</li>
                            </ul>
                        </div>

                        <div class="job-role">
                            <h3><i class="fas fa-microscope"></i> Research Scientist</h3>
                            <ul class="question-list">
                                <li>How do you design research experiments?</li>
                                <li>How do you handle research funding applications?</li>
                                <li>Describe your publication experience.</li>
                                <li>How do you collaborate with other researchers?</li>
                                <li>How do you ensure research integrity?</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Government & Administration Section -->
                <section id="government" class="career-section">
                    <div class="career-field">
                        <h2><i class="fas fa-landmark"></i> Government & Public Administration</h2>
                        
                        <div class="job-role">
                            <h3><i class="fas fa-user-tie"></i> Civil Services</h3>
                            <ul class="question-list">
                                <li>How do you approach policy implementation?</li>
                                <li>How do you handle public grievances?</li>
                                <li>Describe your experience with administrative procedures.</li>
                                <li>How do you ensure transparency in operations?</li>
                                <li>How do you manage stakeholder relationships?</li>
                            </ul>
                        </div>

                        <div class="job-role">
                            <h3><i class="fas fa-city"></i> Urban Planner</h3>
                            <ul class="question-list">
                                <li>How do you approach sustainable urban development?</li>
                                <li>How do you handle community feedback?</li>
                                <li>What tools do you use for urban planning?</li>
                                <li>How do you balance development and conservation?</li>
                                <li>Describe a successful planning project you managed.</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Business & Management Section -->
                <section id="business" class="career-section">
                    <div class="career-field">
                        <h2><i class="fas fa-briefcase"></i> Business & Management</h2>
                        
                        <div class="job-role">
                            <h3><i class="fas fa-chart-bar"></i> Business Analyst</h3>
                            <ul class="question-list">
                                <li>How do you approach business process improvement?</li>
                                <li>What tools do you use for data analysis?</li>
                                <li>How do you handle stakeholder requirements?</li>
                                <li>Describe a successful project you analyzed.</li>
                                <li>How do you measure project success?</li>
                            </ul>
                        </div>

                        <div class="job-role">
                            <h3><i class="fas fa-users"></i> HR Manager</h3>
                            <ul class="question-list">
                                <li>How do you handle employee conflicts?</li>
                                <li>What's your approach to talent acquisition?</li>
                                <li>How do you manage employee development?</li>
                                <li>Describe your experience with HR policies.</li>
                                <li>How do you promote workplace diversity?</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Science & Environment Section -->
                <section id="science" class="career-section">
                    <div class="career-field">
                        <h2><i class="fas fa-flask"></i> Science & Environment</h2>
                        
                        <div class="job-role">
                            <h3><i class="fas fa-leaf"></i> Environmental Scientist</h3>
                            <ul class="question-list">
                                <li>How do you conduct environmental impact assessments?</li>
                                <li>What tools do you use for environmental monitoring?</li>
                                <li>How do you analyze environmental data?</li>
                                <li>Describe a significant environmental project you worked on.</li>
                                <li>How do you stay updated with environmental regulations?</li>
                            </ul>
                        </div>

                        <div class="job-role">
                            <h3><i class="fas fa-microscope"></i> Forensic Scientist</h3>
                            <ul class="question-list">
                                <li>How do you maintain evidence integrity?</li>
                                <li>What analytical techniques do you use?</li>
                                <li>How do you document your findings?</li>
                                <li>Describe your experience with court testimony.</li>
                                <li>How do you ensure accuracy in analysis?</li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Career Guidance Portal. All rights reserved.</p>
    </footer>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('.career-nav a').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const section = document.querySelector(this.getAttribute('href'));
                section.scrollIntoView({ behavior: 'smooth' });
            });
        });
    </script>
</body>
</html> 