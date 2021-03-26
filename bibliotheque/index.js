// const openModalButtons = document.querySelectorAll('[data-modal-target]')
// const closeModalButtons = document.querySelectorAll('[data-close-button]')
// const overlay = document.getElementById('overlay')

// openModalButtons.forEach(button => {
//     button.addEventListener('click', () => {
//         const modal = document.querySelector(button.CDATA_SECTION_NODE.modalTarget)
//         openModal(modal)
//     })
// })

// function openModal(modal) {
//     if(modal == null) return
//     modal.classList.add('active')
//     overlay.classList.add('active')
// }


// closeModalButtons.forEach(button => {
//     button.addEventListener('click', () => {
//         const modal = button.closest('.modal')
//         closeModal(modal)
//     })
// })

// function closeModal(modal) {
//     if(modal == null) return
//     modal.classList.remove('active')
//     overlay.classList.remove('active')
// }

// //
// function openModal () {
//     document.getElementById(modal-form).style.top = "Opx"; 
// //}
// let modal = null 

// const openModal = function (e) {
//     e.preventDefault()
//     const target = document.querySelector(e.target.getAttribute('href'))
//     target.style.display = null 
//     target.setAttribute('aria-hidden', false)
//     target.setAttribute('aria-modal', 'true')
//     modal = target
//     modal.addEventListener('click', closeModal )
//     modal.querySelector('.close-button').addEventListener('click', closeModal)
// }
 
// const openModal = function (e) {
//     if (modal === null) returnn
//     e.preventDefault() 
//     modal.style.display = "none" 
//     modal.setAttribute('aria-hidden', 'true')
//     modal.removeAttribute('aria-modal', 'true')  
//     modal.removeEventListener('click', closeModal ) 
//     modal.querySelector('.close-button').removeEventListener('click', closeModal)
//     modal = null
// }

//  document.querySelectorAll('.js-modal').forEach( a => {
//      a.addEventListener('click',openModal)
     
//  })



// var modal = document.getElementById("myModal");

// var btn = document.getElementById("modal-btn");

// var span = document.getElementById("close-button")[0];

// btn.onclick = function() {
//     modal.style.display = "block";
// }

// span.onclick = function() {
//     modal.style.display = "none";
// }

// window.onclick = function(event) {
//     if (event.target == modal) {
//         modal.style.display = "none";
//     }
// }