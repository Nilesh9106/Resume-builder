<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Builder</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<?php
$name = $_POST['fname'] . " " . $_POST['lname'];
$date=date("Y-m-d");
?>

<body>
    <button onclick="generatePDF()" class="download">download</button>
    <div id="pdf">
        <div class="block1">
            <h1 style="margin:0;font-size: 41px"><?= $_POST['fname'] ?> <?= $_POST['lname'] ?></h1>
            <small style="font-size: 27px;"><?= $_POST['title'] ?></small>
            <p class="des" style="font-size: 17px;"><?= $_POST['description']?? '' ?></p>
        </div>
        <div style="padding: 10px;">
            <?php if (($_POST['employer']) !=="") { ?>
                <div class="block2">
                    <h2>Professional Experience</h2>
                    <hr>
                    <div class="upper">
                        <div class="leftU" style="display:inline-block;">
                            <p><?= $_POST['sdate'] ?> - <?php if($date == $_POST['edate']){echo "present";}else{ echo $_POST['edate'];} ?> </p>
                        </div>
                        <div class="rightu" style="display:inline-block;">
                            <p><?= $_POST['employer'] ?></p>
                            <p><?= $_POST['workdescription'] ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="block2">
                <h2>Education</h2>
                <hr>
                <div class="upper">
                    <div class="leftU" style="display:inline-block;">
                        <p><?= $_POST['schoolsdate'] ?> - <?php if($date == $_POST['schooledate']){echo "present";}else{ echo $_POST['schooledate'];} ?> </p>
                    </div>
                    <div class="rightu" style="display:inline-block;">
                        <p><?= $_POST['school'] ?> </p>
                        <ul>
                            <li><?= $_POST['degree'] ?> in <?= $_POST['field'] ?></li>
                            <li> grade- <?= $_POST['schoolgrade'] ?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="block2">
                <h2>Key skills</h2>
                <hr>
                <div class="upper">
                    <div class="rightu" style="display:inline-block; margin: 0%; padding-left: 0%;">
                        <ul>
                            <li><?= $_POST['skill1'] ?></li>
                            <?php if (($_POST['skill2'])!== "") { ?>
                                <li><?= $_POST['skill2'] ?></li>
                            <?php } ?>
                            <?php if (($_POST['skill3']) !=="") { ?>
                                <li><?= $_POST['skill3'] ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="block2" style="margin: 15px 10px;">
            <h2>Contact information</h2>
            <hr>
            <div class="upper">
                <div class="left" style="display:inline-block; margin: 0%; padding-left: 0%;">
                    <ul>
                        <li>address: </li>
                        <li>Gmail: </li>
                        <li>Github: </li>
                        <li>Linkedin: </li>
                        <?php if (isset($_POST['portfolio'])) { ?>
                            <li>portfolio: </li>
                        <?php } ?>
                        <li>Phone no: </li>
                    </ul>
                </div>
                <div class="rightu" style="display:inline-block; margin: 0%; padding-left: 0%;">
                    <ul style="list-style: none;">
                        <li><?= $_POST['address'] ?>,<?= $_POST['city'] ?> , <?= $_POST['country'] ?> ,<?= $_POST['pincode'] ?> </li>

                        <li><a href="mailto:<?= $_POST['email'] ?>" style="text-transform: lowercase;"><?= $_POST['email'] ?></a></li>
                        <li><a href="https://github.com/<?= $_POST['github'] ?>/"><?= $_POST['github'] ?></a></li>
                        <li><a href="https://www.linkedin.com/in/<?= $_POST['linkedin'] ?>/"><?= $_POST['linkedin'] ?></a></li>
                        <?php if (($_POST['portfolio'])!=="") { ?>
                            <li><a href="<?= $_POST['portfolio'] ?>"><?= $name ?></a></li>

                        <?php } ?>
                        <li>+91 <?= $_POST['phone'] ?></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        function generatePDF() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;

            const element = document.getElementById('pdf');

            html2pdf().from(element).save();
        }
    </script>
</body>

</html>