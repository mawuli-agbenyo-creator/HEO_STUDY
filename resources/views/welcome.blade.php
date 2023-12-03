<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Project Name</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 1em;
            text-align: center;
        }

        section {
            max-width: 800px;
            margin: 2em auto;
            padding: 2em;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        p {
            color: #666;
        }

        .cta-button {
            display: inline-block;
            padding: 0.8em 2em;
            text-decoration: none;
            color: #fff;
            background-color: #007BFF;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #0056b3;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    {{-- <header>
        <h1>Your Project Name</h1>
        <p>Welcome to our platform!</p>
    </header> --}}

    <section>
        <h2>Get Started</h2>
        <p>Welcome to our platform! Start your journey with us and explore a world of opportunities.</p>
        <p>Whether you are a student looking to register or an admin managing the system, we have you covered.</p>
        <a href="{{ route('std_reg') }}" class="cta-button">Sign Up Now</a>
    </section>
    

    <footer>
        &copy; 2023 HEO. All rights reserved.
    </footer>

</body>
</html>
