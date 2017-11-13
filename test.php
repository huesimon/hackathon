<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="styles.css">
    <title></title>
</head>
<body>


        <h1> <center><?php echo $_POST["phoneInput"]; ?> vurdering
            </center></h1>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-lg-12">
        <div class="table-responsive">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Butik</th>
            <th>Pris</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <img src="https://www.power.dk/images/logos/powerdk/logo.svg">
                </td>
            <td>1338 kr.

                <button class="btn btn-info">Sælg her</button></td>
        </tr>
        <tr>
            <td>
                <img src="https://www.elgiganten.dk/INTERSHOP/static/WFS/store-elgigantenDK-Site/-/-/da_DK/images/site/elgigantenDK/logo-large.png?v=3">
                </td>
            <td>1337 kr.

                <button class="btn btn-info">Sælg her</button>
            </td>

        </tr>
        </tbody>
    </table>
</div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-lg-8">
            <div class="thumbnail center well well-small text-center">
                <h2><?php echo $_POST["phoneInput"]; ?></h2>

                <p>Din telefon vil blive vurderet af en SUPERHELT!</p>

                <form action="loading.html" method="post">
                    <div class="input-prepend"><span class="add-on"><i class="icon-envelope"></i></span>
                        <input type="text" id="" name="" placeholder="your@email.com">
                    </div>
                    <br />
                    <input type="submit" value="Få din vudering på mail" class="btn btn-large" />
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>