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
      colors: {
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
        royalblue: "#4778f5",
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
        "body-s-bold": "Inter",
        poppins: "Poppins",
        inherit: "inherit",
      },
      borderRadius: {
        "980xl": "999px",
        "3xs": "10px",
        "341xl": "360px",
        xl: "20px",
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
      base: "16px",
      sm: "14px",
      "sm-2": "13.2px",
      xs: "12px",
      xl: "20px",
      "29xl": "48px",
      "19xl": "38px",
      "10xl": "29px",
      lg: "18px",
      "5xl": "24px",
      lgi: "19px",
      "17xl": "36px",
      "3xl": "22px",
      "41xl": "60px",
      "11xl": "30px",
      "53xl": "72px",
      inherit: "inherit",
    },
    screens: {
      mq1325: {
        raw: "screen and (max-width: 1325px)",
      },
      mq1250: {
        raw: "screen and (max-width: 1250px)",
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
      mq800: {
        raw: "screen and (max-width: 800px)",
      },
      mq750: {
        raw: "screen and (max-width: 750px)",
      },
      mq450: {
        raw: "screen and (max-width: 450px)",
      },
    },
  },
  corePlugins: {
    preflight: false,
  },
};
