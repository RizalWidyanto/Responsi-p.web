<!DOCTYPE html>
<html>
<head>
	<title>TUGAS AKHIR PWEB</title>
<style>
	*{
		box-sizing: border-box;
	}
	body{
		font-family: calibri;
		padding: 10px;
		background : #ffffff;
		background-image: url("bg.jpg");
	}

	.header{
		padding: 30px;
		text-align: center;
		background: white;
	}

	.header h1{
		font-size: 50px;
	}

	.topnav{
		overflow: hidden;
		background-color: #333; 
	}

	.topnav a{
		float: left;
		display: block;
		color: #f3f3f3;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}

	.topnav a:hover{
		background-color: #ddd;
		color: black;
	}

	.leftcolumn{
		float: left;
		width: 25%;
		background-color: #f2f2f2;
		padding-left: 20px
		font-size : 12%;
		text-align: justify;
	}

	.centercolumn{
		float: left;
		width: 40%;
		background-color: #f1f1f1;
		padding-left: 10px
	}

	.rightcolumn{
		float: left;
		width: 30%;
		background-color: #f1f1f1;
		padding-left: 20px
	}

	.fakeimg{
		background-color: #aaa;
		width: 75%;
	}

	.card{
		background-color: white;
		padding: 20px;
		margin-top: 20px;
	}

	.row:after {
		content: "";
		display: table;
		clear: both;
	}

	.footer{
		padding: 20px;
		text-align: center;
		background-color: #ddd;
		margin-top: 20px;
	}

	.leftcolumn, .rightcolumn{
		width: 100%
		padding0;
	}

	.topnav a{
		float: none;
	    width: 100%
	}

</style>
</head>
<body>
	<div class="header" style="background-color: gray;">
		<h1 style="font-family: serif; color: white;">TUGAS AKHIR PEMOGRAMAN WEB</h1>
	</div>

	<div class="rightcolumn" style="background-color: white" >
			<div class="card" style="background-color: white">
				<h1><center>KALENDER</center></h1>
			<?php
	        //mengambil tanggal sistem saat ini (1-31)
	        $hari = date("d");
	        $hariini=$hari;
	        //mengambil bulan sistem saat ini (1-12)
	        $bulan = date("m");
	        //mengambil tahun sistem saat ini
	        $tahun = date("Y");
	        //mencari jumlah hari bulan dan tahun ini
	        $jumlahhari = date("t",mktime(0,0,0,$bulan,$hari,$tahun));
	        ?>

            <?php
	        switch ($bulan) {
            case 1: $nmbulan = "Jan"; break;
		    case 2: $nmbulan = "Feb"; break;
		    case 3: $nmbulan = "Mar"; break;
		    case 4: $nmbulan = "Apr"; break;
		    case 5: $nmbulan = "Mei"; break;
		    case 6: $nmbulan = "Jun"; break;
		    case 7: $nmbulan = "Jul"; break;
		    case 8: $nmbulan = "Agu"; break;
		    case 9: $nmbulan = "Sep"; break;
		    case 10: $nmbulan = "Okt"; break;
		    case 11: $nmbulan = "Nov"; break;
		    case 12: $nmbulan = "Des"; break;
	        }
	        echo "<center><h1>$nmbulan $tahun</h1></center>";
	        ?>	    
	        <br>
	<table style="border: 2px solid #000000" align="center" cellpadding="5">
		<tr bgcolor="#FF0000">
			<td align="center"><font color="#FFFFFF">Min</font></td>
			<td align="center">Sen</td>
			<td align="center">Sel</td>
			<td align="center">Rab</td>
			<td align="center">Kam</td>
			<td align="center">Jum</td>
			<td align="center">Sab</td>
		</tr>

        <?php
	    $s=date("w",mktime (0,0,0,$bulan,1,$tahun));
	    for ($ds=1; $ds<=$s; $ds++) { 
		echo "<td></td>";
	}

	for ($d=1; $d<=$jumlahhari; $d++) {
		if (date("w",mktime (0,0,0,$bulan,$d,$tahun))==0) {
			echo "<tr>";
		}

		$warna="#000001"; //warna default
		$warnasel="lightgrey"; //warna sel default
		if (date("l",mktime (0,0,0,$bulan,$d,$tahun))=="Sunday") {
			$warna="#FF0000";
		}
		if ($hariini==$d) {
			$warna="black";
			$warnasel="lightgrey";
		}

		//beri warna default tanggal tiap harinya (selain hari minggu)
		echo "<td align=center valign=middle bgcolor=$warnasel> <span style=\"color:$warna\">$d</span></td>";

		//jika hari ke enam, akhiri baris
		if (date("w",mktime (0,0,0,$bulan,$d,$tahun))==6) {
			echo "</tr>";
		}
	} 
	echo '</table>';
    ?>
    <br><br>
    <div></div>
    <h1><center>KALKULATOR</center></h1>
			<table border="1" cellspacing="10" align="center" cellpadding="">
                <tr>
                    <td colspan="4" id="inputLabel">0</td>
                </tr>

                <tr>
                    <td colspan="3"><button onclick="pushBtn(this);">Reset</button></td>
                    <td><button onclick="pushBtn(this);">/</button></td>
                </tr>

                <tr>
                    <td><button onclick="pushBtn(this);">7</button></td>
                    <td><button onclick="pushBtn(this);">8</button></td>
                    <td><button onclick="pushBtn(this);">9</button></td>
                    <td><button onclick="pushBtn(this);">*</button></td>
                </tr>

                <tr>
                    <td><button onclick="pushBtn(this);">4</button></td>
                    <td><button onclick="pushBtn(this);">5</button></td>
                    <td><button onclick="pushBtn(this);">6</button></td>
                    <td><button onclick="pushBtn(this);">-</button></td>
                </tr>

                <tr>
                    <td><button onclick="pushBtn(this);">1</button></td>
                    <td><button onclick="pushBtn(this);">2</button></td>
                    <td><button onclick="pushBtn(this);">3</button></td>
                    <td><button onclick="pushBtn(this);">+</button></td>
                </tr>

                <tr>
                   <td colspan="2"><button onclick="pushBtn(this);">0</button></td>
                   <td><button onclick="pushBtn(this);">.</button></td>
                   <td><button onclick="pushBtn(this);">=</button></td>
                </tr>
                </table>
                <script type="text/javascript">
                var inputLabel = document.getElementById('inputLabel');
                function pushBtn(obj) {
                    var pushed = obj.innerHTML
                    if (pushed == '=') {
                    // Calculate
                    inputLabel.innerHTML = eval(inputLabel.innerHTML);
                    } else if (pushed == 'Reset') {
                    // All Clear
                    inputLabel.innerHTML = '0';
                    } else {
                        if (inputLabel.innerHTML == '0') {
                               inputLabel.innerHTML = pushed;  
                    } else {
                        inputLabel.innerHTML += pushed;   
                    }
                }
            }
            </script>
			</div>
		</div>

	<div class="row" style="background-color: white">
		<div class="centercolumn" style="background-color: white">
			<div class="card">

				<h2 align="center" style="font-family: calibri">TUGAS AKHIR PEMROGRAMAN WEB</h2><br><br>
				<div>
					<center><img src="logouad.png.png" width="350px" height="350px"></center>
				</div>
				<br><br>

					<div align="center"><h2>Data Diri Anda</h2></div>
		            <form name="nama" method="post" action="prosess.php">
			        <table width="55%" border="0" align="center">
				    <tr>
					    <td>Nama lengkap</td>
					    <td><input type="text" name="nama" id="nama"></td>
				    </tr>
				    <tr>
					    <td>NIM</td>
					    <td><input type="text" name="nim" id="nim"></td>
				    </tr>
				    <tr>
					    <td>E-mail</td>
					    <td><input type="text" name="email" id="email"></td>
				    </tr>
				    <tr>
					<td>Prodi</td>
					<td><select name="prodi" id="prodi">
						<option>Informatika</option>
					</select></td>
				</tr>
				<tr>
					<td>&nbsp</td>
					<td><input type="submit" name="submit" value="Kirim" id="kirim"><input type="reset" name="reset" value="Batal"></td>
				</tr>
				
			</table>
		</form>
		<br><br>
		<div align="center"><a href="lihatt.php"><b>Lihat Data Diri<b></a></div>
			</div>
		</div>

		<div class="leftcolumn">
			<div class="card" style="background-color: lightgray;">
				<h3 align="center" style="font-family: Calibri">Hai perkenalkan saya Rizal Widyanto prodi informatika</h3>
				<p align="center">Saya Kuliah Di Universitas Ahmad Dahlan fakultas teknologi industri</p>
				<p align="center">Prodi Informatika</p>
				<div>
					<center><img src="rzry.jpg" width="300px"></center>
				</div>
				<div class="card" style="background-color: lightgray;">
		    		<h3 align="center">Follow Me</h3>
		    		<img src="ig.png" width="50px">
		    		<a href="https://www.instagram.com/Rizal widyanto/">Rizal widyanto</a><br><br>
		    		<img src="facebook.png" width="50px">
		    		<a href="https://www.facebook.com/Rizal widyanto/">Rizal widyanto</a><br><br>
	       		</div>
			</div>
		</div>
</body>
</html>