<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <script>
        let device = await navigator.bluetooth.requestDevice({
            filters: [{
                services: ["heart_rate"]
            }],
        });
        let gatt = await device.gatt.connect();
        let service = await gatt.getPrimaryService("heart_rate");
        let characteristic = await service.getCharacteristic("heart_rate_measurement");
        if (characteristic.properties.notify) {
            characteristic.addEventListener(
                "characteristicvaluechanged",
                async (event) => {
                    console.log(`Received heart rate measurement: ${event.target.value}`);
                }
            );
            await characteristic.startNotifications();
        }
    </script>
</body>

</html>
