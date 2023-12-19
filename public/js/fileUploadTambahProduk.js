const fileImage = document.querySelector('#fotoProduk')
const file = document.querySelector('#fileFotoProduk')
const imageBanner = document.querySelector('#fotoProduk2')
const placeholder = document.querySelector('#placeholder')

fileImage.addEventListener('click', function () {
    file.click()
})

file.addEventListener('change', function () {
    placeholder.classList.add('d-none')
    const image = this.files[0]
    // console.log(image)
    const reader = new FileReader()
    console.log('coba')
    reader.onload = () => {
        const imgUrl = reader.result
        imageBanner.src = imgUrl
        imageBanner.style.width = '100%'
        imageBanner.classList.remove('d-none')
        imageBanner.classList.add('d-block')
        imageBanner.alt = image.name
        fileImage.appendChild(imageBanner)
    }
    reader.readAsDataURL(image)
})
