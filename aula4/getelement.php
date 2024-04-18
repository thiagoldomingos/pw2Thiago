<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function mudaCor (novaCor) {
            const elem = document.getElement("Paragrafo");
            elem.system.color = novaCor;
        }
    </script>
</head>
<body>
    <P id="Paragrafo"> textinho</p>
    <button onclick="mudaCor('red');">blue</button>
    <button onclick="mudaCor('orange');">orange</button>
    
    
</body>
</html>