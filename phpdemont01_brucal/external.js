      function greetUser(){
     const username = document.getElementById('displayusername').innerText;
        const user_id = document.getElementById('displayuserID').innerText;
        const birthday = document.getElementById('displaybirthday').innerText;
        const age = document.getElementById('displayage').innerText;
        const sex = document.getElementById('displaysex').innerText;



        alert(`Hello ${username}. Your User ID is: ${user_id}, Your birthday is ${birthday} your age is ${age} and youre a ${sex}`);
    }
