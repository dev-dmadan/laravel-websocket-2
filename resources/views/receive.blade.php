<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Receive Websocket</title>
</head>
<body>
    <p>Receive Websocket:</p>
    <ul id="receive_websocket"></ul>

    @vite(['resources/js/app.js'])
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const ul = document.querySelector('#receive_websocket')
            
            Echo.channel('TestChannel')
            .listen('TestEvent', function (e) {
                console.log({e})

                const list = document.createElement('li')
                list.innerHTML = 'OK'

                ul.appendChild(list)
            })
        })
    </script>
</body>
</html>