$(document).on("change", "#category", function () {
    let category_id = $(this).val();

    let form_data = new FormData();
    form_data.append("category_id", category_id);

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: "/fetch-sub-categories",
        method: 'POST',
        data: form_data,
        dataType: 'json',
        processData: false,
        contentType: false,
        success: function (response) {
            if (response.status === "success") {
                let sub_category = $("#sub_category");

                sub_category.children('option:not(:first)').remove();

                $.each(response.data.sub_categories, function (key, item) {
                    sub_category.append('<option value="' + item.id + '">' + item.name + '</option>');
                });
            } else {
                alert(response.message);
            }
        }
    })
})
$(document).on("change", "#sub_category", function () {
    let sub_category_id = $(this).val();

    let form_data = new FormData();
    form_data.append("sub_category_id", sub_category_id);

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: "/fetch-items",
        method: 'POST',
        data: form_data,
        dataType: 'json',
        processData: false,
        contentType: false,
        success: function (response) {
            if (response.status === "success") {
                let item = $("#item");

                item.children('option:not(:first)').remove();

                $.each(response.data.items, function (key, i) {
                    item.append('<option value="' + i.id + '">' + i.name + '</option>');
                });
            } else {
                alert(response.message);
            }
        }
    })
})

