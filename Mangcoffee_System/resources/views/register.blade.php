<form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
    @csrf

    <input name="username" required placeholder="Username" />
    <input name="firstname" required placeholder="First Name" />
    <input name="middlename" placeholder="Middle Name" />
    <input name="lastname" required placeholder="Last Name" />
    <input name="address" required placeholder="Address" />
    <input type="file" name="image" accept="image/*" />
    <input type="email" name="email" required placeholder="Email" />
    <input type="password" name="password" required placeholder="Password" />
    <input type="password" name="password_confirmation" required placeholder="Confirm Password" />

    <button type="submit">Register</button>
</form>
