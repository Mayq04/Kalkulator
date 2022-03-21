<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Kalkulator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="index.css">
  <script src="https://kit.fontawesome.com/dc9e30b9fe.js" crossorigin="anonymous"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg">
    <div class="container-fluid">
      <a class="navbar-brand nav-link none">MAR'I YUSTIARDIN</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    </div>
  </nav>

  <div class="kalkulator">
    <div>
      <h1 class="judul">OPERASI MATEMATIKA</h1>
      <form method="post" action="/Kalkulator/hasil">
        <input name="number1" type="text" class="bil">
        <select name="operation" class="opt">
          <option value="" class="bil">Pilih Operasi</option>
          <option value="+">+</option>
          <option value="-">-</option>
          <option value="*">*</option>
          <option value="/">/</option>
        </select>
        <input name="number2" type="text" class="bil"><br>
        <input name="submit" type="submit" value="Hasil" class="tombol">
      </form>
    </div>
  </div>
</body>
<style type="text/css">
  body{
    background: #f2f2f2;
    font-family: calibri;
  }

  .kalkulator{
    width: 335px;
    background: #2f495a;
    margin: 100px auto;
    padding: 10px 20px 50px 20px;
    border-radius: 5px;
    box-shadow: 0px 10px 20px 0px #d1d1d1;
  }

  .bil{
    font-size: 16pt;
    border: none;
    width: 300px;
    margin: 5px;
    border-radius: 5px;
    padding: 10px;
  }

  .opt{
    font-size: 16pt;
    border: none;
    width: auto;
    margin: 5px;
    border-radius: 5px;
    padding: 10px;
    float: right
  }

  .tombol{
    background: #ec5159;
    border-top: none;
    border-right: none;
    border-left: none;
    border-radius: 5px;
    padding: 10px 20px;
    color: #eee;
    border-bottom: 4px solid #bf3d3d;
    float: right;
  }

  .judul{
    font-family: calibri;
    text-align: center;
    color: #d1d1d1;
    font-weight: normal;
  }
</style>
</html>
