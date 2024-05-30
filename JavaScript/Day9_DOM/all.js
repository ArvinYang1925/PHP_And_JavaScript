// getElementById
let header = document.getElementById("this_is_h1");
header.textContent = "Big Header";

// querySelector
let p = document.querySelector(".myParagraph");
p.textContent = "just lorem";

let span = document.querySelector(".myParagraph2 span");
span.style.color = "red";
span.textContent = "Little span";

// querySelectorAll
let spans = document.querySelectorAll(".myParagraph3 span");

spans.forEach(function (span) {
  span.textContent = "test";
});

// setAttribute
let someLink = document.querySelector(".someLink a");
someLink.setAttribute("href", "http://www.google.com");

function getLinkAddr() {
  let addr = someLink.getAttribute("href");
  document.querySelector(".showAddr").textContent = addr;
}

// createElement
let addSpan = document.createElement("span");
addSpan.textContent = "This is a span";
addSpan.setAttribute("class", "blue");

let subTitles = document.querySelector(".subTitle");
subTitles.appendChild(addSpan);
