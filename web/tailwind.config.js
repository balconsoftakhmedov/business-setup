/** @type {import('tailwindcss').Config} */
module.exports = {
	content: [
		"./*.{html,js,php}",
		"./src/**/*.{html,js}", // Assuming your source files are in a `src` directory
		"!./node_modules",       // Exclude `node_modules`
		"!./build",              // Exclude `build`
		"!./dist",               // Exclude `dist`
		"!./.*"                  // Exclude hidden directories
	],

	theme: {
		extend: {

			keyframes: {
				fadeInOut: {
					'0%, 100%': {opacity: 0},
					'50%': {opacity: 1},
				},
				fadeIn: {
					'0%': {opacity: 0},
					'100%': {opacity: 1},
				},
				fadeOut: {
					'0%': {opacity: 1},
					'100%': {opacity: 0},
				},
			},
			animation: {
				fadeInOut: 'fadeIn 3s ease-in forwards',
				fadeIn: 'fadeIn 3s ease-in forwards',
				fadeOut: 'fadeOut 1s ease-out forwards',
			},
			colors: {
				"base-primary": "#14151A",
				"general-white": "#fff",
				"general-8-secondary": "#000",
				darkslategray: "#333",
				"general-1-secondary": "#0e163d",
				"general-1-primary": "#924FE8",
				'custom-gold': "rgba(162, 144, 97, var(--tw-text-opacity))",
				"general-1-secondary-variant": "#414562",
				"elements-neutral-2": "#bfd4e4",
				gray: {
					"100": "rgba(255, 255, 255, 0.75)",
					"200": "rgba(0, 0, 0, 0.4)",
					"300": "rgba(255, 255, 255, 0.6)",
					"400": "rgba(255, 255, 255, 0.5)",
				},
				silver: "#c4c4c4",
				"general-9-secondary-variant": "#686868",
				"elements-neutral-4": "#f2f7f9",
				dimgray: "rgba(104, 104, 104, 0.75)",
				"dark-gray": "#262626",
				"elements-neutral-3": "#ddeaf3",
				"general-7-secondary-variant": "#343434",
				darkolivegreen: "#8a7847",
				"general-1-primary-variant": "#92643a",
				"background-surface-neutral": "#f7f7f8",
				"text-accent-purple-accent": "#924fe8",
				"text-base-secondary": "rgba(15, 19, 36, 0.6)",
				"text-base-primary": "#14151a",
				"text-base-tertiary": "rgba(13, 17, 38, 0.4)",
				"background-surface-default": "#fff",
				"border-action-normal": "#dee0e3",
				"border-base-divider": "#e9eaec",
				"text-status-destructive": "#e6483d",
				"border-base-alpha": "rgba(10, 15, 41, 0.08)",
				"background-badge-blue": "#e3eafd",
				"text-accent-blue-inverted": "#133a9a",
				"background-badge-purple": "#ecdffb",
				"text-accent-purple": "#5314a3",
				"background-button-tertiary": "rgba(10, 15, 41, 0.04)",
				"background-overlay-normal": "rgba(255, 255, 255, 0)",
				"background-accent-green-accent": "#26bd6c",
				"background-accent-orange-accent": "#f48e2f",
				"background-badge-red": "#fce5e4",
				"text-accent-red-inverted": "#9a1c13",
				"icon-base-quaternary": "rgba(10, 15, 41, 0.25)",
				"background-badge-green": "#d1fae4",
				"text-accent-green-inverted": "#166e3f",
				black: "#000",
				"border-action-focus-light": "#b78af0",
				"background-toggle-default": "#babdc5",
				royalblue: "#4778f5"

			},

			spacing: {
				"measurements-device-width": "1440px",
				"measurements-gap-80": "80px",
				"measurements-gap-120": "120px",
				"measurements-gap-40": "40px",
				"numbers-24": "24px",
				"numbers-16": "16px",
				"measurements-gap-20": "20px",
				"measurements-gap-24": "24px",
				"measurements-gap-16": "16px",
				"numbers-64": "64px",
				"measurements-gap-120-24": "120px",
				"measurements-gap-80-48": "80px",
				"measurements-gap-320": "320px",
				"numbers-4": "4px",
				"numbers-10": "10px",
				"numbers-12": "12px",
				"numbers-2": "2px",
				"numbers-3": "3px",
				"measurements-gap-8": "8px",
				"measurements-gap-144": "144px",
				"numbers-288": "288px",
				"numbers-6": "6px",
				"numbers-20": "20px",
				"numbers-480": "480px",
				"numbers-48": "48px",
				"numbers-224": "224px",
				"numbers-588": "588px",
				"numbers-40": "40px",
				"numbers-8": "8px",
				"numbers-14": "14px",
				"numbers-390": "390px",
				"measurements-gap-32": "32px",
				"numbers-320": "320px",
				"semantic-spacing-5": "5px",
				"numbers-1": "1px",
				"numbers-32": "32px",
				"measurements-gap-480": "480px",
				"measurements-gap-32-24": "32px",
				"measurements-gap-160-96": "160px",
				"numbers-792": "792px",
				"measurements-gap-28": "28px",
				"measurements-gap-224": "224px",
				"measurements-gap-2": "2px",
				"numbers-80": "80px",
			},
			fontFamily: {
				montserrat: "Montserrat",
				"button-dm-sans-16": "'DM Sans'",
				"heading-1-72": "'Playfair Display'",
				"body-b3-merriweather-14": "Merriweather",
				"subtitles-16": "Poppins",
				"primary-paragraph-paragraph-5": "'Eudoxus Sans'",
				"paragraph-16": "'Open Sans'",
				inherit: "inherit",
				"body-s-bold": "Inter",
				poppins: "Poppins",
			},
			borderRadius: {
				xl: "20px",
				"83xl-4": "102.4px",
				"980xl": "999px",
				"3xs": "10px",
				"341xl": "360px",
				"measurements-radius-xxxl": "24px",
				"measurements-radius-xl": "12px",
				"measurements-radius-sm": "6px",
				"radius-sm": "6px",
				"measurements-radius-full": "999px",
				"measurements-radius-lg": "10px",
				"radius-md": "8px",
				"radius-3xl": "24px",
				"measurements-radius-xs": "4px",
				"measurements-radius-md": "8px",
				"radius-full": "999px",
				"measurements-radius-xxl": "16px",
			},

		},
		fontSize: {
			xs: "12px",
			base: "16px",
			"41xl": "60px",
			"17xl": "36px",
			"29xl": "48px",
			sm: "14px",
			smi: "13px",
			med: "20px",
			lg: "18px",
			"35xl": "54px",
			"24xl": "43px",
			"13xl": "32px",
			"5xl": "24px",
			lgi: "19px",
			"53xl": "72px",
			"39xl": "58px",
			"3xl": "22px",
			"11xl": "30px",
			"sm-2": "13.2px",
			xl: "20px",
			"19xl": "38px",
			"10xl": "29px",
			inherit: "inherit",
		},
		screens: {
			mq1875: {
				raw: "screen and (max-width: 1875px)",
			},
			mq1500: {
				raw: "screen and (max-width: 1500px)",
			},
			mq1425: {
				raw: "screen and (max-width: 1425px)",
			},
			mq1325: {
				raw: "screen and (max-width: 1325px)",
			},
			mq1250: {
				raw: "screen and (max-width: 1250px)",
			},
			mq1225: {
				raw: "screen and (max-width: 1225px)",
			},
			mq1170: {
				max: "1200px",
			},
			lg: {
				max: "1200px",
			},
			mq1125: {
				raw: "screen and (max-width: 1125px)",
			},
			mq1050: {
				raw: "screen and (max-width: 1050px)",
			},
			mq1024: {
				raw: "screen and (max-width: 1050px)",
			},
			mq950: {
				raw: "screen and (max-width: 950px)",
			},
			mq850: {
				raw: "screen and (max-width: 850px)",
			},
			mq800: {
				raw: "screen and (max-width: 800px)",
			},
			mq780: {
				raw: "screen and (max-width: 780px)",
			},
			mq750: {
				raw: "screen and (max-width: 750px)",
			},
			mq650: {
				raw: "screen and (max-width: 650px)",
			},
			mq450: {
				raw: "screen and (max-width: 450px)",
			},
			mq370: {
				raw: "screen and (max-width: 450px)",
			},
			mq350: {
				raw: "screen and (max-width: 350px)",
			},
			minq950: {
				raw: "screen and (min-width: 950px)",
			},
			minq650: {
				raw: "screen and (min-width: 650px)",
			},
			minq450: {
				raw: "screen and (min-width: 450px)",
			},
		}

	},
	corePlugins: {
		preflight: true,
	},
};
