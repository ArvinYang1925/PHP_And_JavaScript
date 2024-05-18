# PHP 資料型別 (Data Types)

在 PHP 中，資料型別是變數存儲和操作數據的基本方式。以下是 PHP 中的主要資料型別：

## 基本資料型別

1. **整數 (Integer)**

   - 用於存儲整數值。整數可以是正數或負數。

   ```php
   $intVar = 42;
   ```

2. **浮點數 (Float)**

   - 用於存儲帶有小數點的數值（浮點數）。

   ```php
   $floatVar = 3.14;
   ```

3. **字串 (String)**

   - 用於存儲字元序列（文本）。

   ```php
   $stringVar = "Hello, world!";
   ```

4. **布林值 (Boolean)**
   - 用於存儲布林值，只有兩個可能的值：`true` 或 `false`。
   ```php
   $boolVar = true;
   ```

## 複合資料型別

1. **陣列 (Array)**

   - 用於存儲一組值，可以是數值索引數組或關聯數組（鍵值對）。

   ```php
   // 數值索引數組
   $numericArray = array(1, 2, 3);

   // 關聯數組
   $associativeArray = array("name" => "John", "age" => 30);
   ```

2. **物件 (Object)**

   - 用於存儲物件。物件是類的實例，包含屬性和方法。

   ```php
   class Person {
       public $name;
       public $age;

       public function __construct($name, $age) {
           $this->name = $name;
           $this->age = $age;
       }

       public function greet() {
           return "Hello, my name is " . $this->name;
       }
   }

   $person = new Person("John", 30);
   ```

## 特殊資料型別

1. **NULL**

   - 用於表示變數沒有值。變數被設定為 `NULL` 意味著它沒有任何數據。

   ```php
   $nullVar = NULL;
   ```

2. **資源 (Resource)**
   - 用於存儲外部資源的引用，例如資料庫連接、文件句柄等。資源型別通常由特殊的函數返回，並不直接操控資源本身。
   ```php
   $fileHandle = fopen("example.txt", "r");
   ```

## 資料型別操作

PHP 提供了一些內建函數來檢查和轉換資料型別：

- **檢查資料型別**

  ```php
  is_int($var);    // 是否是整數
  is_float($var);  // 是否是浮點數
  is_string($var); // 是否是字串
  is_bool($var);   // 是否是布林值
  is_array($var);  // 是否是陣列
  is_object($var); // 是否是物件
  is_null($var);   // 是否是 NULL
  is_resource($var); // 是否是資源
  ```

- **強制轉換資料型別**
  ```php
  $var = (int)$var;    // 轉換為整數
  $var = (float)$var;  // 轉換為浮點數
  $var = (string)$var; // 轉換為字串
  $var = (bool)$var;   // 轉換為布林值
  $var = (array)$var;  // 轉換為陣列
  $var = (object)$var; // 轉換為物件
  ```

## 結論

理解 PHP 的資料型別以及如何檢查和轉換它們，是撰寫高效 PHP 程式碼的基礎。這不僅可以幫助你避免類型錯誤，還可以提升程式的可讀性和可維護性。

---
