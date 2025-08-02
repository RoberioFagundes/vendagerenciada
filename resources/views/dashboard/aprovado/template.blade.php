<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <script type="text/javascript" src="{{ asset('public/js/aprovado/aprovado.js') }}"></script>
  <meta name="generator" content="PhpSpreadsheet, https://github.com/PHPOffice/PhpSpreadsheet">
  <meta name="author" content="Windows 7" />
  <meta name="company" content="Microsoft Corporation" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style type="text/css">
    html {
      font-family: Calibri, Arial, Helvetica, sans-serif;
      font-size: 11pt;
      background-color: white
    }

    a.comment-indicator:hover+div.comment {
      background: #ffd;
      position: absolute;
      display: block;
      border: 1px solid black;
      padding: 0.5em
    }

    a.comment-indicator {
      background: red;
      display: inline-block;
      border: 1px solid black;
      width: 0.5em;
      height: 0.5em
    }

    div.comment {
      display: none
    }

    table {
      border-collapse: collapse;
      page-break-after: always
    }

    .gridlines td {
      border: 1px dotted black
    }

    .gridlines th {
      border: 1px dotted black
    }

    .b {
      text-align: center
    }

    .e {
      text-align: center
    }

    .f {
      text-align: right
    }

    .inlineStr {
      text-align: left
    }

    .n {
      text-align: right
    }

    .s {
      text-align: left
    }

    td.style0 {
      vertical-align: bottom;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style0 {
      vertical-align: bottom;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style1 {
      vertical-align: bottom;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style1 {
      vertical-align: bottom;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style2 {
      vertical-align: middle;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style2 {
      vertical-align: middle;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style3 {
      vertical-align: bottom;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style3 {
      vertical-align: bottom;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style4 {
      vertical-align: bottom;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style4 {
      vertical-align: bottom;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style5 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style5 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style6 {
      vertical-align: middle;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 10pt;
      background-color: #FFFF00
    }

    th.style6 {
      vertical-align: middle;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 10pt;
      background-color: #FFFF00
    }

    td.style7 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FBD4B4
    }

    th.style7 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FBD4B4
    }

    td.style8 {
      vertical-align: bottom;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style8 {
      vertical-align: bottom;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style9 {
      vertical-align: middle;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #E5DFEC
    }

    th.style9 {
      vertical-align: middle;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #E5DFEC
    }

    td.style10 {
      vertical-align: bottom;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #D6D4CA
    }

    th.style10 {
      vertical-align: bottom;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #D6D4CA
    }

    td.style11 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style11 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style12 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style12 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style13 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style13 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style14 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style14 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style15 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style15 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style16 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style16 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style17 {
      vertical-align: top;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style17 {
      vertical-align: top;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style18 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style18 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style19 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style19 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style20 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style20 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style21 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style21 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style22 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style22 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style23 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style23 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style24 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style24 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style25 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style25 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style26 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style26 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style27 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style27 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style28 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style28 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style29 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style29 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style30 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style30 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style31 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style31 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style32 {
      vertical-align: middle;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style32 {
      vertical-align: middle;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style33 {
      vertical-align: bottom;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style33 {
      vertical-align: bottom;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style34 {
      vertical-align: middle;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style34 {
      vertical-align: middle;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style35 {
      vertical-align: bottom;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style35 {
      vertical-align: bottom;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style36 {
      vertical-align: middle;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style36 {
      vertical-align: middle;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style37 {
      vertical-align: bottom;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style37 {
      vertical-align: bottom;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style38 {
      vertical-align: middle;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style38 {
      vertical-align: middle;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style39 {
      vertical-align: bottom;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style39 {
      vertical-align: bottom;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style40 {
      vertical-align: middle;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style40 {
      vertical-align: middle;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style41 {
      vertical-align: middle;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #EAF1DD
    }

    th.style41 {
      vertical-align: middle;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #EAF1DD
    }

    td.style42 {
      vertical-align: bottom;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #EAF1DD
    }

    th.style42 {
      vertical-align: bottom;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #EAF1DD
    }

    td.style43 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #B6DDE8
    }

    th.style43 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #B6DDE8
    }

    td.style44 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #DAEEF3
    }

    th.style44 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #DAEEF3
    }

    td.style45 {
      vertical-align: bottom;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style45 {
      vertical-align: bottom;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style46 {
      vertical-align: bottom;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style46 {
      vertical-align: bottom;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style47 {
      vertical-align: bottom;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style47 {
      vertical-align: bottom;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style48 {
      vertical-align: bottom;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style48 {
      vertical-align: bottom;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style49 {
      vertical-align: bottom;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style49 {
      vertical-align: bottom;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style50 {
      vertical-align: bottom;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style50 {
      vertical-align: bottom;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style51 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style51 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style52 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style52 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style53 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style53 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style54 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style54 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style55 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style55 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style56 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style56 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style57 {
      vertical-align: bottom;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style57 {
      vertical-align: bottom;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style58 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style58 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style59 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style59 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style60 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style60 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style61 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style61 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style62 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style62 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style63 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style63 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style64 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style64 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style65 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style65 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style66 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style66 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style67 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style67 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style68 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style68 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style69 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style69 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style70 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style70 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style71 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style71 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style72 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style72 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style73 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style73 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style74 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style74 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style75 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style75 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style76 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style76 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style77 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style77 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style78 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style78 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style79 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style79 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style80 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style80 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style81 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style81 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style82 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style82 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style83 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style83 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style84 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style84 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style85 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style85 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style86 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style86 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style87 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style87 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style88 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style88 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style89 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style89 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style90 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style90 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style91 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style91 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style92 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style92 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style93 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style93 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style94 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style94 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style95 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style95 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style96 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style96 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style97 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style97 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style98 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style98 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style99 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style99 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style100 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style100 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style101 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style101 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style102 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style102 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style103 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style103 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style104 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style104 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style105 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style105 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style106 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style106 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style107 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style107 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style108 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style108 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style109 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style109 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style110 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style110 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style111 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style111 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style112 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style112 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style113 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style113 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style114 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style114 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style115 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style115 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style116 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style116 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style117 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style117 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style118 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style118 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style119 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style119 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style120 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style120 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style121 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style121 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style122 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style122 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style123 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style123 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style124 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style124 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style125 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style125 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style126 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style126 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style127 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style127 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style128 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style128 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style129 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style129 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style130 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style130 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style131 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style131 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style132 {
      vertical-align: bottom;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style132 {
      vertical-align: bottom;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style133 {
      vertical-align: bottom;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style133 {
      vertical-align: bottom;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style134 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style134 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style135 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style135 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style136 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style136 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style137 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style137 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style138 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style138 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style139 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style139 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style140 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style140 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style141 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style141 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style142 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style142 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style143 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style143 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style144 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style144 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style145 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style145 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style146 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style146 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style147 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style147 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style148 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style148 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style149 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style149 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style150 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style150 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style151 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style151 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style152 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style152 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style153 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style153 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style154 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style154 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style155 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style155 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style156 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style156 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style157 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style157 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style158 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style158 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style159 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style159 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style160 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style160 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style161 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style161 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style162 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style162 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style163 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style163 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style164 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style164 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style165 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style165 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style166 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style166 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style167 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style167 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style168 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style168 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style169 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style169 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style170 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style170 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style171 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style171 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style172 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style172 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style173 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style173 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style174 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style174 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style175 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style175 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style176 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style176 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style177 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style177 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style178 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style178 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style179 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style179 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style180 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style180 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style181 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style181 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style182 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style182 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style183 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style183 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style184 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style184 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style185 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style185 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style186 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style186 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style187 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style187 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style188 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style188 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style189 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style189 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style190 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style190 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style191 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style191 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style192 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style192 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style193 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style193 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style194 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style194 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style195 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style195 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style196 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style196 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style197 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style197 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style198 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style198 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style199 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style199 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style200 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style200 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style201 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style201 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style202 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style202 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style203 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style203 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style204 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style204 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style205 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style205 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style206 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style206 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style207 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style207 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style208 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style208 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style209 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style209 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style210 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style210 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style211 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style211 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style212 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style212 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style213 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #92D050
    }

    th.style213 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #92D050
    }

    td.style214 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #F2DBDB
    }

    th.style214 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #F2DBDB
    }

    td.style215 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #D6D4CA
    }

    th.style215 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #D6D4CA
    }

    td.style216 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #B6DDE8
    }

    th.style216 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #B6DDE8
    }

    td.style217 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #B6DDE8
    }

    th.style217 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #B6DDE8
    }

    td.style218 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #B6DDE8
    }

    th.style218 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #B6DDE8
    }

    td.style219 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #B6DDE8
    }

    th.style219 {
      vertical-align: middle;
      text-align: center;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #B6DDE8
    }

    td.style220 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #B6DDE8
    }

    th.style220 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #B6DDE8
    }

    td.style221 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #B6DDE8
    }

    th.style221 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #B6DDE8
    }

    td.style222 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FBD4B4
    }

    th.style222 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FBD4B4
    }

    td.style223 {
      vertical-align: middle;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFF00
    }

    th.style223 {
      vertical-align: middle;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFF00
    }

    td.style224 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #D6D4CA
    }

    th.style224 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #D6D4CA
    }

    td.style225 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 10pt;
      background-color: #FFFF00
    }

    th.style225 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 10pt;
      background-color: #FFFF00
    }

    td.style226 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #D6E3BC
    }

    th.style226 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #D6E3BC
    }

    td.style227 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #F79646
    }

    th.style227 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #F79646
    }

    td.style228 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #F79646
    }

    th.style228 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #F79646
    }

    td.style229 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #F79646
    }

    th.style229 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #F79646
    }

    td.style230 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style230 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style231 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style231 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style232 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #D6E3BC
    }

    th.style232 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #D6E3BC
    }

    td.style233 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #D6E3BC
    }

    th.style233 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #D6E3BC
    }

    td.style234 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style234 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style235 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style235 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style236 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style236 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style237 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style237 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style238 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    th.style238 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: white
    }

    td.style239 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #92D050
    }

    th.style239 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #92D050
    }

    td.style240 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #92D050
    }

    th.style240 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #92D050
    }

    td.style241 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #EAF1DD
    }

    th.style241 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #EAF1DD
    }

    td.style242 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #EAF1DD
    }

    th.style242 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #EAF1DD
    }

    td.style243 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style243 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style244 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #D2DAE4
    }

    th.style244 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Calibri';
      font-size: 11pt;
      background-color: #D2DAE4
    }

    td.style245 {
      vertical-align: bottom;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style245 {
      vertical-align: bottom;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style246 {
      vertical-align: bottom;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style246 {
      vertical-align: bottom;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style247 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Calibri';
      font-size: 14pt;
      background-color: #E5DFEC
    }

    th.style247 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Calibri';
      font-size: 14pt;
      background-color: #E5DFEC
    }

    td.style248 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Calibri';
      font-size: 16pt;
      background-color: white
    }

    th.style248 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Calibri';
      font-size: 16pt;
      background-color: white
    }

    td.style249 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Calibri';
      font-size: 16pt;
      background-color: white
    }

    th.style249 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Calibri';
      font-size: 16pt;
      background-color: white
    }

    td.style250 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style250 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style251 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style251 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style252 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style252 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style253 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style253 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style254 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style254 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style255 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style255 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style256 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style256 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style257 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      text-decoration: underline;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style257 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      text-decoration: underline;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style258 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style258 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style259 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style259 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style260 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style260 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style261 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style261 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style262 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style262 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style263 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style263 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style264 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style264 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style265 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style265 {
      vertical-align: bottom;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style266 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style266 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style267 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    th.style267 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: white
    }

    td.style268 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #B6DDE8
    }

    th.style268 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #B6DDE8
    }

    td.style269 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #B6DDE8
    }

    th.style269 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #B6DDE8
    }

    td.style270 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #B6DDE8
    }

    th.style270 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #B6DDE8
    }

    td.style271 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #DAEEF3
    }

    th.style271 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #DAEEF3
    }

    td.style272 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #DAEEF3
    }

    th.style272 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #DAEEF3
    }

    td.style273 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #DAEEF3
    }

    th.style273 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #DAEEF3
    }

    td.style274 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style274 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: none #000000;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    td.style275 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    th.style275 {
      vertical-align: bottom;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: none #000000;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: 'Arial';
      font-size: 12pt;
      background-color: #FFFFFF
    }

    table.sheet0 col.col0 {
      width: 42pt
    }

    table.sheet0 col.col1 {
      width: 75.23333247pt
    }

    table.sheet0 col.col2 {
      width: 60.9999993pt
    }

    table.sheet0 col.col3 {
      width: 56.93333268pt
    }

    table.sheet0 col.col4 {
      width: 76.58888801pt
    }

    table.sheet0 col.col5 {
      width: 76.58888801pt
    }

    table.sheet0 col.col6 {
      width: 76.58888801pt
    }

    table.sheet0 col.col7 {
      width: 42pt
    }

    table.sheet0 col.col8 {
      width: 42pt
    }

    table.sheet0 col.col9 {
      width: 88.1111101pt
    }

    table.sheet0 col.col10 {
      width: 77.26666578pt
    }

    table.sheet0 col.col11 {
      width: 42pt
    }

    table.sheet0 col.col12 {
      width: 42pt
    }

    table.sheet0 col.col13 {
      width: 79.29999909pt
    }

    table.sheet0 col.col14 {
      width: 42pt
    }

    table.sheet0 col.col15 {
      width: 42pt
    }

    table.sheet0 col.col16 {
      width: 72.52222139pt
    }

    table.sheet0 col.col17 {
      width: 73.19999916pt
    }

    table.sheet0 col.col18 {
      width: 91.49999895pt
    }

    table.sheet0 col.col19 {
      width: 77.26666578pt
    }

    table.sheet0 col.col20 {
      width: 84.04444348pt
    }

    table.sheet0 col.col21 {
      width: 42pt
    }

    table.sheet0 col.col22 {
      width: 42pt
    }

    table.sheet0 col.col23 {
      width: 59.64444376pt
    }

    table.sheet0 col.col24 {
      width: 74.5555547pt
    }

    table.sheet0 col.col25 {
      width: 42pt
    }

    table.sheet0 col.col26 {
      width: 42pt
    }

    table.sheet0 col.col27 {
      width: 67.09999923pt
    }

    table.sheet0 col.col28 {
      width: 42pt
    }

    table.sheet0 col.col29 {
      width: 42pt
    }

    table.sheet0 col.col30 {
      width: 42pt
    }

    table.sheet0 col.col31 {
      width: 92.85555449pt
    }

    table.sheet0 col.col32 {
      width: 84.04444348pt
    }

    table.sheet0 col.col33 {
      width: 88.1111101pt
    }

    table.sheet0 col.col34 {
      width: 101.6666655pt
    }

    table.sheet0 col.col35 {
      width: 92.85555449pt
    }

    table.sheet0 col.col36 {
      width: 42pt
    }

    table.sheet0 col.col37 {
      width: 31.85555519pt
    }

    table.sheet0 col.col38 {
      width: 70.48888808pt
    }

    table.sheet0 col.col39 {
      width: 103.02222104pt
    }

    table.sheet0 col.col40 {
      width: 93.53333226pt
    }

    table.sheet0 col.col41 {
      width: 42pt
    }

    table.sheet0 col.col42 {
      width: 77.26666578pt
    }

    table.sheet0 tr {
      height: 15pt
    }

    table.sheet0 tr.row1 {
      height: 15.75pt
    }

    table.sheet0 tr.row2 {
      height: 15.75pt
    }

    table.sheet0 tr.row3 {
      height: 15.75pt
    }

    table.sheet0 tr.row4 {
      height: 15.75pt
    }

    table.sheet0 tr.row5 {
      height: 15.75pt
    }

    table.sheet0 tr.row6 {
      height: 15.75pt
    }

    table.sheet0 tr.row7 {
      height: 15.75pt
    }

    table.sheet0 tr.row8 {
      height: 15.75pt
    }

    table.sheet0 tr.row9 {
      height: 15.75pt
    }

    table.sheet0 tr.row10 {
      height: 15.75pt
    }

    table.sheet0 tr.row11 {
      height: 15.75pt
    }

    table.sheet0 tr.row12 {
      height: 15.75pt
    }

    table.sheet0 tr.row13 {
      height: 15.75pt
    }

    table.sheet0 tr.row14 {
      height: 15.75pt
    }

    table.sheet0 tr.row15 {
      height: 15.75pt
    }

    table.sheet0 tr.row16 {
      height: 15.75pt
    }

    table.sheet0 tr.row17 {
      height: 15.75pt
    }

    table.sheet0 tr.row18 {
      height: 18.75pt
    }

    table.sheet0 tr.row19 {
      height: 15.75pt
    }

    table.sheet0 tr.row20 {
      height: 15.75pt
    }

    table.sheet0 tr.row21 {
      height: 15.75pt
    }

    table.sheet0 tr.row22 {
      height: 15.75pt
    }

    table.sheet0 tr.row23 {
      height: 15.75pt
    }

    table.sheet0 tr.row24 {
      height: 15.75pt
    }

    table.sheet0 tr.row25 {
      height: 15.75pt
    }

    table.sheet0 tr.row26 {
      height: 15.75pt
    }

    table.sheet0 tr.row27 {
      height: 15.75pt
    }

    table.sheet0 tr.row28 {
      height: 15.75pt
    }

    table.sheet0 tr.row29 {
      height: 15.75pt
    }

    table.sheet0 tr.row30 {
      height: 15.75pt
    }

    table.sheet0 tr.row31 {
      height: 15.75pt
    }

    table.sheet0 tr.row32 {
      height: 15.75pt
    }

    table.sheet0 tr.row33 {
      height: 15.75pt
    }

    table.sheet0 tr.row34 {
      height: 15.75pt
    }

    table.sheet0 tr.row35 {
      height: 15.75pt
    }

    table.sheet0 tr.row36 {
      height: 15.75pt
    }

    table.sheet0 tr.row37 {
      height: 15.75pt
    }

    table.sheet0 tr.row38 {
      height: 15.75pt
    }

    table.sheet0 tr.row39 {
      height: 15.75pt
    }

    table.sheet0 tr.row40 {
      height: 15.75pt
    }

    table.sheet0 tr.row41 {
      height: 15.75pt
    }

    table.sheet0 tr.row42 {
      height: 15.75pt
    }

    table.sheet0 tr.row43 {
      height: 15.75pt
    }

    table.sheet0 tr.row44 {
      height: 15.75pt
    }

    table.sheet0 tr.row45 {
      height: 15.75pt
    }

    table.sheet0 tr.row46 {
      height: 15.75pt
    }

    table.sheet0 tr.row47 {
      height: 15.75pt
    }

    table.sheet0 tr.row48 {
      height: 15.75pt
    }

    table.sheet0 tr.row49 {
      height: 15.75pt
    }

    table.sheet0 tr.row50 {
      height: 15.75pt
    }

    table.sheet0 tr.row51 {
      height: 15.75pt
    }

    table.sheet0 tr.row52 {
      height: 15.75pt
    }

    table.sheet0 tr.row53 {
      height: 15.75pt
    }

    table.sheet0 tr.row54 {
      height: 15.75pt
    }

    table.sheet0 tr.row55 {
      height: 15.75pt
    }

    table.sheet0 tr.row56 {
      height: 15.75pt
    }

    table.sheet0 tr.row57 {
      height: 15.75pt
    }

    table.sheet0 tr.row58 {
      height: 15.75pt
    }

    table.sheet0 tr.row59 {
      height: 15.75pt
    }

    table.sheet0 tr.row60 {
      height: 15.75pt
    }

    table.sheet0 tr.row61 {
      height: 15.75pt
    }

    table.sheet0 tr.row62 {
      height: 15.75pt
    }

    table.sheet0 tr.row63 {
      height: 15.75pt
    }

    table.sheet0 tr.row64 {
      height: 15.75pt
    }

    table.sheet0 tr.row65 {
      height: 15.75pt
    }

    table.sheet0 tr.row66 {
      height: 15.75pt
    }

    table.sheet0 tr.row67 {
      height: 15.75pt
    }

    table.sheet0 tr.row68 {
      height: 15.75pt
    }

    table.sheet0 tr.row69 {
      height: 15.75pt
    }

    table.sheet0 tr.row70 {
      height: 15.75pt
    }

    table.sheet0 tr.row71 {
      height: 15.75pt
    }

    table.sheet0 tr.row72 {
      height: 15.75pt
    }

    table.sheet0 tr.row73 {
      height: 15.75pt
    }

    table.sheet0 tr.row74 {
      height: 15.75pt
    }

    table.sheet0 tr.row75 {
      height: 15.75pt
    }

    table.sheet0 tr.row76 {
      height: 15.75pt
    }

    table.sheet0 tr.row77 {
      height: 15.75pt
    }

    table.sheet0 tr.row78 {
      height: 15.75pt
    }

    table.sheet0 tr.row79 {
      height: 15.75pt
    }

    table.sheet0 tr.row80 {
      height: 15.75pt
    }

    table.sheet0 tr.row81 {
      height: 15.75pt
    }

    table.sheet0 tr.row82 {
      height: 15.75pt
    }

    table.sheet0 tr.row83 {
      height: 15.75pt
    }

    table.sheet0 tr.row84 {
      height: 15.75pt
    }

    table.sheet0 tr.row85 {
      height: 15.75pt
    }

    table.sheet0 tr.row86 {
      height: 15.75pt
    }

    table.sheet0 tr.row87 {
      height: 15.75pt
    }

    table.sheet0 tr.row88 {
      height: 15.75pt
    }

    table.sheet0 tr.row89 {
      height: 15.75pt
    }

    table.sheet0 tr.row90 {
      height: 15.75pt
    }

    table.sheet0 tr.row91 {
      height: 15.75pt
    }

    table.sheet0 tr.row92 {
      height: 15.75pt
    }

    table.sheet0 tr.row93 {
      height: 15.75pt
    }

    table.sheet0 tr.row94 {
      height: 15.75pt
    }

    table.sheet0 tr.row95 {
      height: 15.75pt
    }

    table.sheet0 tr.row96 {
      height: 15.75pt
    }

    table.sheet0 tr.row97 {
      height: 15.75pt
    }

    table.sheet0 tr.row98 {
      height: 15.75pt
    }

    table.sheet0 tr.row99 {
      height: 15.75pt
    }

    table.sheet0 tr.row100 {
      height: 15.75pt
    }

    table.sheet0 tr.row101 {
      height: 15.75pt
    }

    table.sheet0 tr.row102 {
      height: 15.75pt
    }

    table.sheet0 tr.row103 {
      height: 15.75pt
    }

    table.sheet0 tr.row104 {
      height: 15.75pt
    }

    table.sheet0 tr.row105 {
      height: 15.75pt
    }

    table.sheet0 tr.row106 {
      height: 15.75pt
    }

    table.sheet0 tr.row107 {
      height: 15.75pt
    }

    table.sheet0 tr.row108 {
      height: 15.75pt
    }

    table.sheet0 tr.row109 {
      height: 15.75pt
    }

    table.sheet0 tr.row110 {
      height: 15.75pt
    }

    table.sheet0 tr.row111 {
      height: 15.75pt
    }

    table.sheet0 tr.row112 {
      height: 15.75pt
    }

    table.sheet0 tr.row113 {
      height: 15.75pt
    }

    table.sheet0 tr.row114 {
      height: 15.75pt
    }

    table.sheet0 tr.row115 {
      height: 15.75pt
    }

    table.sheet0 tr.row116 {
      height: 15.75pt
    }

    table.sheet0 tr.row117 {
      height: 15.75pt
    }

    table.sheet0 tr.row118 {
      height: 15.75pt
    }

    table.sheet0 tr.row119 {
      height: 15.75pt
    }

    table.sheet0 tr.row120 {
      height: 15.75pt
    }

    table.sheet0 tr.row121 {
      height: 15.75pt
    }

    table.sheet0 tr.row122 {
      height: 15.75pt
    }

    table.sheet0 tr.row123 {
      height: 15.75pt
    }

    table.sheet0 tr.row124 {
      height: 15.75pt
    }

    table.sheet0 tr.row125 {
      height: 15.75pt
    }

    table.sheet0 tr.row126 {
      height: 15.75pt
    }

    table.sheet0 tr.row127 {
      height: 15.75pt
    }

    table.sheet0 tr.row128 {
      height: 15.75pt
    }

    table.sheet0 tr.row129 {
      height: 15.75pt
    }

    table.sheet0 tr.row130 {
      height: 15.75pt
    }

    table.sheet0 tr.row131 {
      height: 15.75pt
    }

    table.sheet0 tr.row132 {
      height: 15.75pt
    }

    table.sheet0 tr.row133 {
      height: 15.75pt
    }

    table.sheet0 tr.row134 {
      height: 15.75pt
    }

    table.sheet0 tr.row135 {
      height: 15.75pt
    }

    table.sheet0 tr.row136 {
      height: 15.75pt
    }

    table.sheet0 tr.row137 {
      height: 15.75pt
    }

    table.sheet0 tr.row138 {
      height: 15.75pt
    }

    table.sheet0 tr.row139 {
      height: 15.75pt
    }

    table.sheet0 tr.row140 {
      height: 15.75pt
    }

    table.sheet0 tr.row141 {
      height: 15.75pt
    }

    table.sheet0 tr.row142 {
      height: 15.75pt
    }

    table.sheet0 tr.row143 {
      height: 15.75pt
    }

    table.sheet0 tr.row144 {
      height: 15.75pt
    }

    table.sheet0 tr.row145 {
      height: 15.75pt
    }

    table.sheet0 tr.row146 {
      height: 15.75pt
    }

    table.sheet0 tr.row147 {
      height: 15.75pt
    }

    table.sheet0 tr.row148 {
      height: 15.75pt
    }

    table.sheet0 tr.row149 {
      height: 15.75pt
    }

    table.sheet0 tr.row150 {
      height: 15.75pt
    }

    table.sheet0 tr.row151 {
      height: 15.75pt
    }

    table.sheet0 tr.row152 {
      height: 15.75pt
    }

    table.sheet0 tr.row153 {
      height: 15.75pt
    }

    table.sheet0 tr.row154 {
      height: 15.75pt
    }

    table.sheet0 tr.row155 {
      height: 15.75pt
    }

    table.sheet0 tr.row156 {
      height: 15.75pt
    }

    table.sheet0 tr.row157 {
      height: 15.75pt
    }

    table.sheet0 tr.row158 {
      height: 15.75pt
    }

    table.sheet0 tr.row159 {
      height: 15.75pt
    }

    table.sheet0 tr.row160 {
      height: 15.75pt
    }

    table.sheet0 tr.row161 {
      height: 15.75pt
    }

    table.sheet0 tr.row162 {
      height: 15.75pt
    }

    table.sheet0 tr.row163 {
      height: 15.75pt
    }

    table.sheet0 tr.row164 {
      height: 15.75pt
    }

    table.sheet0 tr.row165 {
      height: 15.75pt
    }

    table.sheet0 tr.row166 {
      height: 15.75pt
    }

    table.sheet0 tr.row167 {
      height: 15.75pt
    }

    table.sheet0 tr.row168 {
      height: 15.75pt
    }

    table.sheet0 tr.row169 {
      height: 15.75pt
    }

    table.sheet0 tr.row170 {
      height: 15.75pt
    }

    table.sheet0 tr.row171 {
      height: 15.75pt
    }

    table.sheet0 tr.row172 {
      height: 15.75pt
    }

    table.sheet0 tr.row173 {
      height: 15.75pt
    }

    table.sheet0 tr.row174 {
      height: 15.75pt
    }

    table.sheet0 tr.row175 {
      height: 15.75pt
    }

    table.sheet0 tr.row176 {
      height: 15.75pt
    }

    table.sheet0 tr.row177 {
      height: 15.75pt
    }

    table.sheet0 tr.row178 {
      height: 15.75pt
    }

    table.sheet0 tr.row179 {
      height: 15.75pt
    }

    table.sheet0 tr.row180 {
      height: 15.75pt
    }

    table.sheet0 tr.row181 {
      height: 15.75pt
    }

    table.sheet0 tr.row182 {
      height: 15.75pt
    }

    table.sheet0 tr.row183 {
      height: 15.75pt
    }

    table.sheet0 tr.row184 {
      height: 15.75pt
    }

    table.sheet0 tr.row185 {
      height: 15.75pt
    }

    table.sheet0 tr.row186 {
      height: 15.75pt
    }

    table.sheet0 tr.row187 {
      height: 15.75pt
    }

    table.sheet0 tr.row188 {
      height: 15.75pt
    }

    table.sheet0 tr.row189 {
      height: 15.75pt
    }

    table.sheet0 tr.row190 {
      height: 15.75pt
    }

    table.sheet0 tr.row191 {
      height: 15.75pt
    }

    table.sheet0 tr.row192 {
      height: 15.75pt
    }

    table.sheet0 tr.row193 {
      height: 15.75pt
    }

    table.sheet0 tr.row194 {
      height: 15.75pt
    }

    table.sheet0 tr.row195 {
      height: 15.75pt
    }

    table.sheet0 tr.row196 {
      height: 15.75pt
    }

    table.sheet0 tr.row197 {
      height: 15.75pt
    }

    table.sheet0 tr.row198 {
      height: 15.75pt
    }

    table.sheet0 tr.row199 {
      height: 15.75pt
    }

    table.sheet0 tr.row200 {
      height: 15.75pt
    }

    table.sheet0 tr.row201 {
      height: 15.75pt
    }

    table.sheet0 tr.row202 {
      height: 15.75pt
    }

    table.sheet0 tr.row203 {
      height: 15.75pt
    }

    table.sheet0 tr.row204 {
      height: 15.75pt
    }

    table.sheet0 tr.row205 {
      height: 15.75pt
    }

    table.sheet0 tr.row206 {
      height: 15.75pt
    }

    table.sheet0 tr.row207 {
      height: 15.75pt
    }

    table.sheet0 tr.row208 {
      height: 15.75pt
    }

    table.sheet0 tr.row209 {
      height: 15.75pt
    }

    table.sheet0 tr.row210 {
      height: 15.75pt
    }

    table.sheet0 tr.row211 {
      height: 15.75pt
    }

    table.sheet0 tr.row212 {
      height: 15.75pt
    }

    table.sheet0 tr.row213 {
      height: 15.75pt
    }

    table.sheet0 tr.row214 {
      height: 15.75pt
    }

    table.sheet0 tr.row215 {
      height: 15.75pt
    }

    table.sheet0 tr.row216 {
      height: 15.75pt
    }

    table.sheet0 tr.row217 {
      height: 15.75pt
    }

    table.sheet0 tr.row218 {
      height: 15.75pt
    }

    table.sheet0 tr.row219 {
      height: 15.75pt
    }

    table.sheet0 tr.row220 {
      height: 15.75pt
    }

    table.sheet0 tr.row221 {
      height: 15.75pt
    }

    table.sheet0 tr.row222 {
      height: 15.75pt
    }

    table.sheet0 tr.row223 {
      height: 15.75pt
    }

    table.sheet0 tr.row224 {
      height: 15.75pt
    }

    table.sheet0 tr.row225 {
      height: 15.75pt
    }

    table.sheet0 tr.row226 {
      height: 15.75pt
    }

    table.sheet0 tr.row227 {
      height: 15.75pt
    }

    table.sheet0 tr.row228 {
      height: 15.75pt
    }

    table.sheet0 tr.row229 {
      height: 15.75pt
    }

    table.sheet0 tr.row230 {
      height: 15.75pt
    }

    table.sheet0 tr.row231 {
      height: 15.75pt
    }

    table.sheet0 tr.row232 {
      height: 15.75pt
    }

    table.sheet0 tr.row233 {
      height: 15.75pt
    }

    table.sheet0 tr.row234 {
      height: 15.75pt
    }

    table.sheet0 tr.row235 {
      height: 15.75pt
    }

    table.sheet0 tr.row236 {
      height: 15.75pt
    }

    table.sheet0 tr.row237 {
      height: 15.75pt
    }

    table.sheet0 tr.row238 {
      height: 15.75pt
    }

    table.sheet0 tr.row239 {
      height: 15.75pt
    }

    table.sheet0 tr.row240 {
      height: 15.75pt
    }

    table.sheet0 tr.row241 {
      height: 15.75pt
    }

    table.sheet0 tr.row242 {
      height: 15.75pt
    }

    table.sheet0 tr.row243 {
      height: 15.75pt
    }

    table.sheet0 tr.row244 {
      height: 15.75pt
    }

    table.sheet0 tr.row245 {
      height: 15.75pt
    }

    table.sheet0 tr.row246 {
      height: 15.75pt
    }

    table.sheet0 tr.row247 {
      height: 15.75pt
    }

    table.sheet0 tr.row248 {
      height: 15.75pt
    }

    table.sheet0 tr.row249 {
      height: 15.75pt
    }

    table.sheet0 tr.row250 {
      height: 15.75pt
    }

    table.sheet0 tr.row251 {
      height: 15.75pt
    }

    table.sheet0 tr.row252 {
      height: 15.75pt
    }

    table.sheet0 tr.row253 {
      height: 15.75pt
    }

    table.sheet0 tr.row254 {
      height: 15.75pt
    }

    table.sheet0 tr.row255 {
      height: 15.75pt
    }

    table.sheet0 tr.row256 {
      height: 15.75pt
    }

    table.sheet0 tr.row257 {
      height: 15.75pt
    }

    table.sheet0 tr.row258 {
      height: 15.75pt
    }

    table.sheet0 tr.row259 {
      height: 15.75pt
    }

    table.sheet0 tr.row260 {
      height: 15.75pt
    }

    table.sheet0 tr.row261 {
      height: 15.75pt
    }

    table.sheet0 tr.row262 {
      height: 15.75pt
    }

    table.sheet0 tr.row263 {
      height: 15.75pt
    }

    table.sheet0 tr.row264 {
      height: 15.75pt
    }

    table.sheet0 tr.row265 {
      height: 15.75pt
    }

    table.sheet0 tr.row266 {
      height: 15.75pt
    }

    table.sheet0 tr.row267 {
      height: 15.75pt
    }

    table.sheet0 tr.row268 {
      height: 15.75pt
    }

    table.sheet0 tr.row269 {
      height: 15.75pt
    }

    table.sheet0 tr.row270 {
      height: 15.75pt
    }

    table.sheet0 tr.row271 {
      height: 15.75pt
    }

    table.sheet0 tr.row272 {
      height: 15.75pt
    }

    table.sheet0 tr.row273 {
      height: 15.75pt
    }

    table.sheet0 tr.row274 {
      height: 15.75pt
    }

    table.sheet0 tr.row275 {
      height: 15.75pt
    }

    table.sheet0 tr.row276 {
      height: 15.75pt
    }

    table.sheet0 tr.row277 {
      height: 15.75pt
    }

    table.sheet0 tr.row278 {
      height: 15.75pt
    }

    table.sheet0 tr.row279 {
      height: 15.75pt
    }

    table.sheet0 tr.row280 {
      height: 15.75pt
    }

    table.sheet0 tr.row281 {
      height: 15.75pt
    }

    table.sheet0 tr.row282 {
      height: 15.75pt
    }

    table.sheet0 tr.row283 {
      height: 15.75pt
    }

    table.sheet0 tr.row284 {
      height: 15.75pt
    }

    table.sheet0 tr.row285 {
      height: 15.75pt
    }

    table.sheet0 tr.row286 {
      height: 15.75pt
    }
  </style>

</head>

<body>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

      <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ route("index_estoque") }}">Estoque</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Vendas</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Sair</a>
          </li>
        </ul>
      </div>
    </nav>
    @yield('dashboard_aprovado');
    </div>
</body>
</html>