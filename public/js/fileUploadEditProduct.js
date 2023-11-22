const fileImage = document.querySelector("#bannerProduk");
const file = document.querySelector("#file");
const imageBanner = document.querySelector("#imageProduct");
const placeholder = document.querySelector("#placeholder");

fileImage.addEventListener('click', function() {
    file.click();
})

file.addEventListener("change",function(){
    placeholder.classList.add("d-none");
    const image = this.files[0];
    // console.log(image)
    const reader = new FileReader();
    reader.onload = () => {
        const imgUrl = reader.result;
        imageBanner.src = imgUrl;
        imageBanner.style.width="100%";
        imageBanner.classList.remove("d-none");
        imageBanner.classList.add("d-block");
        imageBanner.alt= image.name;
        fileImage.appendChild(imageBanner);
    }
    reader.readAsDataURL(image);
})