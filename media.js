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
document.addEventListener('DOMContentLoaded', (event) => {
  document.getElementById('chatBtn').addEventListener('click', function(event) {
    var modal = document.getElementById("chatModal");
    modal.style.display = "block";
    setTimeout(function() {
        receiveMessage("What can I assist you with?");
      }, 1000);
    event.preventDefault(); 
});


document.getElementById('mediaLink').addEventListener('click', function(event) {
    var modal = document.getElementById("mediaModal");
    modal.style.display = "block";
});


var chatSpan = document.getElementById("chat-close");
chatSpan.onclick = function() {
    var modal = document.getElementById("chatModal");
    modal.style.display = "none";
}

var videoSpan = document.getElementById("video-close");
videoSpan.onclick = function() {
    var modal = document.getElementById("mediaModal");
    modal.style.display = "none";
}

window.onclick = function(event) {
    var modalvideo = document.getElementById("mediaModal");
    var chatModal = document.getElementById("chatModal");
    if (event.target == modalvideo) {
        modalvideo.style.display = "none";
    } else if (event.target == chatModal) {
        chatModal.style.display = "none";
    }
}

});

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









