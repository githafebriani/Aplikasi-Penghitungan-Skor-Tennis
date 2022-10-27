
<html>
<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2>Penghitungan Skor Pertandingan Tenis</h2>
	<h3> Match Pertandingan Tenis </h1>
    <form action="simpan.php" method="post">
	
	<div class="form-group">
	
	     <label>Nama Pemain:</label>
	     <input name="nama" class="form-control" placeholder="Masukan Nama Pemain 1" >
		 <input name="nama" class="form-control" placeholder="Masukan Nama Pemain 2" >
	</div> 
        <div class="form-group">
            <label>Set:</label> <br>
			<select> 
			<option name="set" > Pilih Set <option/>
			<option name="set" value="Set Kesatu"> Set Kesatu <option/>
			<option name="set" value="Set Kedua"> Set Kedua <option/>
			<option name="set" value="Set Ketiga"> Set Ketiga <option/>
			<option name="set" value="Set Keempat"> Set Keempat <option/> 
			<option name="set" value="Set Kelima"> Set Kelima <option/>
			</select>
        </div> 
	<div class="form-group">
            <label>Game:</label> <br>
			<select> 
			<option name="game" > Pilih Game <option/>
			<option name="game" value="Game Kesatu"> Game Kesatu <option/>
			<option name="game" value="Game Kedua"> Game Kedua <option/>
			<option name="game" value="Game Ketiga"> Game Ketiga <option/>
			<option name="game" value="Game Keempat"> Game Keempat <option/> 
			<option name="game" value="Game Kelima"> Game Kelima <option/> 
			<option name="game" value="Game Keenam"> Game Keenam <option/> 
			</select>
        </div>
	<div class="form-group">
	     <label>Poin Pertama:</label>
	     <input name="poinpertama" class="form-control" placeholder="Masukan Poin Pertama" >
	</div> 
	<div class="form-group">
	     <label>Poin Kedua:</label>
	     <input name="poinkedua" class="form-control" placeholder="Masukan Poin Kedua" >
	</div> 
	<div class="form-group">
	     <label>Poin Ketiga:</label>
	     <input name="poinketiga" class="form-control" placeholder="Masukan Poin Ketiga" >
	</div> 
	<div class="form-group">
	     <label>Poin Keempat:</label>
	     <input name="poinkeempat" class="form-control" placeholder="Masukan Poin Keempat" >
	</div> 
        <button type="submit" name="submit" class="btn btn-primary">Hitung</button>
    </form>
</div>


</body>
</html>

