// NUMBER OF FTE + AND - THING
let minusBtn = document.getElementById("minus-btn");
let count = document.getElementById("number_employees");
let plusBtn = document.getElementById("plus-btn");

let countNum = 0;
count.value = countNum;

minusBtn.addEventListener("click", () => {
    if(countNum >= 1){
        countNum -= 1;
        count.value = countNum;
        minusBtn.classList.remove('inactive');
        plusBtn.classList.remove('inactive');


    } 
    if(countNum == 0) {
        minusBtn.classList.add('inactive');
    }

    $('.numbers .numbers-container .number input').attr('value', countNum);
});

plusBtn.addEventListener("click", () => {
    if(countNum <= 9){
        countNum += 1;
        count.value = countNum;
        minusBtn.classList.remove('inactive');
    }    
    
    if(countNum == 10) {
        plusBtn.classList.add('inactive');
    }

    $('.numbers .numbers-container .number input').attr('value', countNum);
});