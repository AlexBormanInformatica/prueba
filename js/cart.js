
document.addEventListener("DOMContentLoaded", function () {
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })

    var colorBoxes = document.querySelectorAll(".color-box");
    var selectedColor = document.querySelector(".selected-variation-item-name");
    colorBoxes.forEach(colorBox => {
        colorBox.addEventListener("click", function () {
            colorBoxes.forEach(box => {
                box.classList.remove("active");
            });

            this.classList.add("active");

            var variationDiv = document.querySelector(".variation.single_variation");
            variationDiv.style.display = "block";

            const altText = this.querySelector("img").alt;
            selectedColor.textContent = ": " + altText;
        });
    });
});


$('a.remove').click(function (event) {
    event.preventDefault();
    $(this).parent().parent().hide(400);

})

// Just for testing, show all items
$('a.btn.continue').click(function () {
    $('li.items').show(400);
})

