<!DOCTYPE html>
<html lang="de">
    <head>
        <title>Startseite</title>
        <meta charset="utf-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div style="display: flex;">
            <div style="flex: 1">
                <!-- HEADER -->
                <?php include("components\header.html")?>
            </div>
            <div style="flex: 7" class="article-background">
                <article>
                    <div class="titel"> 
                        <h1 class="text-center">GRADE<span><img alt="Logo" src="/src/images/logo.jpg" class="logo"></span>WIZARD</h1>
                    </div>
                    <div>
                        <h1>Hallo Max Siddel</h1>
                        <p class="fs-4">Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text.</p>
                    </div>
                    <div class="noten">
                        <h2>Noten</h2>
                        <table class="table">
                            <tr>
                                <th><h3>Fach</h3></th>
                                <th><h3>Thema</h3></th>
                                <th><h3>Lehrperson</h3></th>
                                <th><h3>Note</h3></th>
                                <th><h3>Klasse-&Oslash;</h3></th>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fs-5">Deutsch</span>
                                </td>
                                <td>
                                    <span class="fs-5">Grammatik - Komma</span>
                                </td>
                                <td>
                                    <span class="fs-5">Andreas Frank</span>
                                </td>
                                <td>
                                    <span class="fs-5">4.8</span>
                                </td>
                                <td>
                                    <span class="fs-5">4.4</span>
                                </td>
                            </tr>
                        </table>         
                    </div>
                    <div class="prufungen">
                        <h2>Bevorstehende Prüfungen</h2>
                        <table class="table">
                            <tr>
                                <th><h3>Datum</h3></th>
                                <th><h3>Fach</h3></th>
                                <th><h3>Zeit</h3></th>
                                <th><h3>Bemerkung</h3></th>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fs-5">23. April 2023</span>
                                </td>
                                <td>
                                    <span class="fs-5">Informatik - M123</span>
                                </td>
                                <td>
                                    <span class="fs-5">11:45 - 12:30</span>
                                </td>
                                <td>
                                    <span class="fs-5">Zusatzblatt erlaubt</span>
                                </td>
                            </tr>
                        </table>         
                    </div>
                    <div class="nachrichten">
                        <h2>Ungelesene Nachrichten</h2>
                        <table class="table">
                            <tr>
                                <th><h3>Klasse</h3></th>
                                <th><h3>Person</h3></th>
                                <th><h3>Zeit</h3></th>
                                <th><h3>Nachricht</h3></th>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fs-5">D21a</span>
                                </td>
                                <td>
                                    <span class="fs-5">Giacomo Küenzi</span>
                                </td>
                                <td>
                                    <span class="fs-5">13:22</span>
                                </td>
                                <td>
                                    <span class="fs-5">Hesch du husi gmacht?????</span>
                                </td>                               
                            </tr>
                        </table>         
                    </div>
                </article>        
            </div>
        </div>
        <!-- FOOTER -->
        <?php include("components/footer.html")?>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>