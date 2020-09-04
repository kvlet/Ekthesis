$(document).ready( function(){
    $('#create_diakrisis_form_ajax').on('submit', function(e) {
        e.preventDefault();
         let id_diakrisi = $("#id_diakrisi").val();
         let Diakrisi = $("#Diakrisi").val();
         let Mark_del = $("#Mark_del").val();
         let Group_diakr = $("#Group_diakr").val();

        window.axios.post('/diakrisis_ajax', {
            'id_diakrisi' : id_diakrisi,
            'Diakrisi': Diakrisi,
            'Mark_del': Mark_del,
            'Group_diakr': Group_diakr
        }).then(response => {
            $('#diakrisisModal').modal('hide');
            var ddl = document.getElementById('id_diakrisi');

            ddl.options[ddl.options.length] = new Option(response.data.Diakrisi, response.data.id_diakrisi, false, true);

        }, (error) => {
            console.log(error);

        });
    });
});

$(document).ready( function(){
    $('#create_place_form_ajax').on('submit', function(e) {
        e.preventDefault();
        let id_accedent_place = $("#id_accedent_place").val();
        let Place = $("#Place").val();
        let Mark_del = $("#Mark_del").val();

        window.axios.post('/place_ajax', {
            'id_accedent_place' : id_accedent_place,
            'Place': Place,
            'Mark_del': Mark_del
        }).then((response) => {

            $('#placeModal').modal('hide');
            var ddl = document.getElementById('id_accedent_place');

            ddl.options[ddl.options.length] = new Option(response.data.Accedent_place, response.data.id_accedent_place, false, true);

        }, (error) => {
            console.log(error);
        });
    });
});

$(document).ready( function(){
    $('#create_nomoi_form_ajax').on('submit', function(e) {
        e.preventDefault();
        let id_nomoi = $("#id_nomoi").val();
        let Nomos = $("#Nomos").val();
        let Mark_del = $("#Mark_del").val();

        window.axios.post('/nomoi_ajax', {
            'id_nomoi' : id_nomoi,
            'Nomos': Nomos,
            'Mark_del': Mark_del
        }).then((response) => {

            $('#nomoiModal').modal('hide');
            var ddl = document.getElementById('id_nomoi');

            ddl.options[ddl.options.length] = new Option(response.data.Nomos, response.data.id_nomoi, false, true);

        }, (error) => {
            console.log(error);
        });
    });
});
