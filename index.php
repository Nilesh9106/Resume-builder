<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Builder</title> 
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="from">
        <div class="head">
            <h1>Resume Builder</h1>
        </div>
        <form action="pdf.php" method="post">
            <div class="inputs">
                <h2 class="col-4">personal information</h2>
                <input class="col-2" type="text" placeholder="first name" name="fname" id="" required>
                <input type="text" class="col-2" name="lname" placeholder="last name" id="" required>
                <input type="text" name="title" placeholder="title" class="col-1" id="" required>
                <input type="text" name="city" placeholder="city" class="col-1" id="">
                <input type="text" name="pincode" placeholder="pin code" class="col-1" id="">
                <input type="text" name="country" placeholder="country" class="col-1" id="">
                <input type="text" class="col-4" placeholder="address" name="address" required>
                <input type="email" name="email" placeholder="email address" class="col-2" id="" required>
                <input type="tel" name="phone" pattern="[0-9]{10}"  placeholder="phone number" class="col-2" id="" required>
                <textarea name="description" id="" cols="30" rows="10" placeholder="Tell about yourself" class="col-4"></textarea>
                <h2 class="col-4" required>experience</h2>
                <input type="text" name="employer" id="" placeholder="employer" class="col-2">
                <input type="text" name="jobtitle" placeholder="job title" id="" class="col-2">
                <label for="sdate" class="col-1" style="text-align: center; margin:15px 0; font-size:17px">starting date</label>
                <input type="date" name="sdate" placeholder="staring date" class="col-1" id="sdate">
                <label for="edate" class="col-1" style="text-align: center;  margin:15px 0; font-size:17px">end date</label>
                <input type="date" name="edate" placeholder="end date" class="col-1" id="edate">
                <textarea name="workdescription" id="" cols="30" rows="10" placeholder="Tell about your work experience" class="col-4"></textarea>
                <h2 class="col-4">education</h2>
                <input type="text" name="school" id="" placeholder="school / college" class="col-2" required required> 
                <input type="text" name="field" placeholder="field" id="" class="col-2" required>
                <input type="text" name="degree" placeholder="degree" id="" class="col-2" required>
                <input type="number" name="schoolgrade" step="0.01" min='0' placeholder="school grade" id="" class="col-2" required>
                <label for="ssdate" class="col-1" style="text-align: center; margin:15px 0; font-size:17px">starting date</label>
                <input type="date" name="schoolsdate" placeholder="staring date" class="col-1" id="ssdate" required>
                <label for="sedate" class="col-1" style="text-align: center; margin:15px 0; font-size:17px">end date</label>
                <input type="date" name="schooledate" placeholder="end date" class="col-1" id="sedate" required>
                <h2 class="col-4">Skills</h2>
                <input type="text" name="skill1" placeholder="skill1" id="" class="col-4" required>
                <input type="text" name="skill2" placeholder="skill2" id="" class="col-4">
                <input type="text" name="skill3" placeholder="skill3" id="" class="col-4">
                <h2 class="col-4">links</h2>
                <input type="text" name="linkedin" placeholder="linkedin username" id="" class="col-4" required>
                <input type="text" name="github" placeholder="github username" id="" class="col-4" required>
                <input type="url" name="portfolio" placeholder="portfolio " id="" class="col-4">


                <button type="submit" class="col-4">Build</button>
            </div>
        </form>
    </div>
</body>

</html>