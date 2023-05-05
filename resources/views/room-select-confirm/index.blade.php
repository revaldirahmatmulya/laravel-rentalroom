<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/style/style.css') }}">
</head>

<body>
    <div class="row">
        <div class="col-lg-8 d-flex align-items-center justify-content-center">
            <div class="account-info-wrap text-center">
                <img class="img-profile" src="{{ asset('image/profile.svg') }}" style="width: 200px"></img>
                <h1>Saphira Indah P</h1>
                <h3>D-3 Elektro Telekomunikasi</h3>
                <h3>200605110019</h3>
            </div>

        </div>
        <div class="col-lg-4">

            <div class="container" style="background-color: #6793c6;height: 100vh;">
                <div class="btn-confirm-wrap d-flex  align-items-center justify-content-center">
                    <h3>Waktu : Senin, 14 Juni 2025</h3>
                    <h3>Pukul 13:00</h3>
                    <h3>Ruangan 1</h3>
                    <a href=""><button type="button" class="btn btn-light btn-lg mb-4"
                            style="width: 200px;margin-top: 10vh"><b>Confirm</b></button></a>
                    <a href=""><button type="button"
                            class="btn btn-light btn-lg mb-4"style="width: 200px"><b>Scan Ulang</b></button></a>
                </div>
            </div>


        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


</body>

</html>
