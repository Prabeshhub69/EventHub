<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">    
    <link rel="stylesheet" href="css/register&login.css">
    <title>Register</title>
</head>
<body>

    <div class="form-register">    
        <div class="image-part col-md-6">
            <img src="{{ asset('images/bg.png') }}" alt="Background Image">
        </div>
        <form class="col-md-6" action="{{ route('register') }}" method="POST">
            @csrf
            <h2>Register Form</h2>
            <label for="name" class="label-register">Name</label>
            <input type="text" name="name" id="name" placeholder="Full Name">

            <label for="email" class="label-register">Email</label>
            <input type="email" name="email" id="email" placeholder="yourmail@example.com">

            <label  for="password" class="label-register">Password</label>
            <input type="password" name="password" id="password" placeholder="Set Your Password">
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>

            <div class="button-question">
                    <button type="submit">Register</button>
                    <a href="{{ route('login') }}">Already have an account?</a>
            </div>
            @if($errors->any())
                <div class="errors">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </form>
    </div>

</body>
</html>