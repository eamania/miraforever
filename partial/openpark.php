

<?php

                        //a-m-g
                        $attuale = new DateTime();


                        $apertura = new DateTime("2016-03-25 00:00:00");
                        $chiusura = new DateTime("2016-11-01 00:00:00");

//$attuale = new DateTime("2016-03-26 00:00:00");


                        $aperturalunga = new DateTime("2016-06-25 00:00:00");
                        $chiusuralunga = new DateTime("2016-08-28 00:00:00");

                        $open = ($attuale > $apertura && $attuale < $chiusura) ? 'Aperto18' : 'Chiuso';
                        if ($attuale > $aperturalunga && $attuale < $chiusuralunga){$open = "Aperto23";}

                        if ($attuale > new DateTime("2016-04-02 00:00:00") && $attuale < new DateTime("2016-04-05 00:00:00")){$open = "Aperto18";}
                        if ($attuale > new DateTime("2016-04-09 00:00:00") && $attuale < new DateTime("2016-04-11 00:00:00")){$open = "Aperto18";}
                        if ($attuale > new DateTime("2016-04-16 00:00:00") && $attuale < new DateTime("2016-04-18 00:00:00")){$open = "Aperto18";}
                        if ($attuale > new DateTime("2016-04-16 00:00:00") && $attuale < new DateTime("2016-04-18 00:00:00")){$open = "Aperto18";}
                        if ($attuale > new DateTime("2016-09-17 00:00:00") && $attuale < new DateTime("2016-09-19 00:00:00")){$open = "Aperto18";}
                        if ($attuale > new DateTime("2016-09-24 00:00:00") && $attuale < new DateTime("2016-09-26 00:00:00")){$open = "Aperto18";}
                        if ($attuale > new DateTime("2016-10-01 00:00:00") && $attuale < new DateTime("2016-10-03 00:00:00")){$open = "Aperto18";}
                        // giorni singoli di apertura ore 23
                        if ($attuale > new DateTime("2016-06-18 00:00:00") && $attuale < new DateTime("2016-06-19 00:00:00")){$open = "Aperto23";}
                        if ($attuale > new DateTime("2016-09-03 00:00:00") && $attuale < new DateTime("2016-09-04 00:00:00")){$open = "Aperto23";}

                        // giorni di apertura di mirabilandia beach con il parco alle 18
                        if ($attuale > new DateTime("2016-06-11 00:00:00") && $attuale < new DateTime("2016-06-13 00:00:00")){$open = "Aperto18Beach";}
                        if ($attuale > new DateTime("2016-06-19 00:00:00") && $attuale < new DateTime("2016-06-25 00:00:00")){$open = "Aperto18Beach";}
                        if ($attuale > new DateTime("2016-08-29 00:00:00") && $attuale < new DateTime("2016-09-03 00:00:00")){$open = "Aperto18Beach";}
                        if ($attuale > new DateTime("2016-09-04 00:00:00") && $attuale < new DateTime("2016-09-05 00:00:00")){$open = "Aperto18Beach";}

                        //halloween
                        if ($attuale > new DateTime("2016-10-08 00:00:00") && $attuale < new DateTime("2016-10-10 00:00:00")){$open = "ApertoHalloween";}
                        if ($attuale > new DateTime("2016-10-15 00:00:00") && $attuale < new DateTime("2016-10-17 00:00:00")){$open = "ApertoHalloween";}
                        if ($attuale > new DateTime("2016-10-22 00:00:00") && $attuale < new DateTime("2016-10-24 00:00:00")){$open = "ApertoHalloween";}
                        if ($attuale > new DateTime("2016-10-29 00:00:00") && $attuale < new DateTime("2016-11-02 00:00:00")){$open = "ApertoHalloween";}






                            $diff = $apertura->diff($attuale);



                       // print_r($diff);
                        $data = mktime();
                        $dataattuale = date("d/m/Y", $data);

                        echo "<p>Oggi &#233; il <b>" .$dataattuale . "</b></p>" ;

                        switch ($open){

                            case 'Aperto23':
                                echo "<p style='color:green;'> <b> Mirabilandia</b> &#233; aperta fino alle ore 23 <br> <b> Mirabilandia Beach</b> &#233; aperto dalle ore 11 alle 18</p>";
                                break;
                            case 'Aperto18':
                                echo "<p style='color:green;'> <b> Mirabilandia</b> &#233; aperta fino alle ore 18 <br> <span style='color:red;'><b> Mirabilandia Beach</b> &#233; chiuso</p></span>";
                                break;
                            case 'Aperto18Beach':
                                echo "<p style='color:green;'> <b> Mirabilandia</b> &#233; aperta fino alle ore 18 <br>  <b> Mirabilandia Beach</b> &#233; aperto dalle ore 11 alle 18</p>";
                                break;
                            case 'ApertoHalloween':
                                echo "aperto Halloween";
                                break;
                            default:
                                echo "<p style='color:red;'> Mancano <b>" .  $diff->days . "</b> giorni all'apertura della stagione 2016 di<b> Mirabilandia</b></p>" ;
                                break;
                        }
                        ?>