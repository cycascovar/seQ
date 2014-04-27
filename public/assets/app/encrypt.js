        function Encode () {
            input = document.getElementById ("myInput");
            encodedData = window.btoa (input.value);
            var textbox = document.getElementById('myOutput');
            textbox.value =encodedData;

        }
        function Decode () {
            input = document.getElementById ("myInput");
            decodedData = window.atob (input.value);
            var textbox = document.getElementById('myOutput');
            textbox.value =decodedData;

        }