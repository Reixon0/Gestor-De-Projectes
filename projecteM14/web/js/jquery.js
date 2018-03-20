$(document).ready(function(){
$('.marco-tasca a').click(function (e) {
    $(this).parent().addClass('changebg').siblings().removeClass('changebg');
});
});

