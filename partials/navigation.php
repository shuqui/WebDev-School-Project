<nav class="navbar navbar-expand-lg navbar-light">

    <a class="navbar-brand mb-0 h1" href=/">F U R N I</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    
        <span class="navbar-toggler-icon"></span>
    
    </button>
    
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        
        <ul class="navbar-nav">
            
            <li class="nav-item">
                
                <a class="nav-link" href="/">Home</a>
            </li>
            
            <li class="nav-item">
                
                <a class="nav-link" href="/">Product</a>
            
            </li>
            
            <li class="nav-item">
                
                <a class="nav-link" href="/about.php">About</a>
            
            </li>
            
            <li class="nav-item">
                
                <a class="nav-link" href="/">Contact</a>
            
            </li>
            
            <li class="nav-item">
                
                <img class="nav-link" src="images/user.png" data-toggle="modal" data-target="#login">
            
            </li>
        
        </ul>
    
    </div>

</nav>

<div class="modal fade" id="login" role="dialog">

    <div class="modal-dialog modal-dialog-centered" role="document">
            
        <div class="modal-content">
            
            <img class="close" style="width:16px"src="images/close.png" class="close" data-dismiss="modal" aria-label="Close">
            
            <p id="title-modal">SIGN IN</p>
              
            <form action="" id="signin">
                
                <input class="login" type="text" placeholder="Your Username" required>
                
                <input class="login" type="password" placeholder="Password" required>
                
                <div class="remember-me-forgot-pass container">
                    
                    <div class="row">
                        
                        <div class="col remember-me">
                            
                            <input type="checkbox" class="form-check-input filled-in" checked>
                            
                            <label class="form-check-label">Remember me</label>
                        
                        </div>
                        
                        <div class="col forgot-pass">
                            
                            <a href="#">Forgot password?</a>
                        
                        </div>
                    
                    </div>
                
                </div>
                
                <button type="submit" class="btn btn-dark btn-lg btn-block">LOGIN</button>
                
                <button type="button" class="btn btn-secondary btn-lg btn-block" id="btn-signup" onclick="func_signup()">CREATE AN ACCOUNT</button>  
              
            </form>
              
            <form action="" id="register">
                
                <input class="login" type="text" placeholder="Email" required>
                
                <input class="login" type="password" placeholder="Password" required>
                
                <button type="submit" class="btn btn-dark btn-lg btn-block">REGISTER</button>
                
                <button type="button" class="btn btn-secondary btn-lg btn-block" id="btn-signup" onclick="func_signin()">ALREADY HAS AN ACCOUNT</button>  
            
            </form>

            
        </div>
        
    </div>
    
</div>


<script>
    function func_signup() 
    {
        
        document.getElementById("signin").style.display = "none";
        
        document.getElementById("signin").style.visibility = "hidden";
        
        document.getElementById("title-modal").innerHTML = "REGISTER";
        
        document.getElementById("register").style.display = "block";
        
        document.getElementById("register").style.visibility = "visible";
    }

    function func_signin() 
    {
        
        document.getElementById("title-modal").innerHTML = "SIGN IN";
        
        document.getElementById("signin").style.display = "block";
        
        document.getElementById("signin").style.visibility = "visible";
        
        document.getElementById("register").style.display = "none";
        
        document.getElementById("register").style.visibility = "hidden";
    
    }

</script>