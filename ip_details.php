<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IP Tracker</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: consolas;
        }

        .container {
            width: 1000px;
            position: relative;
            display: flex;
            justify-content: center;
        }

        .container .card {
            position: relative;
            cursor: pointer;
        }

        .container .card .face {
            width: 300px;
            height: 300px;
            transition: 0.5s;
        }

        .container .card .face.face1 {
            position: relative;
            background: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1;
            transform: translateY(100px);
        }

        .container .card:hover .face.face1 {
            background: #ff0057;
            transform: translateY(0);
        }

        .container .card .face.face1 .content {
            opacity: 0.2;
            transition: 0.5s;
        }

        .container .card:hover .face.face1 .content {
            opacity: 1;
        }

        .container .card .face.face1 .content img {
            max-width: 100px;
        }

        .container .card .face.face1 .content h3 {
            margin: 10px 0 0;
            padding: 0;
            color: #fff;
            text-align: center;
            font-size: 1.5em;
        }

        .container .card .face.face2 {
            position: relative;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            box-sizing: border-box;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.8);
            transform: translateY(-100px);
        }

        .container .card:hover .face.face2 {
            transform: translateY(0);
        }

        .container .card .face.face2 .content p {
            margin: 0;
            padding: 0;
        }

        .container .card .face.face2 .content a {
            margin: 15px 0 0;
            display: inline-block;
            text-decoration: none;
            font-weight: 900;
            color: #333;
            padding: 5px;
            border: 1px solid #333;
        }

        .container .card .face.face2 .content a:hover {
            background: #333;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card ">
            <div class="face face1">
                <div class="content">
                    <img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/code_128.png?raw=true">
                    <h3>IP Details</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <h3 id="ip"></h3>
                    <ul id="details-list-container">
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script>
        // $('#details-list-container').append( $("<li>er</li>"))
        const ip = sessionStorage.getItem('ip');
        // console.log('d',ip);
        const url = `https://ipapi.co/${ip}/json/`
        let ipDetails = fetch(url)
        .then(res=>res.json())
        .then(data=>{
            $('#ip').text(`IP: ${data.ip}`)
            $('#details-list-container').append( $(`
            <li>City: ${data.city}</li>
            <li>Region: ${data.region}</li>
            <li>Country: ${data.country_name}</li>
            <li>Country Area: ${data.country_area}</li>
            <li>Postal Code: ${data.postal}</li>
            <li>Calling Code: ${data.country_calling_code}</li>
            <li>Longitude: ${data.longitude}</li>
            <li>Latitude: ${data.latitude}</li>
            <li>Org: ${data.org}</li>
            <li>Hostname: ${data.hostname}</li>
            `))
        });
    </script>
</body>

</html>