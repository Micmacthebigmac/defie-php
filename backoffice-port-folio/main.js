document.getElementById('input-Submit').addEventListener('click',function(event){
    let password = document.getElementById('input-password').value;
    let confirmation = document.getElementById('input-confirmation').value;
    console.log(password);
    console.log(confirmation);
if (password != confirmation) {
    document.getElementById('error').innerHTML = "les mots de passes sont pas bon !";
    document.getElementById('error').style.color = "red";
    event.preventDefault();
} else {
    
}
});