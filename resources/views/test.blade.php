<!DOCTYPE html>
<html
    data-wf-domain="eduardos-radical-site-554fab.webflow.io"
    data-wf-page="65be9b92117a52590d6b3876"
    data-wf-site="65be9b92117a52590d6b37ef"
    lang="en"
>
<head>
    <meta charset="utf-8" />
    <title>Eduardo Sagastume</title>
    <meta content="Skillset Home" property="og:title" />
    <meta content="Skillset Home" property="twitter:title" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    <script>



    </script>
    {{--    <link--}}
{{--        href="./css/styles.css"--}}
{{--        rel="stylesheet"--}}
{{--        type="text/css"--}}
{{--    />--}}
    <style>
        html {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            font-family: sans-serif;
        }

        body {
            margin: 0;
        }

        article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
            display: block;
        }

        audio, canvas, progress, video {
            vertical-align: baseline;
            display: inline-block;
        }

        audio:not([controls]) {
            height: 0;
            display: none;
        }

        [hidden], template {
            display: none;
        }

        a {
            background-color: rgba(0, 0, 0, 0);
        }

        a:active, a:hover {
            outline: 0;
        }

        abbr[title] {
            border-bottom: 1px dotted;
        }

        b, strong {
            font-weight: bold;
        }

        dfn {
            font-style: italic;
        }

        h1 {
            margin: .67em 0;
            font-size: 2em;
        }

        mark {
            color: #000;
            background: #ff0;
        }

        small {
            font-size: 80%;
        }

        sub, sup {
            vertical-align: baseline;
            font-size: 75%;
            line-height: 0;
            position: relative;
        }

        sup {
            top: -.5em;
        }

        sub {
            bottom: -.25em;
        }

        img {
            border: 0;
        }

        svg:not(:root) {
            overflow: hidden;
        }

        figure {
            margin: 1em 40px;
        }

        hr {
            box-sizing: content-box;
            height: 0;
        }

        pre {
            overflow: auto;
        }

        code, kbd, pre, samp {
            font-family: monospace;
            font-size: 1em;
        }

        button, input, optgroup, select, textarea {
            color: inherit;
            font: inherit;
            margin: 0;
        }

        button {
            overflow: visible;
        }

        button, select {
            text-transform: none;
        }

        button, html input[type="button"], input[type="reset"] {
            -webkit-appearance: button;
            cursor: pointer;
        }

        button[disabled], html input[disabled] {
            cursor: default;
        }

        button::-moz-focus-inner, input::-moz-focus-inner {
            border: 0;
            padding: 0;
        }

        input {
            line-height: normal;
        }

        input[type="checkbox"], input[type="radio"] {
            box-sizing: border-box;
            padding: 0;
        }

        input[type="number"]::-webkit-inner-spin-button, input[type="number"]::-webkit-outer-spin-button {
            height: auto;
        }

        input[type="search"] {
            -webkit-appearance: none;
        }

        input[type="search"]::-webkit-search-cancel-button, input[type="search"]::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        fieldset {
            border: 1px solid silver;
            margin: 0 2px;
            padding: .35em .625em .75em;
        }

        legend {
            border: 0;
            padding: 0;
        }

        textarea {
            overflow: auto;
        }

        optgroup {
            font-weight: bold;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        td, th {
            padding: 0;
        }

        @font-face {
            font-family: webflow-icons;
            src: url("data:application/x-font-ttf;charset=utf-8;base64,AAEAAAALAIAAAwAwT1MvMg8SBiUAAAC8AAAAYGNtYXDpP+a4AAABHAAAAFxnYXNwAAAAEAAAAXgAAAAIZ2x5ZmhS2XEAAAGAAAADHGhlYWQTFw3HAAAEnAAAADZoaGVhCXYFgQAABNQAAAAkaG10eCe4A1oAAAT4AAAAMGxvY2EDtALGAAAFKAAAABptYXhwABAAPgAABUQAAAAgbmFtZSoCsMsAAAVkAAABznBvc3QAAwAAAAAHNAAAACAAAwP4AZAABQAAApkCzAAAAI8CmQLMAAAB6wAzAQkAAAAAAAAAAAAAAAAAAAABEAAAAAAAAAAAAAAAAAAAAABAAADpAwPA/8AAQAPAAEAAAAABAAAAAAAAAAAAAAAgAAAAAAADAAAAAwAAABwAAQADAAAAHAADAAEAAAAcAAQAQAAAAAwACAACAAQAAQAg5gPpA//9//8AAAAAACDmAOkA//3//wAB/+MaBBcIAAMAAQAAAAAAAAAAAAAAAAABAAH//wAPAAEAAAAAAAAAAAACAAA3OQEAAAAAAQAAAAAAAAAAAAIAADc5AQAAAAABAAAAAAAAAAAAAgAANzkBAAAAAAEBIAAAAyADgAAFAAAJAQcJARcDIP5AQAGA/oBAAcABwED+gP6AQAABAOAAAALgA4AABQAAEwEXCQEH4AHAQP6AAYBAAcABwED+gP6AQAAAAwDAAOADQALAAA8AHwAvAAABISIGHQEUFjMhMjY9ATQmByEiBh0BFBYzITI2PQE0JgchIgYdARQWMyEyNj0BNCYDIP3ADRMTDQJADRMTDf3ADRMTDQJADRMTDf3ADRMTDQJADRMTAsATDSANExMNIA0TwBMNIA0TEw0gDRPAEw0gDRMTDSANEwAAAAABAJ0AtAOBApUABQAACQIHCQEDJP7r/upcAXEBcgKU/usBFVz+fAGEAAAAAAL//f+9BAMDwwAEAAkAABcBJwEXAwE3AQdpA5ps/GZsbAOabPxmbEMDmmz8ZmwDmvxmbAOabAAAAgAA/8AEAAPAAB0AOwAABSInLgEnJjU0Nz4BNzYzMTIXHgEXFhUUBw4BBwYjNTI3PgE3NjU0Jy4BJyYjMSIHDgEHBhUUFx4BFxYzAgBqXV6LKCgoKIteXWpqXV6LKCgoKIteXWpVSktvICEhIG9LSlVVSktvICEhIG9LSlVAKCiLXl1qal1eiygoKCiLXl1qal1eiygoZiEgb0tKVVVKS28gISEgb0tKVVVKS28gIQABAAABwAIAA8AAEgAAEzQ3PgE3NjMxFSIHDgEHBhUxIwAoKIteXWpVSktvICFmAcBqXV6LKChmISBvS0pVAAAAAgAA/8AFtgPAADIAOgAAARYXHgEXFhUUBw4BBwYHIxUhIicuAScmNTQ3PgE3NjMxOAExNDc+ATc2MzIXHgEXFhcVATMJATMVMzUEjD83NlAXFxYXTjU1PQL8kz01Nk8XFxcXTzY1PSIjd1BQWlJJSXInJw3+mdv+2/7c25MCUQYcHFg5OUA/ODlXHBwIAhcXTzY1PTw1Nk8XF1tQUHcjIhwcYUNDTgL+3QFt/pOTkwABAAAAAQAAmM7nP18PPPUACwQAAAAAANciZKUAAAAA1yJkpf/9/70FtgPDAAAACAACAAAAAAAAAAEAAAPA/8AAAAW3//3//QW2AAEAAAAAAAAAAAAAAAAAAAAMBAAAAAAAAAAAAAAAAgAAAAQAASAEAADgBAAAwAQAAJ0EAP/9BAAAAAQAAAAFtwAAAAAAAAAKABQAHgAyAEYAjACiAL4BFgE2AY4AAAABAAAADAA8AAMAAAAAAAIAAAAAAAAAAAAAAAAAAAAAAAAADgCuAAEAAAAAAAEADQAAAAEAAAAAAAIABwCWAAEAAAAAAAMADQBIAAEAAAAAAAQADQCrAAEAAAAAAAUACwAnAAEAAAAAAAYADQBvAAEAAAAAAAoAGgDSAAMAAQQJAAEAGgANAAMAAQQJAAIADgCdAAMAAQQJAAMAGgBVAAMAAQQJAAQAGgC4AAMAAQQJAAUAFgAyAAMAAQQJAAYAGgB8AAMAAQQJAAoANADsd2ViZmxvdy1pY29ucwB3AGUAYgBmAGwAbwB3AC0AaQBjAG8AbgBzVmVyc2lvbiAxLjAAVgBlAHIAcwBpAG8AbgAgADEALgAwd2ViZmxvdy1pY29ucwB3AGUAYgBmAGwAbwB3AC0AaQBjAG8AbgBzd2ViZmxvdy1pY29ucwB3AGUAYgBmAGwAbwB3AC0AaQBjAG8AbgBzUmVndWxhcgBSAGUAZwB1AGwAYQByd2ViZmxvdy1pY29ucwB3AGUAYgBmAGwAbwB3AC0AaQBjAG8AbgBzRm9udCBnZW5lcmF0ZWQgYnkgSWNvTW9vbi4ARgBvAG4AdAAgAGcAZQBuAGUAcgBhAHQAZQBkACAAYgB5ACAASQBjAG8ATQBvAG8AbgAuAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA==") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        [class^="w-icon-"], [class*=" w-icon-"] {
            speak: none;
            font-variant: normal;
            text-transform: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-style: normal;
            font-weight: normal;
            line-height: 1;
            font-family: webflow-icons !important;
        }

        .w-icon-slider-right:before {
            content: "î˜€";
        }

        .w-icon-slider-left:before {
            content: "î˜";
        }

        .w-icon-nav-menu:before {
            content: "î˜‚";
        }

        .w-icon-arrow-down:before, .w-icon-dropdown-toggle:before {
            content: "î˜ƒ";
        }

        .w-icon-file-upload-remove:before {
            content: "î¤€";
        }

        .w-icon-file-upload-icon:before {
            content: "î¤ƒ";
        }

        * {
            box-sizing: border-box;
        }

        html {
            height: 100%;
        }

        body {
            min-height: 100%;
            color: #333;
            background-color: #fff;
            margin: 0;
            font-family: Arial, sans-serif;
            font-size: 14px;
            line-height: 20px;
        }

        img {
            max-width: 100%;
            vertical-align: middle;
            display: inline-block;
        }

        html.w-mod-touch * {
            background-attachment: scroll !important;
        }

        .w-block {
            display: block;
        }

        .w-inline-block {
            max-width: 100%;
            display: inline-block;
        }

        .w-clearfix:before, .w-clearfix:after {
            content: " ";
            grid-area: 1 / 1 / 2 / 2;
            display: table;
        }

        .w-clearfix:after {
            clear: both;
        }

        .w-hidden {
            display: none;
        }

        .w-button {
            color: #fff;
            line-height: inherit;
            cursor: pointer;
            background-color: #3898ec;
            border: 0;
            border-radius: 0;
            padding: 9px 15px;
            text-decoration: none;
            display: inline-block;
        }

        input.w-button {
            -webkit-appearance: button;
        }

        html[data-w-dynpage] [data-w-cloak] {
            color: rgba(0, 0, 0, 0) !important;
        }

        .w-code-block {
            margin: unset;
        }

        .w-webflow-badge, .w-webflow-badge * {
            z-index: auto;
            visibility: visible;
            box-sizing: border-box;
            width: auto;
            height: auto;
            max-height: none;
            max-width: none;
            min-height: 0;
            min-width: 0;
            float: none;
            clear: none;
            box-shadow: none;
            opacity: 1;
            direction: ltr;
            font-family: inherit;
            font-weight: inherit;
            color: inherit;
            font-size: inherit;
            line-height: inherit;
            font-style: inherit;
            font-variant: inherit;
            text-align: inherit;
            letter-spacing: inherit;
            -webkit-text-decoration: inherit;
            text-decoration: inherit;
            text-indent: 0;
            text-transform: inherit;
            text-shadow: none;
            font-smoothing: auto;
            vertical-align: baseline;
            cursor: inherit;
            white-space: inherit;
            word-break: normal;
            word-spacing: normal;
            word-wrap: normal;
            background: none;
            border: 0 rgba(0, 0, 0, 0);
            border-radius: 0;
            margin: 0;
            padding: 0;
            list-style-type: disc;
            transition: none;
            display: block;
            position: static;
            top: auto;
            bottom: auto;
            left: auto;
            right: auto;
            overflow: visible;
            transform: none;
        }

        .w-webflow-badge {
            white-space: nowrap;
            cursor: pointer;
            box-shadow: 0 0 0 1px rgba(0, 0, 0, .1), 0 1px 3px rgba(0, 0, 0, .1);
            visibility: visible !important;
            z-index: 2147483647 !important;
            color: #aaadb0 !important;
            opacity: 1 !important;
            width: auto !important;
            height: auto !important;
            background-color: #fff !important;
            border-radius: 3px !important;
            margin: 0 !important;
            padding: 6px !important;
            font-size: 12px !important;
            line-height: 14px !important;
            text-decoration: none !important;
            display: inline-block !important;
            position: fixed !important;
            top: auto !important;
            bottom: 12px !important;
            left: auto !important;
            right: 12px !important;
            overflow: visible !important;
            transform: none !important;
        }

        .w-webflow-badge > img {
            visibility: visible !important;
            opacity: 1 !important;
            vertical-align: middle !important;
            display: inline-block !important;
        }

        h1, h2, h3, h4, h5, h6 {
            margin-bottom: 10px;
            font-weight: bold;
        }

        h1 {
            margin-top: 20px;
            font-size: 38px;
            line-height: 44px;
        }

        h2 {
            margin-top: 20px;
            font-size: 32px;
            line-height: 36px;
        }

        h3 {
            margin-top: 20px;
            font-size: 24px;
            line-height: 30px;
        }

        h4 {
            margin-top: 10px;
            font-size: 18px;
            line-height: 24px;
        }

        h5 {
            margin-top: 10px;
            font-size: 14px;
            line-height: 20px;
        }

        h6 {
            margin-top: 10px;
            font-size: 12px;
            line-height: 18px;
        }

        p {
            margin-top: 0;
            margin-bottom: 10px;
        }

        blockquote {
            border-left: 5px solid #e2e2e2;
            margin: 0 0 10px;
            padding: 10px 20px;
            font-size: 18px;
            line-height: 22px;
        }

        figure {
            margin: 0 0 10px;
        }

        figcaption {
            text-align: center;
            margin-top: 5px;
        }

        ul, ol {
            margin-top: 0;
            margin-bottom: 10px;
            padding-left: 40px;
        }

        .w-list-unstyled {
            padding-left: 0;
            list-style: none;
        }

        .w-embed:before, .w-embed:after {
            content: " ";
            grid-area: 1 / 1 / 2 / 2;
            display: table;
        }

        .w-embed:after {
            clear: both;
        }

        .w-video {
            width: 100%;
            padding: 0;
            position: relative;
        }

        .w-video iframe, .w-video object, .w-video embed {
            width: 100%;
            height: 100%;
            border: none;
            position: absolute;
            top: 0;
            left: 0;
        }

        fieldset {
            border: 0;
            margin: 0;
            padding: 0;
        }

        button, [type="button"], [type="reset"] {
            cursor: pointer;
            -webkit-appearance: button;
            border: 0;
        }

        .w-form {
            margin: 0 0 15px;
        }

        .w-form-done {
            text-align: center;
            background-color: #ddd;
            padding: 20px;
            display: none;
        }

        .w-form-fail {
            background-color: #ffdede;
            margin-top: 10px;
            padding: 10px;
            display: none;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
            display: block;
        }

        .w-input, .w-select {
            width: 100%;
            height: 38px;
            color: #333;
            vertical-align: middle;
            background-color: #fff;
            border: 1px solid #ccc;
            margin-bottom: 10px;
            padding: 8px 12px;
            font-size: 14px;
            line-height: 1.42857;
            display: block;
        }

        .w-input:-moz-placeholder, .w-select:-moz-placeholder {
            color: #999;
        }

        .w-input::-moz-placeholder, .w-select::-moz-placeholder {
            color: #999;
            opacity: 1;
        }

        .w-input::-webkit-input-placeholder, .w-select::-webkit-input-placeholder {
            color: #999;
        }

        .w-input:focus, .w-select:focus {
            border-color: #3898ec;
            outline: 0;
        }

        .w-input[disabled], .w-select[disabled], .w-input[readonly], .w-select[readonly], fieldset[disabled] .w-input, fieldset[disabled] .w-select {
            cursor: not-allowed;
        }

        .w-input[disabled]:not(.w-input-disabled), .w-select[disabled]:not(.w-input-disabled), .w-input[readonly], .w-select[readonly], fieldset[disabled]:not(.w-input-disabled) .w-input, fieldset[disabled]:not(.w-input-disabled) .w-select {
            background-color: #eee;
        }

        textarea.w-input, textarea.w-select {
            height: auto;
        }

        .w-select {
            background-color: #f3f3f3;
        }

        .w-select[multiple] {
            height: auto;
        }

        .w-form-label {
            cursor: pointer;
            margin-bottom: 0;
            font-weight: normal;
            display: inline-block;
        }

        .w-radio {
            margin-bottom: 5px;
            padding-left: 20px;
            display: block;
        }

        .w-radio:before, .w-radio:after {
            content: " ";
            grid-area: 1 / 1 / 2 / 2;
            display: table;
        }

        .w-radio:after {
            clear: both;
        }

        .w-radio-input {
            float: left;
            margin: 3px 0 0 -20px;
            line-height: normal;
        }

        .w-file-upload {
            margin-bottom: 10px;
            display: block;
        }

        .w-file-upload-input {
            width: .1px;
            height: .1px;
            opacity: 0;
            z-index: -100;
            position: absolute;
            overflow: hidden;
        }

        .w-file-upload-default, .w-file-upload-uploading, .w-file-upload-success {
            color: #333;
            display: inline-block;
        }

        .w-file-upload-error {
            margin-top: 10px;
            display: block;
        }

        .w-file-upload-default.w-hidden, .w-file-upload-uploading.w-hidden, .w-file-upload-error.w-hidden, .w-file-upload-success.w-hidden {
            display: none;
        }

        .w-file-upload-uploading-btn {
            cursor: pointer;
            background-color: #fafafa;
            border: 1px solid #ccc;
            margin: 0;
            padding: 8px 12px;
            font-size: 14px;
            font-weight: normal;
            display: flex;
        }

        .w-file-upload-file {
            background-color: #fafafa;
            border: 1px solid #ccc;
            flex-grow: 1;
            justify-content: space-between;
            margin: 0;
            padding: 8px 9px 8px 11px;
            display: flex;
        }

        .w-file-upload-file-name {
            font-size: 14px;
            font-weight: normal;
            display: block;
        }

        .w-file-remove-link {
            width: auto;
            height: auto;
            cursor: pointer;
            margin-top: 3px;
            margin-left: 10px;
            padding: 3px;
            display: block;
        }

        .w-icon-file-upload-remove {
            margin: auto;
            font-size: 10px;
        }

        .w-file-upload-error-msg {
            color: #ea384c;
            padding: 2px 0;
            display: inline-block;
        }

        .w-file-upload-info {
            padding: 0 12px;
            line-height: 38px;
            display: inline-block;
        }

        .w-file-upload-label {
            cursor: pointer;
            background-color: #fafafa;
            border: 1px solid #ccc;
            margin: 0;
            padding: 8px 12px;
            font-size: 14px;
            font-weight: normal;
            display: inline-block;
        }

        .w-icon-file-upload-icon, .w-icon-file-upload-uploading {
            width: 20px;
            margin-right: 8px;
            display: inline-block;
        }

        .w-icon-file-upload-uploading {
            height: 20px;
        }

        .w-container {
            max-width: 940px;
            margin-left: auto;
            margin-right: auto;
        }

        .w-container:before, .w-container:after {
            content: " ";
            grid-area: 1 / 1 / 2 / 2;
            display: table;
        }

        .w-container:after {
            clear: both;
        }

        .w-container .w-row {
            margin-left: -10px;
            margin-right: -10px;
        }

        .w-row:before, .w-row:after {
            content: " ";
            grid-area: 1 / 1 / 2 / 2;
            display: table;
        }

        .w-row:after {
            clear: both;
        }

        .w-row .w-row {
            margin-left: 0;
            margin-right: 0;
        }

        .w-col {
            float: left;
            width: 100%;
            min-height: 1px;
            padding-left: 10px;
            padding-right: 10px;
            position: relative;
        }

        .w-col .w-col {
            padding-left: 0;
            padding-right: 0;
        }

        .w-col-1 {
            width: 8.33333%;
        }

        .w-col-2 {
            width: 16.6667%;
        }

        .w-col-3 {
            width: 25%;
        }

        .w-col-4 {
            width: 33.3333%;
        }

        .w-col-5 {
            width: 41.6667%;
        }

        .w-col-6 {
            width: 50%;
        }

        .w-col-7 {
            width: 58.3333%;
        }

        .w-col-8 {
            width: 66.6667%;
        }

        .w-col-9 {
            width: 75%;
        }

        .w-col-10 {
            width: 83.3333%;
        }

        .w-col-11 {
            width: 91.6667%;
        }

        .w-col-12 {
            width: 100%;
        }

        .w-hidden-main {
            display: none !important;
        }

        @media screen and (max-width: 991px) {
            .w-container {
                max-width: 728px;
            }

            .w-hidden-main {
                display: inherit !important;
            }

            .w-hidden-medium {
                display: none !important;
            }

            .w-col-medium-1 {
                width: 8.33333%;
            }

            .w-col-medium-2 {
                width: 16.6667%;
            }

            .w-col-medium-3 {
                width: 25%;
            }

            .w-col-medium-4 {
                width: 33.3333%;
            }

            .w-col-medium-5 {
                width: 41.6667%;
            }

            .w-col-medium-6 {
                width: 50%;
            }

            .w-col-medium-7 {
                width: 58.3333%;
            }

            .w-col-medium-8 {
                width: 66.6667%;
            }

            .w-col-medium-9 {
                width: 75%;
            }

            .w-col-medium-10 {
                width: 83.3333%;
            }

            .w-col-medium-11 {
                width: 91.6667%;
            }

            .w-col-medium-12 {
                width: 100%;
            }

            .w-col-stack {
                width: 100%;
                left: auto;
                right: auto;
            }
        }

        @media screen and (max-width: 767px) {
            .w-hidden-main, .w-hidden-medium {
                display: inherit !important;
            }

            .w-hidden-small {
                display: none !important;
            }

            .w-row, .w-container .w-row {
                margin-left: 0;
                margin-right: 0;
            }

            .w-col {
                width: 100%;
                left: auto;
                right: auto;
            }

            .w-col-small-1 {
                width: 8.33333%;
            }

            .w-col-small-2 {
                width: 16.6667%;
            }

            .w-col-small-3 {
                width: 25%;
            }

            .w-col-small-4 {
                width: 33.3333%;
            }

            .w-col-small-5 {
                width: 41.6667%;
            }

            .w-col-small-6 {
                width: 50%;
            }

            .w-col-small-7 {
                width: 58.3333%;
            }

            .w-col-small-8 {
                width: 66.6667%;
            }

            .w-col-small-9 {
                width: 75%;
            }

            .w-col-small-10 {
                width: 83.3333%;
            }

            .w-col-small-11 {
                width: 91.6667%;
            }

            .w-col-small-12 {
                width: 100%;
            }
        }

        @media screen and (max-width: 479px) {
            .w-container {
                max-width: none;
            }

            .w-hidden-main, .w-hidden-medium, .w-hidden-small {
                display: inherit !important;
            }

            .w-hidden-tiny {
                display: none !important;
            }

            .w-col {
                width: 100%;
            }

            .w-col-tiny-1 {
                width: 8.33333%;
            }

            .w-col-tiny-2 {
                width: 16.6667%;
            }

            .w-col-tiny-3 {
                width: 25%;
            }

            .w-col-tiny-4 {
                width: 33.3333%;
            }

            .w-col-tiny-5 {
                width: 41.6667%;
            }

            .w-col-tiny-6 {
                width: 50%;
            }

            .w-col-tiny-7 {
                width: 58.3333%;
            }

            .w-col-tiny-8 {
                width: 66.6667%;
            }

            .w-col-tiny-9 {
                width: 75%;
            }

            .w-col-tiny-10 {
                width: 83.3333%;
            }

            .w-col-tiny-11 {
                width: 91.6667%;
            }

            .w-col-tiny-12 {
                width: 100%;
            }
        }

        .w-widget {
            position: relative;
        }

        .w-widget-map {
            width: 100%;
            height: 400px;
        }

        .w-widget-map label {
            width: auto;
            display: inline;
        }

        .w-widget-map img {
            max-width: inherit;
        }

        .w-widget-map .gm-style-iw {
            text-align: center;
        }

        .w-widget-map .gm-style-iw > button {
            display: none !important;
        }

        .w-widget-twitter {
            overflow: hidden;
        }

        .w-widget-twitter-count-shim {
            vertical-align: top;
            width: 28px;
            height: 20px;
            text-align: center;
            background: #fff;
            border: 1px solid #758696;
            border-radius: 3px;
            display: inline-block;
            position: relative;
        }

        .w-widget-twitter-count-shim * {
            pointer-events: none;
            -webkit-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .w-widget-twitter-count-shim .w-widget-twitter-count-inner {
            text-align: center;
            color: #999;
            font-family: serif;
            font-size: 15px;
            line-height: 12px;
            position: relative;
        }

        .w-widget-twitter-count-shim .w-widget-twitter-count-clear {
            display: block;
            position: relative;
        }

        .w-widget-twitter-count-shim.w--large {
            width: 36px;
            height: 28px;
        }

        .w-widget-twitter-count-shim.w--large .w-widget-twitter-count-inner {
            font-size: 18px;
            line-height: 18px;
        }

        .w-widget-twitter-count-shim:not(.w--vertical) {
            margin-left: 5px;
            margin-right: 8px;
        }

        .w-widget-twitter-count-shim:not(.w--vertical).w--large {
            margin-left: 6px;
        }

        .w-widget-twitter-count-shim:not(.w--vertical):before, .w-widget-twitter-count-shim:not(.w--vertical):after {
            content: " ";
            height: 0;
            width: 0;
            pointer-events: none;
            border: solid rgba(0, 0, 0, 0);
            position: absolute;
            top: 50%;
            left: 0;
        }

        .w-widget-twitter-count-shim:not(.w--vertical):before {
            border-width: 4px;
            border-color: rgba(117, 134, 150, 0) #5d6c7b rgba(117, 134, 150, 0) rgba(117, 134, 150, 0);
            margin-top: -4px;
            margin-left: -9px;
        }

        .w-widget-twitter-count-shim:not(.w--vertical).w--large:before {
            border-width: 5px;
            margin-top: -5px;
            margin-left: -10px;
        }

        .w-widget-twitter-count-shim:not(.w--vertical):after {
            border-width: 4px;
            border-color: rgba(255, 255, 255, 0) #fff rgba(255, 255, 255, 0) rgba(255, 255, 255, 0);
            margin-top: -4px;
            margin-left: -8px;
        }

        .w-widget-twitter-count-shim:not(.w--vertical).w--large:after {
            border-width: 5px;
            margin-top: -5px;
            margin-left: -9px;
        }

        .w-widget-twitter-count-shim.w--vertical {
            width: 61px;
            height: 33px;
            margin-bottom: 8px;
        }

        .w-widget-twitter-count-shim.w--vertical:before, .w-widget-twitter-count-shim.w--vertical:after {
            content: " ";
            height: 0;
            width: 0;
            pointer-events: none;
            border: solid rgba(0, 0, 0, 0);
            position: absolute;
            top: 100%;
            left: 50%;
        }

        .w-widget-twitter-count-shim.w--vertical:before {
            border-width: 5px;
            border-color: #5d6c7b rgba(117, 134, 150, 0) rgba(117, 134, 150, 0);
            margin-left: -5px;
        }

        .w-widget-twitter-count-shim.w--vertical:after {
            border-width: 4px;
            border-color: #fff rgba(255, 255, 255, 0) rgba(255, 255, 255, 0);
            margin-left: -4px;
        }

        .w-widget-twitter-count-shim.w--vertical .w-widget-twitter-count-inner {
            font-size: 18px;
            line-height: 22px;
        }

        .w-widget-twitter-count-shim.w--vertical.w--large {
            width: 76px;
        }

        .w-background-video {
            height: 500px;
            color: #fff;
            position: relative;
            overflow: hidden;
        }

        .w-background-video > video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -100;
            background-position: 50%;
            background-size: cover;
            margin: auto;
            position: absolute;
            top: -100%;
            bottom: -100%;
            left: -100%;
            right: -100%;
        }

        .w-background-video > video::-webkit-media-controls-start-playback-button {
            -webkit-appearance: none;
            display: none !important;
        }

        .w-background-video--control {
            background-color: rgba(0, 0, 0, 0);
            padding: 0;
            position: absolute;
            bottom: 1em;
            right: 1em;
        }

        .w-background-video--control > [hidden] {
            display: none !important;
        }

        .w-slider {
            height: 300px;
            text-align: center;
            clear: both;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            tap-highlight-color: rgba(0, 0, 0, 0);
            background: #ddd;
            position: relative;
        }

        .w-slider-mask {
            z-index: 1;
            height: 100%;
            white-space: nowrap;
            display: block;
            position: relative;
            left: 0;
            right: 0;
            overflow: hidden;
        }

        .w-slide {
            vertical-align: top;
            width: 100%;
            height: 100%;
            white-space: normal;
            text-align: left;
            display: inline-block;
            position: relative;
        }

        .w-slider-nav {
            z-index: 2;
            height: 40px;
            text-align: center;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            tap-highlight-color: rgba(0, 0, 0, 0);
            margin: auto;
            padding-top: 10px;
            position: absolute;
            top: auto;
            bottom: 0;
            left: 0;
            right: 0;
        }

        .w-slider-nav.w-round > div {
            border-radius: 100%;
        }

        .w-slider-nav.w-num > div {
            width: auto;
            height: auto;
            font-size: inherit;
            line-height: inherit;
            padding: .2em .5em;
        }

        .w-slider-nav.w-shadow > div {
            box-shadow: 0 0 3px rgba(51, 51, 51, .4);
        }

        .w-slider-nav-invert {
            color: #fff;
        }

        .w-slider-nav-invert > div {
            background-color: rgba(34, 34, 34, .4);
        }

        .w-slider-nav-invert > div.w-active {
            background-color: #222;
        }

        .w-slider-dot {
            width: 1em;
            height: 1em;
            cursor: pointer;
            background-color: rgba(255, 255, 255, .4);
            margin: 0 3px .5em;
            transition: background-color .1s, color .1s;
            display: inline-block;
            position: relative;
        }

        .w-slider-dot.w-active {
            background-color: #fff;
        }

        .w-slider-dot:focus {
            outline: none;
            box-shadow: 0 0 0 2px #fff;
        }

        .w-slider-dot:focus.w-active {
            box-shadow: none;
        }

        .w-slider-arrow-left, .w-slider-arrow-right {
            width: 80px;
            cursor: pointer;
            color: #fff;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            tap-highlight-color: rgba(0, 0, 0, 0);
            -webkit-user-select: none;
            -ms-user-select: none;
            user-select: none;
            margin: auto;
            font-size: 40px;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            overflow: hidden;
        }

        .w-slider-arrow-left [class^="w-icon-"], .w-slider-arrow-right [class^="w-icon-"], .w-slider-arrow-left [class*=" w-icon-"], .w-slider-arrow-right [class*=" w-icon-"] {
            position: absolute;
        }

        .w-slider-arrow-left:focus, .w-slider-arrow-right:focus {
            outline: 0;
        }

        .w-slider-arrow-left {
            z-index: 3;
            right: auto;
        }

        .w-slider-arrow-right {
            z-index: 4;
            left: auto;
        }

        .w-icon-slider-left, .w-icon-slider-right {
            width: 1em;
            height: 1em;
            margin: auto;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
        }

        .w-slider-aria-label {
            clip: rect(0 0 0 0);
            height: 1px;
            width: 1px;
            border: 0;
            margin: -1px;
            padding: 0;
            position: absolute;
            overflow: hidden;
        }

        .w-slider-force-show {
            display: block !important;
        }

        .w-dropdown {
            text-align: left;
            z-index: 900;
            margin-left: auto;
            margin-right: auto;
            display: inline-block;
            position: relative;
        }

        .w-dropdown-btn, .w-dropdown-toggle, .w-dropdown-link {
            vertical-align: top;
            color: #222;
            text-align: left;
            white-space: nowrap;
            margin-left: auto;
            margin-right: auto;
            padding: 20px;
            text-decoration: none;
            position: relative;
        }

        .w-dropdown-toggle {
            -webkit-user-select: none;
            -ms-user-select: none;
            user-select: none;
            cursor: pointer;
            padding-right: 40px;
            display: inline-block;
        }

        .w-dropdown-toggle:focus {
            outline: 0;
        }

        .w-icon-dropdown-toggle {
            width: 1em;
            height: 1em;
            margin: auto 20px auto auto;
            position: absolute;
            top: 0;
            bottom: 0;
            right: 0;
        }

        .w-dropdown-list {
            min-width: 100%;
            background: #ddd;
            display: none;
            position: absolute;
        }

        .w-dropdown-list.w--open {
            display: block;
        }

        .w-dropdown-link {
            color: #222;
            padding: 10px 20px;
            display: block;
        }

        .w-dropdown-link.w--current {
            color: #0082f3;
        }

        .w-dropdown-link:focus {
            outline: 0;
        }

        @media screen and (max-width: 767px) {
            .w-nav-brand {
                padding-left: 10px;
            }
        }

        .w-lightbox-backdrop {
            cursor: auto;
            letter-spacing: normal;
            text-indent: 0;
            text-shadow: none;
            text-transform: none;
            visibility: visible;
            white-space: normal;
            word-break: normal;
            word-spacing: normal;
            word-wrap: normal;
            color: #fff;
            text-align: center;
            z-index: 2000;
            opacity: 0;
            -webkit-user-select: none;
            -moz-user-select: none;
            -webkit-tap-highlight-color: transparent;
            background: rgba(0, 0, 0, .9);
            outline: 0;
            font-family: Helvetica Neue, Helvetica, Ubuntu, Segoe UI, Verdana, sans-serif;
            font-size: 17px;
            font-style: normal;
            font-weight: 300;
            line-height: 1.2;
            list-style: disc;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            -webkit-transform: translate(0);
        }

        .w-lightbox-backdrop, .w-lightbox-container {
            height: 100%;
            -webkit-overflow-scrolling: touch;
            overflow: auto;
        }

        .w-lightbox-content {
            height: 100vh;
            position: relative;
            overflow: hidden;
        }

        .w-lightbox-view {
            width: 100vw;
            height: 100vh;
            opacity: 0;
            position: absolute;
        }

        .w-lightbox-view:before {
            content: "";
            height: 100vh;
        }

        .w-lightbox-group, .w-lightbox-group .w-lightbox-view, .w-lightbox-group .w-lightbox-view:before {
            height: 86vh;
        }

        .w-lightbox-frame, .w-lightbox-view:before {
            vertical-align: middle;
            display: inline-block;
        }

        .w-lightbox-figure {
            margin: 0;
            position: relative;
        }

        .w-lightbox-group .w-lightbox-figure {
            cursor: pointer;
        }

        .w-lightbox-img {
            width: auto;
            height: auto;
            max-width: none;
        }

        .w-lightbox-image {
            float: none;
            max-width: 100vw;
            max-height: 100vh;
            display: block;
        }

        .w-lightbox-group .w-lightbox-image {
            max-height: 86vh;
        }

        .w-lightbox-caption {
            text-align: left;
            text-overflow: ellipsis;
            white-space: nowrap;
            background: rgba(0, 0, 0, .4);
            padding: .5em 1em;
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            overflow: hidden;
        }

        .w-lightbox-embed {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
        }

        .w-lightbox-control {
            width: 4em;
            cursor: pointer;
            background-position: center;
            background-repeat: no-repeat;
            background-size: 24px;
            transition: all .3s;
            position: absolute;
            top: 0;
        }

        .w-lightbox-left {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9Ii0yMCAwIDI0IDQwIiB3aWR0aD0iMjQiIGhlaWdodD0iNDAiPjxnIHRyYW5zZm9ybT0icm90YXRlKDQ1KSI+PHBhdGggZD0ibTAgMGg1djIzaDIzdjVoLTI4eiIgb3BhY2l0eT0iLjQiLz48cGF0aCBkPSJtMSAxaDN2MjNoMjN2M2gtMjZ6IiBmaWxsPSIjZmZmIi8+PC9nPjwvc3ZnPg==");
            display: none;
            bottom: 0;
            left: 0;
        }

        .w-lightbox-right {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9Ii00IDAgMjQgNDAiIHdpZHRoPSIyNCIgaGVpZ2h0PSI0MCI+PGcgdHJhbnNmb3JtPSJyb3RhdGUoNDUpIj48cGF0aCBkPSJtMC0waDI4djI4aC01di0yM2gtMjN6IiBvcGFjaXR5PSIuNCIvPjxwYXRoIGQ9Im0xIDFoMjZ2MjZoLTN2LTIzaC0yM3oiIGZpbGw9IiNmZmYiLz48L2c+PC9zdmc+");
            display: none;
            bottom: 0;
            right: 0;
        }

        .w-lightbox-close {
            height: 2.6em;
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9Ii00IDAgMTggMTciIHdpZHRoPSIxOCIgaGVpZ2h0PSIxNyI+PGcgdHJhbnNmb3JtPSJyb3RhdGUoNDUpIj48cGF0aCBkPSJtMCAwaDd2LTdoNXY3aDd2NWgtN3Y3aC01di03aC03eiIgb3BhY2l0eT0iLjQiLz48cGF0aCBkPSJtMSAxaDd2LTdoM3Y3aDd2M2gtN3Y3aC0zdi03aC03eiIgZmlsbD0iI2ZmZiIvPjwvZz48L3N2Zz4=");
            background-size: 18px;
            right: 0;
        }

        .w-lightbox-strip {
            white-space: nowrap;
            padding: 0 1vh;
            line-height: 0;
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            overflow-x: auto;
            overflow-y: hidden;
        }

        .w-lightbox-item {
            width: 10vh;
            box-sizing: content-box;
            cursor: pointer;
            padding: 2vh 1vh;
            display: inline-block;
            -webkit-transform: translate3d(0, 0, 0);
        }

        .w-lightbox-active {
            opacity: .3;
        }

        .w-lightbox-thumbnail {
            height: 10vh;
            background: #222;
            position: relative;
            overflow: hidden;
        }

        .w-lightbox-thumbnail-image {
            position: absolute;
            top: 0;
            left: 0;
        }

        .w-lightbox-thumbnail .w-lightbox-tall {
            width: 100%;
            top: 50%;
            transform: translate(0, -50%);
        }

        .w-lightbox-thumbnail .w-lightbox-wide {
            height: 100%;
            left: 50%;
            transform: translate(-50%);
        }

        .w-lightbox-spinner {
            box-sizing: border-box;
            width: 40px;
            height: 40px;
            border: 5px solid rgba(0, 0, 0, .4);
            border-radius: 50%;
            margin-top: -20px;
            margin-left: -20px;
            animation: .8s linear infinite spin;
            position: absolute;
            top: 50%;
            left: 50%;
        }

        .w-lightbox-spinner:after {
            content: "";
            border: 3px solid rgba(0, 0, 0, 0);
            border-bottom-color: #fff;
            border-radius: 50%;
            position: absolute;
            top: -4px;
            bottom: -4px;
            left: -4px;
            right: -4px;
        }

        .w-lightbox-hide {
            display: none;
        }

        .w-lightbox-noscroll {
            overflow: hidden;
        }

        @media (min-width: 768px) {
            .w-lightbox-content {
                height: 96vh;
                margin-top: 2vh;
            }

            .w-lightbox-view, .w-lightbox-view:before {
                height: 96vh;
            }

            .w-lightbox-group, .w-lightbox-group .w-lightbox-view, .w-lightbox-group .w-lightbox-view:before {
                height: 84vh;
            }

            .w-lightbox-image {
                max-width: 96vw;
                max-height: 96vh;
            }

            .w-lightbox-group .w-lightbox-image {
                max-width: 82.3vw;
                max-height: 84vh;
            }

            .w-lightbox-left, .w-lightbox-right {
                opacity: .5;
                display: block;
            }

            .w-lightbox-close {
                opacity: .8;
            }

            .w-lightbox-control:hover {
                opacity: 1;
            }
        }

        .w-lightbox-inactive, .w-lightbox-inactive:hover {
            opacity: 0;
        }

        .w-richtext:before, .w-richtext:after {
            content: " ";
            grid-area: 1 / 1 / 2 / 2;
            display: table;
        }

        .w-richtext:after {
            clear: both;
        }

        .w-richtext[contenteditable="true"]:before, .w-richtext[contenteditable="true"]:after {
            white-space: initial;
        }

        .w-richtext ol, .w-richtext ul {
            overflow: hidden;
        }

        .w-richtext .w-richtext-figure-selected.w-richtext-figure-type-video div:after, .w-richtext .w-richtext-figure-selected[data-rt-type="video"] div:after, .w-richtext .w-richtext-figure-selected.w-richtext-figure-type-image div, .w-richtext .w-richtext-figure-selected[data-rt-type="image"] div {
            outline: 2px solid #2895f7;
        }

        .w-richtext figure.w-richtext-figure-type-video > div:after, .w-richtext figure[data-rt-type="video"] > div:after {
            content: "";
            display: none;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
        }

        .w-richtext figure {
            max-width: 60%;
            position: relative;
        }

        .w-richtext figure > div:before {
            cursor: default !important;
        }

        .w-richtext figure img {
            width: 100%;
        }

        .w-richtext figure figcaption.w-richtext-figcaption-placeholder {
            opacity: .6;
        }

        .w-richtext figure div {
            color: rgba(0, 0, 0, 0);
            font-size: 0;
        }

        .w-richtext figure.w-richtext-figure-type-image, .w-richtext figure[data-rt-type="image"] {
            display: table;
        }

        .w-richtext figure.w-richtext-figure-type-image > div, .w-richtext figure[data-rt-type="image"] > div {
            display: inline-block;
        }

        .w-richtext figure.w-richtext-figure-type-image > figcaption, .w-richtext figure[data-rt-type="image"] > figcaption {
            caption-side: bottom;
            display: table-caption;
        }

        .w-richtext figure.w-richtext-figure-type-video, .w-richtext figure[data-rt-type="video"] {
            width: 60%;
            height: 0;
        }

        .w-richtext figure.w-richtext-figure-type-video iframe, .w-richtext figure[data-rt-type="video"] iframe {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }

        .w-richtext figure.w-richtext-figure-type-video > div, .w-richtext figure[data-rt-type="video"] > div {
            width: 100%;
        }

        .w-richtext figure.w-richtext-align-center {
            clear: both;
            margin-left: auto;
            margin-right: auto;
        }

        .w-richtext figure.w-richtext-align-center.w-richtext-figure-type-image > div, .w-richtext figure.w-richtext-align-center[data-rt-type="image"] > div {
            max-width: 100%;
        }

        .w-richtext figure.w-richtext-align-normal {
            clear: both;
        }

        .w-richtext figure.w-richtext-align-fullwidth {
            width: 100%;
            max-width: 100%;
            text-align: center;
            clear: both;
            margin-left: auto;
            margin-right: auto;
            display: block;
        }

        .w-richtext figure.w-richtext-align-fullwidth > div {
            padding-bottom: inherit;
            display: inline-block;
        }

        .w-richtext figure.w-richtext-align-fullwidth > figcaption {
            display: block;
        }

        .w-richtext figure.w-richtext-align-floatleft {
            float: left;
            clear: none;
            margin-right: 15px;
        }

        .w-richtext figure.w-richtext-align-floatright {
            float: right;
            clear: none;
            margin-left: 15px;
        }

        .w-nav {
            z-index: 1000;
            background: #ddd;
            position: relative;
        }

        .w-nav:before, .w-nav:after {
            content: " ";
            grid-area: 1 / 1 / 2 / 2;
            display: table;
        }

        .w-nav:after {
            clear: both;
        }

        .w-nav-brand {
            float: left;
            color: #333;
            text-decoration: none;
            position: relative;
        }

        .w-nav-link {
            vertical-align: top;
            color: #222;
            text-align: left;
            margin-left: auto;
            margin-right: auto;
            padding: 20px;
            text-decoration: none;
            display: inline-block;
            position: relative;
        }

        .w-nav-link.w--current {
            color: #0082f3;
        }

        .w-nav-menu {
            float: right;
            position: relative;
        }

        [data-nav-menu-open] {
            text-align: center;
            min-width: 200px;
            background: #c8c8c8;
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            overflow: visible;
            display: block !important;
        }

        .w--nav-link-open {
            display: block;
            position: relative;
        }

        .w-nav-overlay {
            width: 100%;
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            overflow: hidden;
        }

        .w-nav-overlay [data-nav-menu-open] {
            top: 0;
        }

        .w-nav[data-animation="over-left"] .w-nav-overlay {
            width: auto;
        }

        .w-nav[data-animation="over-left"] .w-nav-overlay, .w-nav[data-animation="over-left"] [data-nav-menu-open] {
            z-index: 1;
            top: 0;
            right: auto;
        }

        .w-nav[data-animation="over-right"] .w-nav-overlay {
            width: auto;
        }

        .w-nav[data-animation="over-right"] .w-nav-overlay, .w-nav[data-animation="over-right"] [data-nav-menu-open] {
            z-index: 1;
            top: 0;
            left: auto;
        }

        .w-nav-button {
            float: right;
            cursor: pointer;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            tap-highlight-color: rgba(0, 0, 0, 0);
            -webkit-user-select: none;
            -ms-user-select: none;
            user-select: none;
            padding: 18px;
            font-size: 24px;
            display: none;
            position: relative;
        }

        .w-nav-button:focus {
            outline: 0;
        }

        .w-nav-button.w--open {
            color: #fff;
            background-color: #c8c8c8;
        }

        .w-nav[data-collapse="all"] .w-nav-menu {
            display: none;
        }

        .w-nav[data-collapse="all"] .w-nav-button, .w--nav-dropdown-open, .w--nav-dropdown-toggle-open {
            display: block;
        }

        .w--nav-dropdown-list-open {
            position: static;
        }

        @media screen and (max-width: 991px) {
            .w-nav[data-collapse="medium"] .w-nav-menu {
                display: none;
            }

            .w-nav[data-collapse="medium"] .w-nav-button {
                display: block;
            }
        }

        @media screen and (max-width: 767px) {
            .w-nav[data-collapse="small"] .w-nav-menu {
                display: none;
            }

            .w-nav[data-collapse="small"] .w-nav-button {
                display: block;
            }

            .w-nav-brand {
                padding-left: 10px;
            }
        }

        @media screen and (max-width: 479px) {
            .w-nav[data-collapse="tiny"] .w-nav-menu {
                display: none;
            }

            .w-nav[data-collapse="tiny"] .w-nav-button {
                display: block;
            }
        }

        .w-tabs {
            position: relative;
        }

        .w-tabs:before, .w-tabs:after {
            content: " ";
            grid-area: 1 / 1 / 2 / 2;
            display: table;
        }

        .w-tabs:after {
            clear: both;
        }

        .w-tab-menu {
            position: relative;
        }

        .w-tab-link {
            vertical-align: top;
            text-align: left;
            cursor: pointer;
            color: #222;
            background-color: #ddd;
            padding: 9px 30px;
            text-decoration: none;
            display: inline-block;
            position: relative;
        }

        .w-tab-link.w--current {
            background-color: #c8c8c8;
        }

        .w-tab-link:focus {
            outline: 0;
        }

        .w-tab-content {
            display: block;
            position: relative;
            overflow: hidden;
        }

        .w-tab-pane {
            display: none;
            position: relative;
        }

        .w--tab-active {
            display: block;
        }

        @media screen and (max-width: 479px) {
            .w-tab-link {
                display: block;
            }
        }

        .w-ix-emptyfix:after {
            content: "";
        }

        @keyframes spin {
            0% {
                transform: rotate(0);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .w-dyn-empty {
            background-color: #ddd;
            padding: 10px;
        }

        .w-dyn-hide, .w-dyn-bind-empty, .w-condition-invisible {
            display: none !important;
        }

        .wf-layout-layout {
            display: grid;
        }

        :root {
            --neutral-800: #30323a;
            --neutral-900: #24252b;
            --primary-700: #3e8156;
            --neutral-50: #fafafc;
            --primary-200: #b9dfc6;
            --neutral-700: #494a50;
            --primary-300: #9bcfad;
            --neutral-100: #f5f6fa;
            --neutral-500: #7c7e83;
            --neutral-200: #e3e4e7;
            --neutral-600: #5a5b61;
            --neutral-400: #a3a5ac;
            --neutral-300: #babcc2;
            --primary-400: #7fbe95;
            --primary-100: #dbebe0;
            --primary-50: #e9f1ec;
            --primary-500: #68b181;
            --primary-600: #54996c;
            --primary-800: #2a663f;
            --primary-900: #0c4c23;
        }

        .w-layout-grid {
            grid-row-gap: 16px;
            grid-column-gap: 16px;
            grid-template-rows: auto auto;
            grid-template-columns: 1fr 1fr;
            grid-auto-columns: 1fr;
            display: grid;
        }

        body {
            color: var(--neutral-800);
            cursor: none;
            background-color: #fff;
            font-family: Poppins, sans-serif;
            font-size: 18px;
            line-height: 1.6;
        }

        h1 {
            color: var(--neutral-900);
            margin-top: 0;
            margin-bottom: 0;
            font-size: 42px;
            font-weight: 600;
            line-height: 1.2;
        }

        h2 {
            color: var(--neutral-900);
            margin-top: 0;
            margin-bottom: 16px;
            font-size: 36px;
            font-weight: 600;
            line-height: 1.3;
        }

        h3 {
            color: var(--neutral-900);
            margin-top: 0;
            margin-bottom: 8px;
            font-size: 24px;
            font-weight: 500;
            line-height: 1.4;
        }

        h4 {
            color: var(--neutral-900);
            margin-top: 0;
            margin-bottom: 6px;
            font-size: 20px;
            font-weight: 500;
            line-height: 1.35;
        }

        h5 {
            color: var(--neutral-900);
            margin-top: 0;
            margin-bottom: 0;
            font-size: 16px;
            font-weight: 500;
            line-height: 1.35;
        }

        h6 {
            color: var(--neutral-900);
            margin-top: 0;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 500;
            line-height: 18px;
        }

        p {
            margin-bottom: 0;
            font-size: 18px;
        }

        a {
            color: var(--neutral-800);
            cursor: none;
            text-decoration: none;
            transition: color .2s cubic-bezier(.165, .84, .44, 1);
        }

        a:hover {
            color: var(--primary-700);
        }

        ul {
            margin-top: 0;
            margin-bottom: 10px;
            padding-left: 40px;
        }

        ol {
            margin-top: 0;
            margin-bottom: 20px;
            padding-left: 40px;
        }

        img {
            max-width: 100%;
            display: inline-block;
        }

        blockquote {
            border-left: 5px solid #e2e2e2;
            margin-bottom: 10px;
            padding: 10px 20px;
            font-size: 18px;
            line-height: 22px;
        }

        figure {
            margin-bottom: 10px;
        }

        figcaption {
            text-align: center;
            margin-top: 5px;
        }

        .container {
            width: 100%;
            max-width: 1740px;
            margin-left: auto;
            margin-right: auto;
            position: relative;
        }

        .text-size-medium {
            font-size: 32px;
        }

        .text-size-medium.text-weight-medium.work-title {
            line-height: 1;
        }

        .button {
            background-color: var(--primary-700);
            color: var(--neutral-50);
            text-align: center;
            text-transform: capitalize;
            border-radius: 8px;
            padding: 12px 40px;
            font-size: 16px;
            transition: box-shadow .2s cubic-bezier(.165, .84, .44, 1), transform .2s cubic-bezier(.165, .84, .44, 1);
        }

        .button:hover {
            box-shadow: 2px 2px 0 0 var(--primary-200);
            transform: translate(2px, -2px);
        }

        .nav-link {
            color: #333;
            padding: 0 16px;
            font-size: 18px;
            text-decoration: none;
            position: relative;
        }

        .text-size-small {
            font-size: 14px;
        }

        .text-size-large {
            font-size: 44px;
        }

        .text-weight-semi {
            font-weight: 600;
        }

        .spacer-small {
            width: 16px;
            height: 16px;
        }

        .rich-text {
            text-align: left;
            font-size: 18px;
        }

        .rich-text h2 {
            margin-top: 48px;
            margin-bottom: 18px;
        }

        .rich-text h3 {
            margin-top: 32px;
            margin-bottom: 14px;
        }

        .rich-text h4 {
            margin-top: 24px;
            margin-bottom: 10px;
        }

        .rich-text h5 {
            margin-top: 16px;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .rich-text h6 {
            margin-top: 16px;
            margin-bottom: 10px;
        }

        .rich-text figure {
            margin-left: 0;
            margin-right: 0;
        }

        .rich-text p {
            color: var(--neutral-700);
            margin-bottom: 24px;
            line-height: 1.7;
        }

        .rich-text ul {
            margin-bottom: 20px;
            font-size: 18px;
            list-style-type: square;
        }

        .rich-text li {
            margin-bottom: 16px;
        }

        .rich-text blockquote {
            border-left-color: var(--primary-300);
            background-color: var(--neutral-100);
            margin-top: 20px;
            margin-bottom: 20px;
            padding-top: 20px;
            padding-bottom: 20px;
            font-size: 20px;
            line-height: 1.6;
        }

        .rich-text figcaption {
            color: var(--neutral-500);
            font-size: 16px;
        }

        .rich-text ol {
            margin-bottom: 20px;
        }

        .rich-text a {
            color: var(--neutral-800);
            font-weight: 500;
            text-decoration: none;
        }

        .rich-text a:hover {
            text-decoration: underline;
        }

        .spacer-medium {
            width: 24px;
            height: 24px;
        }

        .spacer-huge {
            width: 64px;
            height: 64px;
            flex: none;
        }

        .spacer-large {
            width: 32px;
            height: 32px;
        }

        .spacer-xhuge {
            width: 128px;
            height: 128px;
        }

        .admin-section {
            padding: 100px 32px;
        }

        .style-part-wrapper {
            grid-column-gap: 16px;
            grid-row-gap: 64px;
            grid-template-rows: auto;
            grid-template-columns: 1fr;
            grid-auto-columns: 1fr;
            justify-items: start;
            display: grid;
        }

        .style-part-wrapper.style-colors {
            grid-row-gap: 64px;
            flex-direction: column;
            grid-template-columns: 1fr 1fr 1fr;
            align-items: flex-start;
            display: flex;
        }

        .style-guide-heading {
            color: #464646;
            margin-bottom: 40px;
            font-weight: 600;
        }

        .style-heading-span {
            opacity: .49;
            margin-right: 16px;
            font-size: .7em;
            font-weight: 400;
            line-height: 1;
        }

        .style-guide-tag {
            color: #fff;
            text-transform: capitalize;
            background-color: #a95889;
            border-radius: 10px;
            margin-top: 0;
            margin-bottom: 20px;
            padding: 4px 16px;
            font-size: 12px;
        }

        .style-guide-tag.class {
            background-color: #4283e6;
        }

        .rich-text-styles {
            flex-direction: column;
            align-items: flex-start;
            display: flex;
        }

        .spacer-color {
            background-color: #bcbcbc;
        }

        .style-color-item {
            grid-row-gap: 12px;
            flex-direction: column;
            align-items: flex-start;
            display: flex;
        }

        .style-color-block {
            width: 100%;
            height: 156px;
        }

        .style-color-block.neutral-900 {
            background-color: var(--neutral-900);
        }

        .style-color-block.neutral-800 {
            background-color: var(--neutral-800);
        }

        .style-color-block.neutral-200 {
            background-color: var(--neutral-200);
        }

        .style-color-block.neutral-700 {
            background-color: var(--neutral-700);
        }

        .style-color-block.neutral-600 {
            background-color: var(--neutral-600);
        }

        .style-color-block.neutral-500 {
            background-color: var(--neutral-500);
        }

        .style-color-block.neutral-400 {
            background-color: var(--neutral-400);
        }

        .style-color-block.neutral-300 {
            background-color: var(--neutral-300);
        }

        .style-color-block.neutral-100 {
            background-color: var(--neutral-100);
        }

        .style-color-block.neutral-50 {
            background-color: var(--neutral-50);
        }

        .style-color-block.primary-c-400 {
            background-color: var(--primary-400);
        }

        .style-color-block.primary-c-300 {
            background-color: var(--primary-300);
        }

        .style-color-block.primary-c-200 {
            background-color: var(--primary-200);
        }

        .style-color-block.primary-c-100 {
            background-color: var(--primary-100);
        }

        .style-color-block.primary-c-50 {
            background-color: var(--primary-50);
        }

        .style-color-block.primary-c-500 {
            background-color: var(--primary-500);
        }

        .style-color-block.primary-c-600 {
            background-color: var(--primary-600);
        }

        .style-color-block.primary-c-700 {
            background-color: var(--primary-700);
        }

        .style-color-block.primary-c-800 {
            background-color: var(--primary-800);
        }

        .style-color-block.primary-c-900 {
            background-color: var(--primary-900);
        }

        .style-color-row {
            width: 100%;
            grid-column-gap: 32px;
            grid-row-gap: 16px;
            grid-template-rows: auto;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
            grid-auto-columns: 1fr;
            display: grid;
        }

        .admin-body {
            background-color: #fff;
        }

        .style-color-sector {
            width: 100%;
            grid-row-gap: 20px;
            flex-direction: column;
            align-items: flex-start;
            display: flex;
        }

        .styleguide-grid {
            grid-row-gap: 64px;
            flex-direction: column;
            display: flex;
        }

        .admin-navigation {
            min-width: 220px;
            grid-row-gap: 20px;
            flex-direction: column;
            flex: none;
            align-items: flex-start;
            padding-right: 20px;
            font-size: 18px;
            display: flex;
            position: -webkit-sticky;
            position: sticky;
            top: 16px;
        }

        .admin-nav-link {
            text-decoration: none;
        }

        .admin-nav-link.w--current {
            font-weight: 700;
        }

        .admin-wrapper {
            grid-column-gap: 64px;
            grid-template-rows: auto auto;
            grid-template-columns: 1fr;
            grid-auto-columns: 1fr;
            align-items: flex-start;
            margin-left: auto;
            margin-right: auto;
            display: flex;
            position: relative;
        }

        .admin-top-wrapper {
            grid-column-gap: 80px;
            border-bottom: 1px solid #555;
            align-items: center;
            margin-bottom: 40px;
            margin-left: auto;
            margin-right: auto;
            padding-bottom: 24px;
            display: flex;
        }

        .admin-utility-links {
            grid-column-gap: 24px;
            grid-template-rows: auto;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            display: flex;
        }

        .text-white {
            color: var(--neutral-50);
        }

        .text-grey {
            color: var(--neutral-500);
        }

        .spacer-tiny {
            width: 8px;
            height: 8px;
        }

        .arrow-link {
            grid-column-gap: 10px;
            color: var(--primary-700);
            align-items: center;
            font-weight: 500;
            text-decoration: none;
            display: flex;
        }

        .text-dark-grey {
            color: var(--neutral-700);
        }

        .text-dark-grey.project-summary {
            width: 280px;
        }

        .text-weight-medium {
            font-weight: 500;
        }

        .text-size-tiny {
            font-size: 12px;
        }

        .spacer-xtiny {
            width: 6px;
            height: 6px;
        }

        .text-off-white {
            color: var(--neutral-200);
        }

        .text-weight-bold {
            font-weight: 700;
        }

        .style-part-item {
            flex-direction: column;
            align-items: flex-start;
            display: flex;
        }

        .style-guide-heading-3 {
            color: #525252;
        }

        .style-guide-heading-3.on-dark-bg {
            color: #fff;
        }

        .style-part-block {
            grid-row-gap: 32px;
            flex-direction: column;
            align-items: flex-start;
            display: flex;
        }

        .style-part-block.dark-background {
            background-color: var(--neutral-900);
            padding: 20px;
        }

        .post-overview {
            justify-content: space-between;
            align-items: flex-start;
        }

        .spacer-xsmall {
            width: 12px;
            height: 12px;
        }

        .spacer-xlarge {
            width: 48px;
            height: 48px;
        }

        .section {
            background-image: linear-gradient(rgba(255, 255, 255, .59), rgba(255, 255, 255, .59)), url("https://assets-global.website-files.com/65be9b92117a52590d6b37ef/65be9b92117a52590d6b38cb_Texture%20(1).png");
            background-position: 0 0, 0 0;
            background-size: auto, auto;
            padding-bottom: 5vh;
            padding-left: 4%;
            padding-right: 4%;
        }

        .main-layout {
            justify-content: space-between;
            align-items: flex-start;
            display: flex;
            position: relative;
        }

        .main-layout-left {
            width: 35%;
            height: 95vh;
            flex-direction: column;
            flex: none;
            display: flex;
            position: -webkit-sticky;
            position: sticky;
            top: 0;
        }

        .main-layout-right {
            max-width: 940px;
            flex-direction: column;
            flex: 1;
            justify-content: flex-end;
            align-items: stretch;
            display: flex;
        }

        .main-title-wrapper {
            flex-direction: column;
            flex: 1;
            justify-content: flex-end;
            align-items: flex-start;
            padding-left: 80px;
            display: flex;
            position: relative;
        }

        .main-title {
            margin-bottom: -14px;
            font-size: 5vw;
            line-height: 1;
        }

        .intro-text-block {
            height: 95vh;
            flex-direction: column;
            justify-content: flex-end;
            align-items: flex-start;
            display: flex;
        }

        .main-left-line {
            width: 12px;
            height: 150px;
            background-color: var(--primary-600);
            position: absolute;
            top: auto;
            bottom: 0%;
            left: 0%;
            right: auto;
        }

        .main-bottom-line {
            width: 48px;
            height: 12px;
            background-color: var(--primary-600);
            position: absolute;
            top: auto;
            bottom: 0%;
            left: 0%;
            right: 0%;
        }

        .between-section-spacer {
            width: 220px;
            height: 220px;
        }

        .between-section-spacer.first-spacer {
            width: 300px;
            height: 300px;
        }

        .h2-wrapper {
            padding-top: 16px;
            padding-left: 16px;
            position: relative;
        }

        .h2-left-line {
            width: 4px;
            background-color: var(--primary-600);
            position: absolute;
            top: 0%;
            bottom: 0%;
            left: 0%;
            right: auto;
        }

        .h2-top-line {
            width: 24px;
            height: 4px;
            background-color: var(--primary-600);
            position: absolute;
            top: 0%;
            bottom: auto;
            left: 0%;
            right: auto;
        }

        .text-color-primary {
            color: var(--primary-600);
        }

        .service-subset-grid {
            grid-template-rows: auto;
            grid-template-columns: auto 1fr auto 1fr auto 1fr auto;
            align-items: center;
            justify-items: center;
        }

        .service-divider-line {
            width: 1px;
            height: 48px;
            background-color: var(--neutral-300);
        }

        .spacer-between-main {
            width: 96px;
            height: 96px;
        }

        .previous-work-collection {
            width: 100%;
        }

        .previous-work-list {
            border-top: 1px solid var(--neutral-300);
        }

        .previous-work-item {
            border-bottom: 1px solid var(--neutral-300);
        }

        .previous-work-content {
            grid-column-gap: 24px;
            grid-row-gap: 16px;
            grid-template-rows: auto;
            grid-template-columns: 1fr auto;
            grid-auto-columns: 1fr;
            align-items: start;
            padding-top: 32px;
            padding-bottom: 32px;
            display: grid;
        }

        .previous-item-arrow {
            margin-top: 8px;
        }

        .previous-work-item-left {
            align-items: flex-start;
            display: flex;
        }

        .previous-work-image {
            width: 164px;
            height: 112px;
            object-fit: cover;
            flex: none;
            overflow: hidden;
        }

        .project-image-spacer {
            width: 24px;
        }

        .main-profile-wrapper {
            z-index: 1;
            width: 70%;
            max-width: 400px;
            position: absolute;
            top: auto;
            bottom: 31%;
            left: auto;
            right: 0%;
        }

        .main-profile-image {
            width: 100%;
        }

        .profile-contact-link {
            width: 48px;
            height: 48px;
            background-color: var(--primary-50);
            justify-content: center;
            align-items: center;
            display: flex;
        }

        .profile-contact-grid {
            grid-template-rows: auto;
            position: absolute;
            top: auto;
            bottom: 0%;
            left: auto;
            right: 0%;
        }

        .profile-contact-icon {
            height: 20px;
            color: var(--primary-900);
            justify-content: center;
            align-items: center;
            display: flex;
        }

        .profile-contact-icon.email {
            height: 17px;
        }

        .bottom-contact-wrapper {
            justify-content: space-between;
            align-items: flex-start;
            display: flex;
        }

        .contact-details-grid {
            grid-template-columns: 1fr;
            margin-top: 8px;
        }

        .contact-link-block {
            grid-column-gap: 12px;
            align-items: center;
            display: flex;
        }

        .contact-link-arrow {
            height: 12px;
            align-items: center;
            display: flex;
        }

        .navbar {
            z-index: 1;
            width: 100%;
            background-color: rgba(221, 221, 221, 0);
            justify-content: space-between;
            align-items: center;
            padding-top: 28px;
            padding-bottom: 28px;
            position: absolute;
            top: 0%;
            bottom: auto;
            left: 0%;
            right: 0%;
        }

        .navbar-container {
            width: 100%;
            justify-content: space-between;
            align-items: center;
            display: flex;
        }

        .nav-menu {
            align-items: center;
            display: flex;
        }

        .nav-bottom-line {
            height: 1px;
            background-color: var(--neutral-300);
            position: absolute;
            top: auto;
            bottom: 0%;
            left: 0%;
            right: 0%;
        }

        .loading-screen-text {
            color: var(--neutral-900);
            margin-bottom: 0;
            font-size: 6vw;
            font-weight: 600;
            line-height: 1;
            display: none;
            position: absolute;
            top: auto;
            bottom: 20px;
            left: 80px;
            right: auto;
        }

        .cursor-wrapper {
            z-index: 1000;
            justify-content: center;
            align-items: center;
            display: flex;
            position: fixed;
            top: 0%;
            bottom: 0%;
            left: 0%;
            right: 0%;
        }

        .cursor {
            width: 24px;
            height: 24px;
            border: 1px solid var(--neutral-900);
            background-color: var(--neutral-900);
            border-radius: 100px;
        }

        .project-page-top {
            padding-top: 164px;
        }

        .project-top-grid {
            border-top: 1px solid var(--neutral-300);
            border-bottom: 1px solid var(--neutral-300);
            grid-template-rows: auto;
            grid-template-columns: 1fr 1fr 1fr;
            padding-top: 64px;
            padding-bottom: 64px;
        }

        .project-main-content {
            padding-top: 64px;
        }

        .main-content-layout {
            grid-column-gap: 16px;
            grid-row-gap: 16px;
            grid-template-rows: auto;
            grid-template-columns: .5fr 1fr;
            grid-auto-columns: 1fr;
            padding-bottom: 96px;
            display: grid;
        }

        .content-gallery-list {
            grid-column-gap: 16px;
            grid-row-gap: 16px;
            grid-template-rows: auto auto;
            grid-template-columns: 1fr 1fr;
            grid-auto-columns: 1fr;
            display: grid;
        }

        .content-gallery-image {
            width: 100%;
            height: 22vw;
            object-fit: cover;
        }

        @media screen and (max-width: 991px) {
            body {
                cursor: auto;
            }

            .nav-link {
                text-align: center;
                padding: 12px 0;
                display: block;
            }

            .text-size-large.intro-text {
                font-size: 44px;
            }

            .spacer-medium {
                width: 20px;
                height: 20px;
            }

            .spacer-huge {
                width: 48px;
                height: 48px;
            }

            .spacer-xhuge {
                width: 64px;
                height: 64px;
            }

            .style-color-row {
                grid-template-columns: 1fr 1fr 1fr;
            }

            .admin-navigation {
                min-width: 200px;
            }

            .admin-wrapper {
                grid-column-gap: 24px;
            }

            .spacer-xlarge {
                width: 40px;
                height: 40px;
            }

            .section {
                padding-bottom: 96px;
            }

            .main-layout {
                padding-top: 128px;
                display: block;
            }

            .main-layout-left {
                width: 100%;
                height: auto;
                grid-row-gap: 64px;
                position: static;
            }

            .main-title {
                margin-bottom: 0;
                font-size: 64px;
                line-height: 1;
            }

            .intro-text-block {
                height: auto;
            }

            .main-left-line {
                height: 100%;
            }

            .between-section-spacer {
                width: 80px;
                height: 80px;
            }

            .between-section-spacer.first-spacer {
                width: 128px;
                height: 128px;
            }

            .spacer-between-main {
                width: 32px;
                height: 32px;
            }

            .previous-work-image, .project-image-spacer {
                display: none;
            }

            .main-profile-wrapper {
                z-index: 0;
                width: 70%;
                max-width: none;
                margin-left: 10%;
                position: relative;
                bottom: 0%;
            }

            .navbar {
                height: 80px;
                padding-top: 0;
                padding-bottom: 0;
                display: flex;
            }

            .nav-menu {
                border-right: 1px solid var(--neutral-300);
                border-bottom: 1px solid var(--neutral-300);
                border-left: 1px solid var(--neutral-300);
                background-color: #eeeeec;
                top: 80px;
                bottom: auto;
                left: auto;
                right: 0;
            }

            .cursor-wrapper {
                display: none;
            }

            .project-top-grid {
                padding-top: 48px;
                padding-bottom: 48px;
            }

            .main-content-layout {
                grid-template-columns: 1fr;
            }

            .main-content-layout.no-padding-bottom {
                padding-bottom: 0;
            }

            .content-gallery-image {
                height: 30vw;
            }

            .navigation-button {
                z-index: 5;
                flex-direction: row;
                justify-content: center;
                align-items: center;
                padding: 0;
                display: flex;
            }

            .navigation-button.w--open {
                background-color: rgba(200, 200, 200, 0);
            }

            .menu-button-icon {
                width: 48px;
                height: 48px;
                grid-row-gap: 8px;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                display: flex;
            }

            .line-1 {
                width: 32px;
                height: 2px;
                background-color: var(--neutral-800);
                flex: none;
                padding-bottom: 0;
                padding-right: 0;
            }
        }

        @media screen and (max-width: 767px) {
            h1 {
                font-size: 38px;
            }

            h2, .text-size-medium {
                font-size: 28px;
            }

            .text-size-large {
                font-size: 20px;
            }

            .text-size-large.intro-text {
                font-size: 36px;
            }

            .spacer-huge {
                width: 40px;
                height: 40px;
            }

            .spacer-large {
                width: 28px;
                height: 28px;
            }

            .spacer-xhuge {
                width: 56px;
                height: 56px;
            }

            .admin-section {
                padding-left: 24px;
                padding-right: 24px;
            }

            .style-color-row {
                grid-template-columns: 1fr 1fr 1fr;
            }

            .admin-navigation {
                display: none;
            }

            .admin-wrapper, .admin-top-wrapper {
                flex-direction: column;
            }

            .admin-utility-links {
                margin-top: 16px;
            }

            .text-dark-grey.project-summary {
                width: 90%;
            }

            .spacer-xlarge {
                width: 34px;
                height: 34px;
            }

            .between-section-spacer.first-spacer {
                width: 96px;
                height: 96px;
            }

            .service-subset-grid {
                text-align: center;
            }

            .spacer-between-main {
                width: 56px;
                height: 56px;
            }

            .bottom-contact-wrapper {
                flex-direction: column;
            }

            .contact-details-grid {
                grid-template-rows: auto;
                grid-template-columns: 1fr 1fr 1fr;
            }

            .nav-brand-link {
                padding-left: 0;
            }

            .project-top-grid {
                grid-row-gap: 32px;
                grid-template-columns: 1fr;
            }

            .main-content-layout {
                padding-bottom: 64px;
            }

            .line-1 {
                width: 28px;
            }
        }

        @media screen and (max-width: 479px) {
            h1 {
                font-size: 32px;
            }

            h2 {
                font-size: 24px;
            }

            p {
                font-size: 16px;
            }

            .text-size-medium {
                font-size: 22px;
            }

            .text-size-large.intro-text {
                font-size: 28px;
            }

            .spacer-small {
                width: 12px;
                height: 12px;
            }

            .rich-text figure {
                max-width: 100%;
            }

            .spacer-medium {
                width: 16px;
                height: 16px;
            }

            .spacer-large {
                width: 24px;
                height: 24px;
            }

            .spacer-xhuge {
                width: 48px;
                height: 48px;
            }

            .admin-section {
                padding-left: 16px;
                padding-right: 16px;
            }

            .style-color-row {
                grid-template-columns: 1fr;
            }

            .admin-utility-links {
                width: 100%;
                grid-column-gap: 32px;
                grid-row-gap: 16px;
                grid-template-rows: auto;
                grid-template-columns: 1fr 1fr;
                grid-auto-columns: 1fr;
                display: grid;
            }

            .style-guide-heading-3 {
                font-size: 22px;
            }

            .spacer-xlarge {
                width: 32px;
                height: 32px;
            }

            .main-layout-left {
                grid-row-gap: 48px;
            }

            .main-title-wrapper {
                padding-left: 64px;
            }

            .main-title {
                font-size: 48px;
            }

            .main-left-line {
                width: 8px;
            }

            .main-bottom-line {
                height: 8px;
            }

            .between-section-spacer {
                width: 64px;
                height: 64px;
            }

            .between-section-spacer.first-spacer {
                width: 80px;
                height: 80px;
            }

            .service-subset-grid {
                grid-template-rows: auto auto;
                grid-template-columns: auto;
                justify-items: start;
            }

            .service-divider-line {
                width: 100%;
                height: 1px;
            }

            .spacer-between-main {
                width: 48px;
                height: 48px;
            }

            .previous-work-content {
                padding-top: 24px;
                padding-bottom: 24px;
            }

            .main-profile-wrapper {
                width: 100%;
                margin-left: 0%;
            }

            .nav-brand-link {
                font-size: 14px;
            }

            .project-page-top {
                padding-top: 148px;
            }

            .project-top-grid {
                padding-top: 40px;
                padding-bottom: 40px;
            }

            .content-gallery-list {
                grid-template-columns: 1fr;
            }

            .content-gallery-image {
                height: 60vw;
            }

            .navigation-button {
                margin-left: 64px;
            }
        }

        #w-node-_5aaee28a-1f65-2276-f3a7-ad2921e790c6-0d6b3876, #w-node-d9b203bb-6c09-78a4-8d6b-25661ebf569e-0d6b3876, #w-node-af5f5c82-b3d6-f1ae-d574-4d22e9bc5e90-0d6b3876, #w-node-_7b70dc41-88a0-ad47-3916-46e7f5d7996a-0d6b3876, #w-node-_503be7f1-d0c2-3432-9e3a-aed820a5f830-0d6b3876, #w-node-b7cdbad6-3657-dec1-79c0-b617c1134731-0d6b3876, #w-node-_87e65078-c73d-f71e-a573-4b4b9880f832-0d6b3876, #w-node-_62725ae3-3893-a199-4799-45fcf3a3c4ca-0d6b3876, #w-node-c9b41fb6-f276-0003-5852-ba672217e797-0d6b3876, #w-node-_274ee41e-0896-1e4c-d80d-f9d557dd826d-0d6b3876, #w-node-d5940d1b-0e4c-1dba-d1f0-6c6f4c06b537-0d6b3876, #w-node-_941ee226-fd6d-e4db-16f3-c4120dc5552d-0d6b3876, #w-node-_96e68ad6-e8f9-cd19-8e24-224f9bb2b752-0d6b3876, #w-node-_87d9bde2-f26a-0e1e-55d2-d18c715dbe42-0d6b387f, #w-node-_8aadd5d6-4069-13cb-e82e-7268a1975c3f-0d6b387f, #w-node-cc49ae5b-4311-fa49-b243-315388313d5b-0d6b387f, #w-node-_8c9cb6e3-cd5c-345a-0255-7b93417cb750-0d6b387f, #w-node-_2a5ee0ef-60a8-b9ad-c3a0-66bb4ad78b3e-0d6b387f, #w-node-_23d11e9d-bf75-4966-5979-cf67eda38cb2-0d6b387f, #w-node-fd9b3947-3ecb-73cd-ca34-b3c8ba3e32db-0d6b387f, #w-node-fd9b3947-3ecb-73cd-ca34-b3c8ba3e32de-0d6b387f, #w-node-cb941d53-38ac-39bc-acc2-2b1f22e41a04-0d6b387f, #w-node-_99aa309a-cbcd-efd3-a5f4-2a338ab3066d-0d6b387f, #w-node-_99aa309a-cbcd-efd3-a5f4-2a338ab30671-0d6b387f, #w-node-_99aa309a-cbcd-efd3-a5f4-2a338ab30675-0d6b387f, #w-node-fc5ca1f8-7829-4029-46bc-44c0e90dd51a-0d6b3884, #w-node-d61d9482-a2b7-710a-d95c-e0b32f0a540f-0d6b3884, #w-node-b271cefc-47f2-3fb6-2dc7-478e264c9ea9-0d6b3884, #w-node-_35a42c1c-fdc9-a2e8-dd7c-09e0e43ff54e-0d6b3884, #w-node-bc2753bf-bc24-9e3b-040e-2e71f63106e7-0d6b3884, #w-node-b9d49739-8815-5bf8-f445-803afd50b69b-0d6b3884, #w-node-d3c24915-ccf3-41ed-5770-35e1ff2a4b7e-0d6b3884, #w-node-_892492fe-d3e8-59ee-9253-7acc27e1aff3-0d6b3884, #w-node-_86e60393-a394-741a-e615-2b915261b9a0-0d6b3884, #w-node-e6ba5ee7-6b0e-bb00-9299-c850955e8318-0d6b3884, #w-node-a625b82d-97d7-c918-829e-5f058ed661f3-0d6b3884, #w-node-e1329db1-e546-f682-8e4b-a0203b1794da-0d6b3884, #w-node-_522b3169-fd03-798d-2194-3db6b620acfa-0d6b3884, #w-node-_799d8fcf-d59f-9d22-de4a-f908f0aa39f5-0d6b3884, #w-node-_85727bc5-3b62-ffb3-28d4-f802b99b4043-0d6b3884, #w-node-b321dc60-81c8-7eed-8928-9a6238a40baf-0d6b3884, #w-node-a655b6d8-fa38-67b8-4504-a4ec6382528a-0d6b3884, #w-node-_9d3c3c83-b50a-0d2a-c022-6284d7ec0782-0d6b3884, #w-node-_18220ef0-cd6c-57dc-4651-a8e2475e60ee-0d6b3884, #w-node-_2e44df24-3378-a993-f457-e2d5f56e2e9d-0d6b3884, #w-node-_394c26b7-6f67-fa73-5674-60b6059a412c-0d6b3884, #w-node-fe3502e6-b8da-d30e-9d88-659862284515-0d6b3884, #w-node-_9ecc6952-b7a3-1ece-37d8-b96f4468004c-0d6b3884, #w-node-b78bbef4-9b03-0da2-bb27-cf83b6619b04-0d6b3884, #w-node-c1d58672-7d23-f3d8-7596-b0c6585d843b-0d6b3884, #w-node-e7a8e7d4-09b4-5193-d5b8-2bde0ab35e9b-0d6b3884, #w-node-_08748b5a-a8c4-4ded-dc68-6677e7cb4938-0d6b3884, #w-node-_8d3a0893-d512-b91b-1f2d-246fd92b4e8a-0d6b3884, #w-node-cec4661d-2c9b-fd8d-0061-3e7d3218bc6c-0d6b3884, #w-node-_413e4f39-08ca-9652-accf-2994e39a902f-0d6b3884, #w-node-_1a12a03a-2def-02b2-9052-7c89b1fd55f3-0d6b3884, #w-node-_46f23f21-27f2-0470-f7ac-461659fd9ebd-0d6b3884, #w-node-_98bd04c7-7a21-9acd-7bf3-f68680282cc6-0d6b3884, #w-node-fb84dea7-63d3-4aa1-9ebb-70192dd8896f-0d6b3884, #w-node-fb84dea7-63d3-4aa1-9ebb-70192dd88972-0d6b3884, #w-node-af827e25-3824-94a4-40b8-7222f832a37d-0d6b3884, #w-node-af827e25-3824-94a4-40b8-7222f832a380-0d6b3884, #w-node-b38dbce4-ccd5-51f0-a394-b1aa1d389fd0-0d6b3884, #w-node-b38dbce4-ccd5-51f0-a394-b1aa1d389fd3-0d6b3884, #w-node-_280d911e-dd8a-c079-9d48-b6a66326c208-0d6b3884, #w-node-_280d911e-dd8a-c079-9d48-b6a66326c209-0d6b3884, #w-node-_280d911e-dd8a-c079-9d48-b6a66326c210-0d6b3884, #w-node-_280d911e-dd8a-c079-9d48-b6a66326c213-0d6b3884, #w-node-_280d911e-dd8a-c079-9d48-b6a66326c215-0d6b3884, #w-node-_280d911e-dd8a-c079-9d48-b6a66326c218-0d6b3884, #w-node-f9abb333-c762-437f-aaf8-48389b66a3c3-0d6b3884, #w-node-_410d9890-c763-1751-d2a6-cae634e40859-0d6b3884, #w-node-_3e4db291-4df9-ed30-0da2-029eb6fa01e1-0d6b3884, #w-node-ef5c468c-9301-b8a4-55b1-1ec05b1c88d0-0d6b3884, #w-node-_5864fbe0-0580-b7d3-ffd3-98827dfb8a12-0d6b3884, #w-node-b9376714-13a1-dd37-693b-8368ddfc17e6-0d6b3884, #w-node-_2075a31b-1985-6cab-1829-a27e2eee41da-0d6b3884, #w-node-_72fc5ef4-d034-2a46-10c5-b554dbf69147-0d6b3884, #w-node-_72fc5ef4-d034-2a46-10c5-b554dbf6914a-0d6b3884, #w-node-e08a09e1-c253-03bc-807f-afd14fb6356a-0d6b3884, #w-node-b184637d-fca1-5fbe-5fd4-04b485d0b9e2-0d6b3884, #w-node-_3b64903f-1bbf-303a-dcb8-7324317851c5-0d6b3884, #w-node-c1a324d5-51f6-d9fa-9047-e288b59094d3-0d6b3884, #w-node-_1cc61ff6-3e50-835f-f3a9-1bf215963d0c-0d6b3884, #w-node-_1cc61ff6-3e50-835f-f3a9-1bf215963d0f-0d6b3884, #w-node-_9e0bba1a-5c09-ca83-4ccf-85a40436295a-0d6b3884, #w-node-e55a8ee3-0501-5115-53ea-18e701948ed3-0d6b3884, #w-node-b765529e-66c3-2feb-3d90-08e925d1c342-0d6b3884, #w-node-_0b55c5e4-740e-32ec-e805-456afbf65975-0d6b3884, #w-node-_023dee0b-e7f8-c90a-a652-fa34f8cdeea8-0d6b3884, #w-node-_1605e04d-569b-fa6e-827f-3232f0eb2dea-0d6b3884, #w-node-_83c72236-8ee9-5205-d2e4-4b51b78b8ea8-0d6b3884, #w-node-b8ae088f-1c63-cafc-add4-832563080d7d-0d6b3884, #w-node-_01b75c80-c81e-7972-8b45-74d7c1f2e73f-0d6b3884, #w-node-_0d0db7c9-4009-741d-6c58-565acbea0eff-0d6b3884, #w-node-f356501d-97d8-035b-df4d-eca2c7b5f60e-0d6b3884, #w-node-_6a6a1d28-43f2-f42c-16b3-df426de567e6-0d6b3884, #w-node-_966a83ea-3d69-ac2f-009c-22bf54d568bf-0d6b3884, #w-node-_4448f75f-cf76-b9bc-167d-28a0e3815b24-0d6b3884, #w-node-_1e18a6c8-41ca-5414-05cb-136218402193-0d6b3884, #w-node-e143f1d6-432b-c4e1-ad3c-79999e814d78-0d6b3884, #w-node-_91f54411-1fac-d4df-98d9-10df3522dd4a-0d6b3884, #w-node-_067da41e-f477-ed61-a68b-9a846bf2f451-0d6b3884, #w-node-_3b68a3f4-dcee-ed4e-5f87-f4319f25f004-0d6b3884, #w-node-_34d316d6-e12b-519b-f8db-664e7b2dc529-0d6b3884, #w-node-b2fb6433-b1c6-77e3-2fad-65037c507d1c-0d6b3884, #w-node-_631dd6a4-3f6c-25a5-318b-a94c643c8985-0d6b3884, #w-node-f3e96f4e-f6b2-9286-a955-5814454f4e42-0d6b3884, #w-node-_74cf44e3-b6e3-cd94-cc70-2adac6c847c7-0d6b3884, #w-node-_1300ac6e-8cf7-8a42-cb2e-eeac5a3d4042-0d6b3884, #w-node-_38a325be-650d-b6a8-a861-95a15a715636-0d6b3884, #w-node-_40f82bc9-7190-a19e-c3a5-8fb6bb3fb7ce-0d6b3884, #w-node-_40f82bc9-7190-a19e-c3a5-8fb6bb3fb7d1-0d6b3884, #w-node-_40f82bc9-7190-a19e-c3a5-8fb6bb3fb7d4-0d6b3884 {
            grid-area: span 1 / span 1 / span 1 / span 1;
        }

        @media (min-width: 992px) {
            html.w-mod-js:not(.w-mod-ix)
            [data-w-id="9fa48747-e31e-bf61-fcc8-47199e09c241"] {
                width: 0px;
            }
            html.w-mod-js:not(.w-mod-ix)
            [data-w-id="981759fc-1980-1abe-1238-21e6110ac0ad"] {
                width: 0px;
            }
            html.w-mod-js:not(.w-mod-ix)
            [data-w-id="9e8cc5f1-8c00-b1d2-7c31-6bb5b5eb4d30"] {
                opacity: 0;
            }
            html.w-mod-js:not(.w-mod-ix)
            [data-w-id="bc120317-8279-0334-c403-3d5329c04283"] {
                opacity: 0;
                -webkit-transform: translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0)
                rotateY(0) rotateZ(0) skew(0, 0);
                -moz-transform: translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0)
                rotateY(0) rotateZ(0) skew(0, 0);
                -ms-transform: translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0)
                rotateY(0) rotateZ(0) skew(0, 0);
                transform: translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0)
                rotateY(0) rotateZ(0) skew(0, 0);
            }
            html.w-mod-js:not(.w-mod-ix)
            [data-w-id="e69d2a1b-a2ce-e640-5628-3f8f25a5bb05"] {
                opacity: 0;
                -webkit-transform: translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0)
                rotateY(0) rotateZ(0) skew(0, 0);
                -moz-transform: translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0)
                rotateY(0) rotateZ(0) skew(0, 0);
                -ms-transform: translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0)
                rotateY(0) rotateZ(0) skew(0, 0);
                transform: translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0)
                rotateY(0) rotateZ(0) skew(0, 0);
            }
            html.w-mod-js:not(.w-mod-ix)
            [data-w-id="7d7bfd98-646f-fae2-1939-a39f0f6adbd5"] {
                opacity: 0;
            }
            html.w-mod-js:not(.w-mod-ix)
            [data-w-id="d4fa3f69-e0e5-abb8-ade7-fc6c1e06926a"] {
                width: 0px;
            }
            html.w-mod-js:not(.w-mod-ix)
            [data-w-id="5561a182-4eea-a254-c015-ef7507f42fdd"] {
                height: 0px;
            }
            html.w-mod-js:not(.w-mod-ix)
            [data-w-id="ec46cd45-781f-a9c3-84fb-8292b8a11988"] {
                display: block;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link
        href="https://fonts.gstatic.com"
        rel="preconnect"
        crossorigin="anonymous"
    />
    <script
        src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"
        type="text/javascript"
    ></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: [
                    "Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800",
                ],
            },
        });
    </script>
    <script type="text/javascript">
        !(function (o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            (n.className += t + "js"),
            ("ontouchstart" in o ||
                (o.DocumentTouch && c instanceof DocumentTouch)) &&
            (n.className += t + "touch");
        })(window, document);
    </script>
    <link
        href="./img/mouse.svg"
        rel="shortcut icon"
        type="image/x-icon"
    />
    <!-- <link rel="icon" href="./img/mouse.svg"> -->
    <link
        href="./img/mouse.svg"
        rel="apple-touch-icon"
    />
</head>
<body>
<div class="cursor-wrapper">
    <div
        data-w-id="e953495b-fba4-e9b4-5595-031daca30362"
        class="cursor"
    ></div>
    <div class="w-embed">
        <style>
            .cursor-wrapper {
                pointer-events: none;
            }
        </style>
    </div>
</div>
<div class="section">
    <div class="container">
        <div
            data-w-id="981f5bef-69bb-b918-eae4-98b3e2a9bfa4"
            data-animation="default"
            data-collapse="medium"
            data-duration="400"
            data-easing="ease"
            data-easing2="ease"
            role="banner"
            class="navbar w-nav"
        >
            <div
                data-w-id="981f5bef-69bb-b918-eae4-98b3e2a9bfa5"
                class="nav-bottom-line"
            ></div>
            <div
                data-w-id="981f5bef-69bb-b918-eae4-98b3e2a9bfa6"
                class="navbar-container"
            >
                <a
                    href="/"
                    aria-current="page"
                    class="nav-brand-link w-nav-brand w--current"
                ><div>Eduardo Sagastume, software developer</div></a
                >
                <nav role="navigation" class="nav-menu w-nav-menu">
                    <a href="#Me" class="nav-link w-nav-link">Me</a
                    ><a href="#Projects" class="nav-link w-nav-link">Projects</a
                    ><a href="#Contact" class="nav-link w-nav-link">Contact</a>
                </nav>
            </div>
            <div class="navigation-button w-nav-button">
                <div class="menu-button-icon">
                    <div
                        data-w-id="981f5bef-69bb-b918-eae4-98b3e2a9bfb3"
                        class="line-1"
                    ></div>
                    <div
                        data-w-id="981f5bef-69bb-b918-eae4-98b3e2a9bfb4"
                        class="line-1"
                    ></div>
                    <div
                        data-w-id="981f5bef-69bb-b918-eae4-98b3e2a9bfb5"
                        class="line-1"
                    ></div>
                </div>
            </div>
        </div>
        <div class="main-layout">
            <div class="main-layout-left">
                <div
                    data-w-id="7d7bfd98-646f-fae2-1939-a39f0f6adbd5"
                    class="main-profile-wrapper"
                >
{{--                    <img--}}
{{--                        src="./img/telefonica.jpg"--}}
{{--                        loading="lazy"--}}

{{--                        alt=""--}}
{{--                        sizes="(max-width: 479px) 92vw, (max-width: 991px) 64vw, 23vw"--}}
{{--                        class="main-profile-image"--}}
{{--                    />--}}
                </div>
                <div class="main-title-wrapper">
                    <h1
                        data-w-id="e69d2a1b-a2ce-e640-5628-3f8f25a5bb05"
                        class="main-title"
                    >
                        Eduardo<br />Sagastume
                    </h1>
                    <div
                        data-w-id="5561a182-4eea-a254-c015-ef7507f42fdd"
                        class="main-left-line"
                    ></div>
                    <div
                        data-w-id="d4fa3f69-e0e5-abb8-ade7-fc6c1e06926a"
                        class="main-bottom-line"
                    ></div>
                    <div
                        data-w-id="ec46cd45-781f-a9c3-84fb-8292b8a11988"
                        class="loading-screen-text"
                    >
                        Loading...
                    </div>
                </div>
            </div>
            <div class="spacer-between-main"></div>
            <div class="main-layout-right">
                <div class="intro-text-block">
                    <div
                        data-w-id="bc120317-8279-0334-c403-3d5329c04283"
                        class="text-size-medium"
                    >
                        Software Developer with a Strong Focus on Problem Solving and
                        Delivering Effective Digital Solutions
                    </div>
{{--                    {{var_dump($response)}}--}}
                </div>
                <div class="between-section-spacer"></div>
                <div class="welcome-message-wrapper">
                    <div class="text-size-large intro-text">Welcome to my site!</div>
                    <div class="spacer-huge"></div>
                    <div class="text-size-large intro-text">
                        Thanks for stopping by. Take your time exploring my work, and
                        I&#x27;m looking forward to connecting with you!
                    </div>
                </div>
                <div class="between-section-spacer first-spacer"></div>
                <div id="Me" class="service-info-wrapper">
                    <div class="h2-wrapper">
                        <h2 class="text-color-primary section-title">About Me</h2>
                        <div class="h2-left-line"></div>
                        <div class="h2-top-line"></div>
                    </div>
                    <div class="spacer-large"></div>
                    <div class="text-size-medium">
                        I&#x27;m a software developer with a deep commitment to creativity,
                        innovation, and collaboration. My main three values are the next
                        ones:
                    </div>
                    <div class="spacer-huge"></div>
                    <div class="w-layout-grid service-subset-grid">
                        <div
                            id="w-node-_5aaee28a-1f65-2276-f3a7-ad2921e790c6-0d6b3876"
                            class="service-divider-line"
                        ></div>
                        <div id="w-node-d9b203bb-6c09-78a4-8d6b-25661ebf569e-0d6b3876">
                            Innovation
                        </div>
                        <div
                            id="w-node-af5f5c82-b3d6-f1ae-d574-4d22e9bc5e90-0d6b3876"
                            class="service-divider-line"
                        ></div>
                        <div id="w-node-_7b70dc41-88a0-ad47-3916-46e7f5d7996a-0d6b3876">
                            Continuous learning
                        </div>
                        <div
                            id="w-node-_503be7f1-d0c2-3432-9e3a-aed820a5f830-0d6b3876"
                            class="service-divider-line"
                        ></div>
                        <div id="w-node-b7cdbad6-3657-dec1-79c0-b617c1134731-0d6b3876">
                            Empathy
                        </div>
                        <div
                            id="w-node-_87e65078-c73d-f71e-a573-4b4b9880f832-0d6b3876"
                            class="service-divider-line"
                        ></div>
                    </div>
                </div>
                <div class="between-section-spacer"></div>
                <div id="Projects" class="previous-work-wrapper">
                    <div class="h2-wrapper">
                        <h2 class="text-color-primary section-title">Projects</h2>
                        <div class="h2-left-line"></div>
                        <div class="h2-top-line"></div>
                    </div>
                    <div class="spacer-large"></div>
                    <div class="previous-work-collection w-dyn-list">
                        <div role="list" class="previous-work-list w-dyn-items">
                            @foreach($response as $repo)
                                <div role="listitem" class="previous-work-item w-dyn-item">
                                    <a
                                        data-w-id="8291639d-9429-5aef-17a3-af53c63716b1"
                                        href="{{$repo['repo_link']}}"
                                        class="previous-work-content w-inline-block"
                                    ><div
                                            id="w-node-_62725ae3-3893-a199-4799-45fcf3a3c4ca-0d6b3876"
                                            class="previous-work-item-left"
                                        >
                                            <img
                                                alt=""
                                                loading="lazy"
                                                data-w-id="9fa48747-e31e-bf61-fcc8-47199e09c241"
                                                src="{{$repo['icon']}}"
                                                sizes="(max-width: 767px) 100vw, 164px"

                                                class="previous-work-image"
                                            />
                                            <div
                                                data-w-id="981759fc-1980-1abe-1238-21e6110ac0ad"
                                                class="project-image-spacer"
                                            ></div>
                                            <div class="project-details-wrapper">
                                                <div
                                                    id="w-node-c9b41fb6-f276-0003-5852-ba672217e797-0d6b3876"
                                                    class="text-size-medium text-weight-medium work-title"
                                                >
                                                    {{$repo['name']}}
                                                </div>
                                                <div class="spacer-small"></div>
                                                <div
                                                    data-w-id="9e8cc5f1-8c00-b1d2-7c31-6bb5b5eb4d30"
                                                    class="text-dark-grey project-summary"
                                                >
                                                    {{$repo['description']}}
                                                </div>
                                            </div>
                                        </div>
                                        <img
                                            src="{{ asset('arrow.svg')}}"
                                            loading="lazy"
                                            id="w-node-_274ee41e-0896-1e4c-d80d-f9d557dd826d-0d6b3876"
                                            alt=""
                                            class="previous-item-arrow"
                                        />





                                    </a>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="between-section-spacer"></div>
                <div id="Contact" class="bottom-contact-wrapper">
                    <div class="text-size-medium">
                        Ready to get started. I would love to hear from you and see how
                        we can work together.
                    </div>
                    <div class="spacer-huge"></div>
                    <div class="w-layout-grid contact-details-grid">
                        <a
                            id="w-node-d5940d1b-0e4c-1dba-d1f0-6c6f4c06b537-0d6b3876"
                            href="#"
                            class="contact-link-block w-inline-block"
                        ><div>Email</div>
                            <div class="contact-link-arrow w-embed">
                                <svg
                                    height="100%"
                                    viewBox="0 0 12 13"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M11.1582 0.693193L1.65619 1.20802C1.58349 1.21221 1.51525 1.24207 1.46355 1.29377L0.290329 2.467C0.192229 2.5651 0.273233 2.73625 0.413251 2.72779L9.22182 2.25132L1.46396 10.0092C1.40563 10.0675 1.40724 10.1646 1.46754 10.2249L2.28979 11.0471C2.35008 11.1074 2.44714 11.109 2.50547 11.0507L10.262 3.29416L9.78553 12.1027C9.77845 12.2441 9.94823 12.3237 10.0463 12.2256L11.2593 11.0127C11.2845 10.9875 11.3001 10.9527 11.3008 10.9163L11.8215 1.35647C11.8261 1.26932 11.8119 1.18157 11.7799 1.09915C11.7479 1.01672 11.6989 0.941531 11.636 0.878661C11.5731 0.815791 11.4979 0.766701 11.4155 0.734706C11.3331 0.702711 11.2453 0.688554 11.1582 0.693193Z"
                                        fill="currentColor"
                                    />
                                </svg></div></a
                        ><a
                            id="w-node-_941ee226-fd6d-e4db-16f3-c4120dc5552d-0d6b3876"
                            href="#"
                            class="contact-link-block w-inline-block"
                        ><div>Github</div>
                            <div class="contact-link-arrow w-embed">
                                <svg
                                    height="100%"
                                    viewBox="0 0 12 13"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M11.1582 0.693193L1.65619 1.20802C1.58349 1.21221 1.51525 1.24207 1.46355 1.29377L0.290329 2.467C0.192229 2.5651 0.273233 2.73625 0.413251 2.72779L9.22182 2.25132L1.46396 10.0092C1.40563 10.0675 1.40724 10.1646 1.46754 10.2249L2.28979 11.0471C2.35008 11.1074 2.44714 11.109 2.50547 11.0507L10.262 3.29416L9.78553 12.1027C9.77845 12.2441 9.94823 12.3237 10.0463 12.2256L11.2593 11.0127C11.2845 10.9875 11.3001 10.9527 11.3008 10.9163L11.8215 1.35647C11.8261 1.26932 11.8119 1.18157 11.7799 1.09915C11.7479 1.01672 11.6989 0.941531 11.636 0.878661C11.5731 0.815791 11.4979 0.766701 11.4155 0.734706C11.3331 0.702711 11.2453 0.688554 11.1582 0.693193Z"
                                        fill="currentColor"
                                    />
                                </svg></div></a
                        ><a
                            id="w-node-_96e68ad6-e8f9-cd19-8e24-224f9bb2b752-0d6b3876"
                            href="#"
                            class="contact-link-block w-inline-block"
                        ><div>LinkedIn</div>
                            <div class="contact-link-arrow w-embed">
                                <svg
                                    height="100%"
                                    viewBox="0 0 12 13"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M11.1582 0.693193L1.65619 1.20802C1.58349 1.21221 1.51525 1.24207 1.46355 1.29377L0.290329 2.467C0.192229 2.5651 0.273233 2.73625 0.413251 2.72779L9.22182 2.25132L1.46396 10.0092C1.40563 10.0675 1.40724 10.1646 1.46754 10.2249L2.28979 11.0471C2.35008 11.1074 2.44714 11.109 2.50547 11.0507L10.262 3.29416L9.78553 12.1027C9.77845 12.2441 9.94823 12.3237 10.0463 12.2256L11.2593 11.0127C11.2845 10.9875 11.3001 10.9527 11.3008 10.9163L11.8215 1.35647C11.8261 1.26932 11.8119 1.18157 11.7799 1.09915C11.7479 1.01672 11.6989 0.941531 11.636 0.878661C11.5731 0.815791 11.4979 0.766701 11.4155 0.734706C11.3331 0.702711 11.2453 0.688554 11.1582 0.693193Z"
                                        fill="currentColor"
                                    />
                                </svg></div
                            ></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script
    src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=65be9b92117a52590d6b37ef"
    type="text/javascript"
    crossorigin="anonymous"
></script>
<script defer src="{{ asset('idk.js')}}"></script>
<script>
    $("a").mouseenter(function () {
        $(".cursor").click();
    });
    $("a").mouseleave(function () {
        $(".cursor").click();
    });
</script>
</body>
</html>
