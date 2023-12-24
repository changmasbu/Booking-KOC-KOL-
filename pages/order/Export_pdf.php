<?php
$rootDir = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once($rootDir."/include/init.php");
require($rootDir.'/lib/pdf/tfpdf.php');
$user_id    = $data_user['id'];
$result = [];
$query = $db->fetch_assoc("SELECT tbl_order.*, tbl_user.fullname  FROM tbl_order, tbl_user where tbl_order.user_id = tbl_user.id AND tbl_order.user_id ='$user_id' ORDER BY id desc", 0);
foreach($query as $row){
    $name = $row['fullname'];
    if($row['order_by'] == 1 && $row['name_by'] != '') $name = $row['name_by'];
    $note = $row['note'];
    if($row['note'] == '') $note = "Không";
	array_push($result, (object)[
        'id' => $row['id'],
        'fullname' => $name,
        'name' => $row['name'],
		'note' => $note,
]);
}

$header = array( "No_", "Họ & Tên", "Tên món", "Ghi chú");
$line_height = 10;
$width = 110;



$pdf = new tFPDF();
$pdf->AddPage("L");

$pdf->AddFont('Times New Roman','','times.ttf',true);
$pdf->SetFont('Times New Roman','',14);

foreach($header as $i => $heading) {
	$height = (ceil(($pdf->GetStringWidth($heading) / $width)) * $line_height);
	switch ($i) {
		case '0':
			$pdf->Cell(20,$height,$heading,1);
			break;
		case '1':
			$pdf->Cell(55,$height,$heading,1);
			break;
		case '2':
			$pdf->Cell(90,$height,$heading,1);
			break;
		
		default:
			$pdf->Cell($width,$height,$heading,1);
			break;
	}

}

// $i = 0;
foreach($result as $row) {
	$pdf->Ln();
	$i= 0;
	foreach($row as $column){
		switch ($i) {
			case '0':
				$pdf->Cell(20,$height,$column,1);
				break;
			case '1':
				$pdf->Cell(55,$height,$column,1);
				break;
			case '2':
				$pdf->Cell(90,$height,$column,1);
				break;
			
			default:
				$pdf->Cell($width,$height,$column,1);
				break;
		}
		
		$i++;
		
	}
		
}
$pdf->Output();