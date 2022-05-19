<html> 
  <head>
    <title>PHP Test</title>
    <link href='style.css' rel='stylesheet'>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </head>
  <body>
    
    <div class='container'>
      <h1>Spasi Komputer 💻</h1>
      <p>Spasi komputer menjual  kebuthan kebutuhan elektronik seperti buah, sayur</p>
      <form method="post" action="invoice.php">
        Nama:<input class="form-control" type="text" name="user" /><br />
        Email:<input class="form-control" type="text" name="email" /><br />
        Alamat:<input class="form-control" type="text" name="alamat" /><br />
  
        <h2>Perangkat Komputer</h2>
        <label class="container">Intel
          <input type="radio" checked="checked" name="processor">
          <span class="checkmark"></span>
        </label>
        <label class="container">AMD
          <input type="radio" name="processor">
          <span class="checkmark"></span>
        </label>
        <input type="submit" value="Submit" />
      </form>
    </div>
  </body>
</html>
