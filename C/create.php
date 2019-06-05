<?php
/**
 * Created by PhpStorm.
 * User: NobleSoft
 * Date: 5/18/2019
 * Time: 1:21 PM
 */?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <script src="../../Jquery/library/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            $("#Save").click(function () {
                var data = new Object();
                data.name = $('#name').val();
                data.description = $('#surname').val();
                data.price = '38.90';
                data.category_id_id = '4';
                //data.created = '18/05/2019';
                $.ajax({
                   // url: 'http://localhost:/a/person',
                    url:'http://localhost/develop/API/product/create.php',
                    type: 'POST',
                    dataType: 'json',
                    data: data,
                    success: function (data, textStatus, xhr) {
                        console.log(data);
                    },
                    error: function (xhr, textStatus, errorThrown) {
                        console.log('Error in Operation');
                    }
                });
            });
        });
    </script>
</head>
<body>
<form id="form1">
    Name :- <input type="text" name="name" id="name" />
    Surname:- <input type="text" name="surname" id="surname" />
    <input type="button" id="Save" value="Save Data" />
</form>
</body>
</html>
