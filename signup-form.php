<form class="contact-form" method="POST" enctype="multipart/form-data">
    <fieldset>
        <legend>AJAX Signup Form</legend>

        <div id="signup_response" class="response_error"></div>

        <div>
            <label for="name">Username</label> 
            <input type="text" name="username" id="username" placeholder="username">
        </div>

        <div>
            <label for="email">Email</label> 
            <input type="text" name="email" id="email" placeholder="Email">
        </div>

        <div>
            <label for="email">Password</label> 
            <input type="password" name="password" id="password" placeholder="Password">
        </div>

        <div>
            <label for="msg">Upload profile</label> 
            <input type="file" id="profile" name="profile">
        </div>

        <div>

            <input type="button" value="Submit" onclick="return false;" onmousedown="signup();">

            <a href="#" onclick="login_page()">Already have account? Login</a>
        </div>




    </fieldset>
</form>