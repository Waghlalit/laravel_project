<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GitHub SSH Demo</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: rgba(255,255,255,0.1);
            padding: 40px 60px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            text-align: center;
        }
        h1 {
            font-size: 2em;
            margin-bottom: 10px;
        }
        p {
            font-size: 1.1em;
            margin: 10px 0;
        }
        .steps {
            text-align: left;
            margin-top: 20px;
            background: rgba(255,255,255,0.15);
            padding: 15px;
            border-radius: 8px;
        }
        code {
            background: rgba(0,0,0,0.3);
            padding: 2px 6px;
            border-radius: 4px;
            color: #fff7a4;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🎉 GitHub SSH Demo Page</h1>
        <p>Your Laravel + GitHub SSH setup works perfectly!</p>
        <div class="steps">
            <h3>🧭 Steps you followed:</h3>
            <ol>
                <li>Generated an SSH key using <code>ssh-keygen</code>.</li>
                <li>Added the public key to GitHub under “SSH and GPG keys”.</li>
                <li>Tested the connection with <code>ssh -T git@github.com</code>.</li>
                <li>Cloned or installed Composer packages successfully.</li>
                <li>Now viewing this Blade demo via <code>/demo</code> route.</li>
            </ol>
        </div>
    </div>
</body>
</html>
