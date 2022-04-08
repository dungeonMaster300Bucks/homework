<!DOCTYPE html>
    <html>
        <head>
            <script src="../bootstrap/js/jquery-3.6.0.min.js">
            </script>
            <script>
            $(document).keypress(function () {
                var back = ["#ff0000","blue","gray" , "yellow", "white", "green", "pink", "black", "orange"];
                var rand = back[Math.floor(Math.random() * back.length)];
                $("input").focus(function () {
                    $(this).css('background',rand);
                    });
                
                $("input").blur(function () {
                    $(this).css('background',rand);
                    });
            });
            </script>
        </head>
        <body>
            Name: <input type="text" name="fullname"><br>
            Email: <input type="text" name="email">
        </body>
    </html>
