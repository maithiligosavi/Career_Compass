<?php include '../script/pages-header.php'; ?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us - Career Guidance Portal</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <link rel="stylesheet" href="../Assets/css/styles.css" />
    <style>
      .about-section {
        padding: 80px 20px;
        background-color: #f9f9f9;
      }
      
      .about-content {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 50px;
        align-items: center;
      }
      
      .about-text {
        padding: 20px;
      }
      
      .about-text h1 {
        color: #2c3e50;
        margin-bottom: 25px;
        font-size: 2.5em;
      }
      
      .about-text p {
        color: #555;
        line-height: 1.8;
        margin-bottom: 20px;
      }
      
      .mission-points {
        list-style: none;
        padding: 0;
      }
      
      .mission-points li {
        margin: 15px 0;
        padding-left: 30px;
        position: relative;
      }
      
      .mission-points li:before {
        content: "✓";
        color: #3498db;
        position: absolute;
        left: 0;
        font-weight: bold;
      }
      
      .about-image {
        position: relative;
        overflow: hidden;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      }
      
      .about-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
      }
      
      .about-image:hover img {
        transform: scale(1.05);
      }
      
      .team-section {
        padding: 60px 20px;
        background: white;
      }
      
      .team-grid {
        max-width: 1200px;
        margin: 40px auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
      }
      
      .team-member {
        text-align: center;
        padding: 20px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
      }
    </style>
  </head>
  <body>
    

    <section class="about-section">
      <div class="about-content">
        <div class="about-text">
          <h1>About Us</h1>
          <p>
            Welcome to Career Compass, your trusted partner in navigating the
            ever-evolving world of careers. We are dedicated to empowering
            individuals to reach their full professional potential through
            comprehensive career guidance and expert resources.
          </p>

          <h1>Our Mission</h1>
          <p>
            At Career Compass, we believe everyone deserves a fulfilling career
            that aligns with their skills, interests, and values. Our mission
            is to bridge the gap between career aspirations and real-world
            opportunities.
          </p>
          
          <ul class="mission-points">
            <li>Empower individuals with knowledge about various career paths</li>
            <li>Provide cutting-edge assessment tools and personalized guidance</li>
            <li>Connect users with educational resources and certifications</li>
            <li>Offer expert-backed insights for career growth</li>
          </ul>
        </div>
        <div class="about-image">
          <img src="https://img.freepik.com/free-photo/group-people-working-out-business-plan-office_1303-15861.jpg" 
               alt="Career Guidance Team" />
        </div>
      </div>
    </section>

   
    <footer>
      <p>&copy; 2024 Career Guidance Portal. All rights reserved.</p>
    </footer>
  </body>
</html>
