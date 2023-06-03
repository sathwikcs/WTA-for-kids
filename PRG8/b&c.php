<?php
header('Content-Type: text/plain');

$matrix1 = array(
    array(1, 2),
    array(4, 5)
);

$matrix2 = array(
    array(1, 2),
    array(4, 5)
);

$rowCount = count($matrix1);
$colCount = count($matrix1[0]);

echo "\nThe order of the matrix A is: " . $rowCount . "x" . $colCount;
echo "\n";
echo "The order of the matrix B is: " . count($matrix2) . "x" . count($matrix2[0]);
echo "\n";

echo "The input matrix A is:\n";
foreach ($matrix1 as $row) {
    echo implode("\t", $row) . "\n";
}

echo "The input matrix B is:\n";
foreach ($matrix2 as $row) {
    echo implode("\t", $row) . "\n";
}

echo "\nThe output Transpose of matrix A is:\n";
for ($r = 0; $r < $colCount; $r++) {
    for ($c = 0; $c < $rowCount; $c++) {
        echo $matrix1[$c][$r] . "\t";
    }
    echo "\n";
}

if ($colCount === count($matrix2) && $rowCount === count($matrix2[0])) {
    echo "\nThe sum of matrix A and B is:\n";
    for ($r = 0; $r < $rowCount; $r++) {
        for ($c = 0; $c < $colCount; $c++) {
            $val = $matrix1[$r][$c] + $matrix2[$r][$c];
            echo $val . "\t";
        }
        echo "\n";
    }
} else {
    echo "\nThe matrix addition is not possible.\n";
}

if ($colCount === count($matrix2)) {
    echo "\nThe multiplication of matrix A and B is:\n";
    for ($r = 0; $r < $rowCount; $r++) {
        for ($c = 0; $c < count($matrix2[0]); $c++) {
            $val = 0;
            for ($k = 0; $k < $colCount; $k++) {
                $val += $matrix1[$r][$k] * $matrix2[$k][$c];
            }
            echo $val . "\t";
        }
        echo "\n";
    }
} else {
    echo "\nThe matrix multiplication is not possible.\n";
}
?>
