<style>

/* Font
=============================== */
@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,600);

/*=================================================================*/
/* Main */
/*=================================================================*/


/* Default
=============================== */
.wrapper {
	margin:0 auto;
	outline:none;
	padding:40px 15px;
	-webkit-box-sizing:content-box;
	-moz-box-sizing:content-box;
	box-sizing:content-box;
}
.wrapper-400 {
    position: fixed;
    max-width: 400px;
    top: 0px;
    /* right: 0px; */
    background-color: #5a5252e6;
    margin-top: 8%;
}

.wrapper-640 { max-width:640px; }

.j-forms {
	background-color:#f9fafd;
	-webkit-border-radius:3px;
	-moz-border-radius:3px;
	-o-border-radius:3px;
	border-radius:3px;
	-webkit-box-shadow:0 3px 5px rgba(0,0,0,.6);
	-moz-box-shadow:0 3px 5px rgba(0,0,0,.6);
	-o-box-shadow:0 3px 5px rgba(0,0,0,.6);
	box-shadow:0 3px 5px rgba(0,0,0,.6);
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	box-sizing:border-box;
	color:rgba(0,0,0,.54);
	font:16px 'Open Sans',Helvetica,Arial,sans-serif;
	line-height:1;
	position:relative;
}
.j-forms .input { position:relative; }

.j-forms .unit { position:relative; margin-bottom:25px; }

.j-forms .link {
	border-bottom:1px solid #90caf9;
	color:#1e88e5;
	font-size:14px;
	line-height:inherit;
	text-decoration:none;
}
.j-forms .link:hover { border-bottom:none; }

.j-forms .inline-group { display:inline-block; }

/* Reset for -webkit / -moz browser
=============================== */
.j-forms input[type="search"]::-webkit-search-decoration,
.j-forms input[type="search"]::-webkit-search-cancel-button,
.j-forms input[type="search"]::-webkit-search-results-button,
.j-forms input[type="search"]::-webkit-search-results-decoration { display:none; }

.j-forms select,
.j-forms input[type="button"],
.j-forms input[type="submit"],
.j-forms input[type="search"] {
	-webkit-tap-highlight-color:transparent;
	-webkit-tap-highlight-color:rgba(0,0,0,0);
	-webkit-appearance:none;
	-moz-appearance:none;
	appearance:none;
	-webkit-border-radius:0px;
	border-radius:0px;
}

/* Header
=============================== */
.j-forms .header {
	background-color:#3f51b5;
	border-top:1px solid #7986cb;
	-webkit-border-radius:3px 3px 0 0;
	-moz-border-radius:3px 3px 0 0;
	-o-border-radius:3px 3px 0 0;
	border-radius:3px 3px 0 0;
	-webkit-box-shadow:0 6px 3px -3px rgba(63,81,181,.5);
	-moz-box-shadow:0 6px 3px -3px rgba(63,81,181,.5);
	-o-box-shadow:0 6px 3px -3px rgba(63,81,181,.5);
	box-shadow:0 6px 3px -3px rgba(63,81,181,.5);
	display:block;
	position:relative;
}
.j-forms .header > i {
	color:#fff;
	font-size:31px;
	float:left;
	padding:31px 15px 0 25px;
}
.j-forms .header p {
	color:#fff;
	margin:0;
	padding:30px 25px;
	font-size:30px;
	text-transform:uppercase;
}

/* Content
=============================== */
.j-forms .content { padding:25px 25px 0; }

.j-forms .content:after {
	clear:both;
	content:".";
	display:block;
	height:0;
	visibility:hidden;
}

/* Footer
=============================== */
.j-forms .footer {
	background-color:#e8eaf6;
	border-top:1px solid #303f9f;
	-webkit-border-radius:0 0 3px 3px;
	-moz-border-radius:0 0 3px 3px;
	-o-border-radius:0 0 3px 3px;
	border-radius:0 0 3px 3px;
	display:block;
	padding:10px 25px;
}
.j-forms .footer:after {
	clear:both;
	content:".";
	display:block;
	height:0;
	visibility:hidden;
}

/* Dividers
=============================== */
.j-forms .divider,
.j-forms .divider-text { border-top:1px solid rgba(0,0,0,.12); height:0; }

.j-forms .divider-text { text-align:center; }

.j-forms .divider-text span {
	border:1px solid rgba(0,0,0,.12);
	-webkit-border-radius:3px;
	-moz-border-radius:3px;
	-o-border-radius:3px;
	border-radius:3px;
	background-color:#f9fafd;
	color:#3f51b5;
	font-size:16px;
	padding:2px 15px;
	position:relative;
	top:-9px;
	white-space:nowrap;
}

/* Gap-top / gap-bottom classes
=============================== */
.j-forms .gap-top-20 { margin-top:20px; } /* text-divider top gap after "content"/"j-row" classes */

.j-forms .gap-top-45 { margin-top:45px; } /* text-divider top gap after "unit" class */

.j-forms .gap-bottom-45 { margin-bottom:45px; } /* text-divider bottom gap */

.j-forms .gap-bottom-25 { margin-bottom:25px; } /* line-divider bottom gap */

/* Labels
=============================== */
.j-forms label {
	display:block;
	color:inherit;
	font-weight:normal;
	text-align:left;
	margin-bottom:0;
}
.j-forms .label { font-size:14px; margin-bottom:6px; line-height:14px; height:14px; }

.j-forms .label-center { height:48px; line-height:48px; text-align:center; margin-bottom:0; }

.j-forms .j-row > .label{ padding-left:10px; }

/* Radio and checkbox
=============================== */
.j-forms .radio,
.j-forms .checkbox,
.j-forms .radio-toggle,
.j-forms .checkbox-toggle {
	color:rgba(0,0,0,.87);
	cursor:pointer;
	font-size:15px;
	height:15px;
	margin-bottom:4px;
	position:relative;
	line-height:15px;
}
.j-forms .radio,
.j-forms .checkbox,
.j-forms .inline-group .radio,
.j-forms .inline-group .checkbox { padding:9px 0 8px 32px; }

.j-forms .radio-toggle,
.j-forms .checkbox-toggle,
.j-forms .inline-group .radio-toggle,
.j-forms .inline-group .checkbox-toggle { padding:9px 0 8px 58px; }

.j-forms .radio:last-child,
.j-forms .checkbox:last-child,
.j-forms .radio-toggle:last-child,
.j-forms .checkbox-toggle:last-child { margin-bottom:0; }

.j-forms .inline-group .radio,
.j-forms .inline-group .checkbox,
.j-forms .inline-group .radio-toggle,
.j-forms .inline-group .checkbox-toggle { display:inline-block; margin-right:25px; }

.j-forms .radio input,
.j-forms .checkbox input,
.j-forms .radio-toggle input,
.j-forms .checkbox-toggle input { position:absolute; left:-9999px; }

.j-forms .radio i,
.j-forms .checkbox i,
.j-forms .checkbox-toggle i,
.j-forms .radio-toggle i {
	background-color:#fff;
	border:2px solid rgba(0,0,0,.26);
	display:block;
	height:18px;
	left:0;
	outline:none;
	position:absolute;
	top:5px;
	-webkit-transition:border-color.2s;
	-moz-transition:border-color.2s;
	-ms-transition:border-color.2s;
	-o-transition:border-color.2s;
	transition:border-color.2s;
}
.j-forms .radio i,
.j-forms .checkbox i { width:18px; }

.j-forms .checkbox-toggle i,
.j-forms .radio-toggle i { width:44px; }

.j-forms .checkbox i,
.j-forms .checkbox-toggle i {
	-webkit-border-radius:3px;
	-moz-border-radius:3px;
	-o-border-radius:3px;
	border-radius:3px;
}
.j-forms .radio i,
.j-forms .radio i:after,
.j-forms .radio-toggle i:before {
	-webkit-border-radius:50%;
	-moz-border-radius:50%;
	-o-border-radius:50%;
	border-radius:50%;
}
.j-forms .radio-toggle i {
	-webkit-border-radius:13px;
	-moz-border-radius:13px;
	-o-border-radius:13px;
	border-radius:13px;
}
.j-forms .checkbox-toggle i:before {
	-webkit-border-radius:2px;
	-moz-border-radius:2px;
	-o-border-radius:2px;
	border-radius:2px;
}
.j-forms .radio i:after {
	background-color:rgba(48,63,159,.9);
	content:"";
	height:8px;
	top:5px;
	left:5px;
	opacity:0;
	position:absolute;
	width:8px;
}
.j-forms .checkbox i:after {
	border-width:0 0 3px 3px;
	border-bottom:solid rgb(48,63,159);
	border-left:solid rgb(48,63,159);
	content:"";
	height:5px;
	top:3px;
	-webkit-transform:rotate(-45deg);
	-moz-transform:rotate(-45deg);
	-ms-transform:rotate(-45deg);
	-o-transform:rotate(-45deg);
	transform:rotate(-45deg);
	left:3px;
	opacity:0;
	position:absolute;
	width:10px;
}
.j-forms .radio input:checked + i:after,
.j-forms .checkbox input:checked + i:after { opacity:1; }

.j-forms .checkbox-toggle i:before,
.j-forms .radio-toggle i:before {
	border:none;
	background-color:rgba(48,63,159,.9);
	content:"";
	display:block;
	height:14px;
	left:2px;
	position:absolute;
	top:2px;
	width:14px;
}
.j-forms .checkbox-toggle input:checked + i:before,
.j-forms .radio-toggle input:checked + i:before { left:28px; }

.j-forms .checkbox-toggle i:after,
.j-forms .radio-toggle i:after,
.j-forms .checkbox-toggle input:checked + i:after,
.j-forms .radio-toggle input:checked + i:after {
	font-size:10px;
	font-style:normal;
	font-weight:bold;
	line-height:10px;
	position:absolute;
	top:4px;
}
.j-forms .checkbox-toggle i:after,
.j-forms .radio-toggle i:after { content:"NO"; left:22px; }

.j-forms .checkbox-toggle input:checked + i:after,
.j-forms .radio-toggle input:checked + i:after { content:"YES"; left:6px; }

.j-forms .checkbox:hover i,
.j-forms .radio:hover i,
.j-forms .checkbox-toggle:hover i,
.j-forms .radio-toggle:hover i { border:2px solid rgba(48,63,159,.6); }

.j-forms .radio input:checked + i,
.j-forms .checkbox input:checked + i,
.j-forms .radio-toggle input:checked + i,
.j-forms .checkbox-toggle input:checked + i { border:2px solid rgba(48,63,159,.9); }

.j-forms .radio input:checked + i,
.j-forms .checkbox input:checked + i { color:rgba(48,63,159,.9); }

.j-forms .checkbox-toggle input:checked + i,
.j-forms .radio-toggle input:checked + i { background-color:#e8eaf6; }

/* Tooltip
=============================== */
.j-forms .tooltip,
.j-forms .tooltip-image {
	background-color:#1a237e;
	-webkit-border-radius:3px;
	-moz-border-radius:3px;
	-o-border-radius:3px;
	border-radius:3px;
	display:block;
	left:-9999px;
	opacity:0;
	position:absolute;
	z-index:20;
}
.j-forms .tooltip {
	color:#fff;
	font:600 13px 'Open Sans',Helvetica,Arial,sans-serif;
	line-height:20px;
	padding:5px 10px;
}
.j-forms .tooltip-image { padding:2px 2px 1px; }

.j-forms .input input:focus + .tooltip,
.j-forms .input textarea:focus + .tooltip,
.j-forms .select select:focus + .tooltip,
.j-forms .input input:focus + .tooltip-image,
.j-forms .input textarea:focus + .tooltip-image,
.j-forms .select select:focus + .tooltip-image { opacity:1; z-index:5; }

.j-forms .tooltip-left-top { bottom:100%; margin-bottom:8px; }

.j-forms .tooltip-left-top:before {
	border-color:#1a237e transparent;
	border-style:solid;
	border-width:8px 7px 0;
	bottom:-6px;
	content:"";
	left:16px;
	position:absolute;
}
.j-forms .input input:focus + .tooltip-left-top,
.j-forms .input textarea:focus + .tooltip-left-top,
.j-forms .select select:focus + .tooltip-left-top { left:0; right:auto; }

.j-forms .tooltip-right-top { bottom:100%; margin-bottom:8px; }

.j-forms .tooltip-right-top:before {
	border-color:#1a237e transparent;
	border-style:solid;
	border-width:8px 7px 0;
	bottom:-6px;
	content:"";
	position:absolute;
	right:16px;
}
.j-forms .input input:focus + .tooltip-right-top,
.j-forms .input textarea:focus + .tooltip-right-top,
.j-forms .select select:focus + .tooltip-right-top { left:auto; right:0; }

.j-forms .tooltip-left-bottom { margin-top:8px; top:100%; }

.j-forms .tooltip-left-bottom:before {
	border-color:#1a237e transparent;
	border-style:solid;
	border-width:0 7px 8px;
	top:-6px;
	content:"";
	left:16px;
	position:absolute;
}
.j-forms .input input:focus + .tooltip-left-bottom,
.j-forms .input textarea:focus + .tooltip-left-bottom,
.j-forms .select select:focus + .tooltip-left-bottom { left:0; right:auto; }

.j-forms .tooltip-right-bottom { margin-top:8px; top:100%; }

.j-forms .tooltip-right-bottom:before {
	border-color:#1a237e transparent;
	border-style:solid;
	border-width:0 7px 8px;
	top:-6px;
	content:"";
	right:16px;
	position:absolute;
}
.j-forms .input input:focus + .tooltip-right-bottom,
.j-forms .input textarea:focus + .tooltip-right-bottom,
.j-forms .select select:focus + .tooltip-right-bottom { left:auto; right:0; }

.j-forms .tooltip-right-side { margin-left:8px; top:8px; white-space:nowrap; }

.j-forms .tooltip-right-side:before {
	border-color:transparent #1a237e;
	border-style:solid;
	border-width:7px 8px 7px 0;
	content:"";
	left:-6px;
	position:absolute;
	top:8px;
}
.j-forms .input input:focus + .tooltip-right-side,
.j-forms .input textarea:focus + .tooltip-right-side,
.j-forms .select select:focus + .tooltip-right-side { left:100%; }

.j-forms .tooltip-left-side { margin-right:8px; top:8px; white-space:nowrap; }

.j-forms .tooltip-left-side:before {
	border-color:transparent #1a237e;
	border-style:solid;
	border-width:7px 0 7px 8px;
	content:"";
	right:-6px;
	position:absolute;
	top:8px;
}
.j-forms .input input:focus + .tooltip-left-side,
.j-forms .input textarea:focus + .tooltip-left-side,
.j-forms .select select:focus + .tooltip-left-side { left:auto; right:100%; }

/* Widget
=============================== */
.j-forms .widget { position: relative; }

.j-forms .widget .addon,
.j-forms .widget .addon-btn {
	background:#e0e0e0;
	border:none;
	color:rgba(0,0,0,.56);
	display:block;
	font:16px 'Open Sans',Helvetica,Arial,sans-serif;
	height:48px;
	line-height:48px;
	padding:0;
	position:absolute;
	outline:none;
	overflow:hidden;
	text-align:center;
	top:0;
	z-index:5;
}
.j-forms .widget .addon-btn,
.j-forms .widget .addon-btn i {
	cursor:pointer;
	-webkit-transition:all.2s;
	-moz-transition:all.2s;
	-ms-transition:all.2s;
	-o-transition:all.2s;
	transition:all.2s;
}
.j-forms .widget .addon-btn:hover,
.j-forms .widget .addon-btn:focus { background-color:#d6d6d6; color:rgba(0,0,0,.87); }

.j-forms .widget .addon-btn:hover i,
.j-forms .widget .addon-btn:focus i { color:rgba(0,0,0,.61); }

.j-forms .widget .adn-left { left:0; }

.j-forms .widget .adn-right { right:0; }

.j-forms .widget .addon i,
.j-forms .widget .addon-btn i { color:rgba(0,0,0,.34); font-size:17px; z-index:2; }

.j-forms .widget .adn-50 { width:50px; }

.j-forms .widget .adn-130 { width:130px; }

.j-forms .widget.right-50 .input { padding-right:50px; }

.j-forms .widget.left-50 .input { padding-left:50px; }

.j-forms .widget.right-130 .input { padding-right:130px; }

.j-forms .widget.left-130 .input { padding-left:130px; }

.j-forms .widget .adn-left,
.j-forms .widget.right-50 .input input,
.j-forms .widget.right-130 .input input {
	-webkit-border-radius:3px 0 0 3px;
	-moz-border-radius:3px 0 0 3px;
	-o-border-radius:3px 0 0 3px;
	border-radius:3px 0 0 3px;
}
.j-forms .widget .adn-right,
.j-forms .widget.left-50 .input input,
.j-forms .widget.left-130 .input input {
	-webkit-border-radius:0 3px 3px 0;
	-moz-border-radius:0 3px 3px 0;
	-o-border-radius:0 3px 3px 0;
	border-radius:0 3px 3px 0;
}
.j-forms .widget.left-50.right-50 .input input,
.j-forms .widget.left-50.right-130 .input input,
.j-forms .widget.left-130.right-50 .input input,
.j-forms .widget.left-130.right-130 .input input {
	-webkit-border-radius:0;
	-moz-border-radius:0;
	-o-border-radius:0;
	border-radius:0;
}

/* Inputs
=============================== */
.j-forms input[type="text"],
.j-forms input[type="password"],
.j-forms input[type="email"],
.j-forms input[type="search"],
.j-forms input[type="url"],
.j-forms textarea,
.j-forms select {
	background:#fff;
	border:2px solid rgba(0,0,0,.12);
	-webkit-border-radius:3px;
	-moz-border-radius:3px;
	-o-border-radius:3px;
	border-radius:3px;
	color:rgba(0,0,0,.87);
	display:block;
	font-family:inherit;
	font-size:16px;
	height:48px;
	padding:10px 15px;
	width:100%;
	outline:none;
	-webkit-appearance:none;
	-moz-appearance:none;
	appearance:none;
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	box-sizing:border-box;
	-webkit-transition:all.4s;
	-moz-transition:all.4s;
	-ms-transition:all.4s;
	-o-transition:all.4s;
	transition:all.4s;
}
.j-forms input[type="text"]:hover,
.j-forms input[type="password"]:hover,
.j-forms input[type="email"]:hover,
.j-forms input[type="search"]:hover,
.j-forms input[type="url"]:hover,
.j-forms textarea:hover,
.j-forms select:hover { border:2px solid rgba(48,63,159,.6); }

.j-forms input[type="text"]:focus,
.j-forms input[type="password"]:focus,
.j-forms input[type="email"]:focus,
.j-forms input[type="search"]:focus,
.j-forms input[type="url"]:focus,
.j-forms textarea:focus,
.j-forms select:focus { border:2px solid rgba(48,63,159,.9); }

.j-forms .input textarea {
	height:112px;
	overflow:auto;
	min-height:52px;
	resize:vertical;
}

.j-forms .input textarea:focus { height:128px; }

/* Placeholders
=============================== */
.j-forms input::-webkit-input-placeholder,
.j-forms textarea::-webkit-input-placeholder { color:rgba(0,0,0,.54); }

.j-forms input::-moz-placeholder,
.j-forms textarea::-moz-placeholder { color:rgba(0,0,0,.54); }

.j-forms input:-moz-placeholder,
.j-forms textarea:-moz-placeholder { color:rgba(0,0,0,.54); }

.j-forms input:-ms-input-placeholder,
.j-forms textarea:-ms-input-placeholder { color:rgba(0,0,0,.54); }

.j-forms input:focus::-webkit-input-placeholder,
.j-forms textarea:focus::-webkit-input-placeholder { color:rgba(0,0,0,.36); }

.j-forms input:focus::-moz-placeholder,
.j-forms textarea:focus::-moz-placeholder { color:rgba(0,0,0,.36); }

.j-forms input:focus:-moz-placeholder,
.j-forms textarea:focus:-moz-placeholder { color:rgba(0,0,0,.36); }

.j-forms input:focus:-ms-input-placeholder,
.j-forms textarea:focus:-ms-input-placeholder { color:rgba(0,0,0,.36); }

/* Select
=============================== */
.j-forms select { padding-left:13px; }

.j-forms .multiple-select select { height:auto; }

.j-forms .select i {
	background:#fff;
	-webkit-box-shadow:0 0 0 11px #fff;
	-moz-box-shadow:0 0 0 11px #fff;
	-o-box-shadow:0 0 0 11px #fff;
	box-shadow:0 0 0 11px #fff;
	height:20px;
	position:absolute;
	pointer-events:none;
	top:14px;
	right:14px;
	width:14px;
}
.j-forms .select i:after,
.j-forms .select i:before {
	border-right:4px solid transparent;
	border-left:4px solid transparent;
	content:'';
	position:absolute;
	right:3px;
}
.j-forms .select i:after { border-top:6px solid rgba(0,0,0,.4); bottom:1px; }

.j-forms .select i:before { border-bottom:6px solid rgba(0,0,0,.4); top:3px; }

.j-forms .select { position:relative; }

/* Icons
=============================== */
.j-forms .icon-left,
.j-forms .icon-right {
	color:rgba(0,0,0,.54);
	font-size:17px;
	height:38px;
	line-height:38px !important;
	opacity:.6;
	position:absolute;
	text-align:center;
	top:5px;
	width:42px;
	z-index:2;
}
.j-forms .icon-left { border-right:1px solid rgba(0,0,0,.54); left:3px; }

.j-forms .icon-right { border-left:1px solid rgba(0,0,0,.54); right:3px; }

.j-forms .icon-left ~ input,
.j-forms .icon-left ~ textarea { padding-left:58px; }

.j-forms .icon-right ~ input,
.j-forms .icon-right ~ textarea { padding-right:58px; }

/* File for upload
=============================== */
.j-forms .file-button input {
	bottom:-1px;
	font-size:34px;
	opacity:0;
	position:absolute;
	width:108px;
	z-index:0;
}
.j-forms .prepend-small-btn .file-button input,
.j-forms .prepend-big-btn .file-button input { left:0; }

.j-forms .append-small-btn .file-button input,
.j-forms .append-big-btn .file-button input { right:0; }

.j-forms .prepend-small-btn .file-button,
.j-forms .append-small-btn .file-button { width:64px; }

.j-forms .prepend-big-btn .file-button,
.j-forms .append-big-btn .file-button { width:106px; }

.j-forms .prepend-small-btn .file-button,
.j-forms .prepend-big-btn .file-button { left:4px; }

.j-forms .append-small-btn .file-button,
.j-forms .append-big-btn .file-button { right:4px; }

.j-forms .append-small-btn .file-button,
.j-forms .append-big-btn .file-button,
.j-forms .prepend-small-btn .file-button,
.j-forms .prepend-big-btn .file-button {
	-webkit-border-radius:2px;
	-moz-border-radius:2px;
	-o-border-radius:2px;
	border-radius:2px;
}
.j-forms .prepend-big-btn input[type="text"] { padding-left:123px; }

.j-forms .append-big-btn input[type="text"] { padding-right:123px; }

.j-forms .prepend-small-btn input[type="text"] { padding-left:81px; }

.j-forms .append-small-btn input[type="text"] { padding-right:81px; }

.j-forms .input input[type="file"] { cursor:pointer; }

/* Buttons
=============================== */
.j-forms .primary-btn,
.j-forms .secondary-btn {
	border:none;
	-webkit-border-radius:3px;
	-moz-border-radius:3px;
	-o-border-radius:3px;
	border-radius:3px;
	color:#fff;
	display:block;
	cursor:pointer;
	float:right;
	font:16px 'Open Sans',Helvetica,Arial,sans-serif;
	height:48px;
	margin:10px 0 10px 20px;
	outline:none;
	padding:0 25px;
	white-space:nowrap;
}
.j-forms .primary-btn { position:relative; }

.j-forms .content .primary-btn,
.j-forms .content .secondary-btn { margin:0 0 20px 20px; }

.j-forms .file-button {
	color:#fff;
	display:block;
	font-family:'Open Sans',Helvetica,Arial,sans-serif;
	font-size:14px;
	height:40px;
	line-height:40px;
	outline:none;
	overflow:hidden;
	position:absolute;
	text-align:center;
	top:4px;
	z-index:1;
}
.j-forms .primary-btn,
.j-forms .file-button,
.j-forms .secondary-btn {
	background:#303f9f;
	-webkit-transition:background.2s;
	-moz-transition:background.2s;
	-ms-transition:background.2s;
	-o-transition:background.2s;
	transition:background.2s;
}
.j-forms .primary-btn:hover,
.j-forms .file-button:hover,
.j-forms .secondary-btn:hover { background:#3f51b5; }

.j-forms .primary-btn:hover.processing { background:#303f9f; cursor:wait; }

.j-forms .file-button:hover + input { border:2px solid rgba(48,63,159,.6); }

.j-forms .secondary-btn,
.j-forms .secondary-btn:hover,
.j-forms .secondary-btn:active { opacity:.5; }

.j-forms .primary-btn.processing:before {
	background:rgba(255,255,255,.4);
	content:'';
	height:100%;
	position:absolute;
	top:0;
	left:0;
	width:100%;
	-webkit-animation:processing 3s ease-in-out infinite;
	-moz-animation:processing 3s ease-in-out infinite;;
	-ms-animation:processing 3s ease-in-out infinite;
	-o-animation:processing 3s ease-in-out infinite;
	animation:processing 3s ease-in-out infinite;
}
@-webkit-keyframes processing {
	0% { width:0; }
	100% { width:100%; }
}
@-moz-keyframes processing {
	0% { width:0; }
	100% { width:100%; }
}
@-ms-keyframes processing {
	0% { width:0; }
	100% { width:100%; }
}
@-o-keyframes processing {
	0% { width:0; }
	100% { width:100%; }
}
@keyframes processing {
	0% { width:0; }
	100% { width:100%; }
}

/* Status message
=============================== */
.j-forms .error-message,
.j-forms .success-message,
.j-forms .info-message,
.j-forms .warning-message {
	border:2px solid;
	-webkit-border-radius:3px;
	-moz-border-radius:3px;
	-o-border-radius:3px;
	border-radius:3px;
	display:block;
	font:16px/24px 'Open Sans',Helvetica,Arial,sans-serif;
	padding:15px;
}
.j-forms .error-message i,
.j-forms .success-message i,
.j-forms .info-message i,
.j-forms .warning-message i {
	font-size:18px;
	float:left;
	height:24px;
	line-height:24px;
	padding-right:10px;
}
.j-forms .error-message ul,
.j-forms .success-message ul,
.j-forms .info-message ul,
.j-forms .warning-message ul { margin:0; }

.j-forms span.error-view,
.j-forms span.success-view,
.j-forms span.warning-view,
.j-forms span.info-view {
	display:block;
	font-size:14px;
	height:14px;
	line-height:14px;
	margin-top:5px;
	padding:0 2px;
}
.j-forms span.hint {
	display:block;
	font-size:13px;
	color:inherit;
	height:13px;
	line-height:13px;
	margin-top:5px;
	padding:0 2px;
}

/* Disabled state
=============================== */
.j-forms .widget.disabled-view,
.j-forms .input.disabled-view,
.j-forms .select.disabled-view,
.j-forms .checkbox.disabled-view,
.j-forms .radio.disabled-view,
.j-forms .checkbox-toggle.disabled-view,
.j-forms .radio-toggle.disabled-view,
.j-forms .primary-btn.disabled-view,
.j-forms .secondary-btn.disabled-view,
.j-forms .file-button.disabled-view { cursor:default; opacity:.5; }

.j-forms .input.disabled-view input[type="file"] { cursor:default; }

.j-forms .widget.disabled-view input,
.j-forms .input.disabled-view input,
.j-forms .input.disabled-view textarea,
.j-forms .select.disabled-view select { border-color:rgba(0,0,0,.12) !important; }

.j-forms .checkbox.disabled-view i,
.j-forms .radio.disabled-view i,
.j-forms .checkbox-toggle.disabled-view i,
.j-forms .radio-toggle.disabled-view i { border-color:rgba(0,0,0,.26) !important; }

.j-forms .primary-btn.disabled-view,
.j-forms .secondary-btn.disabled-view,
.j-forms .disabled-view .file-button { background:#303f9f; }

.j-forms .widget.disabled-view .addon-btn:hover,
.j-forms .widget.disabled-view .addon-btn:focus { background:#e0e0e0; cursor:default; color:rgba(0,0,0,.56); }

.j-forms .widget.disabled-view .addon-btn i { color:rgba(0,0,0,.24) !important; }

/* Error state
=============================== */
.j-forms .error-view .checkbox i,
.j-forms .error-view .radio i,
.j-forms .error-view .checkbox-toggle i,
.j-forms .error-view .radio-toggle i,
.j-forms .error-view input,
.j-forms .error-view select,
.j-forms .error-view textarea { background:#ffebee !important; }

.j-forms .select.error-view i {
	background-color:#ffebee;
	-webkit-box-shadow:0 0 0 12px #ffebee;
	-moz-box-shadow:0 0 0 12px #ffebee;
	-o-box-shadow:0 0 0 12px #ffebee;
	box-shadow:0 0 0 12px #ffebee;
}
.j-forms .error-view .icon-left,
.j-forms .error-view .icon-right { border-color:#e57373; }

.j-forms .error-view .icon-left,
.j-forms .error-view .icon-right,
.j-forms span.error-view,
.j-forms .error-message i { color:#b71c1c; }

.j-forms .error-message { background:#ffebee; border-color:#b71c1c; color:#b71c1c; }

/* Success state
=============================== */
.j-forms .success-view .checkbox i,
.j-forms .success-view .radio i,
.j-forms .success-view .checkbox-toggle i,
.j-forms .success-view .radio-toggle i,
.j-forms .success-view input,
.j-forms .success-view select,
.j-forms .success-view textarea { background:#e8f5e9 !important; }

.j-forms .select.success-view i {
	background-color:#e8f5e9;
	-webkit-box-shadow:0 0 0 12px #e8f5e9;
	-moz-box-shadow:0 0 0 12px #e8f5e9;
	-o-box-shadow:0 0 0 12px #e8f5e9;
	box-shadow:0 0 0 12px #e8f5e9;
}
.j-forms .success-view .icon-left,
.j-forms .success-view .icon-right { border-color:#81c784; }

.j-forms .success-view .icon-left,
.j-forms .success-view .icon-right,
.j-forms span.success-view,
.j-forms .success-message i { color:#1b5e20; }

.j-forms .success-message { background:#e8f5e9; border-color:#1b5e20; color:#1b5e20; }

/* Warning state
=============================== */
.j-forms .warning-view .checkbox i,
.j-forms .warning-view .radio i,
.j-forms .warning-view .checkbox-toggle i,
.j-forms .warning-view .radio-toggle i,
.j-forms .warning-view input,
.j-forms .warning-view select,
.j-forms .warning-view textarea { background:#fff8e1 !important; }

.j-forms .select.warning-view i {
	background-color:#fff8e1;
	-webkit-box-shadow:0 0 0 12px #fff8e1;
	-moz-box-shadow:0 0 0 12px #fff8e1;
	-o-box-shadow:0 0 0 12px #fff8e1;
	box-shadow:0 0 0 12px #fff8e1;
}
.j-forms .warning-view .icon-left,
.j-forms .warning-view .icon-right { border-color:#f9a825; }

.j-forms .warning-view .icon-left,
.j-forms .warning-view .icon-right,
.j-forms span.warning-view,
.j-forms .warning-message i { color:#f57f17; }

.j-forms .warning-message { background:#fff8e1; border-color:#f57f17; color:#f57f17; }

/* Info state
=============================== */
.j-forms .info-view .checkbox i,
.j-forms .info-view .radio i,
.j-forms .info-view .checkbox-toggle i,
.j-forms .info-view .radio-toggle i,
.j-forms .info-view input,
.j-forms .info-view select,
.j-forms .info-view textarea { background:#e1f5fe !important; }

.j-forms .select.info-view i {
	background-color:#e1f5fe;
	-webkit-box-shadow:0 0 0 12px #e1f5fe;
	-moz-box-shadow:0 0 0 12px #e1f5fe;
	-o-box-shadow:0 0 0 12px #e1f5fe;
	box-shadow:0 0 0 12px #e1f5fe;
}
.j-forms .info-view .icon-left,
.j-forms .info-view .icon-right { border-color:#0288d1; }

.j-forms .info-view .icon-left,
.j-forms .info-view .icon-right,
.j-forms span.info-view,
.j-forms .info-message i { color:#01579b; }

.j-forms .info-message { background:#e1f5fe; border-color:#01579b; color:#01579b; }

/* Ratings
==================================== */
.j-forms .rating-group { color:rgba(0,0,0,.87); height:30px; line-height:30px; margin-bottom:4px; }

.j-forms .rating-group:last-child { margin-bottom:0; }

.j-forms .rating-group .label { float:left; font-size:16px; height:30px; line-height:30px; margin-bottom:0; }

.j-forms .rating-group .ratings { float:right; height:30px; line-height:30px; }

.j-forms .ratings input { left:-9999px; position:absolute; }

.j-forms .ratings input + label {
	color:rgba(0,0,0,.26);
	cursor:pointer;
	font-size:20px;
	float:right;
	padding:0 2px;
	-webkit-transition:color.2s;
	-moz-transition:color.2s;
	-ms-transition:color.2s;
	-o-transition:color.2s;
	transition:color.2s;
}
.j-forms .ratings input + label:hover,
.j-forms .ratings input + label:hover ~ label,
.j-forms .ratings input:checked + label,
.j-forms .ratings input:checked + label ~ label { color:#303f9f; }

/* Social links
==================================== */
.j-forms .social-btn,
.j-forms .social-icon { margin-bottom:6px; position:relative; }

.j-forms .social-icon { display:inline-block; margin-left:2px; margin-right:2px; }

.j-forms .social-center { text-align:center; }

.j-forms .social-btn i,
.j-forms .social-icon i {
	background-color:rgba(0,0,0,.15);
	color:#fff;
	cursor:pointer;
	font-size:22px;
	left:0;
	line-height:48px;
	position:absolute;
	text-align:center;
	width:48px;
	z-index:2;
}
.j-forms .social-btn i {
	-webkit-border-radius:3px 0 0 3px;
	-moz-border-radius:3px 0 0 3px;
	-o-border-radius:3px 0 0 3px;
	border-radius:3px 0 0 3px;
}
.j-forms .social-icon i {
	-webkit-border-radius:3px;
	-moz-border-radius:3px;
	-o-border-radius:3px;
	border-radius:3px;
}
.j-forms .social-btn button,
.j-forms .social-icon button {
	-webkit-border-radius:3px;
	-moz-border-radius:3px;
	-o-border-radius:3px;
	border-radius:3px;
	border:none;
	color:#fff;
	cursor:pointer;
	font:16px 'Open Sans',Helvetica,Arial,sans-serif;
	padding:0 0 0 48px;
	outline:none;
	overflow:hidden;
	height:48px;
	white-space:nowrap;
	-webkit-transition:background.2s;
	-moz-transition:background.2s;
	-ms-transition:background.2s;
	-o-transition:background.2s;
	transition:background.2s;
}
.j-forms .social-btn button { width:100%; }

.j-forms .social-icon button { width:48px; }

.j-forms .social-btn.vk button,
.j-forms .social-icon.vk button { background:rgb(47,80,112); }
.j-forms .social-btn.vk:hover button,
.j-forms .social.vk:hover button { background:rgba(47,80,112,.85); }

.j-forms .social-btn.skype button,
.j-forms .social-icon.skype button { background:rgb(19,176,237); }
.j-forms .social-btn.skype:hover button,
.j-forms .social-icon.skype:hover button { background:rgba(19,176,237,.85); }

.j-forms .social-btn.yahoo button,
.j-forms .social-icon.yahoo button { background:rgb(112,14,156); }
.j-forms .social-btn.yahoo:hover button,
.j-forms .social-icon.yahoo:hover button { background:rgba(112,14,156,.85); }

.j-forms .social-btn.flickr button,
.j-forms .social-icon.flickr button { background:rgb(254,59,147); }
.j-forms .social-btn.flickr:hover button,
.j-forms .social-icon.flickr:hover button { background:rgba(254,59,147,.85); }

.j-forms .social-btn.tumblr button,
.j-forms .social-icon.tumblr button { background:rgb(56,72,83); }
.j-forms .social-btn.tumblr:hover button,
.j-forms .social-icon.tumblr:hover button { background:rgba(56,72,83,.85); }

.j-forms .social-btn.google button,
.j-forms .social-icon.google button { background:rgb(8,104,185); }
.j-forms .social-btn.google:hover button,
.j-forms .social-icon.google:hover button { background:rgba(8,104,185,.85); }

.j-forms .social-btn.twitter button,
.j-forms .social-icon.twitter button { background:rgb(44,168,210); }
.j-forms .social-btn.twitter:hover button,
.j-forms .social-icon.twitter:hover button { background:rgba(44,168,210,.85); }

.j-forms .social-btn.youtube button,
.j-forms .social-icon.youtube button { background:rgb(206,51,44); }
.j-forms .social-btn.youtube:hover button,
.j-forms .social-icon.youtube:hover button { background:rgba(206,51,44,.85); }

.j-forms .social-btn.facebook button,
.j-forms .social-icon.facebook button { background:rgb(48,88,145); }
.j-forms .social-btn.facebook:hover button,
.j-forms .social-icon.facebook:hover button { background:rgba(48,88,145,.85); }

.j-forms .social-btn.linkedin button,
.j-forms .social-icon.linkedin button { background:rgb(68,152,200); }
.j-forms .social-btn.linkedin:hover button,
.j-forms .social-icon.linkedin:hover button { background:rgba(68,152,200,.85); }

.j-forms .social-btn.pinterest button,
.j-forms .social-icon.pinterest button { background:rgb(200,40,40); }
.j-forms .social-btn.pinterest:hover button,
.j-forms .social-icon.pinterest:hover button { background:rgba(200,40,40,.85); }

.j-forms .social-btn.google-plus button,
.j-forms .social-icon.google-plus button { background:rgb(206,77,57); }
.j-forms .social-btn.google-plus:hover button,
.j-forms .social-icon.google-plus:hover button { background:rgba(206,77,57,.85); }

/* Captcha
=============================== */
.j-forms .captcha-group { position: relative; }

.j-forms .captcha-group .captcha {
	background-color:#e0e0e0;
	border:none;
	-webkit-border-radius:3px 0 0 3px;
	-moz-border-radius:3px 0 0 3px;
	-o-border-radius:3px 0 0 3px;
	border-radius:3px 0 0 3px;
	height:48px;
	line-height:48px;
	position:absolute;
	outline:none;
	text-align:center;
	top:0;
	width:90px;
}
.j-forms .captcha-group .input { padding-left:90px; }

.j-forms .captcha-group .input input {
	-webkit-border-radius:0 3px 3px 0;
	-moz-border-radius:0 3px 3px 0;
	-o-border-radius:0 3px 3px 0;
	border-radius:0 3px 3px 0;
}

/* Pop-up form
=============================== */
/* Popup menu forms */
.popup-menu { padding:0 15px; }

.popup-list {
	background-color:#f9fafd;
	-webkit-border-radius:3px;
	-moz-border-radius:3px;
	-o-border-radius:3px;
	border-radius:3px;
	-webkit-box-shadow:0 0 15px rgba(0,0,0,.4);
	-moz-box-shadow:0 0 15px rgba(0,0,0,.4);
	-o-box-shadow:0 0 15px rgba(0,0,0,.4);
	box-shadow:0 0 15px rgba(0,0,0,.4);
	max-width:100%;
	position:relative;
}
.popup-list:after {
	clear:both;
	content:".";
	display:block;
	height:0;
	visibility:hidden;
}

.popup-list > ul { font-size:0; float:right; outline:none; padding:5px; }

.popup-list > ul > li {
	border-left:1px solid rgba(0,0,0,.12);
	display:inline-block;
	font-family:'Open Sans',Helvetica,Arial,sans-serif;
	font-size:16px;
	line-height:45px;
	padding:0 20px;
	list-style-type:none;
}
.popup-list > ul > li:hover { background-color:#e8eaf6; }

.popup-list a { color:rgba(0,0,0,.87); text-decoration:none; }

.popup-list-open { position:relative; }

.popup-list-open .popup-list-wrapper { display:none; opacity:0; position:absolute; left:-9999px; width:400px; }

.popup-list-open .j-forms { margin:10px auto 0; z-index:999; }

.popup-list-open .j-forms .input textarea:focus { height:112px; }

.popup-list-open:hover .popup-list-wrapper {
	display:block;
	left:auto;
	right:0;
	opacity:1;
	-webkit-animation:popup-list-open.4s both;
	-moz-animation:popup-list-open.4s both;
	-ms-animation:popup-list-open.4s both;
	-o-animation:popup-list-open.4s both;
	animation:popup-list-open.4s both;
}
@-webkit-keyframes popup-list-open {
	from { -webkit-transform:translate(0,-10px); transform:translate(0,-10px); }
	to { -webkit-transform:translate(0,0); transform:translate(0,0); }
}
@-moz-keyframes popup-list-open {
	from { -moz-transform:translate(0,-10px); transform:translate(0,-10px); }
	to { -moz-transform:translate(0,0); transform:translate(0,0); }
}
@-ms-keyframes popup-list-open {
	from { -ms-transform:translate(0,-10px); transform:translate(0,-10px); }
	to { -ms-transform:translate(0,0); transform:translate(0,0); }
}
@-o-keyframes popup-list-open {
	from { -o-transform:translate(0,-10px); transform:translate(0,-10px); }
	to { -o-transform:translate(0,0); transform:translate(0,0); }
}
@-keyframes popup-list-open {
	from { transform:translate(0,-10px); }
	to { transform:translate(0,0); }
}

/* Popup bottom form */
.popup-btm-400,
.popup-btm-640 {
	bottom:0;
	position:fixed;
	-webkit-transition:width.3s;
	-moz-transition:width.3s;
	-ms-transition:width.3s;
	-o-transition:width.3s;
	transition:width.3s;
	right:1%;
	z-index:1000;
}
.popup-btm-400 { width:400px; }

.popup-btm-640 { width:640px; }

.popup-btm-400 #popup-input-open,
.popup-btm-400 #popup-input-close,
.popup-btm-640 #popup-input-open,
.popup-btm-640 #popup-input-close { display:none; }

.popup-btm-400 .popup-btm-wrapper,
.popup-btm-640 .popup-btm-wrapper {
	bottom:-500px;
	height:auto;
	position:absolute;
	right:0;
	-webkit-transition:all.4s ease-in-out;
	-moz-transition:all.4s ease-in-out;
	-ms-transition:all.4s ease-in-out;
	-o-transition:all.4s ease-in-out;
	transition:all.4s ease-in-out;
	width:100%;
	z-index:1000;
}
.popup-btm-400 input#popup-input-open:checked ~ .popup-btm-label,
.popup-btm-640 input#popup-input-open:checked ~ .popup-btm-label { opacity:0; cursor:default; }

.popup-btm-400 input#popup-input-close:checked ~ .popup-btm-wrapper,
.popup-btm-640 input#popup-input-close:checked ~ .popup-btm-wrapper,
.popup-btm-400 .popup-btm-wrapper,
.popup-btm-640 .popup-btm-wrapper {
	-webkit-transform:translateY(100%);
	-moz-transform:translateY(100%);
	-ms-transform:translateY(100%);
	-o-transform:translateY(100%);
	transform:translateY(100%);
}
.popup-btm-400 input#popup-input-open:checked ~ .popup-btm-wrapper,
.popup-btm-640 input#popup-input-open:checked ~ .popup-btm-wrapper {
	bottom:5px;
	-webkit-transform:translateY(0);
	-moz-transform:translateY(0);
	-ms-transform:translateY(0);
	-o-transform:translateY(0);
	transform:translateY(0);
}
.popup-btm-400 .j-forms .input textarea:focus,
.popup-btm-640 .j-forms .input textarea:focus { height:112px; }

.popup-btm-400 .popup-btm-label,
.popup-btm-640 .popup-btm-label {
	background-color:#f9fafd;
	-webkit-border-radius:3px;
	-moz-border-radius:3px;
	-o-border-radius:3px;
	border-radius:3px;
	-webkit-box-shadow:0 0 15px rgba(0,0,0,.4);
	-moz-box-shadow:0 0 15px rgba(0,0,0,.4);
	-o-box-shadow:0 0 15px rgba(0,0,0,.4);
	box-shadow:0 0 15px rgba(0,0,0,.4);
	bottom:0;
	cursor:pointer;
	color:rgba(0,0,0,.87);
	display:block;
	font:16px 'Open Sans',Helvetica,Arial,sans-serif;
	height:35px;
	text-align:center;
	opacity:1;
	line-height:35px;
	padding:0 30px;
	position:fixed;
	right:1%;
	-webkit-transition:opacity.4s ease-in-out.05s;
	-moz-transition:opacity.4s ease-in-out.05s;
	-ms-transition:opacity.4s ease-in-out.05s;
	-o-transition:opacity.4s ease-in-out.05s;
	transition:opacity.4s ease-in-out.05s;
	white-space:nowrap;
	z-index: 9999;
}
.popup-btm-400 .popup-btm-close,
.popup-btm-640 .popup-btm-close {
	background-color:rgba(0,0,0,.6);
	-webkit-border-radius:2px;
	-moz-border-radius:2px;
	-o-border-radius:2px;
	border-radius:2px;
	cursor:pointer;
	position:absolute;
	right:0;
	top:-25px;
	-webkit-transition:background-color.15s;
	-moz-transition:background-color.15s;
	-ms-transition:background-color.15s;
	-o-transition:background-color.15s;
	transition:background-color.15s;
}
.popup-btm-400 .popup-btm-close:hover,
.popup-btm-400 .popup-btm-close:focus,
.popup-btm-640 .popup-btm-close:hover,
.popup-btm-640 .popup-btm-close:focus { background-color:rgba(0,0,0,.8); }

.popup-btm-400 .popup-btm-close i,
.popup-btm-640 .popup-btm-close i { display:block; height:22px; width:23px; }

.popup-btm-400 .popup-btm-close i:before,
.popup-btm-400 .popup-btm-close i:after,
.popup-btm-640 .popup-btm-close i:before,
.popup-btm-640 .popup-btm-close i:after {
	background-color:#fff;
	content:'';
	height:3px;
	position:absolute;
	right:1px;
	top:10px;
	width:21px;
}
.popup-btm-400 .popup-btm-close i:before,
.popup-btm-640 .popup-btm-close i:before {
	-webkit-transform:rotate(45deg);
	-moz-transform:rotate(45deg);
	-ms-transform:rotate(45deg);
	-o-transform:rotate(45deg);
	transform:rotate(45deg);
}
.popup-btm-400 .popup-btm-close i:after,
.popup-btm-640 .popup-btm-close i:after {
	-webkit-transform:rotate(-45deg);
	-moz-transform:rotate(-45deg);
	-ms-transform:rotate(-45deg);
	-o-transform:rotate(-45deg);
	transform:rotate(-45deg);
}

/*=================================================================*/
/* Grid layout */
/*=================================================================*/
.j-forms [class*="span"] {
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	box-sizing:border-box;
	float:left;
	padding-left:10px;
	padding-right:10px;
	position:relative;
}
.j-forms .span1 { width:8.3333%; }
.j-forms .span2 { width:16.6666%; }
.j-forms .span3 { width:25%; }
.j-forms .span4 { width:33.3333%; }
.j-forms .span5 { width:41.6666%; }
.j-forms .span6 { width:50%; }
.j-forms .span7 { width:58.3333%; }
.j-forms .span8 { width:66.6666%; }
.j-forms .span9 { width:75%; }
.j-forms .span10 { width:83.3333%; }
.j-forms .span11 { width:91.6666%; }
.j-forms .span12 { width:100%; }

.j-forms .offset1 { margin-left:8.3333%; }
.j-forms .offset2 { margin-left:16.6666%; }
.j-forms .offset3 { margin-left:25%; }
.j-forms .offset4 { margin-left:33.3333%; }
.j-forms .offset5 { margin-left:41.6666%; }
.j-forms .offset6 { margin-left:50%; }
.j-forms .offset7 { margin-left:58.3333%; }
.j-forms .offset8 { margin-left:66.6666%; }
.j-forms .offset9 { margin-left:75%; }
.j-forms .offset10 { margin-left:83.3333%; }
.j-forms .offset11 { margin-left:91.6666%; }
.j-forms .offset12 { margin-left:100%; }

.j-forms .j-row{ margin:0 -10px; }

.j-forms .j-row:after {
	clear:both;
	content:".";
	display:block;
	height:0;
	visibility:hidden;
}

/* Responsiveness
==================================== */
/* Wrapper-640 */
@media all and (max-width:620px) {

	.wrapper-640 .j-forms [class*="span"] { margin-right:0; width:100%; }

	.wrapper-640 .j-forms [class*="offset"] { margin-left:0; }

	.wrapper-640 .j-forms .label-center { height:14px; line-height:14px; text-align:left; padding-bottom:3px; }

	.wrapper-640 .j-forms .radio:last-child,
	.wrapper-640 .j-forms .checkbox:last-child,
	.wrapper-640 .j-forms .radio-toggle:last-child,
	.wrapper-640 .j-forms .checkbox-toggle:last-child { margin-bottom:4px; }

	/* Popup menu forms*/
	.popup-list-open > .popup-list-wrapper { width:100%; }
	.popup-list-open { position:static; }
}

/* Wrapper-400 */
@media all and (max-width:380px) {

	.wrapper-400 .j-forms [class*="span"] { margin-right:0; width:100%; }

	.wrapper-400 [class*="offset"] { margin-left:0;	}

	.wrapper-400 .j-forms .label-center { height:14px; line-height:14px; text-align:left; padding-bottom:3px; }

	.wrapper-400 .j-forms .radio:last-child,
	.wrapper-400 .j-forms .checkbox:last-child,
	.wrapper-400 .j-forms .radio-toggle:last-child,
	.wrapper-400 .j-forms .checkbox-toggle:last-child { margin-bottom:4px; }

	/* Responsiveness inside popup menu forms */
	.popup-list-wrapper .j-forms [class*="span"] { margin-right:0; width:100%; }

	.popup-list-wrapper .j-forms [class*="offset"] { margin-left:0; }

	.popup-list-wrapper .j-forms .label-center { height:14px; line-height:14px; text-align:left; padding-bottom:3px; }
}

/* Popup bottom form 400 px*/
@media all and (max-width:410px) {

	.popup-btm-400 { width: 320px; }

	.popup-btm-400 .j-forms [class*="span"] { margin-right:0; width:100%; }

	.popup-btm-400 .j-forms [class*="offset"] { margin-left:0; }

	.popup-btm-400 .j-forms .label-center { height:14px; line-height:14px; text-align:left; padding-bottom:3px; }
}

/* Popup bottom form 640 px*/
@media all and (max-width:650px) {

	.popup-btm-640 { width: 320px; }

	.popup-btm-640 .j-forms [class*="span"] { margin-right:0; width:100%; }

	.popup-btm-640 .j-forms [class*="offset"] { margin-left:0; }

	.popup-btm-640 .j-forms .label-center { height:14px; line-height:14px; text-align:left; padding-bottom:3px; }
}

/* Bootstrap compatibility
=============================== */
.j-forms .radio,
.j-forms .checkbox,
.j-forms .radio-toggle,
.j-forms .checkbox-toggle { margin-top:0; }

.j-forms .label {
	padding:0;
	-webkit-border-radius:0;
	-moz-border-radius:0;
	-o-border-radius:0;
	border-radius:0;
}
.j-forms .radio,
.j-forms .checkbox,
.j-forms .radio-toggle,
.j-forms .checkbox-toggle,
.j-forms .radio *,
.j-forms .checkbox *,
.j-forms .radio-toggle *,
.j-forms .checkbox-toggle *,
.j-forms .radio i:after,
.j-forms .checkbox i:after,
.j-forms .radio-toggle i:after,
.j-forms .checkbox-toggle i:after,
.j-forms .radio i:before,
.j-forms .checkbox i:before,
.j-forms .radio-toggle i:before,
.j-forms .checkbox-toggle i:before {
	-webkit-box-sizing:content-box;
	-moz-box-sizing:content-box;
	box-sizing:content-box;
}
/* =============================== */
/* Just Forms */
/* version 1.0 */
/* end */
/* =============================== */

/* =============================== */
/* start */
/* Just Forms */
/* version 1.1*/
/* =============================== */
/* Tabs
=============================== */
.j-tabs-section,
.j-tabs-container input[type="radio"] { display:none; }

#tab1:checked ~ #tabs-section-1,
#tab2:checked ~ #tabs-section-2,
#tab3:checked ~ #tabs-section-3 { display:block; }

.j-tabs-container .j-tabs-label {
	background:#fff;
	border-top:2px solid rgba(0,0,0,.34);
	-webkit-border-radius:2px 2px 0 0;
	-moz-border-radius:2px 2px 0 0;
	-o-border-radius:2px 2px 0 0;
	border-radius:2px 2px 0 0;
	display:inline-block;
	margin:0 0 -3px;
	font:14px 'Open Sans',Helvetica,Arial,sans-serif;
	padding:11px 13px 13px;
	-webkit-box-shadow:0 2px 2px rgba(0,0,0,.6);
	-moz-box-shadow:0 2px 2px rgba(0,0,0,.6);
	-o-box-shadow:0 2px 2px rgba(0,0,0,.6);
	box-shadow:0 2px 2px rgba(0,0,0,.6);
	opacity:.95;
	-webkit-transition:border-top.2s;
	-moz-transition:border-top.2s;
	-ms-transition:border-top.2s;
	-o-transition:border-top.2s;
	transition:border-top.2s;
}
.j-tabs-container .j-tabs-label i,
.j-tabs-container .j-tabs-label span { padding:1px; }

.j-tabs-container .j-tabs-label i { font-size:16px; }

.j-tabs-container .j-tabs-label i,
.j-tabs-container .j-tabs-label span,
.j-tabs-container input[type="radio"]:checked + .j-tabs-label i { color:rgba(0,0,0,.54); }

.j-tabs-container .j-tabs-label:hover { cursor:pointer; }

.j-tabs-container input[type="radio"]:checked + .j-tabs-label { border-top:2px solid rgba(0,0,0,.87); opacity:1; }

.j-tabs-container input[type="radio"]:checked + .j-tabs-label span { color:rgba(0,0,0,.87); }

@media all and (max-width: 430px) {
	.j-tabs-container .j-tabs-label { font-size:0; }
	.j-tabs-container .j-tabs-label i { font-size:16px; height:18px; }
	.j-tabs-container input[type="radio"]:checked + .j-tabs-label i { color:rgba(0,0,0,.87); }
}

/* Image checkbox & Image radio
=============================== */
.j-forms .radio-block,
.j-forms .checkbox-block {
	color:rgba(0,0,0,.87);
	cursor:pointer;
	font-size:15px;
	margin-bottom:8px;
	position:relative;
}
.j-forms .radio-block:last-child,
.j-forms .checkbox-block:last-child { margin-bottom:0; }

.j-forms .radio-block input,
.j-forms .checkbox-block input { position:absolute; left:-9999px; }

.j-forms .radio-block i,
.j-forms .checkbox-block i {
	display:block;
	height:18px;
	outline:none;
	position:absolute;
	top:5px;
	left:5px;
	width:18px;
	z-index:10;
}
.j-forms .checkbox-block i {
	-webkit-border-radius:3px;
	-moz-border-radius:3px;
	-o-border-radius:3px;
	border-radius:3px;
}
.j-forms .checkbox-block i:after {
	border-width:0 0 3px 3px;
	border-bottom:solid rgb(48,63,159);
	border-left:solid rgb(48,63,159);
	content:"";
	height:5px;
	top:3px;
	-webkit-transform:rotate(-45deg);
	-moz-transform:rotate(-45deg);
	-ms-transform:rotate(-45deg);
	-o-transform:rotate(-45deg);
	transform:rotate(-45deg);
	left:3px;
	opacity:0;
	position:absolute;
	width:10px;
}
.j-forms .radio-block i,
.j-forms .radio-block i:after {
	-webkit-border-radius:50%;
	-moz-border-radius:50%;
	-o-border-radius:50%;
	border-radius:50%;
}
.j-forms .radio-block i:after {
	background-color:rgba(48,63,159,.9);
	content:"";
	height:8px;
	top:5px;
	left:5px;
	opacity:0;
	position:absolute;
	width:8px;
}
.j-forms .radio-block input:checked + i,
.j-forms .checkbox-block input:checked + i { color:rgba(48,63,159,.9); border:2px solid rgba(48,63,159,.9); }

.j-forms .radio-block input:checked + i:after,
.j-forms .checkbox-block input:checked + i:after { opacity:1; }

.j-forms .checkbox-block span,
.j-forms .radio-block span { display:block; }

.j-forms .checkbox-block .block-image,
.j-forms .radio-block .block-image { position:relative; border:0;}

.j-forms .checkbox-block .block-content img,
.j-forms .radio-block .block-content img { height:auto; display:block; width:100%; }

.j-forms .checkbox-block .block-content:hover,
.j-forms .radio-block .block-content:hover,
.j-forms .checkbox-block input:checked ~ .block-content,
.j-forms .radio-block input:checked ~ .block-content {
	-webkit-border-radius:2px;
	-moz-border-radius:2px;
	-o-border-radius:2px;
	border-radius:2px;
}
.j-forms .checkbox-block .block-content:hover,
.j-forms .radio-block .block-content:hover { background:rgba(232,234,246,.5); }

.j-forms .checkbox-block input:checked ~ .block-content,
.j-forms .radio-block input:checked ~ .block-content { background:#e8eaf6; }

.j-forms .checkbox-block .block-text-title,
.j-forms .radio-block .block-text-title { color:rgba(0,0,0,.87); font-size:17px; margin:5px 0; }

.j-forms .checkbox-block .block-text-desc,
.j-forms .radio-block .block-text-desc {
	color:rgba(0,0,0,.54);
	font-size:13px;
	padding-right:5px;
	line-height:1.2;
	margin:5px 0 10px;
	word-spacing:3px;
}
.j-forms .checkbox-block .block-image-title,
.j-forms .radio-block .block-image-title,
.j-forms .checkbox-block .block-content,
.j-forms .radio-block .block-content {
	-webkit-transition:background .2s;
	-moz-transition:background .2s;
	-ms-transition:background .2s;
	-o-transition:background .2s;
	transition:background .2s;
}
.j-forms .checkbox-block .block-image-title,
.j-forms .radio-block .block-image-title {
	background:rgba(0,0,0,.34);
	bottom:0;
	color:#fff;
	font-size:13px;
	padding:10px;
	position:absolute;
	left:0;
	width:100%;
	z-index:20;
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	box-sizing:border-box;
}
.j-forms .checkbox-block .block-content:hover .block-image-title,
.j-forms .radio-block .block-content:hover .block-image-title { background:rgba(0,0,0,.57); }

.j-forms .checkbox-block input:checked ~ .block-content .block-image-title,
.j-forms .radio-block input:checked ~ .block-content .block-image-title { background:rgba(0,0,0,.77); }</style>
