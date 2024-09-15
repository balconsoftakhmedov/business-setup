<?php

$socials_twitter_url   = get_theme_mod( 'ms_lms_starter_socials_twitter' );
$socials_facebook_url  = get_theme_mod( 'ms_lms_starter_socials_facebook' );
$socials_instagram_url = get_theme_mod( 'ms_lms_starter_socials_instagram' );
$socials_youtube_url   = get_theme_mod( 'ms_lms_starter_socials_youtube' );
$custom_logo_id        = $logo_image = starter_get_option( 'logo_image', '' );
$custom_white_logo_id  = starter_get_option( 'logo_image_white', '' );
$logo_image = wp_get_attachment_image_src( $custom_logo_id, 'full' );
$white_logo_image = wp_get_attachment_image_src( $custom_white_logo_id, 'full' );
?>
<section class="self-stretch flex flex-col items-center justify-start bg-[url('/wp-content/themes/business-setup/web/public/feedback-form@3x.png')] bg-cover bg-no-repeat bg-[top] max-w-full z-[2] text-left text-base text-background-surface-default font-body-s-bold">
	<div class="self-stretch flex flex-col items-center justify-center py-measurements-gap-80-48 px-5 box-border max-w-full mq450:gap-numbers-64 mq750:gap-numbers-64 mq750:pt-measurements-gap-80-48 mq750:pb-measurements-gap-80-48 mq750:box-border">
		<div class="w-[1200px] flex flex-row items-center justify-start flex-wrap content-center py-0 pl-0 pr-1.5 box-border gap-x-[74px] gap-y-20 max-w-full lg:gap-[37px] mq750:gap-[18px]">
			<div class="flex-1 flex flex-col items-start justify-start min-w-[288px] max-w-full">
				<div class="self-stretch flex flex-col items-start justify-start gap-numbers-24">
					<button class="cursor-pointer border-border-base-alpha border-[1px] border-solid py-0.5 px-[5px] bg-background-badge-blue h-7 rounded-measurements-radius-full box-border flex flex-row items-center justify-center">
						<img class="h-4 w-4 relative overflow-hidden shrink-0 hidden" alt="" src="/wp-content/themes/business-setup/web/public/leadicon4.svg">

						<div class="flex-1 flex flex-row items-center justify-center py-0 px-[3px]">
							<div class="flex-1 relative text-sm tracking-[-0.1px] leading-[20px] font-medium font-body-s-bold text-text-accent-blue-inverted text-center">
								Feedback Form
							</div>
						</div>
						<img class="h-4 w-4 relative overflow-hidden shrink-0 hidden" alt="" src="/wp-content/themes/business-setup/web/public/tailicon5.svg">
					</button>
					<div class="self-stretch flex flex-col items-start justify-start gap-numbers-24">
						<h1 class="m-0 relative text-29xl tracking-[-1px] leading-[54px] font-medium font-inherit mq450:text-10xl mq450:leading-[32px] mq1050:text-19xl mq1050:leading-[43px]">
							Let’s Discuss Your Project
						</h1>
						<div class="relative text-xl tracking-[-0.2px] leading-[28px] font-medium mq450:text-base mq450:leading-[22px]">
							Business set up Dubai’s mission is to be a one-stop company
							for all your business needs.
						</div>
						<div class="relative tracking-[-0.2px] leading-[24px]">
							Over the last 13 years, our team has helped over 75,000
							startups and&nbsp;SMEs expand and grow their business.
						</div>
						<div class="relative tracking-[-0.2px] leading-[24px]">
							We offer tailored solutions to help your business from
							pre-setup to growth.
						</div>
						<div class="self-stretch relative tracking-[-0.2px] leading-[24px]">
							Contact us to begin your successful business journey in the
							UAE.
						</div>
					</div>
				</div>
			</div>
			<div class="w-[568px] rounded-measurements-radius-xxxl bg-background-surface-default border-border-action-normal border-[1px] border-solid box-border flex flex-col items-start justify-start py-[38px] px-[39px] gap-measurements-gap-24 min-w-[320px] max-w-full text-sm text-text-base-primary mq450:pt-[25px] mq450:pb-[25px] mq450:box-border">
				<div class="self-stretch flex flex-col items-start justify-start gap-measurements-gap-16 max-w-full">
					<div class="self-stretch flex flex-row items-start justify-start flex-wrap content-start py-0 pl-0 pr-1.5 gap-x-2.5 gap-y-4">
						<div class="h-[72px] flex-1 flex flex-col items-start justify-start gap-measurements-gap-8 min-w-[236px]">
							<div class="self-stretch flex flex-row items-start justify-start">
								<div class="flex flex-row items-start justify-start py-numbers-2 px-0 gap-numbers-4">
									<div class="relative tracking-[-0.1px] leading-[20px] font-medium">
										Full name
									</div>
									<div class="relative tracking-[-0.1px] leading-[20px] font-medium text-text-base-tertiary hidden">
										(optional)
									</div>
									<div class="relative tracking-[-0.1px] leading-[20px] text-text-status-destructive">
										*
									</div>
								</div>
								<img class="h-6 w-6 relative hidden" alt="" src="/wp-content/themes/business-setup/web/public/tooltip-trigger.svg">
							</div>
							<div class="self-stretch flex-1 shadow-[0px_1px_2px_rgba(20,_21,_26,_0.05)] flex flex-row items-start justify-start">
								<div class="self-stretch flex-1 rounded-measurements-radius-xl bg-background-surface-default border-border-action-normal border-[1px] border-solid overflow-hidden flex flex-row items-center justify-start py-2 px-[11px]">
									<input class="w-full [border:none] [outline:none] bg-[transparent] flex-1 flex flex-row items-center justify-start py-0 px-1 box-border font-body-s-bold text-sm text-text-base-tertiary min-w-[127px]" placeholder="Enter your full name" type="text">
								</div>
							</div>
							<div class="self-stretch hidden flex-row items-center justify-start py-numbers-2 px-0 gap-numbers-4 text-text-base-tertiary">
								<img class="h-4 w-4 relative overflow-hidden shrink-0" alt="" src="/wp-content/themes/business-setup/web/public/informationline.svg">

								<div class="relative tracking-[-0.1px] leading-[20px]">
									Helper text
								</div>
							</div>
						</div>
						<div class="h-[72px] flex-1 flex flex-col items-start justify-start gap-measurements-gap-8 min-w-[236px]">
							<div class="self-stretch flex flex-row items-start justify-start">
								<div class="flex flex-row items-start justify-start py-numbers-2 px-0 gap-numbers-4">
									<div class="relative tracking-[-0.1px] leading-[20px] font-medium inline-block min-w-[37px]">
										Email
									</div>
									<div class="relative tracking-[-0.1px] leading-[20px] font-medium text-text-base-tertiary hidden">
										(optional)
									</div>
									<div class="relative tracking-[-0.1px] leading-[20px] text-text-status-destructive">
										*
									</div>
								</div>
								<img class="h-6 w-6 relative hidden" alt="" src="/wp-content/themes/business-setup/web/public/tooltip-trigger.svg">
							</div>
							<div class="self-stretch flex-1 shadow-[0px_1px_2px_rgba(20,_21,_26,_0.05)] flex flex-row items-start justify-start">
								<div class="self-stretch flex-1 rounded-measurements-radius-xl bg-background-surface-default border-border-action-normal border-[1px] border-solid overflow-hidden flex flex-row items-center justify-start py-2 px-[11px]">
									<input class="w-full [border:none] [outline:none] bg-[transparent] flex-1 flex flex-row items-center justify-start py-0 px-1 box-border font-body-s-bold text-sm text-text-base-tertiary min-w-[127px]" placeholder="Type your email" type="text">
								</div>
							</div>
							<div class="self-stretch hidden flex-row items-center justify-start py-numbers-2 px-0 gap-numbers-4 text-text-base-tertiary">
								<img class="h-4 w-4 relative overflow-hidden shrink-0" alt="" src="/wp-content/themes/business-setup/web/public/informationline.svg">

								<div class="relative tracking-[-0.1px] leading-[20px]">
									Helper text
								</div>
							</div>
						</div>
					</div>
					<div class="self-stretch flex flex-row items-start justify-start flex-wrap content-start py-0 pl-0 pr-1.5 gap-x-2.5 gap-y-4">
						<div class="h-[72px] flex-1 flex flex-col items-start justify-start gap-measurements-gap-8 min-w-[236px]">
							<div class="self-stretch flex flex-row items-start justify-start">
								<div class="flex flex-row items-start justify-start py-numbers-2 px-0 gap-numbers-4">
									<div class="relative tracking-[-0.1px] leading-[20px] font-medium inline-block min-w-[98px]">
										Phone number
									</div>
									<div class="relative tracking-[-0.1px] leading-[20px] font-medium text-text-base-tertiary hidden">
										(optional)
									</div>
									<div class="relative tracking-[-0.1px] leading-[20px] text-text-status-destructive">
										*
									</div>
								</div>
								<img class="h-6 w-6 relative hidden" alt="" src="/wp-content/themes/business-setup/web/public/tooltip-trigger.svg">
							</div>
							<div class="self-stretch flex-1 shadow-[0px_1px_2px_rgba(20,_21,_26,_0.05)] flex flex-row items-start justify-start">
								<div class="self-stretch flex-1 rounded-measurements-radius-xl bg-background-surface-default border-border-action-normal border-[1px] border-solid overflow-hidden flex flex-row items-center justify-start py-2 px-[11px]">
									<div class="flex-1 flex flex-row items-center justify-start gap-numbers-4">
										<img class="h-5 w-5 relative overflow-hidden shrink-0" alt="" src="/wp-content/themes/business-setup/web/public/flag.svg">

										<div class="flex flex-row items-center justify-start py-0 pl-numbers-4 pr-0 gap-numbers-2">
											<div class="relative tracking-[-0.1px] leading-[20px] font-medium inline-block min-w-[30px]">
												UAE
											</div>
											<img class="h-4 w-4 relative overflow-hidden shrink-0" alt="" src="/wp-content/themes/business-setup/web/public/arrow-4.svg">
										</div>
										<div class="flex flex-row items-center justify-start gap-numbers-4 text-text-base-tertiary">
											<img class="h-5 w-5 relative overflow-hidden shrink-0 hidden" alt="" src="/wp-content/themes/business-setup/web/public/leadicon11.svg">

											<div class="flex flex-row items-center justify-start py-0 pl-numbers-4 pr-0">
												<div class="relative tracking-[-0.1px] leading-[20px] shrink-0">
													Your phone number
												</div>
											</div>
										</div>
										<div class="hidden flex-row items-start justify-start py-0 px-numbers-4 text-center text-text-base-secondary">
											<div class="rounded-radius-sm bg-border-base-divider flex flex-row items-center justify-center py-0 px-numbers-2">
												<div class="flex flex-row items-center justify-center py-0 px-numbers-4">
													<div class="relative tracking-[-0.1px] leading-[20px] font-medium">
														⌘K
													</div>
												</div>
											</div>
										</div>
										<img class="h-5 w-5 relative overflow-hidden shrink-0 hidden" alt="" src="/wp-content/themes/business-setup/web/public/tailicon11.svg">

										<div class="hidden flex-row items-center justify-start py-0 pl-numbers-4 pr-0 gap-numbers-2">
											<div class="relative tracking-[-0.1px] leading-[20px] font-medium">
												EUR
											</div>
											<img class="h-4 w-4 relative overflow-hidden shrink-0" alt="" src="/wp-content/themes/business-setup/web/public/arrow-4.svg">
										</div>
									</div>
								</div>
							</div>
							<div class="self-stretch hidden flex-row items-center justify-start py-numbers-2 px-0 gap-numbers-4 text-text-base-tertiary">
								<img class="h-4 w-4 relative overflow-hidden shrink-0" alt="" src="/wp-content/themes/business-setup/web/public/informationline.svg">

								<div class="relative tracking-[-0.1px] leading-[20px]">
									Helper text
								</div>
							</div>
						</div>
						<div class="h-[72px] flex-1 flex flex-col items-start justify-start gap-measurements-gap-8 min-w-[236px]">
							<div class="self-stretch flex flex-row items-start justify-start">
								<div class="flex flex-row items-start justify-start py-numbers-2 px-0 gap-numbers-4">
									<div class="relative tracking-[-0.1px] leading-[20px] font-medium inline-block min-w-[114px]">
										Service Required
									</div>
									<div class="relative tracking-[-0.1px] leading-[20px] font-medium text-text-base-tertiary hidden">
										(optional)
									</div>
									<div class="relative tracking-[-0.1px] leading-[20px] text-text-status-destructive">
										*
									</div>
								</div>
								<img class="h-6 w-6 relative hidden" alt="" src="/wp-content/themes/business-setup/web/public/tooltip-trigger.svg">
							</div>
							<div class="self-stretch flex-1 shadow-[0px_1px_2px_rgba(20,_21,_26,_0.05)] flex flex-row items-start justify-start">
								<div class="self-stretch flex-1 rounded-measurements-radius-xl bg-background-surface-default border-border-action-normal border-[1px] border-solid overflow-hidden flex flex-row items-center justify-start py-2 px-[11px]">
									<div class="flex-1 flex flex-row items-center justify-start gap-numbers-4">
										<img class="h-5 w-5 relative overflow-hidden shrink-0 hidden" alt="" src="/wp-content/themes/business-setup/web/public/flag1.svg">

										<div class="hidden flex-row items-center justify-start py-0 pl-numbers-4 pr-0 gap-numbers-2">
											<div class="relative tracking-[-0.1px] leading-[20px] font-medium">
												UK
											</div>
											<img class="h-4 w-4 relative overflow-hidden shrink-0" alt="" src="/wp-content/themes/business-setup/web/public/arrow-4.svg">
										</div>
										<div class="flex-1 flex flex-row items-center justify-start gap-numbers-4">
											<img class="h-5 w-5 relative overflow-hidden shrink-0 hidden" alt="" src="/wp-content/themes/business-setup/web/public/leadicon11.svg">

											<div class="flex-1 flex flex-row items-center justify-start py-0 px-1">
												<div class="relative tracking-[-0.1px] leading-[20px] inline-block min-w-[88px]">
													Please select
												</div>
											</div>
										</div>
										<div class="hidden flex-row items-start justify-start py-0 px-numbers-4 text-center text-text-base-secondary">
											<div class="rounded-radius-sm bg-border-base-divider flex flex-row items-center justify-center py-0 px-numbers-2">
												<div class="flex flex-row items-center justify-center py-0 px-numbers-4">
													<div class="relative tracking-[-0.1px] leading-[20px] font-medium">
														⌘K
													</div>
												</div>
											</div>
										</div>
										<img class="h-5 w-5 relative overflow-hidden shrink-0" alt="" src="/wp-content/themes/business-setup/web/public/tailicon-2.svg">

										<div class="hidden flex-row items-center justify-start py-0 pl-numbers-4 pr-0 gap-numbers-2">
											<div class="relative tracking-[-0.1px] leading-[20px] font-medium">
												EUR
											</div>
											<img class="h-4 w-4 relative overflow-hidden shrink-0" alt="" src="/wp-content/themes/business-setup/web/public/arrow-4.svg">
										</div>
									</div>
								</div>
							</div>
							<div class="self-stretch hidden flex-row items-center justify-start py-numbers-2 px-0 gap-numbers-4 text-text-base-tertiary">
								<img class="h-4 w-4 relative overflow-hidden shrink-0" alt="" src="/wp-content/themes/business-setup/web/public/informationline.svg">

								<div class="relative tracking-[-0.1px] leading-[20px]">
									Helper text
								</div>
							</div>
						</div>
					</div>
					<div class="self-stretch h-28 flex flex-col items-start justify-start gap-measurements-gap-8 min-w-[144px] max-w-full">
						<div class="self-stretch flex flex-row items-start justify-start">
							<div class="flex flex-row items-start justify-start py-numbers-2 px-0 gap-numbers-4">
								<div class="relative tracking-[-0.1px] leading-[20px] font-medium">
									How can we help?
								</div>
								<div class="relative tracking-[-0.1px] leading-[20px] font-medium text-text-base-tertiary hidden">
									(optional)
								</div>
								<div class="relative tracking-[-0.1px] leading-[20px] text-text-status-destructive">
									*
								</div>
							</div>
							<img class="h-6 w-6 relative hidden" alt="" src="/wp-content/themes/business-setup/web/public/tooltip-trigger.svg">
						</div>
						<div class="self-stretch flex-1 shadow-[0px_1px_2px_rgba(20,_21,_26,_0.05)] flex flex-row items-start justify-start max-w-full">
							<div class="self-stretch flex-1 rounded-measurements-radius-xl bg-background-surface-default border-border-action-normal border-[1px] border-solid box-border overflow-hidden flex flex-row items-center justify-start py-2 px-[11px] max-w-full">
								<div class="flex-1 flex flex-row items-center justify-start gap-numbers-4 max-w-full">
									<img class="h-5 w-5 relative overflow-hidden shrink-0 hidden" alt="" src="/wp-content/themes/business-setup/web/public/flag1.svg">

									<div class="hidden flex-row items-center justify-start py-0 px-1 gap-numbers-2">
										<div class="relative tracking-[-0.1px] leading-[20px] font-medium">
											UK
										</div>
										<img class="h-4 w-4 relative overflow-hidden shrink-0" alt="" src="/wp-content/themes/business-setup/web/public/arrow-4.svg">
									</div>
									<div class="flex-1 flex flex-row items-center justify-start gap-numbers-4 max-w-full text-text-base-tertiary">
										<img class="h-5 w-5 relative overflow-hidden shrink-0 hidden" alt="" src="/wp-content/themes/business-setup/web/public/leadicon11.svg">

										<div class="flex-1 flex flex-row items-center justify-start py-0 px-1 box-border max-w-full">
											<div class="relative tracking-[-0.1px] leading-[20px] inline-block min-h-[60px]">
												<p class="m-0">Type your message</p>
												<p class="m-0">&nbsp;</p>
											</div>
										</div>
									</div>
									<div class="hidden flex-row items-start justify-start py-0 px-numbers-4 text-center text-text-base-secondary">
										<div class="rounded-radius-sm bg-border-base-divider flex flex-row items-center justify-center py-0 px-numbers-2">
											<div class="flex flex-row items-center justify-center py-0 px-numbers-4">
												<div class="relative tracking-[-0.1px] leading-[20px] font-medium">
													⌘K
												</div>
											</div>
										</div>
									</div>
									<img class="h-5 w-5 relative overflow-hidden shrink-0 hidden" alt="" src="/wp-content/themes/business-setup/web/public/tailicon-2.svg">

									<div class="hidden flex-row items-center justify-start py-0 px-1 gap-numbers-2">
										<div class="relative tracking-[-0.1px] leading-[20px] font-medium">
											EUR
										</div>
										<img class="h-4 w-4 relative overflow-hidden shrink-0" alt="" src="/wp-content/themes/business-setup/web/public/arrow-4.svg">
									</div>
								</div>
							</div>
						</div>
						<div class="w-[400px] hidden flex-row items-center justify-start py-numbers-2 px-0 box-border gap-numbers-4 max-w-full text-text-base-tertiary">
							<img class="h-4 w-4 relative overflow-hidden shrink-0" alt="" src="/wp-content/themes/business-setup/web/public/informationline.svg">

							<div class="relative tracking-[-0.1px] leading-[20px]">
								Helper text
							</div>
						</div>
					</div>
				</div>
				<div class="self-stretch h-px flex flex-col items-center justify-center pt-[0.5px] px-0 pb-0 box-border">
					<img class="self-stretch relative max-w-full overflow-hidden max-h-full" alt="" src="/wp-content/themes/business-setup/web/public/line-4.svg">
				</div>
				<button class="cursor-pointer [border:none] py-numbers-10 px-5 bg-text-accent-purple-accent self-stretch shadow-[0px_1px_2px_rgba(20,_21,_26,_0.05)] rounded-measurements-radius-xl overflow-hidden flex flex-row items-center justify-center gap-numbers-4">
					<img class="h-5 w-5 relative overflow-hidden shrink-0 hidden" alt="" src="/wp-content/themes/business-setup/web/public/leadicon12.svg">

					<div class="flex flex-row items-center justify-center py-0 px-[3px]">
						<div class="flex-1 relative text-sm tracking-[-0.1px] leading-[20px] font-medium font-body-s-bold text-background-surface-default text-center">
							Submit
						</div>
					</div>
					<div class="hidden flex-col items-center justify-center">
						<div class="rounded-measurements-radius-sm bg-background-surface-default flex flex-row items-center justify-center py-numbers-2 px-numbers-3">
							<img class="h-3.5 w-3.5 relative overflow-hidden shrink-0 hidden" alt="" src="/wp-content/themes/business-setup/web/public/leadicon1.svg">

							<div class="flex flex-row items-center justify-center py-0 px-numbers-3">
								<div class="relative text-xs leading-[16px] font-medium font-body-s-bold text-text-base-secondary text-center">
									16
								</div>
							</div>
							<img class="h-3.5 w-3.5 relative overflow-hidden shrink-0 hidden" alt="" src="/wp-content/themes/business-setup/web/public/tailicon1.svg">
						</div>
					</div>
					<img class="h-5 w-5 relative overflow-hidden shrink-0 hidden" alt="" src="/wp-content/themes/business-setup/web/public/tailicon12.svg">
				</button>
			</div>
		</div>
	</div>
</section>
<section
		class="flex flex-row items-start justify-start py-0 pl-0
			gap-20 w-full text-center text-base text-general-1-primary font-subtitles-16
			mq450:gap-5 mq850:gap-10 mq1500:flex-wrap"
>
	<div class="ml-[5%] lg:ml-[0px] w-full bg-cover bg-no-repeat flex flex-row self-stretch items-center justify-center bg-[url('/wp-content/themes/business-setup/web/public/form-builder-background@2x.png')]">
		<div class="w-full max-w-[1170px] flex-row flex mr-[5%] justify-between lg:mr-[0px] lg:ml-[20px] mq850:flex-col mq850:gap-[30px] mq850:justify-center mq850:items-center mq650:ml-[0px]">
			<div
					class="max-w-[650px] w-full flex flex-col items-start justify-start  w-full mq650:px-[20px] "
			>
				<div class="h-[120px] border-general-1-primary border-solid  border-l-[1px]"></div>
				<div
						class="max-w-full h-[200px] flex flex-col items-start justify-start relative gap-[21px] w-full z-[1]"
				>

					<div
							class="max-w-full !m-[0] absolute top-[22px] left-[0px] flex flex-col items-start justify-start gap-[21px] w-full"
					>
						<div
								class="relative tracking-[0.4em] leading-[36px] uppercase font-medium"
						>
							Feedback Form
						</div>
						<h2
								class="m-0 self-stretch relative text-35xl text-left  leading-[60px] font-normal font-heading-1-72 text-general-white mq450:text-13xl mq450:leading-[36px] mq850:text-24xl mq850:leading-[48px]"
						>
							Let’s Discuss Your Project
						</h2>
					</div>
				</div>
				<div
						class="self-stretch relative leading-[30px] font-paragraph-16 text-general-white text-left z-[1]"
				>
					By contacting us you can make a direct appointment with our agents
					in London or arrange your visit to our “Sales Office” and “Meeting
					Room” in the Emirate of Dubai. Our investors always have access to
					the support and assistance service for in-depth information
					on the investments and the conditions we can offer. It is also
					possible to book guided visits to construction sites or to buildings
					that have already been completed.
				</div>
			</div>
			<div
					class="max-w-[440px] w-full flex flex-row items-start justify-start relative  text-left text-gray-200 font-paragraph-16 mq650:justify-center"
			>
				<?php echo do_shortcode( '[contact-form-7 id="b2b5601" title="Untitled"]' ); ?>

			</div>
		</div>
	</div>
</section>
<footer
		class="self-stretch  flex flex-col items-center justify-start pt-20 px-0 pb-0
		box-border relative gap-[58px] max-w-full text-left text-base text-text-accent-purple-accent font-body-s-bold
		mq450:pt-[52px] mq450:box-border mq850:gap-[29px]"
>
	<img
			class="w-full h-full absolute !m-[0] top-[0px] right-[0px] bottom-[1px] left-[0px] max-w-full overflow-hidden max-h-full object-contain hidden z-[0]"
			alt=""
			src="/wp-content/themes/business-setup/web/public/transparentgreencreativitymodernartinkcolorsareamazinglybrightluminoustranslucentfreeflowingdryquicklynaturalpatternluxuryabstractartworktrendystyle@2x.png"
	/>

	<div
			class="w-[1210px] flex flex-row items-start justify-start flex-wrap content-start py-0 px-5 box-border gap-[30px] max-w-full"
	>
		<div class="flex-1 flex flex-col items-start justify-start relative gap-[22px] min-w-[277px] max-w-full text-sm-2 text-text-base-primary font-poppins">
			<div class="flex flex-row items-center justify-center py-0 px-[3px]">

				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img
							class="h-[60px] w-[97.1px] relative"
							loading="lazy"
							alt=""
							style="width: 120px;height: 32px"
							src="<?php echo esc_url( $logo_image[0] ); ?>"
					/>
				</a>
			</div>
			<div
					class="self-stretch flex flex-row items-center justify-center py-0 pl-0 pr-[30px] gap-[30px] mq450:gap-[15px] mq450:flex-wrap"
			>

				<?php
				$menu_name = 'footer-one'; // The theme location you specified
				$locations = get_nav_menu_locations();
				if ( isset( $locations[ $menu_name ] ) ) {
					$menu_id    = $locations[ $menu_name ];
					$menu_items = wp_get_nav_menu_items( $menu_id );
					if ( $menu_items ) { ?>
						<div class="flex-1 flex flex-col items-start justify-start gap-2.5 min-w-[101px]">
							<?php
							foreach ( $menu_items as $menu_item ) :
								$title = esc_html( $menu_item->title );
								$url = esc_url( $menu_item->url );
								?>

								<b class="self-stretch relative leading-[22px] hover:text-general-1-primary hover:[text-decoration:underline]"><a href="<?php echo $url ?>"> <?php echo $title ?></a></b>        <?php
							endforeach;
							?>

						</div>
						<?php
					}
				}
				?>
				<?php
				$menu_name = 'footer-two'; // The theme location you specified
				$locations = get_nav_menu_locations();
				if ( isset( $locations[ $menu_name ] ) ) {
					$menu_id    = $locations[ $menu_name ];
					$menu_items = wp_get_nav_menu_items( $menu_id );
					if ( $menu_items ) { ?>
						<div class="flex-1 flex flex-col items-start justify-start py-0 pl-0 pr-0.5 box-border gap-2.5 min-w-[180px]">
							<?php
							foreach ( $menu_items as $menu_item ) :
								$title = esc_html( $menu_item->title );
								$url = esc_url( $menu_item->url );
								?>

								<b class="self-stretch relative leading-[22px]   hover:text-general-1-primary hover:[text-decoration:underline]"><a href="<?php echo $url ?>"> <?php echo $title ?></a></b>        <?php
							endforeach;
							?>

						</div>
						<?php
					}
				}
				?>

			</div>
			<div
					class="w-[62.97%] h-[22.05%] absolute !m-[0] top-[86.8%] right-[37.03%] bottom-[-8.85%] left-[0%] overflow-hidden hidden z-[2]"
			>
				<img
						class="absolute h-full w-[29.4%] top-[0%] right-[70.6%] bottom-[0%] left-[0%] max-w-full overflow-hidden max-h-full"
						alt=""
						src="/wp-content/themes/business-setup/web/public/twitter.svg"
				/>

				<img
						class="absolute h-full w-[29.4%] top-[0%] right-[35.32%] bottom-[0%] left-[35.28%] max-w-full overflow-hidden max-h-full"
						alt=""
						src="/wp-content/themes/business-setup/web/public/facebook-1.svg"
				/>

				<img
						class="absolute h-full w-[29.4%] top-[0%] right-[0.04%] bottom-[0%] left-[70.56%] max-w-full overflow-hidden max-h-full"
						alt=""
						src="/wp-content/themes/business-setup/web/public/youtube-1.svg"
				/>
			</div>
		</div>
		<div
				class="flex-1 flex flex-col items-start justify-start gap-5 min-w-[277px] max-w-full"
		>
			<div
					class="self-stretch overflow-hidden flex flex-col items-start justify-start gap-2.5"
			>
				<a href="tel:+97145677333" class="relative leading-[24px] whitespace-nowrap font-bold hover:[text-decoration:underline]">800-LICENSE (542 3673)</a>
				<div
						class="text-sm tracking-[-0.1px] leading-[20px] font-medium text-text-base-secondary"
				>
					If you are calling from outside the UAE, please contact us on
				</div>
			</div>
			<div
					class="self-stretch overflow-hidden flex flex-col items-start justify-start gap-2.5"
			>
				<a href="tel:+97145677333" class="relative leading-[24px] whitespace-nowrap font-bold hover:[text-decoration:underline]">
					+971 4 567 7333
				</a>

				<div class="self-stretch relative text-sm tracking-[-0.1px] leading-[20px] font-medium text-text-base-secondary">
					or email us at
				</div>
				<a href="mailto:hello@business-setup-in-dubai-uae.com" class="relative leading-[24px] font-bold whitespace-nowrap hover:[text-decoration:underline]">hello@business-setup-in-dubai-uae.com</a>

			</div>
		</div>


		<div
				class="flex-1 flex flex-col items-start justify-start gap-[30px] min-w-[277px] max-w-full"
		>
			<?php
			// Get the social media URLs from the Customizer settings, or assign null if not set
			$twitter_url   = get_theme_mod( 'ms_lms_starter_socials_twitter', null );
			$facebook_url  = get_theme_mod( 'ms_lms_starter_socials_facebook', null );
			$instagram_url = get_theme_mod( 'ms_lms_starter_socials_instagram', null );
			$youtube_url   = get_theme_mod( 'ms_lms_starter_socials_youtube', null );
			?>
			<div class="flex flex-row items-center justify-end gap-numbers-16">
				<a href="<?php echo esc_url( $facebook_url ); ?>" target="_blank" rel="noopener noreferrer">
					<img class="h-6 w-6 relative overflow-hidden shrink-0" loading="lazy" alt="" src="/wp-content/themes/business-setup/web/public/twitterfill-8.svg">
				</a>
				<a href="<?php echo esc_url( $twitter_url ); ?>" target="_blank" rel="noopener noreferrer">
					<img class="h-6 w-6 relative overflow-hidden shrink-0" loading="lazy" alt="" src="/wp-content/themes/business-setup/web/public/instagramfill-8.svg">
				</a>
				<a href="<?php echo esc_url( $twitter_url ); ?>" target="_blank" rel="noopener noreferrer">
					<img class="h-6 w-6 relative overflow-hidden shrink-0" loading="lazy" alt="" src="/wp-content/themes/business-setup/web/public/facebookcirclefill-8.svg">
				</a>
			</div>


			<b
					class="self-stretch h-[72px] relative leading-[24px] inline-block"
			>Office 105, Level 1, Emaar Square – Building 4, Sheikh Mohammed
				Bin Rashid Boulevard Downtown Dubai, United Arab Emirates</b
			>
		</div>
	</div>
	<div
			class="self-stretch flex flex-col items-center justify-start max-w-full"
	>
		<img
				class="w-[1170px] relative max-h-full max-w-full"
				loading="lazy"
				alt=""
				src="/wp-content/themes/business-setup/web/public/rectangle-691.svg"
		/>
		<copyright class="flex-1 relative text-sm tracking-[-0.1px] leading-[20px] font-medium font-body-s-bold text-text-base-tertiary text-center inline-block min-w-[112px]">
			All right reserved. © 2024
		</copyright>

	</div>
</footer>
<div class="relative z-[11111111111111] stm-f" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="myModal" style="display: none;">
	<div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
	<div class="fixed inset-0 z-10 overflow-y-auto">
		<div class="flex items-start justify-center min-h-full p-4 pt-[40px] text-center sm:items-center sm:p-0">
			<div class="relative bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
				<div class="bg-general-1-primary ">
					<div class="sm:flex sm:items-start ">
						<?php echo do_shortcode( '[contact-form-7 id="b2b5601" title="Untitled"]' ); ?>

					</div>
				</div>
				<button type="button" class="absolute top-4 right-4 text-white hover:text-gray-300 focus:outline-none" onclick="closeModal()">
					<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
					</svg>
				</button>
			</div>
		</div>
	</div>
</div>
