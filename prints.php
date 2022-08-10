<?php include("pages/headnav.php");?>

<head>
    <title>With CSS</title>
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity=
"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
     
    <style>
        h1 {
            padding-top: 10px;
            color: rgb(36, 168, 36);
        }
 
        .col {
            position: relative;
            width: 200px;
            height: 225px;
        }
 
        .overlay {
            position: absolute;
            color: white;
            display: block;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100%;
            width: 100%;
            opacity: 0;
            transition: .5s ease;
            background-color: green;
        }
 
        .col:hover .overlay {
            opacity: 0.7;
        }
    </style>
</head>
 
<body>
    <center>
        <h1>GeeksforGeeks</h1>
        <div class="d-flex
            justify-content-center images">
             
            <div class="col">
                <a href="#"><img src="https://media.geeksforgeeks.org/wp-content/uploads/20200325132558/download311.png" alt="d"></a>
                <div class="overlay">
                    <div class="text pt-2">
                        <h4>Image Overlay</h4>
                    </div>
                </div>
            </div>
        </div>
    </center>
</body>
 
<?php include("pages/footer.php");?>