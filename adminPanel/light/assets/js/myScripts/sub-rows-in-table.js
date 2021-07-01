$(document).ready(function() {
    var table = $('#example').DataTable({
        "ajax": "../../light/assets/data/reference-books.json",
        "columns": [{
                "className": 'details-control',
                "orderable": false,
                "data": null,
                "defaultContent": ''
            },
            { "data": "title" },
        ],
        "order": [
            [1, 'asc']
        ]
    });

    // Add event listener for opening and closing details
    $('#example tbody').on('click', 'td.details-control', function() {
        var tr = $(this).closest('tr');
        var row = table.row(tr);

        if (row.child.isShown()) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        } else {
            // Open this row
            row.child(rbFormat(row.data())).show();
            tr.addClass('shown');
        }
    });
});

function rbFormat(d) {
    // `d` is the original data object for the row
    var rows = function(subRefBooks) {
        return subRefBooks.map(function(book){
            return (
                '<tr>' + 
                    '<td>' + book.title + '</td>' +
                '</tr>'
            )
        }).join('');
    }
    console.log(d, 'RBD')
    return (
    '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;" class="subtable">' +
        '<thead>' +
            '<tr>' +
                '<th>Наименование</th>' +
            '</tr>' + 
        '</thead>' +
        '<tbody>' +
          rows(d.subRefBooks) +
        '</tbody>' +
    '</table>');
}