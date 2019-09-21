<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="globe.png" />
    <title>Post an Advertisement</title>
    <style>
        body {
            background-color: slategray;
            color: darksalmon;
        }

        h4 {
            color: aliceblue;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

                li a:hover {
                    background-color: #111;
                }
    </style>
</head>
<body>
    <ul>
        <li><a class="active" href="index.html">Home</a></li>
        <li><a href="house_offer.html"> House Someone Affected </a></li>
        <li><a href="affected.html"> Reach out for Help</a></li>
        <li><a href="job_search.html">Rebuilding Projects</a></li>
        <li><a href="advertisement_form.php"> Advertise Jobs </a></li>
    </ul>
    <form>
        Company Name: <br />
        <input type="text" name="companyName" /><br />
        <br />
        <br />
        <label>Description:</label><br />

        <textarea id="advertisementText"
                  rows="4"
                  cols="150"> Enter Job Description Here </textarea>
        <br />
        <br />
        Pay:<br />
        <input type="text" name="payVal" /><br />
        <input type="radio" name="payType" value="perJob" />Per Job<br />
        <input type="radio" name="payType" value="perHour" />Per Hour <br />
        <input type="radio" name="payType" value="perDay" />Per Day<br />
    </form>
    <?php
    if(isset($_POST['companyName']))
    {
        $data=$_POST['companyName'];
        $fp = fopen('data.txt', 'a');
        fwrite($fp, $data);
        $data=$_POST['advertisementText'];
        fwrite($fp, $data;)
        fclose($fp);
    }

    ?>

    <br />
    <br />
    <br />
    <br />
    <p style=" color:white;font-size:12px;">*all submissions will be reviewed by faculty before being posted.</p> 
</body>
</html>