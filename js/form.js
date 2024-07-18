document.addEventListener('DOMContentLoaded', (event) => {
    const signUpButton = document.getElementById('signUpButton');
    const signInButton = document.getElementById('signInButton');
    const showSignUpLink = document.getElementById('showSignUp');
    const showSignInLink = document.getElementById('showSignIn');
    const signInForm = document.getElementById('signIn');
    const signUpForm = document.getElementById('signup');

    showSignUpLink.addEventListener('click', function(e) {
        e.preventDefault();
        signInForm.style.display = "none";
        signUpForm.style.display = "block";
    });

    showSignInLink.addEventListener('click', function(e) {
        e.preventDefault();
        signInForm.style.display = "block";
        signUpForm.style.display = "none";
    });
});
