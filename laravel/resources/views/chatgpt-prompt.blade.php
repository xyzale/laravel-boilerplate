<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <META http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</head>
<body>

<div>
    <h2>Definisci le caratteristiche dell&#39;articolo desiderato</h2>
    <form target="_blank">
        <fieldset>
            <div class="m_sfondo-azzurrino">
                <legend>Scelta degli elementi del prompt per ChatGPT:</legend>
                <label for="m_variabile_agisci">Scrivi come se tu fossi un:</label>
                <select id="m_variabile_agisci" name="variabile_agisci">
                    <option value="SEO Copywriter">SEO Copywriter</option>
                    <option value="esperto di marketing">Esperto di marketing</option>
                    <option value="giornalista">Giornalista</option>
                    <option value="scienziato">Scienziato</option>
                    <option value="medico">Medico</option>
                    <option value="avvocato">Avvocato</option>
                    <option value="economista">Economista</option>
                    <option value="psicologo">Psicologo</option>
                    <option value="consulente finanziario">Consulente finanziario</option>
                    <option value="esperto di tecnologia">Esperto di tecnologia</option>
                    <option value="esperto di cucina">Esperto di cucina</option>
                    <option value="esperto di moda">Esperto di moda</option>
                    <option value="esperto di finanza">Esperto di finanza</option>
                    <option value="esperto di viaggi">Esperto di viaggi</option>
                    <option value="consulente di benessere">Consulente di benessere</option>
                </select>
                <br><br>

                <label for="m_variabile_argomento">Argomento dell&#39;articolo:</label>
                <input type="text" id="m_variabile_argomento" name="variabile_argomento">
                <br><br>

                <label for="m_variabile_titolo">Titolo dell&#39;articolo:</label>
                <input type="text" id="m_variabile_titolo" name="variabile_titolo"><br><br>

                <label for="m_variabile_obiettivo">Obiettivo dell&#39;articolo:</label>
                <select id="m_variabile_obiettivo" name="variabile_obiettivo">
                    <option value="informare">Informare</option>
                    <option value="analizzare criticamente">Analizzare criticamente</option>
                    <option value="analizzare dettagliatamente">Analizzare dettagliatamente</option>
                    <option value="analizzare le tendenze">Analizzare le tendenze</option>
                    <option value="approfondire">Approfondire</option>
                    <option value="coinvolgere">Coinvolgere</option>
                    <option value="comparare">Comparare</option>
                    <option value="confrontare">Confrontare</option>
                    <option value="consigliare">Consigliare</option>
                    <option value="criticare">Criticare</option>
                    <option value="descrivere l&#39;aspetto positivo di qualcosa">Descrivere l&#39;aspetto positivo di
                        qualcosa
                    </option>
                    <option value="informare">Informare</option>
                    <option value="intrattenere">Intrattenere</option>
                    <option value="narrare">Narrare</option>
                    <option value="persuadere">Persuadere</option>
                    <option value="presentare">Presentare</option>
                    <option value="promuovere">Promuovere</option>
                    <option value="proporre una soluzione">Proporre una soluzione</option>
                    <option value="raccontare">Raccontare</option>
                    <option value="recensire">Recensire</option>
                    <option value="spiegare">Spiegare</option>
                    <option value="spiegare il funzionamento di qualcosa">Spiegare il funzionamento di qualcosa</option>
                    <option value="valutare">Valutare</option>
                    <option value="vendere">Vendere</option>
                </select><br><br>
                <label for="m_variabile_pubblico">Pubblico di destinazione:</label>
                <select id="m_variabile_pubblico" name="variabile_pubblico">
                    <option value="pubblico di non esperti">Pubblico di non esperti</option>
                    <option value="amanti degli animali">Amanti degli animali</option>
                    <option value="appassionati di benessere">Appassionati di benessere</option>
                    <option value="appassionati di cucina">Appassionati di cucina</option>
                    <option value="appassionati di enogastronomia">Appassionati di enogastronomia</option>
                    <option value="appassionati di automobili">Appassionati di automobili</option>
                    <option value="appassionati di moda bellezza">Appassionati di moda o bellezza</option>
                    <option value="appassionati di tecnologia">Appassionati di tecnologia</option>
                    <option value="appassionati di viaggi">Appassionati di viaggi</option>
                    <option value="aspiranti professionisti">Aspiranti professionisti</option>
                    <option value="clienti di una azienda">Clienti di un&#39;azienda</option>
                    <option value="genitori di bambini piccoli">Genitori di bambini piccoli</option>
                    <option value="giovani">Giovani</option>
                    <option value="imprenditori">Imprenditori</option>
                    <option value="potenziali clienti">Potenziali clienti</option>
                    <option value="professionisti settore">Professionisti del settore</option>
                    <option value="pubblico di esperti dellaa materia">Pubblico di esperti</option>
                    <option value="sostenitori dell&#39;ambiente">Sostenitori dell&#39;ambiente</option>
                    <option value="sportivi">Sportivi</option>
                    <option value="utenti di social_media">Utenti di social media</option>
                </select>
                <br><br>

                <label for="m_variabile_H2">Numero Sezioni H2:</label> <select id="m_variabile_H2"
                                                                                                 name="variabile_H2">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                </select>
                <br><br>

                <label for="m_variabile_H3">Numero Sezioni H3:</label> <select id="m_variabile_H3"
                                                                                                 name="variabile_H3">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                </select>
                <br><br>

                <label for="m_variabile_stile">Stile di Scrittura:</label> <select
                    id="m_variabile_stile" name="variabile_stile">
                    <option value="informativo">Informativo</option>
                    <option value="argomentativo">Argomentativo</option>
                    <option value="avventuroso">Avventuroso</option>
                    <option value="comunicativo">Comunicativo</option>
                    <option value="critico">Critico</option>
                    <option value="descrittivo">Descrittivo</option>
                    <option value="didattico">Didattico</option>
                    <option value="documentaristico">Documentaristico</option>
                    <option value="esplicativo">Esplicativo</option>
                    <option value="espositivo">Espositivo</option>
                    <option value="giornalistico">Giornalistico</option>
                    <option value="istruttivo">Istruttivo</option>
                    <option value="medico-scientifico">Medico-scientifico</option>
                    <option value="narrativo">Narrativo</option>
                    <option value="persuasivo">Persuasivo</option>
                    <option value="reportage">Reportage</option>
                    <option value="scientifico">Scientifico</option>
                    <option value="scientifico-tecnologico">Scientifico-tecnologico</option>
                    <option value="tecnico">Tecnico</option>
                </select>
                <br><br>

                <label for="m_variabile_sentiment">Sentiment:</label> <select
                    id="m_variabile_sentiment" name="variabile_sentiment">
                    <option value="neutrale">Neutrale</option>
                    <option value="positivo">Positivo</option>
                    <option value="negativo">Negativo</option>
                    <option value="critico">Critico</option>
                    <option value="coinviolgente">Coinvolgente</option>
                    <option value="ansioso">Ansioso</option>
                    <option value="delusione">Delusione</option>
                    <option value="empatico">Empatico</option>
                    <option value="euforico">Euforico</option>
                    <option value="entusiasta">Entusiasta</option>
                    <option value="indifferente">Indifferente</option>
                    <option value="interessato">Interessato</option>
                    <option value="ironico">Ironico</option>
                    <option value="malinconia">Malinconico</option>
                    <option value="ottimista">Ottimista</option>
                    <option value="preoccupato">Preoccupato</option>
                    <option value="sarcastico">Sarcastico</option>
                    <option value="soddisfatto">Soddisfatto</option>
                    <option value="sorpreso">Sorpreso</option>
                    <option value="speranzoso">Speranzoso</option>
                    <option value="triste">Triste</option>
                </select>
                <br><br>

                <label for="m_variabile_registro">Registro Comunicativo:</label>
                <select id="m_variabile_registro" name="variabile_registro">
                    <option value="formale">Formale</option>
                    <option value="informale">Informale</option>
                    <option value="argomentativo">Argomentativo</option>
                    <option value="avventuroso">Avventuroso</option>
                    <option value="comunicativo">Comunicativo</option>
                    <option value="coinvolgente">Coinvolgente</option>
                    <option value="critico">Critico</option>
                    <option value="descrittivo">Descrittivo</option>
                    <option value="didattico">Didattico</option>
                    <option value="documentaristico">Documentaristico</option>
                    <option value="esplicativo">Esplicativo</option>
                    <option value="espositivo">Espositivo</option>
                    <option value="giornalistico">Giornalistico</option>
                    <option value="informativo">Informativo</option>
                    <option value="istruttivo">Istruttivo</option>
                    <option value="ironico">Ironico</option>
                    <option value="medico-scientifico">Medico-scientifico</option>
                    <option value="narrativo">Narrativo</option>
                    <option value="neutro">Neutro</option>
                    <option value="persuasivo">Persuasivo</option>
                    <option value="reportage">Reportage</option>
                    <option value="scientifico">Scientifico</option>
                    <option value="scientifico-tecnologico">Scientifico-tecnologico</option>
                    <option value="spiritoso">Spiritoso</option>
                    <option value="tecnico">Tecnico</option>
                </select><br><br>
                <input type="checkbox" id="m_puntato" name="puntato"> Includi elenco
                puntato<br><br>
                <input type="checkbox" id="m_numerato" name="numerato"> Includi
                elenco numerato<br><br>
                <input type="checkbox" id="m_fonti" name="fonti"> Includi le
                fonti<br><br> <input type="checkbox" id="m_meta" name="meta"> Scrivi meta
                title/description<br><br>
                <input type="checkbox" id="m_ottimizza" name="ottimizza"> Ottimizza per
                keyword
                principale<br><br>
                <div id="m_opzioni-ottimizzazione" style="display:none"><label for="m_variabile_keyword">Parola chiave:</label>
                    <input type="text" id="m_variabile_keyword" name="variabile_keyword"><br><br> <input type="checkbox"
                                                                                                         id="m_keyword-correlate"
                                                                                                         name="keyword-correlate">
                    Includi keyword correlate<br><br> <input type="checkbox" id="m_entita-correlate"
                                                             name="entita-correlate">
                    Includi entità correlate<br><br></div>
                <input type="checkbox" id="m_informazioni" name="informazioni"> Inserisci informazioni extra<br><br>
                <div id="m_opzioni-informazioni" style="display:none"><label
                        for="m_testo-informazioni"></label>
                    <textarea id="m_testo-informazioni" name="testo-informazioni" rows="3" cols="40"></textarea>
                </div>
                <input type="checkbox" id="m_html" name="html"> Output in HTML<br><br>
            </div>
            <button type="button">Genera Prompt</button>
            <button type="button">Reset</button>
            <button type="button">Copia Prompt</button>
        </fieldset>
    </form>
    <br><br>
    <textarea id="m_output" name="output" rows="14" style="width:100%"></textarea>

</div>


</body>
</html>
