
function openCity(evt, cityName) {
    var i, x, tablinks;
    x = document.getElementsByClassName("city");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < x.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " w3-red";
}


// Start Ambulance
$(document).ready( function(){
    var $order_name = $('#order-name');
    var $output = $('#output');
    var $select1 = $( '#select1' );
    var	$select2 = $( '#select2' );
    var	$select3 = $( '#select3' );
    var	$options2 = $select2.find( 'option' );
    var	$options3 = $select3.find( 'option' );


    $select1.on( 'change', function(event) {
        $select2.html(
            $options2.filter(
                function() {
                    return $(this).data('section1') == $select1[0].selectedOptions[0].value;
                }
            )
        );
        $select2.trigger('change');
    }).trigger('change');

    $select2.on( 'change', function(event) {
        $select3.html(
            $options3.filter(
                function() {
                    return $(this).val() == $select2[0].selectedOptions[0].value;
                }
            )
        );
    }).trigger('change');

    $order_name.on('keyup', function(){
        $output.val(`utm_source=${$select1[0].selectedOptions[0].innerHTML}_${$select2[0].selectedOptions[0].innerHTML}&utm_medium=${$select3[0].selectedOptions[0].innerHTML}&utm_campaign=${$order_name.val()}`);
    });

});
// End Ambulance