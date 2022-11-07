<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <img src="https://cdn.dribbble.com/users/2769276/screenshots/9515081/__2x_4x.png" alt="Cute kitten.">
    <p>this is a cat</p>

    <script>
        document.addEventListener("copy", async (e) => {
            e.preventDefault();
            try {
                let clipboardItems = [];
                clipboardItems.push(
                    new ClipboardItem({
                        [blob.type]: blob,
                    })
                );
                await navigator.clipboard.write(clipboardItems);
                console.log("Image copied, text ignored.");
            } catch (err) {
                console.error(err.name, err.message);
            }
        });
    </script>
</body>

</html>
