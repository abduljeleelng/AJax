<?php
/**
 * Created by PhpStorm.
 * User: NobleSoft
 * Date: 5/18/2019
 * Time: 12:29 PM
 */
?>
<html>
<head>
    <title>jQuery post JSON data using .post()</title>

</head>
<body>

<h1>jQuery post JSON data using .post() method</h1>
<div>Click the button below to get response.</div>

<!-- our form -->
<input type='button' value='Post JSON' id='postJson' />

<!-- where the response will be displayed -->
<div id='response'></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js "></script>
<script>
    $(document).ready(function(){

        $('#postJson').click(function(){

            // show that something is loading
            $('#response').html("<b>Loading response...</b>");

            /*
             * 'post_receiver.php' - where you will pass the form data
             * $(this).serialize() - to easily read form data
             * function(data){... - data contains the response from post_receiver.php
             */
            $.post('post_receiver.php', { user_id: "143", username: "ninjazhai", website: "https://nsst.com.ng/" }, function(data){

                // show the response
                $('#response').html(data);

            }).fail(function() {

                // just in case posting your form failed
                alert( "Posting failed." );

            });

            // to prevent refreshing the whole page page
            return false;

        });
    });
</script>

</body>
</html>
