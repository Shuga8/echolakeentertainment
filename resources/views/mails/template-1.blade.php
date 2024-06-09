<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>{{ config('app.name') }}</title>
</head>

<body style="overflow: scroll !important">
	<style type="text/css">
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: Cambria, Cochin, Georgia, Times, "Times New Roman",
				serif;
		}

		@-ms-viewport {
			width: device-width;
		}
	</style>

	<section class="temp__screen-wrapper" style="display: block; padding: 0px 5px">
		<div class="temp__logo"
			style="
                    width: 100px;
                    height: 100px;
                    margin: 10px auto 10px auto;
                    overflow: hidden;
                    border-radius: 50%;
                ">
			<img src="https://echolakeentertainment.org/assets/logo.jpg" alt=""
				style="
                        display: block;
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                        mix-blend-mode: multiply;
                    " />
		</div>

		<h3
			style="
                    text-align: center;
                    color: #013416;
                    font-weight: 900;
                    font-size: 16px;
                ">
			ECHO LAKE ENTERTAINMENT
		</h3>

		<div class="temp__content"
			style="
                    width: 100%;
                    max-width: 550px;
                    padding: 5px;
                    margin: 0px auto;
                ">
			<div class="temp__content-body"
				style="
                        width: 100%;
                        border-top: 5px solid rgb(26, 66, 12);
                        border-radius: 10px;
                        box-shadow: -2px 2px 5px #ccc, 2px 2px 15px #ccc;
                        padding: 10px;
                        margin: 0px 0px 35px 0px;
                    ">
				<h2
					style="
                            font-size: 14px;
                            font-weight: 800;
                            color: rgb(42, 2, 106);
                            margin: 10px 0px;
                            padding: 10px;
                        ">
					Hello {{ $data['email'] }},
				</h2>

				<div class="temp__content-body-message"
					style="
                            font-size: 13px;
                            line-height: 2.5;
                            padding: 0 10px;
                        ">
					{{ html_entity_decode($data['message']) }}

					<div class="temp__content-body-message-inner" style="margin: 10px 0px">
						<h3
							style="
                                    font-weight: 800;
                                    font-size: 13px;
                                    color: #555;
                                ">
							Stay Connected:
						</h3>

						<p style="line-height: 1.8; padding: 0px 4px">
							Follow us on Social Media Platforms to stay
							updated on the latest news on features. Thank
							you once again for choosing {{ config('app.name') }}. We look forward to being
							a part of your journey and providing you with an
							exceptional experience.
						</p>
					</div>
				</div>
			</div>

			<div class="temp__content-footer">
				<div class="social-icons"
					style="
                            margin: 0px 0px 30px 0px;
                            text-align: left;
                            width: 100%;
                        "
					align="left">
					<a href="">
						<img src="http://weekly.grapestheme.com/notify/img/social/color/facebook.png" alt=""
							style="
                                    height: auto;
                                    width: 100%;
                                    max-width: 40px;
                                    margin-left: 2px;
                                    margin-right: 2px;
                                "
							width="40" border="0" />
					</a>

					<a href="">
						<img src="http://weekly.grapestheme.com/notify/img/social/color/twitter.png" alt=""
							style="
                                    height: auto;
                                    width: 100%;
                                    max-width: 40px;
                                    margin-left: 2px;
                                    margin-right: 2px;
                                "
							width="40" border="0" />
					</a>

					<a href="">
						<img src="http://weekly.grapestheme.com/notify/img/social/color/instagram.png" alt=""
							style="
                                    height: auto;
                                    width: 100%;
                                    max-width: 40px;
                                    margin-left: 2px;
                                    margin-right: 2px;
                                "
							width="40" border="0" />
					</a>
				</div>

				<footer style="margin: 0px 0px 30px 0px; padding: 10px 0px">
					<p
						style="
                                text-transform: uppercase;
                                text-align: left;
                                font-size: 13px;
                                margin: 0px 0px 8px 0px;
                            ">
						From: {{ config('app.name') }} Team.
					</p>

					<p
						style="
                                text-align: left;
                                font-size: 13px;
                                margin: 0px 0px 8px 0px;
                            ">
						URL: {{ config('app.url') }} .
					</p>

					<p
						style="
                                text-transform: uppercase;
                                text-align: left;
                                font-size: 13px;
                                margin: 0px 0px 8px 0px;
                            ">
						&copy;
						<script>
							document.write(new Date().getFullYear());
						</script>
						{{ config('app.name') }}&trade;
					</p>
				</footer>
			</div>
		</div>
	</section>
</body>

</html>
