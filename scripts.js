function showCareerInfo(careerId) {
    document.querySelectorAll('.career-info').forEach(section => {
        section.classList.remove('active');
    });
    document.getElementById(careerId).classList.add('active');
}

function hideCareerInfo(careerId) {
    document.getElementById(careerId).classList.remove('active');
} 