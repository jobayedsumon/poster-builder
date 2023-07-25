//Heading component

var headingButton = document.getElementById("headingButton");
var headingBlock = document.getElementById("headingBlock");
var headingDelete = document.getElementById("headingDelete");
var headingInput = document.getElementById("headingInput");
var headingText = document.getElementById("headingText");

headingButton.addEventListener("click", function () {
  headingButton.style.display = "none";
  headingBlock.style.display = "block";
  headingText.style.display = "block";
});

headingDelete.addEventListener("click", function () {
  headingButton.style.display = "block";
  headingBlock.style.display = "none";
  headingInput.value = "";
  headingText.innerHTML = "";
  headingText.style.display = "none";
  document.getElementById(headingAlignment).checked = false;
  document.getElementById(headingColor).checked = false;
  headingAlignmentChange("left");
  headingColorChange("black");
});

headingInput.addEventListener("keyup", function () {
  headingText.innerHTML = headingInput.value;
});

var headingAlignment = "left";
var headingColor = "black";

function headingAlignmentChange(alignment) {
  headingAlignment = alignment;
  headingText.style.textAlign = headingAlignment;
}

function headingColorChange(color) {
  headingColor = color;
  headingText.style.color = headingColor;
}

//Image component

var imageButton = document.getElementById("imageButton");
var imageBlock = document.getElementById("imageBlock");
var imageDelete = document.getElementById("imageDelete");
var imageInput = document.getElementById("imageInput");
var imageOutput = document.getElementById("imageOutput");

imageButton.addEventListener("click", function () {
  imageButton.style.display = "none";
  imageBlock.style.display = "block";
});

imageDelete.addEventListener("click", function () {
  imageButton.style.display = "block";
  imageBlock.style.display = "none";
  imageInput.value = "";
  imageOutput.src = "";
  imageOutput.style.display = "none";
});

imageInput.addEventListener("change", function () {
  if (imageInput.files && imageInput.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      imageOutput.src = e.target.result;
      imageOutput.style.display = "block";
    };

    reader.readAsDataURL(imageInput.files[0]);
  }
});

//Description component

var descriptionButton = document.getElementById("descriptionButton");
var descriptionBlock = document.getElementById("descriptionBlock");
var descriptionDelete = document.getElementById("descriptionDelete");
var descriptionInput = document.getElementById("descriptionInput");
var descriptionText = document.getElementById("descriptionText");

descriptionButton.addEventListener("click", function () {
  descriptionButton.style.display = "none";
  descriptionBlock.style.display = "block";
  descriptionText.style.display = "block";
});

descriptionDelete.addEventListener("click", function () {
  descriptionButton.style.display = "block";
  descriptionBlock.style.display = "none";
  descriptionInput.value = "";
  descriptionText.innerHTML = "";
  descriptionText.style.display = "none";
});

descriptionInput.addEventListener("keyup", function () {
  var text = descriptionInput.value.replace(/\n/g, "<br>");
  descriptionText.innerHTML = text;
});

//Download poster

var downloadButton = document.getElementById("downloadButton");

downloadButton.addEventListener("click", function () {
  var canvas = document.createElement("canvas");
  canvas.width = 800;
  canvas.height = 600;
  var ctx = canvas.getContext("2d");

  if (headingText.innerHTML != "") {
    ctx.font = "48px Arial";
    ctx.textAlign = headingAlignment;
    ctx.fillStyle = headingColor;

    if (headingAlignment == "center") {
      ctx.fillText(headingText.innerHTML, canvas.width / 2, 100);
    } else if (headingAlignment == "right") {
      ctx.fillText(headingText.innerHTML, canvas.width, 100);
    } else {
      ctx.fillText(headingText.innerHTML, 0, 100);
    }
  }

  if (imageOutput.src != "") {
    ctx.drawImage(imageOutput, 0, 120, canvas.width, 350);
  }

  if (descriptionText.innerHTML != "") {
    ctx.font = "18px Arial";
    ctx.textAlign = "left";
    ctx.fillStyle = "black";
    ctx.wrapText(descriptionText.innerHTML, 0, 500, canvas.width, 30);
  }

  var link = document.createElement("a");
  link.download = "poster.png";
  link.href = canvas.toDataURL();
  link.click();
});

//Text wrapping for multiline and break tag
CanvasRenderingContext2D.prototype.wrapText = function (
  text,
  x,
  y,
  maxWidth,
  lineHeight
) {
  var lines = text.split("<br>");

  for (var i = 0; i < lines.length; i++) {
    var words = lines[i].split(" ");
    var line = "";

    for (var n = 0; n < words.length; n++) {
      var testLine = line + words[n] + " ";
      var metrics = this.measureText(testLine);
      var testWidth = metrics.width;
      if (testWidth > maxWidth && n > 0) {
        this.fillText(line, x, y);
        line = words[n] + " ";
        y += lineHeight;
      } else {
        line = testLine;
      }
    }

    this.fillText(line, x, y);
    y += lineHeight;
  }
};
