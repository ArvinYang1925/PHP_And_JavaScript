const btnSignUp = document.querySelector(".btnSignUp");
const btnLoginIn = document.querySelector(".btnLoginIn");
const account = document.querySelector(".account");
const password = document.querySelector(".password");

btnSignUp.addEventListener("click", function () {
  console.log(account.value, password.value);
  signUp(account.value, password.value);
});

btnLoginIn.addEventListener("click", function () {
  console.log(account.value, password.value);
  loginIn(account.value, password.value);
});

// 定義要發送的數據
const userData = {
  email: "lovef2e@hexschool.com",
  password: "12345678",
};

function signUp(account, password) {
  let userData = {
    email: account,
    password: password,
  };
  // 發送 POST 請求 新增一個帳號
  axios
    .post("https://escape-room.hexschool.io/api/user/signup", userData)
    .then((response) => {
      // 處理成功響應
      console.log("User registered:", response.data);
    })
    .catch((error) => {
      // 處理錯誤響應
      console.error(
        "There was an error registering the user:",
        error.response.data
      );
    });
}

function loginIn(account, password) {
  let userData = {
    email: account,
    password: password,
  };
  // 發送 POST 請求 登入一個已存在的帳號
  axios
    .post("https://escape-room.hexschool.io/api/user/signin", userData)
    .then((response) => {
      // 處理成功響應
      console.log("User Login:", response.data);
    })
    .catch((error) => {
      // 處理錯誤響應
      console.error("There was an error login the user:", error.response.data);
    });
}
