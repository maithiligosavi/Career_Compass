<?php
// header.php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!-- Define a global JS variable for login status -->
<script>
    var isLoggedIn = <?php echo isset($_SESSION['user_id']) ? 'true' : 'false'; ?>;
</script>

<!-- Navigation -->
<nav>
    <div class="nav-container">
        <a href="index.php" class="logo">Career Compass</a>
        <div class="nav-links" id="nav-link">
            <a href="Pages/about.php">About</a>
            <a href="Pages/service.php">Services</a>
            <!-- Give the Assessment link an id -->
            <a href="Pages/assessment.php" id="assessmentLink">Assessment</a>
            <a href="Pages/contact.php">Contact</a>
            
            <div id="nav-links">
            <?php if (isset($_SESSION['user_id'])): ?>
                <span id="userGreeting">Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?></span>
                <a href="script/logout.php" class="logout-btn">Logout</a>
            <?php else: ?>
                <button class="login-btn" onclick="openModal()">Login</button>
            <?php endif; ?>
            </div>
        </div>
    </div>
</nav>

<!-- Login Modal (only if not logged in) -->
<?php if (!isset($_SESSION['user_id'])): ?>
<div id="loginModal" class="modal" style="display:none;">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>Login</h2>
        <!-- Error message container -->
        <div id="loginError" style="color:red; margin-bottom:10px;"></div>
        <form id="loginForm" action="script/login.php" method="POST" class="contact-form">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit" class="login-btn">Login</button>
        </form>
        <p>Don't have an account? <a href="script/register.php">Register here</a>.</p>
    </div>
</div>
<?php endif; ?>

<script>
    // Modal functions
    function openModal() {
        document.getElementById('loginModal').style.display = 'block';
    }
    function closeModal() {
        document.getElementById('loginModal').style.display = 'none';
    }
    // Close modal when clicking outside of it
    window.onclick = function(event) {
        if (event.target == document.getElementById('loginModal')) {
            closeModal();
        }
    };

    document.addEventListener("DOMContentLoaded", function() {
        // Intercept login form submission to process via AJAX
        var loginForm = document.getElementById('loginForm');
        if (loginForm) {
            loginForm.addEventListener('submit', function(e) {
                e.preventDefault(); // Prevent form submission
                // Clear any previous error
                document.getElementById('loginError').innerText = '';

                var formData = new FormData(loginForm);

                fetch('script/login.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    console.log("Login response:", data);
                    if (data.success) {
                        // Update navbar with logged-in state
                        var navLinks = document.getElementById('nav-links');
                        navLinks.innerHTML = '<span id="userGreeting">Welcome, ' + data.name + '</span>' +
                                             ' <a href="script/logout.php" class="logout-btn">Logout</a>';
                        isLoggedIn = true; // update global variable
                        closeModal();
                    } else {
                        // Display error message
                        document.getElementById('loginError').innerText = data.error;
                    }
                })
                .catch(error => {
                    console.error('Error during login:', error);
                    document.getElementById('loginError').innerText = "An error occurred. Please try again.";
                });
            });
        }

        // Add event listener for Assessment link
        var assessmentLink = document.getElementById('assessmentLink');
        assessmentLink.addEventListener('click', function(e) {
            if (!isLoggedIn) {
                e.preventDefault(); // Prevent navigation
                openModal(); // Open the login modal
                // Show message that login is required
                document.getElementById('loginError').innerText = "You must be logged in to take Assessment";
            }
        });
    });
</script>
