<?php
echo "- Voer een getal in" . PHP_EOL;
$aantal = readline("- ");
$totaal = 1;
if (is_numeric($aantal)) {
    for ($tell = 1; $tell <= $aantal; $tell++) 
    { 
        $totaal = $totaal * $tell;
       
    }
}
echo "- " . ($totaal);