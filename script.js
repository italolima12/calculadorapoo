let display = document.getElementById('display');
let num1 = '';
let operation = '';
let num2 = '';

document.querySelectorAll('.btn').forEach(button => {
    button.addEventListener('click', function() {
        let value = this.textContent;
        if (this.classList.contains('number') || value === '.') {
            if (operation === '') {
                num1 += value;
                display.value = num1;
            } else {
                num2 += value;
                display.value = num1 + operation + num2;
            }
        } else if (this.classList.contains('operation')) {
            if (num1 !== '' && operation === '') {
                operation = value;
                display.value = num1 + operation;
            }
        } else if (value === '=') {
            if (num1 !== '' && operation !== '' && num2 !== '') {
                document.getElementById('num1').value = num1;
                document.getElementById('operation').value = operation;
                document.getElementById('num2').value = num2;
                document.querySelector('form').submit();
            }
        } else if (value === 'C') {
            num1 = '';
            operation = '';
            num2 = '';
            display.value = '';
        }
    });
});