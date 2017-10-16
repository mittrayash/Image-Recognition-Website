<?php

?>

<html>
<head>
    <meta charset="utf-8">
    
    <meta name="description" content="This website is attributed to the lifetime of ...">
<title>Analyze</title>
    <link rel="stylesheet" href="styles.css">
	<link rel='stylesheet' href="search.css">

    <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7COpen+Sans:300,300i,400,400i,600,600i,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <style>
        .coding p{
            display: none;
        }
        .jumbotron {
            margin-bottom: 0px;
            padding-top: 0px !important;
            background-position: 0% 25%;
            background-size: cover;
            background-repeat: no-repeat;
            color: white;

            background-image: url(images/office.jpg);
            text-shadow: black 0.3em 0.3em 0.3em;
        }

        .row-header{
            margin:0px auto;
            padding:0px auto;
        }

        .row-content{
            margin:0px auto;
            padding: 50px 0px 50px 0px;
            border-bottom: 1px ridge;
            min-height:400px;
        }

        .row-footer{
            background-color: #AfAfAf;
            margin:0px auto;
            padding: 20px 0px 20px 0px;
        }

        address{
            font-size: 80%;
            margin:0px;
            color: #0f0f0f;
        }
        .navbar {
            background: #1d1e1f;
            color: #fff;
        }
        .open .dropdown-menu{
            background: #5bc0de;
            color:#fff;
        }
        .dropdown:hover .dropdown-menu{
            background: #5bc0de;
            color:#fff;
        }
        .dropdown-menu > li > a{
            color: white;
        }
        .dropdown-header{
            color:black;
        }
        .navbar-inverse .navbar-nav > li >a:hover{
            background-color:midnightblue;
            color:#a6d5ec;
        }
        .navbar-inverse .navbar-nav > li > a{
            color: #c1e2b3;
        }
        body{


            z-index: 0;
        }
        #brand{
            color:#c1e2b3;
        }
        #brand:hover{
            color:white;
        }
        .navbar-inverse .navbar-nav .active > a{
            background-color: #245269;
        }
        .breadcrumb{
            text-align: left;
        }
        p {
            text-align: left;
        }
        .dropdown:hover .dropdown-menu{
            display: inline-block;
            margin-top:0;
        }



    </style>
</head>
<body>

<header class="jumbotron" style="padding-bottom: 0px !important; ">
    <!-- Main component for a primary marketing message or call to action -->
    <div style="background-color:rgba(0,0,0,.81);">
    <div class="container-fluid">

        <div class="row" style="min-height: 80%;">
            <div class="col-xs-12 col-sm-8" style="padding-left: 5%">
                <h1>Image Recognition</h1>

                <div class="userInterface col-sm-8 col-xs-8">
                    Enter the URL to an image of an image you want to analyze, the click the <strong>Analyze image</strong> button.
                    <br><br>
                    Image to analyze:
                    <form>
                        <input type="search" name='inputImage' id="inputImage" placeholder="Enter the image URL" value="https://d3m7xw68ay40x8.cloudfront.net/assets/2015/03/31124924/weird-town-names.jpg" />
                    </form>


                    <div align="right"><button id='anabut' class="btn-lg" onclick="analyzeButtonClick()">Analyze Image</button>
                    </div>
                    <br><br>
                   <!-- <div class="wrapper">
                        <div class="jsonOutput">
                            Response:
                            <br><br>
                            <textarea id="responseTextArea" class="UIInput"></textarea>
                        </div>
                        <div class="pad"></div>
                        <div class="imageDiv">
                            Source image:<br>
                            <span id="captionSpan"></span><br>
                            <img id="sourceImage" onerror="common.imageLoadError()"/>
                        </div>
                    </div>-->

                    <div class="subKeyDiv hidden">
                        Subscription Key:
                        <input
                                type="text"
                                class="subKeyInput"
                                name="subscriptionKeyInput"
                                id="subscriptionKeyInput"
                                onchange="common.subscriptionChange()"
                                value="4dd30b7daced4f2ea127d66659f46273" />
                        Subscription Region:
                        <select name="subscriptionRegionSelect" id="subscriptionRegionSelect" onchange="common.subscriptionChange()">
                            <option value="westcentralus">westcentralus</option>
                            <option value="westus">westus</option>
                            <option value="eastus2">eastus2</option>
                            <option value="westeurope">westeurope</option>
                            <option value="southeastasia">southeastasia</option>
                        </select>
                    </div>
                </div>


            <div id="resp" class="row col-sm-12 col-xs-12" style="display: none">
                <div class="row container" style="font-weight: bold;">

                <span style="color: white;">Result: &nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <span style="color: white;" id="resultt"></span>


                </div>
                <div class="row container" style=" font-weight: bold;">

                    <span style="color: white;">Confidence: &nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <span style="color: white;" id="confidenc"></span>
                </div>
            </div>
            </div>
            <div class="col-sm-4 col-xs-12" id="showImage" style="padding-right: 5%; padding-top:60px; display: none;">
                <div class="imageDiv">
                    <span style="color: black !important; font-family: 'Copperplate Gothic Lightrial Rounded MT Bold'; font-weight: 700">Source image:</span><br>
                    <span id="captionSpan"></span><br>
                    <img id="sourceImage" onerror="common.imageLoadError()"/>
                </div>
            </div>

        </div>
        <div class="row col-sm-8">

        </div>
    </div>
    </div>
</header>




<div class="row container-fluid" style="padding-top: 40px; background-color: #2C3E50; padding-bottom: 20px; min-height:98px">

    <center><span style="font-weight: bold; color: white;">Created by : Yash Mittra</span></center>
    <center><span style="font-weight: bold; color: white;">Find Me On My <a href="https://mittrayash.github.io" target="_blank">Website</a></span></center>

</div>
<script>
    $(document).ready(function(){
        $(".item").hover(function(){
                $(this).find("img").animate({paddingTop: "50px", height: "-=60px"});
                $(this).find("p").fadeIn(300);
                var imageUrl = 'images/home.jpg';
                // $(this).css('background-image', 'url(' + imageUrl + ')');
                // $(this).css('background-color', 'rgba(0,0,0,.81)');
                $(this).css('background', 'rgba(0,0,0,.81) right no-repeat');


        }, function(){
                $(this).find("img").animate({paddingTop: "100px", height:"+=60px"});
                $(this).find("p").fadeOut(300);
                $(this).css('background', '#1d1e1f right no-repeat');


            }
        );
    });

</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script type="text/javascript" src="common.js"></script>

    <script type="text/javascript">

        function analyzeButtonClick() {

            // Clear the display fields.
            $("#sourceImage").attr("src", "#");
            $("#responseTextArea").val("");
            $("#captionSpan").text("");

            // Display the image.
            var sourceImageUrl = $("#inputImage").val();
            $("#sourceImage").attr("src", sourceImageUrl);

            AnalyzeImage(sourceImageUrl, $("#responseTextArea"), $("#captionSpan"));
        }


        function AnalyzeImage(sourceImageUrl, responseTextArea, captionSpan) {
            // Request parameters.
            var params = {
                "visualFeatures": "Categories,Description,Color",
                "details": "",
                "language": "en",
            };

            // Perform the REST API call.
            $.ajax({
                url: common.uriBasePreRegion +
                $("#subscriptionRegionSelect").val() +
                common.uriBasePostRegion +
                common.uriBaseAnalyze +
                "?" +
                $.param(params),

                // Request headers.
                beforeSend: function(jqXHR){
                    jqXHR.setRequestHeader("Content-Type","application/json");
                    jqXHR.setRequestHeader("Ocp-Apim-Subscription-Key",
                        encodeURIComponent($("#subscriptionKeyInput").val()));
                },

                type: "POST",

                // Request body.
                data: '{"url": ' + '"' + sourceImageUrl + '"}',
            })

                .done(function(data) {
                    // Show formatted JSON on webpage.
                    //responseTextArea.val(JSON.stringify(data, null, 2));

                    // Extract and display the caption and confidence from the first caption in the description object.
                    if (data.description && data.description.captions) {
                        var caption = data.description.captions[0];

                        if (caption.text && caption.confidence) {

                            showImg = document.getElementById("showImage");
                            resp = document.getElementById("resp");
                            rs = document.getElementById("resultt");
                            cd = document.getElementById("confidenc")

                            showImg.style.display = "block";
                            resp.style.display = "block";
                            rs.innerHTML = caption.text;
                            cd.innerHTML = caption.confidence;
                            console.log(caption.text)
                        }
                    }
                })

                .fail(function(jqXHR, textStatus, errorThrown) {
                    // Prepare the error string.
                    var errorString = (errorThrown === "") ? "Error. " : errorThrown + " (" + jqXHR.status + "): ";
                    errorString += (jqXHR.responseText === "") ? "" : (jQuery.parseJSON(jqXHR.responseText).message) ?
                            jQuery.parseJSON(jqXHR.responseText).message : jQuery.parseJSON(jqXHR.responseText).error.message;

                    // Put the error JSON in the response textarea.
                    responseTextArea.val(JSON.stringify(jqXHR, null, 2));

                    // Show the error message.
                    alert(errorString);
                });
        }
    </script>
</body>
</html>
