<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <header>

            <h1 class="text-center">Strong Password Generator</h1>
            <h2 class="text-center">Genera una password sicura</h2>
        </header>
        <main>
            <form class="row g-4 ">

                <div class="col-md-12">
                    <label for="length">Lunghezza password</label>
                    <input type="number" class="form-control" id="length" name="length">
                </div>

                <div class="col-md-6">

                    <div class="">
                        <input type="checkbox" class="form-check-input" id="uppercase" name="uppercase">
                        <label for="uppercase">Maiuscole</label>
                    </div>
                    <div class="">
                        <input type="checkbox" class="form-check-input" id="lowercase" name="lowercase">
                        <label for="lowercase">Minuscole</label>
                    </div>
                    <div class="">
                        <input type="checkbox" class="form-check-input" id="numbers" name="numbers">
                        <label for="numbers">Numeri</label>
                    </div>
                    <div class="">
                        <input type="checkbox" class="form-check-input" id="symbols" name="symbols">
                        <label for="symbols">Simboli</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <span>Consenti ripetizioni di uno o più caratteri ?</span>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            si
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            no
                        </label>
                    </div>
                </div>
                <div class="">
                    <button type="submit" class="btn btn-primary">Genera Password</button>
                </div>

            </form>
        </main>
    </div>
    <!--Bootstrap js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>