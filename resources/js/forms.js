$(document).ready( function (){
    $('#create_diakrisis_form_ajax').on('submit',function (e){
        e.preventDefault();
        let id_diakrisi = $("#id_diakrisi").val();
        let Diakrisi = $("#Diakrisi").val();
        let Mark_del = $("#Mark_del").val();
        let Group_diakr = $("#Group_diakr").val();

        window.axios.post('/diakrisis_ajax',{
            'id_diakrisi' : id_diakrisi,
            'Diakrisi': Diakrisi,
            'Mark_del' : Mark_del,
            'Group_diakr' : Group_diakr,
        }).then(response =>{
            $('#diakrisisModal').modal('hide');
            let ddl = document.getElementById('id_diakrisi');

            ddl.options[ddl.options.length] = new Option(response.data.Diakrisi, response.data.id_diakrisi, false, true);

        },(error) => {
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
            'Mark_del': Mark_del,

        }).then(response => {
            $('#placeModal').modal('hide');
            let ddl = document.getElementById('id_accedent_place');

            ddl.options[ddl.options.length] = new Option(response.data.Place, response.data.id_accedent_place, false, true);

        }, (error) => {
            console.log(error);

        });
    });
});

$(document).ready( function(){
    $('#create_arxi_form_ajax').on('submit', function(e) {
        e.preventDefault();
        let id_arxi_ekdosis_eggrafon = $("#id_Arxi_ekdosis_eggrafon").val();
        let Arxi = $("#Arxi").val();
        let Tel1 = $("#Tel1").val();
        let Tel2 = $("#Tel2").val();
        let Mark_del = $("#Mark_del").val();

        window.axios.post('/arxi_ajax', {
            'id_Arxi_ekdosis_eggrafon' : id_arxi_ekdosis_eggrafon,
            'Arxi': Arxi,
            'Tel1': Tel1,
            'Tel2': Tel2,
            'Mark_del': Mark_del
        }).then(response => {

            $('#arxiModal').modal('hide');
            let ddl = document.getElementById('id_arxi_ekdosis_eggrafon');

            ddl.options[ddl.options.length] = new Option(response.data.Arxi, response.data.id_arxi_ekdosis_eggrafon, false, true);

        }, (error) => {
            console.log(error);
        });
    });
});

$(document).ready( function(){
    $('#create_companyPathon_form_ajax').on('submit', function(e) {
        e.preventDefault();
        let id_company = $("#id_company").val();
        let comp_name = $("#comp_name").val();
        let afm = $("#afm").val();
        let address = $("#address").val();
        let tk = $("#tk").val();
        let Fax = $("#Fax").val();
        let Email = $("#Email").val();
        let Mark_del = $("#Mark_del").val();

        window.axios.post('/company_ajax', {
            'id_company' : id_company,
            'comp_name': comp_name,
            'afm': afm,
            'address': address,
            'tk': tk,
            'Fax': Fax,
            'Email': Email,
            'Mark_del': Mark_del
        }).then(response => {

            $('#compPathonModal').modal('hide');
            let ddl = document.getElementById('id_company_pathon');

            ddl.options[ddl.options.length] = new Option(response.data.comp_name, response.data.id_company_pathon, false, true);

        }, (error) => {
            console.log(error);
        });
    });
});

$(document).ready( function(){
    $('#create_companyPathonReal_form_ajax').on('submit', function(e) {
        e.preventDefault();
        let rid_company = $("#rid_company").val();
        let rcomp_name = $("#rcomp_name").val();
        let rafm = $("#rafm").val();
        let raddress = $("#raddress").val();
        let rtk = $("#rtk").val();
        let rFax = $("#rFax").val();
        let rEmail = $("#rEmail").val();
        let rMark_del = $("#rMark_del").val();

        window.axios.post('/companyReal_ajax', {
            'id_company' : rid_company,
            'comp_name': rcomp_name,
            'afm': rafm,
            'address': raddress,
            'tk': rtk,
            'Fax': rFax,
            'Email': rEmail,
            'Mark_del': rMark_del
        }).then(response => {

            $('#compPathonRealModal').modal('hide');
            let ddl = document.getElementById('id_company_pathon_real');

            ddl.options[ddl.options.length] = new Option(response.data.comp_name, response.data.id_company_pathon_real, false, true);

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
        }).then(response => {

            $('#nomoiModal').modal('hide');
            let ddl = document.getElementById('id_nomoi');

            ddl.options[ddl.options.length] = new Option(response.data.Nomos, response.data.id_nomoi, false, true);

        }, (error) => {
            console.log(error);
        });
    });
});

$(document).ready( function(){
    $('#create_markes_form_ajax').on('submit', function(e) {
        e.preventDefault();
        let id_markes = $("#id_markes").val();
        let marka = $("#marka").val();
        let Mark_del = $("#Mark_del").val();

        window.axios.post('/markes_ajax', {
            'id_markes' : id_markes,
            'marka': marka,
            'Mark_del': Mark_del
        }).then(response => {

            $('#markesModal').modal('hide');
            var ddl = document.getElementById('id_markes');

            ddl.options[ddl.options.length] = new Option(response.data.marka, response.data.id_markes, false, true);

        }, (error) => {
            console.log(error);
        });
    });
});

$(document).ready( function(){
    $('#create_department_form_ajax').on('submit', function(e) {
        e.preventDefault();
        let id_department = $("#id_department").val();
        let dept = $("#dept").val();
        let Mark_del = $("#Mark_del").val();

        window.axios.post('/department_ajax', {
            'id_department' : id_department,
            'dept': dept,
            'Mark_del': Mark_del
        }).then(response => {

            $('#departmentsModal').modal('hide');
            var ddl = document.getElementById('id_department');

            ddl.options[ddl.options.length] = new Option(response.data.dept, response.data.id_department, false, true);

        }, (error) => {
            console.log(error);
        });
    });
});

$(document).ready( function(){
    $('#create_expense_form_ajax').on('submit', function(e) {
        e.preventDefault();
        let id_expenses = $("#id_expenses").val();
        let eksodo = $("#eksodo").val();
        let type_eksodo = $("#type_eksodo").val();
        let Where_use = $("#Where_use").val();
        let flag = $("#flag").val();
        let Mark_del = $("#Mark_del").val();

        window.axios.post('/expense_ajax', {
            'id_expenses' : id_expenses,
            'eksodo': eksodo,
            'type_eksodo': type_eksodo,
            'Where_use': Where_use,
            'flag': flag,
            'Mark_del': Mark_del
        }).then(response => {

            $('#expensesModal').modal('hide');
            var ddl = document.getElementById('id_expenses');

            ddl.options[ddl.options.length] = new Option(response.data.eksodo, response.data.id_expenses, false, true);

        }, (error) => {
            console.log(error);
        });
    });
});
$(document).ready( function(){
    $('#create_companyYpaitiou_form_ajax').on('submit', function(e) {
        e.preventDefault();
        let yid_company = $("#yid_company").val();
        let ycomp_name = $("#ycomp_name").val();
        let yafm = $("#yafm").val();
        let yaddress = $("#yaddress").val();
        let ytk = $("#ytk").val();
        let yFax = $("#yFax").val();
        let yEmail = $("#yEmail").val();
        let yMark_del = $("#yMark_del").val();

        window.axios.post('/companyYpait_ajax', {
            'id_company' : yid_company,
            'comp_name': ycomp_name,
            'afm': yafm,
            'address': yaddress,
            'tk': ytk,
            'Fax': yFax,
            'Email': yEmail,
            'Mark_del': yMark_del
        }).then(response => {

            $('#compYpaitiouModal').modal('hide');
            var ddl = document.getElementById('id_company_ypaitiou');

            ddl.options[ddl.options.length] = new Option(response.data.comp_name, response.data.id_company, false, true);

        }, (error) => {
            console.log(error);
        });
    });
});


