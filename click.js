
let btn = document.querySelector(".btnlike1");
let countDOM1 = document.querySelector(".like1");
let like1 = 0;
btn.forEach(btn => {
    btn.addEventListener("click", function(){
        if(like1 == 0) {
            like1 = 1;
            countDOM1.textContent = like1;
        }else{
            like1 = 0;
            countDOM1.textContent = like1;
        }
    })
})