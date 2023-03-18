<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;
use Carbon\Carbon;

class myPhpWordController extends Controller
{
    public function generateDocument(Request $request)
{
// Get the data to insert into the template



$custName = $request->input('custName');
$custCompany = $request->input('custCompany');
$custAddress = $request->input('custAddress');
$custPhone = $request->input('custPhone');

$reciverName = $request->input('reciverName');
$dstCompany = $request->input('dstCompany');
$dstAddress = $request->input('dstAddress');
$reciverPhone = $request->input('reciverPhone');

$date = Carbon::now()->toDateTimeString();
$invcNumber = Carbon::now()->timestamp;
$tax = 11;
$qty1 = 2;
$qty2 = 1;
$price1 = 1000000;
$price2 = 1500000;
$total1 = $qty1 * $price1;
$total2 = $qty2 * $price2;
$subtotal = $total1 + $total2;
$totalTax = ($tax / 100) * $subtotal;
$handlingFee = 30000;
$balanceDue = $subtotal + $totalTax + $handlingFee;




// Load the template file
$template = new TemplateProcessor(storage_path('app/my_template.docx'));

// Replace the placeholders in the template with the data
$template->setValue('custName', $custName);
var_dump($template->setValue('custName', "sds"));
$template->setValue('firstname', 'Sohail');

$template->setValue('custCompany', $custCompany);
$template->setValue('custAddress', $custAddress);
$template->setValue('custPhone', $custPhone);

$template->setValue('reciverName', $reciverName);
$template->setValue('dstCompany', $dstCompany);
$template->setValue('dstAddress', $dstAddress);
$template->setValue('reciverPhone', $reciverPhone);

$template->setValue('date', $date);
$template->setValue('invcNumber', $invcNumber);
$template->setValue('item1', "product 1");
$template->setValue('item2', "product 2");
$template->setValue('qty1', $qty1);
$template->setValue('qty2', $qty2);
$template->setValue('price1', $price1);
$template->setValue('price2', $price2);
$template->setValue('total1', $total1);
$template->setValue('total2', $total2);
$template->setValue('subtotal', $subtotal);
$template->setValue('tax', $tax);
$template->setValue('totalTax', $totalTax);
$template->setValue('handlingFee', $handlingFee);
$template->setValue('balanceDue', $balanceDue);



// Generate a new Word docx file with the replaced data
$filename = 'my_document.docx';
$template->saveAs(storage_path('app/' . $filename));

// Download the new file
return response()->download(storage_path('app/' . $filename))->deleteFileAfterSend();
}
}
