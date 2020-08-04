<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title></title>
    </head>
    <body>
        <h1>Buat Account Baru!</h1>
        <h4>Sign Up Form</h4>
        <form action = "welcome.html">
            <div>
                First Name: <br />
                <input type="text" />
            </div>

            <div>
                Last Name: <br />
                <input type="text" />
            </div>

            <div>
                Gender: <br />
                <input type="radio" id="male" name="gender" value="male" />
                <label for="male">male</label><br />

                <input type="radio" id="female" name="gender" value="female" />
                <label for="female">female</label><br />

                <input type="radio" id="other" name="gender" value="other" />
                <label for="other">other</label><br />
            </div>

            <div>
                Nationality: <br />
                <select name="nationality" id="nationality">
                    <option value="Indonesia">Indonesia</option>
                    <option value="LuarNegri">LuarNegri</option>
                </select>
            </div>

            <div>
                Language: <br />
                <input
                    type="checkbox"
                    id="lang1"
                    name="lang1"
                    value="bahasaIndonesia"
                />
                <label for="lang1">Bahasa Indonesia</label><br />

                <input
                    type="checkbox"
                    id="lang2"
                    name="lang2"
                    value="English"
                />
                <label for="lang2">English</label><br />


                <input
                    type="checkbox"
                    id="lang3"
                    name="lang3"
                    value="bahasaIndonesia"
                />
                <label for="lang3">Other</label><br />
            </div>
            
            <div>
                Bio: <br/>
                <textarea name="comment" form="usrform">Enter text here...</textarea>
            </div>

            <div>
                <input type = "submit" value = "Sign Up">
            </div>
        </form>
    </body>
</html>
