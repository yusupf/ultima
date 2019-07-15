$(document).ready(function(){
    var video = document.getElementById('scan');

    // Get access to the camera
    if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
        navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
            // video.src = window.URL.createObjectURL(stream);
            video.srcObject = stream;
            video.play();
        });
    }
    else if(navigator.getUserMedia) { // Standard
        navigator.getUserMedia({ video: true }, function(stream) {
            video.src = stream;
            video.play();
        }, errBack);
    } else if(navigator.webkitGetUserMedia) { // WebKit-prefixed
        navigator.webkitGetUserMedia({ video: true }, function(stream){
            video.src = window.webkitURL.createObjectURL(stream);
            video.play();
        }, errBack);
    } else if(navigator.mozGetUserMedia) { // Mozilla-prefixed
        navigator.mozGetUserMedia({ video: true }, function(stream){
            video.srcObject = stream;
            video.play();
        }, errBack);
    }

    // Elements for taking the snapshot
    var canvasWrapper = document.getElementById('scan-canvas-wrapper');
    var canvas = document.getElementById('scan-canvas');
    var context = canvas.getContext('2d');
    var cameraBtn = document.getElementById("camera-btn");
    var retakeBtn = document.getElementById("retake-btn");
    var uploadBtn = document.getElementById("upload-btn");
    var fileBtn = document.getElementById('file-btn');

    // Trigger photo take
    cameraBtn.addEventListener("click", function(stream) {
        context.drawImage(video, 0, 0, canvas.width, canvas.height);
        showImgCanvas();

        document.getElementById('retake-btn').style.display = "block";
    });

    document.getElementById('browse-img').addEventListener("change", readImage, false);

    retakeBtn.addEventListener("click", function() {
        uploadBtn.style.display = "none";
        canvasWrapper.style.display = "none";
        video.style.display = "block";
        cameraBtn.style.display = "block";
        fileBtn.style.display = "block";
    });

    uploadBtn.addEventListener("click", function() {
        // CONVERT CANVAS IMAGE TO IMG URL
        document.getElementById('input-img').value = canvas.toDataURL();
    });

    function readImage(){
        if (this.files && this.files[0]) {
            var FR= new FileReader();
            FR.onload = function(e) {
               var img = new Image();
               img.addEventListener("load", function() {
                 context.drawImage(img, 0, 0, canvas.width, canvas.height);
               });
               img.src = e.target.result;
            };       
            FR.readAsDataURL( this.files[0] );
            showImgCanvas();
        }
    }

    function showImgCanvas(){
        uploadBtn.style.display = "block";
        canvasWrapper.style.display = "block";
        video.style.display = "none";
        cameraBtn.style.display = "none";
        fileBtn.style.display = "none";
    }
}); 




