在 JavaScript 中，`undefined` 和 `null` 都表示“無值”或“缺失的值”，但它們在使用和意圖上有重要的區別。理解它們的區別對於編寫健壯的 JavaScript 代碼非常重要。

## `undefined`

### 定義

- `undefined` 是一個全局變數，它表示變數已被宣告，但尚未賦值。
- 如果一個函數沒有明確返回值，則它會返回 `undefined`。

### 產生 `undefined` 的情況

1. **變數宣告但未賦值**

   ```javascript
   let x;
   console.log(x); // 輸出: undefined
   ```

2. **對象屬性不存在**

   ```javascript
   let obj = {};
   console.log(obj.nonExistentProperty); // 輸出: undefined
   ```

3. **函數沒有返回值**

   ```javascript
   function doSomething() {}
   console.log(doSomething()); // 輸出: undefined
   ```

4. **數組元素不存在**

   ```javascript
   let arr = [1, 2, 3];
   console.log(arr[5]); // 輸出: undefined
   ```

### 檢查 `undefined`

可以使用嚴格相等運算符 (`===`) 來檢查 `undefined`。

```javascript
let x;
if (x === undefined) {
  console.log("x is undefined");
}
```

## `null`

### 定義

- `null` 是一個表示“空”或“無”的值，通常用來明確地表示“沒有值”或“空的值”。
- 它是 JavaScript 的原始值之一（primitive value）。

### 產生 `null` 的情況

1. **手動賦值為 `null`**

   ```javascript
   let y = null;
   console.log(y); // 輸出: null
   ```

2. **表示空對象**

   ```javascript
   let obj = {
     name: "John",
     age: null, // 明確表示 age 是空的
   };
   ```

### 檢查 `null`

可以使用嚴格相等運算符 (`===`) 來檢查 `null`。

```javascript
let y = null;
if (y === null) {
  console.log("y is null");
}
```

## `undefined` 與 `null` 的區別

1. **意圖**

   - `undefined` 表示變數已宣告但尚未賦值，或者某些操作沒有預期的結果。
   - `null` 用於明確表示“無值”或“空”。

2. **類型**

   - `undefined` 是一個具有自身類型的值：`undefined`。
   - `null` 是一個具有自身類型的值：`object`。這是一個被認為是設計錯誤的歷史遺留問題。

   ```javascript
   console.log(typeof undefined); // "undefined"
   console.log(typeof null); // "object"
   ```

3. **比較**

   - `undefined` 和 `null` 在非嚴格相等（`==`）比較中被認為是相等的，但在嚴格相等（`===`）比較中是不相等的。

   ```javascript
   console.log(undefined == null); // true
   console.log(undefined === null); // false
   ```

## 總結

- **`undefined`**：表示變數已被宣告但尚未賦值，或者操作沒有預期的結果。是 JavaScript 中的一個原始值。
- **`null`**：表示明確的“無值”或“空”。是 JavaScript 中的一個原始值，類型是 `object`。

理解這兩者的區別有助於避免編程中的常見錯誤，並能更清晰地表達變數的狀態和意圖。
