<?php
$income = 0;
$expenses = 0;
$categories = [];

if (!file_exists("data.txt")) {
    file_put_contents("data.txt", "0\n0\n0\n0\n0\n0");
}

$data = file("data.txt", FILE_IGNORE_NEW_LINES);
$income = floatval($data[0]);
$expenses = floatval($data[1]);
$categories = array_slice($data, 2, 3);

while (true) {
    echo "\nMenu:\n";
    echo "1. Add Income\n";
    echo "2. Add Expense\n";
    echo "3. Show Balance\n";
    echo "4. Save Data and Exit\n";

    $choice = readline("Enter your choice (1/2/3/4): ");

    switch ($choice) {
        case 1:
            echo "\n";
            $amount = readline("Enter income amount: ");
            echo "\n";
            $category = readline("Enter category (1 for Salary/2 for Business/3 for Outsourcing): ");
            $categoryIndex = array_search($category, ["1", "2", "3"]);
            if ($categoryIndex !== false) {
                $income += $amount;
                echo "Income added: $amount\n";
                $categories[$categoryIndex] += $amount;
            } else {
                echo "Invalid category. Please select a valid category.\n";
            }
            break;

        case 2:
            echo "\n";
            $amount = floatval(readline("Enter expense amount: "));
            echo "\n";
            $category = readline("Enter category (1 for Food/2 for Rent/3 for Travel): ");
            $categoryIndex = array_search($category, ["1", "2", "3"]);
            if ($categoryIndex !== false) {
                $expenses += $amount;
                echo "Expense added: $amount\n";
                $categories[$categoryIndex + 3] += $amount;
            } else {
                echo "Invalid category. Please select a valid category.\n";
            }
            break;

        case 3:
            echo "3\n\nIncome: $income\n";
            echo "Expenses: $expenses\n";
            echo "Balance: " . ($income - $expenses) . "\n";
            break;

        case 4:
            $dataToWrite = "$income\n$expenses\n" . implode("\n", $categories);
            file_put_contents("data.txt", $dataToWrite);
            exit("Saving Data and Exiting program.\n");

        default:
            echo "Invalid choice. Please select a valid option.\n";
    }
}
?>
