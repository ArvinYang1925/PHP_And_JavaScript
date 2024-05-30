DOM，全稱為 Document Object Model，是一個提供 HTML 和 XML 文件的結構化表示的方法。它允許程式語言（如 JavaScript）對文件的結構、樣式和內容進行存取和操作。簡單來說，DOM 是瀏覽器中用來表示網頁的模型，使開發者可以動態地操控網頁的內容和結構。

### DOM 的結構

DOM 將整個 HTML 文件表示為一棵樹形結構，每個節點代表文件的一部分：

1. **文檔節點（Document Node）**：根節點，表示整個文檔。
2. **元素節點（Element Nodes）**：表示 HTML 標籤，如 `<div>`、`<p>` 等。
3. **屬性節點（Attribute Nodes）**：表示 HTML 標籤的屬性，如 `id`、`class` 等。
4. **文本節點（Text Nodes）**：表示標籤內的文本內容。

### 操作 DOM

使用 JavaScript，開發者可以動態地操控 DOM 來改變網頁的內容、結構和樣式。以下是一些常見的 DOM 操作：

#### 1. 獲取元素

可以通過多種方法來獲取 DOM 元素：

```javascript
// 通過 ID 獲取元素
let elementById = document.getElementById("myId");

// 通過類名獲取元素
let elementsByClassName = document.getElementsByClassName("myClass");

// 通過標籤名獲取元素
let elementsByTagName = document.getElementsByTagName("div");

// 通過選擇器獲取元素
let elementByQuerySelector = document.querySelector(".myClass");
let elementsByQuerySelectorAll = document.querySelectorAll("div");
```

#### 2. 修改元素內容

可以使用 `innerHTML` 或 `textContent` 來改變元素的內容：

```javascript
let element = document.getElementById("myId");
element.innerHTML = "<strong>新內容</strong>";
element.textContent = "新文本內容";
```

#### 3. 修改元素屬性

可以使用 `setAttribute` 方法或直接修改屬性：

```javascript
let element = document.getElementById("myId");
element.setAttribute("class", "newClass");
element.id = "newId";
```

#### 4. 插入和移除元素

可以使用 `appendChild`、`insertBefore`、`removeChild` 等方法來操作元素：

```javascript
// 插入新元素
let newElement = document.createElement("div");
newElement.textContent = "這是一個新元素";
document.body.appendChild(newElement);

// 在某元素前插入新元素
let referenceElement = document.getElementById("myId");
document.body.insertBefore(newElement, referenceElement);

// 移除元素
document.body.removeChild(referenceElement);
```

### 範例

以下是一個簡單的範例，展示如何使用 JavaScript 操作 DOM：

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DOM Example</title>
  </head>
  <body>
    <div id="container">
      <p id="first">First paragraph</p>
      <p id="second">Second paragraph</p>
    </div>

    <script>
      // 創建新元素
      let newParagraph = document.createElement("p");
      newParagraph.textContent = "New paragraph";

      // 獲取父容器和參考節點
      let container = document.getElementById("container");
      let secondParagraph = document.getElementById("second");

      // 插入新元素到參考節點之前
      container.insertBefore(newParagraph, secondParagraph);

      // 修改第一個段落的文本內容
      let firstParagraph = document.getElementById("first");
      firstParagraph.textContent = "Updated first paragraph";
    </script>
  </body>
</html>
```

### 總結

DOM 是一個讓開發者可以動態操作網頁內容和結構的模型。通過 DOM，開發者可以使用 JavaScript 獲取、修改、插入和移除網頁中的元素，使網頁更加動態和互動。理解和掌握 DOM 是前端開發的重要基礎之一。
