<!DOCTYPE html>
<html lang="nl">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>21% BTW berekenen | WebMary</title>
    <meta name="keywords" content="Mary Grooteman, responsive webdesign, Amsterdam" />
    <meta name="description" content="btw bereken tool, superhandig!" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://webmary.nl/btw21.php" />
    <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/btw.css" />
    <script src="js/prefixfree.js"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="/logo/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/logo/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/logo/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/logo/manifest.json">
    <link rel="mask-icon" href="/logo/safari-pinned-tab.svg" color="#f518cf">
    <link rel="shortcut icon" href="/logo/favicon.ico">
    <meta name="msapplication-config" content="/logo/browserconfig.xml">
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.js"></script>
    <script src="js/btw21bereken.js"></script>
    <script src="js/rekenmachine.js"></script>
</head>

<body id="top">
    <section class="fleks vp">
        <div class="schoolbord center">
            <div>
              <div class="logo-kl auto"> <a href="https://webmary.nl"> <?php echo file_get_contents("logo/webmary-sq.svg"); ?></a></div>
            <h1>💶 21% BTW calculator</h1>
            <h2 class="yellow"><a href="btw6.php" class="opzij">naar de 6% BTW calculator</a></h2>
            <form>
                <p>Vul een bedrag in waar je maar wilt: incl, excl of alleen het BTW-bedrag.<br>
                    Klik dan op  = naast het bedrag wat je net ingevuld hebt en de uitgerekende bedragen verschijnen als bij toverslag.
                    <br>! Gebruik een punt ( . ) inplv een komma als decimaal teken.</p>
                <div class="btw fleks turquoise">
                    <div class="derde">Bedrag excl. 21% BTW </div>
                    <div class="derde"><label>€</label>
                        <input name="btw_ex" placeholder="0.00">
                    </div>
                    <div class="derde">
                        <input onclick="if (checkNum(btw_ex.value)) compute(this.form,btw_ex.name,btw_data)" type="button" value="=" name="btw_ex_bt">
                    </div>
                    <div class="derde">21% BTW</div>
                    <div class="derde"><label>€</label>
                        <input name="btw_deel" placeholder="0.00"> </div>
                    <div class="derde">
                        <input onclick="if (checkNum(btw_deel.value)) compute(this.form, btw_deel.name, btw_data)" type="button" value="=" name="btw_deel_bt"> </div>
                    <div class="derde"> Bedrag incl. 21% BTW</div>
                    <div class="derde"><label>€</label>
                        <input name="btw_inc" placeholder="0.00"> </div>
                    <div class="derde">
                        <input onclick="if (checkNum(btw_inc.value)) compute(this.form,btw_inc.name,btw_data)" type="button" value="=" name="btw_inc_bt"> </div>
                </div>
                <div class="btw-btn">
                    <button id="button" onclick="form.btw_ex.value=''; form.btw_deel.value=''; form.btw_inc.value='';" type="button" value="alles wissen" name="res5">wissen</button>
                </div>
            </form>
                </div>
        </div>
        <div class="rm">
            <div>
            <?php include("includes/rekenmachine.php") ?>
        </div>
        </div>
    </section>
    <footer><a href="https://webmary.nl">Mary Grooteman</a></footer>
</body>

</html>