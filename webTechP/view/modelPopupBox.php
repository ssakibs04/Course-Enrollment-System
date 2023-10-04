<!DOCTYPE html>
<html>

<head>
    <?php include_once './common/links.php' ?>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-transform: capitalize;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            width: 100vw;
            background-image: url("./img/1.jpg");
            background-size: cover;
            background-position: center;
            text-transform: capitalize;
        }

        #open {
            height: 50px;
            width: 180px;
            background: #fff;
            color: #333;
            font-size: 25px;
            cursor: pointer;
            letter-spacing: 2px;
            outline: none;
            border: none;
            box-shadow: 0 3px 5px rgba(0, 0, 0, .3);
        }

        #open:hover {
            letter-spacing: 4px;
            opacity: .8;
        }

        .model_container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            width: 100vw;
            position: fixed;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, .3);
            transform: scale(0);
        }

        .model_container .model {
            height: 500px;
            max-width: 550px;
            margin: 0 10px;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            text-align: center;
            position: relative;
        }

        .model_container .model .fa-heart {
            font-size: 60px;
            color: rgb(200, 30, 30);
            padding-bottom: 50px;
            margin: 10px 0;
            text-shadow: 0 3px 5px rgba(0, 0, 0, .3),
                30px 30px 0 #ccc,
                -30px 30px 0 #333;

        }

        .model_container .model h3 {
            color: #333;
            font-size: 16px;
            text-transform: capitalize;
        }

        .model_container .model p {
            color: #666;
            margin: 20px 0;
            line-height: 5px;
            text-transform: capitalize;
        }

        .model_container .model button {
            height: 35px;
            width: 120px;            
            border: none;
            background: #333;
            border-radius: 50px;            
            box-shadow: 0 5px 15px rgba(0, 0, 0, .3);
            margin-top: 20px;
        }
        .model_container .model button a{
            text-decoration: none;
            color: #fff;            
            font-size: 17px;
            cursor: pointer;
            text-transform: capitalize;
        }

        .model_container .model .fa-times {
            position: absolute;
            top: 15px;
            right: 15px;
            font-size: 25px;
            cursor: pointer;
            color: #333;
        }
    </style>


</head>

<body>
    <div class="container">
        <button id="open">Click me</button>
    </div>
    <div class="model_container">
        <div class="model">
        <i class="fa fa-heart" aria-hidden="true"></i>
            <h3>Topic</h3>
                <p>Layered Architecture</p>
                <p>Completeness</p>
                <p>CSS(done)</p>
                <p>Validation(JS)</p>
                <p>Jquery</p>
                <p>Database implementation for all the tables described in mid report</p>
                <p>AJAX (optional)</p>
                <p>No. of complete features</p>
                <button><a href="./index.php">Ok</a></button>
                <button><a href="">cancel</a></button>
                <i id="close" class="fa fa-times" aria-hidden="true"></i>            
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $('#open').click(function() {
                $('.model_container').css('transform', 'scale(1)');
            });

            $('#close').click(function() {
                $('.model_container').css('transform', 'scale(0)');
            });
        });
    </script>
</body>

</html>