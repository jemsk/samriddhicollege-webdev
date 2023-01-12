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
    addQuoteToGrid(grid);
};

const randomColorGenerator =  () =>
{
    const r = Math.floor(Math.random() * 255) 
    const g = Math.floor(Math.random() * 255) 
    const b = Math.floor(Math.random() * 255) 

    const rgb = `rgb(${r},${g},${b})`;
    return rgb
}


const addQuoteToGrid = (quoteEl) => {
    console.log(" JEMS")
    let apiUrl = "https://api.quotable.io/random";
    fetch(apiUrl).then( res => {
        // console.log(res.status);
        return res.json();

    }).then(
        data => {
            quote = data
            quoteHtml = ` <div class ="quote">${quote.content}
                <div class="author">- ${quote.author}</div>
            </div>`;
            quoteEl.innerHTML = quoteHtml
        }
    );
}