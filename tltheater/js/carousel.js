const track = document.querySelector('.carousel__track');
const slides = Array.from(track.children);
console.log(track);
const nextbutton =document.querySelector('.carousel__button--right');
const prevbutton =document.querySelector('.carousel__button--left');
const dotnavs = document.querySelector('.carousel__nav');
const dots= Array.from(dotnavs.children);

const slideWidth = slides[0].getBoundingClientRect().width;
//arranging the slides next to one another
const setSlidePosition = (slide,index)=>{
    slide.style.left = slideWidth*index + 'px';
}
slides.forEach(setSlidePosition);
//fuction for prev and next slide movement
const movetoSlide =(track,currentSlide,targetSlide) => {
    track.style.transform = 'translateX(-' + targetSlide.style.left + ')';
    currentSlide.classList.remove('current-slide');
    targetSlide.classList.add('current-slide');
}
const updatedots = (currentDot,targetDot) => {
    currentDot.classList.remove('current-slide');
    targetDot.classList.add('current-slide');
}

const hideshownav = (slides,prevbutton,nextbutton,targetindex)=>{
    if (targetindex===0){
        prevbutton.classList.add('is-hidden');
        nextbutton.classList.remove('is-hidden');
    } else if (targetindex===slides.length-1){
        prevbutton.classList.remove('is-hidden');
        nextbutton.classList.add('is-hidden');
    } else {
        prevbutton.classList.remove('is-hidden');
        nextbutton.classList.remove('is-hidden');
    }
}

//left click on button
prevbutton.addEventListener('click', e=>{
    const currentSlide = track.querySelector('.current-slide');
    const prevSlide = currentSlide.previousElementSibling;
    const currentDot =dotnavs.querySelector('.current-slide');
    const prevDot = currentDot.previousElementSibling;
    const previndex = slides.findIndex(slide=> slide ===prevSlide)
// move to the previous slide
    console.log(prevSlide);
    movetoSlide(track,currentSlide,prevSlide);
    updatedots(currentDot,prevDot);
    hideshownav(slides,prevbutton,nextbutton,previndex);    
})
//right click on button
nextbutton.addEventListener('click', e =>{
    const currentSlide = track.querySelector('.current-slide');
    const nextSlide = currentSlide.nextElementSibling;
    const currentDot =dotnavs.querySelector('.current-slide');
    const nextDot = currentDot.nextElementSibling;
    const nextindex = slides.findIndex(slide=> slide ===nextSlide)
// move to the next slide
    console.log(nextSlide);
    movetoSlide(track,currentSlide,nextSlide);
    updatedots(currentDot,nextDot);
    hideshownav(slides,prevbutton,nextbutton,nextindex);  
})

dotnavs.addEventListener('click',e =>{
    //which indicator was clicked on
    const targetDot = e.target.closest('button');
    if (!targetDot) return;
    const currentSlide = track.querySelector('.current-slide');
    const currentDot = dotnavs.querySelector('.current-slide')
    const targetindex = dots.findIndex(dot => dot ===targetDot);
    const targetSlide = slides[targetindex];
    console.log(targetindex);
    movetoSlide(track,currentSlide,targetSlide)
    updatedots(currentDot,targetDot);
    hideshownav(slides,prevbutton,nextbutton,targetindex);
})

