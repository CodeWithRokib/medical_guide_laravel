<script src="{{ asset('frontEndAsset') }}/js/vendor/jquery-1.12.4.min.js"></script>
<script src="{{ asset('frontEndAsset') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('frontEndAsset') }}/js/owl.carousel.min.js"></script>
<script src="{{ asset('frontEndAsset') }}/js/isotope.pkgd.min.js"></script>
<script src="{{ asset('frontEndAsset') }}/js/jquery.meanmenu.js"></script>
<script src="{{ asset('frontEndAsset') }}/js/imagesloaded.pkgd.min.js"></script>
<script src="{{ asset('frontEndAsset') }}/js/jquery.counterup.min.js"></script>
<script src="{{ asset('frontEndAsset') }}/js/waypoints.min.js"></script>
<script src="{{ asset('frontEndAsset') }}/js/slick.min.js"></script>
<script src="{{ asset('frontEndAsset') }}/js/jquery.nav.js"></script>
<script src="{{ asset('frontEndAsset') }}/js/ajax-mail.js"></script>
<script src="{{ asset('frontEndAsset') }}/js/plugins.js"></script>
<script src="{{ asset('frontEndAsset') }}/js/main.js"></script>
<script src="{{ asset('frontEndAsset') }}/js/new-style.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"
    integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    @if (session('success'))
        iziToast.success({
            title: 'Success',
            message: '{{ session('success') }}',
            position: 'topRight'
        });
    @endif

    @if (session('error'))
        iziToast.error({
            title: 'Error',
            message: '{{ session('error ') }}',
            position: 'topRight'
        });
    @endif
</script>
</body>

</html>
