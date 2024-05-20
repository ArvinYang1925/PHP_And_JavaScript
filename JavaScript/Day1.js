console.log("Hello");
console.log("50" + 50);

let clouNum = 3;
const sunNum = 1;

let x = 5; // 宣告變數 x 並賦值為 5
console.log(x); // 輸出 5

x = 10; // 修改變數 x 的值為 10
console.log(x); // 輸出 10

if (true) {
  let y = 20; // y 的作用域限於此區塊
  console.log(y); // 輸出 20
}

// console.log(y); // 這行代碼會引發錯誤(ReferenceError: y is not defined)，因為 y 的作用域限於區塊內

const PI = 3.14159; // 宣告常數 PI 並賦值
console.log(PI); // 輸出 3.14159

// PI = 3.14; // 這行代碼會引發錯誤，因為不能重新賦值

if (true) {
  const GRAVITY = 9.8; // GRAVITY 的作用域限於此區塊
  console.log(GRAVITY); // 輸出 9.8
}

// console.log(GRAVITY); // 這行代碼會引發錯誤(ReferenceError: GRAVITY is not defined)，因為 GRAVITY 的作用域限於區塊內
