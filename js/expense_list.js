$(document).ready(function () {

    $.ajax({
        url: 'fetch.php',
        type: 'GET',
        dataType: 'json',
        success: function (response) {
            $('#dataload').empty();
            $.each(response, function (pos, data) {
                var datas =
                    "<tr>" +
                    "<td>" + data.id + "</td>" +
                    "<td>" + data.title + "</td>" +
                    "<td>" + data.amount + "</td>" +
                    "<td>" + data.category + "</td>" +
                    "<td>" + data.note + "</td>" +
                    "<td>" + data.created_date + "</td>" +
                    "<td>" +
                    "<a href='update.php?id=" + data.id + "'><i class='bi bi-pencil-square'></i></a>" +
                    "<a href='delete.php?id=" + data.id + "'><i class='bi bi-trash2-fill'></i></a>"
                    + "</td>" +

                    "</tr>";

                $('#dataload').append(datas);
            })
        }
    })
})
