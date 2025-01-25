let inputFile = document.querySelector("#imageInput");
let span = document.querySelector("span");

inputFile.addEventListener("change", e => {
    let inputTarget = e.target;
    let file = inputFile.files[0];

    span.innerHTML = "";

    if(file){
        let reader = new FileReader();
        reader.addEventListener("load", e => {
            let readerTarget = e.target;
            let img = document.createElement("img");
            img.src = readerTarget.result;
            span.appendChild(img);
        });

        reader.readAsDataURL(file);
    }
});