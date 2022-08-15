<?php include("pages/header.php");?>

<head>
    <title>Prints │ Pix Prints</title>
    
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