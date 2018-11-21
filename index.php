<?php

require("Spreadsheet_Excel_Reader.php"); // include thư viện
$file="demo.xls"; // file excel cần load, định dạng xls
$connection = new Spreadsheet_Excel_Reader();
$connection->setOutputEncoding("UTF-8");
$connection->read($file);
// Nếu muốn đọc Đọc tất cả các sheets
$sheets = $connection->sheets;

// Hoặc đọc sheets đầu tiên
$cells = $connection->sheets[0]["cells"]; 
// Trả về mảng tất cả các dòng có trong file
echo '<pre>';
print_r($cells);
echo '</pre>';

// Nếu muốn lấy thông tin từng dòng có thể sở dụng for, foreach..
foreach($cells as $cell){
	// tròng từng cell lại có mảng gồm các ô
	/*
		Array
        (
            [1] => Fee Component
            [3] => Gross
            [5] => Discount
            [6] => Total
        )
	*/

        // có thể sử dụng echo $cell[1],$cell[2]...
}

?>