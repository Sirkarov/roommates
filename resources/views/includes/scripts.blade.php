<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/js/tether.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.bxslider.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/lobipanel.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.accordion.js')}}"></script>
<script src="{{asset('assets/js/jquery.slimscroll.min.js')}}"></script>
<!-- Tinymce-JS -->
<script src={{asset('assets/js/tinymce/tinymce.min.js')}}></script>
<!-- Google-map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmiJjq5DIg_K9fv6RE72OY__p9jz0YTMI"></script>
<script src="js/custom.js"></script>
<script type='text/javascript'>
    var element = $(this);
    var map;
    function initialize(myCenter,selector) {
        var marker = new google.maps.Marker({
            position: myCenter
        });
        var mapProp = {
            center: myCenter,
            zoom: 8,
            draggable: false,
            scrollwheel: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(selector, mapProp);
        marker.setMap(map);
    };

    $('#post_listing_modal_one').on('shown.bs.modal', function(e) {
        var element = $(e.relatedTarget);
        var data = element.data("lat").split(',')
        initialize(new google.maps.LatLng(data[0], data[1]),document.getElementById("listing_post_map_one"));
        google.maps.event.trigger(map, 'resize');
    });
    $('#post_listing_modal_two').on('shown.bs.modal', function(e) {
        var element = $(e.relatedTarget);
        var data = element.data("lat").split(',')
        initialize(new google.maps.LatLng(data[0], data[1]),document.getElementById("listing_post_map_two"));
        google.maps.event.trigger(map, 'resize');
    });
    $('#post_listing_modal_three').on('shown.bs.modal', function(e) {
        var element = $(e.relatedTarget);
        var data = element.data("lat").split(',')
        initialize(new google.maps.LatLng(data[0], data[1]),document.getElementById("listing_post_map_three"));
        google.maps.event.trigger(map, 'resize');
    });
</script>