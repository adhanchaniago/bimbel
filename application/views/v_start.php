<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url('aset/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('aset/css/style.css') ?>">
    <title>Document</title>
    <style type="text/css">
        #map {
            margin: 10px;
            width: 100%;
            height: 300px;
            padding: 10px;
        }
    </style>
    <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
</head>

<body>
    <div class="container">
        <!-- navbar -->
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand">Navbar</a>
            <form class="form-inline">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </form>
        </nav>


        <!-- Content -->
        <form action="<?= site_url('welcome/hitung') ?>" method="POST">

            <div class="form-group">

                <label for="">Harga</label><br>
                <input type="number" min="2000000" max="13990000" class="form-control" name="biaya">

            </div>
            <label for="">Fasilitas</label>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="fasilitas[]" value="Ac">
                        <label for="" class="form-check-label">Ac</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="fasilitas[]" value="Projector">
                        <label for="" class="form-check-label">Projector</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-check">
                        <input type="checkbox" name="fasilitas[]" class="form-check-input" value="Genset">
                        <label for="" class="form-check-label">Ganset</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-check">
                        <input type="checkbox" name="fasilitas[]" class="form-check-input" value="Parkir">
                        <label for="" class="form-check-label">Parkir</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-check">
                        <input type="checkbox" name="fasilitas[]" class="form-check-input" value="SmartBoard">
                        <label for="" class="form-check-label">SmartBoard</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-check">
                        <input type="checkbox" name="fasilitas[]" class="form-check-input" value="LCD">
                        <label for="" class="form-check-label">LCD</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-check">
                        <input type="checkbox" name="fasilitas[]" class="form-check-input" value="scanner">
                        <label for="" class="form-check-label">Scanner OMR Opscan</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-check">
                        <input type="checkbox" name="fasilitas[]" class="form-check-input" value="perpus">
                        <label for="" class="form-check-label">Perpustakaan</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-check">
                        <input type="checkbox" name="fasilitas[]" class="form-check-input" value="konsul">
                        <label for="" class="form-check-label">Area Konsultasi</label>
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="">Asal Sekolah</label>
                <select name="sma" class="form-control">
                    <option value="sma8">SMA 8 Yogyakarta</option>
                    <option value="sma9">SMA 9 Yogyakarta</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">submit</button>
        </form>
        <script type="text/javascript">
            //* Fungsi untuk mendapatkan nilai latitude longitude
            function updateMarkerPosition(latLng) {
                document.getElementById('latitude').value = [latLng.lat()]
                document.getElementById('longitude').value = [latLng.lng()]
            }

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: new google.maps.LatLng(-7.781921, 110.364678),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });
            //posisi awal marker   
            var latLng = new google.maps.LatLng(-7.781921, 110.364678);

            /* buat marker yang bisa di drag lalu 
              panggil fungsi updateMarkerPosition(latLng)
             dan letakan posisi terakhir di id=latitude dan id=longitude
             */
            var marker = new google.maps.Marker({
                position: latLng,
                title: 'lokasi',
                map: map,
                draggable: true
            });

            updateMarkerPosition(latLng);
            google.maps.event.addListener(marker, 'drag', function() {
                // ketika marker di drag, otomatis nilai latitude dan longitude
                //menyesuaikan dengan posisi marker 
                updateMarkerPosition(marker.getPosition());
            });
        </script>
        <script src="<?= base_url('aset/js/bootstrap.min.js') ?>"></script>

</body>

</html>