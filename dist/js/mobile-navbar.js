const navSlide = () => {
    const burger = document.querySelector('.mobile-menu');
    const nav = document.querySelector('.nav-list');
    const navLinks = document.querySelectorAll('.nav-list li');
    
    burger.addEventListener('click', ()=>{
         nav.classList.toggle('nav-active');

    navLinks.forEach((link, index) => { 
        if(link.style.animation){
            link.style.animation = '';
        }else{
            link.style.animation = `navlinkFade 0.5s ease forwards ${index/7+1.5}s`  

        }
    });
    burger.classList.toggle('toggle');

    });


}

navSlide();