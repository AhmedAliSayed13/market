<!-- Mobile Specific Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Favicon-->
<link rel="shortcut icon" href="{{asset("")}}main/img/fav.png">
<!-- Author Meta -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="author" content="CodePixar">
<!-- Meta Description -->
<meta name="description" content="">
<!-- Meta Keyword -->
<meta name="keywords" content="">
<!-- meta character set -->
<meta charset="UTF-8">
<!-- main Title -->
<title>Market Shop</title>
<!--CSS============================================= -->
<link rel="stylesheet" href="{{asset("")}}main/css/linearicons.css">
<link rel="stylesheet" href="{{asset("")}}main/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset("")}}main/css/themify-icons.css">
<link rel="stylesheet" href="{{asset("")}}main/css/bootstrap.css">
<link rel="stylesheet" href="{{asset("")}}main/css/owl.carousel.css">
<link rel="stylesheet" href="{{asset("")}}main/css/nice-select.css">
<link rel="stylesheet" href="{{asset("")}}main/css/nouislider.min.css">
<link rel="stylesheet" href="{{asset("")}}main/css/ion.rangeSlider.css" />
<link rel="stylesheet" href="{{asset("")}}main/css/ion.rangeSlider.skinFlat.css" />
<link rel="stylesheet" href="{{asset("")}}main/css/magnific-popup.css">
<link rel="stylesheet" href="{{asset("")}}main/css/main.css">
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<style>
    .checked {
        color: orange;
    }
</style>
<style>
    .liked{
        background:-webkit-linear-gradient(90deg, #ffba00 0%, #ff6c00 100%)!important;
        background: linear-gradient(90deg, #ffba00 0%, #ff6c00 100%)!important;
    }
    .page-item.disabled .page-link,.page-item.active .page-link{
        height: 100%!important;
        padding:.5rem .75rem!important;
    }
    .pagination{
        border-left: none!important;
    }
    .pagination a{
        line-height: 19px!important;
    }
    .title{
        text-align: center;
        text-transform: capitalize;
        color: #ff6c00;
        margin: 10px 0;
        position: relative;
    }

    .title::after{
        content: "";
        position: absolute;
        width: 20%; height: 2px;
        background-image: linear-gradient(to left, transparent 5%, #ff6c00);
        bottom: -10px; left: 50%;
        transform: translate(-50%);
    }

    .team-row{
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        padding: 40px 0;
    }

    .member{
        flex: 1 1 250px;
        margin: 20px;
        text-align: center;
        padding: 20px 10px;
        cursor: pointer;
        max-width: 300px;
        transition: all 0.3s;
    }

    .member:hover{
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        transform: translateY(-20px);
    }

    .member img{
        display: block;
        width: 150px; height: 150px;
        object-fit: cover;
        border:4px solid #ff6c00;
        border-radius: 50%;
        margin: 0 auto;
    }

    .member h2{
        text-transform: uppercase;
        font-size: 24px;
        color: #ff6c00;
        margin: 15px 0;
    }

    .member p{
        font-size: 15px;
        color: #838383;
        line-height: 1.6;
    }

    .user-group {
        display: inline-block;
        width: 55%;
    }

    /* TODO - use inline-block and width 40% */
    .quick-access {
        display: inline-block;
        width: 40%;

        /* quick-access links align to the right */
        text-align: right;
    }

    /* user group links share the row among themselves */
    /* TODO - use inline-block */
    /* TODO - add left and right padding each 5px */
    /* TODO - add right border as seperation bar with color steelblue */
    .user-group > li {
        display: inline-block;
        padding: 0 5px 0 5px;
        border: 1px solid steelblue;
        border-width: 0 1px 0 0;
    }

    /* remove last bar */
    /* TODO - set border width 0 */
    .user-group > li:last-child {
        border-width: 0;
    }

    /* control the style of link texts */
    /* TODO - set text color steelblue and font-size 75% */
    .user-group > li > a {

        /* set font type */
        color: #ff6c00;
        font-size: 75%;
        font-family: Muli;
        /* remove underlie from links */
        text-decoration: none;
    }

    /* quick-access links share the row among themselves */
    /* TODO - use inline-block */
    /* TODO - add left and right padding each 5px */
    /* TODO - add right border as seperation bar with color grey */
    .quick-access > li {
        display:inline-block;
        padding: 0 5px 0 5px;
        border: 1px solid grey;
        border-width: 0 1px 0 0;
    }

    /* remove last bar */
    /* TODO - set border width 0 */
    .quick-access > li:last-child {
        border-width: 0;
    }

    /* control link style */
    /* TODO - set text color and font-size */
    .quick-access > li > * {
        color: #ff6c00;
        font-size: 68%;
        /* set font type */
        font-family: Muli;
        /* remove underlie from links */
        text-decoration: none;
    }

    /* banner is another row itself */
    /* TODO - set display block and margin 20px top/bottome and 10px left/right */
    .banner {
        display: inline-block;
        margin: 20px 10px 20px 10px;

    }

    /* two links/images inthe banner share the row */
    /* TODO - use inline block */
    .banner > a {
        display: inline-block

    }

    /* TODO - set first logo width 30% and 2nd 66% */
    .banner > a:nth-child(1)  {
        width: 30%;
    }
    .banner > a:nth-child(2)  {
        width: 66%;
    }

    /* TODO - set display block for image since it is the only child and does NOT share the row with anyone under its parent. */
    .banner > a > img {
        display: inline-block;
    }
    .banner>a2{
        padding: 200px;

    }
    .banner>a3{
        color:green;
        font-size: 30px;
        padding:800px;

    }
    .quick-access> sli {
        color: darkgreen;
        font-size: 25px;
    }
    h1{
        color:#ff6c00;
        font-size: 40px;
        text-align:center;
        line-height: 100px;
        font-family:Courgette;
    }
    .words{
        font-family:Muli;
    }
    .words>h2{
        color:#ff6c00;
        line-height:60px
    }
    .words>ul{
        color:grey;

    }
    .words>li{
        color:grey;
        line-height:30px;
    }


    .fotorama{
        display: block;
        width: 600px;
        margin: 0 auto;
    }
    .heading {
        margin-top: 0px;
        color:#ff6c00;
    }
    .separator {
        position: relative;
        display: inline-block;
        text-transform: capitalize;
        margin-bottom: 30px;
    }
    .separator:after,
    .separator:before {
        position: absolute;
        content: "";
        width: 50px;
        height: 2px;
        background: #ff6c00;
        top: 50%;
    }

    .separator i {
        color: #ff6c00;
    }

    .separator:after {
        right: 140%;
    }

    .separator:before {
        left: 140%;
    }

    .amazing_feature {
        padding-top:80px;
        padding-bottom:50px;
    }

    .single_feature{
        background: #fff none repeat scroll 0 0;
        box-shadow:0 2px 30px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
        padding: 40px 40px;
        display: inline-block;
        vertical-align: middle;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -moz-osx-font-smoothing: grayscale;
        position: relative;
        -webkit-transition-property: color;
        transition-property: color;
        -webkit-transition-duration: 0.3s;
        transition-duration: 0.3s;
    }
    .single_feature:before {
        content: "";
        position: absolute;
        z-index: -1;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: #ff6c00;
        -webkit-transform: scaleY(0);
        transform: scaleY(0);
        -webkit-transform-origin: 50% 0;
        transform-origin: 50% 0;
        -webkit-transition-property: transform;
        transition-property: transform;
        -webkit-transition-duration: 0.3s;
        transition-duration: 0.3s;
        -webkit-transition-timing-function: ease-out;
        transition-timing-function: ease-out;
    }
    .single_feature:hover, .single_feature:focus, .single_feature:active {
        color: white;
    }
    .single_feature:hover:before, .single_feature:focus:before, .single_feature:active:before {
        -webkit-transform: scaleY(1);
        transform: scaleY(1);
    }
    .feature_icon{}
    .single_feature i {
        border: 1px solid #e8e8e9;
        border-radius: 50%;
        color: #333;
        float: left;
        font-size: 20px;
        height: 60px;
        line-height: 60px;
        margin-right: 15px;
        position: relative;
        text-align: center;
        transition: all 0.3s ease 0s;
        width: 60px;
        z-index: 3;
        margin-top: 25px;
    }
    .single_feature:hover i{
        background: #fff;border: 1px solid #fff;color:#ff6c00;
    }
    .single_feature h3 {
        text-transform: capitalize;
        font-size: 20px;
        font-weight:400;
        margin-top:0px;
        overflow: hidden;
    }
    .single_feature:hover h3{color:#fff;}
    .single_feature span {
        border-bottom: 1px dashed #ccc;
        display: block;
        margin: 15px auto 10px;
        width: 80px;
    }
    .single_feature p { margin-bottom: 0 ;overflow: hidden;}
</style>
