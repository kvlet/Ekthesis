$(document).ready( function(){
    $('#create_diakrisis_form').on('submit', function(e) {
        e.preventDefault();
        let id_diakrisis = $("#id_diakrisis").val();
        let Diakrisi = $("#Diakrisi").val();
        let Mark_del = $("#Mark_del").val();
        let Group_diakr = $("#Group_diakr").val();

        window.axios.post('/diakrisis', {
            'id_diakrisi' : id_diakrisis,
            'Diakrisi': Diakrisi,
            'Mark_del': Mark_del,
            'Group_diakr': Group_diakr
        }).then(response => {

            let data = response.data;

            let  row = "<td>" + data.id_diakrisi + "</td>" + "<td>" + data.Diakrisi + "</td>" + "<td>" + data.Mark_del + "</td>" + "<td" + data.Group_diakr  + "</td>";

            let rowElement = document.createElement("tr");

            $('#create_diakrisis_form table tbody').append(rowElement);

            $('#create_diakrisis_form table tbody').append(last('tr').html(row));

        });
    });
});

$(document).ready( function(){
    $('#create_nomoi_form').on('submit', function(e) {
        e.preventDefault();
        let id_nomoi = $("#id_nomoi").val();
        let Nomos = $("#Nomos").val();
        let Mark_del = $("#Mark_del").val();



        window.axios.post('/nomoi', {
            'id_nomoi' : id_nomoi,
            'Nomos': Nomos,
            'Mark_del': Mark_del
        }).then(response => {

            let data = response.data;

            let  row = "<td>" + data.id_nomoi + "</td>" + "<td>" + data.Nomos + "</td>" + "<td>" + data.Mark_del + "</td>";

            let rowElement = document.createElement("tr");

            $('#create_nomoi_form table tbody').append(rowElement);

            $('#create_nomoi_form table tbody').append(last('tr').html(row));

        });
    });
});
