
document.addEventListener('DOMContentLoaded', (event) => {
    var modal = document.getElementById("editModal");

    var btn = document.getElementById("editBtn");

    var span = document.getElementsByClassName("close")[0];

    btn.onclick = function() {
      modal.style.display = "block";
    }

    span.onclick = function() {
      modal.style.display = "none";
    }

    
});

