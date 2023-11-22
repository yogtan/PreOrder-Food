const imageProfile = document.querySelector("#profilePic");
const fileProfile = document.querySelector("#fileProfile");
const fileImage = document.querySelector("#bannerPenjual");
const file = document.querySelector("#file");
const placeholder = document.querySelector("#placeholderImage");
const imageBanner = document.querySelector("#imageBanner");
const placeHolder = document.querySelector("#placeHolder");


fileImage.addEventListener('click', function() {
    file.click();
})

file.addEventListener("change",function(){
    placeholder.classList.add("d-none");
    placeHolder.classList.add("d-none");
    const image = this.files[0];
    // console.log(image)
    const reader = new FileReader();
    reader.onload = () => {
        console.log("execute");
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


imageProfile.addEventListener("click",function() {
    fileProfile.click();
})

console.log(fileProfile)
fileProfile.addEventListener("change", function(){
    const image = this.files[0];
    const reader = new FileReader();
    reader.onload = () => {
        console.log("execute");
        const imgUrl = reader.result;
        imageProfile.src = imgUrl;
        imageProfile.alt = image.name;
        
    }
    reader.readAsDataURL(image);
})