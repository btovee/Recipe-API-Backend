<?php


namespace App\Services\Csv;


/**
 * Class Csv
 * @package App\Services\Csv
 */
class Csv
{

    /**
     * Reads data from CSV files.
     *
     * @param string $filePath The file path
     * @return array The data from CSV
     */
    public function readFile(string $filePath): array {
        $csv = array_map('str_getcsv', file($filePath));
        array_walk($csv, function(&$a) use ($csv) {
            $a = array_combine($csv[0], $a);
        });
        array_shift($csv);
        return $csv;
    }

    /**
     * Writes data from CSV files.
     *
     * @param array $data
     * @param string $filePath The File path
     */
    public function writeFile(array $data, string $filePath): void {
        $fp = fopen($filePath, 'w');
        foreach ($data as $fields) {
            fputcsv($fp, $fields);
        }
        fclose($fp);
    }

}
