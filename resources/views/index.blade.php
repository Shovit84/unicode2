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
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://www.unicodenepali.com/v3/j.js"></script>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <div class="text-input">
                <textarea spellcheck="false" name="textarea1" class="UnicodeNepali" id="input" class="from-text" placeholder="Enter text"></textarea>
            </div>

        </div>
        <button id="copy">Copy</button>
        <button id="clear">Clear</button>


    </div>

    <script>
        $(document).ready(function() {
            InitializeUnicodeNepali();
            // Copy

            $("#copy").click(function() {
                var mytxtcontent = $("#input").val();
                navigator.clipboard.writeText(mytxtcontent);

            });
            //Reset
            $('#clear').click(function() {
                $('#input').val("");

            });
        });
    </script>

    <script language="javascript" type="text/javascript">

    </script>
</body>

</html>
