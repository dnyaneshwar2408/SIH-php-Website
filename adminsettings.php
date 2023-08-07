<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Document</title>
<link
href="https://fonts.googleapis.com/css?family=Lato"
rel="stylesheet"
type="text/css"
/>
<link rel="stylesheet" href="style.css" />


<script>body{
background-color: #F5F1E9;
}
#calendar{
margin-left: auto;
margin-right: auto;
width: 320px;
font-family: 'Lato', sans-serif;
}
#calendar_weekdays div{
display:inline-block;
vertical-align:top;
}
#calendar_content, #calendar_weekdays, #calendar_header{
position: relative;
width: 320px;
overflow: hidden;
float: left;
z-index: 10;
}
#calendar_weekdays div, #calendar_content div{
width:40px;
height: 40px;
overflow: hidden;
text-align: center;
background-color: #FFFFFF;
color: #787878;
}
#calendar_content{
-webkit-border-radius: 0px 0px 12px 12px;
-moz-border-radius: 0px 0px 12px 12px;
border-radius: 0px 0px 12px 12px;
}
#calendar_content div{
float: left;
}
#calendar_content div:hover{
background-color: #F8F8F8;
}
#calendar_content div.blank{
background-color: #E8E8E8;
}
#calendar_header, #calendar_content div.today{
zoom: 1;
filter: alpha(opacity=70);
opacity: 0.7;
}
#calendar_content div.today{
color: #FFFFFF;
}
#calendar_header{
width: 100%;
height: 37px;
text-align: center;
background-color: #FF6860;
padding: 18px 0;
-webkit-border-radius: 12px 12px 0px 0px;
-moz-border-radius: 12px 12px 0px 0px;
border-radius: 12px 12px 0px 0px;
}
#calendar_header h1{
font-size: 1.5em;
color: #FFFFFF;
float:left;
width:70%;
}
i[class^=icon-chevron]{
color: #FFFFFF;
float: left;
width:15%;
border-radius: 50%;
}</script>
</head>
<body>
<div id="calendar">
<div id="calendar_header">
<i class="icon-chevron-left"></i>
<h1></h1>
<i class="icon-chevron-right"></i>
</div>
<div id="calendar_weekdays"></div>
<div id="calendar_content"></div>
</div>
</body>
</html>