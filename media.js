function filterMedia() {
    var input, filter, container, items, title, i, txtValue;
    input = document.getElementById('mediaSearch');
    filter = input.value.toUpperCase();
    container = document.getElementsByClassName("media-list")[0];
    items = container.getElementsByClassName('media-item');
  
    
    for (i = 0; i < items.length; i++) {
      title = items[i].getAttribute('data-title');
      if (title) {
        txtValue = title.toUpperCase();
        if (txtValue.indexOf(filter) > -1) {
          items[i].style.display = "";
        } else {
          items[i].style.display = "none";
        }
      }
    }
  }

var modal = document.getElementById("mediaModal");

var btn = document.getElementById("mediaLink");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
  var video = document.getElementById("videoPlayer");
  video.pause();
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
    var video = document.getElementById("videoPlayer");
    video.pause();
  }
}

var modal = document.getElementById("chatModal");

var btn = document.getElementById("chatBtn");

var span = document.getElementsByClassName("close");

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
btn.onclick = function() {
    modal.style.display = "block";
    setTimeout(function() {
      receiveMessage("What can I assist you with?");
    }, 1000);
  }
function receiveMessage(text) {
    var messagesContainer = document.getElementsByClassName("chat-messages")[0];
    var messageDiv = document.createElement("div");
    messageDiv.textContent = text;
    messageDiv.className = 'chat-message bot-message'; 
    messagesContainer.appendChild(messageDiv);
    messagesContainer.scrollTop = messagesContainer.scrollHeight;
  }

function sendMessage() {
    var input = document.getElementById("chatInput");
  var userMessage = input.value.trim(); 

  if (userMessage) { 
    var messagesContainer = document.getElementsByClassName("chat-messages")[0];
    var userMessageDiv = document.createElement("div");
    userMessageDiv.textContent = userMessage;
    userMessageDiv.className = 'chat-message user-message'; 
    messagesContainer.appendChild(userMessageDiv); 
    messagesContainer.scrollTop = messagesContainer.scrollHeight;

    input.value = '';

    setTimeout(function() {
      receiveMessage("Let me look that up for you...");
    }, 1000);
  }
}
