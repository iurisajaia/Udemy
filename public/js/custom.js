let modal=document.querySelector("#subscribe-form"),close=document.querySelector("#close-subscribe"),form=document.querySelector("#contact-form"),isModal=localStorage.getItem("subscribeForm");close.addEventListener("click",()=>{localStorage.setItem("subscribeForm",!0),modal.style.display="none"}),form.addEventListener("submit",()=>{localStorage.setItem("subscribeForm",!0),modal.style.display="none"}),isModal||(modal.style.display="flex");
