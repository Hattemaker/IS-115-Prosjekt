<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<style type="text/css">
	.tg  {
		border-collapse: collapse;
		border-spacing: 0;
	}
	.tg td, th {
		border-color: black;
		border-style: solid;
		border-width: 1px;
		font-family: Arial, sans-serif;
		font-size: 14px;
  		padding:10px 5px;
	}
	.tg .tg-0lax {
		text-align: left;
		vertical-align: top
	}
</style>
<table class="tg" style="undefined;table-layout: fixed; width: 304px">
<colgroup>
<col style="width: 255px">
<col style="width: 255px">
</colgroup>
<?php 
	$mnum = 12345;
	$fnavn = "Magnus";
	$enavn = "Neergaard";
	$add = "5th ave.";
	$mob = "22225555";
	$epost = "formann@fallskjerm.net";
	$fdate = "09.08.95";
	$sx = "Mann";
	$inter = "Fallskjerm";
	$kurs = "ingen";
	$msince = "01.09.20";
	$kstate = "Betalt";
?>
<thead>
  <tr>
    <th class="tg-0lax">Medlemsnummer</th>
    <th class="tg-0lax">
    	<?php echo $mnum; ?>
    </th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-0lax">Fornavn</td>
    <td class="tg-0lax">
    	<?php echo $fnavn; ?>
    </td>
  </tr>
  <tr>
    <td class="tg-0lax">Etternavn</td>
    <td class="tg-0lax">
    	<?php echo $enavn; ?>
    </td>
  </tr>
  <tr>
    <td class="tg-0lax">Adresse</td>
    <td class="tg-0lax">
    	<?php echo $add; ?>
    </td>
  </tr>
  <tr>
    <td class="tg-0lax">Mobilnummer</td>
    <td class="tg-0lax">
    	<?php echo $mob; ?>
    </td>
  </tr>
  <tr>
    <td class="tg-0lax">E-post</td>
    <td class="tg-0lax">
    	<?php echo $epost; ?>
    </td>
  </tr>
  <tr>
    <td class="tg-0lax">Fødselsdato</td>
    <td class="tg-0lax">
    	<?php echo $fdate; ?>
    </td>
  </tr>
  <tr>
    <td class="tg-0lax">Kjønn</td>
    <td class="tg-0lax">
    	<?php echo $sx; ?>
    </td>
  </tr>
  <tr>
    <td class="tg-0lax">Interesser</td>
    <td class="tg-0lax">
    	<?php echo $inter; ?>
    </td>
  </tr>
  <tr>
    <td class="tg-0lax">Kursaktivitet</td>
    <td class="tg-0lax">
    	<?php echo $kurs; ?>
    </td>
  </tr>
  <tr>
    <td class="tg-0lax">Medlem Siden (dato)</td>
    <td class="tg-0lax">
    	<?php echo $msince; ?>
    </td>
  </tr>
  <tr>
    <td class="tg-0lax">Kontigentstatus</td>
    <td class="tg-0lax">
    	<?php echo $kstate; ?>
    </td>
  </tr>
</tbody>
</table>
</body>
</html>