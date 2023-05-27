<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Tugas tampilan 1 laravel</title>
</head>
<body>
<form>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" placeholder="Masukan nama anda" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal pemeriksaan</label> 
    <div class="col-8">
      <input id="tanggal" name="tanggal" placeholder="Masukkan tanggal" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tanggal_lahir" class="col-4 col-form-label">Tanggal lahir</label> 
    <div class="col-8">
      <input id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukkan tanggal lahir" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" class="custom-control-input" value="cowok" aria-describedby="jenis_kelaminHelpBlock"> 
        <label for="jenis_kelamin_0" class="custom-control-label">Laki laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" class="custom-control-input" value="cewek" aria-describedby="jenis_kelaminHelpBlock"> 
        <label for="jenis_kelamin_1" class="custom-control-label">Perempuan</label>
      </div> 
      <span id="jenis_kelaminHelpBlock" class="form-text text-muted">Pilih salah satu</span>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</body>
</html>