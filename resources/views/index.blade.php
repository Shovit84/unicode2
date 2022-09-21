<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Language Translator | CodingNepal</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome CDN Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <div class="text-input">
                <textarea spellcheck="false" id="input" class="from-text" placeholder="Enter text"></textarea>
                <textarea spellcheck="false" readonly class="to-text" id="output" placeholder="Translation"></textarea>
            </div>

        </div>
        <button id="copy">Copy</button>
        <button id="clear">Clear</button>


    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("#input").change(function() {
                let text = $("#input").val();
                $("#output").val(text);
            });
            // Copy

            $("#copy").click(function() {
                var mytxtcontent = $("#output").val();
                navigator.clipboard.writeText(mytxtcontent);

            });
            //Reset
            $('#clear').click(function(){
                $('#input').val("");
                $('#output').val("");

            });
        });
    </script>
</body>

</html>
