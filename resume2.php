<?php include '../script/pages-header.php'; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Guidance Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../Assets/css/styles.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary-color: #2c3e50;
            --secondary-color: #8B4513;
            --accent-color: #2ecc71;
            --light-color: #f5f5f5;
            --dark-color: #34495e;
            --button-hover: #654321;
            --beach-bg: #F5F5DC;
        }

        body {
            background-color: var(--beach-bg);
            padding: 20px;
            position: relative;
            overflow-x: hidden;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(255, 255, 255, 0.1) 25%, transparent 25%),
                        linear-gradient(-45deg, rgba(255, 255, 255, 0.1) 25%, transparent 25%),
                        linear-gradient(45deg, transparent 75%, rgba(255, 255, 255, 0.1) 75%),
                        linear-gradient(-45deg, transparent 75%, rgba(255, 255, 255, 0.1) 75%);
            background-size: 20px 20px;
            background-position: 0 0, 0 10px, 10px -10px, -10px 0px;
            animation: wave 20s linear infinite;
            z-index: -1;
            opacity: 0.3;
        }

        @keyframes wave {
            0% {
                background-position: 0 0, 0 10px, 10px -10px, -10px 0px;
            }
            100% {
                background-position: 40px 0, 40px 10px, 50px -10px, 30px 0px;
            }
        }

        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            margin-bottom: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .hero-content h1 {
            font-size: 3em;
            margin-bottom: 15px;
            animation: fadeInDown 1s ease-out;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .hero-content p {
            font-size: 1.2em;
            animation: fadeInUp 1s ease-out;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        .career-buttons {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
            justify-items: center;
        }

        .career-btn {
            padding: 20px 25px;
            font-size: 1.2em;
            border: none;
            border-radius: 12px;
            background-color: var(--secondary-color);
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            box-shadow: 0 4px 6px rgba(139, 69, 19, 0.2);
            animation: fadeInUp 0.5s ease-out;
        }

        .career-btn i {
            font-size: 1.5em;
            transition: transform 0.3s ease;
        }

        .career-btn:hover {
            transform: translateY(-5px);
            background-color: var(--button-hover);
            color: white;
            box-shadow: 0 6px 12px rgba(139, 69, 19, 0.3);
            animation: pulse 1s infinite;
        }

        .career-btn:hover i {
            transform: rotate(360deg);
            transition: transform 0.5s ease;
        }

        .career-info {
            display: none;
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            text-align: center;
            animation: fadeIn 0.5s ease-out;
            position: relative;
            overflow: hidden;
        }

        .career-images {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin: 30px 0;
            padding: 20px;
        }

        .career-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            animation: fadeIn 0.8s ease-out;
        }

        .career-image:hover {
            transform: scale(1.05) rotate(2deg);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .career-info::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--secondary-color), var(--accent-color));
        }

        .career-info.active {
            display: block;
        }

        .career-info h2 {
            color: var(--primary-color);
            margin-bottom: 20px;
            text-align: center;
            font-size: 2em;
            animation: slideInLeft 0.5s ease-out;
        }

        .career-info h3 {
            color: var(--dark-color);
            margin: 25px 0 15px;
            text-align: center;
            font-size: 1.4em;
            animation: slideInRight 0.5s ease-out;
        }

        .career-info ul {
            list-style-type: none;
            padding-left: 0;
            display: inline-block;
            text-align: left;
            max-width: 600px;
            animation: fadeIn 0.8s ease-out;
        }

        .career-info li {
            margin: 12px 0;
            position: relative;
            padding-left: 30px;
            transition: all 0.3s ease;
            color: var(--dark-color);
            animation: fadeInUp 0.5s ease-out;
            animation-fill-mode: both;
        }

        .career-info li:nth-child(1) { animation-delay: 0.1s; }
        .career-info li:nth-child(2) { animation-delay: 0.2s; }
        .career-info li:nth-child(3) { animation-delay: 0.3s; }
        .career-info li:nth-child(4) { animation-delay: 0.4s; }
        .career-info li:nth-child(5) { animation-delay: 0.5s; }
        .career-info li:nth-child(6) { animation-delay: 0.6s; }
        .career-info li:nth-child(7) { animation-delay: 0.7s; }
        .career-info li:nth-child(8) { animation-delay: 0.8s; }
        .career-info li:nth-child(9) { animation-delay: 0.9s; }
        .career-info li:nth-child(10) { animation-delay: 1s; }

        .career-info li:hover {
            transform: translateX(10px);
            color: var(--secondary-color);
        }

        .close-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            background: none;
            border: none;
            font-size: 1.8em;
            cursor: pointer;
            color: #e74c3c;
            transition: all 0.3s ease;
            animation: rotate 0.5s ease-out;
        }

        .close-btn:hover {
            transform: rotate(90deg) scale(1.1);
            color: #c0392b;
        }

        .resume-example {
            background-color: var(--light-color);
            padding: 20px;
            border-radius: 10px;
            margin: 20px auto;
            max-width: 800px;
            text-align: left;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            animation: fadeIn 0.8s ease-out;
            transition: transform 0.3s ease;
        }

        .resume-example:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .resume-example h4 {
            color: var(--primary-color);
            margin-bottom: 10px;
        }

        .resume-example p {
            color: var(--dark-color);
            line-height: 1.6;
            margin-bottom: 15px;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        @media (max-width: 768px) {
            .career-buttons {
                grid-template-columns: 1fr;
            }
            
            .hero-section {
                height: 200px;
            }
            
            .hero-content h1 {
                font-size: 2em;
            }
        }
    </style>
</head>
<body>
  
    <div class="hero-section">
        <div class="hero-content">
            <h1>Career Guidance Portal</h1>
            <p>Discover Your Professional Journey</p>
        </div>
    </div>

    <div class="container">
        <div class="career-buttons">
            <button class="career-btn" onclick="showCareerInfo('it')">
                <i class="fas fa-laptop-code"></i>
                Information Technology
            </button>
            <button class="career-btn" onclick="showCareerInfo('healthcare')">
                <i class="fas fa-heartbeat"></i>
                Healthcare
            </button>
            <button class="career-btn" onclick="showCareerInfo('finance')">
                <i class="fas fa-chart-line"></i>
                Finance & Banking
            </button>
            <button class="career-btn" onclick="showCareerInfo('engineering')">
                <i class="fas fa-cogs"></i>
                Engineering
            </button>
            <button class="career-btn" onclick="showCareerInfo('creative')">
                <i class="fas fa-palette"></i>
                Creative Arts & Media
            </button>
            <button class="career-btn" onclick="showCareerInfo('law')">
                <i class="fas fa-gavel"></i>
                Law & Legal Services
            </button>
            <button class="career-btn" onclick="showCareerInfo('education')">
                <i class="fas fa-graduation-cap"></i>
                Education & Research
            </button>
            <button class="career-btn" onclick="showCareerInfo('government')">
                <i class="fas fa-landmark"></i>
                Government & Public Administration
            </button>
            <button class="career-btn" onclick="showCareerInfo('business')">
                <i class="fas fa-briefcase"></i>
                Business & Management
            </button>
            <button class="career-btn" onclick="showCareerInfo('science')">
                <i class="fas fa-flask"></i>
                Science & Environment
            </button>
        </div>

        <div id="it" class="career-info">
            <button class="close-btn" onclick="hideCareerInfo('it')">&times;</button>
            <h2>Information Technology (IT)</h2>
            <div class="career-images">
                <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Software Development" class="career-image">
                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Data Science" class="career-image">
                <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Cybersecurity" class="career-image">
            </div>
            <h3>Popular Career Paths</h3>
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

            <h3>Resume Tips</h3>
            <ul>
                <li>Highlight technical skills and certifications</li>
                <li>Include relevant projects and their impact</li>
                <li>Mention programming languages and tools</li>
                <li>Quantify achievements with metrics</li>
                <li>Keep format clean and professional</li>
            </ul>

            <div class="resume-example">
                <h4>Example Resume Section for Software Engineer</h4>
                <p><strong>Professional Summary:</strong><br>
                Experienced Software Engineer with 5+ years of expertise in full-stack development, specializing in cloud-native applications and microservices architecture. Proven track record of delivering scalable solutions and mentoring junior developers.</p>
                
                <p><strong>Technical Skills:</strong><br>
                • Languages: Java, Python, JavaScript, TypeScript<br>
                • Frameworks: Spring Boot, React, Node.js<br>
                • Cloud: AWS, Azure, Docker, Kubernetes<br>
                • Databases: PostgreSQL, MongoDB, Redis<br>
                • Tools: Git, Jenkins, JIRA, VS Code</p>
                
                <p><strong>Experience:</strong><br>
                Senior Software Engineer | Tech Solutions Inc. | 2019-Present<br>
                • Led development of microservices architecture reducing system latency by 40%<br>
                • Implemented CI/CD pipeline reducing deployment time by 60%<br>
                • Mentored 5 junior developers in best practices and coding standards</p>
            </div>

            <div class="resume-example">
                <h4>Example Cover Letter for Software Engineer Position</h4>
                <p>Dear Hiring Manager,</p>
                <p>I am writing to express my strong interest in the Software Engineer position at [Company Name]. With over 5 years of experience in full-stack development and a proven track record of delivering scalable solutions, I am confident in my ability to contribute significantly to your team.</p>
                <p>In my current role at Tech Solutions Inc., I have successfully led the development of microservices architecture that reduced system latency by 40%. I have also implemented CI/CD pipelines that streamlined the deployment process, reducing deployment time by 60%. My experience with cloud technologies and modern development practices aligns perfectly with your team's needs.</p>
                <p>I am particularly drawn to [Company Name]'s innovative approach to technology and its commitment to continuous improvement. I would welcome the opportunity to discuss how my skills and experience could benefit your organization.</p>
                <p>Thank you for considering my application.</p>
                <p>Best regards,<br>[Your Name]</p>
            </div>

            <h3>Required Skills</h3>
            <ul>
                <li>Programming languages (Java, Python, JavaScript, etc.)</li>
                <li>Problem-solving and analytical thinking</li>
                <li>Team collaboration and communication</li>
                <li>Project management</li>
                <li>Continuous learning ability</li>
                <li>Technical documentation</li>
            </ul>
        </div>

        <div id="healthcare" class="career-info">
            <button class="close-btn" onclick="hideCareerInfo('healthcare')">&times;</button>
            <h2>Healthcare</h2>
            <div class="career-images">
                <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Medical Care" class="career-image">
                <img src="https://images.unsplash.com/photo-1586773860418-d37222d8fce3?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Healthcare Team" class="career-image">
                <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Medical Technology" class="career-image">
            </div>
            <h3>Popular Career Paths</h3>
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

            <h3>Resume Tips</h3>
            <ul>
                <li>Highlight medical certifications and licenses</li>
                <li>Include clinical experience and rotations</li>
                <li>Mention patient care achievements</li>
                <li>List relevant medical software proficiency</li>
                <li>Emphasize communication skills</li>
            </ul>

            <h3>Cover Letter Tips</h3>
            <ul>
                <li>Demonstrate compassion and empathy</li>
                <li>Showcase patient care experience</li>
                <li>Highlight medical knowledge and expertise</li>
                <li>Mention commitment to healthcare</li>
                <li>Express interest in specific healthcare field</li>
            </ul>

            <h3>Required Skills</h3>
            <ul>
                <li>Medical knowledge and expertise</li>
                <li>Patient care and communication</li>
                <li>Attention to detail</li>
                <li>Critical thinking</li>
                <li>Teamwork and collaboration</li>
                <li>Stress management</li>
            </ul>

            <div class="resume-example">
                <h4>Example Resume Section for Medical Doctor</h4>
                <p><strong>Professional Summary:</strong><br>
                Experienced Medical Doctor with 7+ years of expertise in primary care and specialized medical practice. Proven track record of providing high-quality patient care and leading healthcare initiatives to improve patient outcomes.</p>
                
                <p><strong>Technical Skills:</strong><br>
                • Medical: Primary Care, Patient Diagnosis, Treatment Planning<br>
                • Clinical: Patient Care, Medical Procedures<br>
                • Management: Healthcare Administration, Team Leadership<br>
                • Technology: Electronic Health Records, Medical Software<br>
                • Communication: Patient Counseling, Medical Documentation</p>
                
                <p><strong>Experience:</strong><br>
                Senior Physician | Healthcare Center | 2016-Present<br>
                • Led implementation of new patient care protocol improving outcomes by 30%<br>
                • Managed team of 5 medical professionals<br>
                • Developed patient education program reducing readmission rates by 25%</p>
            </div>

            <div class="resume-example">
                <h4>Example Cover Letter for Medical Doctor Position</h4>
                <p>Dear Medical Director,</p>
                <p>I am writing to express my strong interest in the Medical Doctor position at [Healthcare Facility Name]. With over 7 years of experience in medical practice and a proven track record of improving patient outcomes, I am confident in my ability to contribute significantly to your healthcare team.</p>
                <p>In my current role at Healthcare Center, I have successfully led the implementation of a new patient care protocol that improved outcomes by 30% and developed a patient education program that reduced readmission rates by 25%. My experience with patient care and healthcare administration aligns perfectly with your facility's needs.</p>
                <p>I am particularly drawn to [Healthcare Facility Name]'s commitment to patient care excellence and its innovative approach to healthcare delivery. I would welcome the opportunity to discuss how my skills and experience could benefit your organization.</p>
                <p>Thank you for considering my application.</p>
                <p>Best regards,<br>[Your Name]</p>
            </div>
        </div>

        <div id="finance" class="career-info">
            <button class="close-btn" onclick="hideCareerInfo('finance')">&times;</button>
            <h2>Finance & Banking</h2>
            <div class="career-images">
                <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Financial Analysis" class="career-image">
                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Banking" class="career-image">
                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Investment" class="career-image">
            </div>
            <h3>Popular Career Paths</h3>
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

            <h3>Resume Tips</h3>
            <ul>
                <li>Highlight financial certifications (CFA, CPA, etc.)</li>
                <li>Include quantitative achievements and metrics</li>
                <li>Mention financial software proficiency</li>
                <li>Emphasize analytical and problem-solving skills</li>
                <li>Showcase relevant internships and projects</li>
            </ul>

            <h3>Cover Letter Tips</h3>
            <ul>
                <li>Demonstrate financial acumen and analytical skills</li>
                <li>Showcase understanding of financial markets</li>
                <li>Highlight relevant certifications and qualifications</li>
                <li>Mention specific financial software expertise</li>
                <li>Express interest in specific financial sector</li>
            </ul>

            <h3>Required Skills</h3>
            <ul>
                <li>Financial analysis and modeling</li>
                <li>Risk assessment and management</li>
                <li>Excel and financial software proficiency</li>
                <li>Strong analytical and numerical skills</li>
                <li>Attention to detail</li>
                <li>Communication and presentation skills</li>
            </ul>

            <div class="resume-example">
                <h4>Example Resume Section for Financial Analyst</h4>
                <p><strong>Professional Summary:</strong><br>
                Experienced Financial Analyst with 5+ years of expertise in financial modeling, investment analysis, and risk management. Proven track record of providing strategic financial insights and driving business growth through data-driven recommendations.</p>
                
                <p><strong>Technical Skills:</strong><br>
                • Analysis: Financial Modeling, Investment Analysis<br>
                • Software: Excel, Bloomberg Terminal, SQL<br>
                • Risk: Risk Assessment, Portfolio Management<br>
                • Management: Project Management, Client Relations<br>
                • Tools: Financial Reporting, Data Analysis</p>
                
                <p><strong>Experience:</strong><br>
                Senior Financial Analyst | Investment Solutions Inc. | 2018-Present<br>
                • Developed financial models leading to 20% increase in investment returns<br>
                • Managed portfolio of $50M+ in assets<br>
                • Led team of 3 analysts in market research project</p>
            </div>

            <div class="resume-example">
                <h4>Example Cover Letter for Financial Analyst Position</h4>
                <p>Dear Hiring Manager,</p>
                <p>I am writing to express my strong interest in the Financial Analyst position at [Company Name]. With over 5 years of experience in financial analysis and a proven track record of delivering valuable insights, I am confident in my ability to contribute significantly to your team.</p>
                <p>In my current role at Investment Solutions Inc., I have successfully developed financial models that led to a 20% increase in investment returns and managed a portfolio of over $50M in assets. My experience with financial modeling and investment analysis aligns perfectly with your team's needs.</p>
                <p>I am particularly drawn to [Company Name]'s innovative approach to financial analysis and its commitment to data-driven decision making. I would welcome the opportunity to discuss how my skills and experience could benefit your organization.</p>
                <p>Thank you for considering my application.</p>
                <p>Best regards,<br>[Your Name]</p>
            </div>
        </div>

        <div id="engineering" class="career-info">
            <button class="close-btn" onclick="hideCareerInfo('engineering')">&times;</button>
            <h2>Engineering</h2>
            <div class="career-images">
                <img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Engineering Design" class="career-image">
                <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Mechanical Engineering" class="career-image">
                <img src="https://images.unsplash.com/photo-1581092334651-ddf26d9a09d0?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Civil Engineering" class="career-image">
            </div>
            <h3>Popular Career Paths</h3>
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

            <h3>Resume Tips</h3>
            <ul>
                <li>Highlight technical projects and designs</li>
                <li>Include relevant certifications and licenses</li>
                <li>Mention CAD software proficiency</li>
                <li>Emphasize problem-solving achievements</li>
                <li>Showcase internship and practical experience</li>
            </ul>

            <h3>Cover Letter Tips</h3>
            <ul>
                <li>Demonstrate technical expertise</li>
                <li>Showcase engineering projects</li>
                <li>Highlight relevant software skills</li>
                <li>Mention specific engineering specializations</li>
                <li>Express interest in specific engineering field</li>
            </ul>

            <h3>Required Skills</h3>
            <ul>
                <li>Technical design and analysis</li>
                <li>CAD software proficiency</li>
                <li>Project management</li>
                <li>Problem-solving abilities</li>
                <li>Team collaboration</li>
                <li>Technical documentation</li>
            </ul>

            <div class="resume-example">
                <h4>Example Resume Section for Mechanical Engineer</h4>
                <p><strong>Professional Summary:</strong><br>
                Experienced Mechanical Engineer with 6+ years of expertise in product design, manufacturing processes, and project management. Proven track record of developing innovative solutions and leading engineering teams to successful project completion.</p>
                
                <p><strong>Technical Skills:</strong><br>
                • Engineering: Product Design, Manufacturing Processes<br>
                • Software: CAD, FEA, PLM Systems<br>
                • Analysis: Thermal Analysis, Stress Analysis<br>
                • Management: Project Management, Team Leadership<br>
                • Tools: 3D Modeling, Prototyping</p>
                
                <p><strong>Experience:</strong><br>
                Senior Engineer | Engineering Solutions Ltd. | 2017-Present<br>
                • Led development of new product line reducing production costs by 25%<br>
                • Managed team of 5 engineers in product redesign project<br>
                • Implemented new manufacturing process improving efficiency by 40%</p>
            </div>

            <div class="resume-example">
                <h4>Example Cover Letter for Mechanical Engineer Position</h4>
                <p>Dear Engineering Manager,</p>
                <p>I am writing to express my strong interest in the Mechanical Engineer position at [Company Name]. With over 6 years of experience in mechanical engineering and a proven track record of leading successful projects, I am confident in my ability to contribute significantly to your engineering team.</p>
                <p>In my current role at Engineering Solutions Ltd., I have successfully led the development of a new product line that reduced production costs by 25% and implemented a new manufacturing process that improved efficiency by 40%. My experience with product design and process optimization aligns perfectly with your team's needs.</p>
                <p>I am particularly drawn to [Company Name]'s innovative approach to engineering and its commitment to technical excellence. I would welcome the opportunity to discuss how my skills and experience could benefit your organization.</p>
                <p>Thank you for considering my application.</p>
                <p>Best regards,<br>[Your Name]</p>
            </div>
        </div>

        <div id="creative" class="career-info">
            <button class="close-btn" onclick="hideCareerInfo('creative')">&times;</button>
            <h2>Creative Arts & Media</h2>
            <div class="career-images">
                <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Creative Design" class="career-image">
                <img src="https://images.unsplash.com/photo-1574717024653-61fd2cf4d44d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Digital Media" class="career-image">
                <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Content Creation" class="career-image">
            </div>
            <h3>Popular Career Paths</h3>
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

            <h3>Resume Tips</h3>
            <ul>
                <li>Include portfolio link or samples</li>
                <li>Highlight creative projects and achievements</li>
                <li>Mention relevant software proficiency</li>
                <li>Showcase client work and testimonials</li>
                <li>Emphasize creative process and methodology</li>
            </ul>

            <h3>Cover Letter Tips</h3>
            <ul>
                <li>Demonstrate creative thinking</li>
                <li>Showcase portfolio highlights</li>
                <li>Highlight relevant software skills</li>
                <li>Mention specific creative achievements</li>
                <li>Express passion for creative work</li>
            </ul>

            <h3>Required Skills</h3>
            <ul>
                <li>Creative software proficiency</li>
                <li>Visual design principles</li>
                <li>Content creation</li>
                <li>Project management</li>
                <li>Client communication</li>
                <li>Trend awareness</li>
            </ul>

            <div class="resume-example">
                <h4>Example Resume Section for Graphic Designer</h4>
                <p><strong>Professional Summary:</strong><br>
                Creative Graphic Designer with 5+ years of experience in brand identity, digital design, and creative direction. Proven track record of delivering innovative design solutions and managing creative projects from concept to completion.</p>
                
                <p><strong>Technical Skills:</strong><br>
                • Design: Brand Identity, UI/UX, Print Design<br>
                • Software: Adobe Creative Suite, Figma, Sketch<br>
                • Creative: Art Direction, Visual Storytelling<br>
                • Management: Project Management, Client Relations<br>
                • Tools: Design Systems, Prototyping</p>
                
                <p><strong>Experience:</strong><br>
                Senior Designer | Creative Studio Inc. | 2018-Present<br>
                • Led rebranding project for major tech company<br>
                • Designed award-winning mobile app interface<br>
                • Managed team of 3 junior designers</p>
            </div>

            <div class="resume-example">
                <h4>Example Cover Letter for Graphic Designer Position</h4>
                <p>Dear Creative Director,</p>
                <p>I am writing to express my strong interest in the Graphic Designer position at [Company Name]. With over 5 years of experience in creative design and a proven track record of delivering innovative solutions, I am confident in my ability to contribute significantly to your creative team.</p>
                <p>In my current role at Creative Studio Inc., I have successfully led a rebranding project for a major tech company and designed an award-winning mobile app interface. My experience with brand identity and digital design aligns perfectly with your team's needs.</p>
                <p>I am particularly drawn to [Company Name]'s innovative approach to design and its commitment to creative excellence. I would welcome the opportunity to discuss how my skills and experience could benefit your organization.</p>
                <p>Thank you for considering my application.</p>
                <p>Best regards,<br>[Your Name]</p>
            </div>
        </div>

        <div id="law" class="career-info">
            <button class="close-btn" onclick="hideCareerInfo('law')">&times;</button>
            <h2>Law & Legal Services</h2>
            <div class="career-images">
                <img src="https://images.unsplash.com/photo-1589829085413-56de8ae18c73?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Legal Services" class="career-image">
                <img src="https://images.unsplash.com/photo-1589578228447-e1a4e481c6c8?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Courtroom" class="career-image">
                <img src="https://images.unsplash.com/photo-1479142506502-19b3a3b7ff33?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Legal Documents" class="career-image">
            </div>
            <h3>Popular Career Paths</h3>
            <ul>
                <li>Lawyer (Corporate, Criminal, Civil, IP, Tax)</li>
                <li>Judge</li>
                <li>Legal Advisor</li>
                <li>Public Prosecutor</li>
                <li>Paralegal</li>
                <li>Compliance Officer</li>
                <li>Contract Manager</li>
            </ul>

            <h3>Resume Tips</h3>
            <ul>
                <li>Highlight legal certifications and bar membership</li>
                <li>Include relevant case experience</li>
                <li>Mention legal research skills</li>
                <li>Emphasize writing and analytical abilities</li>
                <li>Showcase internship and clerkship experience</li>
            </ul>

            <h3>Cover Letter Tips</h3>
            <ul>
                <li>Demonstrate legal expertise</li>
                <li>Showcase relevant case experience</li>
                <li>Highlight research and writing skills</li>
                <li>Mention specific legal specializations</li>
                <li>Express interest in specific legal field</li>
            </ul>

            <h3>Required Skills</h3>
            <ul>
                <li>Legal research and analysis</li>
                <li>Written and oral communication</li>
                <li>Critical thinking</li>
                <li>Attention to detail</li>
                <li>Client management</li>
                <li>Ethical judgment</li>
            </ul>

            <div class="resume-example">
                <h4>Example Resume Section for Corporate Lawyer</h4>
                <p><strong>Professional Summary:</strong><br>
                Experienced Corporate Lawyer with 6+ years of expertise in corporate law, mergers & acquisitions, and regulatory compliance. Proven track record of successfully handling complex legal matters and providing strategic counsel to clients.</p>
                
                <p><strong>Technical Skills:</strong><br>
                • Legal: Corporate Law, M&A, Regulatory Compliance<br>
                • Research: Legal Research, Case Analysis<br>
                • Communication: Legal Writing, Client Counseling<br>
                • Management: Case Management, Client Relations<br>
                • Tools: Legal Software, Document Management</p>
                
                <p><strong>Experience:</strong><br>
                Senior Associate | Law & Partners LLP | 2017-Present<br>
                • Led successful completion of 3 major M&A transactions<br>
                • Managed regulatory compliance for Fortune 500 client<br>
                • Developed innovative legal strategies for corporate clients</p>
            </div>

            <div class="resume-example">
                <h4>Example Cover Letter for Corporate Lawyer Position</h4>
                <p>Dear Hiring Partner,</p>
                <p>I am writing to express my strong interest in the Corporate Lawyer position at [Law Firm Name]. With over 6 years of experience in corporate law and a proven track record of handling complex legal matters, I am confident in my ability to contribute significantly to your firm.</p>
                <p>In my current role at Law & Partners LLP, I have successfully led three major M&A transactions and managed regulatory compliance for a Fortune 500 client. My experience with corporate law and client counseling aligns perfectly with your firm's needs.</p>
                <p>I am particularly drawn to [Law Firm Name]'s reputation for excellence in corporate law and its commitment to client service. I would welcome the opportunity to discuss how my skills and experience could benefit your firm.</p>
                <p>Thank you for considering my application.</p>
                <p>Best regards,<br>[Your Name]</p>
            </div>
        </div>

        <div id="education" class="career-info">
            <button class="close-btn" onclick="hideCareerInfo('education')">&times;</button>
            <h2>Education & Research</h2>
            <div class="career-images">
                <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Teaching" class="career-image">
                <img src="https://images.unsplash.com/photo-1567168544813-cc03465b4fa8?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Research Lab" class="career-image">
                <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Education Technology" class="career-image">
            </div>
            <h3>Popular Career Paths</h3>
            <ul>
                <li>Professor/Lecturer</li>
                <li>Educational Consultant</li>
                <li>School Teacher</li>
                <li>Instructional Designer</li>
                <li>Research Scientist</li>
                <li>Curriculum Developer</li>
                <li>Academic Writer</li>
            </ul>

            <h3>Resume Tips</h3>
            <ul>
                <li>Highlight teaching experience and certifications</li>
                <li>Include research publications and projects</li>
                <li>Mention curriculum development experience</li>
                <li>Emphasize student achievement metrics</li>
                <li>Showcase educational technology proficiency</li>
            </ul>

            <h3>Cover Letter Tips</h3>
            <ul>
                <li>Demonstrate teaching philosophy</li>
                <li>Showcase research achievements</li>
                <li>Highlight student success stories</li>
                <li>Mention specific teaching methods</li>
                <li>Express passion for education</li>
            </ul>

            <h3>Required Skills</h3>
            <ul>
                <li>Teaching and presentation</li>
                <li>Curriculum development</li>
                <li>Research methodology</li>
                <li>Student assessment</li>
                <li>Classroom management</li>
                <li>Educational technology</li>
            </ul>

            <div class="resume-example">
                <h4>Example Resume Section for University Professor</h4>
                <p><strong>Professional Summary:</strong><br>
                Accomplished University Professor with 8+ years of experience in higher education, research, and curriculum development. Proven track record of publishing research, mentoring students, and developing innovative teaching methods.</p>
                
                <p><strong>Technical Skills:</strong><br>
                • Teaching: Curriculum Development, Student Assessment<br>
                • Research: Research Methodology, Data Analysis<br>
                • Technology: Learning Management Systems, Educational Software<br>
                • Management: Classroom Management, Student Mentoring<br>
                • Tools: Research Publication, Grant Writing</p>
                
                <p><strong>Experience:</strong><br>
                Associate Professor | University of Excellence | 2015-Present<br>
                • Published 12 peer-reviewed research papers<br>
                • Developed new curriculum for advanced research methods<br>
                • Mentored 15 graduate students to successful completion</p>
            </div>

            <div class="resume-example">
                <h4>Example Cover Letter for University Professor Position</h4>
                <p>Dear Hiring Committee,</p>
                <p>I am writing to express my strong interest in the Professor position in the Department of [Subject] at [University Name]. With over 8 years of experience in higher education and a proven track record of research excellence and teaching innovation, I am confident in my ability to contribute significantly to your department.</p>
                <p>In my current role at the University of Excellence, I have successfully published 12 peer-reviewed research papers and developed innovative teaching methods that improved student engagement by 40%. My experience with curriculum development and student mentoring aligns perfectly with your department's needs.</p>
                <p>I am particularly drawn to [University Name]'s commitment to academic excellence and its innovative approach to higher education. I would welcome the opportunity to discuss how my skills and experience could benefit your institution.</p>
                <p>Thank you for considering my application.</p>
                <p>Best regards,<br>[Your Name]</p>
            </div>
        </div>

        <div id="government" class="career-info">
            <button class="close-btn" onclick="hideCareerInfo('government')">&times;</button>
            <h2>Government & Public Administration</h2>
            <div class="career-images">
                <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Indian Parliament" class="career-image">
                <img src="https://images.unsplash.com/photo-1581092334651-ddf26d9a09d0?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Civil Services" class="career-image">
                <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Government Office" class="career-image">
            </div>
            <h3>Popular Career Paths</h3>
            <ul>
                <li>Civil Services (IAS, IPS, IFS)</li>
                <li>Public Policy Analyst</li>
                <li>Political Analyst</li>
                <li>Urban Planner</li>
                <li>Government Relations Specialist</li>
            </ul>

            <h3>Resume Tips</h3>
            <ul>
                <li>Highlight public service experience</li>
                <li>Include policy analysis projects</li>
                <li>Mention relevant certifications</li>
                <li>Emphasize leadership experience</li>
                <li>Showcase community involvement</li>
            </ul>

            <h3>Cover Letter Tips</h3>
            <ul>
                <li>Demonstrate public service commitment</li>
                <li>Showcase policy analysis skills</li>
                <li>Highlight leadership experience</li>
                <li>Mention specific government initiatives</li>
                <li>Express interest in public service</li>
            </ul>

            <h3>Required Skills</h3>
            <ul>
                <li>Policy analysis</li>
                <li>Public speaking</li>
                <li>Leadership</li>
                <li>Research and writing</li>
                <li>Project management</li>
                <li>Stakeholder management</li>
            </ul>

            <div class="resume-example">
                <h4>Example Resume Section for Public Policy Analyst</h4>
                <p><strong>Professional Summary:</strong><br>
                Experienced Public Policy Analyst with 5+ years of expertise in policy development, implementation, and evaluation. Proven track record of leading policy initiatives and collaborating with stakeholders to achieve positive outcomes.</p>
                
                <p><strong>Technical Skills:</strong><br>
                • Policy: Policy Analysis, Implementation, Evaluation<br>
                • Research: Data Analysis, Impact Assessment<br>
                • Communication: Public Speaking, Report Writing<br>
                • Management: Project Management, Stakeholder Engagement<br>
                • Tools: Policy Modeling, Statistical Analysis</p>
                
                <p><strong>Experience:</strong><br>
                Senior Policy Analyst | Department of Public Affairs | 2019-Present<br>
                • Led development and implementation of new education policy<br>
                • Conducted comprehensive policy evaluation study<br>
                • Managed stakeholder engagement for major policy initiative</p>
            </div>

            <div class="resume-example">
                <h4>Example Cover Letter for Public Policy Analyst Position</h4>
                <p>Dear Hiring Manager,</p>
                <p>I am writing to express my strong interest in the Public Policy Analyst position at [Organization Name]. With over 5 years of experience in policy analysis and a proven track record of leading successful policy initiatives, I am confident in my ability to contribute significantly to your team.</p>
                <p>In my current role at the Department of Public Affairs, I have successfully led the development and implementation of a new education policy that improved access to quality education for underserved communities. My experience with policy analysis and stakeholder engagement aligns perfectly with your team's needs.</p>
                <p>I am particularly drawn to [Organization Name]'s commitment to evidence-based policymaking and its innovative approach to public service. I would welcome the opportunity to discuss how my skills and experience could benefit your organization.</p>
                <p>Thank you for considering my application.</p>
                <p>Best regards,<br>[Your Name]</p>
            </div>
        </div>

        <div id="business" class="career-info">
            <button class="close-btn" onclick="hideCareerInfo('business')">&times;</button>
            <h2>Business & Management</h2>
            <div class="career-images">
                <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Business Meeting" class="career-image">
                <img src="https://images.unsplash.com/photo-1552581234-26160f608093?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Management" class="career-image">
                <img src="https://images.unsplash.com/photo-1552581234-26160f608093?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Business Strategy" class="career-image">
            </div>
            <h3>Popular Career Paths</h3>
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

            <h3>Resume Tips</h3>
            <ul>
                <li>Highlight business achievements and metrics</li>
                <li>Include leadership experience</li>
                <li>Mention relevant certifications (MBA, PMP, etc.)</li>
                <li>Emphasize strategic thinking</li>
                <li>Showcase team management experience</li>
            </ul>

            <h3>Cover Letter Tips</h3>
            <ul>
                <li>Demonstrate business acumen</li>
                <li>Showcase leadership experience</li>
                <li>Highlight strategic achievements</li>
                <li>Mention specific business initiatives</li>
                <li>Express interest in business growth</li>
            </ul>

            <h3>Required Skills</h3>
            <ul>
                <li>Strategic thinking</li>
                <li>Leadership and management</li>
                <li>Business analysis</li>
                <li>Communication</li>
                <li>Project management</li>
                <li>Financial acumen</li>
            </ul>

            <div class="resume-example">
                <h4>Example Resume Section for Business Analyst</h4>
                <p><strong>Professional Summary:</strong><br>
                Results-driven Business Analyst with 5+ years of experience in process optimization, data analysis, and strategic planning. Proven track record of improving operational efficiency and driving business growth through data-driven insights.</p>
                
                <p><strong>Technical Skills:</strong><br>
                • Analysis: Business Process Modeling, Data Analysis<br>
                • Software: SQL, Tableau, Power BI, Excel<br>
                • Project Management: Agile, Scrum, JIRA<br>
                • Business Intelligence: KPI Development, Dashboard Creation<br>
                • Tools: Process Mapping, Requirements Gathering</p>
                
                <p><strong>Experience:</strong><br>
                Senior Business Analyst | Tech Solutions Inc. | 2019-Present<br>
                • Led process optimization project resulting in 30% efficiency improvement<br>
                • Developed comprehensive business intelligence dashboard<br>
                • Managed cross-functional team of 5 analysts</p>
            </div>

            <div class="resume-example">
                <h4>Example Cover Letter for Business Analyst Position</h4>
                <p>Dear Hiring Manager,</p>
                <p>I am writing to express my strong interest in the Business Analyst position at [Company Name]. With over 5 years of experience in business analysis and a proven track record of driving operational improvements, I am confident in my ability to contribute significantly to your team.</p>
                <p>In my current role at Tech Solutions Inc., I have successfully led process optimization projects that improved operational efficiency by 30%. My experience with data analysis and business intelligence aligns perfectly with your team's needs.</p>
                <p>I am particularly drawn to [Company Name]'s innovative approach to business analysis and its commitment to data-driven decision making. I would welcome the opportunity to discuss how my skills and experience could benefit your organization.</p>
                <p>Thank you for considering my application.</p>
                <p>Best regards,<br>[Your Name]</p>
            </div>
        </div>

        <div id="science" class="career-info">
            <button class="close-btn" onclick="hideCareerInfo('science')">&times;</button>
            <h2>Science & Environment</h2>
            <div class="career-images">
                <img src="https://images.unsplash.com/photo-1576086213369-97a306d36557?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Scientific Research" class="career-image">
                <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Laboratory" class="career-image">
                <img src="https://images.unsplash.com/photo-1581092334651-ddf26d9a09d0?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Environmental Science" class="career-image">
            </div>
            <h3>Popular Career Paths</h3>
            <ul>
                <li>Environmental Scientist</li>
                <li>Marine Biologist</li>
                <li>Astronomer</li>
                <li>Physicist</li>
                <li>Geologist</li>
                <li>Meteorologist</li>
                <li>Forensic Scientist</li>
            </ul>

            <h3>Resume Tips</h3>
            <ul>
                <li>Highlight research experience</li>
                <li>Include scientific publications</li>
                <li>Mention laboratory skills</li>
                <li>Emphasize analytical abilities</li>
                <li>Showcase scientific software proficiency</li>
            </ul>

            <h3>Cover Letter Tips</h3>
            <ul>
                <li>Demonstrate scientific expertise</li>
                <li>Showcase research achievements</li>
                <li>Highlight laboratory experience</li>
                <li>Mention specific scientific methods</li>
                <li>Express passion for scientific discovery</li>
            </ul>

            <h3>Required Skills</h3>
            <ul>
                <li>Research methodology</li>
                <li>Data analysis</li>
                <li>Laboratory techniques</li>
                <li>Scientific writing</li>
                <li>Critical thinking</li>
                <li>Technical software proficiency</li>
            </ul>

            <div class="resume-example">
                <h4>Example Resume Section for Environmental Scientist</h4>
                <p><strong>Professional Summary:</strong><br>
                Experienced Environmental Scientist with 5+ years of expertise in environmental impact assessment, climate change research, and sustainable development. Proven track record of leading research projects and publishing findings in peer-reviewed journals.</p>
                
                <p><strong>Technical Skills:</strong><br>
                • Research: Environmental Impact Assessment, Climate Change Analysis<br>
                • Software: GIS, R, Python, MATLAB<br>
                • Laboratory: Water Quality Analysis, Soil Testing<br>
                • Field Work: Biodiversity Surveys, Environmental Monitoring<br>
                • Tools: Data Collection, Statistical Analysis</p>
                
                <p><strong>Experience:</strong><br>
                Senior Environmental Scientist | EcoResearch Institute | 2019-Present<br>
                • Led research project on climate change impact on local ecosystems<br>
                • Published 3 peer-reviewed papers on environmental conservation<br>
                • Developed new methodology for biodiversity assessment</p>
            </div>

            <div class="resume-example">
                <h4>Example Cover Letter for Environmental Scientist Position</h4>
                <p>Dear Hiring Manager,</p>
                <p>I am writing to express my strong interest in the Environmental Scientist position at [Company Name]. With over 5 years of experience in environmental research and a proven track record of leading impactful projects, I am confident in my ability to contribute significantly to your team.</p>
                <p>In my current role at EcoResearch Institute, I have successfully led research projects on climate change impact assessment and developed innovative methodologies for biodiversity studies. My experience with environmental monitoring and data analysis aligns perfectly with your team's needs.</p>
                <p>I am particularly drawn to [Company Name]'s commitment to environmental sustainability and its innovative approach to environmental research. I would welcome the opportunity to discuss how my skills and experience could benefit your organization.</p>
                <p>Thank you for considering my application.</p>
                <p>Best regards,<br>[Your Name]</p>
            </div>
        </div>
    </div>

    <script>
        function showCareerInfo(careerId) {
            document.querySelectorAll('.career-info').forEach(section => {
                section.classList.remove('active');
            });
            document.getElementById(careerId).classList.add('active');
        }

        function hideCareerInfo(careerId) {
            document.getElementById(careerId).classList.remove('active');
        }
    </script>
</body>
</html> 