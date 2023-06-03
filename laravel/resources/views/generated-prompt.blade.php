<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <META http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</head>
<body>

<div>
    <div class="container">
        <h2>Prompt generato</h2>
        <p>Applica eventuali modifiche e copia nella clipboard!</p>
        <div class="mt-3">
            <label for="exampleFormControlTextarea1" class="form-label">Prompt generato</label>
            <textarea class="form-control" id="promptTextarea" rows="6">{{$prompt}}</textarea>
        </div>
        <div class="mt-3">
            <button type="button" class="btn" onclick="copia()">Copia nella clipboard</button>
        </div>
    </div>
</div>
<script type="application/javascript">
    function copia() {
        // Get the text field
        let copyText = document.getElementById("promptTextarea");
        copyText.select();

        // Copy the text inside the text field
        document.execCommand("copy");

        // Alert the copied text
        alert("Testo copiato nella clipboard");
    }
</script>
</body>
</html>
