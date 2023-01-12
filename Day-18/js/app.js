document.addEventListener("DOMContentLoaded", function() {
    init();
});

const init = () =>{


    const grids = document.getElementsByClassName('grid');

    gridEls = Array.from(grids);

    gridEls.forEach(element => {
            element.addEventListener('click', handleClickOnGrid);
    });
};

const handleClickOnGrid = (e) =>  {
    const grid = e.currentTarget;
    const clr = randomColorGenerator();
    grid.style.backgroundColor =  clr;
};

const randomColorGenerator =  () =>
{
    const r = Math.floor(Math.random() * 255) 
    const g = Math.floor(Math.random() * 255) 
    const b = Math.floor(Math.random() * 255) 

    const rgb = `rgb(${r},${g},${b})`;
    return rgb
}