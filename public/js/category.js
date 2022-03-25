$(function () {
    $(document).on("change", "#category", function () {
        let category_id = $(this).val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "/fetch-sub-categories",
            method: 'POST',
            data: {'category_id': category_id},
            dataType: 'json',
            success: function (response) {
                let data_length = response.data.length;
                for (let i = 0; i < data_length; i++) {
                    $("#sub_category").append('<option value="' + response.data[i]["id"] + '">' + response.data[i]["name"] + '</option>');
                }
            }
        })
    })
});
