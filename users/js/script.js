// let topSearch = document.querySelector('#top-search,.search-btn');
let topInput = document.querySelector('#top-input');
let register = document.querySelector('.register');
let login = document.querySelector('.login');
let reg = document.querySelector('#reg');
let log = document.querySelector('#log');
let bringRegLink = document.querySelector('#bring-reg-link');
let bringLogLink = document.querySelector('#bring-log-link');
let type = document.querySelector('.type');

let password = document.querySelector('#passl');
let passr = document.querySelector('#passr');
let show = document.querySelector('.pass-check >  #show');
let hide = document.querySelector('.pass-check > #hide');
let showp = document.querySelector('.pass-check >  #showp');
let hidep = document.querySelector('.pass-check > #hidep');

// let navPop = document.querySelector('#nav-pop')
// let sideNav = document.querySelector('.side-nav')

    if(window.innerWidth > 980){
        topInput.onkeydown = (e)=>{
            topInput.style.width = '500px';
        }
    }else{
        topInput.onkeydown = (e)=>{
            topInput.style.width = '200px';
        }
    }

    reg.onclick = (e) =>{
        e.preventDefault()
        register.style.top = '25%';
        setTimeout(() => {
            register.style.top = '17%';
        }, 1000);
    }
    log.onclick = (e) =>{
        e.preventDefault()
        login.style.top = '30%';
        setTimeout(() => {
            login.style.top = '20%';
        }, 1000);
    }
    bringRegLink.onclick =(e)=>{
        e.preventDefault()
        reg.click()
        login.style.top = '-100vh';
    }
    bringLogLink.onclick =(e)=>{
        e.preventDefault()
        log.click()
        register.style.top = '-100vh';
    }


    hide.onclick = ()=>{
        password.type = 'text' 
        hide.classList.add('close-pass')
        show.classList.remove('close-pass')
    }
    
    show.onclick = ()=>{
        password.type = 'password' 
        show.classList.add('close-pass')
        hide.classList.remove('close-pass')
    }
    hidep.onclick = ()=>{
        passr.type = 'text' 
        hidep.classList.add('close-pass')
        showp.classList.remove('close-pass')
    }
    
    showp.onclick = ()=>{
        passr.type = 'password' 
        showp.classList.add('close-pass')
        hidep.classList.remove('close-pass')
    }
