<div>
    <form action="{{ route('login.submit') }}" method="POST">
        @csrf
        <div style="margin-top: 3px;">
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </div>
        <div style="margin-top: 3px;">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <div style="margin-top: 3px;">
            <input type="submit" name="input" value="Login">
        </div>
    </form>
</div>
