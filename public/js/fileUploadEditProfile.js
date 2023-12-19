const fileImage = document.querySelector('#bannerPenjual')
const file = document.querySelector('#file')
const imageBanner = document.querySelector('#imageBanner')
const placeHolder = document.querySelector('#placeholder')

fileImage.addEventListener('click', function () {
    file.click()
})

file.addEventListener('change', function () {
    placeholder.classList.add('d-none')
    const image = this.files[0]
    // console.log(image)
    const reader = new FileReader()
    reader.onload = () => {
        console.log('execute')
        console.log(imageBanner)
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
