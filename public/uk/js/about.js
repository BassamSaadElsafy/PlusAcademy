
const data = {
    1:{
        title:"Training Quality",
        desc:"We, in the UK International Academy for Professional Training, are keen to provide our trainees with the high-quality training, diplomas and camps by highly experienced trainers, which help the trainees extract several graduation projects that test their competence and be evaluated with high-quality standards.",
        img:"img/tab1.jpg"
    },
    2:{
        title:"Our vision",
        desc:"We seek to upgrade our trainees professionally and academically through our various programs so that they reach their professional and educational goals.",
        img:"img/tab2.jpg"
    },
    3:{
        title:"Administration",
        desc:"The Academy supervisors are keen to maintain the training quality and pay attention to the trainees' views about the programs they have received and the continuous improvement of the programs offered.",
        img:"img/tab3.jpg"
    }
}

const lis = document.querySelectorAll(".changeInfo ul li")
const tabs = document.getElementById("tabs")
lis.forEach(li => {
    li.onclick = function() {
        lis.forEach(item => item.classList.remove("active"))
        this.classList.add("active")
        console.log(this.dataset.tap)
        const id = this.dataset.tap
        tabs.innerHTML = `
            <h3 class="mb-4">${data[id].title}</h3>
            <p>${data[id].desc}</p>
            <img src="${data[id].img}" class="img-fluid mt-3" alt="">
        `
    }
})
console.log(lis)

window.addEventListener("resize",setSlides)

function setSlides(){
    function slidesPerView(arg1,arg2){
        if(window.innerWidth < 992) return arg1
        else return arg2
    }
    
    var mySwiper = new Swiper('.swiper-container', {
        loop: true,
        slidesPerView: slidesPerView(1,2),
        spaceBetween: 30,
        // If we need pagination
        pagination: {
          el: '.swiper-pagination',
        },
      
    
      
      })
}
setSlides()
