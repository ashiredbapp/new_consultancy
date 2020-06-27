

 function loadModal(url, flag) {
    $('#info_modal').modal({
        show: true
    });
    if (flag == 0)
        $('#info_modal').find('.modal-title').text('Go Live Dependency')
    else
        $('#info_modal').find('.modal-title').text('360 view')
    $('.infoTable').html(
        "<img src='{{asset('assets/global/img/loading-spinner-grey.gif')}}' alt='' class='loading'><span> &nbsp;&nbsp;Loading... </span>"
    );
    $('.infoTable').load(url, function (response, status, xhr) {
        $('.infoTable').html('');
        if (status == 'success')
            $('.infoTable').html(response);
        else
            $('.infoTable').html('<h4>Error Loading Info</h4>');
            $('.popovers').popover();

    });
}
function loadhistory(url)
{
     $('#info_modal').modal({
        show: true
    });
    
    $('#info_modal').find('.modal-title').text('History')

    $('.infoTable').html(
        "<img src='{{asset('assets/global/img/loading-spinner-grey.gif')}}' alt='' class='loading'><span> &nbsp;&nbsp;Loading... </span>"
    );
    $('.infoTable').load(url, function (response, status, xhr) {
        $('.infoTable').html('');
        if (status == 'success')
        {
            $('.infoTable').html(response);
            $('#history_div').html();
        }
        else
            $('.infoTable').html('<h4>Error Loading Info</h4>');
    });
}