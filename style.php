<style media="screen">
    body {
        animation: colorchange 50s; /* animation-name followed by duration in seconds*/
        /* you could also use milliseconds (ms) or something like 2.5s */
        -webkit-animation: colorchange 50s; /* Chrome and Safari */
        animation-iteration-count: infinite;
    }

    @keyframes colorchange {


        10% {
            background: #080c1c;
        }
        30% {
            background: #1a0a0c;
        }
        40% {
            background: #140d1f;
        }
        50% {
            background: #08292c;
        }
        60% {
            background: #110418;
        }
        70% {
            background: #06082a;
        }
        80% {
            background: #032c24;
        }
        90% {
            background: #1b0043;
        }
        100% {
            background: rgba(15, 14, 15, 0.14);
        }
    animation-iteration-count: infinite;
    }

    @-webkit-keyframes colorchange /* Safari and Chrome - necessary duplicate */
    {
        10% {
            background: #080c1c;
        }
        30% {
            background: #1a0a0c;
        }
        40% {
            background: #140d1f;
        }
        50% {
            background: #08292c;
        }
        60% {
            background: #110418;
        }
        70% {
            background: #06082a;
        }
        80% {
            background: #032c24;
        }
        90% {
            background: #1b0043;
        }
        100% {
            background: rgba(15, 14, 15, 0.14);
        }
    animation-iteration-count: infinite;
    }

    r {
        text-shadow: 2px 2px pink;
    }

    form.form {
        position: relative;
        text-align: center;
        padding-bottom: 30px;
        width: 10%;
    }

    form.form2 {
        position: relative;
        text-align: center;
        padding-bottom: 30px;
        width: 10%;
    }

    form.form3 {
        position: relative;
        text-align: center;
        padding-bottom: 30px;
        width: 10%;
    }

    form.form4 {
        position: relative;
        text-align: center;
        padding-bottom: 30px;
        width: 10%;
    }

    div.play iframe{
        position: fixed;
        padding-left: 20%;
        padding-top: 2%;
        width: 1280px;
        height: 720px;
        font-size: 1px;
        z-index: 100;

    }


    .AddASong a {
        position: static;
        padding-top: 20px;
        background-color: salmon;
        color: white;
        padding: 5px 10px;
        text-decoration: none;
        text-transform: lowercase;
    }

    /* unvisited link */

    a:link {
        color: black;
        text-shadow: 2px 2px pink;
    }

    /* mouse over link */
    a:hover {

        text-shadow: 2px 2px #e14fff;
    }

    a:visited {
        color: black;
        text-shadow: 2px 2px pink;
    }

    div.hyperlinks {
        text-align: center;
        font-size: 20px;

    }


    embed {
        position: absolute;
        left: 400px;
        top: 150px;
    }

    h1 {
        position: relative;
        text-align: center;
        color: black;
        font-size: 80px;
        text-shadow: 2px 2px pink;
    }

    h2 {
        font-size: 80px;
        position: relative;
        text-align: center;
        color: black;
        text-shadow: 2px 2px pink;
        margin-bottom: 2px;
    }

    h3 {
        font-size: 50px;
        position: relative;
        text-align: center;
        color: black;
        text-shadow: 2px 2px pink;
    }
    h4 {
        font-size: 20px;
        position: relative;
        text-align: center;
        color: black;
        text-shadow: 2px 2px pink;
    }

    h8 {
        font-size: 20px;
        position: relative;
        text-align: center;
        color: black;
        text-shadow: 2px 2px pink;
        margin-top: 2px;
        margin-bottom: 70px;
    }
    h9 {
        font-size: 15px;
        position: relative;
        text-align: center;
        color: black;
        text-shadow: 2px 2px pink;
        margin-top: 2px;
        margin-bottom: 70px;
    }

    picture {
        width: auto;
        position: relative;
        TOP: 35px;
        LEFT: 170px;

    }
    art{
        width: auto;
        position: relative;
        TOP: 35px;
        LEFT: 170px;
    }


    div.eatass {
        width: auto;
        position: relative;
        text-align: center;
    }

    label {
        position: relative;
        text-align: center;
        color: black;
        font-size: 20px;
        text-shadow: 2px 2px pink;
    }
    div.songs{
        position: relative;
        margin-top: 100px;
        text-align: center;
    }
    div.playlist{
        position: absolute;
        text-align: left;
        margin-top: 100px;
    }


    a.button {
        color: black;
        text-shadow: 2px 2px pink;
        font-family: "Times New Roman", Times, serif;
        text-decoration: underline;
    }

    div.wrapper {
        text-align: center;
        position: relative;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%)
    }

    div.main {
        font-family: "Times New Roman", Times, serif;
        font-size: 80px;
        padding-top: 50%;
        position: relative;
        text-align: center;
        color: black;
        font-size: 80px;
        text-shadow: 2px 2px pink;
    }

    p {
        font-family: "Times New Roman", Times, serif;
        position: relative;
        text-align: center;
        color: black;
        text-shadow: 2px 2px pink;
    }
    p1 {
        font-family: "Times New Roman", Times, serif;
        position: relative;
        text-align: center;
        color: black;
        text-shadow: 2px 2px pink;
    }

    input.submit {
        font-family: "Times New Roman", Times, serif;
        top: 10px;
        position: relative;
        bottom: 20px;
        left: 35px;
        background-color: salmon;
        color: white;
        padding: 5px 10px 10px;
        text-decoration: none;
        text-transform: lowercase;
    }

    a.link {
        font-family: "Times New Roman", Times, serif;
        top: 10px;
        position: relative;
        bottom: 20px;
        left: 35px;
        background-color: salmon;
        color: white;
        padding: 5px 10px 10px;
        text-decoration: none;
        text-transform: lowercase;
    }

    /* Customize the label (the container) */
    .radio {
        top: 50px;
        display: block;
        position: sticky;
        padding: 0;
        width: 150px;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }


    /* Hide the browser's default radio button */
    .radio input {
        position: sticky;
        opacity: 0;
        cursor: crosshair;
        height: 0;
        width: 0;
    }

    /* Create a custom radio button */
    .checkmark {
        position: sticky;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: black;
        border-radius: 50%;
    }

    /* On mouse-over, add a grey background color */
    .radio:hover input ~ .checkmark {
        background-color: Salmon;
    }

    /* When the radio button is checked, add a blue background */
    .radio input:checked ~ .checkmark {
        background-color: Salmon;
    }

    /* Create the indicator (the dot/circle - hidden when not checked) */
    .checkmark:after {
        content: "";
        position: sticky;
        display: none;
    }

    div.wrapper {
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
    }


</style>
