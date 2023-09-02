$(document).ready(function(){
    $('#inputemail').change(function(){
        var email = $("#inputemail").val();

        if (email == 'tata@gmail.com'){
            $("#inputnama").val('tata');
            $("#inputipk").val('3.4');
            $("#tomboldaftar").prop('disabled',false);
        }else if(email == 'wati@gmail.com'){
            $('#inputnama').val('wati');
            $('#inputipk').val('2.9');
            $('#beasiswa').prop('disabled',true);
            $('#customfile').prop('disabled',true);
            $('#tomboldaftar').prop('disabled',true);

        }else{
            $('#warning').modal('show');
            $('#beasiswa').prop('disabled',true);
            $('#customfile').prop('disabled',true);
            $('#tomboldaftar').prop('disabled',true);
        }
    })
});