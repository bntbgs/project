<html>
<!-- upto 2 directory depth-->
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hospital Booking</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap" media="print" onload="this.media='all'"/>
    <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap"/>
    </noscript>
    <link href="./css/font-awesome/css/all.min.css?ver=1.2.0" rel="stylesheet">
    <link href="./css/bootstrap-icons/bootstrap-icons.css?ver=1.2.0" rel="stylesheet">
    <link href="./css/bootstrap.min.css?ver=1.2.0" rel="stylesheet">
    <link href="./css/aos.css?ver=1.2.0" rel="stylesheet">
    <link href="./css/main.css?ver=1.2.0" rel="stylesheet">
    <noscript>
      <style type="text/css">
        [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
        }
      </style>
    </noscript>
  </head>
  <body id="top">
    <header class="bg-light">
      <nav class="navbar navbar-expand-lg navbar-light bg-light" id="header-nav" role="navigation">
        <div class="container"><a class="link-dark navbar-brand site-title mb-0" href="index.php">Hospital Booking</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-2">
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div class="page-content">
      <div id="content">
<header>
  <div class="cover bg-light">
    <div class="container px-3">
  <div class="container-narrow">
    <div class="text-center mb-5">
      <h2 class="marker marker-center">Buat Kartu Antrean</h2>
    </div>
    <div class="center">
    <?php
include 'customers.php';
$customerObj = new Hospital();
if (isset($_GET['deleteId']) && !empty($_GET['deleteId'])){
    $deleteId = $_GET['deleteId'];
    $customerObj->deleteRecord($deleteId);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
       
        <meta charset="utf-8"/>
        <meta name = "viewport" content="width=device-width, initial-scale=1"/>
    </head>
<body>
<?php
    if (isset($_GET['msg1']) == "insert") {
        echo "<div class = 'alert alert-success alert-dismissible'>
        <button type = 'button' class = 'close' data-dismiss = 'alert'>&times; </button>
        aowkawok berhasil tutor dek
        </div>";
    }
    if (isset($_GET['msg2']) == "update") {
        echo "<div class = 'alert alert-success alert-dismissible'>
        <button type = 'button' class = 'close' data-dismiss = 'alert'>&times; </button>
        Cieee Berhasil
        </div>";
    }
    if (isset($_GET['msg3']) == "delete") {
        echo "<div class = 'alert alert-success alert-dismissible'>
        <button type = 'button' class = 'close' data-dismiss = 'alert'>&times; </button>
        kenangan terhapus
        </div>";
    }
?>
        </tbody>
        </table>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </body>
        </html>
        <div class="bg-light my-2 p-3 pt-2"><form action="kartu.php"
    method="POST">
    <div class="form-group my-2">
      <label for="name" class="form-label fw-bolder">Nomor BPJS</label>
      <input class="form-control" type="text" id="name" name="name" required>
    </div>
    <div class="form-group my-2">
      <label for="email" class="form-label fw-bolder">NIK</label>
      <input class="form-control" type="text" id="nik" name="_replyto" required>
    </div>
    <div class="form-group my-2">
      <label for="email" class="form-label fw-bolder">Nama</label>
      <input class="form-control" type="text" id="nama" name="_replyto" required>
    </div>
    <div class="form-group my-2">
      <label for="email" class="form-label fw-bolder">Jenis Kelamin</label>
      <input class="form-control" type="text" id="jeniskelamin" name="_replyto" required>
    </div>
    <div class="form-group my-2">
      <label for="email" class="form-label fw-bolder">Tempat, Tanggal Lahir</label>
      <input class="form-control" type="text" id="ttl" name="_replyto" required>
    </div>
    <div class="form-group my-2">
      <label for="email" class="form-label fw-bolder">Alamat</label>
      <input class="form-control" type="text" id="email" name="_replyto" required>
    </div>
  <button class="btn btn-primary mt-2" type="submit">Buat</button>
</form>
        </div>
      </div>      
        </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  </div>
</footer></div>
    </div>
    <div id="scrolltop"><a class="btn btn-secondary" href="#top"><span class="icon"><i class="fas fa-angle-up fa-x"></i></span></a></div>
    <script src="./scripts/imagesloaded.pkgd.min.js?ver=1.2.0"></script>
    <script src="./scripts/masonry.pkgd.min.js?ver=1.2.0"></script>
    <script src="./scripts/BigPicture.min.js?ver=1.2.0"></script>
    <script src="./scripts/purecounter.min.js?ver=1.2.0"></script>
    <script src="./scripts/bootstrap.bundle.min.js?ver=1.2.0"></script>
    <script src="./scripts/aos.min.js?ver=1.2.0"></script>
    <script src="./scripts/main.js?ver=1.2.0"></script>
  </body>
</html>

        