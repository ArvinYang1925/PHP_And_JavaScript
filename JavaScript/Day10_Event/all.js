// alert("dd");

let btn = document.querySelector(".btn");

btn.onclick = function (e) {
  //   console.log(e.layerX);
};

btn.addEventListener("click", function () {
  alert("First handler");
});

console.log(btn.onclick);

// 事件冒泡
let box = document.querySelector(".box");

box.addEventListener("click", function (e) {
  e.stopPropagation();
  alert("click box");
});

// let body = document.querySelector(".mybody");

// body.addEventListener("click", function () {
//   alert("click body");
// });

document.getElementById("myForm").addEventListener("submit", function (event) {
  event.preventDefault(); // 阻止表單提交的默認行為
  console.log("Form submission prevented");
});
