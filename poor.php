<?php
include ("head.php")
    ?>

<body class="d-flex flex-column min-vh-100">
    <?php
    include ("nav.php")
        ?>

    <div class="container">
        <div class="d-flex justify-content-start flex-column align-items-start">
            <div class="row">
                <div class="col">
                    <h5>Spenden</h5>
                    <b>
                        <p>Alle Donations werden für den Preispool der zukünftigen Turniere verwendet!</p>
                    </b>
                    <p>Wenn ihr was spenden wollts, dann habt ihr folgende Möglichkeiten:</p>
                    <ul style="word-break: break-word;">
                        <li>
                            <b>Crypto:</b>
                            <ul>
                                <li>
                                    <b>BTC:</b> bc1qftvu52sy8nks2djfefqu93wjt9f0sgf2u5rq5q
                                </li>
                                <li>
                                    <b>ETH / ERC20 Tokens:</b> 0x5ebC327f2611901aee8771AC530BeFC209d84423
                                </li>
                                <li>
                                    <b>XRP (Kein Tag / Memo):</b> rh1QZ3eahbvfYBajedqpCUz63uNk7hxjD3
                                </li>
                                <li>
                                    <b>XMR:</b>
                                    49pag2WYSgkW5HnX7KRTYfhVuN9E6VLTxMv9Ycxkq5R26FJwpWDxawN2MJRqN4jbGGbSpMVWG1YwF84AecZ44oJY7BNjcSQ
                                </li>
                            </ul>
                        </li>
                        <li>
                            <b>Paypal:</b> a.krois@live.de
                        </li>
                        <li>
                            <b>CS Skins:</b> <a
                                href="https://steamcommunity.com/tradeoffer/new/?partner=102407041&token=pZcZSKus"
                                target="_blank">Tradelink</a>
                        </li>
                        <li>
                            <b>Überweisung:</b> <a href="https://steamcommunity.com/id/alexkrois/"
                                target="_blank">Schreibts mir
                                auf Steam, will ned mein IBAN öffentlich posten.</a>
                        </li>
                        <li>
                            <b>CS2 Server:</b> Werd für 5v5 Turniere höchstwahrscheinlich CS2 Server brauchen.
                        </li>
                    </ul>
                    <br>
                    <h5>Unterstützen</h5>
                    <b>
                        <p>Wenn ihr motiviert seids, mir bei den Tournaments zu helfen - nehme jede Hilfe gern an.</p>
                    </b>
                    <p>Was alles so gebraucht wird:</p>
                    <ul>
                        <li>Turnier-Admins</li>
                        <li>Leute die Werbung für die Turniere machen</li>
                        <li>Generell einfach Feedback ist immer erwünscht</li>
                        <li>Eventuell Sponsoren finden</li>
                        <li>Leute, die keinen Krebs bekommen, wenn sie was mit CSS machen müssen.</li>
                        <li>Einfach mitspielen bei den Turnieren ihr Hundis</li>
                    </ul>
                </div>

                <div class="col-sm">
                    <div class="d-flex justify-content-center flex-column align-items-center">
                    <h5>Random lustige .at CS Fotos, refresh für neues, oder <a href="../img">hier</a> klicken
                    </h5>
                    <div id="banner-load" class="d-flex justify-content-center flex-column align-items-center">
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
  include ("foot.php")
    ?>
</body>
<script>
    const listofpics = new Set();
    var directory = "https://atcs.meme/atcsimgs";
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open('GET', directory, false);
    xmlHttp.send(null);
    var ret = xmlHttp.responseText;
    var fileList = ret.split('\n');
    for (i = 0; i < fileList.length; i++) {
        var files = fileList[i].split('</a></td>');
        if (files.length === 2) {
            for (j = 0; j < files.length; j++) {
                filenames = files[j].split('<a href="')
                if (filenames.length === 2) {
                    filename = filenames[1].split('">')
                    if (filename[0] === "/") {
                        continue;
                    }
                    listofpics.add(filename[0])
                }
            }

        }
    }
    let myArr = Array.from(listofpics);
    var images = myArr;
    $('<img class="img-fluid" style="max-width: 50%;" src="atcsimgs/' + images[Math.floor(Math.random() * images.length)] + '">').appendTo('#banner-load');
</script>