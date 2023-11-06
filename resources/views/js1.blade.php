<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            function changeText() {
            var span = document.getElementById("output");
            var textBox = document.getElementById("textbox");
            textBox.style.color = "red"
            textBox.style.fontSize = "200px"
            span.innerHTML = textBox.value;
        }

        </script>

    </head>
    <body>
        <div class="container">
            <script>
                function showAlert(){
                    alert("Halo semua");
                }
            </script>
            <button class="btn btn-danger" onclick="showAlert();">Klik disini</button>
        </div>
        <button onclick="changeText();" class="btn btn-warning">Click me!</button>
        <span id="output">replace me</span>
        <input id="textbox" type="text" class="form-control"/>
    </body>
</html>
