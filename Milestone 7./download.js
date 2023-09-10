// download.js

// Function to handle the file download
function handleDownloadClick(event) {
    event.preventDefault();
  
    var downloadLink = document.createElement("a");
    downloadLink.href = event.target.getAttribute("href");
    downloadLink.download = "jerRes.png"; // Set the desired file name
    downloadLink.style.display = "none";
  
    document.body.appendChild(downloadLink);
    downloadLink.click();
  
    document.body.removeChild(downloadLink);
  }
  
  // Attach event listeners to download buttons
  function attachDownloadListeners() {
    var downloadButtons = document.querySelectorAll(".rainbow-button");
    downloadButtons.forEach(function (button) {
      button.addEventListener("click", handleDownloadClick);
    });
  }
  
