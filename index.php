<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://farmasi.mimoapps.xyz/mimoqss2auyqD1EAlkgZCOhiffSsFl6QqAEIGtM");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
$response = curl_exec($curl);
curl_close($curl);
$hasil = json_decode($response, true);
?>

<html>
	<?php
		require_once('./assets/requires/config.php');
		require_once('./assets/requires/header1.php');
	?>
	<div class="container">
		<div id="jdlaccr" style="font-size:36px;color:brown;">UTS Semester 2 Humam</div>
	</div>
	<body>
		<h1>Data Barang</h1>
		<table border="2" style="width: 100%">
			<tr>
				<th>Kode Barang</th>
				<th>Nama Barang</th>
				<th>Group Barang</th>
				<th>Harga Jual</th>
				<th>Quantity</th>
			</tr>
			<?php foreach($hasil as $barang) : ?>
				<?php if (str_starts_with($barang['g_code'],"B")):TRUE ?>
					<tr>
						<td><?= $barang['i_code'] ?></td>
						<td><?= $barang['i_name'] ?></td>
						<td><?= $barang['g_code'] ?></td>
						<td><?= $barang['i_sell'] ?></td>
						<td><?= $barang['i_qty'] ?></td>
					</tr>
				<?php else : FALSE ?>
			<?php endforeach ?>	
		</table>
	</body>
</html>