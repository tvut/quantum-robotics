<html>
<head>
    <title>Tower Takeover Tool</title>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="apple-touch-icon" href="/assets/images/app.png">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta property="og:image" content="https://quantum917.org/assets/images/opengraph.png"/>
    <meta property="og:url" content="https://quantum917.org/tt"/>
    <meta name="description" content="Scoring calculator and a cube color advisor.">
    <meta property="og:title" content="Tower Takeover Tool"/>
    <meta name="apple-mobile-web-app-title" content="Tower Takeover">
    <meta property="og:description" content="Scoring calculator and a cube color advisor."/>
    <link rel="icon" href="/assets/images/startup.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body{
            background-color: black;
        }
        .center {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            min-width: 100vw;
        }

        * {
            font-family: 'Roboto', sans-serif;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        input {
            width: 35px;
            height: 30px;
            font-size: 20px;
            background-color: transparent;
            text-align: center;
            border: none;
            border-radius: 0px;
        }

        div .orange, div .green, div .purple {
            width: 100%;
            display: inline-block;
        }

        .orange button, .green button, .purple button {
            width: 100%;
            height: 15vw;
            font-size: 12vw;
            display: inline-block;
            background-color: transparent;
            color: white;
            border: 1px solid white;
        }

        .orange input, .green input, .purple input {
            width: 100%;
            height: 13vw;
            font-size: 8vw;
            color: white;
        }

        .orange {
            background-color: #EB6420;
        }

        .green {
            background-color: #16A748;
        }

        .purple {
            background-color: #582F8D;
        }

        .score {
            width: 100%;
            height: 15vh;
            color: white;
            font-size: 10vh;
        }

        .nextcube {
            width: 100%;
            height: 60px;
            color: white;
            font-size: 45px;
            background-color: #999;
        }

        .redScore {
            background-color: #E72736;
        }

        .blueScore {
            background-color: #287FC4;
        }

        .red, .blue, .tower, .info {
            padding: 1.5%;
            box-shadow: 0 5px 10px 0 rgba(.9, 1, 1, .5);
            background: #333;
            margin: 1%;
        }

        .info {
            padding: 2%;
            margin: 2%;
            color:white;
        }

        .red, .blue, .tower {
            width: 30%;
            display: inline-block;
        }

        .red {
            background-color: #E72736;
        }

        .blue {
            background-color: #287FC4;
        }

        .tower {
            background-color: #CCC;
        }

        .container {
            text-align: center;
        }

        .red td, .blue td, .tower td {
            width: 50%;
        }

        .red table, .blue table, .tower table {
            width: 100%;
        }

        .radios {
            text-align: left;
            padding: 10px;
        }

        .radios label {
            font-size: 20px;
			margin-right:15px;
        }

        .radios input {
            height: 17px;
			margin-right:5px;
        }

        .teamRed {
            color: red;
        }

        .teamBlue {
            color: #287FC4;
        }

        @media only screen and (min-width: 700px) {
            .container {
                width: 700px;
                margin-left: auto;
                margin-right: auto;
            }

            .orange input, .green input, .purple input {
                height: 6vh;
                font-size: 5vh;
            }

            .orange button, .green button, .purple button {
                height: 8vh;
                font-size: 7vh;
            }
            .score{
                height:5vh;
                font-size:4vh;
            }
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>
        var Rorange = 0, Rpurple = 0, Rgreen = 0, Borange = 0, Bpurple = 0, Bgreen = 0, orange = 0, green = 0,
            purple = 0, red = 0, blue = 0;
        var redTeam = true;
        var auton = "none";

        function calculateBest() {
            red = Rorange + Rorange * orange + Rgreen + Rgreen * green + Rpurple + Rpurple * purple;
            blue = Borange + Borange * orange + Bgreen + Bgreen * green + Bpurple + Bpurple * purple;
            if (auton == "red") red += 6;
            else if (auton == "blue") blue = +6;

            var difG = 0, difP = 0, difO = 0;
            if (redTeam) {
                console.log("calc red");
                difG = Rgreen - Bgreen;
                difP = Rpurple - Bpurple;
                difO = Rorange - Borange;
            } else {
                console.log("calc blue");
                difG = Bgreen - Rgreen;
                difP = Bpurple - Rpurple;
                difO = Borange - Rorange;
            }
            if (difG == difP && difP == difO) nextValue = "Any";
            else if (difG > difP && difG > difO) nextValue = "Green";
            else if (difO > difP && difO > difG) nextValue = "Orange";
            else if (difP > difO && difP > difG) nextValue = "Purple";
            else if (difO == difP) nextValue = "Orange/Purple";
            else if (difG == difP) nextValue = "Green/Purple";
            else if (difO == difG) nextValue = "Orange/Green";
            else nextValue = "FUCK";
        }

        function updateDisplay() {
            calculateBest();
            document.querySelector('.nextcube').value = nextValue;
            document.querySelector('.bGreen').value = Bgreen;
            document.querySelector('.bOrange').value = Borange;
            document.querySelector('.bPurple').value = Bpurple;
            document.querySelector('.rGreen').value = Rgreen;
            document.querySelector('.rOrange').value = Rorange;
            document.querySelector('.rPurple').value = Rpurple;
            document.querySelector('.mGreen').value = green;
            document.querySelector('.mOrange').value = orange;
            document.querySelector('.mPurple').value = purple;
            document.querySelector('.redScore').value = red;
            document.querySelector('.blueScore').value = blue;
        }

        function setRed() {
            redTeam = true;
            console.log("set red");
            updateDisplay();
        }

        function setBlue() {
            redTeam = false;
            console.log("set blue");
            updateDisplay();
        }

        function autonBlue() {
            auton = "blue";
            console.log("auton blue");
            updateDisplay();
        }

        function autonRed() {
            auton = "red";
            console.log("auton red");
            updateDisplay();
        }

        function autonNone() {
            auton = "none";
            console.log("auton none");
            updateDisplay();
        }

        window.onload = function () {

            updateDisplay();

            const keys = document.querySelector('.tower');
            keys.addEventListener('click', (event) => {
                const {target} = event;
                if (!target.matches('button')) {
                    return;
                }

                if (target.classList.contains('orange')) {
                    if (target.value == "+") {
                        if (orange + green + purple < 7) orange++;
                        else alert("Too many tower cubes are recorded.");
                    } else if (orange > 0) orange--;
                    
                    console.log('orange', orange);
                }

                if (target.classList.contains('green')) {
                    if (target.value == "+") {
                        if (orange + green + purple < 7) green++;
                        else alert("Too many tower cubes are recorded.");
                    } else if (green > 0) green--;
                    
                    console.log('green', green);
                }

                if (target.classList.contains('purple')) {
                    if (target.value == "+") {
                        if (orange + green + purple < 7) purple++;
                        else alert("Too many tower cubes are recorded.");
                    } else if (purple > 0) purple--;
                    
                    console.log('purple', purple);
                }

                updateDisplay();
            });

            const redKeys = document.querySelector('.red');
            redKeys.addEventListener('click', (event) => {
                const {target} = event;
                if (!target.matches('button')) {
                    return;
                }

                if (target.classList.contains('orange')) {
                    if (target.value == "+") {
                        if (Rorange + Borange < 22) Rorange++;
                        else alert("Too cubes are recorded.");
                    } else if (Rorange > 0) Rorange--;
                    
                    console.log('Rorange', Rorange);
                }

                if (target.classList.contains('green')) {
                    if (target.value == "+") {
                        if (Rgreen + Bgreen < 22) Rgreen++;
                        else alert("Too cubes are recorded.");
                    } else if (Rgreen > 0) Rgreen--;
                    
                    console.log('Rgreen', Rgreen);
                }

                if (target.classList.contains('purple')) {
                    if (target.value == "+") {
                        if (Rpurple + Bpurple < 22) Rpurple++;
                        else alert("Too cubes are recorded.");
                    } else if (Rpurple > 0) Rpurple--;
                    
                    console.log('Rpurple', Rpurple);
                }

                updateDisplay();
            });

            const blueKeys = document.querySelector('.blue');
            blueKeys.addEventListener('click', (event) => {
                const {target} = event;
                if (!target.matches('button')) {
                    return;
                }

                if (target.classList.contains('orange')) {
                    if (target.value == "+") {
                        if (Rorange + Borange < 22) Borange++;
                        else alert("Too cubes are recorded.");
                    } else if (Borange > 0) Borange--;
                    
                    console.log('Borange', Borange);
                }

                if (target.classList.contains('green')) {
                    if (target.value == "+") {
                        if (Rgreen + Bgreen < 22) Bgreen++;
                        else alert("Too cubes are recorded.");
                    } else if (Bgreen > 0) Bgreen--;
                    
                    console.log('Bgreen', Bgreen);
                }

                if (target.classList.contains('purple')) {
                    if (target.value == "+") {
                        if (Rpurple + Bpurple < 22) Bpurple++;
                        else alert("Too cubes are recorded.");
                    } else if (Bpurple > 0) Bpurple--;
                    
                    console.log('Bpurple', Bpurple);
                }

                updateDisplay();
            });
        }
    </script>
</head>
<body>
<div>
    <div class="container">
        <div class="info">
            <table>
                <tr>
                    <td>
                        <input type="text" class="redScore score" value="" onclick="setRed()" disabled/>
                    </td>
                    <td>
                        <input type="text" class="blueScore score" value="" onclick="setBlue()" disabled/>
                    </td>
                </tr>
            </table>
            <input type="text" class="nextcube" value="" disabled/>
        </div>
        <div class="red">
            <div class="orange">
                <input type="text" class="rOrange" value="" disabled/>
                <table>
                    <tr>
                        <td>
                            <button class="orange" value="-">-</button>
                        </td>
                        <td>
                            <button class="orange" value="+">+</button>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="purple">
                <input type="text" class="rPurple" value="" disabled/>
                <table>
                    <tr>
                        <td>
                            <button class="purple" value="-">-</button>
                        </td>
                        <td>
                            <button class="purple" value="+">+</button>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="green">
                <input type="text" class="rGreen" value="" disabled/>
                <table>
                    <tr>
                        <td>
                            <button class="green" value="-">-</button>
                        </td>
                        <td>
                            <button class="green" value="+">+</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="tower">
            <div class="orange">
                <input type="text" class="mOrange" value="" disabled/>
                <table>
                    <tr>
                        <td>
                            <button class="orange" value="-">-</button>
                        </td>
                        <td>
                            <button class="orange" value="+">+</button>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="purple">
                <input type="text" class="mPurple" value="" disabled/>
                <table>
                    <tr>
                        <td>
                            <button class="purple" value="-">-</button>
                        </td>
                        <td>
                            <button class="purple" value="+">+</button>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="green">
                <input type="text" class="mGreen" value="" disabled/>
                <table>
                    <tr>
                        <td>
                            <button class="green" value="-">-</button>
                        </td>
                        <td>
                            <button class="green" value="+">+</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="blue">
            <div class="orange">
                <input type="text" class="bOrange" value="" disabled/>
                <table>
                    <tr>
                        <td>
                            <button class="orange" value="-">-</button>
                        </td>
                        <td>
                            <button class="orange" value="+">+</button>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="purple">
                <input type="text" class="bPurple" value="" disabled/>
                <table>
                    <tr>
                        <td>
                            <button class="purple" value="-">-</button>
                        </td>
                        <td>
                            <button class="purple" value="+">+</button>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="green">
                <input type="text" class="bGreen" value="" disabled/>
                <table>
                    <tr>
                        <td>
                            <button class="green" value="-">-</button>
                        </td>
                        <td>
                            <button class="green" value="+">+</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="info radios">
            <h1>Team</h1>
            <input type="radio" name="team" id="teamRed" onclick="setRed()" value="1" checked/><label class="teamRed"
                                                                                                      for="teamRed">Red</label>
            <input type="radio" name="team" id="teamBlue" onclick="setBlue()" value="2"/><label class="teamBlue"
                                                                                                for="teamBlue">Blue</label>
        </div>
        <div class="info radios">
            <h1>Auton</h1>
            <input type="radio" name="auton" id="None" onclick="autonNone()" value="2" checked/><label for="teamBlueA">None</label>
            <input type="radio" name="auton" id="teamRedA" onclick="autonRed()" value="1"/><label class="teamRed"
                                                                                                  for="teamRedA">Red</label>
            <input type="radio" name="auton" id="teamBlueA" onclick="autonBlue()" value="2"/><label class="teamBlue"
                                                                                                    for="teamBlueA">Blue</label>
        </div>
    </div>
</div>
</body>
</html>