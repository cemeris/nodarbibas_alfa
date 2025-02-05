<?php
// Matemātisko operāciju un lietotāju ievades apstrādes programmas sākums

require_once 'Calculator.php';
require_once 'InputHandler.php';
require_once 'Database.php';
require_once 'Logger_db.php';

$logger = new Logger();

// Pieteikuma loģika (ne iekš klases, pagaidām):
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lietotāja ievades saņemšana
    $num1 = $_POST['num1'] ?? null;
    $num2 = $_POST['num2'] ?? null;
    $operation = $_POST['operation'] ?? null;

    // Izveido objektus no klasēm
    $calculator = new Calculator();
    $inputHandler = new InputHandler();

    try {
        // Validē un sanitizē ievadītos datus
        $num1 = $inputHandler->validateInput($inputHandler->sanitizeInput($num1));
        $num2 = $inputHandler->validateInput($inputHandler->sanitizeInput($num2));

        $max_value = 100000000;
        if ($num1 > $max_value || $num2 > $max_value) {
            throw new Exception("skaitlis ir pārāk liels");
        }

        // Aprēķina rezultātu atkarībā no izvēlētās operācijas
        switch ($operation) {
            case 'add':
                $result = $calculator->add($num1, $num2);
                break;
            case 'subtract':
                $result = $calculator->subtract($num1, $num2);
                break;
            case 'multiply':
                $result = $calculator->multiply($num1, $num2);
                break;
            case 'divide':
                $result = $calculator->divide($num1, $num2);
                break;
            default:
                throw new Exception("Nederīga operācija izvēlēta!");
        }

        $logger->log("Matemātiskā operācija bija $operation ar sākotnējiem skaitļiem $num1, $num2");

        // Parāda rezultātu
        echo "<pre> -&gt; \n Rezultāts: " . number_format($result, 2) . "</pre>";
    } catch (Exception $e) {
        // Kļūdu apstrāde
        echo "Kļūda: " . $e->getMessage();

        $logger->log("Kļūda: " . $e->getMessage());
    }
} else {
    // Ja nav POST pieprasījuma, parādīt formu
    echo <<<HTML
    <form method="POST">
        <label for="num1">Pirmais skaitlis:</label>
        <input type="text" name="num1" id="num1" required>
        <label for="num2">Otrais skaitlis:</label>
        <input type="text" name="num2" id="num2" required>
        <label for="operation">Operācija:</label>
        <select name="operation" id="operation">
            <option value="add">Saskaitīt</option>
            <option value="subtract">Atņemt</option>
            <option value="multiply">Reizināt</option>
            <option value="divide">Dalīt</option>
        </select>
        <button type="submit">Aprēķināt</button>
    </form>
    HTML;

    $history = $logger->getHistory();

    echo "<ul>";
    for ($i = 0; $i < count($history); $i++) {
        echo "<li>" .
        $history[$i]['message']
        . "</li>";
    }

    echo "</ul>";
}

