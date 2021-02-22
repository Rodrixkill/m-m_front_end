<?php

require 'mym/polygon/vendors/phpoffice_phpspreadsheet/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
echo var_dump($_FILES["file"]);
$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
$spreadsheet = $reader->load($_FILES["file"]);
echo var_dump($spreadsheet);

?>