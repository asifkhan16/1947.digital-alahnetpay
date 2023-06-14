$(document).ready(function () {
    $(this).on('click', '#open-right-side-bar', function () {
        $('#right-side-bar').css("transform", "translateX(0px)")
    });
    $(this).on('click', '#open-right-side-bar-new', function () {
        $('#right-side-bar-new').css("transform", "translateX(0px)")
    });

    $(this).on('click', '.right-side-bar-close-btn', function () {
        $('#right-side-bar').css("transform", "translateX(350px)")
        $('#right-side-bar-new').css("transform", "translateX(350px)")
    });

    // search in product table
    $(this).on('keyup', '#product-search-input', function () {
        var value = $(this).val().toLowerCase();
        $("#product-table tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });

    // search add vendors in promocodes
    $(this).on('keyup', '#add_promocode_vendor_search_input', function () {
        var value = $(this).val().toLowerCase();
        $("#add_vendor_promocode div").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });

        // search remove vendors in promocodes
        $(this).on('keyup', '#remove_promocode_vendor_search_input', function () {
            var value = $(this).val().toLowerCase();
            $("#remove_vendor_promocode div").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });

        // search add vendors in swimlanes
        $(this).on('keyup', '#add_swimlane_vendor_search_input', function () {
            var value = $(this).val().toLowerCase();
            $("#add_vendor_swimlane div").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });

         // search remove vendors in swimlanes
         $(this).on('keyup', '#remove_swimlane_vendor_search_input', function () {
            var value = $(this).val().toLowerCase();
            $("#remove_vendor_swimlane div").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });


         // search chats in
     $(this).on('keyup', '#chat_input_search', function () {
       var value = $(this).val().toLowerCase();
       // console.log(value);
        $("#contact li").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });


    // search in modifier group table
    $(this).on('keyup', '#modifier-search-input', function () {
        var value = $(this).val().toLowerCase();
        $("#modifier-table tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });

    // search in modifier modal table
    $(this).on('keyup', '#modifier-modal-search', function () {
        var value = $(this).val().toLowerCase();
        $("#modifier-modal-table tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
    // search in user table
    $(this).on('keyup', '#user-search-input', function () {
        var value = $(this).val().toLowerCase();
        $("#user-table tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });

    // custom alert
    $(this).on('click', '#close-alert-btn', function () {
        $('.custom-alert').addClass('d-none');
    })

}); //end of ready
