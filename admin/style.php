<?php
session_start();
?>
<link rel="icon" type="image/x-icon" href="../asset/image/logo.png">
<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet" />
<link rel="stylesheet" href="../asset/css/bootstrap.min.css">
<script src="https://kit.fontawesome.com/80f3d0eef8.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<style>
    body {
        background-color: #f4f2f5;
        font-family: 'Kanit', sans-serif;
    }

    .navbar_ {
        width: 85%;
        min-height: 6%;
        border: 1px lightgrey solid;
        position: fixed;
        top: 0;
        right: 0;
        z-index: 999;
        background-color: #ffffff;
    }

    .sidebar_ {
        width: 15%;
        min-height: 100vh;
        float: left;
        background-color: #212529;
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        z-index: 1;
        box-shadow: 10px 0 0 #337CCF;
        overflow-y: scroll;
        scrollbar-width: none;
        -ms-overflow-style: none;
    }

    .sidebar_::-webkit-scrollbar {
        width: 0;
        height: 0;
    }

    .menu_ {
        width: 100%;
        min-height: 6%;
        text-align: left;
        padding-top: 5%;
        padding-left: 8%;
        color: white;
    }

    .HomeButton_ {
        width: 100%;
        min-height: 6%;
        text-align: left;
        padding-top: 5%;
        margin-left: -5%;
        margin-bottom: 5%;
        color: white;
    }

    .login_status {
        min-width: 5%;
        min-height: 6%;
        text-align: center;
        padding-right: 10px;
        padding-top: 15px;
        float: right;
    }

    .login_status:hover {
        cursor: pointer;
    }

    .main-content {
        flex: 1;
        padding-left: 17%;
        padding-top: 4%;
    }

    .cover_ {
        width: 95%;
        min-height: 100px;
        background-color: #ffffff;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 50px;
    }

    ul li a {
        position: relative;
        display: inline-block;
        text-decoration: none;
        color: #dadada;
        width: 100%;
        margin-bottom: 5px;
        transition: background-color 0.3s, color 0.3s;
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
    }

    ul li a.active {
        background-color: #337CCF;
        text-decoration: none;
        color: white;
        font-weight: bold;
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
    }

    ul li a:hover {
        text-decoration: none;
        color: white;
        background-color: #373D44;
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        cursor: pointer;
    }

    a:hover {
        text-decoration: none;
    }

    .clear_ {
        clear: both;
    }

    .search_box {
        width: 100%;
        min-height: 50px;
        display: flex;
        align-items: center;
    }

    .search_box form {
        margin-right: 10px;
    }

    .search_box input[type="text"] {
        margin-right: 10px;
    }

    .dropdown-content {
        display: none;
        padding: 10 0 0 15px;
        pointer-events: auto;
    }

    .menu_:hover {
        background-color: #373D44;
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        cursor: pointer;
    }


    .dropdown:hover .dropdown-content {
        display: block;
        animation: slide-down 0.3s ease;
    }

    @keyframes slide-down {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .accordion {
        width: 140%;
    }

    .accordion .card {
        border: 1px solid #ccc;
        margin-bottom: 10px;
    }

    .accordion .card .card-header {
        background-color: #f9f9f9;
        padding: 10px;
        cursor: pointer;
    }

    .accordion .card .card-content {
        display: none;
        padding: 10px;
    }

    .modal-confirm {
        color: #636363;
        width: 400px;
    }

    .modal-confirm .modal-content {
        padding: 20px;
        border-radius: 5px;
        border: none;
        text-align: center;
        font-size: 14px;
    }

    .modal-confirm .modal-header {
        border-bottom: none;
        position: relative;
    }

    .modal-confirm h4 {
        text-align: center;
        font-size: 26px;
        margin: 30px 0 -10px;
    }

    .modal-confirm .close {
        position: absolute;
        top: -5px;
        right: -2px;
    }

    .modal-confirm .modal-body {
        color: black;
        font-size:16px;
    }

    .modal-confirm .modal-footer {
        border: none;
        text-align: center;
        border-radius: 5px;
        font-size: 13px;
        padding: 10px 15px 25px;
    }

    .modal-confirm .icon-box {
        width: 80px;
        height: 80px;
        margin: 0 auto;
        border-radius: 50%;
        z-index: 9;
        text-align: center;
        border: 3px solid #f15e5e;
    }

    .modal-confirm .icon-box i {
        color: #f15e5e;
        font-size: 46px;
        display: inline-block;
        margin-top: 13px;
    }

    .trigger-btn {
        display: inline-block;
        margin: 100px auto;
    }
</style>
<script src="../asset/css/bootstrap.bundle.min.js"></script>