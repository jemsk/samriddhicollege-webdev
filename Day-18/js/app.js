document.addEventListener("DOMContentLoaded", function() {
    init();
});

const init = () =>{



};

const randomColorGenerator =  () =>
{
    const r = Math.floor(Math.random() * 255) 
    const g = Math.floor(Math.random() * 255) 
    const b = Math.floor(Math.random() * 255) 

    const rgb = `rgb(${r},${g},${b})`;
    return rgb
}