/**
 * Created by PhpStorm.
 * User: NobleSoft
 * Date: 5/18/2019
 * Time: 9:13 PM
 */
$(document).ready(function (){
    $(document).on('submit', '#create-product-form', function(){
        var form_data=JSON.stringify($(this).serializeObject());
        // submit form data to api
        $.ajax({
            url: "http://localhost/api/product/create.php",
            type : "POST",
            contentType : 'application/json',
            data : form_data,
            success : function(result) {
                // product was created, go back to products list
                showProducts();
            },
            error: function(xhr, resp, text) {
                // show error to console
                console.log(xhr, resp, text);
            }
        });
        return false;

    });
})
