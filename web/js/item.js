
/* Ajax find Item Feature Values*/
$('#itemfeature-item_id').change(function () {
    $('#itemfeature-tab').empty();
    var csrfParam = $('meta[name=csrf-param]').attr("content");
    var csrfToken = $('meta[name="csrf-token"]').attr("content");

    var data = {};
    data[csrfParam] = csrfToken;
    data['item_id'] = $(this).val();

    $.ajax({
        url: '',
        type: 'post',
        data: data,
        success: function (response) {
            console.dir(response);
            $('#itemfeature-tab').append('<table class="table table-striped"><th>Feature</th><th>Descriptor</th><th>Value</th><th>Description</th></table>');
            $.each(response, function (index, obj) {
                var row = '<tr><td>'+obj.feature_name+'</td><td>'+obj.feature_descriptor+'</td><td>'+obj.feature_val+'</td><td>'+obj.feature_description+'</td></tr>';
                $('#itemfeature-tab table').append(row);
            });
        }
    });

});


