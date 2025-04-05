<?php include '../script/pages-header.php'; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market Trends - Career Compass</title>
    <link rel="stylesheet" href="../Assets/css/styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-brown: #8B4513;
            --secondary-brown: #A0522D;
            --light-beige: #F5F5DC;
            --dark-beige: #DEB887;
            --text-color: #333;
            --white: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: var(--light-beige);
            color: var(--text-color);
            line-height: 1.6;
        }

        /* Navigation Styles */
        nav {
            background-color: var(--primary-brown);
            padding: 1rem;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            color: var(--white);
            font-size: 1.5rem;
            font-weight: bold;
            text-decoration: none;
        }

        /* Header Section */
        .header {
            margin-top: 80px;
            text-align: center;
            padding: 3rem 1rem;
            background: var(--primary-brown);
            color: var(--white);
        }

        .header h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        /* Trends Section */
        .trends-container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        .field-section {
            background: var(--white);
            border-radius: 15px;
            margin-bottom: 2rem;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            animation: fadeIn 0.5s ease-out;
        }

        .field-header {
            background: var(--secondary-brown);
            color: var(--white);
            padding: 1.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .field-header i {
            font-size: 2rem;
        }

        .field-content {
            padding: 2rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .trend-card {
            background: var(--light-beige);
            padding: 1.5rem;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .trend-card:hover {
            transform: translateY(-5px);
        }

        .trend-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 1rem;
        }

        .trend-card h3 {
            color: var(--primary-brown);
            margin-bottom: 0.5rem;
        }

        .trend-stats {
            display: flex;
            justify-content: space-between;
            margin-top: 1rem;
            padding-top: 1rem;
            border-top: 1px solid var(--dark-beige);
        }

        .learn-more-btn {
            background-color: var(--primary-brown);
            color: var(--white);
            padding: 0.8rem 1.5rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease;
            margin-top: 1rem;
            width: 100%;
        }

        .learn-more-btn:hover {
            background-color: var(--secondary-brown);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
   

    <!-- Header -->
    <header class="header">
        <h1>Market Trends & Hot Jobs</h1>
        <p>Discover the most in-demand careers and emerging opportunities across different industries</p>
    </header>

    <!-- Trends Container -->
    <div class="trends-container">
        <!-- Technology Field -->
        <div class="field-section">
            <div class="field-header">
                <i class="fas fa-laptop-code"></i>
                <h2>Technology & IT</h2>
            </div>
            <div class="field-content">
                <div class="trend-card">
                    <img src="https://images.unsplash.com/photo-1555949963-ff9fe0c870eb?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="AI Developer">
                    <h3>AI/ML Engineer</h3>
                    <p>Artificial Intelligence and Machine Learning continue to revolutionize industries, creating high demand for skilled engineers.</p>
                    <div class="trend-stats">
                        <span>Growth: +35%</span>
                        <span>Avg. Salary: $120K</span>
                    </div>
                    <button class="learn-more-btn">Learn More</button>
                </div>
                <div class="trend-card">
                    <img src="https://images.unsplash.com/photo-1560732488-6b0df240254a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Cloud Engineer">
                    <h3>Cloud Architect</h3>
                    <p>Cloud computing expertise is essential as businesses continue their digital transformation journey.</p>
                    <div class="trend-stats">
                        <span>Growth: +28%</span>
                        <span>Avg. Salary: $135K</span>
                    </div>
                    <button class="learn-more-btn">Learn More</button>
                </div>
            </div>
        </div>

        <!-- Healthcare Field -->
        <div class="field-section">
            <div class="field-header">
                <i class="fas fa-heartbeat"></i>
                <h2>Healthcare</h2>
            </div>
            <div class="field-content">
                <div class="trend-card">
                    <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Telehealth">
                    <h3>Telehealth Specialist</h3>
                    <p>Remote healthcare services are expanding, creating new opportunities in digital health delivery.</p>
                    <div class="trend-stats">
                        <span>Growth: +40%</span>
                        <span>Avg. Salary: $95K</span>
                    </div>
                    <button class="learn-more-btn">Learn More</button>
                </div>
                <div class="trend-card">
                    <img src="https://images.unsplash.com/photo-1581595220892-b0739db3ba8c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Mental Health">
                    <h3>Mental Health Professional</h3>
                    <p>Growing awareness of mental health has increased demand for qualified professionals.</p>
                    <div class="trend-stats">
                        <span>Growth: +25%</span>
                        <span>Avg. Salary: $85K</span>
                    </div>
                    <button class="learn-more-btn">Learn More</button>
                </div>
            </div>
        </div>

        <!-- Sustainability Field -->
        <div class="field-section">
            <div class="field-header">
                <i class="fas fa-leaf"></i>
                <h2>Sustainability & Green Tech</h2>
            </div>
            <div class="field-content">
                <div class="trend-card">
                    <img src="https://images.unsplash.com/photo-1509391366360-2e959784a276?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Renewable Energy">
                    <h3>Renewable Energy Engineer</h3>
                    <p>Clean energy initiatives are driving demand for specialists in solar, wind, and other renewable technologies.</p>
                    <div class="trend-stats">
                        <span>Growth: +32%</span>
                        <span>Avg. Salary: $98K</span>
                    </div>
                    <button class="learn-more-btn">Learn More</button>
                </div>
                <div class="trend-card">
                    <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Sustainability">
                    <h3>Sustainability Consultant</h3>
                    <p>Organizations need experts to develop and implement sustainable business practices.</p>
                    <div class="trend-stats">
                        <span>Growth: +27%</span>
                        <span>Avg. Salary: $92K</span>
                    </div>
                    <button class="learn-more-btn">Learn More</button>
                </div>
            </div>
        </div>

        <!-- Digital Marketing Field -->
        <div class="field-section">
            <div class="field-header">
                <i class="fas fa-bullhorn"></i>
                <h2>Digital Marketing</h2>
            </div>
            <div class="field-content">
                <div class="trend-card">
                    <img src="https://images.unsplash.com/photo-1557838923-2985c318be48?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Content Marketing">
                    <h3>Content Strategy Manager</h3>
                    <p>Digital content continues to drive marketing success, requiring skilled content strategists.</p>
                    <div class="trend-stats">
                        <span>Growth: +24%</span>
                        <span>Avg. Salary: $88K</span>
                    </div>
                    <button class="learn-more-btn">Learn More</button>
                </div>
                <div class="trend-card">
                    <img src="https://images.unsplash.com/photo-1533750516457-a7f992034fec?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Social Media">
                    <h3>Social Media Manager</h3>
                    <p>Social media platforms remain crucial for brand engagement and customer relationships.</p>
                    <div class="trend-stats">
                        <span>Growth: +20%</span>
                        <span>Avg. Salary: $75K</span>
                    </div>
                    <button class="learn-more-btn">Learn More</button>
                </div>
            </div>
        </div>

        <!-- Finance Field -->
        <div class="field-section">
            <div class="field-header">
                <i class="fas fa-chart-line"></i>
                <h2>Finance & FinTech</h2>
            </div>
            <div class="field-content">
                <div class="trend-card">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Financial Technology">
                    <h3>FinTech Developer</h3>
                    <p>Financial technology is transforming banking and investment, creating demand for developers who understand both finance and technology.</p>
                    <div class="trend-stats">
                        <span>Growth: +30%</span>
                        <span>Avg. Salary: $115K</span>
                    </div>
                    <button class="learn-more-btn">Learn More</button>
                </div>
                <div class="trend-card">
                    <img src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Risk Analysis">
                    <h3>Risk Management Analyst</h3>
                    <p>Companies need experts to analyze and manage financial risks in an increasingly complex global economy.</p>
                    <div class="trend-stats">
                        <span>Growth: +25%</span>
                        <span>Avg. Salary: $95K</span>
                    </div>
                    <button class="learn-more-btn">Learn More</button>
                </div>
            </div>
        </div>

        <!-- Education Field -->
        <div class="field-section">
            <div class="field-header">
                <i class="fas fa-graduation-cap"></i>
                <h2>Education & E-Learning</h2>
            </div>
            <div class="field-content">
                <div class="trend-card">
                    <img src="https://images.unsplash.com/photo-1571260899304-425eee4c7efd?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="E-Learning">
                    <h3>E-Learning Designer</h3>
                    <p>The rise of online education has created high demand for professionals who can create engaging digital learning experiences.</p>
                    <div class="trend-stats">
                        <span>Growth: +28%</span>
                        <span>Avg. Salary: $78K</span>
                    </div>
                    <button class="learn-more-btn">Learn More</button>
                </div>
                <div class="trend-card">
                    <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Education Tech">
                    <h3>Educational Technology Specialist</h3>
                    <p>Schools and institutions need experts to implement and manage digital learning tools and platforms.</p>
                    <div class="trend-stats">
                        <span>Growth: +22%</span>
                        <span>Avg. Salary: $72K</span>
                    </div>
                    <button class="learn-more-btn">Learn More</button>
                </div>
            </div>
        </div>

        <!-- Creative Arts Field -->
        <div class="field-section">
            <div class="field-header">
                <i class="fas fa-palette"></i>
                <h2>Creative Arts & Design</h2>
            </div>
            <div class="field-content">
                <div class="trend-card">
                    <img src="https://images.unsplash.com/photo-1561998338-13ad7883b21d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="UX Design">
                    <h3>UX/UI Designer</h3>
                    <p>User experience design continues to be crucial for digital products, with growing demand for skilled designers.</p>
                    <div class="trend-stats">
                        <span>Growth: +26%</span>
                        <span>Avg. Salary: $92K</span>
                    </div>
                    <button class="learn-more-btn">Learn More</button>
                </div>
                <div class="trend-card">
                    <img src="https://images.unsplash.com/photo-1536240478700-b869070f9279?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Motion Graphics">
                    <h3>Motion Graphics Designer</h3>
                    <p>The explosion of video content has increased demand for motion graphics and animation specialists.</p>
                    <div class="trend-stats">
                        <span>Growth: +23%</span>
                        <span>Avg. Salary: $85K</span>
                    </div>
                    <button class="learn-more-btn">Learn More</button>
                </div>
            </div>
        </div>

        <!-- Data Science Field -->
        <div class="field-section">
            <div class="field-header">
                <i class="fas fa-database"></i>
                <h2>Data Science & Analytics</h2>
            </div>
            <div class="field-content">
                <div class="trend-card">
                    <img src="https://images.unsplash.com/photo-1518186285589-2f7649de83e0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Data Science">
                    <h3>Data Scientist</h3>
                    <p>Organizations need data scientists to extract insights from large datasets and drive data-informed decisions.</p>
                    <div class="trend-stats">
                        <span>Growth: +33%</span>
                        <span>Avg. Salary: $125K</span>
                    </div>
                    <button class="learn-more-btn">Learn More</button>
                </div>
                <div class="trend-card">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Business Analytics">
                    <h3>Business Intelligence Analyst</h3>
                    <p>Companies rely on BI analysts to transform data into actionable business insights and strategies.</p>
                    <div class="trend-stats">
                        <span>Growth: +28%</span>
                        <span>Avg. Salary: $95K</span>
                    </div>
                    <button class="learn-more-btn">Learn More</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html> 