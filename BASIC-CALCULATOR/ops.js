 document.querySelectorAll('button').forEach(btn => {
            btn.addEventListener('click', () => {
                const num1 = parseFloat(document.getElementById('num1').value);
                const num2 = parseFloat(document.getElementById('num2').value || 0);
                let result = '';

                if (btn.textContent === '+') {
                    result = num1 + num2;
                } else if (btn.textContent === '-') {
                    result = num1 - num2;
                } else if (btn.textContent === 'X') {
                    result = num1 * num2;
                } else if (btn.textContent === '/') {
                    result = num2 !== 0 ? num1 / num2 : 'Cannot divide by zero';
                } else if (btn.textContent === 'SQRT(√)') {
                    result = Math.sqrt(num1);
                } else if (btn.textContent === 'Log(base 10)') {
                    result = Math.log10(num1);
                }

                document.getElementById('result').innerText = `Result: ${result}`;
            });
        });