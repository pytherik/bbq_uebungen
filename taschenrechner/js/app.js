const key     = document.querySelectorAll('.key');
const display = document.getElementById('display')
const operators = ['+', '-', '/', 'X', '=', '^'];
let nums = [];
let operator = '';
let num = '';
let output = '';
let len = 0;

display.innerHTML = 0;

function calculate(nums, operator) {
  let a = parseFloat(nums[0]);
  let b = parseFloat(nums[1]);
  let result = 0;
  switch (operator) {
    case '+':
      result = a + b;
      break;
    case '-':
      result = a - b;
      break;
    case 'X':
      result = a * b;
      break;
    case '/':
      result = a / b;
      break;
    case '^':
      result = a ** b;
      break;
    }
  return result;
}

for (let i = 0; i < key.length; i++) {
  key[i].addEventListener('click', () => {
    input = key[i].innerHTML.trim();
    if (!operators.includes(input)) {
      num += input;
    } else {
      console.log('before push: ', nums)
      if (!num == '') {
        nums.push(num);
      }
      if (nums.length > 1) {
        output = calculate(nums, operator);
        nums = [output];
      }
      operator = input;
      num = '';
    }
    if (input == 'c') {
      nums = [];
      input = '';
      output = '';
      num = '';
    }
    if (input == '=') {
      nums = [output];
      input = '';
    }
    output += input;
    display.innerHTML = output;
    }
  )
}
  
