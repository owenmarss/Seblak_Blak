document.addEventListener("DOMContentLoaded", function() {
    const profileDiv = document.querySelector("#profile")
    
    profileDiv.addEventListener("mouseenter", function() {
        var arrowIcon = document.querySelector("#arrowDown")

        if(arrowIcon) {
            arrowIcon.classList.add("rotate-180")
        }
    })
    
    profileDiv.addEventListener("mouseleave", function() {
        var arrowIcon = document.querySelector("#arrowDown")
        
        if(arrowIcon) {
            arrowIcon.classList.remove("rotate-180")
        }
    })
})