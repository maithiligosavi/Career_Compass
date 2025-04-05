

<?php include 'script/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Guidance Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="Assets/css/home.css">
   
</head>
<style>
    .service-link {
    text-decoration: none; /* Removes underline */
    color: black; /* Sets text color to brown */
  }


</style>
<body>
    

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to Career Guidance Portal!!!</h1>
            <p>Discover your perfect career path with expert guidance and personalized assessments</p>
            <button class="login-btn" onclick="openModal()">Get Started</button>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <h2 class="section-title">About Us</h2>
        <div class="about-content">
            <div class="about-text">

            <h1>About Us</h1> <br>
            <p>
            Welcome to Career Compass, your trusted partner in navigating the
            ever-evolving world of careers. We are dedicated to empowering
            individuals to reach their full professional potential through
            comprehensive career guidance and expert resources.
          </p> <br>

          <h1>Our Mission</h1> <br>
          <p>
          At Career Compass, we believe everyone deserves a fulfilling career
            that aligns with their skills, interests, and values. Our mission
            is to bridge the gap between career aspirations and real-world
            opportunities.
          </p> <br>
          
          <ul class="mission-points">
            <li>Empower individuals with knowledge about various career paths</li>
            <li>Provide cutting-edge assessment tools and personalized guidance</li>
            <li>Connect users with educational resources and certifications</li>
            <li>Offer expert-backed insights for career growth</li>
          </ul>
            </div>
            <div class="about-image">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Team meeting">
            </div>
        </div>
    </section>


     <!-- Services Section -->
     <section id="services" class="services">
        <h2 class="section-title">Our Services</h2>
        <div class="services-grid">
          <a href="Pages/assessment.php" class="service-link">
            <div class="service-card">
              <i class="fas fa-clipboard-check fa-3x"></i>
              <h3>Career Assessment</h3>
              <p>
                Get a detailed analysis of your skills, interests, and personality
                to find the best career options for you.
              </p>
            </div>
          </a>
  
          <a href="Pages/career-paths.php" class="service-link">
            <div class="service-card">
              <i class="fas fa-road fa-3x"></i>
              <h3>Career Path</h3>
              <p>
                Explore various career paths, understand industry requirements, 
                and plan your professional journey wisely.
              </p>
            </div>
          </a>
  
          <a href="Pages/resume2.php" class="service-link">
            <div class="service-card">
              <i class="fas fa-file-alt fa-3x"></i>
              <h3>Resume Building</h3>
              <p>
                Create an outstanding resume and cover letter with expert guidance 
                and professional templates.
              </p>
            </div>
          </a>
  
          <a href="Pages/job-market-trends.php" class="service-link">
            <div class="service-card">
              <i class="fas fa-chart-line fa-3x"></i>
              <h3>Job Market Trends</h3>
              <p>
                Stay updated with current job trends, industry demands, and 
                in-demand skills across different sectors.
              </p>
            </div>
          </a>
  
          <a href="Pages/Resources.php" class="service-link">
            <div class="service-card">
              <i class="fas fa-graduation-cap fa-3x"></i>
              <h3>Educational Resources</h3>
              <p>
                Access top courses, certifications, and learning resources 
                to enhance your knowledge and skills.
              </p>
            </div>
          </a>
  
          <a href="Pages/interview-prep.php" class="service-link">
            <div class="service-card">
              <i class="fas fa-handshake fa-3x"></i>
              <h3>Interview Preparation</h3>
              <p>
                Learn how to confidently tackle interviews with expert tips, 
                common questions, and mock interview sessions.
              </p>
            </div>
          </a>
  
          <a href="Pages/skill-development.php" class="service-link">
            <div class="service-card">
              <i class="fas fa-brain fa-3x"></i>
              <h3>Skill Development</h3>
              <p>Improve your technical and soft skills with hands-on training, 
                workshops, and real-world projects.</p>
            </div>
          </a>
  
          <a href="Pages/job-search-tools.php" class="service-link">
            <div class="service-card">
              <i class="fas fa-search fa-3x"></i>
              <h3>Job Search Tools</h3>
              <p>Get access to job portals, networking strategies, and expert 
                guidance to land your dream job.</p>
            </div>
          </a>
        </div>
      </section>
  
<!-- Contact Section -->
<section id="contact" class="contact">
    <h2 class="section-title">Contact Us</h2>
    <form class="contact-form" id="contactForm" action="script/contact_submit.php" method="POST">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="contact-email">Email</label>
            <input type="email" id="contact-email" name="contact-email" required>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="login-btn">Send Message</button>
    </form>
</section>

    

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Career Guidance Portal. All rights reserved. Maithili Gosavi, Rutuja Thorat, Pratiksha Dabhade.</p>
    </footer>

    <script>
      document.addEventListener("DOMContentLoaded", function(){
    var contactForm = document.getElementById('contactForm');
    
    contactForm.addEventListener('submit', function(e){
        e.preventDefault(); // Prevent the default form submission
        
        var formData = new FormData(contactForm);
        
        fetch('script/contact_submit.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            // Show a pop up message (alert) with the server response
            if (data.success) {
                alert(data.message);
                contactForm.reset(); // Optionally clear the form
            } else {
                alert("Error: " + data.message);
            }
        })
        .catch(error => {
            console.error("Error during contact submission:", error);
            alert("An error occurred. Please try again later.");
        });
    });
});
        // Modal functionality
        function openModal() {
            document.getElementById('loginModal').style.display = 'block';
        }

        function closeModal() {
            document.getElementById('loginModal').style.display = 'none';
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            if (event.target == document.getElementById('loginModal')) {
                closeModal();
            }
        }
    </script>
</body>
</html>
