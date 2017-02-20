<?php

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetTitle('Order Receipt');

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -


// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', 'B', 20);

// add a page
$pdf->AddPage();

// $pdf->Write(0, 'Example of HTML tables', '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('helvetica', '', 10);

$pdf->Image('assets/img/logo-pdf.png', 15, 4, 0, 0, 'PNG', '', '', true, '150', '', false, false, 10, false, false, false);
$pdf->writeHTML("<hr>", true, false, false, false, '');
$pdf->Ln(5);

// Consumer Info
$pdf->SetFillColor(249,249,249);
$pdf->Cell(0, 0, 'Date Issued: '.$orderinfo->date_created, 0, 1, 'R', 0, '', 0);
// $pdf->Cell(0, 0, 'Market: SM SuperMarket', 0, 1, 'R', 0, '', 1);

$pdf->Ln(10);
$pdf->SetFont('helveticaB', '', 12);
$pdf->Cell(45, 0, 'Bill To:', 0, 1, 'L', 0, '', 0);

$pdf->SetFont('helvetica', '', 12);
$pdf->Cell(45, 0,$userinfo->consumer_fname.' '.$userinfo->consumer_lname, 0, 1, 'L', 0, '', 0);

$pdf->Ln(5);

$pdf->SetFont('helveticaB', '', 12);
$pdf->Cell(45, 0, 'Shipping Address:', 0, 1, 'L', 0, '', 0);

$pdf->SetFont('helvetica', '', 12);
$pdf->Cell(45, 0,$userinfo->address, 0, 1, 'L', 0, '', 0);

$pdf->Ln(5);

$pdf->SetFont('helveticaB', '', 12);
$pdf->Cell(45, 0, 'Contact: ', 0, 1, 'L', 0, '', 0);

$carlo ='caaaarlo';
$pdf->SetFont('helvetica', '', 12);
$pdf->Cell(45, 0, $userinfo->email, 0, 1, 'L', 0, '', 0);
$pdf->Cell(45, 0,$userinfo->mobilenumber, 0, 1, 'L', 0, '', 1);

$pdf->Ln(10);

// NON-BREAKING TABLE (nobr="true")
$html = '<table border="1" cellpadding="10">';
foreach ($productorder_info as $productinfo) {

      $html .= '<tr style="background-color:#365271; color:white;">
          <td width="50%"> Product </td>
          <td width="25%"> Quantity </td>
          <td width="25%"> Price </td>
      </tr>';
    $html .= '<tr>
        <td width="50%">' . $productinfo->prod_name . '</td>
        <td width="25%">' . $productinfo->order_qty . '</td>
        <td width="25%">' . $productinfo->storeprod_price . '</td>
      </tr>';
}
$html .= '</table>';

$pdf->writeHTML($html, true, false, true, false, '');

$pdf->Cell(174, 0,'Total: '. $orderinfo->order_total, 0, 1, 'R', 0, '', 0);
// -----------------------------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_048.pdf', 'I');
//============================================================+
// END OF FILE
//============================================================+
