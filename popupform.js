
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

    document.getElementById('editForm').addEventListener('submit', function(event) {
      event.preventDefault();
      var newVal = document.getElementById("modal-name");
      document.getElementById('name').value = newVal;
      modal.style.display = "none";
    });
});

