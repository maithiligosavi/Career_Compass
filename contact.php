<?php include '../script/pages-header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us - Career Guidance Portal</title>
  <link rel="stylesheet" href="../Assets/css/styles.css" />
</head>

<body>


  <section class="contact-hero">
    <h1>Get in Touch</h1>
    <p>Have questions or need guidance? Reach out to us!</p>
  </section>

 <!-- Contact Section -->
<section id="contact" class="contact">
    <form class="contact-form" id="contactForm" action="../script/contact_submit.php" method="POST">
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
</body>
<script>
      document.addEventListener("DOMContentLoaded", function(){
    var contactForm = document.getElementById('contactForm');
    
    contactForm.addEventListener('submit', function(e){
        e.preventDefault(); // Prevent the default form submission
        
        var formData = new FormData(contactForm);
        
        fetch('../script/contact_submit.php', {
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
</script>
</html>