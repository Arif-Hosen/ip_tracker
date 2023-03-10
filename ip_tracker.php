<!-- https://ipapi.co/103.134.62.89/json/ 
https://ipapi.co/static/images/flags/us.png (for country flaf image)
-->
<?php 
if($_SERVER['REQUEST_METHOD']=="POST"){
    header("Location:http://localhost/projects/ip_tracker/ip_details.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IP Tracker</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- jquery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0px;
            padding: 0px;
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #130f40;
            font-family: 'Lato' !important;
        }

        .search-box {
            width: fit-content;
            height: fit-content;
            position: relative;
        }

        .input-search {
            height: 50px;
            width: 50px;
            border-style: none;
            padding: 10px;
            font-size: 18px;
            letter-spacing: 2px;
            outline: none;
            border-radius: 25px;
            transition: all .5s ease-in-out;
            background-color: #22a6b3;
            padding-right: 40px;
            color: #fff;
        }

        .input-search::placeholder {
            color: rgba(255, 255, 255, .5);
            font-size: 18px;
            letter-spacing: 2px;
            font-weight: 100;
        }

        .btn-search {
            width: 50px;
            height: 50px;
            border-style: none;
            font-size: 20px;
            font-weight: bold;
            outline: none;
            cursor: pointer;
            border-radius: 50%;
            position: absolute;
            right: 0px;
            color: #ffffff;
            background-color: transparent;
            pointer-events: painted;
        }

        .btn-search:focus~.input-search {
            width: 300px;
            border-radius: 0px;
            background-color: transparent;
            border-bottom: 1px solid rgba(255, 255, 255, .5);
            transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
        }

        .input-search:focus {
            width: 300px;
            border-radius: 0px;
            background-color: transparent;
            border-bottom: 1px solid rgba(255, 255, 255, .5);
            transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
        }



        /*  footer   */
        footer {
            background-color: #222;
            color: #fff;
            font-size: 14px;
            bottom: 0;
            position: fixed;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 999;
        }

        footer p {
            margin: 10px 0;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida  Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        footer .fa-heart {
            color: red;
        }

        footer .fa-dev {
            color: #fff;
        }

        footer .fa-twitter-square {
            color: #1da0f1;
        }

        footer .fa-instagram {
            color: #f0007c;
        }

        fotter .fa-linkedin {
            color: #0073b1;
        }

        footer .fa-codepen {
            color: #fff
        }

        footer a {
            color: #3c97bf;
            text-decoration: none;
            margin-right: 5px;
        }

        .youtubeBtn {
            position: fixed;
            left: 50%;
            transform: translatex(-50%);
            bottom: 45px;
            cursor: pointer;
            transition: all .3s;
            vertical-align: middle;
            text-align: center;
            display: inline-block;
        }

        .youtubeBtn i {
            font-size: 20px;
            float: left;
        }

        .youtubeBtn a {
            color: #ff0000;
            animation: youtubeAnim 1000ms linear infinite;
            float: right;
        }

        .youtubeBtn a:hover {
            color: #c9110f;
            transition: all .3s ease-in-out;
            text-shadow: none;
        }

        .youtubeBtn i:active {
            transform: scale(.9);
            transition: all .3s ease-in-out;
        }

        .youtubeBtn span {
            font-family: 'Lato';
            font-weight: normal;
            color: #fff;
            display: block;
            font-size: 12px;
            float: right;
            line-height: 20px;
            padding-left: 5px;

        }

        @keyframes youtubeAnim {

            0%,
            100% {
                color: #c9110f;
            }

            50% {
                color: #ff0000;
            }
        }

        /* footer  */
    </style>
</head>

<body>
    <div class="search-box">
        <button class="btn-search"><i class="fas fa-search"></i></button>
        <form action="ip_tracker.php" method="post">
            <input id="ip-address" type="text" class="input-search" placeholder="103.134.62.62">
            <button id="search" class="btn btn-success ">Search</button>
        </form>
    </div>
 <footer>
        <p>
            Created <i class="fa fa-heart"></i> by
            <a target="_blank" href="https://www.linkedin.com/in/arif-hosen-7827b2211/">Arif Hosen</a>
            Follow me :
            <a target="_blank" href="https://www.instagram.com/ahmadbassamemran/"><i class="fab fa-instagram"></i></a>
            <a target="_blank" href="https://www.linkedin.com/in/ahmademarn/"><i class="fab fa-linkedin"></i></a>
            <a target="_blank" href="https://codepen.io/ahmadbassamemran/"><i class="fab fa-codepen"></i></a>
            <a target="_blank" href="https://dev.to/ahmadbassamemran"><i class="fab fa-dev"></i></a>
            <a target="_blank" href="https://twitter.com/ahmadbassamemra"><i class="fab fa-twitter-square"></i></a>
        </p>
    </footer>

    <!-- <div class="youtubeBtn">
  <a target="_blank" href="https://www.youtube.com/AhmadEmran?sub_confirmation=1">
      <span>Watch on YouTube</span>
  <i class="fab fa-youtube"></i>
    </a>

</div>  -->


    <script>
        $(document).ready(function() {
            $('#search').click(function() {
                const ip = $('#ip-address').val();
                sessionStorage.setItem("ip",ip);
                // console.log("IP = ", ip);
            })
        })
    </script>
</body>

</html>