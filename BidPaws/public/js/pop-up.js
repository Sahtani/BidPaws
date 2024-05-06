

document.addEventListener("DOMContentLoaded", function() {
       
    const popup = document.getElementById('logoutPopup');

  
    setTimeout(function() {
        popup.style.transition = 'opacity 1s ease-in-out'; 
        popup.style.opacity = '0'; 
        setTimeout(function() {
            popup.style.display = 'none'; 
        }, 1000); 
    }, 2000);
});