$(document).ready(function () {


    $('#example').dataTable({
        "dom": 'rtip',
        "aaSorting": [
            [6, 'asc']
        ],
    });

    var table = $('#example').DataTable();


    $('#example tbody').on('click', 'tr', function () {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        } else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
        var iddd = table.row(this).data();

    });

    $('#button').click(function () {
        var data = table.rows('.selected').data();

        window.open("./alterarfatura.php?par=" + data[0]); // , "_self"

        //            alert(data[0]);


    });
});
