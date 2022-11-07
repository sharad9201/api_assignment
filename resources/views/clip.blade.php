<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="source" contenteditable="true">Copy text from this box.</div>
    <div class="target" contenteditable="true">And paste it into this one.</div>


    <script>
        const source = document.querySelector('div.source');

        source.addEventListener('copy', (event) => {
            const selection = document.getSelection();
            event.clipboardData.setData('text/plain', selection.toString().toUpperCase());
            event.preventDefault();
        });
    </script>
</body>

</html>
