const cards = document.querySelectorAll('.card-inner');
for(let i=0; i<4; i++)
cards[i].addEventListener('click', function (){
    cards[i].classList.toggle('is-flipped');
} 
);