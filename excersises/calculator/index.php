<?php
// Matemātisko operāciju un lietotāju ievades apstrādes programmas sākums

// Pirmā klase: Matemātiskās operācijas
class Calculator
{
    // Saskaita divus skaitļus
    public function add($num1, $num2)
    {
        return $num1 + $num2;
    }

    // Atņem vienu skaitli no otra
    public function subtract($num1, $num2)
    {
        return $num1 - $num2;
    }

    // Reizina divus skaitļus
    public function multiply($num1, $num2)
    {
        return $num1 * $num2;
    }

    // Dalījums ar pārbaudi, vai otrais skaitlis nav nulle
    public function divide($num1, $num2)
    {
        if ($num2 == 0) {
            throw new Exception("Dalīšana ar nulli nav atļauta!");
        }
        return $num1 / $num2;
    }
}

// Otrā klase: Lietotāja ievades apstrāde
class InputHandler
{
    // Validē ievadītos datus
    public function validateInput($input)
    {
        if (!is_numeric($input)) {
            throw new Exception("Ievadītajai vērtībai jābūt skaitlim!");
        }
        return (float)$input;
    }

    // Sanitizē ievadi
    public function sanitizeInput($input)
    {
        return htmlspecialchars(strip_tags($input));
    }
}

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

        // Parāda rezultātu
        echo "Rezultāts: " . number_format($result, 2);
    } catch (Exception $e) {
        // Kļūdu apstrāde
        echo "Kļūda: " . $e->getMessage();
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
}
?>
