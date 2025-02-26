class Handler
{
  handleCalculatorSubmit (ev) {
    ev.preventDefault();
  
    let n_input = form.querySelector('[name=n]');
    let m_input = form.querySelector('[name=m]');
    let operator_input = form.querySelector('[name=o]');
  
    let n = Number(n_input.value);
    let m = Number(m_input.value);
    let operator = operator_input.value;
  
    let result = 'Not valid operation';
  
    if (operator === "+") {
      result = n + m;
    }
    else if (operator === "-") {
      result = n - m;
    }
    else if (operator === "/") {
      result = n / m;
    }
    else if (operator === "*") {
      result = n * m;
    }
  
    let output = document.querySelector('.output');
    output.textContent = result;
  }
  
}