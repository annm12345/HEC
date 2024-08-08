//change nav bar style on scroll

window.addEventListener('scroll',()=>{
    document.querySelector('nav').classList.toggle('window-scroll',window.scrollY>0)
})

//show/hide nav menu
const menu=document.querySelector('.nav_menu');
const menuBtn=document.querySelector('#open-menu-btn');
const closeBtn=document.querySelector('#close-menu-btn');

menuBtn.addEventListener('click',()=>{
    menu.style.display="grid";
    closeBtn.style.display="inline-block";
    menuBtn.style.display="none";
})

//close nav bar
const closeNav=()=>{
    menu.style.display="none";
    closeBtn.style.display="none";
    menuBtn.style.display="inline-block";
}

closeBtn.addEventListener('click',closeNav
)

//Show /hide faq answer
const faqs=document.querySelectorAll('.faq');

faqs.forEach(faq=>{
    faq.addEventListener('click',()=>{
        faq.classList.toggle('open');
        //change icon
        const icon=faq.querySelectorAll('.faq_icon i');
        if(icon.className==='fa-solid fa-plus'){
            icon.className='fa-solid fa-minus';
        }
    })
})


//hide/show noti
var noti=document.querySelector('.noti_detail');
var show=document.querySelectorAll('#open');
var down=false;

function notification(){   
        if(down){
            noti.style.display="none";
            down=false;
        }else{
        noti.style.display="block";
        down=true;
    }
}


//identification login
var login=document.querySelector('.login');
var login_stu=document.querySelector('.login_stu');
var teacher=document.querySelector('#teacher');
var student=document.querySelector('#student');
var none=document.querySelector('.hide');
var hide=document.querySelector('.none');

teacher.addEventListener('click',()=>{
    login.style.display='block';
    login_stu.style.display='none';
})
student.addEventListener('click',()=>{
    login_stu.style.display='block';
    login.style.display='none';
})

none.addEventListener('click',()=>{
    login.style.display='none';
    login_stu.style.display='none';
})
hide.addEventListener('click',()=>{
    login_stu.style.display='none';
})


