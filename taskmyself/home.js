const productContainers = [...document.querySelectorAll('.product-container')];
const nextBtn = [...document.querySelectorAll('.next-btn')];
const preBtn = [...document.querySelectorAll('.pre-btn')];
productContainers.forEach((item, i) => {
    let containerDimension = item.getBoundingClientRect();
    let containerWidth = containerDimension.width;

    nextBtn[i].addEventListener('click',  () => {
        item.scrollLeft += containerWidth;
    })
    
    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })
    
})  