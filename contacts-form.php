<?php

$to = "info@pack2net.com";
$cc = "";
$bcc = "";
$subject = "Contacts Form";
$msg = "

<table style='border-collapse:collapse;width:100%;border:none;font-family:Arial,sans-serif;'>
<tbody>

<tr>
<td style='line-height:60px;text-align:center;' colspan='3'><strong>Contacts Form</strong></td>
</tr>

<tr style='line-height:40px;vertical-align:top;border-top:1px solid #000;'>
<td style='width:160px;'><strong>Name</strong></td>
<td style='width:20px;'><strong>:</strong></td>
<td style='width:calc(100% - 180px);'>".$_REQUEST['contactformname']."</td>
</tr>

<tr style='line-height:40px;vertical-align:top;border-top:1px solid #000;'>
<td style='width:160px;'><strong>Email</strong></td>
<td style='width:20px;'><strong>:</strong></td>
<td style='width:calc(100% - 180px);'>".$_REQUEST['contactformemail']."</td>
</tr>

<tr style='line-height:40px;vertical-align:top;border-top:1px solid #000;'>
<td style='width:160px;'><strong>Phone</strong></td>
<td style='width:20px;'><strong>:</strong></td>
<td style='width:calc(100% - 180px);'>".$_REQUEST['contactformphone']."</td>
</tr>

<tr style='line-height:40px;vertical-align:top;border-top:1px solid #000;'>
<td style='width:160px;'><strong>Country</strong></td>
<td style='width:20px;'><strong>:</strong></td>
<td style='width:calc(100% - 180px);'>".$_REQUEST['contactformcountry']."</td>
</tr>

<tr style='line-height:40px;vertical-align:top;border-top:1px solid #000;'>
<td style='width:160px;'><strong>Comment</strong></td>
<td style='width:20px;'><strong>:</strong></td>
<td style='width:calc(100% - 180px);'>".$_REQUEST['contactformcomment']."</td>
</tr>

</tbody>
</table>

";

$from = "From: ".$_REQUEST['contactformname']." <".$_REQUEST['contactformemail'].">";
$html = "Content-Type: text/html; charset=UTF-8";
$headers = $html."\r\n".$from."\r\n".$cc."\r\n".$bcc."\r\n";

mail($to, $subject, $msg, $headers);

?>