<!DOCTYPE html>
<html>
<head>
    <title>PETUGAS IBADAH</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Daftar Petugas Ibadah" />
    <meta property="og:title" content="GKE BUKIT HINDU" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://senjamanagement.com/project/bukutelpon/gke.png" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="500" />
    <meta property="og:image:type" content="gke.png" />
    <meta property="og:description" content="Daftar Petugas Ibadah" />
    <meta property="og:site_name" content="GKE BUKTI HINDU" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');

        html {
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-position: center;
            background-size: fill;
            background-attachment: fixed;
            background-repeat: no-repeat;
            margin: 0;
            scroll: smooth;
                  display: flex;
    justify-content: center;
         background-image: linear-gradient( #ffffff, #ffffff, #ffffff), url(pianis.png);
  animation: slideshowAnimation 20s infinite;
    
        }
        
        @keyframes slideshowAnimation {
   0%, 100% {
    background-image: url('crowd.jpg');
  }
  25% {
    background-image: url('band.jpg');
  }
  50% {
    background-image: url('piano.jpeg');
  }
  75% {
    background-image: url('multi.jpeg');
  }
 }

        h1 {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-container {
   display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 auto;
    height: auto;
    top: 10%;
    position: absolute;
    flex-wrap: wrap;
  
        }

        .card {
          display: flex;
    width: 300px;
    background-color: #ffffff;
    padding: 0px;
    margin: 10px;
    border-radius: 10px 10px 0 0;
    box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;
    flex-direction: column;
        }
        
         .card-image {
        background-size: cover;
        background-position: right;
        height: 200px; /* Adjust the height as needed */
    }

        .contact-image {
        width: 100%;
    height: 120px;
    margin-bottom: 10px;
       border-radius: 10px 10px 0 0;
    object-fit: cover;
        }

        .contact-details {
         display: flex;
    flex-direction: column;
    text-align: center;
        }

        .name {
            font-weight: bold;
            font-size: 14px;
            margin: 0;
        }

@keyframes buttonAnimation {
  0% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.2);
  }
  100% {
    transform: scale(1);
  }
}

.whatsapp-btn.clicked {
  animation: buttonAnimation 0.5s;
  background-color: #FCB814;
}

        .whatsapp-btn {
            display: block;
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            margin-top: 10px;
    
            cursor: pointer;
        }

        @media screen and (max-width: 768px) {
            .card {
          width: 40%;
    margin: 5px;
            }
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #4caf50;
            text-align: center;
            color: #fff;
            padding-top: 20px;
        }

        .footer-content {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .footer p {
            margin: 0;
        }

        .footer-links {
            list-style: none;
            padding: 0;
            margin-top: 10px;
        }

        .footer-links li {
            display: inline;
        }

        .footer-links li:not(:last-child) {
            margin-right: 10px;
        }

        .footer-links a {
            color: #ffffff;
            text-decoration: none;
        }

        .footer-links a:hover {
            text-decoration: none;
        }

        .footer-links i {
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div class="card-container">
        <?php
        // Membaca data dari file data.txt
        $data = file('pilih.txt', FILE_IGNORE_NEW_LINES);

        // Memproses setiap baris data
        foreach ($data as $line) {
            // Memisahkan nama, nomor handphone, dan URL gambar
            $parts = explode(',', $line);
            $name = trim($parts[0]);
            $tautan = trim($parts[1]);
            $imageURL = trim($parts[2]);
            ?>

            <div class="card">
                <img class="contact-image" src="<?php echo $imageURL; ?>" alt="Kontak">
                <div class="contact-details">
                    <p class="name"><?php echo $name; ?></p>
                  <a class="whatsapp-btn" href="<?php echo $tautan; ?>" onclick="animateButton(event)">CLICK ME</a>
                </div>
            </div>
        <?php
        }
        ?>
    </div>

    <footer class="footer">
        <div class="footer-content">
            <p>GKE BUKIT HINDU GEREJA EFRATA</p>
            <ul class="footer-links">
                <li><a href="https://www.youtube.com/@GKEBukitHinduGerejaEfrata/streams"><i class="fab fa-youtube"></i></a></li>
                <li><a href="https://www.facebook.com/GerejaEfrataBukitHindu"><i class="fab fa-facebook"></i></a></li>
            </ul>
        </div>
    </footer>

    <script>
        function lockScreenOrientation() {
            // Mendapatkan elemen <html>
            var htmlElement = document.documentElement;

            // Mencoba mengunci orientasi layar pada berbagai metode yang didukung oleh browser
            if (htmlElement.requestFullscreen) {
                htmlElement.requestFullscreen();
            } else if (htmlElement.mozRequestFullScreen) { // Mozilla Firefox
                htmlElement.mozRequestFullScreen();
            } else if (htmlElement.webkitRequestFullscreen) { // Chrome, Safari, Opera
                htmlElement.webkitRequestFullscreen();
            } else if (htmlElement.msRequestFullscreen) { // Internet Explorer
                htmlElement.msRequestFullscreen();
            }

            // Mencoba mengunci orientasi layar pada perangkat mobile
            if (screen.orientation && screen.orientation.lock) {
                screen.orientation
                    .lock('portrait')
                    .then(function() {
                        console.log('Orientasi layar terkunci ke potret.');
                    })
                    .catch(function(error) {
                        console.error('Gagal mengunci orientasi layar:', error);
                    });
            }
        }

        // Memanggil fungsi untuk mengunci orientasi layar saat halaman dimuat
        lockScreenOrientation();
    </script>

      <script>
  function animateButton(event) {
    event.preventDefault();

    var button = event.target;
    button.classList.add('clicked');

    setTimeout(function () {
      button.classList.remove('clicked');
      window.location.href = button.href; // Navigate to the link after animation
    }, 500);
  }

  var whatsappButtons = document.getElementsByClassName('whatsapp-btn');
  for (var i = 0; i < whatsappButtons.length; i++) {
    whatsappButtons[i].addEventListener('click', animateButton);
  }
</script>



   
</body>
</html>

