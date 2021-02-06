console.log(" I AM HERE");

let createButton = document.getElementById('create-button');
let createForm = document.querySelector('.create-form');
console.log(createForm)
console.log(createButton);
let isCreateFormDisplaying = false;
let count = 1


createButton.onclick = () => {
    // console.log("i am clicked ->" + count + "times")
    // count++
    if(!isCreateFormDisplaying){
        createForm.style.display = "block";
        isCreateFormDisplaying = true;
    }else {
        createForm.style.display = "none";
        isCreateFormDisplaying = false;
    }
    
}

