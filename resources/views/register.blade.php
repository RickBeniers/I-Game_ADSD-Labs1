<?php include"home.blade.php"; ?>
<link rel=stylesheet type=text/css href=/dashboard/projects/Igame/Igame/resources/css/register.css?v=7>
       <main>
       <div class=outerDiv>
          <div class=innerDiv>
            <form method=post action=/dashboard/projects/Igame/Igame/app/http/controllers/registerController.php>
                <div>
                    <label for=username>Gebruikersnaam</label><br>
                    <input id=username type=text name=username>
                </div>
                <div>
                    <label for=gamecode>Spelcode</label><br>
                    <input id=gamecode name=gamecode type=text><br>
                </div>
                <div>
                    <button type=submit>Registreren</button>
                </div>
            </form>
          </div>
       </div>
       </main>
    </body>
</html>
