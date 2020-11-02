const username = document.getElementById('username');
const password = document.getElementById('password');
const form = document.getElementById('form');
const errors = document.getElementById('errors')

form.addEventListener('submit', (e)=>{
    let message = []
    if(username.value === '' || username.value==null){
        message.push('username is required')
    }
    if (message.length>0){
        e.preventDefault();
        errors.innerText = message.join(', ')
    }
})