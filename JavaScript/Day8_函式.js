let count = 0;

function test() {
  count++;
}

test();

console.log(count);

function exampleVar() {
  console.log(x); // undefined，因為變數提升
  let x = 10;
  console.log(x); // 10
}

exampleVar();
