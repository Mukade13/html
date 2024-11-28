// Добавить значение в поле ввода
function appendValue(value) {
    document.getElementById("result").value += value;
}

// Очистить поле ввода
function clearResult() {
    document.getElementById("result").value = "";
}

// Выполнить расчет
function calculate() {
    try {
        const input = document.getElementById("result").value;
        const result = eval(input); // Выполняем расчет
        document.getElementById("result").value = result;
    } catch (error) {
        alert("Invalid expression!");
    }
}
