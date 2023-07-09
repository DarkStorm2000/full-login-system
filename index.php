

<?php

include 'config.php';

session_start();
$select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
$user_id = $_SESSION['user_id'];
$select_profile->execute([$user_id]);
$fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);

$name = $fetch_profile['name'];

if (!isset($user_id)) {
   header('location:login.php');
}


?>


<!DOCTYPE html>
<html id="html" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	<title>vidios</title>
	<link rel="stylesheet" href="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/jquery-ui.min.css">
	<link rel="stylesheet" href="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/jquery.tagit.css">
	<link rel="stylesheet" href="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/font-awesome.min.css">
	<link rel="stylesheet" href="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/twemoji-awesome.css">
	<link rel="stylesheet" href="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/bootstrap-glyphicons.css">
	<link rel="stylesheet" href="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/bootstrap.min.css">
	<link rel="stylesheet" href="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/sweetalert2.min.css">
	<link rel="stylesheet" href="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/notifIt.min.css">
	<link rel="stylesheet" href="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/style.css" id="style-css">
	<link rel="stylesheet" href="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/night-mode.css" class="night-mode-css">
	<link rel="stylesheet" href="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/custom.style.css">
	<link href="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/material.css" rel="stylesheet" type="text/css">
	<link href="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/roboto.css" rel="stylesheet">
	<script src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/jquery-3.min.js"></script>
	<script src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/jquery-ui.min.js"></script>
	<script type="text/javascript" src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/jquery.form.min.js"></script>
	<script type="text/javascript" src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/tag-it.min.js"></script>
	<link rel="stylesheet" href="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/mediaelementplayer.min.css">

	<script src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/sweetalert2.js"></script>
	<script src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/notifIt.min.js"></script>
	<link href="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/bootstrap-toggle.min.css" rel="stylesheet">
	<link rel="stylesheet" href="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/bootstrap-select.min.css">
	<script src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/bootstrap-select.min.js"></script>
	<link rel="stylesheet" href="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/owl.carousel.min.css">
	<script src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/owl.carousel.min.js"></script>
	<script src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/speed.min.js"></script>
	<link rel="stylesheet" href="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/speed.min.css">
	<script src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/speed-i18n.js"></script>
	<script src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/jump-forward.min.js"></script>
	<link rel="stylesheet" href="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/jump-forward.min.css">
	<script src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/ads.min.js"></script>
	<link rel="stylesheet" href="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/ads.min.css">
	<script src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/ads-i18n.js"></script>
	<script src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/ads-vast-vpaid.js"></script>
	<script src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/quality.min.js"></script>
	<link rel="stylesheet" href="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/quality.min.css">
	<script src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/facebook.min.js"></script>
	<script src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/fingerprint2.js"></script>
	<script src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/emojionearea.js"></script>
	<link rel="stylesheet" type="text/css" href="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/emojionearea.min.css">
	<link rel="stylesheet" href="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/bootstrap-colorpicker.min.css">
	<script src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/bootstrap-colorpicker.min.js"></script>
	<script src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/v1.js"></script>
	<script type="text/javascript" src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/2co.min.js"></script>
	<script src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/socket.io.js"></script>
	<link rel="stylesheet" href="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/swiper-bundle.min.css">
	<script src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/swiper-bundle.min.js"></script>
	<script src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/plupload.full.min.js"></script>
	<script>
		function RunLiveAgora(channelName, DIV_ID, token) {
			var agoraAppId = '9471c47b589c4a35abf3f7338ef18629';
			var token = token;

			var client = AgoraRTC.createClient({
				mode: 'live',
				codec: 'vp8'
			});
			client.init(agoraAppId, function() {


				client.setClientRole('audience', function() {}, function(e) {});

				client.join(token, channelName, 0, function(uid) {}, function(err) {});
			}, function(err) {});

			client.on('stream-added', function(evt) {
				var stream = evt.stream;
				var streamId = stream.getId();

				client.subscribe(stream, function(err) {});
			});
			client.on('stream-subscribed', function(evt) {
				var video_id = $('#video-id').val();
				if (!video_id) {
					return false;
				}
				$('#' + DIV_ID).html('<div class="wow_liv_counter"><span id="live_word_' + video_id + '">Live</span> <span id="live_count_' + video_id + '"> 0</span></div><div id="live_post_comments_' + video_id + '" class="wow_liv_comments_feed user-comments"></div>');
				var remoteStream = evt.stream;
				remoteStream.play(DIV_ID);
				$('#player_' + remoteStream.getId()).find('video').css('position', 'relative');
			});
		}
		var site_url = '#';

		function PT_Ajax_Requests_File() {
			return site_url + '/';
		}

		function PT_Page_Loading_File() {
			return site_url + '/page_loading.php';
		}

		function OpenShareWindow(url, windowName) {
			newwindow = window.open(url, windowName, 'height=600,width=800');
			if (window.focus) {
				newwindow.focus();
			}
			return false;
		}

		function getCookie(name) {
			var value = "; " + document.cookie;
			var parts = value.split("; " + name + "=");
			if (parts.length == 2) return parts.pop().split(";").shift();
		}
	</script>
	<script src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/header.js"></script>
	<script src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/ima3.js" type="text/javascript"></script>
	<script src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/agora.js"></script>
	<script type="text/javascript">
		window.UpdateChatU = 0;
		$(document).on('click', 'a[data-load]', function(event) {
			if ($('#live_post_id').length > 0) {
				DeleteLive();
				window.location = $(this).attr('href');
				return false;
			}
			$('#bar_loading').show();
			event.preventDefault();
			var url = $(this).attr('data-load');
			if ($('video').length > 0) {
				$('video')[0].pause();
			}
			$.ajax({
					url: PT_Page_Loading_File() + url,
					type: 'GET',
					dataType: 'html'
				})
				.done(function(data_html) {
					if ($(data_html).filter('#json-data').length > 0) {
						if (typeof(ads_) != 'undefined') {
							clearInterval(ads_);
						}

						data = JSON.parse($(data_html).filter('#json-data').val());

						(data.page == 'register' ||
							data.page == 'login' ||
							data.page == 'shorts' ||
							data.page == 'latest' ||
							data.page == 'top' ||
							data.page == 'trending' ||
							data.page == 'stock' ||
							data.page == 'upload-video' ||
							data.page == 'import-video' ||
							data.page == 'messages') ? $('#header_ad_').addClass('hidden'): $('#header_ad_').removeClass('hidden');

						(data.page == 'home') ? $('#home_menu_').addClass('active'): $('#home_menu_').removeClass('active');
						(data.page == 'history') ? $('#history_menu_').addClass('active'): $('#history_menu_').removeClass('active');
						(data.page == 'articles') ? $('#articles_menu_').addClass('active'): $('#articles_menu_').removeClass('active');
						(data.page == 'latest') ? $('#latest_menu_').addClass('active'): $('#latest_menu_').removeClass('active');
						(data.page == 'trending') ? $('#trending_menu_').addClass('active'): $('#trending_menu_').removeClass('active');
						(data.page == 'paid-videos') ? $('#paid_videos_').addClass('active'): $('#paid_videos_').removeClass('active');
						(data.page == 'top') ? $('#top_menu_').addClass('active'): $('#top_menu_').removeClass('active');
						(data.page == 'movies') ? $('#movies_menu_').addClass('active'): $('#movies_menu_').removeClass('active');
						(data.page == 'popular_channels') ? $('#popular_channels_menu_').addClass('active'): $('#popular_channels_menu_').removeClass('active');
						(data.page == 'stock') ? $('#stock_menu_').addClass('active'): $('#stock_menu_').removeClass('active');
						(data.page == 'shorts') ? $('#shorts_menu_').addClass('active'): $('#shorts_menu_').removeClass('active');


						window.history.pushState({
							state: 'new'
						}, '', data.url);
						$('#container_content').html(data_html);
						$('meta[name=title]').attr('content', data.title);
						$('meta[name=description]').attr('content', data.description);
						$('meta[name=keywords]').attr('content', data.keyword);
						$('title').text(data.title);
						var main_container_class = 'main-content ';
						(data.page != 'login') ? main_container_class += ' container ': main_container_class += ' welcome-page ';
						if (data.is_movie == true) {
							$('.toggle-mode').hide();
							$('.logo-img img').attr('src', '#');
							(data.page == 'watch') ? main_container_class += ' movies-container ': main_container_class += ' ';
						} else {
							if ($('#toggle-mode').prop("checked") === true) {
								$('.logo-img img').attr('src', '#');
							} else {
								$('.logo-img img').attr('src', '#');
							}
							$('.toggle-mode').show();
							(data.page == 'watch') ? main_container_class += ' watch-container ': main_container_class += ' ';
						}

						(data.page == 'movie') ? main_container_class += ' movies-container ': main_container_class += ' ';
						(data.page == 'go_pro') ? main_container_class += ' p-relative ': main_container_class += ' ';
						(data.page == 'home') ? main_container_class += ' home-container ': main_container_class += ' ';
						$('#main-container').attr('class', main_container_class);

						(data.page == 'watch') ? $('#header_change_2').attr('class', 'container watch-container'): $('#header_change_2').attr('class', 'container');
						(data.page == 'watch') ? $('#header_change_3').attr('class', 'container watch-container'): $('#header_change_3').attr('class', 'container');
					} else {
						window.location.href = site_url + '/login';
					}
				})
				.fail(function() {
					if (typeof(getCookie('user_id')) == 'undefined') {
						window.location.href = site_url + '/login';
					} else {
						window.location.href = site_url + '/404';
					}
				})
				.always(function() {
					window.scrollTo(0, 0);
					$('#bar_loading').delay(300).fadeOut(300);
					$(".video-player").hover(
						function(e) {
							$('.watermark').css('display', 'block');
						},
						function(e) {
							setTimeout(function() {
								if ($('.video-player:hover').length == 0) {
									$('.watermark').css('display', 'none');
								}
							}, 1000);
						}
					);
				});

		});

		function load_more_sub() {
			var id = $('.subscribers_').last().attr('data_subscriber_id');
			var user_id = '40261';
			$.post(PT_Ajax_Requests_File() + 'aj/user/get_more_subscribers_', {
				id: id,
				user_id: user_id
			}, function(data, textStatus, xhr) {
				if (data.status == 200) {
					if (data.html != '') {
						$('.user_subscribers_').append(data.html);
					} else {
						$('#user_subscribers__load').html("<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path fill='currentColor' d='M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M17,13H7V11H17V13Z' /></svg> No more subscriptions");
					}

				}

			});
		}
	</script>
	<link rel="stylesheet" href="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/emojione.sprites.css">
</head>

<body itemscope="" itemtype="http://schema.org/Organization" id="pt-body" class=" ">
	<style>
		.theme_switch {
			position: fixed;
			top: 200px;
			z-index: 9999;
			right: 15px;
		}

		.theme_switch .btn {
			box-shadow: 0 -5px 20px 5px rgb(0 0 0 / 15%);
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			overflow: hidden;
			padding: 8px 6px;
			width: 66px;
			height: 66px;
			background-color: #fff;
			border-radius: 6px;
			font-size: 13px;
			line-height: 1;
			font-weight: 500;
			color: #4a5259 !important;
		}

		.theme_switch .btn svg {
			width: 26px;
			height: 26px;
			margin: 0 0 7px;
		}

		.theme_switch_box {
			max-width: 950px;
		}

		.theme_switch_box .modal-content {
			box-shadow: 0 11px 15px -7px rgba(0, 0, 0, .2), 0 24px 38px 3px rgba(0, 0, 0, .14), 0 9px 46px 8px rgba(0, 0, 0, .12) !important;
			padding: 24px 24px 1px !important;
			border-radius: 10px !important;
			border: 0 !important;
		}

		.theme_switch_box .modal-header {
			border: 0 !important;
			background: transparent !important;
			padding: 0 !important;
			margin: 0 0 20px !important;
			display: flex;
			justify-content: space-between;
		}

		.theme_switch_box .modal-header:before,
		.theme_switch_box .modal-header:after {
			display: none;
		}

		.theme_switch_box .modal-header .modal-title {
			font-size: 20px !important;
			line-height: 32px !important;
			font-weight: 500 !important;
			font-family: "Roboto", sans-serif;
		}

		.theme_switch_box .modal-header .btn {
			font-weight: 500;
		}

		.theme_switch_box .modal-body {
			padding: 0 !important;
			font-size: 15px !important;
			text-align: initial;
		}

		.theme_switch_details {
			background-color: rgb(0 0 0 / 0.06);
			border-radius: 5px;
			margin-bottom: 25px;
			overflow: hidden;
			text-align: center;
		}

		.theme_switch_details.default {
			background-color: #86cae9;
		}

		.theme_switch_details.youplay {
			background-color: #9ce1ff;
		}

		.theme_switch_details.vidplay {
			background-color: #a1b9fa;
		}

		.theme_switch_details p {
			padding: 20px 10px 10px;
			margin: 0;
			font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
			font-weight: 500;
			font-size: 20px;
			color: #222 !important;
		}

		.theme_switch_details p a {
			color: #222 !important;
		}

		.theme_switch_details small {
			margin: -18px 0 0px;
			display: block;
			color: #333 !important;
		}

		.theme_switch_details>a {
			display: block;
			position: relative;
			padding-bottom: 56.25%;
			margin: 10px -10px 0 25px;
			box-shadow: 0 0 15px rgb(0 0 0 / 25%);
			border-radius: 5px 0 0 0;
		}

		.theme_switch_details img {
			width: 130%;
			height: auto;
			position: absolute;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			border-radius: 5px 0 0 0;
		}

		.theme_details_foot {
			display: -webkit-box;
			display: -webkit-flex;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-align: center;
			-webkit-align-items: center;
			-ms-flex-align: center;
			align-items: center;
			padding: 0 10px 25px;
			justify-content: center;
		}

		.theme_details_foot .btn {
			text-align: center;
			line-height: 28px;
			padding: 0 16px;
			border-radius: 4px;
			font-size: 13px;
			font-weight: 500;
			overflow: hidden;
			box-shadow: none;
			border: 0;
			font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
			margin: 0 4px;
			background-color: #444;
			color: #fff;
		}

		.theme_details_foot .btn.buy {
			background-color: transparent;
			box-shadow: inset 0 0 0 2px #444;
			color: #444 !important;
		}

		@media (min-width: 768px) {
			.theme_switch_box .modal-body .row {
				margin-left: -.5rem;
				margin-right: -.5rem;
			}

			.theme_switch_box .modal-body .row>div {
				padding-left: .5rem;
				padding-right: .5rem;
			}
		}

		@media (max-width: 768px) {
			.theme_switch_box .modal-body>p {
				display: none;
			}
		}
	</style>
	<div class="theme_switch">
		<button type="button" class="btn" data-toggle="modal" data-target="#theme_switcher">
			<svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				<path d="M22.0009 16.5V19.5C22.0009 20.88 20.8809 22 19.5009 22H12.3609C11.4709 22 11.0309 20.93 11.6509 20.3L17.5209 14.3C17.7109 14.11 17.9709 14 18.2309 14H19.5009C20.8809 14 22.0009 15.12 22.0009 16.5Z">
				</path>
				<path d="M18.3702 11.2895L15.6602 13.9995L13.2002 16.4495C12.5702 17.0795 11.4902 16.6395 11.4902 15.7495C11.4902 12.5395 11.4902 7.25953 11.4902 7.25953C11.4902 6.98953 11.6002 6.73953 11.7802 6.54953L12.7002 5.62953C13.6802 4.64953 15.2602 4.64953 16.2402 5.62953L18.3602 7.74953C19.3502 8.72953 19.3502 10.3095 18.3702 11.2895Z">
				</path>
				<path d="M7.5 2H4.5C3 2 2 3 2 4.5V18C2 18.27 2.03 18.54 2.08 18.8C2.11 18.93 2.14 19.06 2.18 19.19C2.23 19.34 2.28 19.49 2.34 19.63C2.35 19.64 2.35 19.65 2.35 19.65C2.36 19.65 2.36 19.65 2.35 19.66C2.49 19.94 2.65 20.21 2.84 20.46C2.95 20.59 3.06 20.71 3.17 20.83C3.28 20.95 3.4 21.05 3.53 21.15L3.54 21.16C3.79 21.35 4.06 21.51 4.34 21.65C4.35 21.64 4.35 21.64 4.35 21.65C4.5 21.72 4.65 21.77 4.81 21.82C4.94 21.86 5.07 21.89 5.2 21.92C5.46 21.97 5.73 22 6 22C6.41 22 6.83 21.94 7.22 21.81C7.33 21.77 7.44 21.73 7.55 21.68C7.9 21.54 8.24 21.34 8.54 21.08C8.63 21.01 8.73 20.92 8.82 20.83L8.86 20.79C9.56 20.07 10 19.08 10 18V4.5C10 3 9 2 7.5 2ZM6 19.5C5.17 19.5 4.5 18.83 4.5 18C4.5 17.17 5.17 16.5 6 16.5C6.83 16.5 7.5 17.17 7.5 18C7.5 18.83 6.83 19.5 6 19.5Z">
				</path>
			</svg>Themes
		</button>
	</div>
	<div class="modal fade" id="theme_switcher" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg mat_box theme_switch_box" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">LOGO</h4>
					<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
				</div>
				<div class="modal-body">
					<p>NAMR is a video sharing script, NAME is
						the best way to start your own video sharing website! our platform is
						fast, secured, and it will be regularly updated.</p>
					<p>NAME is the only video sharing site in the market that fully support native mobile apps,
						thanks to our advanced API system!</p>
					<a href="https://1.envato.market/AoPrn7" target="_blank" class="btn btn-mat btn-main buy-button">Buy
						NAME Now!</a>
					<hr>
					<h5 class="mb-3">Theme Switcher</h5>
					<div class="row">
						<div class="col-sm-6 col-md-4">
							<div class="theme_switch_details default">
								<p>Default</p>
								<div class="theme_details_foot">
									<a class="btn" href="#">Activate</a>
								</div>

							</div>
						</div>
						<div class="col-sm-6 col-md-4">
							<div class="theme_switch_details youplay">
								<p>YouPlay</p>
								<div class="theme_details_foot">
									<a class="btn" href="#">Activate</a>
								</div>
								<a href="#"><img alt="YouPlay" src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/youplay.png"></a>
							</div>
						</div>
						<div class="col-sm-12 col-md-4">
							<div class="theme_switch_details vidplay">
								<p><a href="http://bit.ly/VPlayTheme">VidPlay</a></p>
								<div class="theme_details_foot">
									<a class="btn buy" href="http://bit.ly/VPlayTheme" target="_blank">Buy</a>
									<a class="btn" href="#">Activate</a>
								</div>
								<small>Sold Separately</small>
								<a href="#"><img alt="VidPlay" src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/vidplay.png"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="pop_up_18" class="modal matdialog et_plus" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" viewBox="0 0 328.863 328.863" height="120" width="120" xml:space="preserve">
						<g id="_x34_4-18Plus_movie">
							<g>
								<path fill="currentColor" d="M104.032,220.434V131.15H83.392V108.27h49.121v112.164H104.032z"></path>
							</g>
							<g>
								<path fill="currentColor" d="M239.552,137.23c0,9.76-5.28,18.4-14.08,23.201c12.319,5.119,20,15.84,20,28.32c0,20.16-17.921,32.961-45.921,32.961 c-28.001,0-45.921-12.641-45.921-32.48c0-12.801,8.32-23.682,21.28-28.801c-9.44-5.281-15.52-14.24-15.52-24 c0-17.922,15.681-29.281,40.001-29.281C224.031,107.15,239.552,118.83,239.552,137.23z M180.51,186.352 c0,9.441,6.721,14.721,19.041,14.721c12.32,0,19.2-5.119,19.2-14.721c0-9.279-6.88-14.561-19.2-14.561 C187.23,171.791,180.51,177.072,180.51,186.352z M183.391,138.83c0,8.002,5.76,12.48,16.16,12.48c10.4,0,16.16-4.479,16.16-12.48 c0-8.318-5.76-12.959-16.16-12.959C189.15,125.871,183.391,130.512,183.391,138.83z">
								</path>
							</g>
							<g>
								<path fill="currentColor" d="M292.864,120.932c4.735,13.975,7.137,28.592,7.137,43.5c0,74.752-60.816,135.568-135.569,135.568 S28.862,239.184,28.862,164.432c0-74.754,60.816-135.568,135.569-135.568c14.91,0,29.527,2.4,43.5,7.137V5.832 C193.817,1.963,179.24,0,164.432,0C73.765,0,0.001,73.764,0.001,164.432s73.764,164.432,164.431,164.432 S328.862,255.1,328.862,164.432c0-14.807-1.962-29.385-5.831-43.5H292.864z">
								</path>
							</g>
							<g>
								<polygon fill="currentColor" points="284.659,44.111 284.659,12.582 261.987,12.582 261.987,44.111 230.647,44.111 230.647,66.781 261.987,66.781 261.987,98.309 284.659,98.309 284.659,66.781 316.186,66.781 316.186,44.111 ">
								</polygon>
							</g>
						</g>
					</svg>
					<h4>Please note that if you are under 18, you won't be able to access this site. </h4>
					<p>Are you 18 years old or above?</p>
				</div>
				<div class="modal-footer">
					<button class="btn btn-success matbtn" id="pop_up_18_yes">Yes</button>
					<button class="btn matbtn" id="pop_up_18_no">No</button>
				</div>
			</div>
		</div>
	</div>
	<a href="" id="link_redirect_to_page" data-load=""></a>
	<div id="bar_loading"></div>
	<input type="hidden" class="main_session" value="96081ec5f774946c7766b23bed372b284e43d4cf">
	<header>
		<nav class="navbar navbar-findcond navbar-fixed-top header-layout nav_bg_solid">
			<div class="pt_main_hdr" id="header_change">
				<div class="navbar-header">
					<div class="yp_slide_menu">
						<span id="open_slide" title="" data-toggle="tooltip" data-placement="bottom" onclick="SlideSetCookie('open_slide','yes',1);" data-original-title="Expand">
							<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 276.167 276.167">
								<g fill="currentColor">
									<path d="M33.144,2.471C15.336,2.471,0.85,16.958,0.85,34.765s14.48,32.293,32.294,32.293s32.294-14.486,32.294-32.293 S50.951,2.471,33.144,2.471z">
									</path>
									<path d="M137.663,2.471c-17.807,0-32.294,14.487-32.294,32.294s14.487,32.293,32.294,32.293c17.808,0,32.297-14.486,32.297-32.293 S155.477,2.471,137.663,2.471z">
									</path>
									<path d="M243.873,67.059c17.804,0,32.294-14.486,32.294-32.293S261.689,2.471,243.873,2.471s-32.294,14.487-32.294,32.294 S226.068,67.059,243.873,67.059z">
									</path>
									<path d="M32.3,170.539c17.807,0,32.297-14.483,32.297-32.293c0-17.811-14.49-32.297-32.297-32.297S0,120.436,0,138.246 C0,156.056,14.493,170.539,32.3,170.539z">
									</path>
									<path d="M136.819,170.539c17.804,0,32.294-14.483,32.294-32.293c0-17.811-14.478-32.297-32.294-32.297 c-17.813,0-32.294,14.486-32.294,32.297C104.525,156.056,119.012,170.539,136.819,170.539z">
									</path>
									<path d="M243.038,170.539c17.811,0,32.294-14.483,32.294-32.293c0-17.811-14.483-32.297-32.294-32.297 s-32.306,14.486-32.306,32.297C210.732,156.056,225.222,170.539,243.038,170.539z">
									</path>
									<path d="M33.039,209.108c-17.807,0-32.3,14.483-32.3,32.294c0,17.804,14.493,32.293,32.3,32.293s32.293-14.482,32.293-32.293 S50.846,209.108,33.039,209.108z">
									</path>
									<path d="M137.564,209.108c-17.808,0-32.3,14.483-32.3,32.294c0,17.804,14.487,32.293,32.3,32.293 c17.804,0,32.293-14.482,32.293-32.293S155.368,209.108,137.564,209.108z">
									</path>
									<path d="M243.771,209.108c-17.804,0-32.294,14.483-32.294,32.294c0,17.804,14.49,32.293,32.294,32.293 c17.811,0,32.294-14.482,32.294-32.293S261.575,209.108,243.771,209.108z">
									</path>
								</g>
							</svg>
						</span>

					</div>
					<div class="mobile">
						<a class="navbar-brand logo-img" href="#" itemprop="url">
							<img itemprop="logo" src="https://th.bing.com/th/id/R.b8e8ea67e18c202f5a34049a707683fa?rik=l97aDpAB8lTACg&pid=ImgRaw&r=0" alt="LOGO - The Ultimate Video Sharing Platform">
						</a>
					</div>

					<ul class="nav navbar-nav sec_lay_hdr custom_text_link">

						<li class="pt_hide-from-mobile">
							<a href="#" data-load="?link1=videos&amp;page=category&amp;id=1">
								Film &amp; Animation </a>
						</li>
						<li class="pt_hide-from-mobile">
							<a href="#" data-load="?link1=videos&amp;page=category&amp;id=3">
								Music </a>
						</li>
						<li class="pt_hide-from-mobile">
							<a href="#" data-load="?link1=videos&amp;page=category&amp;id=4">
								Pets &amp; Animals </a>
						</li>

						<li class="dropdown profile-nav pt_hide-from-mobile">
							<a href="javascript:void(0);" class="dropdown-toggle flex_home_arrow" data-toggle="dropdown" aria-expanded="false">
								More
								<svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M9.27957 0.904663H1.38557C1.24344 0.904743 1.10453 0.947003 0.986437 1.02609C0.868345 1.10518 0.776382 1.21754 0.722196 1.34893C0.66801 1.48033 0.65404 1.62485 0.682055 1.76419C0.71007 1.90353 0.77881 2.03142 0.879567 2.13166L4.33257 5.58466C4.59882 5.8506 4.95975 5.99998 5.33607 5.99998C5.71238 5.99998 6.07331 5.8506 6.33957 5.58466L7.65257 4.27166L9.79257 2.13166C9.89229 2.03044 9.95987 1.90202 9.98684 1.76251C10.0138 1.623 9.99896 1.47864 9.94415 1.34755C9.88934 1.21645 9.79702 1.10448 9.67878 1.02568C9.56054 0.946888 9.42166 0.904785 9.27957 0.904663Z" fill="currentColor"></path>
								</svg>
							</a>
							<ul class="dropdown-menu ani-acc-menu custom_menu_login_usss">
								<li class="">
									<a href="#" data-load="?link1=videos&amp;page=category&amp;id=5">
										Sports </a>
								</li>
								<li class="">
									<a href="#" data-load="?link1=videos&amp;page=category&amp;id=6">
										Travel &amp; Events </a>
								</li>
								<li class="">
									<a href="0533424127videos/category/7" data-load="?link1=videos&amp;page=category&amp;id=7">
										Gaming </a>
								</li>
								<li class="">
									<a href="0533424127videos/category/8" data-load="?link1=videos&amp;page=category&amp;id=8">
										People &amp; Blogs </a>
								</li>
								<li class="">
									<a href="0533424127videos/category/9" data-load="?link1=videos&amp;page=category&amp;id=9">
										Comedy </a>
								</li>
								<li class="">
									<a href="0533424127videos/category/10" data-load="?link1=videos&amp;page=category&amp;id=10">
										Entertainment </a>
								</li>
								<li class="">
									<a href="0533424127videos/category/11" data-load="?link1=videos&amp;page=category&amp;id=11">
										News &amp; Politics </a>
								</li>
								<li class="">
									<a href="0533424127videos/category/12" data-load="?link1=videos&amp;page=category&amp;id=12">
										How-to &amp; Style </a>
								</li>
								<li class="">
									<a href="0533424127videos/category/13" data-load="?link1=videos&amp;page=category&amp;id=13">
										Non-profits &amp; Activism </a>
								</li>
								<li class="">
									<a href="0533424127videos/category/other" data-load="?link1=videos&amp;page=category&amp;id=other">
										Other </a>
								</li>
							</ul>
						</li>






					</ul>

					<form class="navbar-form navbar-left search-header" role="search" action="0533424127search" method="GET">
						<div class="form-group">
							<input type="text" class="form-control" id="search-bar" name="keyword" placeholder="Search for videos" autocomplete="off">
							<span class="search_line">
							</span>
							<svg class="feather feather-search" onclick="javascript:$('.search-header input').focus();" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<g id="Group_304" data-name="Group 304" transform="translate(941 2420)">
									<g id="Search_1" data-name="Search 1" transform="translate(-939.756 -2417.756)">
										<path id="Path_57" data-name="Path 57" d="M2,7.752A6.752,6.752,0,1,1,8.752,14.5,6.752,6.752,0,0,1,2,7.752ZM7.971,3.209a.563.563,0,0,1-.468.644A3.189,3.189,0,0,0,4.853,6.5a.563.563,0,0,1-1.112-.176A4.314,4.314,0,0,1,7.327,2.741.563.563,0,0,1,7.971,3.209Z" fill="currentColor" fill-rule="evenodd"></path>
										<path id="Path_58" data-name="Path 58" d="M18.47,17.47a.75.75,0,0,1,1.061,0l4,4A.75.75,0,1,1,22.47,22.53l-4-4A.75.75,0,0,1,18.47,17.47Z" transform="translate(-4.238 -4.238)" fill="currentColor"></path>
									</g>
									<rect id="Rectangle_321" data-name="Rectangle 321" width="24" height="24" transform="translate(-941 -2420)" fill="none"></rect>
								</g>
							</svg>
						</div>
						<div class="search-dropdown hidden"></div>
					</form>

				</div>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown profile-nav hide_upload_mobi_link">
						<a href="javascript:void(0);" class="dropdown-toggle hdr_hover_btn" data-toggle="dropdown">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<g id="Group_305" data-name="Group 305" transform="translate(1264 2420)">
									<g id="Group_276" data-name="Group 276">
										<g id="Group_263" data-name="Group 263" transform="translate(-1264 -2417)">
											<path id="Path_61" data-name="Path 61" d="M3.82,3.68l6,1-.5.5-.5,1.5h-5Z" fill="currentColor"></path>
											<path id="Path_62" data-name="Path 62" d="M8.716,0h.067c1.372,0,2.447,0,3.312.071A5.918,5.918,0,0,1,14.36.627,5.75,5.75,0,0,1,16.873,3.14q.075.147.138.3a23.41,23.41,0,0,1,2.9-1.134,2.771,2.771,0,0,1,2.347.2,2.771,2.771,0,0,1,1.123,2.07A24.431,24.431,0,0,1,23.5,7.8V9.7a24.43,24.43,0,0,1-.121,3.224,2.771,2.771,0,0,1-1.123,2.07,2.771,2.771,0,0,1-2.347.2,23.414,23.414,0,0,1-2.9-1.134q-.063.152-.138.3a5.75,5.75,0,0,1-2.513,2.513,5.918,5.918,0,0,1-2.265.556c-.864.071-1.94.071-3.311.071H8.716c-1.372,0-2.447,0-3.311-.071a5.919,5.919,0,0,1-2.265-.556A5.75,5.75,0,0,1,.627,14.36,5.918,5.918,0,0,1,.071,12.1C0,11.231,0,10.155,0,8.784V8.716C0,7.345,0,6.269.071,5.4A5.918,5.918,0,0,1,.627,3.14,5.75,5.75,0,0,1,3.14.627,5.918,5.918,0,0,1,5.4.071C6.269,0,7.345,0,8.716,0ZM4,5.75A.75.75,0,0,1,4.75,5h4a.748.748,0,0,1,.526.215.745.745,0,0,1,.514-.167.527.527,0,0,1,.459.333,2.28,2.28,0,0,1,.243.684q.027.225.036.423t.027.369q.018.18.018.342t.018.306a1.9,1.9,0,0,0,.108.7.347.347,0,0,0,.324.207q.162.018.486.036t.7.027q.378.018.729.045t.558.054a1.881,1.881,0,0,1,.684.234.458.458,0,0,1-.063.828,2.532,2.532,0,0,1-.783.189q-.36.045-.792.072t-.819.027q-.387.009-.639.018a.455.455,0,0,0-.387.2,1.33,1.33,0,0,0-.153.684q0,.117-.009.252t-.027.27q-.009.135-.027.27l-.018.27a2.94,2.94,0,0,1-.252.972.577.577,0,0,1-.54.387.507.507,0,0,1-.486-.4,5.814,5.814,0,0,1-.225-1.017q-.009-.153-.018-.279t-.018-.261q-.009-.126-.018-.234t-.018-.2a1.565,1.565,0,0,0-.144-.54.47.47,0,0,0-.252-.252A1.079,1.079,0,0,0,8.062,10H7.108q-.306,0-.6-.009t-.477-.027a2.24,2.24,0,0,1-.765-.207.531.531,0,0,1-.288-.495.452.452,0,0,1,.18-.369,1.33,1.33,0,0,1,.54-.234,4.107,4.107,0,0,1,.837-.09l.747-.036q.387-.027.693-.054t.468-.063a.426.426,0,0,0,.27-.189,1.443,1.443,0,0,0,.117-.576l.018-.27q.009-.144.018-.306t.018-.342q.006-.119.016-.245A.754.754,0,0,1,8.75,6.5h-4A.75.75,0,0,1,4,5.75Z" fill="currentColor" fill-rule="evenodd"></path>
										</g>
										<rect id="Rectangle_311" data-name="Rectangle 311" width="24" height="24" transform="translate(-1264 -2420)" fill="none"></rect>
									</g>
								</g>
							</svg>
						</a>
						<ul class="dropdown-menu pt-create-menu ani-acc-menu custom_menu_login_usss">

							<li class="hide_up_imp">
								<a href="0533424127upload-video" data-load="?link1=upload-video" class="uploadd">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M7 10.25L6.96421 10.25C6.05997 10.25 5.33069 10.25 4.7424 10.3033C4.13605 10.3583 3.60625 10.4746 3.125 10.7524C2.55493 11.0815 2.08154 11.5549 1.7524 12.125C1.47455 12.6063 1.35826 13.1361 1.3033 13.7424C1.24998 14.3307 1.24999 15.06 1.25 15.9642L1.25 15.9642L1.25 16L1.25 16.0358L1.25 16.0358C1.24999 16.94 1.24998 17.6693 1.3033 18.2576C1.35826 18.8639 1.47455 19.3937 1.7524 19.875C2.08154 20.4451 2.55493 20.9185 3.125 21.2476C3.60625 21.5254 4.13605 21.6417 4.7424 21.6967C5.33067 21.75 6.05992 21.75 6.96412 21.75L6.96418 21.75L7 21.75L17 21.75L17.0357 21.75C17.94 21.75 18.6693 21.75 19.2576 21.6967C19.8639 21.6417 20.3937 21.5254 20.875 21.2476C21.4451 20.9185 21.9185 20.4451 22.2476 19.875C22.5254 19.3937 22.6417 18.8639 22.6967 18.2576C22.75 17.6693 22.75 16.94 22.75 16.0358L22.75 16L22.75 15.9642C22.75 15.06 22.75 14.3307 22.6967 13.7424C22.6417 13.1361 22.5254 12.6063 22.2476 12.125C21.9185 11.5549 21.4451 11.0815 20.875 10.7524C20.3937 10.4746 19.8639 10.3583 19.2576 10.3033C18.6693 10.25 17.94 10.25 17.0358 10.25L17 10.25L16 10.25C15.5858 10.25 15.25 10.5858 15.25 11C15.25 11.4142 15.5858 11.75 16 11.75L17 11.75C17.9484 11.75 18.6096 11.7507 19.1222 11.7972C19.6245 11.8427 19.9101 11.9274 20.125 12.0514C20.467 12.2489 20.7511 12.533 20.9486 12.875C21.0726 13.0899 21.1573 13.3755 21.2028 13.8778C21.2493 14.3904 21.25 15.0516 21.25 16C21.25 16.9484 21.2493 17.6096 21.2028 18.1222C21.1573 18.6245 21.0726 18.9101 20.9486 19.125C20.7511 19.467 20.467 19.7511 20.125 19.9486C19.9101 20.0726 19.6245 20.1573 19.1222 20.2028C18.6096 20.2493 17.9484 20.25 17 20.25L7 20.25C6.05158 20.25 5.39041 20.2493 4.87779 20.2028C4.37549 20.1573 4.0899 20.0726 3.875 19.9486C3.53296 19.7511 3.24892 19.467 3.05144 19.125C2.92737 18.9101 2.8427 18.6245 2.79718 18.1222C2.75072 17.6096 2.75 16.9484 2.75 16C2.75 15.0516 2.75072 14.3904 2.79718 13.8778C2.84271 13.3755 2.92737 13.0899 3.05144 12.875C3.24892 12.533 3.53296 12.2489 3.875 12.0514C4.0899 11.9274 4.37549 11.8427 4.87779 11.7972C5.39041 11.7507 6.05158 11.75 7 11.75L8 11.75C8.41421 11.75 8.75 11.4142 8.75 11C8.75 10.5858 8.41421 10.25 8 10.25L7 10.25ZM16.5303 6.46967L12.5303 2.46967C12.2374 2.17678 11.7626 2.17678 11.4697 2.46967L7.46967 6.46967C7.17678 6.76256 7.17678 7.23744 7.46967 7.53033C7.76256 7.82322 8.23744 7.82322 8.53033 7.53033L11.25 4.81066L11.25 16C11.25 16.4142 11.5858 16.75 12 16.75C12.4142 16.75 12.75 16.4142 12.75 16L12.75 4.81066L15.4697 7.53033C15.7626 7.82322 16.2374 7.82322 16.5303 7.53033C16.8232 7.23744 16.8232 6.76256 16.5303 6.46967Z" fill="currentColor"></path>
									</svg> Upload
								</a>
							</li>



							<li class="divider"></li>
							<li class="hide_up_imp">
								<a href="0533424127upload-video?type=shorts" data-load="?link1=upload-video&amp;type=shorts">
									<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 168.071 168.071" xml:space="preserve" style="color: currentColor;">
										<g>
											<g>
												<path opacity="0.5" style="fill: currentColor;" d="M154.932,91.819L42.473,27.483c-2.219-1.26-4.93-1.26-7.121-0.027 c-2.219,1.233-3.588,3.533-3.615,6.026L31.08,161.059c0,0,0,0,0,0.027c0,2.465,1.369,4.766,3.533,6.026 c1.123,0.63,2.355,0.959,3.615,0.959c1.205,0,2.438-0.301,3.533-0.931l113.116-63.214c2.219-1.26,3.588-3.533,3.588-6.053 c0,0,0,0,0-0.027C158.465,95.38,157.123,93.079,154.932,91.819z">
												</path>
												<g id="XMLID_15_">
													<g>
														<path style="fill:currentColor;" d="M79.952,44.888L79.952,44.888c3.273-3.273,2.539-8.762-1.479-11.06l-7.288-4.171 c-2.75-1.572-6.212-1.109-8.452,1.128l0,0c-3.273,3.273-2.539,8.762,1.479,11.06l7.291,4.169 C74.25,47.589,77.712,47.126,79.952,44.888z">
														</path>
														<path style="fill:currentColor;" d="M133.459,65.285L99.103,45.631c-2.75-1.572-6.209-1.109-8.449,1.128l0,0 c-3.273,3.273-2.539,8.759,1.479,11.057l23.497,13.44L23.931,122.5l0.52-103.393l19.172,10.964 c2.722,1.558,6.152,1.098,8.367-1.12l0.104-0.104c3.24-3.24,2.514-8.674-1.463-10.95L21,0.948 c-2.219-1.26-4.93-1.26-7.121-0.027c-2.219,1.233-3.588,3.533-3.615,6.026L9.607,134.524c0,0,0,0,0,0.027 c0,2.465,1.369,4.766,3.533,6.026c1.123,0.63,2.355,0.959,3.615,0.959c1.205,0,2.438-0.301,3.533-0.931l113.116-63.214 c2.219-1.26,3.588-3.533,3.588-6.053c0,0,0,0,0-0.027C136.992,68.845,135.65,66.545,133.459,65.285z">
														</path>
													</g>
												</g>
											</g>
										</g>
									</svg> Shorts
								</a>
							</li>
						</ul>
					</li>

					<li class="show-in-mobile pull-left top-header">
						<a href="#" class="search-icon hdr_hover_btn">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<g id="Group_304" data-name="Group 304" transform="translate(941 2420)">
									<g id="Search_1" data-name="Search 1" transform="translate(-939.756 -2417.756)">
										<path id="Path_57" data-name="Path 57" d="M2,7.752A6.752,6.752,0,1,1,8.752,14.5,6.752,6.752,0,0,1,2,7.752ZM7.971,3.209a.563.563,0,0,1-.468.644A3.189,3.189,0,0,0,4.853,6.5a.563.563,0,0,1-1.112-.176A4.314,4.314,0,0,1,7.327,2.741.563.563,0,0,1,7.971,3.209Z" fill="currentColor" fill-rule="evenodd"></path>
										<path id="Path_58" data-name="Path 58" d="M18.47,17.47a.75.75,0,0,1,1.061,0l4,4A.75.75,0,1,1,22.47,22.53l-4-4A.75.75,0,0,1,18.47,17.47Z" transform="translate(-4.238 -4.238)" fill="currentColor"></path>
									</g>
									<rect id="Rectangle_321" data-name="Rectangle 321" width="24" height="24" transform="translate(-941 -2420)" fill="none"></rect>
								</g>
							</svg>
						</a>
					</li>
					<li class="hide-from-mobile pull-left top-header">
						<a href="0533424127messages" class="hdr_hover_btn" data-load="?link1=messages">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<g id="Group_306" data-name="Group 306" transform="translate(1031 2420)">
									<g id="Message_2" data-name="Message 2" transform="translate(-1031 -2420)">
										<path id="Path_50" data-name="Path 50" d="M14,2a34.336,34.336,0,0,1,3.673.107,3,3,0,0,0,4.221,4.221A34.328,34.328,0,0,1,22,10v1.184a12.522,12.522,0,0,1-.2,3.223A5,5,0,0,1,18.407,17.8a12.522,12.522,0,0,1-3.223.2H14.57a5,5,0,0,0-2.848.913l-.053.038L9.058,20.815A1.1,1.1,0,0,1,7.4,19.51,1.1,1.1,0,0,0,6.373,18h-.6A3.772,3.772,0,0,1,2,14.228V10c0-2.8,0-4.2.545-5.27A5,5,0,0,1,4.73,2.545C5.8,2,7.2,2,10,2ZM9,10A1,1,0,1,1,8,9,1,1,0,0,1,9,10Zm4,0a1,1,0,1,1-1-1A1,1,0,0,1,13,10Zm3,1a1,1,0,1,0-1-1A1,1,0,0,0,16,11Z" fill="currentColor" fill-rule="evenodd"></path>
										<path id="Path_51" data-name="Path 51" d="M22,4a2,2,0,1,1-2-2A2,2,0,0,1,22,4Z" fill="currentColor"></path>
									</g>
									<rect id="Rectangle_318" data-name="Rectangle 318" width="24" height="24" transform="translate(-1031 -2420)" fill="none"></rect>
								</g>
							</svg>
							<span id="new-messages"></span>
						</a>
					</li>
					<li class="hide-from-mobile dropdown pull-left top-header noti_iam_from_mobile">
						<a href="javascript:void(0);" id="get-notifications" class=" dropdown-toggle hdr_hover_btn" data-toggle="dropdown">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<g id="Group_307" data-name="Group 307" transform="translate(1002 2420)">
									<g id="Notification_2" data-name="Notification 2" transform="translate(-1002.25 -2420.25)">
										<path id="Path_52" data-name="Path 52" d="M5.5,7.6A5.645,5.645,0,0,1,11.1,1.25h1.7A5.625,5.625,0,0,1,16.893,3a3,3,0,1,0,1.434,5.689,3.134,3.134,0,0,0,1,2.113l.044.041a4.562,4.562,0,0,1-3.1,7.9H8.041a4.72,4.72,0,0,1-4.247-2.66l-.1-.213a4.4,4.4,0,0,1,.975-5.155A2.9,2.9,0,0,0,5.578,8.23Z" fill="currentColor"></path>
										<path id="Path_53" data-name="Path 53" d="M8.733,20.4a.75.75,0,0,1,1.05.15l.3.4a2.625,2.625,0,0,0,4.2,0l.3-.4a.75.75,0,1,1,1.2.9l-.3.4a4.125,4.125,0,0,1-6.6,0l-.3-.4A.75.75,0,0,1,8.733,20.4Z" fill="currentColor"></path>
										<path id="Path_54" data-name="Path 54" d="M19.183,6a2,2,0,1,1-2-2A2,2,0,0,1,19.183,6Z" fill="currentColor"></path>
									</g>
									<rect id="Rectangle_319" data-name="Rectangle 319" width="24" height="24" transform="translate(-1002 -2420)" fill="none"></rect>
								</g>
							</svg>
							<span id="new-notifications"></span>
						</a>
						<ul class="dropdown-menu dropdown-menu-right notfi-dropdown custom_notif_dropdown" id="notifications">
							<li class="custom_Flex_auto_read">
								<h5>
									<b id="all-notifications"></b> Notifications

								</h5>
								<div class="read_all_custom hidden">
									<img src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/read_all.png">
									<span>
										Mark as read
									</span>
								</div>
							</li>
							<li>
								<ul id="notifications-list">
									<div class="text-center pt_noti_ico_loader"><i class="fa fa-circle-o-notch spin hidden"></i></div>
								</ul>
							</li>

							<a href="#" class="view_all_notif_custom hidden">
								View All Notifications
							</a>
						</ul>
					</li>
					<li class="dropdown hide-from-mobile pull-left profile-nav">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							<img class="header-image" src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/d-avatar.jpg" alt="users name">
							<span class="name_loggedin_user desktop"><p><?= $name; ?></p></span>
							<span class="desktop hide_iam_from_mobile">
								<svg width="4" height="14" viewBox="0 0 4 14" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M1.92603 10.25C2.86353 10.25 3.67603 11.0625 3.67603 12C3.67603 12.9688 2.86353 13.75 1.92603 13.75C0.957275 13.75 0.176025 12.9688 0.176025 12C0.176025 11.0625 0.957275 10.25 1.92603 10.25ZM1.92603 5.25C2.86353 5.25 3.67603 6.0625 3.67603 7C3.67603 7.96875 2.86353 8.75 1.92603 8.75C0.957275 8.75 0.176025 7.96875 0.176025 7C0.176025 6.0625 0.957275 5.25 1.92603 5.25ZM1.92603 3.75C0.957275 3.75 0.176025 2.96875 0.176025 2C0.176025 1.0625 0.957275 0.25 1.92603 0.25C2.86353 0.25 3.67603 1.0625 3.67603 2C3.67603 2.96875 2.86353 3.75 1.92603 3.75Z" fill="currentColor"></path>
								</svg>
							</span>
						</a>
						<ul class="dropdown-menu ani-acc-menu custom_menu_login_usss" role="menu">
							<div class="clip_top">
								<img src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/d-cover.jpg">
							</div>
							<div class="image_dropdown">
								<div class="" style="position: relative;">
									<img src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/d-avatar.jpg" alt="users name">
								</div>



								<a class="name_channel" href="user_page.php">
									<div class="name_pes">
										<p><?= $name; ?></p>
									</div>
									<div class="channel_pass">My Channel</div>
								</a>
							</div>









							<li>
								<a href="logout.php">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
										<path fill="currentColor" d="M16.56,5.44L15.11,6.89C16.84,7.94 18,9.83 18,12A6,6 0 0,1 12,18A6,6 0 0,1 6,12C6,9.83 7.16,7.94 8.88,6.88L7.44,5.44C5.36,6.88 4,9.28 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12C20,9.28 18.64,6.88 16.56,5.44M13,3H11V13H13">
										</path>
									</svg> Log out
								</a>
							</li>


							<span class="headtoppoint"></span>
						</ul>
					</li>

					<script type="text/javascript">
						$(function() {
							$('.switch input').on("click", function() {
								$(this).parent().toggleClass('active');
							});
						});
					</script>
				</ul>
			</div>
		</nav>

		<nav class="navbar navbar-findcond navbar-fixed-top header-layout hidden search-bar nav_bg_solid">
			<div class="navbar-header">
				<form class="search-header-mobile" role="search" action="0533424127search" method="GET">
					<div class="form-group">
						<input type="text" class="form-control" id="search-bar-mobile" name="keyword" placeholder="Search for videos" autocomplete="off">
					</div>
					<div class="search-dropdown hidden"></div>
				</form>
			</div>
		</nav>

		<script>
			jQuery(document).ready(function($) {
				pt_get_notifications({
					type: 'new'
				});
				UpdateInfo();

				$("#get-notifications").click(function(event) {
					if ($('#notifications').css('display') == 'none') {
						var notfi_cont = $("ul.notfi-dropdown");

						if ($("span#new-notifications").html() != '') {
							$(this).find('span#new-notifications').empty();
						}

						pt_get_notifications({
							sa: 1
						});
					}
				});

				setInterval(function() {
					pt_get_notifications({
						type: 'new'
					});
				}, 6000);
			});

			function UpdateInfo() {
				$.post('0533424127aj/user/update_info?hash=' + $('.main_session').val(), function(data, textStatus, xhr) {});
			}

			function pt_get_notifications(args) {
				if (!args) {
					args = {};
				}
				var notfi_cont = $("ul.notfi-dropdown");
				var notfi_set = $("ul#notifications");

				defparams = {
					type: false,
					sa: false
				}

				options = Object.assign(defparams, args);
				data = {
					'hash': $('.main_session').val()
				};

				if (options['type']) {
					data['t'] = options['type'];
				}

				if (options['sa']) {
					data['sa'] = options['sa'];
					notfi_set.find('i.spin').removeClass('hidden');
				}

				$.ajax({
						url: '0533424127aj/get_notifications',
						type: 'GET',
						dataType: 'json',
						data: data
					})
					.done(function(data) {
						if (data.status == 200) {
							if (data.new) {
								$("span#new-notifications").html($('<b>', {
									text: data.new
								}));
							} else {
								notfi_set.find('b').text(data.len);
								notfi_set.find('ul').html(data.html);
							}
						} else if (data.status == 304 && options['sa']) {
							notfi_set.find('ul').html('<li class="empty_state no-notifications"><svg class="feather" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g id="Group_307" data-name="Group 307" transform="translate(1002 2420)"><g id="Notification_2" data-name="Notification 2" transform="translate(-1002.25 -2420.25)"><path id="Path_52" data-name="Path 52" d="M5.5,7.6A5.645,5.645,0,0,1,11.1,1.25h1.7A5.625,5.625,0,0,1,16.893,3a3,3,0,1,0,1.434,5.689,3.134,3.134,0,0,0,1,2.113l.044.041a4.562,4.562,0,0,1-3.1,7.9H8.041a4.72,4.72,0,0,1-4.247-2.66l-.1-.213a4.4,4.4,0,0,1,.975-5.155A2.9,2.9,0,0,0,5.578,8.23Z" fill="currentColor"></path><path id="Path_53" data-name="Path 53" d="M8.733,20.4a.75.75,0,0,1,1.05.15l.3.4a2.625,2.625,0,0,0,4.2,0l.3-.4a.75.75,0,1,1,1.2.9l-.3.4a4.125,4.125,0,0,1-6.6,0l-.3-.4A.75.75,0,0,1,8.733,20.4Z" fill="currentColor"></path><path id="Path_54" data-name="Path 54" d="M19.183,6a2,2,0,1,1-2-2A2,2,0,0,1,19.183,6Z" fill="currentColor"></path></g><rect id="Rectangle_319" data-name="Rectangle 319" width="24" height="24" transform="translate(-1002 -2420)" fill="none"></rect></g></svg> You do not have any notifications</li>');
						}

						if (data.count_messages > 0) {
							$('#new-messages').html('<b>' + data.count_messages + '</b>');
						} else {
							$('#new-messages').html('');
						}

						if (options['sa']) {
							notfi_set.find('i.spin').addClass('hidden');
						}

					})
					.fail(function() {
						console.log("error");
					});
			}
		</script>

		<script>
			$('.search-icon').on('click', function(event) {
				event.preventDefault();
				$('.search-bar').toggleClass('hidden');
			});

			$('#open_slide').on('click', function(event) {
				event.preventDefault();
				$('body').toggleClass('side_open');
			});

			current_width = $(window).width();
			if (current_width <= 1300) {
				$('#open_slide').on('click', function(event) {
					$('body').addClass('mobi_side_open');
				});
			}

			$('#search-bar').keyup(function(event) {
				var search_value = $(this).val();
				var search_dropdown = $('.search-dropdown');
				if (search_value == '') {
					search_dropdown.addClass('hidden');
					search_dropdown.empty();
					return false;
				} else {
					search_dropdown.removeClass('hidden');
				}
				$.post('0533424127aj/search', {
					search_value: search_value
				}, function(data, textStatus, xhr) {
					if (data.status == 200) {
						search_dropdown.html(data.html);
					} else {
						search_dropdown.addClass('hidden');
						search_dropdown.empty();
						return false;
					}
				});
			});

			jQuery(document).click(function(event) {
				if (!(jQuery(event.target).closest(".search-dropdown").length)) {
					jQuery('.search-dropdown').addClass('hidden');
				}
			});
		</script>
		<div class="clear"></div>
	</header>
	<div class="yp_side_menu has_side_menu">
		<div id="main-container" class="container    home-container main-content" data-logged="true">
			<div class="ads-placment" id="header_ad_"></div>
			<div class="announcement-renderer">

			</div>

			<div id="" class=" new_left_right">
				<div class="left_menu desktop">
					<div class="top_logo hide_iam_from_mobile">
						<a class="navbar-brand logo-img" href="0533424127" itemprop="url">
							<img itemprop="logo" src="https://th.bing.com/th/id/R.b8e8ea67e18c202f5a34049a707683fa?rik=l97aDpAB8lTACg&pid=ImgRaw&r=0" alt="PlayTube - The Ultimate Video Sharing Platform">
						</a>
					</div>

					<div class="yp_side_drawer">
						<span class="open_side_menu_head">
							<span onclick="javascript:$('body').removeClass('side_open');$('body').removeClass('mobi_side_open');">
								<svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
									<path fill="currentColor" d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
									</path>
								</svg>
							</span>
						</span>

						<ul class="sections pt-200">
							<div class="menu_static_text top_static">
								MENU
							</div>
							<li class="active" id="home_menu_">
								<a href="index.php" data-load="?link1=home">

									<svg id="Group_279" data-name="Group 279" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
										<path id="Home_1" data-name="Home 1" d="M4.783,2.966C7.45,1.028,8.784.059,10.307,0q.183-.007.367,0C12.2.059,13.529,1.028,16.2,2.966s4,2.906,4.524,4.337q.063.172.113.349c.417,1.466-.092,3.033-1.111,6.168L18,19.116a2.043,2.043,0,0,1-3.985-.631V15.736A1.917,1.917,0,0,0,12.1,13.82H8.88a1.917,1.917,0,0,0-1.917,1.917v2.749a2.043,2.043,0,0,1-3.985.631l-1.721-5.3C.238,10.685-.271,9.117.146,7.652Q.2,7.475.259,7.3C.783,5.872,2.117,4.9,4.783,2.966Z" transform="translate(2 2)" fill="currentColor"></path>
										<rect id="Rectangle_312" data-name="Rectangle 312" width="24" height="24" fill="none"></rect>
									</svg>
									<span>Home</span>
								</a>
							</li>
						</ul>



						<ul class="sections">
							<li class="hide-from-mobile " id="shorts_menu_">
								<a href="#" data-load="?link1=shorts&amp;id=">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
										<g id="Group_290" data-name="Group 290" transform="translate(1296 2420)">
											<path id="Group_261" data-name="Group 261" d="M14,1.732a6,6,0,0,0-6,0L3.608,4.267a6,6,0,0,0-3,5.2v5.072a6,6,0,0,0,3,5.2L8,22.267a6,6,0,0,0,6,0l4.392-2.536a6,6,0,0,0,3-5.2V9.464a6,6,0,0,0-3-5.2ZM10.1,16.247q.627.057,1.159.057a8.134,8.134,0,0,0,1.539-.142,4.885,4.885,0,0,0,1.339-.427,2.5,2.5,0,0,0,.931-.8,2.254,2.254,0,0,0-.01-2.432,2.574,2.574,0,0,0-1.092-.836,8.634,8.634,0,0,0-1.891-.579,7.84,7.84,0,0,1-1.938-.618,1.09,1.09,0,0,1-.665-1,.866.866,0,0,1,.323-.7,2.065,2.065,0,0,1,.865-.4,4.89,4.89,0,0,1,1.168-.133,6.971,6.971,0,0,1,1.216.095,5.879,5.879,0,0,0,.912.086,1.111,1.111,0,0,0,.37-.057.54.54,0,0,0,.266-.181.521.521,0,0,0,.1-.333q0-.209-.275-.361a2.621,2.621,0,0,0-.722-.266,8.13,8.13,0,0,0-.969-.161,9.034,9.034,0,0,0-1-.057,7.981,7.981,0,0,0-1.587.152,5.118,5.118,0,0,0-1.339.437,2.645,2.645,0,0,0-.922.741,1.646,1.646,0,0,0-.332,1.026,1.9,1.9,0,0,0,.389,1.2,3.03,3.03,0,0,0,1.14.855,8.838,8.838,0,0,0,1.843.57,11.855,11.855,0,0,1,1.653.437,1.976,1.976,0,0,1,.845.513,1.105,1.105,0,0,1,.247.751.942.942,0,0,1-.408.807,2.53,2.53,0,0,1-1.026.418,6.715,6.715,0,0,1-1.3.124,6.841,6.841,0,0,1-1.216-.1q-.57-.114-1.026-.218a3.312,3.312,0,0,0-.713-.1.77.77,0,0,0-.5.142.525.525,0,0,0-.171.428.508.508,0,0,0,.171.4,1.668,1.668,0,0,0,.475.266,5.039,5.039,0,0,0,.95.256A11.4,11.4,0,0,0,10.1,16.247Z" transform="translate(-1294.608 -2419.928)" fill="currentColor" fill-rule="evenodd"></path>
											<rect id="Rectangle_310" data-name="Rectangle 310" width="24" height="24" transform="translate(-1296 -2420)" fill="none"></rect>
										</g>
									</svg>

									<span>Shorts</span>
								</a>
							</li>
						</ul>

						<ul class="sections subs_list">

							<!-- <h3>Subscriptions</h3> -->

							<!--<li><a href="javascript:void(0)" onclick="load_more_sub()" id="user_subscribers__load">Show more</a></li>-->
						</ul>

						<ul class="sections more_links_list">
							<li>
								<a href="#" data-load="?link1=contact">

									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M10.397 3.89454C11.457 3.70182 12.543 3.70182 13.603 3.89454C18.3658 4.76051 21.5798 9.25273 20.8617 14.0401L20.8535 14.0946C19.4028 14.1708 18.25 15.3711 18.25 16.8408V18.8408C18.25 20.3596 19.4812 21.5908 21 21.5908C22.5188 21.5908 23.75 20.3596 23.75 18.8408V16.8408C23.75 15.7999 23.1721 14.8952 22.3203 14.4281L22.3451 14.2626C23.1834 8.67386 19.4314 3.42967 13.8713 2.41873C12.6339 2.19376 11.3661 2.19376 10.1287 2.41873C4.56859 3.42967 0.816569 8.67386 1.65488 14.2626L1.67971 14.4281C0.827854 14.8952 0.25 15.7999 0.25 16.8408V18.8408C0.25 20.3596 1.48122 21.5908 3 21.5908C4.51878 21.5908 5.75 20.3596 5.75 18.8408V16.8408C5.75 15.3711 4.59716 14.1708 3.14647 14.0946L3.13829 14.0401C2.42018 9.25273 5.63419 4.76051 10.397 3.89454Z" fill="currentColor"></path>
										<path d="M7.53033 13.3105C7.23744 13.0176 6.76256 13.0176 6.46967 13.3105C6.17678 13.6034 6.17678 14.0782 6.46967 14.3711L6.86967 14.7711C6.93136 14.8328 6.9566 14.8581 6.97686 14.8789C8.57962 16.5283 8.57962 19.1533 6.97686 20.8027C6.9566 20.8235 6.93136 20.8488 6.86967 20.9105L6.46967 21.3105C6.17678 21.6034 6.17678 22.0782 6.46967 22.3711C6.76256 22.664 7.23744 22.664 7.53033 22.3711L7.93574 21.9657C7.9904 21.9111 8.02394 21.8775 8.0526 21.848C10.221 19.6166 10.221 16.065 8.0526 13.8336C8.02388 13.804 7.99048 13.7706 7.93563 13.7158L7.53033 13.3105Z" fill="currentColor"></path>
										<path d="M17.5303 14.3711C17.8232 14.0782 17.8232 13.6034 17.5303 13.3105C17.2374 13.0176 16.7626 13.0176 16.4697 13.3105L16.0644 13.7157C16.0095 13.7706 15.9761 13.804 15.9474 13.8336C13.779 16.065 13.779 19.6166 15.9474 21.848C15.9761 21.8776 16.0095 21.9109 16.0643 21.9658L16.4697 22.3711C16.7626 22.664 17.2374 22.664 17.5303 22.3711C17.8232 22.0782 17.8232 21.6034 17.5303 21.3105L17.1303 20.9105C17.0686 20.8488 17.0434 20.8235 17.0231 20.8027C15.4204 19.1533 15.4204 16.5283 17.0231 14.8789C17.0434 14.8581 17.0686 14.8328 17.1303 14.7711L17.5303 14.3711Z" fill="currentColor"></path>
									</svg>


									<span>posts</span>
								</a>
							</li>
						</ul>
						<div class="hidden cats_section">
							<div class="menu_static_text" style="margin-top: 20px;">
								Categories
							</div>

						</div>
					</div>
				</div>

				<div class="content_main_wrapper">

					<div id="container_content">
						<style type="text/css">
							#container_content {
								margin-top: 66px;
							}

							.swal2-modal {
								width: 600px !important;
							}
						</style>

						<div class="top_marsking">

						</div>
						<div class="owl-carousel pl_feat_vid_slider owl-theme home_feat pt_new_home_feat_vidd owl-loaded owl-drag">



							<div class="owl-dots disabled"></div>
						</div>



						<!-- Modal -->
						<div class="share_feat_vid hidden">
							<div class="pt_wallet_forms">
								<div class="form-group">
									<label>
										<span>Share</span>
									</label>
								</div>
							</div>
							<div class="video_section_wrap form-group">
								<div class="share-video" style="width: 100%;">
									<div class="row share-input" style="width: 100%;">
										<div class="col-md-10">
											<input type="text" value="0533424127watch/w5ul4cegwQVShpf" id="copy_feaat_vid" class="form-control input-md" readonly="readonly" onclick="this.select();">
										</div>
									</div>
								</div>
							</div>
						</div>

						<script>
							function copyFeatvid() {
								var copyText = document.getElementById("copy_feaat_vid");
								copyText.select();
								copyText.setSelectionRange(0, 99999);
								navigator.clipboard.writeText(copyText.value);
								Snackbar.show({
									showAction: false,
									pos: 'bottom-center',
									text: 'Link Copied'
								});
							}

							function openShareModal() {
								swal({
									html: $('.share_feat_vid').clone().addClass('clone').removeClass('hidden'),
									showCloseButton: true,
									showCancelButton: false,
									focusConfirm: false,
									showConfirmButton: false,
									buttonsStyling: false,
									allowOutsideClick: true,
									showLoaderOnConfirm: true,
								}).then(function() {
									/*pass*/
								}, function() {
									/*pass*/
								});
							}

							var swiper = new Swiper('.pt_sec_nav_slide_prnt', {
								loop: false,
								slidesPerView: "auto",

								// Navigation arrows
								navigation: {
									nextEl: '.swiper-button-next',
									prevEl: '.swiper-button-prev',
								},
							});

							$(document).ready(function() {
								$(".pl_feat_vid_slider").owlCarousel({
									items: 1,
									nav: true,
									dots: false,
									navContainer: '.pl_feat_vid_slide_nav',
									// dotsContainer: '.pl_feat_vid_slide_dots',
									navText: ['<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z" /></svg>', '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" /></svg>'],
								});
							});

							$(document).ready(function() {
								if (!$.trim($('.pt_no_vid_found_trend').html()).length) {
									$('.pt_no_vid_found_trend').html(`<h5 class="empty_state"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" class="feather"><path fill="currentColor" d="M21 14.2V8.91c0-.89-1.08-1.34-1.71-.71L17 10.5V7c0-.55-.45-1-1-1h-5.61l8.91 8.91c.62.63 1.7.18 1.7-.71zM2.71 2.56c-.39.39-.39 1.02 0 1.41L4.73 6H4c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.21 0 .39-.08.55-.18l2.48 2.48c.39.39 1.02.39 1.41 0 .39-.39.39-1.02 0-1.41L4.12 2.56c-.39-.39-1.02-.39-1.41 0z"/></svg> No videos found for now!</h5>`);
								};
							});

							$(document).ready(function() {
								if (!$.trim($('.pt_no_vid_found_top').html()).length) {
									$('.pt_no_vid_found_top').html('<h5 class="empty_state"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" class="feather"><path fill="currentColor" d="M21 14.2V8.91c0-.89-1.08-1.34-1.71-.71L17 10.5V7c0-.55-.45-1-1-1h-5.61l8.91 8.91c.62.63 1.7.18 1.7-.71zM2.71 2.56c-.39.39-.39 1.02 0 1.41L4.73 6H4c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.21 0 .39-.08.55-.18l2.48 2.48c.39.39 1.02.39 1.41 0 .39-.39.39-1.02 0-1.41L4.12 2.56c-.39-.39-1.02-.39-1.41 0z"/></svg> No videos found for now!</h5>');
								};
							});

							$(function() {
								$('#save-button').on('click', function(event) {
									event.preventDefault();
									var logged = $('#main-container').attr('data-logged');
									if (!logged) {
										window.location.href = "0533424127login?to=#.com%2F";
										return false;
									}
									var video_id = $('#video-id').val();
									if ($(this).attr('saved')) {
										$(this).html('<i class="fa fa-floppy-o fa-fw"></i> Save');
										$(this).removeAttr('saved');
									} else {
										$(this).html('<i class="fa fa-check fa-fw"></i> Saved');
										$(this).attr('saved', 'true');
									}
									$.post('0533424127aj/save-video', {
										video_id: video_id
									});
								});
							});

							$(document).ready(function() {
								$('.cus_story_slider').slick({
									infinite: false,
									slidesToShow: 6,
									slidesToScroll: 2,
									responsive: [{
											breakpoint: 1360,
											settings: {
												slidesToShow: 4
											}
										},
										{
											breakpoint: 1251,
											settings: {
												slidesToShow: 5
											}
										},
										{
											breakpoint: 1127,
											settings: {
												slidesToShow: 4
											}
										},
										{
											breakpoint: 992,
											settings: {
												slidesToShow: 4
											}
										},
										{
											breakpoint: 910,
											settings: {
												slidesToShow: 3
											}
										},
										{
											breakpoint: 705,
											settings: {
												slidesToShow: 2
											}
										},
										{
											breakpoint: 530,
											settings: {
												arrows: false,
												slidesToShow: 2,
												waitForAnimate: false,
											}
										},
										{
											breakpoint: 485,
											settings: {
												arrows: false,
												slidesToShow: 2,
												slidesToScroll: 1,
												waitForAnimate: false,
											}
										}
									]
								});
							});
						</script>
						<script type="text/javascript">
							$(document).ready(function() {
								$('.cus_slider').slick({
									prevArrow: "<div class='explore_more prev' aria-disabled='true'><img class='slick-prev' src='0533424127themes/default/img/arrow.svg'></div>",
									nextArrow: "<div class='explore_more next'><img class='slick-next' src='0533424127themes/default/img/arrow.svg'></div>",
									infinite: false,
									slidesToShow: 4,
									slidesToScroll: 1,
									responsive: [{
											breakpoint: 1360,
											settings: {
												slidesToShow: 4
											}
										},
										{
											breakpoint: 1251,
											settings: {
												slidesToShow: 4
											}
										},
										{
											breakpoint: 1127,
											settings: {
												slidesToShow: 4
											}
										},
										{
											breakpoint: 992,
											settings: {
												slidesToShow: 4
											}
										},
										{
											breakpoint: 910,
											settings: {
												slidesToShow: 3
											}
										},
										{
											breakpoint: 705,
											settings: {
												slidesToShow: 1
											}
										},
										{
											breakpoint: 530,
											settings: {
												arrows: false,
												slidesToShow: 1,
												waitForAnimate: false,
											}
										},
										{
											breakpoint: 485,
											settings: {
												arrows: false,
												slidesToShow: 1,
												slidesToScroll: 1,
												waitForAnimate: false,
											}
										}
									]
								});
							});
						</script>
					</div>
				</div>

			</div>




			<input type="hidden" id="main-url" value="#">
			<div class="ads-placment" id="footer_ad_"></div>
		</div>
	</div>

	<script>
		function PT_PlaylistSubscribe(user_id, type, playlist) {
			if (!user_id || !type || !playlist) {
				return false;
			}
			if (!$('#main-container').attr('data-logged') && $('#main-url').val()) {
				window.location.href = PT_Ajax_Requests_File() + 'login?to=' + $('#main-url').val();
				return false;
			}
			var subscribe_button = $('.subscribe-id-playlist-' + user_id);
			if (type == 'subscribe') {
				subscribe_button.removeClass('plist-btn-subscribe').addClass('plist-btn-subscribed');
				subscribe_button.html('<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M17.75 21.16L15 18.16L16.16 17L17.75 18.59L21.34 15L22.5 16.41L17.75 21.16M3 20V19L5 17V11C5 7.9 7.03 5.18 10 4.29V4C10 2.9 10.9 2 12 2C13.11 2 14 2.9 14 4V4.29C16.97 5.18 19 7.9 19 11V12.08L18 12C14.69 12 12 14.69 12 18C12 18.7 12.12 19.37 12.34 20H3M12 23C10.9 23 10 22.11 10 21H12.8C13.04 21.41 13.33 21.79 13.65 22.13C13.29 22.66 12.69 23 12 23Z" /></svg>');
				subscribe_button.attr('onclick', 'PT_PlaylistSubscribe(' + user_id + ', "subscribed","' + playlist + '")');
				subscribe_button.attr('title', 'Subscribed to Playlist Notifications');
				$.post('0533424127aj/playlist_subscribe', {
					user_id: user_id,
					playlist: playlist
				});
			} else {
				var html = "<small>Are you sure you want to unsubscribe? This action can't be undo.</small>";
				swal({
					title: "",
					type: "",
					html: html,
					showCancelButton: true,
					cancelButtonText: "No",
					customClass: 'sweetalert-lg pt_add_to_list_vid',
					confirmButtonText: 'Yes'
				}).then(function() {
					subscribe_button.removeClass('plist-btn-subscribed').addClass('plist-btn-subscribe');
					subscribe_button.html('<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M21,19V20H3V19L5,17V11C5,7.9 7.03,5.17 10,4.29C10,4.19 10,4.1 10,4A2,2 0 0,1 12,2A2,2 0 0,1 14,4C14,4.1 14,4.19 14,4.29C16.97,5.17 19,7.9 19,11V17L21,19M14,21A2,2 0 0,1 12,23A2,2 0 0,1 10,21M19.75,3.19L18.33,4.61C20.04,6.3 21,8.6 21,11H23C23,8.07 21.84,5.25 19.75,3.19M1,11H3C3,8.6 3.96,6.3 5.67,4.61L4.25,3.19C2.16,5.25 1,8.07 1,11Z" /></svg>');
					subscribe_button.attr('onclick', 'PT_PlaylistSubscribe(' + user_id + ', "subscribe","' + playlist + '")');
					subscribe_button.attr('title', 'Subscribe for Notifications');
					$.post('0533424127aj/playlist_subscribe', {
						user_id: user_id,
						playlist: playlist
					});

				}, function() {});

			}

		}

		function PT_Subscribe(user_id, type) {
			if (!user_id || !type) {
				return false;
			}
			if (!$('#main-container').attr('data-logged') && $('#main-url').val()) {
				window.location.href = PT_Ajax_Requests_File() + 'login?to=' + $('#main-url').val();
				return false;
			}
			var subscribe_button = $('.subscribe-id-' + user_id);
			if (type == 'subscribe') {
				subscribe_button.removeClass('btn-subscribe').addClass('btn-subscribed');
				subscribe_button.html('<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg> Subscribed');
				subscribe_button.attr('onclick', 'PT_Subscribe(' + user_id + ', "subscribed")');
				$.post('0533424127aj/subscribe', {
					user_id: user_id
				});
			} else {
				var html = "<small>Are you sure you want to unsubscribe? This action can't be undo.</small>";
				swal({
					title: "",
					type: "",
					html: html,
					showCancelButton: true,
					cancelButtonText: "No",
					customClass: 'sweetalert-lg pt_add_to_list_vid',
					confirmButtonText: 'Yes'
				}).then(function() {
					subscribe_button.removeClass('btn-subscribed').addClass('btn-subscribe');
					subscribe_button.html('<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg> Subscribe');
					subscribe_button.attr('onclick', 'PT_Subscribe(' + user_id + ', "subscribe")');
					$.post('0533424127aj/subscribe', {
						user_id: user_id
					});

				}, function() {});
			}

		}

		function PT_Reply(comm_id, name, reply_id) {
			if (!comm_id) {
				return false;
			}
			var logged = $('#main-container').attr('data-logged');
			var name = (name) ? "@" + name + ": " : '';
			if (!logged) {
				window.location.href = "index.php";
				return false;
			} else {
				var reply_form = $('#comm-reply-' + comm_id);

				reply_form.removeClass('hidden').find('.form-control').val(name).focus().scrollTo();

				if (reply_id) {
					reply_form.attr('data-reply-id', reply_id);
				}

			}
		}

		$(function() {
			$(document).on('click', '.load-more', function(event) {
				event.preventDefault();
				var $type = $(this).attr('data-type');
				var keyword = '';
				if ($(this).attr('data-keyword')) {
					keyword = $(this).attr('data-keyword');
				}
				var last_id = $('.video-wrapper:last').attr('data-id');
				var sub_category = '';
				if ($(this).attr('data-category')) {
					var $category_id = $(this).attr('data-category');
					sub_category = $(this).attr('data-sub-category-id');
					$type = 'category?c_id=' + $category_id + '&sub_category=' + sub_category;
				}
				views = 0;
				if ($('.video-wrapper:last').attr('data-views')) {
					var views = $('.video-wrapper:last').attr('data-views');
					$type = $type + '?views=' + views;
				}
				tr_id = 0;
				if ($('.video-wrapper:last').attr('data-tr')) {
					var tr_id = $('.video-wrapper:last').attr('data-tr');
					$type = $type + '?tr_id=' + tr_id;
				}
				user_id = 0;
				if ($('#profile-id').val()) {
					var user_id = $('#profile-id').val();
				}

				data1 = {};
				if ($type == 'top') {
					for (var i = 0; i < $('.video-wrapper').length; i++) {
						if ($($('.video-wrapper')[i]).attr('data-views') == views) {
							data1[i] = $($('.video-wrapper')[i]).attr('data-views');
						}
					}
				} else {
					if (views) {
						var asdf = $('div[data-views=' + views + ']').each(function(index, el) {
							data1[index] = $(this).attr('data-id')
						});
					}
				}

				date = '';
				category = '';
				if ($(this).attr('data-type') == 'search') {
					date = $(this).attr('data-by-date');
					category = $(this).attr('data-by-category');
				}

				paid_sort = '';
				if ($(this).attr('data-type') == 'paid_videos') {
					paid_sort = $(this).attr('data-video-type');
				}

				if ($(this).attr('data-type') == 'video_comment') {
					$type = 'video_comment';
					last_id = $('.comment_info:last').attr('data-comment-id');
				}

				video_studio_ids = [];
				video_studio_type = '';

				if ($(this).attr('data-type') == 'video_studio') {
					for (var i = 0; i < $('.video-wrapper').length; i++) {
						video_studio_ids.push($($('.video-wrapper')[i]).attr('data-id'));
					}
					video_studio_type = $(this).attr('sort-type');
				}

				var channels_ids = [];
				var sort_type = '';
				var sort_by = '';

				if ($(this).attr('data-type') == 'popular_channels') {
					channels_ids = [];
					last_id = $('.channels_list:last').attr('data-channel-views');
					for (var i = 0; i < $('.channels_list').length; i++) {
						if ($($('.channels_list')[i]).attr('data-channel-views') == last_id) {
							channels_ids.push($($('.channels_list')[i]).attr('data-channel-id'));
						}
					}
					sort_by = $(this).attr('data-sort-by');
					sort_type = $(this).attr('data-sort-type');
				}

				$('.load-more').text("Please wait..");
				$.post('0533424127aj/load-more/' + $type + '', {
					last_id: last_id,
					ids: data1,
					keyword: keyword,
					user_id: user_id,
					date: date,
					category: category,
					video_studio_ids: video_studio_ids,
					video_studio_type: video_studio_type,
					channels_ids: channels_ids,
					sort_type: sort_type,
					sort_by: sort_by,
					paid_sort: paid_sort
				}, function(data, textStatus, xhr) {
					if (data.status == 200) {
						if ($type == 'subscriptions' || $type == 'history' || $type == 'saved_videos' || $type == 'liked_videos' || $type == 'my_videos' || $type == 'video_studio' || $type == 'search' || $type == 'popular_channels') {
							if ($('#video_studio_ids').length > 0) {
								$('#video_studio_ids').attr('value', data.video_ids_);
								$('#video_studio_ids').attr('data_by_id', data.by_ids);
							}
							$('.author-list').append(data.videos);
						} else {
							if ($type == 'video_comment') {
								$('#comments_container').append(data.comments);
							} else {
								$('.videos-latest-list').append(data.videos);
							}
						}
						$('.load-more').text("Show more");
					} else {
						if ($type == 'video_comment') {
							$('.load-more').text("No more comments found");
						} else if ($type == 'popular_channels') {
							$('.load-more').text("No more channels to show");
						} else {
							$('.load-more').text("No more videos to show");
						}
					}
					scrolled = 0;
				});
			});
		});


		function PT_LoadPost(category, self) {
			if (!self) {
				return false;
			}

			var last_id = ($('.article-wrapper').length > 0) ? $('.article-wrapper:last').attr('data-id') : 0;
			if (last_id && last_id > 0) {
				$.post('0533424127aj/load-more/articles', {
					last_id: last_id,
					cat: category
				}, function(data, textStatus, xhr) {
					if (data.status == 200) {
						$('.articles-container').append(data.posts);
						$(self).text("Show more");
					} else {
						$(self).text("No more Articles");
					}
				});
			}
		}

		function PT_LoadActivity(self) {
			if (!self) {
				return false;
			}

			var last_id = ($('.article-wrapper').length > 0) ? $('.article-wrapper:last').attr('data-id') : 0;
			if (last_id && last_id > 0) {
				$.post('0533424127aj/load-more/activity', {
					last_id: last_id
				}, function(data, textStatus, xhr) {
					if (data.status == 200) {
						$('.articles-container').append(data.posts);
						$(self).text("Show more");
					} else {
						$(self).text("No activities to view");
					}
				});
			}
		}

		function PT_DeleteVideo(id, type) {
			if (!id) {
				return false;
			}
			if (!confirm("Are you sure you want to delete this video? This action can't be undo")) {
				return false;
			}
			if (type == 'edit-page') {
				$('.btn-delete').attr('disabled', true);
				$('.btn-delete').val("Please wait..");
			} else if (type == 'manage-page') {
				$('#video-' + id).slideUp('200', function() {
					$(this).remove();
				});
			}
			$.post('0533424127aj/delete-video', {
				id: id
			}, function(data, textStatus, xhr) {
				if (data.status == 200) {
					if (type == 'edit-page') {
						window.location.href = '#';
					}
				}
			});
		}

		function PT_DeleteActivity(id) {
			if (!id) {
				return false;
			}
			if (!confirm("Are you sure you want to delete this activity? This action can't be undo.")) {
				return false;
			}

			$('#activity-' + id).slideUp('200', function() {
				$(this).remove();
			});

			$.post('0533424127aj/delete-activity', {
				id: id
			}, function(data, textStatus, xhr) {});
		}

		function PT_DeleteHistory(id) {
			if (!id) {
				return false;
			}
			$('#video-' + id).fadeOut('200', function() {
				$(this).remove();
			});
			$.post('0533424127aj/delete-history', {
				id: id
			});
			Snackbar.show({
				text: '<div><img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0nMjAnIGhlaWdodD0nMjAnIHZpZXdCb3g9JzAgMCAyMCAyMCcgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJz4KCTxnPgoJCTxwYXRoIGQ9J00tMi0yaDI0djI0SC0yeicgZmlsbD0nbm9uZScvPgoJCTxwYXRoIGQ9J00xMCAwQzQuNDggMCAwIDQuNDggMCAxMHM0LjQ4IDEwIDEwIDEwIDEwLTQuNDggMTAtMTBTMTUuNTIgMCAxMCAwek04IDE1bC01LTUgMS40MS0xLjQxTDggMTIuMTdsNy41OS03LjU5TDE3IDZsLTkgOXonIGZpbGw9JyMyNkJDNEUnLz4KCTwvZz4KPC9zdmc+Cg=="/> Removed from History</div>'
			});
		}

		function PT_DeleteSaved(id) {
			if (!id) {
				return false;
			}
			$('#video-' + id).slideUp('200', function() {
				$(this).remove();
			});
			$.post('0533424127aj/delete-saved', {
				id: id
			});
		}

		function PT_AddToList(video_id) {
			if (!video_id) {
				return false;
			}

			var name = '';
			var desc = '';
			var id = video_id;

			$.ajax({
					url: '#',
					type: 'GET',
					dataType: 'json',
					data: {
						type: 'list',
						a: 'add',
						id: id
					},
				})
				.done(function(data) {
					if (data.status == 200) {
						swal({
							title: "",
							type: "",
							html: data.html,
							showCancelButton: true,
							cancelButtonText: "Close",
							customClass: 'sweetalert-lg pt_add_to_list_vid',
							confirmButtonText: 'Create new'
						}).then(function() {
							PT_NewList();
						}, function() {});
					} else {
						swal(
							'Error!',
							'Something went wrong.Please try again later!',
							'error'
						);
					}
				})
				.fail(function() {
					console.log("error");
				})
				.always(function() {
					console.log("complete");
				});
		}

		function PT_ReportVideo(video_id, self) {
			if (!video_id || !self) {
				return false;
			}

			var message = "";
			self = $(self);
			if (self.attr('data-rep') == 1) {
				swal({
					title: 'Report this video',
					html: $('<form>').add($('<p>', {
						text: "Please write a summary of what this video was about",
						class: 'report-message-label'
					})).add($('<textarea>', {
						id: 'report-message',
						rows: 4,
						placeholder: 'Message'
					})),
					showCancelButton: true,
					confirmButtonText: 'Submit',
					cancelButtonText: 'Cancel',
					confirmButtonClass: 'btn btn-main btn-block pt_wallet_btn',
					cancelButtonClass: "btn btn-default btn-block pt_wallet_btn",
					customClass: 'report-video-popup',
					buttonsStyling: false,
					animation: false,
					preConfirm: function(name) {
						return new Promise(function(resolve, reject) {
							message = $('#report-message').val();
							if (message.length < 1) {
								swal.showValidationError(
									'Please check the details'
								);
								reject();
							} else {
								resolve();
							}
						});
					},
					allowOutsideClick: false
				}).then(function() {
					$.ajax({
							url: '0533424127aj/report/video/report',
							type: 'POST',
							dataType: 'json',
							data: {
								id: video_id,
								text: message
							},
						})
						.done(function(data) {
							if (data.status == 200) {
								swal({
									title: 'Thank you',
									html: 'We have received your report!'
								});
								self.find('span').text('Cancel Report');
								self.attr('data-rep', '0');
								self.addClass('active');
							} else if (data.status == 304) {
								self.find('span').text('Report');
								self.attr('data-rep', '1');
								self.removeClass('active');
								notif({
									msg: "Your report has been canceled!",
									type: "default",
									fade: 0,
									timeout: 1500
								});
							}
						});
				});
			} else {
				$.ajax({
						url: '0533424127aj/report/video/cancel',
						type: 'POST',
						dataType: 'json',
						data: {
							id: video_id
						},
					})
					.done(function(data) {
						if (data.status == 304) {
							self.find('span').text('Report');
							self.attr('data-rep', '1');
							self.removeClass('active');
							notif({
								msg: "Your report has been canceled!",
								type: "default",
								fade: 0,
								timeout: 1500
							});
						}
					});
			}
		}

		function PT_ReportCopyVideo(video_id, self) {
			if (!video_id || !self) {
				return false;
			}
			var text1 = "I have a good faith belief that use of the copyrighted work described above is not authorized by the copyright owner, its agent or the law";
			var text2 = "I confirm that I am the copyright owner or am authorised to act on behalf of the owner of an exclusive right that is allegedly infringed.";
			var error = "Please select the checkboxs below if you own the copyright.";
			swal({
				title: 'Create DMCA take down notice',
				html: $('<form>').add($('<p>', {
					text: "Please describe your request carefully and as much as you can, note that false DMCA requests can lead to account termination.",
					class: 'report-message-label'
				})).add($('<textarea>', {
					id: 'report-message-copy',
					rows: 4,
					placeholder: 'Message'
				})).add($('<div class="custom-control custom-radio checkbox checkbox-primary"><input type="checkbox" id="confirm_1" name="confirm_1" class="custom-control-input"><label class="custom-control-label" for="confirm_1">' + text1 + '</label></div><div class="custom-control custom-radio checkbox checkbox-primary"><input type="checkbox" id="confirm_2" name="confirm_2" class="custom-control-input"><label class="custom-control-label" for="confirm_2">' + text2 + '</label></div>')),
				showCancelButton: true,
				confirmButtonText: 'Submit',
				cancelButtonText: 'Cancel',
				customClass: 'report-video-popup pt_rep_copy_vid',
				confirmButtonClass: 'btn btn-main btn-block pt_wallet_btn',
				cancelButtonClass: "btn btn-default btn-block pt_wallet_btn",
				animation: false,
				buttonsStyling: false,
				preConfirm: function(name) {
					return new Promise(function(resolve, reject) {
						message = $('#report-message-copy').val();
						if (message.length < 1) {
							swal.showValidationError(
								'Please check the details'
							);
							reject();
						} else {
							if ($('#confirm_1').is(':not(:checked)')) {
								swal.showValidationError(
									error
								);
								reject();
							} else {
								if ($('#confirm_2').is(':not(:checked)')) {
									swal.showValidationError(
										error
									);
									reject();
								} else {
									resolve();
								}
							}
						}
					});
				},
				allowOutsideClick: false
			}).then(function() {
				$.ajax({
						url: '0533424127aj/main/copy_report?hash=' + $('.main_session').val(),
						type: 'POST',
						dataType: 'json',
						data: {
							id: video_id,
							text: message
						},
					})
					.done(function(data) {
						if (data.status == 200) {
							swal({
								title: 'Thank you',
								html: 'We have received your report!'
							});
						} else if (data.status == 304) {
							self.find('span').text('Report');
							self.attr('data-rep', '1');
							self.removeClass('active');
							notif({
								msg: "Your report has been canceled!",
								type: "default",
								fade: 0,
								timeout: 1500
							});
						}
					});
			});

		}

		function PT_PLVToggle(id, self) {
			if (!id || !self) {
				return false;
			}
			var self = $(self);
			var list = self.attr('id');
			$.ajax({
					url: '0533424127aj/lists',
					type: 'GET',
					dataType: 'json',
					data: {
						type: 'list',
						a: 'tg',
						id: id,
						list: list
					},
				})
				.done(function(data) {
					if (data.status == 200 && data.code == 1) {
						self.find('.pt-plist-tgl_btn').html('<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="green" d="M17,7H7A5,5 0 0,0 2,12A5,5 0 0,0 7,17H17A5,5 0 0,0 22,12A5,5 0 0,0 17,7M17,15A3,3 0 0,1 14,12A3,3 0 0,1 17,9A3,3 0 0,1 20,12A3,3 0 0,1 17,15Z" /></svg>');
						notif({
							msg: "Added to " + data.name,
							type: "default",
							fade: 0,
							timeout: 1500
						});
					} else if (data.status == 200 && data.code == 0) {
						self.find('.pt-plist-tgl_btn').html('<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M7,10A2,2 0 0,1 9,12A2,2 0 0,1 7,14A2,2 0 0,1 5,12A2,2 0 0,1 7,10M17,7A5,5 0 0,1 22,12A5,5 0 0,1 17,17H7A5,5 0 0,1 2,12A5,5 0 0,1 7,7H17M7,9A3,3 0 0,0 4,12A3,3 0 0,0 7,15H17A3,3 0 0,0 20,12A3,3 0 0,0 17,9H7Z" /></svg>');
						notif({
							msg: "Removed from " + data.name,
							type: "default",
							fade: 0,
							timeout: 1500
						});
					} else {
						swal(
							'Error!',
							'Something went wrong.Please try again later!',
							'error'
						);
					}
				})
				.fail(function() {
					console.log("error");
				})
		}

		function PT_WLToggle(id, self) {
			if (!id || !self) {
				return false;
			}
			var self = $(self);
			$.ajax({
					url: '0533424127aj/lists',
					type: 'GET',
					dataType: 'json',
					data: {
						type: 'list',
						a: 'wl-tg',
						id: id
					},
				})
				.done(function(data) {
					if (data.status == 200 && data.code == 1) {
						self.find('.pt-plist-tgl_btn').html('<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="green" d="M17,7H7A5,5 0 0,0 2,12A5,5 0 0,0 7,17H17A5,5 0 0,0 22,12A5,5 0 0,0 17,7M17,15A3,3 0 0,1 14,12A3,3 0 0,1 17,9A3,3 0 0,1 20,12A3,3 0 0,1 17,15Z" /></svg>');
						notif({
							msg: "Added to \"Watch later\"",
							type: "default",
							fade: 0,
							timeout: 1500
						});
					} else if (data.status == 200 && data.code == 0) {
						self.find('.pt-plist-tgl_btn').html('<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M7,10A2,2 0 0,1 9,12A2,2 0 0,1 7,14A2,2 0 0,1 5,12A2,2 0 0,1 7,10M17,7A5,5 0 0,1 22,12A5,5 0 0,1 17,17H7A5,5 0 0,1 2,12A5,5 0 0,1 7,7H17M7,9A3,3 0 0,0 4,12A3,3 0 0,0 7,15H17A3,3 0 0,0 20,12A3,3 0 0,0 17,9H7Z" /></svg>');
						notif({
							msg: "Removed from \"Watch later\"",
							type: "default",
							fade: 0,
							timeout: 1500
						});
					} else {
						swal(
							'Error!',
							'Something went wrong.Please try again later!',
							'error'
						);
					}
				})
				.fail(function() {
					console.log("error");
				})
		}

		function PT_NewList() {
			swal({
				title: '',
				type: "",
				html: '<form class="form pt_forms create-new-list"><div class="create-new-list-head"><p>Create new playlist</p></div><div class="sa-create-list-alert"></div><div class="form-group"><input type="text" class="form-control" placeholder="Playlist name 0 / 30"></div><div class="form-group"><select class="form-control"><option value="1" selected="selected">Privacy</option><option value="1">Public</option><option value="0">Private</option></select></div><div class="form-group"><textarea name="" id="" rows="3" class="form-control optional-field" placeholder="Description.."></textarea></div></form>',
				showCancelButton: true,
				allowOutsideClick: false,
				confirmButtonText: 'Create',
				cancelButtonText: 'Cancel',
				customClass: 'pt_add_to_list_vid',
				preConfirm: function(email) {
					return new Promise(function(resolve, reject) {
						name = $(".create-new-list").find('input').val();
						desc = $(".create-new-list").find('textarea').val();
						privacy = $(".create-new-list").find('select').val();
						setTimeout(function() {
							if (name == '') {
								reject('Play list name is required.');
							} else if (privacy < 0 || privacy > 1) {
								reject('Please check the details');
							} else {
								resolve();
							}
						}, 100)
					})
				}
			}).then(function() {
					if (!name) {
						return;
					}
					$.ajax({
							url: '0533424127aj/lists?type=list&a=new',
							type: 'POST',
							dataType: 'json',
							data: {
								name: name,
								desc: desc,
								pr: privacy
							},
						})
						.done(function(data) {
							if (data.status == 200) {
								swal({
									title: name,
									text: "PlayList was successful added!",
									type: 'success'
								});

								PT_Delay(function() {
									swal.close();
								}, 2000);
							} else if (data.status == 200) {
								swal(
									'Error!',
									'Something went wrong.Please try again later!',
									'error'
								);
							}
						})
						.fail(function() {
							swal.close();
							console.log("error");
						})
				},
				function() {
					//Error
				})
		}

		function PT_EditList(id) {
			if (!id) {
				return false;
			}
			$.ajax({
					url: '0533424127aj/lists',
					type: 'GET',
					dataType: 'json',
					data: {
						type: 'list',
						a: 'edit',
						id: id
					},
				})
				.done(function(data) {
					if (data.status == 200) {
						swal({
							title: '',
							type: "",
							html: data.html,
							showCancelButton: true,
							allowOutsideClick: false,
							confirmButtonText: '<i class="fa fa-floppy-o"></i> Save',
							cancelButtonText: 'Cancel',
							preConfirm: function(email) {
								return new Promise(function(resolve, reject) {
									name = $(".edit-list-form").find('input').val();
									desc = $(".edit-list-form").find('textarea').val();
									privacy = $(".edit-list-form").find('select').val();
									setTimeout(function() {
										if (name == '') {
											reject('');
										} else if (privacy < 0 || privacy > 1) {
											reject('Please check the details');
										} else {
											resolve();
										}
									}, 100)
								})
							}
						}).then(function() {
								if (!name) {
									return;
								}
								$.ajax({
										url: '0533424127aj/lists?type=list&a=update',
										type: 'POST',
										dataType: 'json',
										data: {
											name: name,
											desc: desc,
											pr: privacy,
											id: id
										},
									})
									.done(function(data) {
										if (data.status == 200) {
											swal({
												title: name,
												text: "PlayList was successful saved!",
												type: 'success'
											});

											PT_Delay(function() {
												swal.close();
											}, 2000);
										} else if (data.status == 200) {
											swal(
												'Error!',
												'Something went wrong.Please try again later!',
												'error'
											);
										}
									})
									.fail(function() {
										swal.close();
										console.log("error");
									})
							},
							function() {
								//Error
							})
					}
				})
				.fail(function() {
					console.log("error");
				})
		}

		function PT_DeleteList(id) {
			if (!id) {
				return false;
			}
			swal({
				title: 'Confirmation!',
				text: "Are you sure you want to delete this PlayList?",
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes,delete it!'
			}).then(function() {
				$.ajax({
						url: '0533424127aj/lists',
						type: 'GET',
						dataType: 'json',
						data: {
							type: 'list',
							a: 'delist',
							id: id
						},
					})
					.done(function(data) {
						if (data.status == 200) {
							$("[data-playlist='" + id + "']").slideUp(function() {
								$(this).remove();
							});

							swal({
								title: "Deleted!",
								text: data.name + " has been deleted!",
								type: "success"
							});
						} else {
							swal(
								'Error!',
								'Something went wrong.Please try again later!',
								'error'
							);
						}
					})
					.fail(function() {
						console.log("error");
					})

			})
		}

		function PT_DelFromList(list_id, video_id) {
			if (!list_id || !video_id) {
				return false;
			}

			$.ajax({
					url: '0533424127aj/lists',
					type: 'GET',
					dataType: 'json',
					data: {
						type: 'list',
						a: 'delvid',
						video_id: video_id,
						list_id: list_id
					},
				})
				.done(function(data) {
					if (data.status == 200) {
						$("[data-video-id='" + video_id + "']").slideUp(function() {
							$(this).remove();
						})
					} else {
						swal(
							'Error!',
							'Something went wrong.Please try again later!',
							'error'
						);
					}
				})
				.fail(function() {
					swal(
						'Error!',
						'Something went wrong.Please try again later!',
						'error'
					);
				})
		}

		function PT_RemoveFromWL(video_id) {
			if (!video_id) {
				return false;
			}

			$.ajax({
					url: '0533424127aj/lists',
					type: 'GET',
					dataType: 'json',
					data: {
						type: 'list',
						a: 'delwl',
						video_id: video_id
					},
				})
				.done(function(data) {
					if (data.status == 200) {
						$("[data-video-id='" + video_id + "']").slideUp(function() {
							$(this).remove();
						})
					} else {
						swal(
							'Error!',
							'Something went wrong.Please try again later!',
							'error'
						);
					}
				})
				.fail(function() {
					swal(
						'Error!',
						'Something went wrong.Please try again later!',
						'error'
					);
				})
		}

		function PT_RVReply(text, comm_id, event, video_id) {

			if (!text || !comm_id || !event || !video_id) {
				return false;
			} else if (event.keyCode == 13 && event.shiftKey == 0) {
				var reply_id = 0;
				if ($("#comm-reply-" + comm_id).attr('data-reply-id')) {
					reply_id = $("#comm-reply-" + comm_id).attr('data-reply-id');
				}

				$.ajax({
						url: "0533424127aj/add-reply/video",
						type: 'POST',
						dataType: 'json',
						data: {
							text: text,
							id: comm_id,
							video_id: video_id,
							reply: reply_id
						},
					})
					.done(function(data) {
						if (data.status == 200) {
							$("#pt-comment-replies-cont-" + comm_id).append(data.html)
							$("#comm-reply-" + comm_id).find('.form-control').val('').blur();

						}
						$("#comment-reply-loading-renderer-" + comm_id).addClass('hidden');
					})
					.fail(function() {
						alert('Sorry, something went wrong: Please try again later ...');
					})
			}
		}

		function PT_RPReply(text, comm_id, event, post_id) {

			if (!text || !comm_id || !event || !post_id) {
				return false;
			} else if (event.keyCode == 13 && event.shiftKey == 0) {
				var reply_id = 0;
				if ($("#comm-reply-" + comm_id).attr('data-reply-id')) {
					reply_id = $("#comm-reply-" + comm_id).attr('data-reply-id');
				}

				$.ajax({
						url: "0533424127aj/add-reply/article",
						type: 'POST',
						dataType: 'json',
						data: {
							text: text,
							id: comm_id,
							post_id: post_id,
							reply: reply_id
						},
					})
					.done(function(data) {
						if (data.status == 200) {
							$("#pt-comment-replies-cont-" + comm_id).append(data.html)
							$("#comm-reply-" + comm_id).find('input').val('').blur();
						}
						$("#comment-reply-loading-renderer-" + comm_id).addClass('hidden');
					})
					.fail(function() {
						alert('Sorry, something went wrong: Please try again later ...');
					})
			}
		}

		function PT_RAReply(text, comm_id, event, post_id) {

			if (!text || !comm_id || !event || !post_id) {
				return false;
			} else if (event.keyCode == 13 && event.shiftKey == 0) {
				var reply_id = 0;
				if ($("#comm-reply-" + comm_id).attr('data-reply-id')) {
					reply_id = $("#comm-reply-" + comm_id).attr('data-reply-id');
				}

				$.ajax({
						url: "0533424127aj/add-reply/activity",
						type: 'POST',
						dataType: 'json',
						data: {
							text: text,
							id: comm_id,
							post_id: post_id,
							reply: reply_id
						},
					})
					.done(function(data) {
						if (data.status == 200) {
							$("#pt-comment-replies-cont-" + comm_id).append(data.html)
							$("#comm-reply-" + comm_id).find('input').val('').blur();
						}
						$("#comment-reply-loading-renderer-" + comm_id).addClass('hidden');
					})
					.fail(function() {
						alert('Sorry, something went wrong: Please try again later ...');
					})
			}
		}

		function PT_DeleteReply(id) {
			if (!id) {
				return false;
			}
			if (!confirm('Are you sure you want to delete your comment?')) {
				return false;
			}
			$('#reply-' + id).slideUp('fast');
			$.post('0533424127aj/delete-reply', {
				id: id
			});
		}

		function PT_LikeComments(self, type, comment_id) {
			if (!self || (type != 'up' && type != 'down') || !comment_id) {
				return false;
			} else if (!$('#main-container').attr('data-logged') && $('#main-url').val()) {
				window.location.href = PT_Ajax_Requests_File() + 'login?to=' + $('#main-url').val();
				return false;
			}

			var self = $(self);
			$.ajax({
					url: '0533424127aj/comment-like-system/' + type,
					type: 'POST',
					dataType: 'json',
					data: {
						id: comment_id
					}
				})
				.done(function(data) {
					if (data.status == 200 && type == 'up' && data.type == 'added_like') {
						self.find('span').text((data.up));
						$('[data-comment-dislikes="' + comment_id + '"]').find('span').text((data.down));
						self.find('svg.feather').addClass('active');
						self.siblings().find('svg.feather').removeClass('active');

					} else if (data.status == 200 && type == 'up' && data.type == 'deleted_like') {
						self.find('span').text((data.up));
						$('[data-comment-dislikes="' + comment_id + '"]').find('span').text((data.down));
						self.find('svg.feather').removeClass('active');
						self.siblings().find('svg.feather').removeClass('active');
					} else if (data.status == 200 && type == 'down' && data.type == 'added_dislike') {
						self.find('span').text((data.down));
						self.find('svg.feather').addClass('active');
						$('[data-comment-likes="' + comment_id + '"]').find('span').text((data.up));
						self.siblings().find('svg.feather').removeClass('active');
					} else if (data.status == 200 && type == 'down' && data.type == 'deleted_dislike') {
						self.find('span').text((data.down));
						self.find('svg.feather').removeClass('active');
						$('[data-comment-likes="' + comment_id + '"]').find('span').text((data.up));
						self.siblings().find('svg.feather').removeClass('active');
					} else {
						swal(
							'Error!',
							'Something went wrong.Please try again later!',
							'error'
						);
					}
				})
				.fail(function() {
					console.log("error");
				})
		}

		function PT_LikeReplies(self, type, reply_id) {
			if (!self || (type != 'up' && type != 'down') || !reply_id) {
				return false;
			} else if (!$('#main-container').attr('data-logged') && $('#main-url').val()) {
				window.location.href = PT_Ajax_Requests_File() + 'login?to=' + $('#main-url').val();
				return false;
			}

			var self = $(self);
			$.ajax({
					url: '0533424127aj/reply-like-system/' + type,
					type: 'POST',
					dataType: 'json',
					data: {
						id: reply_id
					}
				})
				.done(function(data) {
					if (data.status == 200 && type == 'up' && data.type == 'added_like') {
						self.find('span').text((data.up));
						$('[data-reply-dislikes="' + reply_id + '"]').find('span').text((data.down));
						self.find('svg.feather').addClass('active');
						self.siblings().find('svg.feather').removeClass('active');

					} else if (data.status == 200 && type == 'up' && data.type == 'deleted_like') {
						self.find('span').text((data.up));
						$('[data-reply-dislikes="' + reply_id + '"]').find('span').text((data.down));
						self.find('svg.feather').removeClass('active');
						self.siblings().find('svg.feather').removeClass('active');
					} else if (data.status == 200 && type == 'down' && data.type == 'added_dislike') {
						self.find('span').text((data.down));
						self.find('svg.feather').addClass('active');
						$('[data-reply-likes="' + reply_id + '"]').find('span').text((data.up));
						self.siblings().find('svg.feather').removeClass('active');
					} else if (data.status == 200 && type == 'down' && data.type == 'deleted_dislike') {
						self.find('span').text((data.down));
						self.find('svg.feather').removeClass('active');
						$('[data-reply-likes="' + reply_id + '"]').find('span').text((data.up));
						self.siblings().find('svg.feather').removeClass('active');
					} else {
						swal(
							'Error!',
							'Something went wrong.Please try again later!',
							'error'
						);
					}
				})
				.fail(function() {
					console.log("error");
				})
		}

		function pt_hide_announcement(id) {
			if (!id) {
				return false;
			}
			$("#announcement-" + id).slideUp('fast', function() {
				$(this).remove();
				$.post('0533424127aj/main/hide-announcement', {
					id: id
				}, function(data, textStatus, xhr) {
					/* pass */
				});
			})
		}

		function pay_to_see(video_id, price, type = 'buy') {
			PayUsingWallet(type, 'show', video_id, price);
			return false;

			$('.p_t_show_btn_').attr('disabled', 'true');

			if (type == 'rent') {
				$('.p_t_show_btn_rent').text("Please wait..");
				$('.p_t_show_btn_rent').text("Rent $" + price);
				PT_ShowMethods('rent', video_id, price);
			} else {
				$('.p_t_show_btn_buy').text("Please wait..");
				$('.p_t_show_btn_buy').text("Purchase $" + price);
				PT_ShowMethods('pay', video_id, price);
			}

			$('.p_t_show_btn_').removeAttr('disabled');
		}

		function PT_ShowMethods(type, video_id = 0, price = 0, user_id = 0) {
			$.post('0533424127aj/wallet/get_modal', {
				type: type,
				video_id: video_id,
				price: price,
				user_id: user_id
			}, function(data, textStatus, xhr) {
				if (data.status == 200) {
					$('.payment_method').html(data.html);
					$('#pay-go-pro').modal({
						show: true
					});
				}
				if (type == 'subscribe') {
					$('.subscribe-id-' + user_id).find('span').text("Subscribe");
					$('.subscribe-id-' + user_id).removeAttr('disabled');
				}
			});
		}


		function PT_PurchasePkg(pkg, self, video_id, price, user_id = 0) {
			if (!pkg || !self) {
				return false;
			}

			$(self).text("Please wait..").attr('disabled', 'true');
			if (pkg == 'wallet') {
				amount = $("#wallet_amount").val();

				$.ajax({
						url: '0533424127aj/wallet/replenish',
						type: 'POST',
						dataType: 'json',
						data: {
							amount: amount
						},
					})
					.done(function(data) {
						if (data.status == 200) {
							window.location.href = data.url;
						} else {
							swal({
								title: "Error!",
								text: "Something went wrong Please try again later!",
								type: "error"
							});
						}
					})
					.fail(function() {
						swal({
							title: "Error!",
							text: "Something went wrong Please try again later!",
							type: "error"
						});
					});
			}
		}

		function pay_using_iyzipay(pkg, self, video_id, price, user_id = 0) {
			$('.btn-iyzipay').attr('disabled', 'true');
			$('.btn-iyzipay').find('span').text("Please wait..");
			pay_type = '';
			if (pkg == 'pro') {
				path = '/go_pro/iyzipay';
			} else if (pkg == 'wallet') {
				path = '/wallet/iyzipay';
				price = $("#wallet_amount").val();
			} else if (pkg == 'pay') {
				path = '/go_pro/iyzipay_pay_to_see';
			} else if (pkg == 'rent') {
				path = '/go_pro/iyzipay_pay_to_see';
				pay_type = 'rent';
			} else if (pkg == 'subscribe') {
				path = '/go_pro/subscribe';
			}

			$.post('0533424127aj' + path, {
				video_id: video_id,
				amount: price,
				user_id: user_id,
				pay_type: pay_type,
				type: 'iyzipay'
			}, function(data) {
				if (data.status == 200) {
					$('#iyzipay_content').html('');
					$('#iyzipay_content').html(data.html);
				} else {
					$('.btn-iyzipay').attr('disabled', false).html("Iyzipay App not set yet.");
				}
				$('.btn-iyzipay').removeAttr('disabled');
				$('.btn-iyzipay').find('span').text("Iyzipay");
			});
		}

		function pay_using_paysera(pkg, self, video_id, price, user_id = 0) {
			$('.btn-paysera').attr('disabled', 'true');
			$('.btn-paysera').find('span').text("Please wait..");
			pay_type = '';
			if (pkg == 'pro') {
				path = '/go_pro/paysera';
			} else if (pkg == 'wallet') {
				path = '/wallet/paysera';
				price = $("#wallet_amount").val();
			} else if (pkg == 'pay') {
				path = '/go_pro/paysera_pay_to_see';
			} else if (pkg == 'rent') {
				path = '/go_pro/paysera_pay_to_see';
				pay_type = 'rent';
			} else if (pkg == 'subscribe') {
				path = '/go_pro/subscribe';
			}

			$.post('0533424127aj' + path, {
				video_id: video_id,
				amount: price * 100,
				user_id: user_id,
				pay_type: pay_type,
				type: 'paysera'
			}, function(data) {
				if (data.status == 200) {
					window.location.href = data.url;
				} else {
					$('.btn-paysera').attr('disabled', false).html("Paysera App not set yet.");
				}
				$('.btn-paysera').removeAttr('disabled');
				$('.btn-paysera').find('span').text("Paysera");
			});
		}

		function pay_using_razorpay(pkg, self, video_id, price, user_id = 0) {
			$('#razorpay_type').val(pkg);
			$('#razorpay_video_id').val(video_id);
			$('#razorpay_price').val(price);
			$('#razorpay_user_id').val(user_id);
			$("#razorpay_alert").html('');
			$('#pay-go-pro').modal('hide');
			$('#razorpay_modal_box').modal({
				show: true
			});
		}

		function SignatureRazorpay() {
			$('#razorpay_button').html("Please wait..");
			$('#razorpay_button').attr('disabled', 'true');

			var merchant_order_id = "111111";
			var card_holder_name_id = $('#razorpay_name').val();
			var email = $('#razorpay_email').val();
			var phone = $('#razorpay_phone').val();
			var currency_code_id = "INR";

			if (!email || !phone || !card_holder_name_id) {
				$('#razorpay_alert').html("<div class='alert alert-danger'>Please check the details</div>");
				$('#razorpay_button').html("Purchase");
				$('#razorpay_button').removeAttr('disabled');
				setTimeout(function() {
					$('#razorpay_alert').html("");
				}, 3000);
				return false;
			}

			video_id = $('#razorpay_video_id').val();
			amount = $('#razorpay_price').val();
			user_id = $('#razorpay_user_id').val();
			pay_type = '';
			pkg = $('#razorpay_type').val();
			if (pkg == 'pro') {
				path = '/go_pro/razorpay';
			} else if (pkg == 'wallet') {
				path = '/wallet/razorpay';
				amount = $("#wallet_amount").val();
			} else if (pkg == 'pay') {
				path = '/go_pro/razorpay_pay_to_see';
			} else if (pkg == 'rent') {
				path = '/go_pro/razorpay_pay_to_see';
				pay_type = 'rent';
			} else if (pkg == 'subscribe') {
				path = '/go_pro/subscribe_razorpay';
			}
			var merchant_total = Number(amount) * 100;

			var razorpay_options = {
				key: "rzp_test_ruzI7R7AkonOIi",
				amount: merchant_total,
				name: "PlayTube",
				description: "",
				image: '0533424127themes/default/img/logo-light.png?cache=123',
				netbanking: true,
				currency: currency_code_id,
				prefill: {
					name: card_holder_name_id,
					email: email,
					contact: phone
				},
				notes: {
					soolegal_order_id: merchant_order_id,
				},
				handler: function(transaction) {
					$.post('0533424127aj' + path, {
						payment_id: transaction.razorpay_payment_id,
						order_id: merchant_order_id,
						card_holder_name_id: card_holder_name_id,
						merchant_amount: merchant_total,
						currency: currency_code_id,
						video_id: video_id,
						user_id: user_id,
						pay_type: pay_type,
						type: 'razorpay',
						name: name,
						phone: phone
					}, function(data) {
						if (data.status == 200) {
							window.location = data.url;
						} else {
							$('#razorpay_alert').html("<div class='alert alert-danger'>" + data.message + "</div>");
							setTimeout(function() {
								$('#razorpay_alert').html("");
							}, 3000);
						}
						$('#razorpay_button').html("Purchase");
						$('#razorpay_button').removeAttr('disabled');
					});
				},
				"modal": {
					"ondismiss": function() {
						// code here
					}
				}
			};
			// obj        
			var objrzpv1 = new Razorpay(razorpay_options);
			objrzpv1.open();
		}

		function pay_using_cashfree(pkg, self, video_id, price, user_id = 0) {
			$('#cashfree_type').val(pkg);
			$('#cashfree_video_id').val(video_id);
			$('#cashfree_price').val(price);
			$('#cashfree_user_id').val(user_id);
			$("#cashfree_alert").html('');
			$('#pay-go-pro').modal('hide');
			$('#cashfree_modal_box').modal({
				show: true
			});
		}

		function InitializeCashfree() {
			$('#cashfree_button').html("Please wait..");
			$('#cashfree_button').attr('disabled', 'true');
			name = $('#cashfree_name').val();
			phone = $('#cashfree_phone').val();
			email = $('#cashfree_email').val();
			video_id = $('#cashfree_video_id').val();
			amount = $('#cashfree_price').val();
			user_id = $('#cashfree_user_id').val();
			pay_type = '';
			pkg = $('#cashfree_type').val();
			if (pkg == 'pro') {
				path = '/go_pro/cashfree';
			} else if (pkg == 'wallet') {
				path = '/wallet/cashfree';
				amount = $("#wallet_amount").val();
			} else if (pkg == 'pay') {
				path = '/go_pro/cashfree_pay_to_see';
			} else if (pkg == 'rent') {
				path = '/go_pro/cashfree_pay_to_see';
				pay_type = 'rent';
			} else if (pkg == 'subscribe') {
				path = '/go_pro/subscribe';
			}
			$.post('0533424127aj' + path, {
				email: email,
				video_id: video_id,
				amount: amount,
				user_id: user_id,
				pay_type: pay_type,
				type: 'cashfree',
				name: name,
				phone: phone
			}, function(data) {
				if (data.status == 200) {
					$('body').append(data.html);
					document.getElementById("redirectForm").submit();
				} else {
					$('#cashfree_alert').html("<div class='alert alert-danger'>" + data.message + "</div>");
					setTimeout(function() {
						$('#cashfree_alert').html("");
					}, 3000);
				}
				$('#cashfree_button').html("Purchase");
				$('#cashfree_button').removeAttr('disabled');
			});
		}

		function pay_using_paystack(pkg, self, video_id, price, user_id = 0) {
			$('#paystack_type').val(pkg);
			$('#paystack_video_id').val(video_id);
			$('#paystack_price').val(price);
			$('#paystack_user_id').val(user_id);
			$("#paystack_wallet_alert").html('');
			$('#pay-go-pro').modal('hide');
			$('#paystack_wallet_modal').modal({
				show: true
			});
		}

		function InitializeWalletPaystack() {
			$('#paystack_btn').html("Please wait..");
			$('#paystack_btn').attr('disabled', 'true');
			email = $('#paystack_wallet_email').val();
			video_id = $('#paystack_video_id').val();
			amount = $('#paystack_price').val();
			user_id = $('#paystack_user_id').val();
			pay_type = '';
			pkg = $('#paystack_type').val();
			if (pkg == 'pro') {
				path = '/go_pro/paystack';
			} else if (pkg == 'wallet') {
				path = '/wallet/paystack';
				amount = $("#wallet_amount").val();
			} else if (pkg == 'pay') {
				path = '/go_pro/paystack_pay_to_see';
			} else if (pkg == 'rent') {
				path = '/go_pro/paystack_pay_to_see';
				pay_type = 'rent';
			} else if (pkg == 'subscribe') {
				path = '/go_pro/subscribe';
			}
			$.post('0533424127aj' + path, {
				email: email,
				video_id: video_id,
				amount: amount,
				user_id: user_id,
				pay_type: pay_type,
				type: 'paystack'
			}, function(data) {
				if (data.status == 200) {
					window.location.href = data.url;
				} else {
					$('#paystack_wallet_alert').html("<div class='alert alert-danger'>" + data.message + "</div>");
					setTimeout(function() {
						$('#paystack_wallet_alert').html("");
					}, 3000);
				}
				$('#paystack_btn').html("Purchase");
				$('#paystack_btn').removeAttr('disabled');
			});
		}

		function PT_OpenCheckOut(pkg, self, video_id = 0, price = 0, user_id = 0) {
			if (!pkg || !self) {
				return false;
			}
			if (video_id) {
				$('#checkout_video_' + video_id).val(video_id);
			}
			if (price) {
				$('#checkout_price_' + video_id).val(price);
			}
			$('#checkout_user_id').val(user_id);

			$(self).text("Please wait..").attr('disabled', 'true');

			$("#2checkout_alert").html('');
			$('#pay-go-pro').modal('hide');
			$('#2checkout_modal').modal({
				show: true
			});
			if (pkg == 'rent') {
				$('.checkout_pay_type').val('rent');
			} else {
				$('.checkout_pay_type').val('');
			}
		}


		function PT_PaySubscribe(user_id, self, type = '', price = 0) {
			if (!user_id || !self) {
				return false;
			}
			var text = $(self).find('span').text();
			if (type == 'subscribe') {
				PayUsingWallet(type, 'show', user_id, price);
				return;
				$(self).find('span').text("Please wait..");
				$(self).attr('disabled', 'true');
				PT_ShowMethods('subscribe', 0, 0, user_id);
			} else {
				var html = "<small>Are you sure you want to unsubscribe? This action can't be undo.</small>";
				swal({
					title: "",
					type: "",
					html: html,
					showCancelButton: true,
					cancelButtonText: "No",
					customClass: 'sweetalert-lg pt_add_to_list_vid',
					confirmButtonText: 'Yes'
				}).then(function() {
					$(self).removeClass('btn-subscribed').addClass('btn-subscribe');
					$(self).find('span').text("Subscribe");
					$(self).find('svg').remove();
					$(self).prepend('<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>');
					$(self).attr('onclick', 'PT_PaySubscribe(' + user_id + ',this,"subscribe")');
					$.post('0533424127aj/subscribe', {
						user_id: user_id
					});

				}, function() {});
			}
			$(self).removeAttr('disabled');
			$(self).find('span').text(text);
		}

		function PayUsingWallet(type, type2 = 'hide', id = 0, price = 0) {
			if (type2 == 'show') {
				$('.pay_modal_wallet_text').html('');
				$('.pay_modal_wallet_alert').html('');
				$('#pay_modal_wallet_btn').attr('onclick', "PayUsingWallet('" + type + "','hide','" + id + "','" + price + "')");
				if (type == 'subscribe') {
					$('.pay_modal_wallet_text').html("You are about to subscribe.");
					$.get('0533424127aj/wallet/wallet_update?id=' + id, function(data) {
						let wallet = data.wallet;
						price = data.price;
						$('#pay_modal_wallet_btn').attr('onclick', "PayUsingWallet('" + type + "','hide','" + id + "','" + price + "')");
						if (parseInt(wallet) < parseInt(price)) {
							$('.pay_modal_wallet_alert').html(`<div class="wallet_empty_state"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve"> <path style="fill:#455A64;" d="M394.667,73.532H117.333C52.561,73.603,0.071,126.093,0,190.865v21.333 c0,5.891,4.776,10.667,10.667,10.667h490.667c5.891,0,10.667-4.776,10.667-10.667v-21.333 C511.929,126.093,459.439,73.603,394.667,73.532z"></path> <path style="fill:#4CAF50;" d="M436.203,143.42L391.04,53.095C372.599,16.21,327.75,1.259,290.865,19.699 c-0.669,0.334-1.332,0.679-1.991,1.033L69.611,138.791c-5.184,2.798-7.118,9.269-4.32,14.453c1.86,3.447,5.46,5.596,9.376,5.6h352 c5.891,0,10.667-4.776,10.666-10.667c0-1.659-0.387-3.295-1.13-4.778V143.42z"></path> <path style="fill:#607D8B;" d="M74.667,137.532h362.667c41.237,0,74.667,33.429,74.667,74.667v213.333 c0,41.237-33.429,74.667-74.667,74.667H74.667C33.429,500.199,0,466.769,0,425.532V212.199C0,170.961,33.429,137.532,74.667,137.532 z"></path> <path style="fill:#455A64;" d="M501.333,244.199H416c-41.237,0.022-74.649,33.468-74.628,74.706 c0.022,41.207,33.421,74.606,74.628,74.628h85.333c5.891,0,10.667-4.776,10.667-10.667v-128 C512,248.974,507.224,244.199,501.333,244.199z"></path> <circle style="fill:#90A4AE;" cx="416" cy="318.865" r="32"></circle></svg>You don&#039;t have enough balance to purchase, please top up your wallet.<br><a href="0533424127wallet" onclick="SetPageCookie(\''+type+'\',\''+id+'\')" class="btn btn-main">Wallet</a></div>`);
							$('#pay_modal_wallet_btn').html("Purchase $" + price).attr('disabled', true);
							$('.pay_modal_wallet_text').html("");
							$('#pay_modal_wallet').modal({
								show: true
							});
						} else {
							$('#pay_modal_wallet_btn').html("Purchase $" + price).removeAttr('disabled');
							$('#pay_modal_wallet').modal({
								show: true
							});
						}
					});
				} else {
					if (type == 'pro') {
						$('.pay_modal_wallet_text').html("You are about to upgrade to a PRO memeber.");
					}
					if (type == 'buy') {
						$('.pay_modal_wallet_text').html("You are about to purchase video.");
					}
					if (type == 'rent') {
						$('.pay_modal_wallet_text').html("You are about to rent video.");
					}
					if (parseInt(0) < parseInt(price)) {
						$('.pay_modal_wallet_alert').html(`<div class="wallet_empty_state"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve"> <path style="fill:#455A64;" d="M394.667,73.532H117.333C52.561,73.603,0.071,126.093,0,190.865v21.333 c0,5.891,4.776,10.667,10.667,10.667h490.667c5.891,0,10.667-4.776,10.667-10.667v-21.333 C511.929,126.093,459.439,73.603,394.667,73.532z"></path> <path style="fill:#4CAF50;" d="M436.203,143.42L391.04,53.095C372.599,16.21,327.75,1.259,290.865,19.699 c-0.669,0.334-1.332,0.679-1.991,1.033L69.611,138.791c-5.184,2.798-7.118,9.269-4.32,14.453c1.86,3.447,5.46,5.596,9.376,5.6h352 c5.891,0,10.667-4.776,10.666-10.667c0-1.659-0.387-3.295-1.13-4.778V143.42z"></path> <path style="fill:#607D8B;" d="M74.667,137.532h362.667c41.237,0,74.667,33.429,74.667,74.667v213.333 c0,41.237-33.429,74.667-74.667,74.667H74.667C33.429,500.199,0,466.769,0,425.532V212.199C0,170.961,33.429,137.532,74.667,137.532 z"></path> <path style="fill:#455A64;" d="M501.333,244.199H416c-41.237,0.022-74.649,33.468-74.628,74.706 c0.022,41.207,33.421,74.606,74.628,74.628h85.333c5.891,0,10.667-4.776,10.667-10.667v-128 C512,248.974,507.224,244.199,501.333,244.199z"></path> <circle style="fill:#90A4AE;" cx="416" cy="318.865" r="32"></circle></svg>You don&#039;t have enough balance to purchase, please top up your wallet.<br><a href="0533424127wallet" onclick="SetPageCookie(\''+type+'\',\''+id+'\')" class="btn btn-main">Wallet</a></div>`);
						$('#pay_modal_wallet_btn').html("Purchase $" + price).attr('disabled', true);
						$('.pay_modal_wallet_text').html("");
						$('#pay_modal_wallet').modal({
							show: true
						});
					} else {
						$('#pay_modal_wallet_btn').html("Purchase $" + price).removeAttr('disabled');
						$('#pay_modal_wallet').modal({
							show: true
						});
					}
				}
			} else {
				link = '';
				if (type == 'pro') {
					link = '?pay_type=' + type + '&id=' + id + '&price=' + price;
				}
				if (type == 'buy') {
					link = '?pay_type=' + type + '&id=' + id + '&price=' + price;
				}
				if (type == 'rent') {
					link = '?pay_type=' + type + '&id=' + id + '&price=' + price;
				}
				if (type == 'subscribe') {
					link = '?pay_type=' + type + '&id=' + id + '&price=' + price;
				}
				$.get('0533424127aj/wallet/wallet_pay' + link, function(data) {
					$('#pay_modal_wallet_btn').html("Purchase $" + price);
					$('#pay_modal_wallet_btn').removeAttr('disabled');
					if (data.status == 200) {
						$('.pay_modal_wallet_alert').html("<div class='alert alert-success bg-success'><i class='fa fa-check'></i> Payment successfully done, thank you!</div>");
						setTimeout(function() {
							location.href = data.url;
						}, 3000);
					} else {
						$('.pay_modal_wallet_alert').html("<div class='alert alert-danger'>" + data.message + "</div>");
					}
				});

			}
		}

		function SetPageCookie(type, id) {
			$.get('0533424127aj/wallet/set?page_type=' + type + '&id=' + id, function(data) {
				location.href = '0533424127wallet';
			});
		}

		function notifyUser(user_id, self) {
			$('.publisher-element .publisher-subscribe-button').toggleClass('popp');
			$.post('0533424127aj/user/notify', {
				user_id: user_id
			}, function(data) {
				if (data.status == 200) {

					$(self).replaceWith(data.html);
				} else {
					Snackbar.show({
						text: '<div>' + data.message + '</div>'
					});
				}
			});
		}
	</script>

	<script type="text/javascript" src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/script.js"></script>
	<script type="text/javascript" src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/bootstrap.min.js"></script>
	<script src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/bootstrap-toggle.min.js"></script>
	<script src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/footer.js"></script>
	<link rel=""=""="">
	<script>
		$(window).on("popstate", function(e) {
			location.reload();
		});
		$(document).ready(function() {
			// $('.share-video a').click(function (e) {
			//     e.preventDefault();
			// });
			$('.dropdown-toggle').dropdown()

			$("#toggle-mode").change(function(event) {
				var mode = 'day';

				if ($(this).prop("checked") === true) {
					mode = 'night';
					$('<link>', {
						rel: 'stylesheet',
						href: '0533424127themes/default/css/night-mode.css',
						class: 'night-mode-css'
					}).insertAfter('link#style-css');
					$('.logo-img img').attr('src', '0533424127themes/default/img/logo-light.png?cache=123');
				} else {
					$(".night-mode-css").remove();
					$('.logo-img img').attr('src', '0533424127themes/default/img/logo.png?cache=123');
				}


				$.post('0533424127', {
					mode: mode
				}, function(data, textStatus, xhr) {
					/* pass */
				});
			});

			$("li.toggle-mobile-mode").click(function(event) {
				var mode = $(this).attr('data-mode');

				$.post('0533424127', {
					mode: mode
				}, function(data, textStatus, xhr) {
					location.reload();
				});
			});
		});
	</script>
	<audio id="message-sound" class="sound-controls" preload="auto">
		<source src="#" type="audio/mpeg">
		<source src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/unconvinced.ogg" type="audio/ogg">
	</audio>
	<div class="fixed-action-btn" style="bottom: 35px; transition: all 0.3s ease 0s;">
		<span id="btn-fab-main" class="btn-fab-floating">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
				<line x1="12" y1="5" x2="12" y2="19"></line>
				<line x1="5" y1="12" x2="19" y2="12"></line>
			</svg>
		</span>
		<ul>
			<li data-toggle="tooltip" data-placement="left" title="" data-original-title="Upload">
				<a href="0533424127upload-video" class="btn-floating" data-load="?link1=upload-video">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
						<path fill="#b228c9" d="M14,13V17H10V13H7L12,8L17,13M19.35,10.03C18.67,6.59 15.64,4 12,4C9.11,4 6.6,5.64 5.35,8.03C2.34,8.36 0,10.9 0,14A6,6 0 0,0 6,20H19A5,5 0 0,0 24,15C24,12.36 21.95,10.22 19.35,10.03Z">
						</path>
					</svg>
				</a>
			</li>
			<li data-toggle="tooltip" data-placement="left" title="" data-original-title="Import">
				<a href="0533424127import-video" class="btn-floating" data-load="?link1=import-video">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
						<path fill="#ee457e" d="M17,13L12,18L7,13H10V9H14V13M19.35,10.03C18.67,6.59 15.64,4 12,4C9.11,4 6.6,5.64 5.35,8.03C2.34,8.36 0,10.9 0,14A6,6 0 0,0 6,20H19A5,5 0 0,0 24,15C24,12.36 21.95,10.22 19.35,10.03Z">
						</path>
					</svg>
				</a>
			</li>
			<li data-toggle="tooltip" data-placement="left" title="" data-original-title="Live">
				<a href="0533424127live" class="btn-floating" data-load="?link1=live">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
						<path fill="#4caf50" d="M17,10.5L21,6.5V17.5L17,13.5V17A1,1 0 0,1 16,18H4A1,1 0 0,1 3,17V7A1,1 0 0,1 4,6H16A1,1 0 0,1 17,7V10.5M14,16V15C14,13.67 11.33,13 10,13C8.67,13 6,13.67 6,15V16H14M10,8A2,2 0 0,0 8,10A2,2 0 0,0 10,12A2,2 0 0,0 12,10A2,2 0 0,0 10,8Z">
						</path>
					</svg>
				</a>
			</li>
			<li data-toggle="tooltip" data-placement="left" title="" data-original-title="Shorts">
				<a href="0533424127upload-video?type=shorts" data-load="?link1=upload-video&amp;type=shorts" class="btn-floating">
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 98.94 122.88" style="enable-background:new 0 0 98.94 122.88" xml:space="preserve">
						<style type="text/css">
							.st0 {
								fill-rule: evenodd
							}
						</style>
						<g>
							<path fill="currentColor" class="st0" d="M63.49,2.71c11.59-6.04,25.94-1.64,32.04,9.83c6.1,11.47,1.65,25.66-9.94,31.7l-9.53,5.01 c8.21,0.3,16.04,4.81,20.14,12.52c6.1,11.47,1.66,25.66-9.94,31.7l-50.82,26.7c-11.59,6.04-25.94,1.64-32.04-9.83 c-6.1-11.47-1.65-25.66,9.94-31.7l9.53-5.01c-8.21-0.3-16.04-4.81-20.14-12.52c-6.1-11.47-1.65-25.66,9.94-31.7L63.49,2.71 L63.49,2.71z M36.06,42.53l30.76,18.99l-30.76,18.9V42.53L36.06,42.53z">
							</path>
						</g>
					</svg>
				</a>
			</li>
		</ul>
	</div>
	<div id="pay-go-pro" class="modal matdialog">
		<div class="modal-dialog">
			<div class="modal-content payment_box">
				<div class="modal-header">
					<h3 class="modal-title">
						Choose a payment method
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
									<line x1="18" y1="6" x2="6" y2="18"></line>
									<line x1="6" y1="6" x2="18" y2="18"></line>
								</svg>
							</span>
						</button>
					</h3>
					<div class="pay-go-pro-alert"></div>
				</div>
				<div class="payment_method"></div>
			</div>
		</div>
		<input id="wallet_amount" type="hidden">
	</div>
	<script>
		$('#btn-fab-main').on('touchstart click', function() {
			if ($(this).hasClass('active')) {
				$(this).removeClass('active');
				$(this).addClass('reverse-animation');
			} else {
				$(this).removeClass('reverse-animation');
				$(this).addClass('active');
			}
			return false;
		});

		var pxScrolled = 180;
		$(window).scroll(function() {
			if ($(this).scrollTop() > pxScrolled) {
				$('.fixed-action-btn').css({
					'bottom': '35px',
					'transition': '.3s'
				});
			} else {
				$('.fixed-action-btn').css({
					'bottom': '-60px'
				});
			}
		});
	</script>

	<script src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/cookieconsent.min.js"></script>
	<script>
		window.addEventListener("load", function() {
			window.cookieconsent.initialise({
				"theme": "classic",
				"content": {
					"message": "This website uses cookies to ensure you get the best experience on our website.",
					"dismiss": "Got It!",
					"link": "Learn More",
					"href": "0533424127terms/privacy-policy"
				}
			})
		});
	</script>
	<script type="text/javascript">
		$(document).on('click', '#pop_up_18_yes', function(event) {
			event.preventDefault();
			$.post('0533424127aj/main/yes_18?hash=' + $('.main_session').val(), function(data, textStatus, xhr) {
				$('#pop_up_18').modal('hide');
			});
		});

		$(document).on('click', '#pop_up_18_no', function(event) {
			event.preventDefault();
			$.post('0533424127aj/main/no_18?hash=' + $('.main_session').val(), function(data, textStatus, xhr) {
				if (data.status == 200) {
					$('#pop_up_18').modal('hide');
					window.location.href = data.url
				}
			});
		});

		function setCookie(cname, cvalue, exdays) {
			var d = new Date();
			d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
			var expires = "expires=" + d.toUTCString();
			document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
		}

		function SlideSetCookie(cname, cvalue, exdays) {
			$('#open_slide').attr('onclick', "SlideEraseCookie('open_slide')");
			var d = new Date();
			d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
			var expires = "expires=" + d.toUTCString();
			document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
		}

		function SlideEraseCookie(name) {
			$('#open_slide').attr('onclick', "SlideSetCookie('open_slide','yes',1)");
			document.cookie = name + '=;path=/;Max-Age=0'
		}

		function getCookie(cname) {
			var name = cname + "=";
			var ca = document.cookie.split(';');
			for (var i = 0; i < ca.length; i++) {
				var c = ca[i];
				while (c.charAt(0) == ' ') {
					c = c.substring(1);
				}
				if (c.indexOf(name) == 0) {
					return c.substring(name.length, c.length);
				}
			}
			return "";
		}
		$.ajax({
				url: 'https://extreme-ip-lookup.com/json/',
				type: 'GET',
				dataType: 'json'
			})
			.done(function(data) {
				if (data.status == 'success') {
					setCookie('r', window.btoa(data.continent), 1);
				} else {
					setCookie('r', window.btoa('string'), 1);
				}
			})
			.fail(function() {
				setCookie('r', window.btoa('string'), 1);
			})
			.always(function() {});
		// $.get('https://extreme-ip-lookup.com/json/', function(data) {
		//   if (data.status == 'success') {
		//     setCookie('r', window.btoa(data.continent), 1);
		//                //   }
		//   else{
		//     setCookie('r', window.btoa('string'), 1);
		//                //   }
		// });
	</script>
	<script>
		var fingerprintReport = function() {
			Fingerprint2.get(function(components) {
				var murmur = Fingerprint2.x64hash128(components.map(function(pair) {
					return pair.value
				}).join(), 31)
				$.post('0533424127aj/views?hash=' + $('.main_session').val() + '&type_=set', {
					finger: murmur
				}, function(data, textStatus, xhr) {});
			})
		}
		fingerprintReport();
	</script>
	<script type="text/javascript">
		var myTimeout;

		function show_gif(self, gif) {
			if (gif && gif != '') {
				myTimeout = setTimeout(function() {
					$(self).append('<img src="' + gif + '">');
				}, 1000);
			}
		}

		function hide_gif(self) {
			$(self).find('img').remove();
			clearTimeout(myTimeout);
		}

		function block_user(user_id, self, redirect = true) {
			$.post('0533424127aj/user/block?hash=' + $('.main_session').val(), {
				user_id: user_id
			}, function(data, textStatus, xhr) {
				if (redirect == true) {
					location.reload();
				} else {
					$(self).find('span').text(data.message);
				}
			});
		}
	</script>

	<div id="select-language" class="modal matdialog et_plus lang_select_modal" data-keyboard="false">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-body" id="pt_language_modal">
					<div class="row">
						<div class="col-md-4">
							<div class="language_info">
								<h3>Language</h3>
								<img src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/language.svg">
							</div>
						</div>
						<div class="col-md-8">
							<ul class="lang_modal">
								<li class="language_select"><a href="0533424127?lang=english" rel="nofollow" class="english">English</a></li>
								<li class="language_select"><a href="0533424127?lang=arabic" rel="nofollow" class="arabic">Arabic</a></li>
								<li class="language_select"><a href="0533424127?lang=dutch" rel="nofollow" class="dutch">Dutch</a></li>
								<li class="language_select"><a href="0533424127?lang=french" rel="nofollow" class="french">French</a></li>
								<li class="language_select"><a href="0533424127?lang=german" rel="nofollow" class="german">German</a></li>
								<li class="language_select"><a href="0533424127?lang=russian" rel="nofollow" class="russian">Russian</a></li>
								<li class="language_select"><a href="0533424127?lang=spanish" rel="nofollow" class="spanish">Spanish</a></li>
								<li class="language_select"><a href="0533424127?lang=turkish" rel="nofollow" class="turkish">Turkish</a></li>
								<li class="language_select"><a href="0533424127?lang=hindi" rel="nofollow" class="hindi">Hindi</a></li>
								<li class="language_select"><a href="0533424127?lang=chinese" rel="nofollow" class="chinese">Chinese</a></li>
								<li class="language_select"><a href="0533424127?lang=urdu" rel="nofollow" class="urdu">Urdu</a></li>
								<li class="language_select"><a href="0533424127?lang=indonesian" rel="nofollow" class="indonesian">Indonesian</a></li>
								<li class="language_select"><a href="0533424127?lang=croatian" rel="nofollow" class="croatian">Croatian</a></li>
								<li class="language_select"><a href="0533424127?lang=hebrew" rel="nofollow" class="hebrew">Hebrew</a></li>
								<li class="language_select"><a href="0533424127?lang=bengali" rel="nofollow" class="bengali">Bengali</a></li>
								<li class="language_select"><a href="0533424127?lang=japanese" rel="nofollow" class="japanese">Japanese</a></li>
								<li class="language_select"><a href="0533424127?lang=portuguese" rel="nofollow" class="portuguese">Portuguese</a></li>
								<li class="language_select"><a href="0533424127?lang=italian" rel="nofollow" class="italian">Italian</a></li>
								<li class="language_select"><a href="0533424127?lang=persian" rel="nofollow" class="persian">Persian</a></li>
								<li class="language_select"><a href="0533424127?lang=swedish" rel="nofollow" class="swedish">Swedish</a></li>
								<li class="language_select"><a href="0533424127?lang=vietnamese" rel="nofollow" class="vietnamese">Vietnamese</a></li>
								<li class="language_select"><a href="0533424127?lang=danish" rel="nofollow" class="danish">Danish</a></li>
								<li class="language_select"><a href="0533424127?lang=filipino" rel="nofollow" class="filipino">Filipino</a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div class="modal fade matdialog" id="paystack_wallet_modal" role="dialog" data-keyboard="false" style="overflow-y: auto;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
								<line x1="18" y1="6" x2="6" y2="18"></line>
								<line x1="6" y1="6" x2="18" y2="18"></line>
							</svg>
						</span>
					</button>
					<h4 class="modal-title">Paystack</h4>
				</div>
				<form class="form" method="post" id="paystack_wallet_form" action="#">
					<div class="modal-body twocheckout_modal">
						<div id="paystack_wallet_alert"></div>
						<div class="upload_video_bg_color">
							<div class="step_2_form">
								<div class="form-group mb-0">
									<label for="paystack_wallet_email">E-mail</label>
									<input id="paystack_wallet_email" type="text" class="form-control input-md" autocomplete="off" placeholder=" " value="darssttoorrmm123@gmail.com">
								</div>
							</div>
						</div>
					</div>
					<div class="clear"></div>
					<div class="modal-footer">
						<div class="ball-pulse">
							<div></div>
							<div></div>
							<div></div>
						</div>
						<input id="paystack_type" name="paystack_type" type="hidden" value="">
						<input id="paystack_video_id" name="paystack_video_id" type="hidden" value="">
						<input id="paystack_price" name="paystack_price" type="hidden" value="">
						<input id="paystack_user_id" name="paystack_user_id" type="hidden" value="">
						<button type="button" class="btn btn-main" id="paystack_btn" onclick="InitializeWalletPaystack()">Purchase</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="modal fade matdialog" id="cashfree_modal_box" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
								<line x1="18" y1="6" x2="6" y2="18"></line>
								<line x1="6" y1="6" x2="18" y2="18"></line>
							</svg>
						</span>
					</button>
					<h4 class="modal-title">cashfree</h4>
				</div>

				<div class="modal-body">
					<div id="cashfree_alert"></div>
					<form id="cashfree_form" method="post">
						<div class="upload_video_bg_color">
							<div class="step_2_form">
								<div class="form-group">
									<label for="cashfree_name">Name</label>
									<input class="form-control" type="text" placeholder=" " value="users name" id="cashfree_name" name="name">
								</div>
								<div class="form-group">
									<label for="cashfree_email">E-mail</label>
									<input class="form-control" type="text" placeholder=" " value="darssttoorrmm123@gmail.com" id="cashfree_email" name="email">
								</div>
								<div class="form-group mb-0">
									<label for="cashfree_phone">Phone</label>
									<input class="form-control" type="text" placeholder=" " id="cashfree_phone" name="phone">
								</div>
							</div>
						</div>
						<input id="cashfree_type" name="cashfree_type" type="hidden" value="">
						<input id="cashfree_video_id" name="cashfree_video_id" type="hidden" value="">
						<input id="cashfree_price" name="cashfree_price" type="hidden" value="">
						<input id="cashfree_user_id" name="cashfree_user_id" type="hidden" value="">
						<div class="modal-footer">
							<button class="btn btn-main" id="cashfree_button" type="button" onclick="InitializeCashfree()">Purchase</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade matdialog" id="razorpay_modal_box" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
								<line x1="18" y1="6" x2="6" y2="18"></line>
								<line x1="6" y1="6" x2="18" y2="18"></line>
							</svg>
						</span>
					</button>
					<h4 class="modal-title">Razorpay</h4>
				</div>

				<div class="modal-body">
					<div id="razorpay_alert"></div>
					<form id="razorpay_form" method="post">
						<div class="upload_video_bg_color">
							<div class="step_2_form">
								<div class="form-group">
									<label for="razorpay_name">Name</label>
									<input class="form-control shop_input" type="text" placeholder=" " value="users name" id="razorpay_name" name="name">
								</div>
								<div class="form-group">
									<label for="razorpay_email">E-mail</label>
									<input class="form-control shop_input" type="text" placeholder=" " value="darssttoorrmm123@gmail.com" id="razorpay_email" name="email">
								</div>
								<div class="form-group mb-0">
									<label for="razorpay_phone">Phone</label>
									<input class="form-control shop_input" type="text" placeholder=" " id="razorpay_phone" name="phone">
								</div>
							</div>
						</div>
						<input id="razorpay_type" name="razorpay_type" type="hidden" value="">
						<input id="razorpay_video_id" name="razorpay_video_id" type="hidden" value="">
						<input id="razorpay_price" name="razorpay_price" type="hidden" value="">
						<input id="razorpay_user_id" name="razorpay_user_id" type="hidden" value="">
						<div class="modal-footer">
							<button type="button" class="btn btn-main" onclick="SignatureRazorpay()" id="razorpay_button">Purchase</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script src="PlayTube%20-%20The%20Ultimate%20Video%20Sharing%20Platform_files/checkout.js"></script>
	<div class="razorpay-container" style="z-index: 2147483647; position: fixed; top: 0px; display: none; left: 0px; height: 100%; width: 100%; backface-visibility: hidden; overflow-y: visible;">
		<style>
			@keyframes rzp-rot {
				to {
					transform: rotate(360deg);
				}
			}

			@-webkit-keyframes rzp-rot {
				to {
					-webkit-transform: rotate(360deg);
				}
			}
		</style>
		<div class="razorpay-backdrop" style="min-height: 100%; transition: all 0.3s ease-out 0s; position: fixed; top: 0px; left: 0px; width: 100%; height: 100%;">
			<span style="text-decoration: none; background: rgb(214, 68, 68); border: 1px dashed white; padding: 3px; opacity: 0; transform: rotate(45deg); transition: opacity 0.3s ease-in 0s; font-family: lato, ubuntu, helvetica, sans-serif; color: white; position: absolute; width: 200px; text-align: center; right: -50px; top: 50px;">Test
				Mode</span>
		</div><iframe style="opacity: 1; height: 100%; position: relative; background: none; display: block; border: 0 none transparent; margin: 0px; padding: 0px; z-index: 2;" allowtransparency="true" allowpaymentrequest="true" src="https://api.razorpay.com/v1/checkout/public?traffic_env=production&amp;build=fe1e2394dc4f5809abaa7f70e03c117ae0593868&amp;modern=1" class="razorpay-checkout-frame" allow="otp-credentials" width="100%" height="100%" frameborder="0"></iframe>
	</div>
	<div id="iyzipay_content"></div>
	<div class="modal fade matdialog" id="pay_modal_wallet" role="dialog" data-keyboard="false">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title">Pay By Wallet<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
									<line x1="18" y1="6" x2="6" y2="18"></line>
									<line x1="6" y1="6" x2="18" y2="18"></line>
								</svg></span></button></h3>
				</div>

				<div class="modal-body">
					<div class="pay_modal_wallet_alert"></div>
					<p class="pay_modal_wallet_text"></p>
				</div>
				<div class="clear"></div>
				<div class="modal-footer">
					<div class="ball-pulse">
						<div></div>
						<div></div>
						<div></div>
					</div>
					<button type="button" class="btn btn-block btn-main" id="pay_modal_wallet_btn">Purchase</button>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function HideCard(ad_date) {
			setTimeout(function(argument) {
				$('.' + ad_date).remove();
			}, 5000);
		}
	</script>


	<script type="text/javascript">
		var pxScrolledTOP = 50;
		$(window).scroll(function() {
			if ($(this).scrollTop() > pxScrolledTOP) {
				$('.navbar-fixed-top').addClass('nav_bg_solid');
			} else {
				$('.navbar-fixed-top').removeClass('nav_bg_solid');
			}
		});
	</script>

	<div class="sidenav-overlay" onclick="javascript:$('body').removeClass('side_open');$('body').removeClass('mobi_side_open');"></div>


</body>

</html>