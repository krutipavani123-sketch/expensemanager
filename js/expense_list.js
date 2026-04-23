$(document).ready(function () {
    $('#table').on('click', function () {
        $.ajax({
            url: 'fetch.php',
            type: 'GET',
            datatype: 'json',
            success: function (response) {
                $('#dataload').empty();
                $.each(response, function (pos, data) {
                    var datas =
                        "<tr>" +
                        "<td>" + data.id + "</td>"
                    "<td>" + data.expense + "</td>"
                    "<td>" + data.amount + "</td>"
                    "<td>" + data.category + "</td>"
                    "<td>" + data.note + "</td>"
                    "<td>" + data.created_date + "</td>"
                    "<td>" +
                                <a href="update.php" data-id={$row['id']} ><i class="bi bi-pencil-square"></i></a>
                                <a href="delete.php" data-id={$row['id']}><i class="bi bi-trash2-fill"></i></a>
                        + "</td>"

                    "</tr>";

                    datas.append(datas);
                })
            }
        })
    })
})