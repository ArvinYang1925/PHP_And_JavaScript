// const axios = require('axios');

// 發送 GET 請求
axios
  .get("https://dog.ceo/api/breeds/image/random")
  .then((response) => {
    // 成功處理響應
    console.log(response.data);
    // let imgElement = document.querySelector(".mydogimg");
    // imgElement.setAttribute("src", response.data.message);
    console.log(response.status);
    console.log(response.statusText);
    console.log(response.headers);
    console.log(response.config);
  })
  .catch((error) => {
    // 處理錯誤
    console.error("Error fetching data:", error);
  });

// write a function
// send five request
// get five dog img

function getDogImage(classNum) {
  axios.get("https://dog.ceo/api/breeds/image/random").then((response) => {
    // 成功處理響應
    console.log(response.data);
    let imgElement = document.querySelector(".mydogimg" + classNum);
    imgElement.setAttribute("src", response.data.message);
  });
}

for (let index = 0; index < 5; index++) {
  getDogImage(index + 1);
}
