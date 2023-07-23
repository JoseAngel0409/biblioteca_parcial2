let loadMoreBtn1 = document.querySelector('#load-more-1');
let currentItem1 = 4;

loadMoreBtn1.onclick = () => {
    let boxes = [...document.querySelectorAll(
        '.box-container-1 .box-1'
    )];
    
    for(var i = currentItem1; i < currentItem1 + 4; i++){
        boxes[i].style.display = 'inline-block';
    }

    currentItem1 += 4;
    if(currentItem1 >= boxes.length){
        loadMoreBtn1.style.display = 'none'
    }
}


let loadMoreBtn2 = document.querySelector('#load-more-2');
let currentItem2 = 4;

loadMoreBtn2.onclick = () => {
    let boxes = [...document.querySelectorAll(
        '.box-container-2 .box-2'
    )];
    
    for(var i = currentItem2; i < currentItem2 + 4; i++){
        boxes[i].style.display = 'inline-block';
    }

    currentItem2 += 4;
    if(currentItem2 >= boxes.length){
        loadMoreBtn2.style.display = 'none'
    }
}

let loadMoreBtn3 = document.querySelector('#load-more-3');
let currentItem3 = 4;

loadMoreBtn3.onclick = () => {
    let boxes = [...document.querySelectorAll(
        '.box-container-3 .box-3'
    )];
    
    for(var i = currentItem3; i < currentItem3 + 4; i++){
        boxes[i].style.display = 'inline-block';
    }

    currentItem3 += 4;
    if(currentItem3 >= boxes.length){
        loadMoreBtn3.style.display = 'none'
    }
}

let loadMoreBtn4 = document.querySelector('#load-more-4');
let currentItem4 = 4;

loadMoreBtn4.onclick = () => {
    let boxes = [...document.querySelectorAll(
        '.box-container-4 .box-4'
    )];
    
    for(var i = currentItem4; i < currentItem4 + 4; i++){
        boxes[i].style.display = 'inline-block';
    }

    currentItem4 += 4;
    if(currentItem4 >= boxes.length){
        loadMoreBtn4.style.display = 'none'
    }
}

let loadMoreBtn5 = document.querySelector('#load-more-5');
let currentItem5 = 4;

loadMoreBtn5.onclick = () => {
    let boxes = [...document.querySelectorAll(
        '.box-container-5 .box-5'
    )];
    
    for(var i = currentItem5; i < currentItem5 + 4; i++){
        boxes[i].style.display = 'inline-block';
    }

    currentItem5 += 4;
    if(currentItem5 >= boxes.length){
        loadMoreBtn5.style.display = 'none'
    }
}

let loadMoreBtn6 = document.querySelector('#load-more-6');
let currentItem6 = 4;

loadMoreBtn6.onclick = () => {
    let boxes = [...document.querySelectorAll(
        '.box-container-6 .box-6'
    )];
    
    for(var i = currentItem6; i < currentItem6 + 4; i++){
        boxes[i].style.display = 'inline-block';
    }

    currentItem6 += 4;
    if(currentItem6 >= boxes.length){
        loadMoreBtn6.style.display = 'none'
    }
}

let loadMoreBtn7 = document.querySelector('#load-more-7');
let currentItem7 = 4;

loadMoreBtn7.onclick = () => {
    let boxes = [...document.querySelectorAll(
        '.box-container-7 .box-7'
    )];
    
    for(var i = currentItem7; i < currentItem7 + 4; i++){
        boxes[i].style.display = 'inline-block';
    }

    currentItem7 += 4;
    if(currentItem7 >= boxes.length){
        loadMoreBtn7.style.display = 'none'
    }
}