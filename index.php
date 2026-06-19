<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form</title>
    <link rel="icon" type="image/png" href="images/fav.png?v=2">
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial,sans-serif;
        }

        body{
            background:#f4f6fb;
        }

        .header{
            background:linear-gradient(90deg,#1e3c96,#5547d9);
            padding:35px 15px;
            text-align:center;
            color:#fff;
        }

        .header h1{
            font-size:45px;
            margin-bottom:10px;
        }

        .container{
            max-width:1300px;
            margin:40px auto;
            padding:20px;
        }

        input,
        select,
        textarea{
            width:100%;
            height:55px;
            padding:12px 15px;
            border:1px solid #d6dce8;
            font-size:16px;
            outline:none;
        }

        textarea{
            height:55px;
            resize:none;
        }

        .row{
            display:flex;
            gap:20px;
            margin-top:20px;
        }

        .col{
            flex:1;
        }

        .btn-box{
            text-align:center;
            margin-top:30px;
        }

        button{
            background:#3245c6;
            color:white;
            border:none;
            padding:15px 60px;
            font-size:18px;
            cursor:pointer;
            border-radius:4px;
        }

        .success{
            background:#d4edda;
            color:#155724;
            padding:12px;
            margin-bottom:20px;
        }

        .error{
            background:#f8d7da;
            color:#721c24;
            padding:12px;
            margin-bottom:20px;
        }

        @media(max-width:768px){
            .row{
                flex-direction:column;
            }

            .header h1{
                font-size:30px;
            }
        }
    </style>
</head>
<body>

<div class="header">
    <h1>Application Form</h1>
    <p>Prospectus | Eligibility | Fees</p>
</div>

<div class="container">
    <?php
        if(isset($_GET['success'])){
            echo '<div class="success">Lead Submitted Successfully.</div>';
        }

        if(isset($_GET['error'])){
            echo '<div class="error">Something Went Wrong.</div>';
        }
    ?>

    <form method="POST" action="submit.php">
        <input type="text" name="name" placeholder="YOUR NAME" required>
        <div class="row">
            <div class="col">
                <input type="text" name="contactno" placeholder="YOUR PHONE" required>
            </div>

            <div class="col">
                <input type="email" name="email" placeholder="YOUR EMAIL">
            </div>

            <div class="col">
                <select name="selectcourse" required>
                    <option value="">SELECT COURSE</option>
                    <option value="BCA">BCA</option>
                    <option value="BBA">BBA</option>
                    <option value="MBA">MBA</option>
                    <option value="MCA">MCA</option>
                    <option value="B.Tech">B.Tech</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <select name="studymode">
                    <option value="">PREFERRED STUDY MODE</option>
                    <option value="Distance / Flexible learning">Distance / Flexible learning</option>
                    <option value="Regular">Regular</option>
                    <option value="Work Integrated Learning Program (WILP)">Work Integrated Learning Program (WILP)</option>
                    <option value="Online">Online</option>
                </select>
            </div>

            <div class="col" style="flex:2;">
                <textarea name="message" placeholder="MESSAGE"></textarea>
            </div>
        </div>

        <div class="btn-box">
            <button type="submit">Submit</button>
        </div>
    </form>
</div>

</body>
</html>