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

                $.each(response.data.sub_categories, function (key, item) {
                    sub_category.append('<option value="' + item.id + '">' + item.name + '</option>');
                });
            } else {
                alert(response.message);
            }
        }
    })
})

