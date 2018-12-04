<html><head>
<title>Report Table</title></head>
<body>
	<h2><center>Resi </center></h2>
	<table border="1">
		<tr>
			<td colspan="6">HEADER</td>
		</tr>
		<tr>
			<td colspan="2">No Resi</td>
			<td colspan="4">: <?php echo $data->noResi ?></td>
		</tr>
		<tr>
			<td colspan="3">Pengirim</td>
			<td colspan="3">Penerima</td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><?php echo $data->pengirim ?></td>
			<td>Nama</td>
			<td>:</td>
			<td><?php echo $data->penerima ?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><?php echo $data->alamatPengirim ?></td>
			<td>Alamat</td>
			<td>:</td>
			<td><?php echo $data->alamatPenerima ?></td>
		</tr>
		<tr>
			<td>Telepon</td>
			<td>:</td>
			<td><?php echo $data->teleponPengirim ?></td>
			<td>Telepon</td>
			<td>:</td>
			<td><?php echo $data->teleponPenerima ?></td>
		</tr>
		<tr>
			<td colspan="6">Barang</td>
		</tr>
		<tr>
			<td>Nama Barang</td>
			<td>:</td>
			<td><?php echo $data->jenisBarang ?></td>
			<td>Berat Barang</td>
			<td>:</td>
			<td><?php echo $data->berat ?></td>
		</tr>
	</table>
</body></html>