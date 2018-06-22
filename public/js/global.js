
$(document).ready(function(){

    $('#fname').blur(function(){
        if (this.value) {
            $('#tbl-matches tbody tr').remove();
            $('#tbl-matches tbody').append('<tr><td colspan="2"><img class="loading-img" src="/images/loading.gif"></td></tr>');
            $.ajax({
            url: "/records/search/" + this.value, 
            success: function(result){
                $('#tbl-matches tbody tr').remove();
                if (result) {
                    $.each($.parseJSON(result), function(key,val){
                        $('#tbl-matches tbody').append('<tr><td>'+val.first_name+' '+val.last_name+', '+val.address+'</td><td><button id="'+val.id+'"><span class="glyphicon glyphicon-check"></span></button></td></tr>');
                    });
                }
                else {
                    $('#tbl-matches tbody').append('<tr><td colspan="2">No match found. Try again.</td></tr>');
                }
            }});
        }
    });

    $('#btn-add-service').click(function(){
        addServices();
    });

    $('body').on('click','span.btn-rem-serv',function(){
        $(this).parents('div.services-div-cont').remove();
    })

});

function addServices()
{
    var selId = 'services-'+ ($('select[name="services"]').length + 1);
    $('div.services-div-cont:last').after('<div class="services-div-cont">'+
                                            '<br><div class="input-group serv-sel-cont">'+
                                            '<select name="services" id="'+selId+'" name="services-3" class="form-control height-33px">'+
                                                '<option value="opt0">-- Select service --</option>'+
                                                '<option value="opt1">Complete Wash</option>'+
                                                '<option value="opt2">Body Wash</option>'+
                                                '<option value="opt3">Hand Wax</option>'+
                                                '<option value="opt4">Vacuum</option>'+
                                                '<option value="opt5">Under Wash</option>'+
                                                '<option value="opt6">Engine Wash</option>'+
                                            '</select>'+
                                            '<span class="btn-rem-serv input-group-addon"><i class="glyphicon glyphicon-minus"></i></span>'+
                                            '</div></div>');
}